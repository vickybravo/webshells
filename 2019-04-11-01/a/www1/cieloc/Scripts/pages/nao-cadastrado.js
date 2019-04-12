$(document).ready(function (e) {
    $('.dica').click(function (e) {

        if ($('.dica').children('.dica-box').css('display') == 'none') {
            $('.dica').children('.dica-box').css({ 'display': 'block' });
        } else {
            $('.dica').children('.dica-box').css({ 'display': 'none' });
        }
    });

    
    $('.prereq').blur(function (e) {
        e.preventDefault();
        ValidarEmail();
        ValidarCelular();
    });


    $('#btnSugestaoSim').click(function (e) {
        e.preventDefault();
        $('#EmailConfirmacao').val('');
        $('#Email').val($('#lblSugestao').html());
        $('#hdnEmail').val($('#lblSugestao').html());
        $('#divSugestao').hide(200);
        $('#EmailConfirmacao').focus();
    });

    $('#btnSugestaoNao').click(function (e) {
        e.preventDefault();
        $('#Email').val('');
        $('#EmailConfirmacao').val('');
        $('#divSugestao').hide(200);
        $('#Email').focus();
    });

    var emailTeste = $('#Email').val();
    var ecTeste = $('#EC').val();
    var cnpjTeste = $('#CNPJ').val();

    if (emailTeste.length > 0 && ecTeste.length > 0 && cnpjTeste.length > 0) {
        $('#hdnEmail').val(emailTeste);
        $('#hdnEc').val(ecTeste);
        $('#hdnCnpj').val(cnpjTeste);
    }

    $('#divSugestao').hide();
    $('#divCelularInvalido').hide();

    $('#Celular').mask('(99)99999-9999');
    $('#EC').mask('9999999999');
    $('#CNPJ').mask('99.999.999/9999-99');
});

function ValidouEmail() {
    var validou = $('#hdnEmailValido').val();

    if (validou == '0') {
        ValidarEmail();
        return false;
    }
    else
        return true;
}

function AjaxStart() {
    $('body').before('<div id="loading-overlay" style=" width:100%; height:100%; background:#000; position:fixed;zoom:1; filter:alpha(opacity=70); opacity: 0.7;z-index:98;" />');
    $('body').prepend('<img class="img-loading" src="' + BASE_URL + 'Content/img/loading.gif" style=" width:32px; height:32px; position:fixed;z-index:99;" />');
    $('.img-loading').css('left', '50%');
    $('.img-loading').css('margin-left', ($('.img-loading').width() / 2) * -1);
    $('.img-loading').css('top', '50%');
    $('.img-loading').css('margin-top', ($('.img-loading').height() / 2) * -1);

    $(window).resize(function () {
        $('.img-loading').css('left', '50%');
        $('.img-loading').css('margin-left', ($('.img-loading').width() / 2) * -1);
        $('.img-loading').css('top', '50%');
        $('.img-loading').css('margin-top', ($('.img-loading').height() / 2) * -1);
    });
}

function AjaxStop() {
    $('#loading-overlay').remove();
    $('.img-loading').remove();
}

function DesabilitaTab() {
    document.onkeypress = function (evt) {
        var key_code = evt.keyCode ? evt.keyCode :
						   evt.charCode ? evt.charCode :
						   evt.which ? evt.which : void 0;

        if (key_code == 9) {
            return false;
        }
    }
}

// slight update to account for browsers not supporting e.which
function disableTAB(e) {
    //if ((e.which || e.keyCode) == 9) {
    //    e.preventDefault();
    //}
    e.preventDefault();
};

//// To disable f5
///* jQuery < 1.7 */
//$(document).bind("keydown", disableTAB);
///* OR jQuery >= 1.7 */
//$(document).on("keydown", disableTAB);

//// To re-enable f5
///* jQuery < 1.7 */
//$(document).unbind("keydown", disableTAB);
///* OR jQuery >= 1.7 */
//$(document).off("keydown", disableTAB);

function ValidarEmail() {

    var emailTeste = $('#Email').val();
    var ecTeste = $('#EC').val();
    var cnpjTeste = $('#CNPJ').val();

    var emailTestado = $('#hdnEmail').val();
    var ecTestado = $('#hdnEc').val();
    var cnpjTestado = $('#hdnCnpj').val();

    if (emailTeste.length == 0 || ecTeste.length == 0 || cnpjTeste.length == 0) {
        return;
    }

    if (emailTeste == emailTestado && ecTeste == ecTestado && cnpjTeste == cnpjTestado) {
        return;
    }

    AjaxStart();

    $(document).on("keydown", disableTAB);
    $('#Email').focus();

    $('#hdnEmail').val(emailTeste);
    $('#hdnEc').val(ecTeste);
    $('#hdnCnpj').val(cnpjTeste);
    $('#hdnEmailValido').val('0');

    $.post(BASE_URL + 'PrimeiroAcesso/ValidarEmail', { email: emailTeste, numeroEc: ecTeste, cnpj: cnpjTeste }, function (data) {
        var resultId = data.id;
        var resultText = data.texto;

        if (resultId == '2') {
            $('#divPainelBotoes').show();
            $('#divDizer').show();
            $('#divSugestao').show(200);
            $('#lblSugestao').html(resultText);
        }
        else if (resultId == '0') {
            $('#Email').val('');
            $('#EmailConfirmacao').val('');
            $('#Email').focus();
            $('#divPainelBotoes').hide();
            $('#divDizer').hide();
            $('#divSugestao').show(200);
            $('#lblSugestao').html(resultText);
        }
        else {
            $('#divSugestao').hide();
            $('#EmailConfirmacao').focus();
            $('#hdnEmailValido').val('1');
        }
        AjaxStop();
        $(document).off("keydown", disableTAB);
    });
}

function ValidarCelular() {

    var ec = $('#EC').val();
    var cnpj = $('#CNPJ').val();
    var celular = $('#Celular').val();

    var ecTestado = $('#hdnEc').val();
    var cnpjTestado = $('#hdnCnpj').val();
    var celularTestado = $('#hdnCelular').val();
    
    if (celular.length == 0 || ec.length == 0 || cnpj.length == 0) {
        return;
    }

    if (celular == celularTestado && ec == ecTestado && cnpjTeste == cnpjTestado) {
        return;
    }
        
    AjaxStart();
    $(document).on("keydown", disableTAB);

    $('#hdnCelular').val(celular);
    $('#hdnEc').val(ec);
    $('#hdnCnpj').val(cnpj);
        
    $.post(BASE_URL + 'PrimeiroAcesso/ValidarCelular', { numeroEc: ec, cnpj: cnpj, celular: celular }, function (data) {
        var resultId = data.id;
        var resultText = data.texto;
        
        if (resultId == '0') {            
            $('#divCelularInvalido').show(200);
            $('#lblMensagemCelularInvalido').html(resultText);
        }        
        else {
            $('#divCelularInvalido').hide();
            //$('#hdnEmailValido').val('1');
        }
        
        AjaxStop();
        $(document).off("keydown", disableTAB);
    });
}
