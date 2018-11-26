<?php
require_once 'AreaCollector.php';
/**
 * 
 */
class VolumeCollector extends AreaCollector {
  
  public function volumes() {
    foreach($this->shapes as $shape) {
      if (method_exists($shape,'volume')) {
        $volumes[] = $shape->volume();   
      }          
    }    
    return $volumes;
  }
}