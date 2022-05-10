
<?php

include('includes/config.php');

session_start();
$useremail = $_SESSION['alogin'];
// // $fetch = "SELECT `BookingId` FROM tblbooking ORDER BY `BookingId` DESC LIMIT 1";
// // $query = $dbh->prepare($fetch);
// // $query->execute();
// // $results = $query->fetchAll(PDO::FETCH_OBJ);
// // foreach ($results as $result) {
// //     echo $BookId = htmlentities($result->BookingId);
//     // $id = $query['BookingId'];
//     $results = $query->fetchAll(PDO::FETCH_OBJ);
//     // $bookid = $_SESSION['bookid'];
$sql = "SELECT `BookingId`,`UserEmail`,`FromDate`,`city`,`type`,`adult`,`child`,`total` from tblBooking  where `UserEmail`='$useremail'";
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

        $pdf->Cell(55, 5, 'Booking Id', 0, 0);
        $pdf->Cell(58, 5, htmlentities($result->BookingId), 0, 0);
        $pdf->Cell(25, 5, 'From Date', 0, 0);
        $pdf->Cell(52, 5, htmlentities($result->FromDate), 1, 1);

        $pdf->Cell(55, 5, 'Departure City', 0, 0);
        $pdf->Cell(58, 5, htmlentities($result->city), 0, 0);
        $pdf->Cell(55, 5, 'Selected Package', 0, 0);
        $pdf->Cell(25, 5, 'package name', 0, 1);

        $pdf->Cell(55, 5, 'Select Package Type', 0, 0);
        $pdf->Cell(58, 5, htmlentities($result->type), 0, 1);

        $pdf->Line(10, 30, 200, 30);

        $pdf->Ln(10);
        $pdf->Cell(55, 5, 'No of Adults', 0, 0);
        $pdf->Cell(58, 5, htmlentities($result->adult), 0, 1);

        $pdf->Cell(55, 5, 'No of Child', 0, 0);
        $pdf->Cell(58, 5, htmlentities($result->child), 0, 1);

        $pdf->Cell(55, 5, 'Package Price', 0, 0);
        $pdf->Cell(58, 5, '100', 0, 1);

        $pdf->Cell(55, 5, 'Total price', 0, 0);
        $pdf->Cell(58, 5, htmlentities($result->total), 0, 1);

        $pdf->Line(10, 60, 200, 60);

        $pdf->Ln(10); //line break

        $pdf->Cell(55, 5, 'paid by', 0, 1);
        $pdf->Cell(58, 5, htmlentities($result->UserEmail), 0, 1);

        $pdf->Line(155, 75, 195, 75);
        $pdf->ln(5); //line break
        $pdf->Cell(140, 5, '', 0, 0);
        $pdf->Cell(55, 5, 'Signature', 0, 1, 'C');


        $pdf->Output();
    }
?>