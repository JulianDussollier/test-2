<?php
require_once "class/Person.php";
require_once "class/Student.php";

$peter = new Person("Peter");

//$peter->setName("Peter c'est une personne");
echo $peter->getName();

//echo $peter->address;
//$peter->address = "ma super adresse";

$ines = new Student("Je suis Ines");
echo "<br>";
echo $ines->getName();
echo "<br>";
$ines->setStudentId(1);
echo $ines->getStudentId();

echo "<br>";
echo "<br>";


require_once "class/Shapes.php";


$circle = new Circle(2);
echo "Radius: ". $circle->calcArea();

echo "<br>";

$rectangle = new Rectangle(10, 15);
echo "Rectangle: ".$rectangle->calcArea();

