
<!DOCTYPE html>

<html>

<head>
<meta charset="UTF-8">
<title>Mi primer PHP</title>

</head>
<body>

 <?php

   
   //CICLO FOR
  //  for($i=1; $i <= 10 ; $i++ ){

  //   ECHO "Numero natural[$i]<br/>";


  //  }


  //CICLO WHILE
  // $varNum=1;

  // while($varNum <= 10){
  //    ECHO "Numero natural[$varNum]<br/>";
  //   $varNum++;    
  // }

  //CICLO DO WHILE
  // $varNum=0;
  // do{
  //   ECHO "Numero natural[$varNum]<br/>";
  //   $varNum++;
  // }while($varNum <= 10);
  
//CICLO FOREACH

// $arreglo=['uno','dos','tres'];

// foreach($arreglo as $row=>$low){

// ECHO "Pos:$row => Contenido:$low<br/>";

// }

$autos=['KIA','CHEVROLET','HONDA']; 

for($i=0 ; $i < count($autos); $i++){

  ECHO "Marca:".$autos[$i]."<br/>";

}


            ?>
     
</body>

</html>