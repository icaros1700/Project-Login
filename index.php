<?php 

session_start();

require 'database.php';

if (isset($_SESSION['user_id'])) {

    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id =:id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count(&results) > 0) {
        $user = $results;
    }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Welcome to Your App</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<?php require 'partials/header.php'?>

<?php if(!empty($user)): ?>
<br> Welcome. <?= $user['email']; ?>
<br> You are Successfully Logged In 
<a href="logout.php">
LOG OUT
</a>
<?php else: ?>

<h1>Please Login or SingUp</h1>

<a href="login.php">Login</a> or
<a href="singup.php">SingUp</a>

    
</body>
</html>
