<?php

if(isset($_POST['submit'])){


    $minimum = 5;
    $maximum = 10;
    $names = ['Edwin','Mateusz', 'Adison', 'Kubix'];

$username = $_POST['username'];
$password = $_POST['password'];

if(strlen($username) < $minimum){
    echo  "Username is too short, please type minimum 5 characters!";
}
elseif (strlen($username) > $maximum){
    echo  "Username is too long, please type less than 10 characters!";
}

if (!in_array($username, $names)){
    echo " Sorry, you are not allowed.";
} else {
    echo "Welcome!";
}




//echo "Hello " . $username . "<br>";
//echo "Your Password is: " . $password;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="form_process.php" method="post">


    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name="password" placeholder="Enter Password">
    <br>
    <input type="submit" name="submit">

</form>

</body>
</html>