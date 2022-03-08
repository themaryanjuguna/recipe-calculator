<?php
session_start();

if(isset($_SESSION['username'])){

    echo ' Well Done ' . $_SESSION['username'].'<br>';
    echo ' <a href="logout.php?logout">logout</a>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
   
    <a href="logout.php">Logout</a>
    <h1>Welcome to our Dashboard</h1>

    <br>
    Hello, <?php  echo $_username['username']; ?>
</body>
</html>