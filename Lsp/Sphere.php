<?php
require_once 'Circle.php';
/**
 * 
 */
class Sphere extends Circle {

  public function area() {
    return 4 * parent::area();
  }

  public function volume() {
    return  (4/3) * pi() * pow($this->radius, 3);
  }
}
