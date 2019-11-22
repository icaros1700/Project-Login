<?php 

require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>SingUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<?php require 'partials/header.php'?>

<h1>Sing Up</h1>
<span>or<a href="login.php"> Login</a></span>

<form   action="sing.php" method="post">
<input type="text" name="email" placeholder="Entre Your Email">
<input type="password" name="password" placeholder="Entre Your Password">
<input type="password" name="confirm_password" placeholder="Confirm Your Password">
<input type="submit" value="send">
    
</body>
</html>