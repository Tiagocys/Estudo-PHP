<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
        if(isset($_SESSION['n_autenticado'])):
    ?>
    <script>
        alert("Email ou senha invalidos, por favor verifique suas credenciais.");
    </script>
    <?php
        endif;
        unset($_SESSION['n_autenticado']);
    ?>

<?php
        if(isset($_SESSION['usuario_existente'])):
    ?>
    <script>
        alert("Esse email já está cadastrado.");
    </script>
    <?php
        endif;
        unset($_SESSION['usuario_existente']);
    ?>

<?php
        if(isset($_SESSION['cadastro_efetuado'])):
    ?>
    <script>
        alert("Seu cadastro foi efetuado com sucesso.");
    </script>
    <?php
        endif;
        unset($_SESSION['cadastro_efetuado']);
    ?>
    

    <div id="login" class="login">
        <form action="login.php" method="post">
            <div class="formDiv">
                <input type="email" name="usuario" required placeholder="Seu email">
                <input type="password" name="senha" required placeholder="Sua senha">
                <button>Entrar</button>
            </div>
        </form>
        <div class="bt-cadastro">
            <p>Ainda não é cadastrado?</p>
            <button id="bt_cadastro">Cadastre-se</button>
        </div>
    </div>
    <div id="cadastro" class="cadastro">
        <form action="cadastro.php" method="post">
            <div class="formDiv">
                <input type="email" name="usuario" required placeholder="Seu email">
                <input type="password" name="senha" required placeholder="Sua senha">
                <input type="text" name="nome" required placeholder="Primeiro nome">
                <input type="text" name="sobrenome" required placeholder="Sobrenome">
                <button>Enviar</button>
            </div>
        </form>
        <div class="bt-login">
            <p>Já tem um cadastro?</p>
            <button id="bt_login">Faça login</button>
        </div>
    </div>

    <script src="app.js"></script>
</body>
</html>