<?php

    //DATABASE CONFIGURATION

    $servername = 'localhost';
    $dbname = 'skillstest';
    $username = 'root';
    $password = '';

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "CONNECTION FAILED", $e->getMessage();
    }
?>