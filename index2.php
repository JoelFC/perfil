<?php
 session_start();
 $_SESSION['matricula'] = $_POST['matricula'];
 if(isset($_POST['nombre']))
    $_SESSION['nombre'] = $_POST['nombre'];
 else
 	 $_SESSION['nombre']='Nombre no capturado';
 $_SESSION['matricula'] = $_POST['matricula'];
 $_SESSION['edad'] = $_POST['edad'];
 $_SESSION['edocivil']= $_POST['edocivil'];
 $_SESSION['lugarorigen'] = $_POST['lugarorigen'];
 $_SESSION['pagacarrera']= $_POST['pagacarrera'];


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Encuesta</title>
	<style>
      body{
      	   font-size: 25px;
      }

    table{
    	margin:auto;
    }
		#boton:hover{
			transform: scale(1.2, 1.3);
			background-color: #0af037;
				font-weight: bold;
	 }
	</style>

</head>
<body>
<?php
    echo $_SESSION['nombre']." --> ".$_SESSION['matricula']."<br> "; //.$_POST['edad']." <br>".$_POST['edocivil']." ".$_POST['lugarorigen']." ".$_POST['pagacarrera'];
 ?>
<form action="guardar.php" method = "post">
	<img src="logo_univa.jpg" alt="" style="width:550px;height:150px; margin-left:200px">
<table>
<tr style="background-color: cyan">
	<td>No</td>
	<td style="text-align:center">Pregunta</td>
	<td></td>
	<td></td>
</tr>
<tr style="background-color: #e3d8d8">
	<td style="width:100px" >1</td>
	<td>¿Vives solo? </td>
	<td><label for="solos">Si</label><input type="radio" name="solo" id="solos" value="solo_si" > </td>
	<td><label for="solon">No</label><input type="radio" name="solo" id="solon" value="Solo_no"></td>
</tr>
<tr>
	<td>2</td>
	<td>Revalidando/carrera trunca/estuviste en otra universidad o carrera </td>
	<td><label for="revalsi">Si</label><input type="radio" name="reval" id="revalsi" value="reval_si"> </td>
	<td><label for="revalno">No</label><input type="radio" name="reval" id="revalno" value="reval_no"></td>
</tr>
<tr style="background-color: #e3d8d8">
	<td>3</td>
	<td>Tu lugar de procedencia es fuera de la zona metropolitana de Guadalajara</td>
	<td><label for="fuerasi">Si</label><input type="radio" name="fuera" id="fuerasi" value="fuera_si"></td>
	<td><label for="fuerano">No</label><input type="radio" name="fuera" id="fuerano" value="fuera_no"></td>
</tr>
<tr>
	<td>4</td>
	<td>¿Tus padres están divorciados o separados?</td>
	<td><label for="divorsi">Si</label><input type="radio" name="divor" id="divorsi" value="divor_si"></td>
	<td><label for="divorno">No</label><input type="radio" name="divor" id="divorno" value="divor_no"></td>
</tr>
<tr style="background-color: #e3d8d8">
	<td>5</td>
	<td>En los últimos meses me he sentido SOLO </td>
	<td><label for="sentisi">Si</label><input type="radio" name="senti" id="sentisi" value="senti_si"></td>
	<td><label for="sentino">No</label><input type="radio" name="senti" id="sentino" value="senti_no"></td>
</tr>
<tr>
	<td>6</td>
	<td>En los últimos meses me he sentido ENOJADO</td>
	<td><label for="enojsi">Si</label><input type="radio" name="enoj" id="enojsi" value="enoj_si"></td>
	<td><label for="enojno">No</label><input type="radio" name="enoj" id="enojno" value="enoj_no"></td>
</tr>
<tr style="background-color: #e3d8d8">
	<td>7</td>
	<td>En los últimos meses me he sentido con DESESPERANZA</td>
	<td><label for="desessi">Si</label><input type="radio" name="deses" id="desessi" value="deses_si"></td>
	<td><label for="desesno">No</label><input type="radio" name="deses" id="desesno" value="deses_no"></td>
</tr>
<tr>
	<td>8</td>
	<td>En los últimos meses he sentido que pierdo el control de mí</td>
	<td><label for="contrsi">Si</label><input type="radio" name="contr" id="contrsi" value="contr_si"></td>
	<td><label for="contrno">No</label><input type="radio" name="contr" id="contrno" value="contr_no"></td>
</tr>
<tr style="background-color: #e3d8d8">
	<td>9</td>
	<td>En los últimos meses he tenido ideas suicidas</td>
	<td><label for="suicisi">Si</label><input type="radio" name="suici" id="suicisi" value="suici_si"></td>
	<td><label for="suicino">No</label><input type="radio" name="suici" id="suicino" value="suici_no"></td>
</tr>
<tr>
	<td>10</td>
	<td>Me han diagnosticado con alguna enfermedad psiquiátrica o psicológica </td>
	<td><label for="psicsi">Si</label><input type="radio" name="psic" id="psicsi" value="psic_si"></td>
	<td><label for="psicno">No</label><input type="radio" name="psic" id="psicno" value="psic_no"></td>
</tr>
<tr style="background-color: #e3d8d8">
	<td>11</td>
	<td>Tengo problemas para trabajar bajo presión</td>
	<td><label for="pressi">Si</label><input type="radio" name="pres" id="pressi" value="pres_si"></td>
	<td><label for="presno">No</label><input type="radio" name="pres" id="presno" value="pres_no"></td>
</tr>
<tr>
	<td>12</td>
	<td>He tomado medicamentos para controlar mi estado emocional </td>
	<td><label for="emocsi">Si</label><input type="radio" name="emoc" id="emocsi" value="emoc_si"></td>
	<td><label for="emocno">No</label><input type="radio" name="emoc" id="emocno" value="emoc_no"></td>
</tr>
<tr style="background-color: #e3d8d8">
	<td>13</td>
	<td>Considero que tengo problemas para acatar o seguir órdenes</td>
	<td><label for="acatsi">Si</label><input type="radio" name="acat" id="acatsi" value="acat_si"></td>
	<td><label for="acatno">No</label><input type="radio" name="acat" id="acatno" value="acat_no"></td>
</tr>
<tr>
	<td>14</td>
	<td>He participado en actividades delictivas </td>
	<td><label for="delicsi">Si</label><input type="radio" name="delic" id="delicsi" value="delic_si"></td>
	<td><label for="delicno">No</label><input type="radio" name="delic" id="delicno" value="delic_no"></td>
</tr>
<tr style="background-color: #e3d8d8">
	<td>15</td>
	<td>He consumido drogas o fármacos para alterar mis estados de ánimo</td>
	<td><label for="animsi">Si</label><input type="radio" name="anim" id="animsi" value="anim_si"></td>
	<td><label for="animno">No</label><input type="radio" name="anim" id="animno" value="anim_no"></td>
</tr>
<tr>
	<td>16</td>
	<td>Estoy de acuerdo con el uso recreativo de marihuana y/o sustancias tóxicas</td>
	<td><label for="toxicsi">Si</label><input type="radio" name="toxic" id="toxicsi" value="toxic_si"></td>
	<td><label for="toxicno">No</label><input type="radio" name="toxic" id="toxicno" value="toxic_no"></td>
</tr>
<tr style="background-color: #e3d8d8">
	<td>17</td>
	<td>Tengo duda respecto a la carrera que he elegido </td>
	<td><label for="dudasi">Si</label><input type="radio" name="duda" id="dudasi" value="duda_si"></td>
	<td><label for="dudano">No</label><input type="radio" name="duda" id="dudano" value="duda_no"></td>
</tr>
<tr>
	<td>18</td>
	<td>He contestado HONESTAMENTE este formato</td>
	<td><label for="honestsi">Si</label><input type="radio" name="honest" id="honestsi" value="honest_si"></td>
	<td><label for="honestno">No</label><input type="radio" name="honest" id="honestno" value="honest_no"></td>
</tr>
<tr style="background-color: #e3d8d8">
	<td>19</td>
	<td>Deseo modificar alguna de mis respuestas anteriores </td>
	<td><label for="modifsi">Si</label><input type="radio" name="modif" id="modifsi" value="modif_si"></td>
	<td><label for="modifno">No</label><input type="radio" name="modif" id="modifno" value="modif_no"></td>
</tr>
<tr>

</tr>

</table>
<input type="submit" id="boton" style="width:130px; height:80px; margin-left: 550px; margin-top: 20px;  background-color: #5af278;" value="Terminar" >
</form>
</body>
</html>
