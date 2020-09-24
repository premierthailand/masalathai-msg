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


echo "<br>";
echo $detailID;
echo "<br>";
echo $magazineID;
echo "<br>";
echo $locationID;
echo "<br>";
echo $messengerID;
echo "<br>";
echo $detailimage;
echo "<br>";
echo $detailissue;
echo "<br>";

?>
