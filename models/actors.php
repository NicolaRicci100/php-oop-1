<?php
class Actors
{
  public $name;
  public $role;

  function __construct($name, $role)
  {
    $this->name = $name;
    $this->role = $role;
  }
  public function getActorCard()
  {
    echo 'L`attore ' . $this->name . ' interpreta ' . $this->role;
  }
}
