
<!DOCTYPE html>

<html>

<head>
<meta charset="UTF-8">
<title>Mi primer PHP</title>

</head>
<body>

<?php for($i=0;$i<10;$i++): 
  
  if($i==8):
  ?>

<input type="text" id="caja1" placeholder="dato">

<?php 

endif; 

endfor; 
?>

</body>

</html>