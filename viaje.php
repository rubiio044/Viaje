<?php

class Viaje{
  
  //Atrivutos
  private $codigo;
  private $destino;
  private $pasajeros;
  private $canMax;
  
  //Metodos
  public function __construct($codigoEnt,$destinoEnt,$pasajerosEnt,$canMaxEnt){
    $this->codigo = $codigoEnt;
    $this->destino = $destinoEnt;
    $this->pasajeros[] = $pasajerosEnt;
    $this->canMax = $canMaxEnt;
  }
  public function getCodigo(){
    return $this->codigo;
  }
  public function getDestino(){
    return $this->destino;
  }
  public function getPasajeros(){
    return $this->pasajeros;
  }
  public function getCanMax(){
    return $this->canMax;
  }
  public function setCodigo($codigoEnt){
    return $this->codigo = $codigoEnt;
  }
  public function setDestino($destinoEnt){
    return $this->destino = $destinoEnt;
  }
  public function setPasajeros($pasajerosEnt){
    return $this->pasajeros = $pasajerosEnt;
  }
  public function setCanMax($canMaxEnt){
    return $this->canMax = $canMaxEnt;
  }
  public function __toString(){
    return "Codigo: ".$this->getCodigo()."\nDestino: ".$this->getDestino()."\nPasajeros: ".$this->getCanMax()."\n";
  }
}
?>