<?php
include('verificaLogin.php')

//
//mostra qual sessão tá ativa no momento
//print_r($_SESSION);exit;
//
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
</body>
</html>