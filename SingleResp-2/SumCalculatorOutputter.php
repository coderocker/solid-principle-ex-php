<?php
/**
 * 
 */
class SumCalculatorOutputter {
  protected $areas;
  private $areaSum = null;
  public function __construct(AreaCalculator $areaCalculator) {
      $this->areas = $areaCalculator->area();      
  }

  protected function sum() {
    $this->areaSum = !is_null($this->areaSum) ? $this->areaSum : array_sum($this->areas);
    return $this->areaSum;
  }

  public function HTML() {
    return implode('', array(
        "<h1>",
            "Sum of the areas of provided shapes: ",
            $this->sum(),
        "</h1>"
    ));
  }

  public function JSON() {
    return json_encode(
      array('sum'=> $this->sum())
    );
  }

  public function TEXT(){
    return $this->sum();
  }
}