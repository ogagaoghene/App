<?php 
namespace Action;

class Run {
  protected $can_run = false;

  public function __construct($can_run = false) {
    $this->can_run = $can_run;
  }

  public function __toString() {
    return $this->can_run ? "Yes can run!" : "No can't run!";
  }
}