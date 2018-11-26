<?php

// set_include_path(get_include_path().":"."/home/hrishi/projects/PhpTraining/SOLID/SingleResp");
require_once 'Circle.php';
require_once 'Square.php';
require_once 'Sphere.php';
require_once 'Cube.php';
require_once 'AreaCollector.php';
require_once 'VolumeCollector.php';
require_once 'SumCalculatorOutputter.php';

 $shapes = array(
  new Circle(2),
  new Square(5),
  new Square(6),
  new Sphere(2),
  new Cube(6),
);
$areas = new VolumeCollector($shapes);
$output = new SumCalculatorOutputter($areas);
echo $output->HTML()."\n";
echo $output->JSON()."\n";
echo $output->TEXT()."\n";


