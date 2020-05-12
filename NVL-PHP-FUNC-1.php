<!DOCTYPE html>
<html>	
<head>
	<meta charset="utf-8">
 	<title> Prework </title>
<style>

</style> 
</head>
	<body>


<?php


function cuentaLetraA($a){
$e= str_split($a);
$i=0;
foreach($e as $k => $v){
	if($v == "a"){
		$i++;}
}
echo $i;
}
cuentaLetraA("la verdad absoluta no existe");


?>



	</body>	    
</html>