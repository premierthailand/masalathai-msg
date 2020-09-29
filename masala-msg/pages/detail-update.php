<?php include 'config.php'; ?>

<?php

if ($_REQUEST["magazine"] == "masala") {
  $detailmagazine = 1;
} elseif ($_REQUEST["magazine"] == "lite") {
  $detailmagazine = 2;
}


$detailID = $_REQUEST["id"];
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

if ($_REQUEST["id"] != 'undefined' && $_REQUEST["id"] != '') {
  
  // Set Last Image
  if($detailimage != 'undefined' && $detailimage != '') {
    $sql =  " UPDATE transection
              SET messenger_id=          '$messengerID',
                  location_id=          '$locationID',
                  transection_delivery_date=          '$detaildate',
                  transection_img=          '$detailimage',
                  transection_last_img=          '$detailimage',
                  issue_id=          '$detailissue',
                  magazineVol_id=          '$magazineID',
                  transection_update_time=          '$timestamp'
                  WHERE `transection_id`=$detailID";
    }
    else {
    $sql =  " UPDATE transection
              SET messenger_id=          '$messengerID',
                  location_id=          '$locationID',
                  transection_delivery_date=          '$detaildate',
                  transection_img=          '$detailimage',
                  issue_id=          '$detailissue',
                  magazineVol_id=          '$magazineID',
                  transection_update_time=          '$timestamp'
                  WHERE `transection_id`=$detailID";
    }
// img  
  // COMMENT=          '$detailComment',
  // transection_update_id = 1

  if ($conn->query($sql) === TRUE) {
    header("Location: ./list");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
} else {
  $sql = "INSERT INTO transection (messenger_id,location_id, transection_delivery_date,transection_img,transection_last_img,transection_isActive,issue_id,magazineVol_id,transection_update_time)
    VALUES ('$messengerID', '$locationID', '$detaildate','$detailimage','$detailimage','1','$detailissue','$magazineID','$timestamp')";

  if ($conn->query($sql) === TRUE) {
    header("Location: ./list");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close();

?>
12