<?php
/**
 * Created by PhpStorm.
 * User: Bizarro
 * Date: 12/17/2016
 * Time: 10:55 AM
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negociação de Mercadorias</title>
    <link type="text/css" rel="stylesheet" href="_CSS/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<!-- Modal histórico-->
<div id="myHistorico" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" >&times;</button>
            </div>
            <div class="modal-body">
                <img src="_IMG/histórico.png" alt="Histórico de Operações">
                <table class="info">
                    <thead>
                        <td>OPERAÇÃO</td>
                        <td>NOME</td>
                        <td>TIPO</td>
                        <td>QTD</td>
                        <td>TOTAL</td>
                    </thead>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal alertas-->
<div id="Alertas" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title centered">Aviso!</h4>
            </div>
            <div class="modal-body">
                <label class="mensagem"></label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<header class="navbar-fixed-top">
    <section>
        <h1>NEGOCIAÇÃO DE MERCADORIAS</h1>
    </section>
    <section>
        <button class="btn-block historico" data-toggle="modal" data-target="#myHistorico">Histórico</button>
    </section>

</header>
<section class="produtos">
    <div class="container flex-align">
        <div class="col-md-12 col-xs-12 lista_Produtos">
            <div class="col-md-5 col-xs-12 col-md-offset-1 produto">
                <section class="info_Produto">
                    <img class="img-responsive img-rounded" src="_IMG/produtos.jpg" alt="Produto">
                </section>
                <section class="compravenda_Produto">
                    <label class="codigo_M">1</label><br>
                    Nome da Mercadoria:<label class="nome_M">Geladeira</label><br>
                    Tipo da Mercadoria:<label class="tipo_M">Eletrônico</label><br>
                    Quantidade:<input class="quantidade" type="number" value="0" min="0"><br>
                    Preço Uni:<label class="preco_M">R$ 800,50</label><br>
                    <label class="total">R$ 0,00</label>
                    <br>
                    <br>
                    <button class="btn vender">Vender</button>
                    <button class="btn comprar">Comprar</button>
                </section>
            </div>
            <div class="col-md-5 col-xs-12 produto">
                <section class="info_Produto">
                        <img class="img-responsive img-rounded" src="_IMG/produtos.jpg" alt="Produto">
                </section>
                <section class="compravenda_Produto">
                    <label class="codigo_M">2</label><br>
                    Nome da Mercadoria:<label class="nome_M">Caderno</label><br>
                    Tipo da Mercadoria:<label class="tipo_M">Escolar</label><br>
                    Quantidade:<input class="quantidade" type="number" value="0" min="0"><br>
                    Preço Uni:<label class="preco_M">R$ 17,50</label><br>
                    <label class="total">R$ 0,00</label>
                    <br>
                    <br>
                    <button class="btn vender">Vender</button>
                    <button class="btn comprar">Comprar</button>
                </section>
            </div>
            <div class="col-md-5 col-xs-12 col-md-offset-1 produto">
                <section class="info_Produto">
                        <img class="img-responsive img-rounded" src="_IMG/produtos.jpg" alt="Produto">
                </section>
                <section class="compravenda_Produto">
                    <label class="codigo_M">3</label><br>
                    Nome da Mercadoria:<label class="nome_M">Boneca</label><br>
                    Tipo da Mercadoria:<label class="tipo_M">Brinquedo</label><br>
                    Quantidade:<input class="quantidade" type="number" value="0" min="0"><br>
                    Preço Uni:<label class="preco_M">R$ 57,30</label><br>
                    <label class="total">R$ 0,00</label>
                    <br>
                    <br>
                    <button class="btn vender">Vender</button>
                    <button class="btn comprar">Comprar</button>
                </section>
            </div>
            <div class="col-md-5 col-xs-12 produto">
                <section class="info_Produto">
                        <img class="img-responsive img-rounded" src="_IMG/produtos.jpg" alt="Produto">
                </section>
                <section class="compravenda_Produto">
                    <label class="codigo_M">4</label><br>
                    Nome da Mercadoria:<label class="nome_M">Perfume</label><br>
                    Tipo da Mercadoria:<label class="tipo_M">Beleza</label><br>
                    Quantidade:<input class="quantidade" type="number" value="0" min="0"><br>
                    Preço Uni:<label class="preco_M">R$ 89,00</label><br>
                    <label class="total">R$ 0,00</label>
                    <br>
                    <br>
                    <button class="btn vender">Vender</button>
                    <button class="btn comprar">Comprar</button>
                </section>
            </div>
        </div>
    </div>
</section>
<footer class="navbar-fixed-bottom">
    <p>Desenvolvido por Dilean do Rosário Decothé</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="_JS/script.js" type="application/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
