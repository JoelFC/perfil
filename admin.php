<?php
   session_start();

   //proceso de guardado en BD

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
            width: 700px;
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
          $sal="ViveSolo<br>";
        }
        if($row->reval == 1){
          $sal.=" Revalidando<br>";
        }
        if($row->fuera == 1){
          $sal.=" VengoDeFuera<br>";        
        }
        if($row->divor == 1){
          $sal.=" PadresDivorciados<br>";        
        }
        if($row->senti == 1){
          $sal.=" MeSientoSolo<br>";        
        }
        if($row->enoj == 1){
          $sal.=" EstoyEnojado<br>";        
        }
        if($row->deses == 1){
          $sal.=" Desesperado<br>";        
        }
        if($row->contr == 1){
          $sal.=" PierdoControl<br>";        
        }
        if($row->suici == 1){
          $sal.=" PiensoSuicidarme<br>";        
        }
        if($row->psic){
          $sal.=" EnfermedadPsico<br>";        
        }
        if($row->pres){
          $sal.=" ProblemasTrabajoBajoPresion<br>";        
        }
        if($row->emoc){
          $sal.=" TomoMedicamentosControlEstadoEmocional<br>";        
        }
        if($row->acat){
          $sal.=" ProblemasAcatarOrdenes<br>";        
        }
        if($row->delic){
          $sal.=" ActividadesDelictivas<br>";        
        }
        if($row->anim){
          $sal.=" ConsumoDrogasParaEstadoDeAnimo<br>";        
        }
        if($row->toxic){
          $sal.=" DeAcuerdoConsumoDrogas<br>";        
        }
        if($row->duda){
          $sal.=" DudasDeCarrera<br>";        
        }
        if($row->honest==0){
          $sal.=" NoContesteHonestamente<br>";        
        }
        if($row->modif){
          $sal.=" DeseoModificar<br>";        
        }
        
        //pDebug($sal);
        echo "<tr> <td>$row->matricula</td><td>$row->nombre</td><td> $sal</td> </tr>";
       }
       echo "</table>";
        ?>
        
      </div>
    </div>	
</body>
</html>
