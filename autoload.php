<?php
include_once('../Action/climb.php'); 
include_once('../Action/run.php'); 
include_once('../Action/swim.php');
include_once('../Animal/dog.php');
include_once('../Animal/tiger.php');

function autoload_one($classname) {
  if(file_exists('../Action/' . $classname . '.php')) {
    include_once '../Action/' . $classname . '.php';
  }
  else if(file_exists('../Animal/' . $classname . '.php')) {
    include_once '../Animal/' . $classname . '.php';
  }
}

spl_autoload_register('autoload_one');