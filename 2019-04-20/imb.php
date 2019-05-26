<html>
<head>
<title>Oare ce sa fie</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#D5E6FA" text="#000000">
<?

if ($action=="send"){
	$message = urlencode($message);
	$message = ereg_replace("%5C%22", "%22", $message);
	$message = urldecode($message);
	$message = stripslashes($message);
	$subject = stripslashes($subject);
}

?>
<body bgcolor="#D5E6FA">
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <div align="center">    <font color="#0099CC" size="6"><strong><font color="#000000" size="4" face="Tahoma">Rain Elf 
  </font></strong></font>  </div>
  <table width="100%" border="0">
    <tr> 
      <td width="10%"> 
        <div align="right"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Your 
      Email:</font></div></td>
      <td width="20%"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="text" name="from" value="<? print $from; ?>" size="30">
        </font></td>
      <td width="32%"> 
        <div align="right"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Your 
          Name:</font></div>
      </td>
      <td width="38%"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="text" name="realname" value="<? print $realname; ?>" size="30">
        </font></td>
    </tr>
    <tr> 
      <td width="10%"> 
        <div align="right"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Reply-To:</font></div>
      </td>
      <td width="20%"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="text" name="replyto" value="<? print $replyto; ?>" size="30">
        </font></td>
      <td width="32%"> 
        <div align="right"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Attach 
          File:</font></div>
      </td>
      <td width="38%"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="file" name="file" size="30">
        </font></td>
    </tr>
    <tr> 
      <td width="10%"> 
        <div align="right"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Subject:</font></div>
      </td>
      <td colspan="3"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif"> 
        <input type="text" name="subject" value="<? print $subject; ?>" size="75">
        </font></td>
    </tr>
    <tr valign="top"> 
      <td colspan="3"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif"> 
        <textarea name="message" cols="70" rows="10"><? print $message; ?></textarea>
        <br>
        <input type="radio" name="contenttype" value="plain">
        Plain 
        <input name="contenttype" type="radio" value="html" checked>
        HTML 
        <input type="hidden" name="action" value="send">
        <input type="submit" value="Send Message">
        </font></td>
      <td width="38%"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif"> 
        <textarea name="emaillist" cols="40" rows="10"><? print $emaillist; ?></textarea>
        <br>
        <a href="">Load Addresses from MySQL</a></font></td>
    </tr>
  </table>
</form>


<?
if ($action=="send"){

	if (!$from && !$subject && !$message && !$emaillist){
	print "Please complete all fields before sending your message.";
	exit;
	}
	
	$allemails = split("\n", $emaillist);
	$numemails = count($allemails);

	#Open the file attachment if any, and base64_encode it for email transport
	If ($file_name){
		@copy($file, "./$file_name") or die("The file you are trying to upload couldn't be copied to the server");
		$content = fread(fopen($file,"r"),filesize($file));
		$content = chunk_split(base64_encode($content));
		$uid = strtoupper(md5(uniqid(time())));
		$name = basename($file);
	}
	
	for($x=0; $x<$numemails; $x++){
		$to = $allemails[$x];
		if ($to){
		$to = ereg_replace(" ", "", $to);
		$message = ereg_replace("&email&", $to, $message);
		$subject = ereg_replace("&email&", $to, $subject);
		print "Sending mail to $to ..... ";
		flush();
		$header = "From: $realname <$from>\r\nReply-To: $replyto\r\n";
		$header .= "MIME-Version: 1.0\r\n";
		If ($file_name) $header .= "Content-Type: multipart/mixed; boundary=$uid\r\n";
		If ($file_name) $header .= "--$uid\r\n";
		$header .= "Content-Type: text/$contenttype\r\n";
		$header .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
		$header .= "$message\r\n";
		If ($file_name) $header .= "--$uid\r\n";
		If ($file_name) $header .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
		If ($file_name) $header .= "Content-Transfer-Encoding: base64\r\n";
		If ($file_name) $header .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n\r\n";
		If ($file_name) $header .= "$content\r\n";
		If ($file_name) $header .= "--$uid--";
		mail($to, $subject, "", $header);
		print "<strong>Success</strong><br>";
		flush();
		}
		}

}
?>
</body>
</html>