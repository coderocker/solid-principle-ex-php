<?php
require_once 'Square.php';
/**
 * 
 */
class Cube extends Square {

  public function area() {
    return 6 * parent::area();
  }

  public function volume() {
    return pow($this->length, 3);
  }
}
