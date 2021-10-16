
<!DOCTYPE html>

<html>

<head>
<meta charset="UTF-8">
<title>Mi primer PHP</title>

</head>
<body>

<?php

$autos=array(
              1=>array('KIA'=>'ROJO'),
              2=>array('BMW'=>'NEGRO'),
              3=>array('HONDA'=>'BLANCO'),
           );
  
  ECHO "El auto es de color=".$autos[1]['KIA']; 
  ECHO "El auto es de color=".$autos[2]['BMW'];
  ECHO "El auto es de color=".$autos[3]['HONDA'];        

?>
    
</body>

</html>