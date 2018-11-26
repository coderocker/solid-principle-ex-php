<?php
/**
 * 
 */
class AreaCollector {
  protected $shapes;
  public function __construct($shapes = array()) {
      $this->shapes = $shapes;      
  }
  
  public function areas() {
    foreach($this->shapes as $shape) {
      $areas[] = $shape->area();       
    }    
    return $areas;
  }
}
