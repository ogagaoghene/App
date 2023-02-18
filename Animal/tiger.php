<?php 
namespace Animal;

class Tiger {
  protected $name_of_tiger;

  public function __construct($name_of_tiger = '') {
    $this->name_of_tiger = $name_of_tiger;
  }

  public function getTiger() {
    return $this->name_of_tiger;
  }
}