<?php

    session_start();
    const host     = '127.0.0.1';
    const dbname   = 'blog_admin';
    const user     = 'root';
    const password = '';

    try {
        $pdo = new PDO('mysql:host='.host.'; dbname='.dbname.'', user, password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Exibe os eroos caso exista. 
    } catch (PDOException $e)  { /* Atribui as exception à variável $e */
        echo 'ERROR: ' . $e->getMessage();
    }

?>
