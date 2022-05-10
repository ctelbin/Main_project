
<?php
include('includes/config.php');
$sql = "SELECT * from TblTourPackages ";
$query = $dbh->prepare($sql);

$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if ($query->rowCount() > 0)
    foreach ($results as $result) {
        require('fpdf181/fpdf.php');

        $pdf = new FPDF();

        $pdf->AddPage();

        $pdf->SetFont('Arial', '', 12);

        $pdf->Cell(55, 5, 'Invoice Details', 0, 0);
        $pdf->Cell(58, 5, 'User Email', 0, 0);
        $pdf->Cell(25, 5, 'Date', 0, 0);
        $pdf->Cell(52, 5, '2022-05-21', 1, 1);

        $pdf->Cell(55, 5, 'Departure City', 0, 0);
        $pdf->Cell(58, 5, 'city name', 0, 0);
        $pdf->Cell(55, 5, 'Package type', 0, 0);
        $pdf->Cell(25, 5, 'Package', 0, 1);

        $pdf->Cell(55, 5, 'Status', 0, 0);
        $pdf->Cell(58, 5, ':Complete', 0, 1);

        $pdf->Line(10, 30, 200, 30);

        $pdf->Ln(10);
        $pdf->Cell(55, 5, 'pack id', 0, 0);
        $pdf->Cell(58, 5, 'id', 0, 1);

        $pdf->Cell(55, 5, 'book id', 0, 0);
        $pdf->Cell(58, 5, 'id', 0, 1);

        $pdf->Cell(55, 5, 'Tax Amount', 0, 0);
        $pdf->Cell(58, 5, '100', 0, 1);

        $pdf->Cell(55, 5, 'Pack Price', 0, 0);
        $pdf->Cell(58, 5, '100', 0, 1);

        $pdf->Line(10, 60, 200, 60);

        $pdf->Ln(10); //line break

        $pdf->Cell(55, 5, 'paid by', 0, 1);
        $pdf->Cell(58, 5, 'username', 0, 1);

        $pdf->Line(155, 75, 195, 75);
        $pdf->ln(5); //line break
        $pdf->Cell(140, 5, '', 0, 0);
        $pdf->Cell(55, 5, 'Signature', 0, 1, 'C');


        $pdf->Output();
    } ?>