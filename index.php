<?php
$a = 15; 
$b = 18; 

if ($a >= $b) {
    echo "Person A is younger with age: $a\n";
    echo "Person B is older with age: $b\n";
} elseif ($a < $b) {
    echo "Person B is older with age: $b\n";
    echo "Person A is younger with age: $a\n";
} else {
    echo "Both persons are the same age: $a\n";
}


$age = 15;

while($age<15){
    echo "Age is $age <br>";
    $age++;
}

$number = 15;

do{
    echo "Now Number is $number <br>";
    $number++;
}
while($number<15);

$cars = ["Mercedes", "Audi", "Dodge", "BMW"];

foreach($cars as $car){
    echo "Car model is $car <br>";
}
?>

