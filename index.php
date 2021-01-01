<?php
    require_once 'lib/database/connection.php';
    require_once 'lib/validate/validate.php';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel Administrativo</title>
    <link rel="stylesheet" href="public/css/main.css">
</head>
<body>
    <div class="container">
        <div class="box-menu">
            <?php include 'app/view/menu.php'; ?>
        </div>
        <div class="box-content">
            <?php include 'app/view/header.php'; ?>            
        </div>
    </div>
</body>
</html>
