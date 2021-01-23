<?php

 require "fpdf/fpdf.php";

 $pdf = new FPDF('P','pt','Letter');//Orientacion 'P','L' Unidad 'pt','mm','cm','in', tam 
 //  Legal,Letter,A3,A4,A5 d
 //$pdf = new FPDF('P','mm','A4');  // valores por defecto
 $pdf->AddPage();
 $pdf->SetFont("Arial",'',15);
 $pdf->SetFillColor(100,100,100);
 $varx = $pdf->GetX();
 $vary = $pdf->GetY();
 $pdf->Cell(300,30,'Las coordenadas son: '.$varx. " , ".$vary,1,1,'L',0);
 $pdf->Cell(200,30,'Saludo1',1,1,'L',1);
 $pdf->Cell(200,30,'Saludo2',1,1,'L',1);
 $pdf->Cell(200,30,'Saludo3',1,1,'L',1);
 $varx = $pdf->GetX();
 $vary = $pdf->GetY();
 $pdf->Cell(300,30,'Las coordenadas son: '.$varx. " , ".$vary,1,0,'L',0);
 $pdf->Output();

?>