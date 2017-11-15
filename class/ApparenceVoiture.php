<?php

class ApparenceVoiture
{
  private $couleur = "blanc";
  private $isVitreTeintes = false;

  public function __construct($couleur, $isVitreTeintes)
  {
    $this->couleur = $couleur;
    $this->isVitreTeintes = $isVitreTeintes;
  }

  public function getCouleur() {
    return $this->couleur;
  }
  public function getTeinte() {
    return $this->isVitreTeintes;
  }


  public function setCouleur($couleur){
    $this->couleur = $couleur;
  }
  public function setTeinte($isVitreTeintes){
      $this->isVitreTeintes = $isVitreTeintes;
    }


}
