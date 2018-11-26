<?php

require_once 'ShapeInterface.php';
/**
 * 
 */
class Square implements ShapeInterface {
  public $length;
  public function __construct($length) {
      $this->length = $length;
  }

  public function area() {
    return pow($this->length, 2);
  }
}
