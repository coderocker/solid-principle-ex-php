<?php
/**
 * 
 */
class SumCalculatorOutputter {
  protected $areas;
  private $areaSum = null;
  public function __construct(AreaCollector $areaCollector) {
      $this->areas = $areaCollector->areas();      
  }

  protected function sum() {
    $this->areaSum = !is_null($this->areaSum) ? $this->areaSum : array_sum($this->areas);
    return $this->areaSum;
    // return array_sum($this->areas);
  }

  public function HTML() {
    return implode('', array(
        "<h1>",
            "Sum of the areas of provided shapes: ",
            $this->sum(),
        "</h1>"
    ));
    // $this->areas[] = 3;
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