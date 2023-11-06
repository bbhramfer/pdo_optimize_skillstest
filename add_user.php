<?php
    //ADD USER
    
     include_once('dbconfig.php');
     if(isset($_POST['add'])){
        $sql = "INSERT INTO users(name,email,password) VALUES(:name,:email,:password)";
        $result = $conn->prepare($sql);
        $result->execute([
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':password' => $_POST['password'],
        ]);
        
        $url = 'index.php';
        header('Location: '.$url);
    }
?>