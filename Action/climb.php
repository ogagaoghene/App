<?php 
namespace Action;

class Climb {
  protected $can_climb = false;

  public function __construct($can_climb = false) {
    $this->can_climb = $can_climb;
  }

  public function __toString() {
    return $this->can_climb ? "Yes can climb" : "No can't climb";
  }
}


