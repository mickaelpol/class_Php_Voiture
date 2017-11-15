<?php

class Voiture
{
  private $marque;
  private $serie;
  private $puissance;
  private $year;

  private $manuelEntretien;
  private $apparence;

//=============  CONSTRUCTEUR  ==============//

  function __construct($marque, $serie, $puissance, $year, $apparence, $manuelEntretien)
  {

    $this->marque = $marque;
    $this->serie = $serie;
    $this->puissance = $puissance;
    $this->year = $year;
    $this->manuelEntretien = $manuelEntretien;
    $this->apparence = $apparence;

  }

//=============  SETTEUR  ==============//
  public function setMarque($marque){
    $this->marque = $marque;
  }

  public function setSerie($serie){
    $this->serie = $serie;
  }

  public function setPuissance($puissance){
    $this->puissance = $puissance;
  }

  public function setYear($year){
    $this->year = $year;
  }

  public function setApparence($apparence){
    $this->apparence = $apparence;
  }

  public function setManuelEntretien($manuelEntretien){
    $this->manuelEntretien = $manuelEntretien;
  }

//=============  GETTEUR  ==============//

  public function getMarque() {
    return $this->marque;
  }

  public function getSerie() {
    return $this->serie;
  }

  public function getPuissance() {
    return $this->puissance;
  }

  public function getYear() {
    return $this->year;
  }

  public function getApparence() {
    return $this->apparence;
  }

  public function getManuelEntretien() {
    return $this->manuelEntretien;
  }
}
