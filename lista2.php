<?php
 require "conecta.php";

 $sqlselect = "select nombre,cr3,cr4,cr5,cr6,cr7,cr8 from datos_encuesta";
 $res = $mysqli->query($sqlselect);
 //echo "Error: ".mysqli_connect_errno();
 //echo "Se obtuvieron : ".$res->num_rows."<br>";
 echo "<table border='1'>";
 echo "<tr><td>Nombre Alumno </td><td>He consumido Bebidas Alcoholicas</td><td>He consumido drogas </td><td>Dejo de comer para sentirme mejor con mi imagen</td><td>Me autolesiono</td><td>Practico Juegos que ponen en riesgo mi salud o vida</td><td> He tenido ideas suicidas</td></tr>";

 while($row = $res->fetch_object()){
 	$salida = "<tr>";
     $salida.="<td>". $row->nombre." </td>";
     if($row->cr3=="Siempre"){
     	$salida.="<td style='color:red'>".$row->cr3."</td>";
     }else{
        $salida.="<td> ".$row->cr3." </td>";
     } 
    if($row->cr4 =="Siempre"){
       $salida.="<td style='color:red'> ".$row->cr4." </td>";
    }else{
       $salida.="<td> ".$row->cr4." </td>";	
    }
     if($row->cr5 =="Siempre"){
     	 $salida.="<td style='color:red'> ".$row->cr5." </td>";	
     }else{
        $salida.="<td> ".$row->cr5." </td>";	
     }
     if($row->cr6 =="Siempre"){
         $salida.="<td style='color:red'> ".$row->cr6."</td>";
     }else{
        $salida.="<td> ".$row->cr6."</td>";
     }
          if($row->cr7 =="Siempre"){
         $salida.="<td style='color:red'> ".$row->cr7."</td>";
     }else{
        $salida.="<td> ".$row->cr7."</td>";
     }
          if($row->cr8 =="Siempre"){
         $salida.="<td style='color:red'> ".$row->cr8."</td>";
     }else{
        $salida.="<td> ".$row->cr8."</td>";
     }


     $salida .="</tr>";
     echo $salida;

 }
echo "</table>";
?>