<?php
/**
 * Created by PhpStorm.
 * User: Bizarro
 * Date: 12/17/2016
 * Time: 11:48 AM
 */

include_once 'ConfigBD.php';

$conexao = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if (!$conexao) {
    die('Não foi possível conectar ao banco de dados');
}

if (isset($_POST['operacao'])) {

    if (isset($_POST['operacao'])
        && isset($_POST['id_Mercadoria'])
        && isset($_POST['nome_Mercadoria'])
        && isset($_POST['tipo_Mercadoria'])
        && isset($_POST['qtd_Mercadoria'])
        && isset($_POST['preco_Mercadoria'])
    ) {
        $operacao = $_POST['operacao'];
        $id_Mercadoria = $_POST['id_Mercadoria'];
        $nome_Mercadoria = $_POST['nome_Mercadoria'];
        $tipo_Mercadoria = $_POST['tipo_Mercadoria'];
        $qtd_Mercadoria = $_POST['qtd_Mercadoria'];
        $preco_Mercadoria = $_POST['preco_Mercadoria'];

        $insert = "INSERT INTO `operacoes`(`id_Mercadoria`, `nome_Mercadoria`, `tipo_Mercadoria`, `qtd_Mercadoria`, `preco_Mercadoria`, `operacao`) VALUES (" . $id_Mercadoria . ",'" . $nome_Mercadoria . "','" . $tipo_Mercadoria . "'," . $qtd_Mercadoria . "," . $preco_Mercadoria . ",'" . $operacao . "')";

        $sql_i = mysqli_query($conexao, $insert);

        if ($sql_i === true) {
            echo "Persistencia de dados realizada com sucesso!";
        } else {
            echo "Falha ao persistir dados";
        }
    }
}else{
    if(isset($_POST['histocico'])){
        $query = "SELECT nome_Mercadoria, tipo_Mercadoria, qtd_Mercadoria, preco_Mercadoria, operacao FROM operacoes";
        $sql_q = mysqli_query($conexao, $query);

        $data = array();

        while ($row = mysqli_fetch_array($sql_q)) {
            array_push($data, array(
                'nome_Mercadoria' => $row[0],
                'tipo_Mercadoria' => $row[1],
                'qtd_Mercadoria' => $row[2],
                'preco_Mercadoria' => $row[3],
                'operacao' => $row[4]));
        }

        print json_encode($data);
    }else{
        echo "Falha ao efetuar operação";
    }
}
?>