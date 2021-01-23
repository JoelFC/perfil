<?php
   session_start();

<<<<<<< HEAD
   //proceso de guardado en BD

include "conecta.php";
include "debugger.php";
include "fpdf/fpdf.php"; 
=======
   //    proceso de guardado en BD
   // este es un comentario
include "conecta.php";
include "debugger.php";
 
>>>>>>> 570b2f3428e0937131679527c54eea97f65b11bb
   //Al final deshacer la sesion y variables

 $qLista = "select * from aplicacioninstr";
 // echo  $qinsAlu."<br>";
 $res =  $mysqli->query($qLista);
<<<<<<< HEAD
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->SetX(180);
    // Título
    $this->Cell(200,10,'Resultados de Encuesta',0,0,'C');
    // Salto de línea
    $this->Ln(30);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

  $mysqli->close();
 // header("Content-Type: text/html; charset=iso-8859-1 ");
  session_unset();
  session_destroy();
  $pdf = new PDF('P','pt','Letter');
  $pdf->AddPage();
  $pdf->setFont('Arial','B',15);
  $pdf->setTitle("Reporte de Cuestionario");
    	  //Cell(width,height,text,borde,saltoLinea,align,fill)
        //borde 0 sin borde, 1 si, 
        //salto  1 con salto, 0 a la derecha, 2 debajo
        //align  'C' centro, 'L' a la izquierda, 'R' derecha
        //Fill, 1 si, 0 no  
         //$pdf->Cell(20,10,'Title',1,1,'C');(255,255,255);
        $pdf->SetFillColor(0,255,255);
        $pdf->Cell(100,20, "Matricula",1,0,'C',1);
        $pdf->Cell(250,20,"Nombre",1,0,'C',1);
        $pdf->Cell(200,20,"Status",1,1,'C',1);
=======

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
>>>>>>> 570b2f3428e0937131679527c54eea97f65b11bb
       
       while($row = $res->fetch_object()) {         
        $sal="";
        if($row->solo == 1){
<<<<<<< HEAD
          $sal="ViveSolo";
        }
        if($row->reval == 1){
          $sal.=" Revalidando";
        }
        if($row->fuera == 1){
          $sal.=" VengoDeFuera";        
        }
        if($row->divor == 1){
          $sal.=" PadresDivorciados";        
        }
        if($row->senti == 1){
          $sal.=" MeSientoSolo";        
        }
        if($row->enoj == 1){
          $sal.=" EstoyEnojado";        
        }
        if($row->deses == 1){
          $sal.=" Desesperado";        
        }
        if($row->contr == 1){
          $sal.=" PierdoControl";        
        }
        if($row->suici == 1){
          $sal.=" PiensoSuicidarme";        
        }
        if($row->psic){
          $sal.=" EnfermedadPsico";        
        }
        if($row->pres){ 
          $sal.=" ProblemasTrabajoBajoPresion";        
        }
        if($row->emoc){
          $sal.=" TomoMedicamentosControlEstadoEmocional";        
        }
        if($row->acat){
          $sal.=" ProblemasAcatarOrdenes";        
        }
        if($row->delic){
          $sal.=" ActividadesDelictivas";        
        }
        if($row->anim){
          $sal.=" ConsumoDrogasParaEstadoDeAnimo";        
        }
        if($row->toxic){
          $sal.=" DeAcuerdoConsumoDrogas";        
        }
        if($row->duda){
          $sal.=" DudasDeCarrera";        
        }
        if($row->honest==0){
          $sal.=" NoContesteHonestamente";        
        }
        if($row->modif){
          $sal.=" DeseoModificar";        
        }
        
        //pDebug($sal);
        //Cell(width,height,text,borde,saltoLinea,align,fill)
        //borde 0 sin borde, 1 si, 
        //salto  1 con salto, 0 a la derecha, 2 debajo
        //align  'C' centro, 'L' a la izquierda, 'R' derecha
        //Fill, 1 si, 0 no     'windows-1252'
        //$sal = iconv('utf-8','windows-1252', $sal);

        $pdf->Cell(100,20,$row->matricula,1,0,'L',0);
        //$nombre = html_entity_decode($row->nombre);

        $pdf->Cell(250,20,utf8_decode($row->nombre),1,0,'L',0);
        $pdf->SetFontSize(10); 
       
        $pdf->MultiCell(250,20,$sal,1,'L',0);
        $pdf->SetFontSize(15);
        //$pdf->Cell(200,20,'$sal',1,1,'C',0);
      }
      
        $pdf->Output();
      
       
        ?>
  
=======
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
>>>>>>> 570b2f3428e0937131679527c54eea97f65b11bb
