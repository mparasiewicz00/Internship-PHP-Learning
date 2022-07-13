<?php

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection) {
        echo "Server connected";
    }else {
        die("Connecting failed");
    }

$query = "SELECT * FROM users ";


$result = mysqli_query($connection, $query);
if(!$result) {
    die('Query faled!'. mysqli_error());
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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <div class="col-sm-6">

        <?php

        while($row = mysqli_fetch_assoc($result)){

            ?>

            <pre>

            <?php
            print_r($row);
            ?>
            </pre>

            <?php
        }

        ?>

    </div>

</div>

</body>
</html>