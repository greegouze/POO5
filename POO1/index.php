<?php 

require './MOD/LightableInterface.php';
require './MOD/Vehicle.php';
require './MOD/Bicycle.php';
require './MOD/Car.php';
require './MOD/MotorWay.php';
require './MOD/PedestrianWay.php';
require './MOD/ResidentialWay.php';
require './MOD/SkateBoard.php';
require './MOD/Truck.php';



 


$bike = new Bicycle('red', 1);

$bike->setCurrentSpeed(5);
echo $bike->switchOn();
echo $bike->switchOff();

echo '<br><br>';

$rockrider = new Bicycle('green', 1);

$rockrider->setCurrentSpeed(15);
echo $rockrider->switchOn();
echo $rockrider->switchOff();






$polo = new Car('white', 4, 'diesel');
$polo->CurrentSpeed = 8;
$polo->EnergyLevel = 50;

echo '<br><br>';

$polo->setCurrentSpeed(15);
echo $polo->switchOn();
echo $polo->switchOff();




/* $gigaTruck = new Truck('black', 4,'electrique',4000, 100);

echo $gigaTruck->forward();
echo $gigaTruck->brake();
echo $gigaTruck->isFull(80);

$buggy = new Truck('brown', 2, 'diesel',200, 50);

echo $buggy->forward() .PHP_EOL;
echo $buggy->isFull(250);




$motorWay = new MotorWay;
$motorWay->addVehicule($polo);

$motorWay->addVehicule($bike);

$skate = new Skateboard('blue', 4);

$pedestrian = new PedestrianWay;
$pedestrian->addVehicule($polo);
$pedestrian->addVehicule($skate);


$residential = new ResidentialWay;
$residential->addVehicule($polo);
$residential->addVehicule($skate);

echo $motorWay->getNbLane();



echo '<br><br>';
$polo->setParkBrake(true);

try {
    echo ($polo->start());
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo 'Ma polo roule comme un donut';
}



echo '<br><br>';
$polo->setParkBrake(false);

try {
    echo ($polo->start());
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo 'Ma polo roule comme un donut';
}
 */