<?php 
namespace Action;

class Swim {
  protected $can_swim = false;

  public function __construct($can_swim = false) {
    $this->can_swim = $can_swim;
  }

  public function __toString() {
    return $this->can_swim ? "Yes can swim!" : "No can't swim!";
  }
}