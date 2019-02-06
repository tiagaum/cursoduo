<?php
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);
$variavel = "asas";
//refinindo variaveis
$resultado = 80;

//criando funcoes
function somar($a,$b){

	 $resultado = $a + $b;

	return $resultado;
}

// chamando funcoes
 somar(12,14);



// +
// -
// *
// /
// %

// >
// <
// >=
// <=
// ==  1==2
// =
// ===
// !=
// !==




 function media($nota ){
 	if($nota > 5){
 		$nota = "aprovado";
 	}elseif($nota === 5){
 		$nota = "é exatamente a $nota";
 	}elseif($nota == 5){
 		$nota = "é somente $nota";
 	}else{
 		$nota = "nenhuma das anteriores";
 	}

 	return $nota;

 }




  //media(5);



$valorDoFormulario = @$_POST['media'];





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

</body>
</html>





 