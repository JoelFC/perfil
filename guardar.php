<?php
   session_start();
   $d_solo = 0;
   if(isset($_POST['solo'])){
        if($_POST['solo'] =='solo_si'){
          $d_solo = 1;
        }
   }    
   $d_reval = 0;
   if(isset($_POST['reval'])){
        if($_POST['reval'] =='reval_si'){
          $d_reval = 1;
        }
   } 

$d_fuera = 0;
   if(isset($_POST['fuera'])){
        if($_POST['fuera'] =='fuera_si'){
          $d_fuera = 1;
        }
   }

   $d_divor = 0;
   if(isset($_POST['divor'])){
        if($_POST['divor'] =='divor_si'){
          $d_divor = 1;
        }
   }
   $d_senti = 0;
   if(isset($_POST['senti'])){
        if($_POST['senti'] =='senti_si'){
          $d_senti = 1;
        }
   }
   $d_enoj = 0;
   if(isset($_POST['enoj'])){
        if($_POST['enoj'] =='enoj_si'){
          $d_enoj = 1;
        }
   }
   $d_deses = 0;
   if(isset($_POST['deses'])){
        if($_POST['deses'] =='deses_si'){
          $d_deses = 1;
        }
   }
   $d_contr = 0;
   if(isset($_POST['contr'])){
        if($_POST['contr'] =='contr_si'){
          $d_contr = 1;
        }
   }
   $d_suici = 0;
   if(isset($_POST['suici'])){
        if($_POST['suici'] =='suici_si'){
          $d_suici = 1;
        }
   }
   $d_psic = 0;
   if(isset($_POST['psic'])){
        if($_POST['psic'] =='psic_si'){
          $d_psic = 1;
        }
   }

   $d_pres = 0;
   if(isset($_POST['pres'])){
        if($_POST['pres'] =='pres_si'){
          $d_pres = 1;
        }
   }
   
   $d_emoc = 0;
   if(isset($_POST['emoc'])){
        if($_POST['emoc'] =='emoc_si'){
          $d_emoc = 1;
        }
   }
   
   $d_acat = 0;
   if(isset($_POST['acat'])){
        if($_POST['acat'] =='acat_si'){
          $d_acat = 1;
        }
   }
   $d_delic = 0;
   if(isset($_POST['delic'])){
        if($_POST['delic'] =='delic_si'){
          $d_delic = 1;
        }
   }
   
$d_anim = 0;
   if(isset($_POST['anim'])){
        if($_POST['anim'] =='anim_si'){
          $d_anim = 1;
        }
   }
   
   $d_toxic = 0;
   if(isset($_POST['toxic'])){
        if($_POST['toxic'] =='toxic_si'){
          $d_toxic = 1;
        }
   }
   $d_duda = 0;
   if(isset($_POST['duda'])){
        if($_POST['duda'] =='duda_si'){
          $d_duda = 1;
        }
   }
   $d_honest = 0;
   if(isset($_POST['honest'])){
        if($_POST['honest'] =='honest_si'){
          $d_honest = 1;
        }
   }
   $d_modif = 0;
   if(isset($_POST['modif'])){
        if($_POST['modif'] =='modif_si'){
          $d_modif = 1;
        }
   }
   

   //proceso de guardado en BD

include "conecta.php";
include "debugger.php";
 $idaplic= 1;
 $qinsAlu = "insert into aplicacioninstr(idaplic,matricula,nombre,edad,edocivil,lugarorigen,pagacarrera,fecha,";
 $qinsAlu.="solo,reval,fuera,divor,senti,enoj,deses,contr,suici,psic,pres,emoc,acat,delic,anim,toxic,duda,honest,modif)" ;
 $qinsAlu .=" values (".$idaplic.",'".$_SESSION['matricula']."','". $_SESSION['nombre'] ."',". $_SESSION['edad'].",'".$_SESSION['edocivil']."','".$_SESSION['lugarorigen']."','".$_SESSION['pagacarrera']."',curdate(),";
 $qinsAlu.= $d_solo.",".$d_reval.",".$d_fuera.",".$d_divor.",".$d_senti.",".$d_enoj.",".$d_deses.",".$d_contr.",".$d_suici.",".$d_psic.",";
 $qinsAlu.=$d_pres.",".$d_emoc.",".$d_acat.",".$d_delic.",".$d_anim.",".$d_toxic.",".$d_duda.",".$d_honest.",".$d_modif.")";
 
   //Al final deshacer la sesion y variables

 // echo  $qinsAlu."<br>";
  $mysqli->query($qinsAlu);
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
    <div style="margin: 300px; text-align: center;">
        <br>
    	<h1><br>Gracias por aplicar este cuestionario </h1>
    	<?php 
    	     //  <meta http-equiv="refresh" content="5; URL= index1.html">    o
           header( "refresh:3; url=index1.html" ); 
        ?>
    </div>	
</body>
</html>
