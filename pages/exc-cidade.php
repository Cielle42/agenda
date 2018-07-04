<?php

    

    //Parametriza a conexão com o banco de dados
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "agenda";

    $con = mysqli_connect($host, $user, $password);

    if(!$con)
        die("Erro de conexao com o servidor do BD.");

    //Determina qual banco de dados será utilizado
    $db = mysqli_select_db($con, $database);

    if(!$db){
        //Se sim, então encerra o programa com uma mensagem de erro
        die("Erro ao selecionar o banco de dados.");
    }

    //Cria a sentença SQL para inserir o usuário
    $sql = "delete * from tbl_cidades where id=\"$id\");

    //Envia o insert para o banco de dados
    $result = mysqli_query($con, $sql);

?>m,

<html>
    <head>
        <META http-equiv="refresh" content="1;URL=http://localhost/Agenda/pages/lista-cidade.php\">
    </head>
</html>