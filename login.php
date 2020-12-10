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
            <small>- Acessar painel administrativo</small>
            <form class="login" action="includes/login.php" method="POST">
                <input type="email" name="email" placeholder="E-mail">
                <input type="password" name="password" placeholder="Senha">
                <input type="submit" value="Entrar" name="submit">
            </form>
        </div>
    </section>
</body>
</html>
