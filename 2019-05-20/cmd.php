<?php
error_reporting(0);
$go = $_POST['go'];
if ($go != "") {

	$i = 0;
	$count = 1;
	while($emails[$i]){
		$ok = "ok";
		$random = rand(1,100000);
		$headers  = "MIME-Version: 1.0\n";
	    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
		$headers .= "Content-Transfer-encoding: 8bit\n";
	
		$headers .= "X-Priority: 1\n";
		if (mail($emails[$i], $assunto." - ".$random."", $mensagem."<br><font color=#FFF>".$random."</font>", $headers))
		echo "<center><font color=gren> N - $count - <b>".$emails[$i]."</b> - <font color=gren>SUCESSO</font></center><br>";
	
		if($ok == "ok")
		echo "<center>FIM DO ENVIO</center>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Malware Mail</title>
<meta charset="utf-8">
<style type="text/css">
* { box-sizing: border-box; font-family: Arial, Sans-serif; font-size: 14px; }
body { : 300px; margin: 0 auto; }
#enviar { width: 96.8%; height: 40px; background: #3E3E3E; color: #FFF; border-radius: 3px; border:none; border-bottom: 5px solid #353535; cursor: pointer; font-size: 18px; font-weight: bold; outline: none; }
</style>
</head>
<body>
