<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Resultado</title>
</head>
<body>
     <?php 
     $nombre = $_POST['text1'];
     $horas = $_POST['text2'];
     $pago = 0;  
     $extras = 0; 

     if ($horas <= 40) {
     	$pago = $horas *20;

     	echo "$nombre tiene un pago semanal de $pago pesos, porque trabajo $horas horas."; 
     }else{
           $extras = $horas - 40;
           $pago = 800 + ($extras * 25);
         echo "$nombre tiene un pago semanal de $pago pesos, porque trabajo $horas horas las cuales $extras son extras.";
     }
     ?>
</body>
</html>
