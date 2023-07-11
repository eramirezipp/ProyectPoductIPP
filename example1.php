<?php
class Vehiculo {
  private $marca;
  public $color;
  public function __contruct($marca, $color){
    $this->marca = $marca;
    $this->color = $color;
  }
}
class Camion extends Vehiculo {
  public $carga;
  public function __contruct($marca, $color, $carga){
    parent::__contruct($marca,$color);
    $this->carga = $carga;
  }
}
echo "Hello, world!\n";
$textentrada = "dame tu apellido: ";
echo $textentrada;
$entrada = fgets(STDIN); // input("por favor deme su entrada")
echo $entrada;
echo "Dame la edad de la primera persona";
$entrada1 = fgets(STDIN);
echo "Dame la edad de la segunda persona";
$entrada2 = intval(fgets(STDIN));
if ($entrada1 == $entrada2){
  echo "edades iguales";
} elseif ($entrada1 >= $entrada2){
  echo "primera edad es mayor";

} else {
  echo "No son iguales";
}
echo "Como estas comprando";
$indexcombobox = fgets(STDIN);
switch ($indexcombobox){
  case 1:
    echo "Comprando por credito";
    break;
  case 4:
    echo "Comprando por debito";
    break;
  default:
    echo "Comprando por efectivo";
}
$carritocompra = [1,2,5,33,55,88,3,4,5];

for ($i = 0; $i<count($carritocompra); $i++){
     echo $carritocompra[$i] . "\n";
}
$i=0;
while ($i < count($carritocompra)){
  echo $carritocompra[$i] . "\n";
  $i++;
}