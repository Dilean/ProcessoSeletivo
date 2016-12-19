/**
 * Created by Bizarro on 12/18/2016.
 */

$(document).ready(function () {

    $(".quantidade").change(function () {
        var total = 0.0;
        quantidade = 0;
        quantidade = parseInt($(this).val());

        if (quantidade < 0) {
            quantidade = 0;
            parseInt($(this).val(0));
        }
        var preco = textoParaFloat($(this).parent().find('.preco_M').text());

        total += quantidade * preco;
        var valorFinal = floatParaTexto(total);
        $(this).parent().find('.total').text(valorFinal);
    });

    $(".vender").click(function () {
        id = $(this).parent().find('.codigo_M').text();
        nome = $(this).parent().find('.nome_M').text();
        tipo = $(this).parent().find('.tipo_M').text();
        quantidade = $(this).parent().find('.quantidade').val();
        total = $(this).parent().find('.total').text();
        salvarOperacao('Venda');
    });

    $(".comprar").click(function () {
        id = $(this).parent().find('.codigo_M').text();
        nome = $(this).parent().find('.nome_M').text();
        tipo = $(this).parent().find('.tipo_M').text();
        quantidade = $(this).parent().find('.quantidade').val();
        total = $(this).parent().find('.total').text();
        salvarOperacao('Compra');
    });

    $(".historico").click(function () {
        removerDados();
        carregarDados();
    });
});

function salvarOperacao(op) {
    total = textoParaFloat(total);
    if (total > 0.0) {
        $.post('persistencia.php', {
            operacao: op,
            id_Mercadoria: id,
            nome_Mercadoria: nome,
            qtd_Mercadoria: quantidade,
            preco_Mercadoria: total,
            tipo_Mercadoria: tipo
        }, function (data) {
            $('#Alertas').find('.mensagem').text(data);
            $('#Alertas').modal();
        });
    } else {
        $('#Alertas').find('.mensagem').text("Quantidade de produtos inválido");
        $('#Alertas').modal();
    }
}

function textoParaFloat(txt) {
    var cleanText = txt.replace("R$", "").replace(",", ".");
    return parseFloat(cleanText);
}

function floatParaTexto(valor) {
    var valor = parseInt(valor * 100);
    var i = parseInt(valor / 100);
    var d = parseInt(valor % 100);
    return "R$ " + i + "," + d;
}

function carregarDados() {

    $.post('persistencia.php', {
        histocico: 1
    }, function (data) {
        var hist = JSON.parse(data);
        var historico = "";
        var tabela = $(".info");
        $.each(hist, function (key, val) {
            row = $('<tr>');
            row.append("<td>" + val.operacao + "</td>");
            row.append("<td>" + val.nome_Mercadoria + "</td>");
            row.append("<td>" + val.tipo_Mercadoria + "</td>");
            row.append("<td>" + val.qtd_Mercadoria + "</td>");
            row.append("<td>" + val.preco_Mercadoria + "</td>");
            tabela.append(row);
        });
    });
}

function removerDados(){
    $(".info").find('tr:not(tr:first)').remove();
}