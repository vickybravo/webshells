$(document).ready(function () {
    $(".cnpj").mask("99.999.999/9999-99");
    $("#Ddd").mask("99");
    $("#Telefone").mask("(99)99999-9999");

    $('.btn-dad').click(function () {
        if ($(this).next('.hide').css('display') == 'none') {
            $('.ar-up').css({ 'display': 'inline' });
            $('.ar-dn').css({ 'display': 'none' });
            $('.btn-child .ar-up').css({ 'display': 'inline' });
            $('.btn-child .ar-dn').css({ 'display': 'none' });
            $(this).find('.ar-up').css({ 'display': 'none' });
            $(this).find('.ar-dn').css({ 'display': 'inline' });
            $('.hide').slideUp();
            $(this).next('.hide').slideDown();
        } else {
            $('.ar-up').css({ 'display': 'inline' });
            $('.ar-dn').css({ 'display': 'none' });
            $('.btn-child .ar-up').css({ 'display': 'inline' });
            $('.btn-child .ar-dn').css({ 'display': 'none' });
            $(this).find('.ar-up').css({ 'display': 'inline' });
            $('.btn-dad .ar-dn').css({ 'display': 'none' });
            $(this).find('.ar-up').css({ 'display': 'inline' });
            $(this).find('.ar-dn').css({ 'display': 'none' });
            $('.btn-child').removeClass('blue');
            $('.hide').slideUp();
        }
    });

    $('.btn-child').click(function () {
        if ($(this).next('.hide').css('display') == 'none') {
            $('.btn-child .ar-up').css({ 'display': 'inline' });
            $('.btn-child .ar-dn').css({ 'display': 'none' });
            $('.btn-child').removeClass('blue-tx');
            $('div.hide').slideUp();
            $(this).find('.ar-dn').css({ 'display': 'inline' });
            $(this).find('.ar-up').css({ 'display': 'none' });
            $(this).addClass('blue-tx');
            $(this).next('.hide').slideDown();
        } else {
            $('.btn-child .ar-up').css({ 'display': 'inline' });
            $('.btn-child .ar-dn').css({ 'display': 'none' });
            $('ul li ul li .hide').slideUp();
            $('.btn-child').removeClass('blue-tx');
        }
    });

    $('.tooltip-ct-faq').click(function (e) {
        if ($(this).children('.tooltipbox').css('display') == 'none') {
            $('.tooltipbox').fadeOut();
            $('img.tt-down').css({ 'display': 'inline' });
            $('img.tt-up').css({ 'display': 'none' });
            $(this).find('.ar-dir').css({ 'display': 'none' });
            $(this).find('.ar-bdn').css({ 'display': 'inline' });
            $(this).find('img.tt-down').css({ 'display': 'none' });
            $(this).find('img.tt-up').css({ 'display': 'inline' });
            $(this).children('.tooltipbox').fadeIn();
        } else {
            $(this).find('.ar-dir').css({ 'display': 'inline' });
            $(this).find('.ar-bdn').css({ 'display': 'none' });
            $('img.tt-down').css({ 'display': 'inline' });
            $('img.tt-up').css({ 'display': 'none' });
            $(this).children('.tooltipbox').fadeOut();
        }
    });

    $("textarea.mensagem").keyup(function () {
        var $this = $(this);
        var value = $this.val();
        if (value.length > 500) {
            $this.val(value.substr(0, 500));
        }

        var restantes = 500 - value.length;
        $(".restantes").val(restantes.toString());
    });

    $("#filtro_motivo").keyup(function () {
        var filtro = $(this).val().toLowerCase();
        for (var i = 0; i < window.topicos.length; i++) {
            window.topicos[i].Object.show();

            var quantidadeHidden = 0;
            for (var j = 0; j < window.topicos[i].Perguntas.length; j++) {
                window.topicos[i].Perguntas[j].Object.show();
                if (window.topicos[i].Perguntas[j].Nome.toLowerCase().indexOf(filtro) < 0) {
                    window.topicos[i].Perguntas[j].Object.hide();
                    quantidadeHidden += 1;
                }
            }

            if (quantidadeHidden == window.topicos[i].Perguntas.length) {
                window.topicos[i].Object.hide();
            }
        }
    });

    window.topicos = [];

    $(".duvidas > div > ul > li > span").each(function () {
        var $this = $(this);
        var index = window.topicos.push(
            {
                Object: $this.parent(),
                Nome: $this.text(),
                Perguntas: []
            }
        );

        var perguntas = $this.parent().find("li > span").each(function() {
            var $this = $(this);
            window.topicos[index - 1].Perguntas.push(
                {
                    Object: $this.parent(),
                    Nome: $this.text()
                }
            );
        });
    });
});