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
    <a href="logout.php"><button>Logout</button></a>

    <div id="contas" class="contas">
        <p>Contas cadastradas:</p>
        <form action="contas.php" method="post">
            <input id="nova_conta" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
            <button id="bt_add_conta">Adicionar conta</button>
        </form>
        
    </div>
    <script src="painel.js"></script>
</body>
</html>