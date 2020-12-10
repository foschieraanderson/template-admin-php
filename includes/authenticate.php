<?php

    include_once 'conn.php';
    include_once 'path.php';
    
    if($_SESSION['login'] == true) {
        header("Location: ".$path."index.php");
    } else {
        header("Location: ".$path."login.php");
    }

?>
