
<!DOCTYPE html>

<html>

<head>
<meta charset="UTF-8">
<title>Mi primer PHP</title>

</head>
<body>

 <?php

class auto{

public $color;
public $tipo; 

function __construct(){

}

function setColor($color){
  $this->color=$color;
}

function setTipo($tipo){
  $this->tipo=$tipo;
}

function getColor(){
  return $this->color;
}

function getTipo(){
  return $this->tipo;
}

}

$probandoClase = new auto();

$probandoClase->setColor('ROJO');
$probandoClase->setTipo('CAMIONETA');

ECHO 'EL AUTO ES DE COLOR:'.$probandoClase->getColor().'<br/>';
ECHO 'EL AUTO ES DE TIPO:'.$probandoClase->getTipo().'<br/>';


            ?>

<script>



</script>

</body>

</html>