<html>

<head>
    <title>ThaiCreate.Com PHP PDF</title>
</head>

<body>
<?php include 'config.php'; ?>
    <?php
    require('fpdf/fpdf.php');



    $pdf = new FPDF();
    //Column titles
    $header = array('No', 'Location', 'Messenger', 'Copy');
    //Data loading
    $pdf->SetFont('Arial', '', 8);

    $pdf->AddPage();
    $pdf->Cell(8, 7, iconv("utf-8", "TIS-620", "No"), 1, 0, 'C');
    $pdf->Cell(25, 7, iconv("utf-8", "TIS-620", "Messenger"), 1, 0, 'C');
    $pdf->Cell(18, 7, iconv("utf-8", "TIS-620", "Date"), 1, 0, 'C');
    $pdf->Cell(35, 7, iconv("utf-8", "TIS-620", "Location"), 1, 0, 'C');
    $pdf->Cell(65, 7, iconv("utf-8", "TIS-620", "Address"), 1, 0, 'C');
    $pdf->Cell(10, 7, iconv("utf-8", "TIS-620", "Copy"), 1, 0, 'C');
    $pdf->Cell(20, 7, iconv("utf-8", "TIS-620", "Status"), 1, 0, 'C');
    $pdf->Ln();


    // $pdf->Cell(8, 7, iconv("utf-8", "TIS-620", "1"), 1, 0, 'L');
    // $pdf->Cell(25, 7, iconv("utf-8", "TIS-620", "Sompong"), 1, 0, 'L');
    // $pdf->Cell(20, 7, iconv("utf-8", "TIS-620", "20-09-2020"), 1, 0, 'L');
    // $pdf->Cell(40, 7, iconv("utf-8", "TIS-620", "Premeir Thailand"), 1, 0, 'L');
    // $pdf->Cell(65, 7, iconv("utf-8", "TIS-620", "85/3 Sukhumvit 12 "), 1, 0, 0);
    // $pdf->Cell(10, 7, iconv("utf-8", "TIS-620", "10"), 1, 0, 'L');
    // $pdf->Cell(20, 7, iconv("utf-8", "TIS-620", "..."), 1, 0, 'L');
    // $pdf->Ln();

    $No = 0;
    $sql = "SELECT `transection_id`,`transection_delivery_date`,`messenger_name`,`location_name`,`location_address`,`location_count`,transection_img 
            FROM location
            INNER JOIN transection  ON transection.location_id = location.location_id
            INNER JOIN messenger ON messenger.messenger_id = transection.messenger_id
            WHERE `Location_isActive`=1 
            ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            if($row['transection_img'] == '') {
                $Status= " ";
            } else{
                $Status= "Delivered";
            }
            $No++;
            $showdate = date_create($row["transection_delivery_date"]);
            $showtime = date_format($showdate, "d-m-Y");
            $Messenger= $row["messenger_name"];
            $Location= $row["location_name"];
            $Address= $row["location_address"];
            $Copy= $row["location_count"];


            $pdf->Cell(8, 14, iconv("utf-8", "TIS-620", "$No"), 1, 0, 'C');
            $pdf->Cell(25, 14, iconv("utf-8", "TIS-620", "$Messenger"), 1, 0, 'L');
            $pdf->Cell(18, 14, iconv("utf-8", "TIS-620", "$showtime"), 1, 0, 'C');
            $pdf->Cell(35, 14, iconv("utf-8", "TIS-620", "$Location"), 1, 0, 'L');
            $pdf->MultiCell(65, 7,$Address, 2, 'L', 0);
            // $pdf->Cell(65, 7, iconv("utf-8", "TIS-620", "$Address"), 1, 0, 'L');
            $pdf->Cell(10, 14, iconv("utf-8", "TIS-620", "$Copy"), 1, 0, 'C');
            $pdf->Cell(20, 14, iconv("utf-8", "TIS-620", "$Status"), 1, 0, 'L');

            
            $pdf->Ln();
        } 
    }

    $conn->close();
    $pdf->Output("MyPDF.pdf","F");
    ?>

    PDF Created Click <a href="MyPDF.pdf">here</a> to Download
</body>

</html>