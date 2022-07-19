<?php

class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;


    function MoveWheels(){


        $this->wheels = 10;
        $this->doors = 6;


    }

}

if(method_exists("Car", "MoveWheels")){
    echo "Yes it is" . "<br>";
} else {
    echo "damn there's not";
}

$bmw = new Car();
$truck = new Car();

echo $bmw->wheels ."<br>";

echo $truck->wheels = 10 ."<br>";
echo $truck->doors ."<br>";

class Plane extends Car {

}
$jet = new Plane();
$jet->MoveWheels();
echo $jet->wheels;


?>