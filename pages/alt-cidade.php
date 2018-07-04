<?php
$id = $_GET['id'];

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
 //buscar as cidades para trazer para o formulario

 $sql = "select * from tbl_cidades where id=$id";

 $result = mysqli_query($con, $sql);

 $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>

    <?php
        include_once ('header.php');
    ?>

</head>
<body class="back-register">

    <?php
        include_once ('nav-dashboard.php');
    ?>

    <div class="register-box">
        <div class="register-box-body">
            <div class="row" style="text-align: center">
                <span class="register-title">
                    Cadastro de Cidades
                </span>
            </div>
            <hr class="hr-separator">
            <div class="row" style="text-align: center">
                <p class="register-subtitle">Forneça os Dados Solicitados</p>                
            </div>
            <!-- Formulario de cadastro de Cidades -->
            <form action="altera-cidade.php" method="post" autocomplete="off">
                <!-- nome da cidade -->
                <div class="input-group">
                    <span class="input-group-addon" id="input-cidade">
                        <span class="fa fa-building"></span>                        
                    </span>
                    <input autocomplete="off" type="text" class="form-control" value="<?php echo $row[1]; ?>"
                        name="nome_cidade" required placeholder="Nome da Cidade"
                        aria-describedby="input-nome-cidade">
                </div>
                <br>
                <!-- Estado -->
                <div class="input-group">
                    <span class="input-group-addon" id="input-estado">
                        <span class="fa fa-globe"></span>                        
                    </span>
                    <select name="estado" class="form-control">
                        <option value="SP"<?php if($row[2] == "SP") echo "selected"; ?> >São Paulo</option>
                        <option value="RJ" <?php if($row[2] == "RJ") echo "selected"; ?>>Rio de Janeiro</option>
                        <option value="MG"<?php if($row[2] == "MG") echo "selected"; ?>>Minas Gerais</option>
                        <option value="RS"<?php if($row[2] == "RS") echo "selected"; ?>>Rio Grande do Sul</option>
                    </select>
                </div>
                <br>
                <!-- botao de envio -->
                <div class="row" style="margin-bottom: 10px">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            <span style="font-family: Century Gothic">Inserir  
                                <span class="fa fa-chevron-circle-right"></span>
                            </span>
                        </button>
                    </div>                    
                </div>
            </form>            
        </div>
    </div>

    <?php
        include_once ('footer.php');
        include_once ('js.php');
    ?>

</body>
</html>