<?php

//comentario
/*
comentario
*/

//recebe os dados do formulário

/*$nome_usuario = $_POST["user"];
$email = $_POST["email"];
$senha = $_POST["password"];*/

$nome_usuario = trim($_POST["user"]);
$email = trim($_POST["email"]);
$senha = trim($_POST["password"]);

//verifica se os dados estao corretos

//pode usar o site php.net para pesquisar por exemplo a funcao trim que é que nem a de SQL

/*$nome_usuario = trim($nome_usuario);
$email = trim($email);
$senha = trim($senha);*/

//if($nome_usuario == "")

$erros = "";

if(empty ($nome_usuario)) //retorna true or false
$erros .= "Campo Nome do Usuário está vazio.<br>"; //codigo php e pode usar html
// ponto e igual concatena strings
if(empty ($email))
$erros .= "Campo e-mail está vazio.<br>";

if(empty ($senha))
$erros .= "Campo Senha está vazio.<br>";

if(!empty($erros)) //se nao estiver vazio a variavel erros
{
    echo "Foram Encontradas Inconsistências de Dados:<br>
    Veja abaixo:<br>". $erros; //concatenar duas strings pode

    echo "<br><br><a href='http://localhost/Agenda/pages/register.php'>Clique aqui para voltar</a>";
}

//parametriza a conexao com o banco de dados

$host = "localhost"; //ver o meu
$user = "root";
$password = ""; //ver o meu
$database = "agenda";

//Faz conexao com o servidor mysql
$con = mysqli_connect($host, $user, $password); //usa assim mysqli com i usar toda linha i banco de dados mais recente

//verifica se ocorreu erro de conexao

if(!$con){
    //se sim entao encerra o programa com uma mensagem de erro
    die("Erro de conexão com o servidor do BD");
}

//determina qual banco de dados que sera utilizado

$db = mysqli_select_db($con,$database);

//verifica se ocorreu erro na selecao 
if(!$db){
    // se sim entao encerra o programa com uma mensagem de erro
    die("Erro ao selecionar o banco de dados.");
}

//cria a sentencao sql para inserir o usuario
//id nao colocamos porque é autoincremento o campo
$sql = "insert into tbl_usuarios (nome_usuario, email, senha)
values (\"$nome_usuario\", \"$email\", \"$senha\")";

// envia o insert para o banco de dados

$result = mysqli_query($con, $sql);


?>
<html>
<head>
<meta http-equiv="refresh" content="0; url=http://localhost/Agenda/pages/login.php">
</head>
</html>
