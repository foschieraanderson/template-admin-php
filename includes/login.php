<?php

include_once 'conn.php';
include_once 'path.php';

if(isset($_POST['submit'])) {

    $email    = $_POST['email'];
    $password = $_POST['password'];

    $sql = $pdo->prepare("SELECT * FROM tb_users WHERE email = ?");
    $sql->execute([$email]);
    if($sql->rowCount() == 1) {
        $info = $sql->fetch();

        print "Usuário do banco: " . $info['password'];
        print "Usuário postado: " . $password;

        if(password_verify($password, $info['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['id']    = $info['user_id'];
            $_SESSION['user']  = $info['email'];

            header("Location: ".$path."index.php");

            die();
        } else {
            echo 'Usuário ou senha incorretos!';
        }
    } else {
        echo 'Usuário não encontrado';
    } 
} else {
    echo 'Sem post submit';
}
       

?>
