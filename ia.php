<?php
class ia
{
  //propiedades de las cuales se definen mediante public
  public $columna = 0;
  public $fila = 1;
  //declaracion de un metodo
  //en metodos usamos public function, get pide y return devuelve
  public function getColumna() {
    return $this->columna;
  }
  public function getFila(){
    //rand, es aleatorio lleva a un codigo el cual hara que sea aleatoria la eleccion entre los parametros que le damos
    return $this->fila;
  }
  //Aqui estan los setter.
  public function setfila($fil) {
    if ($fil>3){
    $this->fila = 3;
  }
  elseif ($fil<0){
    $this->fila = 0;
  }
  else {
    $this->fila = $fil;
  }
}
  public function setcolumna($col) {
    if ($col>3){
    $this->columna = 3;
  }
  elseif ($col<0){
    $this->columna = 0;
  }
  else {
    $this->columna = $col;
  }
}
  //Aqui ponemos el random
  public function randompos(){
    $this->fila = rand(0,3);
    $this->columna = rand(0,3);
  }
}
 ?>
