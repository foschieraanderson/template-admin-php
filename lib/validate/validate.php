<?php

    require_once 'lib/path/path.php';
    
    session_start();
    
    if(!isset($_SESSION['login']) || $_SESSION['login'] != true) {
        header("Location: ".$path."app/view/login.php?erro=3");
    }

?>
