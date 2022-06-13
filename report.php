
<?php
require "./fpdf.php";
session_start();
$userid = $_SESSION['u_id'];

$pdf = new FPDF();
$conn = new PDO("mysql:host=localhost;dbname=keventdb", "root", "");
$con = mysqli_connect("localhost", "root", "", "keventdb");


$pdf->AddPage();
$pdf->Line(10, 15, 200, 15);
$pdf->Ln(8);
$pdf->SetFont("Arial", "B", 20);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(0, 20, "KEvent", 0, 0, "C");
$pdf->Ln();
$pdf->SetFont("Arial", "U", 15);
$pdf->SetTextColor(0, 0, 0);




$pdf->Ln(25);
$pdf->SetLeftMargin(10);
$pdf->SetFont("Arial", "", 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(20, 10, "Date_user_booked", "1", "0", "C");
$pdf->Cell(30, 10, "Event_Name", "1", "0", "C");
$pdf->Cell(30, 10, "Event_Date", "1", "0", "C");
$pdf->Cell(20, 10, "Event_location", "1", "0", "C");
// $pdf->Cell(30, 10, "Amount", "1", "0", "C");
// $pdf->Cell(20, 10, "Payment_Status", "1", "0", "C");



$fetchDetailSql = "SELECT * FROM `tbl_booking` WHERE `userid`='$userid' ";
$result = $conn->prepare($fetchDetailSql);
$result->execute();
if ($result->rowCount() != 0) {
    $count = 1;
    while ($row = $result->fetch()) {
        $Date_user_booked = $row['todaydate'];
        $fetchWebsiteSql = "SELECT * FROM `tbl_payments` where rid='$userid''";
        // $fetchWebsiteResult = mysqli_query($con, $fetchWebsiteSql);
        // $fetchWebsiteRow = mysqli_fetch_array($fetchWebsiteResult);
        $Event_Name = $row['eventname'];
        $pdf->Ln();
        $pdf->SetLeftMargin(10);
        $pdf->SetFont("Arial", "", 10);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Cell(20, 10, $count, "1", "0", "C");
        $pdf->Cell(30, 10, ucwords($Event_Name), "1", "0", "C");
        $pdf->Cell(30, 10, $row['eventdate'], "1", "0", "C");
        $pdf->Cell(20, 10, ucwords($row['eventlocation']), "1", "0", "C");
        // $pdf->Cell(30, 10, $fetchWebsiteRow['amount'], "1", "0", "C");
        // $pdf->Cell(20, 10, $fetchWebsiteRow['payment_status'], "1", "0", "C");

        $count++;
    }
}

$pdf->Output();

?>