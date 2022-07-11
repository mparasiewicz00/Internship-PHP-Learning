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

<?php
//MATH
echo pow(2,7);
echo "<br>";
echo rand(1, 30000);
echo "<br>";
echo sqrt(100);
echo "<br>";
echo ceil(4.6);
echo "<br>";
echo floor(4.6);
echo "<br>";
echo round(4.5);
echo "<br>";


//STRING
$string = "Hello my friend";
echo "<br>";
echo strlen($string);
echo "<br>";
echo strtoupper($string);
echo "<br>";
echo strtolower($string);

//ARRAY

$list = [12,123,1234,12312,55,322];

echo max($list);
echo "<br>";
echo min($list);
echo "<br>";
print_r($list);
echo "<br>";

?>

</body>
</html>
