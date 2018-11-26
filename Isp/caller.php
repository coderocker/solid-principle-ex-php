<?php
// require_once 'Square.php';
require_once 'Cube.php';
// $square = new Square(2);
$cube = new Cube(6);
// echo $square->area();
echo "Volumne : " . $cube->volume() ."\n";