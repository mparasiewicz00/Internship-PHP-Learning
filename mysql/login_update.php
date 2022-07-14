<?php include "db.php"; ?>
<?php include "functions.php"; ?>

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

        <form action="login_create.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="username" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group mt-2">
                <select name="id" id="">
            <?php

            showAllData();

            ?>
                </select>
            </div>


            <input class="btn btn-primary mt-2"   type="submit" name="submit" value="UPDATE" >

        </form>

    </div>

</div>

</body>
</html>