<?php
/**
 * 
 */
class SumCalculatorOutputter {
  protected $_areas;
  protected $_volumes;
  protected $_volumeSum;
  private $_areaSum = null;
  public function __construct(VolumeCollector $volumeCollector) {
      $this->_areas = $volumeCollector->areas();
      $this->_volumes = $volumeCollector->volumes(); 
  }

  public function areaSum() {
    $this->_areaSum = !is_null($this->_areaSum) ? $this->_areaSum : array_sum($this->_areas);
    return $this->_areaSum;
  }

  public function volumneSum(){
    $this->_volumeSum = !is_null($this->_volumeSum) ? $this->_volumeSum : array_sum($this->_volumes);
    return $this->_volumeSum;
  }

  public function HTML() {
    return implode('', array(
        "<h1>",
            "Sum of the areas & surface areas of provided shapes: ",
            $this->areaSum(),
            "\n",
            "Sum of the volumes of provided solid shapes: ",
            $this->volumneSum(),
        "</h1>"
    ));
  }

  public function JSON() {
    return json_encode(
      array('area_sum'=> $this->areaSum(), 'volume_sum'=> $this->volumneSum())
    );
  }

  public function TEXT(){
    return implode('', 
        array(
          "Area Sum : ", 
          $this->areaSum(), 
          "\n", 
          "Volume Sum : ", 
          $this->volumneSum()
        )
      );
  }
}