<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php deleteRows(); ?>

<?php include "includes/header.php";?>

<div class="container">

    <div class="col-sm-6">
        <h1 class="text-center">Delete </h1>
        <form action="login_delete.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
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

<?php include "includes/footer.php";?>