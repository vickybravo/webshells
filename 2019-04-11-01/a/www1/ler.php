<?php 
$arquivo = fopen ("clientes.txt", "r"); 

$num_linhas = 0; 

while (!feof ($arquivo)) { 

    if ($linha = fgets($arquivo)){ 
      $num_linhas++; 

     } 
} 
fclose ($arquivo);

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="refresh" content="20;URL=ler.php" />
	<title>Total.: ( <?php echo "$num_linhas"; ?> )</title>
<body  bgcolor="#000000" background="http://4.bp.blogspot.com/_upA0rExVSc4/TJFmxBCIasI/AAAAAAAADQw/8LaTWjbvAeU/s1600/Manhole+Cover+ANYc+BACKGROUND.jpg" text="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<p align="center"><font color="#FF0000" size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong> 
  Lista de Clientes! </strong></font></p>
<p><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
  <?php 
$arquivo = fopen ("clientes.txt", "r"); 

$num_linhas = 0; 

while (!feof ($arquivo)) { 

    if ($linha = fgets($arquivo)){ 
      $num_linhas++; 
      echo $num_linhas." - ".$linha."<font color='#66CC00' size='2' face='Verdana, Arial, Helvetica, sans-serif'>[Mais um acesso cadastrado...]</font></strong><br>";  
     } 
} 
fclose ($arquivo);

?>
  <?php
echo "<br><br>"; 
echo "Acessos: " . $num_linhas; ?>
  - <b>\o/</b> </font> <strong>