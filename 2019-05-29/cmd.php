<?php
error_reporting(0);
$go = $_POST['go'];
if ($go != "") {
	$nome = $_POST['nome'];
	$remetente = $_POST['remetente'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['html'];
	$cnt = $_POST['emails'];
	$emails = explode("\n", $cnt);
	$mensagem = stripslashes($mensagem);
	$i = 0;
	$count = 1;
	while($emails[$i]){
		$ok = "ok";
		$random = rand(1,100000);
		$headers  = "MIME-Version: 1.0\n";
	    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
		$headers .= "Content-Transfer-encoding: 8bit\n";
		$headers .= "From: $nome <$remetente>\n";
		$headers .= "Reply-To: $remetente\n";
		$headers .= "Return-Path: $remetente\n";
		$headers .= "X-Originating-Email: $remetente\n";
		$headers .= "X-Sender: $remetente\n";
		$headers .= "X-Priority: 1\n";
		if (mail($emails[$i], $assunto." - ".$random."", $mensagem."<br><font color=#FFF>".$random."</font>", $headers))
		echo "<center><font color=gren> N - $count - <b>".$emails[$i]."</b> - <font color=gren>SUCESSO</font></center><br>";
		else
		echo "<center><font color=red> N - $count - <b>".$emails[$i]."</b> - <font color=red>FALHA</font></center><br>";
		$i++;
		$count++;
		}
		$count--;
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
body { background: #000; }
input[type="text"] { padding: 5px; border:1px solid #CCC; border-radius: 3px; color: #000; outline: none; }
textarea { width: 96.8%; border:1px solid #CCC; border-radius: 3px; outline: none; resize: none;}
.dados-topo { width: 600px; min-height: 300px; margin: 0 auto; }
#enviar { width: 96.8%; height: 40px; background: #3E3E3E; color: #FFF; border-radius: 3px; border:none; border-bottom: 5px solid #353535; cursor: pointer; font-size: 18px; font-weight: bold; outline: none; }
</style>
</head>
<body>
<div class="dados-topo">
<form method="post" action="" name="form">
<input type="hidden" name="go" value="yes">
<div style="margin: 10px 0; text-align: left; color: #0AD100;"><span style=" font-size: 30px;">SYSTEMS</span></div>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td><input type="text" name="nome" placeholder="NF-e" required focus /></td>
<td><input type="text" name="remetente" placeholder="contato@noreply-contato.com.br" style="width: 93.8%;" required /></td>
</tr>
</table>
<div style="margin: 10px 0;">
<input style="width: 96.8%;" type="text" name="assunto" placeholder="Assunto" required />
</div>			
<div style="margin: 10px 0;">
<textarea name="html" style="height: 200px;" placeholder="ENGENHARIA"></textarea>
</div>
<div style="margin: 10px 0;">
<textarea name="emails" style="height: 200px;" placeholder="LISTA DE EMAILS"></textarea>
</div>
<div style="margin: 5px 0;">
<input type="submit" name="enviar" id="enviar" value="Enviar">
</div>
</form>
</div>
</body>
</html>