<?php 
namespace Animal;

class Dog {
  protected $name_of_dog;

  public function __construct($name_of_dog = '') {
    $this->name_of_dog = $name_of_dog;
  }

  public function getDog() {
    return $this->name_of_dog;
  }
}