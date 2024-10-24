<?php
// Asegúrate de que no haya output antes de este punto
error_reporting(E_ALL);
ini_set('display_errors', 0);

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../models/UserManagementModel.php';
require_once __DIR__ . '/../lib/fpdf.php';

$db = getDBConnection();
$userManagementModel = new UserManagementModel($db);

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial','B',15);
        $this->Cell(80);
        $this->Cell(30,10,'Reporte de Usuarios Registrados',0,0,'C');
        $this->Ln(20);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Página '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

// Encabezados de la tabla
$pdf->Cell(10,10,'ID',1);
$pdf->Cell(40,10,'Nombre',1);
$pdf->Cell(60,10,'Email',1);
$pdf->Cell(30,10,'Rol',1);
$pdf->Cell(50,10,'Fecha de Registro',1);
$pdf->Ln();

$pdf->SetFont('Arial','',12);

// Obtener todos los usuarios
$users = $userManagementModel->getAllUsers();

foreach($users as $user) {
    $pdf->Cell(10,10,$user['id'],1);
    // Usamos mb_convert_encoding en lugar de utf8_decode
    $pdf->Cell(40,10,mb_convert_encoding($user['nombre'], 'ISO-8859-1', 'UTF-8'),1);
    $pdf->Cell(60,10,$user['email'],1);
    $pdf->Cell(30,10,$user['rol'],1);
    // Usamos una operación ternaria para manejar la posible ausencia de 'created_at'
    $pdf->Cell(50,10,isset($user['created_at']) ? $user['created_at'] : 'N/A',1);
    $pdf->Ln();
}

// Asegúrate de que no haya output antes de este punto
ob_end_clean();

$pdf->Output('D', 'reporte_usuarios.pdf');
exit;