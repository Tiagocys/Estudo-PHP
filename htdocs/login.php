<?php
//o session_start() capta a última sessão armazenada,
//essa linha de código deve ser adicionada depois de testar todos os outros componentes armazenandos
//no banco de dados, como a resposta em boleano da autenticação, por exemplo
session_start();
include('conn.php');

//verifica se o usuário digitou algo nos inputs de login e senha, caso não, redireciona ao index
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('location: index.php');
    exit();
}

//teste de sql injection e validação do usuário e senha
$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);


//verificação se o usuário e senha digitados conferem com os cadastrados no banco de dados
$query = "select idusuario, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}');";

//faz uma consulta no banco de dados e armazena em $result
$result = mysqli_query($conn, $query);

//exibe os dados de cada linha
$row = mysqli_num_rows($result);

//
//exibe na tela o boleano em resposta a autenticação (1 = verdadeiro, 0 = falso)
//echo $row;exit;
//

if($row == 1) {
    //se o usuário tiver autenticado, redireciona ao painel.php
    $_SESSION['usuario'] = $usuario;
    header('location: painel.php');
    exit();
} else {
    header('location:index.php');
    exit();
}

