<?php include "db.php";



function showAllData() {
    $query = "SELECT * FROM users ";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query faled!' . mysqli_error());
    }


    while ($row = mysqli_fetch_assoc($result)) {

        $id = $row['id'];
        echo "<option value=''>$id</option>";
    }
}
?>