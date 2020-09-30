<?php include 'config.php'; ?>

<?php

$detailID = $_REQUEST["id"];
$detailmagazine = $_REQUEST["magazine"] == "masala" ? 1 : 2;
$detaildate = $_REQUEST["date"];
$detailvol = $_REQUEST["vol"];
$detaillocation = $_REQUEST["location"];
$detailmessenger = $_REQUEST["messenger"];
$detailimage = $_REQUEST["image"];
$detailissue = $_REQUEST["issue"];
$detailComment = $_REQUEST["comment"];

date_default_timezone_set("Asia/Bangkok");
$timestamp = date("Y-m-d h:i:s");

$date = date_create($_REQUEST["vol"] . "-1");
$month1 = date_format($date, "m");
$month = (int)$month1;
$year = date_format($date, "Y");
if ($detailmagazine == 1 && $month % 2 == 0) {
  $month += 1;
  if ($month == 13) {
    $month = 1;
    $year += 1;
  }
}

$sqlcat = " SELECT magazineVol_id FROM magazinevol 
            WHERE magazineType_id='$detailmagazine'
            AND magazineVol_Month_id='$month'
            AND magazineVol_Year='$year'";
$resultcat = $conn->query($sqlcat);
$row = $resultcat->fetch_assoc();
$magazineID = $row["magazineVol_id"];

$sqllo = " SELECT location_id FROM location
            WHERE location_name='$detaillocation'";
$resultlo = $conn->query($sqllo);
$rowlo = $resultlo->fetch_assoc();
$locationID = $rowlo["location_id"];


$sqlmes = " SELECT messenger_id FROM messenger
            WHERE messenger_name='$detailmessenger'";
$resultmes = $conn->query($sqlmes);
$rowmes = $resultmes->fetch_assoc();
$messengerID = $rowmes["messenger_id"];

if ($_REQUEST["id"] != '') {

  $sql =  " UPDATE transection
              SET messenger_id=          '$messengerID',
                  location_id=          '$locationID',
                  transection_delivery_date=          '$detaildate',
                  transection_img=          '$detailimage',
                  issue_id=          '$detailissue',
                  transection_comment=          '$detailComment',
                  magazineVol_id=          '$magazineID',
                  transection_update_time=          '$timestamp'
                  WHERE `transection_id`=$detailID";

  if ($conn->query($sql) === TRUE) {
    header("Location: ./list");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
} else {
  $sql = "INSERT INTO transection (messenger_id,location_id, transection_delivery_date,transection_img,transection_isActive,issue_id,transection_comment,magazineVol_id,transection_update_time)
    VALUES ('$messengerID', '$locationID', '$detaildate','$detailimage','1','$detailissue','$detailComment','$magazineID','$timestamp')";

  if ($conn->query($sql) === TRUE) {
    header("Location: ./list");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close();

?>