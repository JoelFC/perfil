<?php
   session_start();

   //    proceso de guardado en BD
   // este es un comentario
include "conecta.php";
include "debugger.php";
 
   //Al final deshacer la sesion y variables

 $qLista = "select * from aplicacioninstr";
 // echo  $qinsAlu."<br>";
 $res =  $mysqli->query($qLista);

  $mysqli->close();

  session_unset();
  session_destroy();

?>


<!DOCTYPE html>
<html lang="en<head>
	<meta charset="UTF-8">
	
	<title>Encuesta</title>
    <style>
        h1{
            width: 600px;
            height: 100px;
            border: 2px solid ;
            text-align: center;
            margin-top: auto;
            background-color: cyan;
        }
    </style>
</head> 
<body>
    <div style="margin-left: 120px; text-align: center;">
        <br>
    	   <div style="margin-top: 20px">
           <h1>Resumen de Encuesta</h1>
         </div>
         <div>
    	<?php 
    	 echo "<table border='1'>";   
        echo "<tr style='background-color: cyan'> <td>Matricula</td><td>Nombre</td><td>Status</td> </tr>";
       
       while($row = $res->fetch_object()) {         
        $sal="";
        if($row->solo == 1){
          $sal="Vive Solo";
        }else if($row->reval == 1){
          $sal.=" Revalidando";
        }else if($row->fuera == 1){
          $sal.=" VengoDeFuera";        
        }else if($row->divor == 1){
          $sal.=" PadresDivorciados";        
        }else if($row->senti == 1){
          $sal.=" MeSientoSolo";        
        }else if($row->enoj == 1){
          $sal.=" EstoyEnojado";        
        }else if($row->deses == 1){
          $sal.=" Desesperado";        
        }else if($row->contr == 1){
          $sal.=" PierdoControl";        
        }else if($row->suici == 1){
          $sal.=" PiensoSuicidarme";        
        }else if($row->psic){
          $sal.=" EnfermedadPsico";        
        }else if($row->pres){
          $sal.=" ProblemastrabajoBajoPresion";        
        }else if($row->emoc){
          $sal.=" TomoMedicamentosControlEstadoEmocional";        
        }else if($row->acat){
          $sal.=" ProblemasAcatarOrdenes";        
        }else if($row->delic){
          $sal.=" ActividadesDelictivas";        
        }else if($row->anim){
          $sal.=" ConsumoDrogasParaEstadoDeAnimo";        
        }else if($row->toxic){
          $sal.=" DeAcuerdoConsumoDrogas";        
        }else if($row->duda){
          $sal.=" DudasDeCarrera";        
        }else if($row->honest==0){
          $sal.=" NoContesteHonestamente";        
        }else if($row->modif){
          $sal.=" DeseoModificar";        
        }
        
        pDebug($sal);
        echo "<tr> <td>$row->matricula</td><td>$row->nombre</td><td> $sal</td> </tr>";
       }
       echo "</table>";
        ?>
        
      </div>
    </div>	
</body>
</html>
