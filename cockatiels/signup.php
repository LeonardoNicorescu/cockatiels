<?php
session_start();
require_once("db.php");

if(isset($_POST['username']) and isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $checkQuery = "SELECT * FROM users WHERE username = :username";
    $checkStmt = $bdd->prepare($checkQuery);
    $checkStmt->execute(array(":username" => $username));
    $existingUser = $checkStmt->fetch();

    if($existingUser){
        echo '<script>alert("User already exists."); window.location.href = "index.php";</script>';
    } else {
        $preparedStmt = $bdd->prepare("INSERT INTO users (username, password) VALUES(:username, :password)");
        $preparedStmt->execute(array(":username" => $username, ":password" => $password));
        $_SESSION['username'] = $username;
        header('location:homepage.php');
    }
}
?>