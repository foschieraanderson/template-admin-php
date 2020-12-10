<?php
    include_once 'includes/conn.php';
    include_once 'includes/authenticate.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel Administrativo</title>
</head>
<body>
    <h1>Bem vindo, <?php echo $_SESSION['user'] ?></h1>
</body>
</html>
