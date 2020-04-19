<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginpage.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/CSS/style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<div class="cover">
    
<body class="imgBg">
    
    <div>
        <h1>Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenido al Sitio</h1>

    </div>
    <br>
    <div class="container">
        <p>Para Acceder al juego de memoria, haga click en el siguiente enlace</p>
        <br>
        <a href="index.php" class="btn btn-main">Acceder al Juego</a>
    </div>
    <p class="options">
        <a href="passreset.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</div>
</body>
</html>
