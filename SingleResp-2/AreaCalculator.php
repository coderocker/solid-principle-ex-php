<?php
/**
 * 
 */
class AreaCalculator {
  protected $shapes;
  public function __construct($shapes = array()) {
      $this->shapes = $shapes;      
  }
  
  public function area() {
    foreach($this->shapes as $shape) {
      if(is_a($shape, 'Square')) {
            $area[] = pow($shape->length, 2);
      } else if(is_a($shape, 'Circle')) {
            $area[] = pi() * pow($shape->radius, 2);
      }        
    }    
    return $area;
  }
}
