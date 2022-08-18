<?php

    $host = "localhost";
    $user = "root";
    $pass = "123456";
    $dbname = "db_biblioteca";

    
    $conn = mysqli_connect($host, $user, $pass, $dbname) or die("Erro: ".mysqli_connect_error());

    
?>