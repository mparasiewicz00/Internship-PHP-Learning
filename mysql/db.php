<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if($connection) {
echo "Server connected";
}else {
die("Connecting failed");
}

?>