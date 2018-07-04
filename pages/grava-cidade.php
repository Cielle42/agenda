<?php

    // Recebe dados do formulario e verifica se estao corretos
    $nome_cidade = utf8_decode(trim($_POST["nome_cidade"]));
    $estado = $_POST["estado"];

    $erros = "";
    if(empty($nome_cidade)){
        $erros .= "Nome da cidade vazia.";
    }

    if(!empty($erros)) {
        echo "
            <script>
                alert(\"$erros\");
            </script>
            <html>
                <head>
                    <META http-equiv=\"refresh\" content=\"0;URL=http://localhost/Agenda/pages/cad-cidade.php\">
                </head>
            </html>
        ";
    }

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
    $sql = "insert into tbl_cidades (nome_cidade, estado) values(\"$nome_cidade\", \"$estado\");";

    //Envia o insert para o banco de dados
    $result = mysqli_query($con, $sql);

?>

<html>
    <head>
        <META http-equiv="refresh" content="1;URL=http://localhost/Agenda/pages/cad-cidade.php\">
    </head>
</html>