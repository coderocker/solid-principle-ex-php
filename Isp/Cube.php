<?php
require_once 'PlaneShapeInterface.php';
require_once 'SolidShapeInterface.php';
/**
 * 
 */
class Cube implements PlaneShapeInterface, SolidShapeInterface {
    public $length;
    public function __construct($length) {
        $this->length = $length;
    }    
    public function area() {
        return 6 * pow($this->length, 2);;
    }

    public function volume() {
        return pow($this->length, 3);
    }
}
