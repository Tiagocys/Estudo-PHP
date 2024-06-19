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
        

    <div class="div1">
        <form action="login.php" method="post">
            <div class="formDiv">
                <input type="email" name="usuario" required placeholder="Seu email">
                <input type="password" name="senha" required placeholder="Sua senha">
                <button>Entrar</button>
            </div>
        </form>
    </div>
</body>
</html>