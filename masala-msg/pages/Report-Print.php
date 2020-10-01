
<?php include 'config.php'; ?>
<?php
require('pdf_mc_table.php');

$pdf = new PDF_MC_Table();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);


$No = 0;
if ($_REQUEST["search"] != '') {
    $searchDB = "AND (location_name like '%" . $_REQUEST['search'] . "%'
  OR messenger_name like '%" . $_REQUEST['search'] . "%'
  OR location_area like '%" . $_REQUEST['search'] . "%'
  OR location_soi like '%" . $_REQUEST['search'] . "%'
  OR location_soi_number like '%" . $_REQUEST['search'] . "%'
  OR location_subsoi_number like '%" . $_REQUEST['search'] . "%'
  OR location_road like '%" . $_REQUEST['search'] . "%'
  OR location_District like '%" . $_REQUEST['search'] . "%'
  OR location_Province like '%" . $_REQUEST['search'] . "%'
  OR location_postno like '%" . $_REQUEST['search'] . "%'
  OR location_count like '%" . $_REQUEST['search'] . "%'
)";
}
if ($_REQUEST["masala"] == '0') {
    $masalaDB = "AND magazineType_name !='masala'";
}
if ($_REQUEST["lite"] == '0') {
    $liteDB = "AND magazineType_name !='lite'";
}
$inputDate = $_REQUEST['date'];
$date = date_create($inputDate);
$selectTime = date_format($date, "Y-m-d");
if ($inputDate == '') {
    $dateDB = "";
} else {
    $dateDB = "AND transection_delivery_date = '$selectTime'";
}
if ($_REQUEST["location"] != '') {
    $locationDB = "AND (location_name like '%" . $_REQUEST['location'] . "%'
  OR location_area like '%" . $_REQUEST['location'] . "%'
  OR location_soi like '%" . $_REQUEST['location'] . "%'
  OR location_soi_number like '%" . $_REQUEST['location'] . "%'
  OR location_subsoi_number like '%" . $_REQUEST['location'] . "%'
  OR location_road like '%" . $_REQUEST['location'] . "%'
  OR location_District like '%" . $_REQUEST['location'] . "%'
  OR location_Province like '%" . $_REQUEST['location'] . "%'
  OR location_postno like '%" . $_REQUEST['location'] . "%'
)";
}
$sql = "SELECT `transection_id`,`transection_delivery_date`,`messenger_name`,`location_name`,`location_address`,`location_count`,transection_img,issue.issue_id,issue_name,transection_comment 
        ,location.location_area
        ,location.location_soi
        ,location.location_soi_number
        ,location.location_subsoi_number
        ,location.location_road
        ,location.location_District
        ,location.location_Province
        ,location.location_postno
        FROM location
        INNER JOIN transection  ON transection.location_id = location.location_id
        INNER JOIN messenger ON messenger.messenger_id = transection.messenger_id
        INNER JOIN issue  ON issue.issue_id  = transection.issue_id 
        INNER JOIN magazineVol  ON magazineVol.magazineVol_id = transection.magazineVol_id
        INNER JOIN magazinetype  ON magazinetype.magazineType_id = magazineVol.magazineType_id

        WHERE `Location_isActive`=1 
        $masalaDB
        $liteDB   
        $searchDB    
        $dateDB  
        AND messenger_name LIKE '%" . $_REQUEST["messenger"] . "%' 
        $locationDB
            ";



$result = $conn->query($sql);
// $row = $result->fetch_array();

$Count = $result->num_rows;
$Thead = array('No.', 'Messenger', 'Date', 'Location', 'Address', 'Copy', 'Status');
$Twidth = array(8, 32, 24, 40, 55, 10, 20);
for ($i = 0; $i < count($Thead); $i++)
    $pdf->Cell($Twidth[$i], 7, $Thead[$i], 1, 0, 'C');
    $pdf->Ln();
    $pdf->SetWidths(array(8, 32, 24, 40, 55, 10, 20));
    
while ($row = $result->fetch_assoc()) {
    $No++;
    if ($row['issue_id'] == '0') {
        $status = "Delivered";
    } else {
        $status = "Not Delivered";
    }
    $pdf->Row(array($No, $row["messenger_name"], $row["transection_delivery_date"], $row["location_name"], $row["location_address"], $row["location_count"], $status), '');
}
$pdf->Output("report.pdf", "F");
Header("Location: report.pdf");
?>
