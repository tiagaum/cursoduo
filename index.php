<?php
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);


include "funcoes.php";

$valorDoFormulario = @$_POST['media'];

//numerosPrimos (0,50);



?>


<!DOCTYPE html>
<html>
<head>
	<title>pagina inicial</title>
	<meta />
</head>
<body>

<form action="index.php" method="post">
	
<input type="text" value="" name="media"></input>

<input type="submit" value="enviar"></input>
</form>
<?php echo media($valorDoFormulario);?>

<?php


for ($j=0; $j <=10 ; $j++) {
	for ($i=0; $i <=10 ; $i++) {
		definirX ($j,$i);
	}
echo "<br>";


}



?>


</body>
</html>



