<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<?php require 'partials/header.php'?>

<h1>Login</h1>

<span>or<a href="singup.php"> Sing Up</a></span>

<form   action="login.php" method="post">
<input type="text" name="email" placeholder="Entre Your Email">
<input type="password" name="password" placeholder="Entre Your Password">
<input type="submit" value="send">
    
</body>
</html>