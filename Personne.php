<?php
  class Personne{
  public $name;
  public $address;
  public $zipCode;
  public $phone;
  public $email;
  
public function getName(){
    return $this->name;

}

public function setName($name){
    $this->name = $name;
  }
}