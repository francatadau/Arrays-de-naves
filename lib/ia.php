<?php
/**
 *
 */
class ia
{
  //Declaramos las propiedades
  public $fila = '3';
  public $columna = '1';

  //Declaramos el metodo
  public function getFila(){
    return $this->fila;
  }
  public function getColumna(){
    return $this->columna;
  }
  // Setters
  public function setFila($fil){
    if ($fil>3){
    $this->fila=3;
  } elseif ($fil<0){
    $this->fila=0;
  }else {
    $this->fila=$fil;
  }
}
  public function setColumna($col){
    if ($col>3){
    $this->columna=3;
  } elseif ($col<0){
    $this->columna=0;
  } else {
    $this->columna=$col;
  }

  }
  // Aleatorio
  public function RandomPos(){
    $this->columna=rand(0,3);
    $this->fila=rand(0,3);
  }
}
?>
