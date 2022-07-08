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

//SWITCH:CASE STATEMENTS

//$number = 100;
//
//
//switch($number){
//    case 34:
//        echo "it is 34";
//     break;
//    case 12:
//        echo "it is 12";
//        break;
//    case 100:
//        echo "it is 100";
//        break;
//
//    default:
//        echo "Without matches";
//}

//WHILE LOOP

//$counter = 0;
//
//while($counter < 10){
//    echo $counter;
//    $counter += 1;
//}

//FOR LOOP
echo "<br> For: <br>";
for($counter = 0; $counter < 10; $counter++){
    echo $counter . "<br>";
}

//FOREACH LOOP
$numbers = [5,6,7,8,9,10,20,30,40,50,60,70,80,90];
echo "<br> Foreach: <br>";

foreach($numbers as $number){
    echo $number . "<br>";
}

?>

</body>
</html>