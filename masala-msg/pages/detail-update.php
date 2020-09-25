<?php include 'config.php'; ?>

<?php

if($_REQUEST["magazine"]=="masala"){
    $detailmagazine =1;
} elseif($_REQUEST["magazine"]=="lite"){
    $detailmagazine =2;
}


$detailID =$_REQUEST["id"];
$detaildate =$_REQUEST["date"];
$detailvol =$_REQUEST["vol"];
$detaillocation =$_REQUEST["location"];
$detailmessenger =$_REQUEST["messenger"];
$detailimage =$_REQUEST["image"];

$detailissue =$_REQUEST["issue"];
date_default_timezone_set("Asia/Bangkok");
$timestamp = date("Y-m-d h:i:s");

$date= date_create($_REQUEST["vol"]."-1");
$month1 = date_format($date, "m");
$month = (int)$month1;
$year = date_format($date, "Y");

$sqlcat = " SELECT magazineVol_id FROM magazinevol 
            WHERE magazineType_id='$detailmagazine'
            AND magazineVol_Month_id='$month'
            AND magazineVol_Year='$year'";
$resultcat = $conn->query($sqlcat);
$row = $resultcat->fetch_assoc();
$magazineID= $row["magazineVol_id"];

$sqllo = " SELECT location_id FROM location
            WHERE location_name='$detaillocation'";
$resultlo = $conn->query($sqllo);
$rowlo = $resultlo->fetch_assoc();
$locationID= $rowlo["location_id"];


$sqlmes = " SELECT messenger_id FROM messenger
            WHERE messenger_name='$detailmessenger'";
$resultmes = $conn->query($sqlmes);
$rowmes = $resultmes->fetch_assoc();
$messengerID= $rowmes["messenger_id"];


$old_name = basename($detailimage);



if($_REQUEST["id"]!='undefined'&& $_REQUEST["id"]!=''){
    echo "<h4>Update Data</h4>";
    echo "ID : ".$detailID;
    echo "<br>";
    echo "Messenger : ".$messengerID;
    echo "<br>";
    echo "Location : ".$locationID;
    echo "<br>";
    echo "Date : ".$detaildate;
    echo "<br>";
    echo "Image : ".$old_name;
    echo "<br>";
    echo "Status : ".$detailissue;
    echo "<br>";
    echo "magazineType : ".$magazineID;
    echo "<br>".date("Y-m");

}else{
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
