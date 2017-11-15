<?php


class ManuelEntretien
{
  private $nbKmVidange = 15000;
  private $nbKmDistribution = 100000;
  private $nbYearGazAirConditionne = 5;

// ======================== CONSTRUCTEUR ==============================//

  public function __construct($nbKmVidange, $nbKmDistribution, $nbYearGazAirConditionne)
  {
    $this->nom = $nbKmVidange;
    $this->nbKmDistribution = $nbKmDistribution;
    $this->nbYearGazAirConditionne = $nbYearGazAirConditionne;
  }

// ======================== SETTEUR ==============================//

  public function setVidange($nbKmVidange){
    $this->nbKmVidange = $nbKmVidange;
  }

  public function setDistribution($nbKmDistribution){
    $this->nbKmDistribution = $nbKmDistribution;
  }

  public function setAirCond($nbYearGazAirConditionne){
    $this->nbYearGazAirConditionne = $nbYearGazAirConditionne;
  }

// ======================== GETTEUR ==============================//

  public function getVidange() {
    return $this->nbKmVidange;
  }

  public function getDistribution() {
    return $this->nbKmDistribution;
  }

  public function getAirCond() {
    return $this->nbYearGazAirConditionne;
  }

}
