<?php
   session_start();
   $_SESSION["nombre"] = $_POST['nombre'];
   $_SESSION["grupo"] = $_POST['grupo'];
   
   $_SESSION["sexo"] =  isset($_POST['sexo'])?$_POST['sexo']:"Femenino"; 
   $_SESSION["edad"] =  $_POST['edad'];
   $_SESSION["vivocon"] =  $_POST['vivocon'];
   $_SESSION["otro"] =  $_POST['otro'];
   $_SESSION["revalidandoTrunca"] =  $_POST['revalidandoTrunca'];
   $_SESSION["soyForaneo"] =  $_POST['soyForaneo'];
   
   $_SESSION["dom_telefono"] =  $_POST['dom_telefono'];
   $_SESSION["dom_correo"] =  $_POST['dom_correo'];
?>

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
        echo "<div>";
        echo "<h2> Datos Personales</h2>";
        echo "Nombre: ".$_SESSION['nombre']."  Sexo: ".$_SESSION['sexo']."  Edad: ".$_SESSION['edad']." <br>";
        echo "Papá se dedica a: ".$_SESSION['dedica_papa']."  Mamá se dedica a: ".$_SESSION['dedica_mama']." <br>";
        echo "Num_hnos: ".$_SESSION['num_hnos']." Lugar en hermanos: ".$_SESSION['lugar_hnos']." <br>";
        echo "Vivo con: ".$_SESSION['vivo_con']." <br>";
        echo "<h1>  Domicilio </h1>";
        echo "Calle: ".$_SESSION['dom_calle']." Num_Ext Int : ".$_SESSION['dom_numext_int']." <br>";
        echo "Colonia: ".$_SESSION['dom_colonia']."  Ciudad: ".$_SESSION['dom_ciudad']." <br>";
        echo "Telefono: ".$_SESSION['dom_telefono']."   Correo: ".$_SESSION['dom_correo']."<br>"; 
        echo "</div>";
        $elsexo = (isset($_POST['sexo'])?$_POST['sexo']:"No selected" );
        echo $elsexo;
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
