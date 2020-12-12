<?php

    include_once 'includes/path.php';

    if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
        header('Location: '.$path.'index.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <section class="container">
        <div class="box-login">
            <h1>Login</h1>
            <small>* Acessar painel administrativo</small>
            <?php
                if(isset($_GET['erro'])) {
                    switch($_GET['erro']) {
                        case 1:
                            $msg = 'Nenhum usuário encontrado.';
                            break;
                        case 2:
                            $msg = 'Usuário ou senha incorretos.';
                            break;
                        case 3:
                            $msg = 'Você não está autenticado.';
                            break;
                        default:
                            $msg = 'Ocorreu um erro, tente novamente.';
                    }
            ?>
                    <div class="erro">
                        <p><?php echo $msg; ?></p>
                    </div>
            <?php } ?>
            <form class="login" action="includes/login.php" method="POST">
                <input type="email" name="email" placeholder="E-mail">
                <input type="password" name="password" placeholder="Senha">
                <input type="submit" value="Entrar" name="submit">
            </form>
        </div>
    </section>
</body>
</html>
