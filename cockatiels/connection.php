<?php
session_start();
require_once("db.php");

if(isset($_POST['username']) and isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashpass = hash('SHA1',$password);

    $selectQuery = "SELECT * FROM users WHERE  username = ? AND password = ? ";
    $stmtUser = $bdd->prepare($selectQuery);
    $stmtUser->execute(array($username,$password));

    if($stmtUser->rowCount() > 0){
        echo 'ok';
     $data = $stmtUser->fetch();
     $_SESSION['username'] = $data['username'];
     header('Location:homepage.php');
    }
    else{
        header('Location:index.php');
        echo '<script>alert("Login incorrect")</script>';

    }
}