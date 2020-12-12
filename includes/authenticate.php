<?php

    include_once 'conn.php';
    include_once 'path.php';
    
    if(!isset($_SESSION['login']) || $_SESSION['login'] != true) {
        header("Location: ".$path."login.php?erro=3");
    }

?>
