<?php

include_once 'conn.php';
include_once 'path.php';

if(isset($_POST['submit'])) {

    $email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    $sql = $pdo->prepare("SELECT * FROM tb_users WHERE email = ?");
    $sql->execute([$email]);
    if($sql->rowCount() == 1) {
        $info = $sql->fetch();

        if(password_verify($password, $info['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['id']    = $info['user_id'];
            $_SESSION['user']  = $info['email'];

            header("Location: ".$path."index.php");

            die();
        } else {
            header('Location: '.$path.'login.php?erro=2');
        }
    } else {
        header('Location: '.$path.'login.php?erro=1');
    } 
} else {
    header('Location: '.$path.'login.php?erro=0');
}
       
?>
