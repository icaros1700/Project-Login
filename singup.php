<?php 

require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {

    $sql= "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt= $conn->prepare($sql);
    $stmt->bindParam(':email',$_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {

        $message = 'Successfully Created New User';
    } else {

        $message = 'Sorry there must have an issue creating your account';
    }
    
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

<?php if (!empty($message)): ?>
    <p> <?= $message ?></p>
<?php endif; ?>    

<h1>Sing Up</h1>
<span>or<a href="login.php"> Login</a></span>

<form   action="sing.php" method="post">
<input type="text" name="email" placeholder="Entre Your Email">
<input type="password" name="password" placeholder="Entre Your Password">
<input type="password" name="confirm_password" placeholder="Confirm Your Password">
<input type="submit" value="send">
    
</body>
</html>