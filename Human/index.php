<?php
namespace Human;

require_once '../autoload.php';

$climb = new \Action\Climb($can_climb = true);
print $climb;
print '<br />';

$run = new \Action\Run($can_run = true);
print $run;
print '<br />';

$swim = new \Action\Swim($can_swim = true);
print $swim;
print '<br />';

$dog = new \Animal\Dog('Dengo');
print $dog->getDog();
print '<br />';

$tiger = new \Animal\Tiger('Milo');
print $tiger->getTiger();
print '<br />';