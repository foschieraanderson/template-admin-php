<?php

include_once 'path.php';

session_start();
session_destroy();
header("Location: ".$path."login.php");

?>
