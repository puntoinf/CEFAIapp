<?php

include "fpdf/fpdf.php";

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","",30);

$pdf->SetY(10);
$pdf->SetX(5);
$pdf->Cell(10,10,"1. Hola Mundo FPDF con PHP!");

$pdf->SetFont("Arial","",12);
$pdf->SetY(20);
$pdf->SetX(5);
$pdf->Cell(10,10,"2. Hola Mundo FPDF con PHP!");

$pdf->SetY(25);
$pdf->SetX(5);
$pdf->Cell(10,10,"3. Hola Mundo FPDF con PHP!");

$pdf->SetY(30);
$pdf->SetX(5);
$pdf->Cell(10,10,"4. Hola Mundo FPDF con PHP!");

$pdf->output();


?>