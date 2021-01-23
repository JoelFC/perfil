<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="refresh" content="10; url=http://encuestamedicina.univa.mx/"/>
	<title>Encuesta</title>
    <style>
    #num1{
    	width:100%;       
        margin-left: 50px;
        padding: 30px;
     	background-color: yellow;
    }
    
     #num2{
        width:100%;       
        margin-left: 50px;
        padding: 30px;
     	background-color: cyan;
     }
     div{
        margin:auto;
        text-align: center;
     }
    </style>
</head>
<body>
	<div id="header">
		<img src="logo_univa.jpg" alt="" style="width:1024px;height:250px;">
	</div>

    <?php
            include "debugger.php";
            include "conecta.php";

             $emocional1 = isset($_POST['em1'])? $_POST['em1']:"Siempre" ;
             $emocional2 = isset($_POST['em2'])? $_POST['em2'] :"Nunca";
             $emocional3 = isset($_POST['em3'] )?$_POST['em3']:"Nunca";
             $emocional4 = isset($_POST['em4'])? $_POST['em4'] :"Nunca";
             $emocional5 = isset($_POST['em5'])? $_POST['em5']:"Siempre";
             
              
             $autoestima1 = isset($_POST['ae1'])?$_POST['ae1']:"Siempre";
             $autoestima2 = isset($_POST['ae2'])?$_POST['ae2']:"Siempre";
             $autoestima3 = isset($_POST['ae3'])?$_POST['ae3']:"Siempre";
             $autoestima4 = isset($_POST['ae4'])?$_POST['ae4']:"Siempre";
             
             $familia1 = isset($_POST['fm1'])? $_POST['fm1']:"Siempre";
             $familia2 = isset($_POST['fm2'])? $_POST['fm2']:"Siempre";
             $familia3 = isset($_POST['fm3'])? $_POST['fm3']:"Nunca";
             $familia4 = isset($_POST['fm4'])? $_POST['fm4']:"Nunca";
             $familia5 = isset($_POST['fm5'])? $_POST['fm5']:"Siempre";
             $familia6 = isset($_POST['fm6'])? $_POST['fm6']:"Siempre";
             $familia7 = isset($_POST['fm7'])? $_POST['fm7']:"Siempre";
             
               
             $amigos1 = isset($_POST['am1'])? $_POST['am1']:"Siempre" ;
             $amigos2 = isset($_POST['am2'])? $_POST['am2']:"Siempre" ;
             $amigos3 = isset($_POST['am3'])? $_POST['am3']:"Siempre" ;
             $amigos4 = isset($_POST['am4'])? $_POST['am4']:"Nunca" ;
           
             $escuela1 = isset($_POST['es1'])? $_POST['es1']:"Siempre" ;
             $escuela2 = isset($_POST['es2'])? $_POST['es2']:"Nunca" ;
             $escuela3 = isset($_POST['es3'])? $_POST['es3']:"Nunca" ;
             $escuela4 = isset($_POST['es4'])? $_POST['es4']:"Siempre" ;
             $escuela5 = isset($_POST['es5'])? $_POST['es5']:"Nunca" ;
             $escuela6 = isset($_POST['es6'])? $_POST['es6']:"Siempre" ;
             $escuela7 = isset($_POST['es7'])? $_POST['es7']:"Siempre" ;
             $escuela8 = isset($_POST['es8'])? $_POST['es8']:"Nunca" ;
             $escuela9 = isset($_POST['es9'])? $_POST['es9']:"Nunca" ;
             $escuela10 = isset($_POST['es10'])? $_POST['es10']:"Nunca" ;

             $cond_riesgo1 = isset($_POST['cr1'])? $_POST['cr1']:"Nunca" ;
             $cond_riesgo2 = isset($_POST['cr2'])? $_POST['cr2']:"Nunca" ;
             $cond_riesgo3 = isset($_POST['cr3'])? $_POST['cr3']:"Nunca" ;
             $cond_riesgo4 = isset($_POST['cr4'])? $_POST['cr4']:"Nunca" ;
             $cond_riesgo5 = isset($_POST['cr5'])? $_POST['cr5']:"Nunca" ;
             $cond_riesgo6 = isset($_POST['cr6'])? $_POST['cr6']:"Nunca" ;
             $cond_riesgo7 = isset($_POST['cr7'])? $_POST['cr7']:"Nunca" ;
             $cond_riesgo8 = isset($_POST['cr8'])? $_POST['cr8']:"Nunca" ;
           
             
            
             $psic = $_POST['psic'];
             $psic_data = $_POST['psic_data'];
             $psiq = $_POST['psiq'];
             $psiq_data = $_POST['psiq_data'];
             $medicamentos = $_POST['medicamentos'];
             $dificultades = $_POST['dificultades'];
             $aprendizaje = $_POST['aprendizaje'];

             $id_encuesta=1;
             $sqlIns ="insert into datos_encuesta(id_encuesta,fecha,nombre,grupo,sexo,edad,vivocon,otro,revalidandoTrunca,soyForaneo,dom_telefono,dom_correo,";
             $sqlIns.="em1,em2,em3,em4,em5,ae1,ae2,ae3,ae4,fm1,fm2,fm3,fm4,fm5,fm6,fm7,am1,am2,am3,am4,es1,es2,es3,es4,es5,es6,es7,es8,es9,es10,cr1,cr2,cr3,cr4,cr5,cr6,cr7,cr8,psiq,psiq_data,psic,psic_data,medicamentos,dificultades,aprendizaje) values(";
         
            $sqlIns.="'".$id_encuesta."',now(),'".$_SESSION["nombre"]."','".$_SESSION["grupo"]."','".$_SESSION["sexo"]."','";
            $sqlIns .=$_SESSION['edad']."','".$_SESSION['vivocon']."','";
            $sqlIns.=$_SESSION['otro']."','".$_SESSION['revalidandoTrunca']."','".$_SESSION['soyForaneo']."','";
            $sqlIns.= $_SESSION['dom_telefono']."','".$_SESSION['dom_correo']."','"; 
            $sqlIns.=$emocional1."','".$emocional2."','".$emocional3."','".$emocional4."','".$emocional5."','";
            $sqlIns.=$autoestima1."','".$autoestima2."','".$autoestima3."','".$autoestima4."','";
            $sqlIns.=$familia1."','".$familia2."','".$familia3."','".$familia4."','".$familia5."','".$familia6."','".$familia7."','";
            $sqlIns.=$amigos1."','".$amigos2."','".$amigos3."','".$amigos4."','";
            $sqlIns.=$escuela1.="','".$escuela2."','".$escuela3."','".$escuela4."','".$escuela5."','".$escuela6.="','".$escuela7."','".$escuela8."','".$escuela9."','".$escuela10."','";
            $sqlIns.=$cond_riesgo1."','".$cond_riesgo2."','".$cond_riesgo3."','".$cond_riesgo4."','".$cond_riesgo5."','".$cond_riesgo6."','".$cond_riesgo7."','".$cond_riesgo8."','";
            $sqlIns.=$psiq."','".$psiq_data."','".$psic."','".$psic_data."','".$medicamentos."','".$dificultades."','".$aprendizaje."')";
      //       agregar campos asesoria_psiq, datos_asesoria_psiq, asesoria_psic, datos_asesoria_psic
           pDebug($sqlIns);
             $mysqli->query($sqlIns);
             $mysqli->close();
         
            
          ?>
	<h1 id="num1">Cuestionario para primer semestre, Medicina</h1>
	<h1 id="num2"> Fin del cuestionario Conociéndote mejor</h1>
	     <div>
            <h1> Gracias por tu tiempo!!  </h1>
         </div>
         
    </form>
    
    <?php
           session_destroy();
    ?>
</body>
</html>
