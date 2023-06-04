<?php
require('fpdf.php');

$name = $_POST['name'];
$email = $_POST['email'];
$service = $_POST['service'];
$date = $_POST['date'];
$time = $_POST['time'];

$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 16);


$pdf->Cell(0, 10, 'Invoice', 0, 1, 'C');

$pdf->Cell(0, 10, 'Name: ' . $name, 0, 1);
$pdf->Cell(0, 10, 'Email: ' . $email, 0, 1);
$pdf->Cell(0, 10, 'Service: ' . $service, 0, 1);
$pdf->Cell(0, 10, 'Date: ' . $date, 0, 1);
$pdf->Cell(0, 10, 'Time: ' . $time, 0, 1);

$pdf->Output('D', 'invoice.pdf');

//references http://www.fpdf.org/en/tutorial/index.php 

?>