<?php
 require "conecta.php";

 $sqlselect = "select nombre,em5,ae2,fm3,es3 from datos_encuesta";
 $res = $mysqli->query($sqlselect);
 //echo "Error: ".mysqli_connect_errno();
 //echo "Se obtuvieron : ".$res->num_rows."<br>";
 echo "<table border='1'>";
 echo "<tr><td>Nombre Alumno </td><td>Resuelvo conflictos de manera pacifica</td><td>Me gusto a mi mismo</td><td>Tuvimos fuertes discusiones o peleas en casa</td><td>Tengo problemas para trabajar bajo presion</td> </tr>";
 /*

     <td> ".$row->cr3." </td>
     <td> ".$row->cr4." </td>
     <td> ".$row->cr5." </td>
     <td> ".$row->cr6." </td>
     <td> ".$row->cr7." </td>
     <td> ".$row->cr8." </td>
 */
 while($row = $res->fetch_object()){
 	$salida = "<tr>";
     $salida.="<td>". $row->nombre." </td>";
     if($row->em5=="Nunca"){
     	$salida.="<td style='color:red'>".$row->em5."</td>";
     }else{
        $salida.="<td> ".$row->em5." </td>";
     } 
    if($row->ae2 =="Nunca"){
       $salida.="<td style='color:red'> ".$row->ae2." </td>";
    }else{
       $salida.="<td> ".$row->ae2." </td>";	
    }
     if($row->fm3 =="Siempre"){
     	 $salida.="<td style='color:red'> ".$row->fm3." </td>";	
     }else{
        $salida.="<td> ".$row->fm3." </td>";	
     }
     if($row->es3 =="Siempre"){
         $salida.="<td style='color:red'> ".$row->es3."</td>";
     }else{
        $salida.="<td> ".$row->es3."</td>";
     }

     $salida .="</tr>";
     echo $salida;

 }
echo "</table>";
?>