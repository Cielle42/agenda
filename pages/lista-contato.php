<!DOCTYPE html>
<html lang="pt_br">
<head>

    <?php
        include_once ('header.php');
    ?>

</head>
<body class="back-contatos">

    <?php
        include_once ('nav-dashboard.php');
    ?>

        <div class="register-box">
        <div class="listing-contato-box-body">
            <div class="row" style="text-align: center">
                <span class="register-title">
                    Listagem de Cadastro de Contatos
                </span>
            </div>
            <hr class="hr-separator">
            <div class="row">
                <table class="table-stripper table-hover table-responsive">
                <thead>
                <tr>
                <td style="width: 50px">#</td>
                <td style="width: 350px">Nome</td>
                <td style="width: 120px">Endereço</td>
                <td style="width: 120px">Nº Endereço</td>
                <td style="width: 120px">Complemento</td>
                <td style="width: 120px">Bairro</td>
                <td style="width: 120px">Cidade</td>
                <td style="width: 120px">CEP</td>
                <td style="width: 120px">Ações</td>
                </tr>
                </thead>

<!--codigo abaixo em funcao de como fica o tamanho do banco de dados-->

                <tbody>
<?php

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

    //cria sentenca sql para buscar as cidades

    $sql = "select * from tbl_contatos order by nome";

    $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_array($result)){
        echo "<tr>
        <td>$row[0]</td>
        <td>" . utf8_encode($row[1]) . "</td>
        <td>$row[2]</td>
        <td>
        <a href=\"alt-contato.php?id=$row[0]\"> 
        <button class=\"btn btn-primary btn-xs\">
        <i class =\"fa fa-pencil-alt\"></i>
        </button>
        </a>
&nbsp;&nbsp;
        <a href=\"exc-contato.php?id=$row[0]\"> 
        <button class=\"btn btn-danger btn-xs\">
        <i class =\"fa fa-trash-alt\"></i>
        </button>
        </a>
        </tr>
        ";
    }
?>

                </tbody>
                
                </table>
            </div>
            </div>      
        </div>

    <?php
        include_once ('footer.php');
        include_once ('js.php');
    ?>

</body>
</html>