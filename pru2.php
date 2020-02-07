<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Encuesta</title>
    <style>
    #num1{
    	width:100%;       
        margin-left: 50px;
        padding: 30px;
     	background-color: yellow;
    }
     p{
     	width:100%;
        margin-left: 130px;
     	padding: 10px;
     	font-size: 20px
     }
     #boton:hover{
        transform: scale(1.2, 1.3);
        background-color: #0af037;
          font-weight: bold;
     }
     #num2{
        width:100%;       
        margin-left: 50px;
        padding: 30px;
     	background-color: cyan;
     }
    </style>
</head>
<body>
    <?php
    /*
      echo "Me llamo ". $_POST['nombre']. " y vivo con ".$_POST['vivocon'];
      $var = $_POST['vivocon'];
      if($var =='otro'){
          echo "Vivo con ".$_POST['otro'];
       }
       */
    ?>
	<div id="header">
		<img src="logo_univa.jpg" alt="" style="width:1024px;height:250px;">
	</div>
	<h1 id="num1">Cuestionario para primer semestre, Medicina</h1>
	<h1 id="num2">Conociéndote mejor</h1>
	<form action="pru3.html">
         <p>Nos gustaría conocerte un poco. Para ello, hemos preparado las siguientes preguntas.</p>    
         <p>Te pedimos que contestes con honestidad</p>
         <p>     Por Favor:</p>
         <p>          -Lee cuidadosamente cada una de las preguntas</p>
         <p>          -Piensa cómo te fué durante los últimos 6 meses</p>
         <p>          -Marca la respuesta que mejor te describa</p>
		
         <input type="submit" id="boton" value="Comenzar" style="width:130px; height:80px; margin-left: 450px; margin-top: 20px;  background-color: #5af278;">
	</form>
</body>
</html>
