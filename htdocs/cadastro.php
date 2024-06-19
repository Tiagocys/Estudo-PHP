<?php
session_start();
include('conn.php');

$usuario = mysqli_real_escape_string($conn, trim($_POST['usuario']) );
$senha = mysqli_real_escape_string($conn, trim(md5($_POST['senha'])) );
$nome = mysqli_real_escape_string($conn, trim($_POST['nome']) );
$sobrenome = mysqli_real_escape_string($conn, trim($_POST['sobrenome']) );

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['usuario_existente'] = true;
    header('location: index.php');
    exit;
}

$sql = "INSERT INTO usuario (usuario, senha, nome, sobrenome, data_do_cadastro) VALUES ('$usuario', '$senha', '$nome', '$sobrenome', NOW())";

//
if($conn->query($sql) === TRUE) {
    $_SESSION['cadastro_efetuado'] = true;
}

$conn->close();
header('location: index.php');
exit;

?>