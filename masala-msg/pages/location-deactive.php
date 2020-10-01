<?php include 'config.php'; ?>

<?php
$editid = $_REQUEST["id"];
$search = $_REQUEST["search"];
$category = $_REQUEST["category"];
$location = $_REQUEST["location"];
$area = $_REQUEST["area"];
$soi = $_REQUEST["soi"];
$road = $_REQUEST["road"];
$district = $_REQUEST["district"];
$province = $_REQUEST["province"];
$postcode = $_REQUEST["postcode"];
$user = $_SESSION['id'];


$sql =  " UPDATE location
            SET Location_isActive='0',
            location_update_id=$user
            WHERE `location_id`=$editid";
$result = mysqli_query($conn, $sql);
if (isset($result)) {

    header("Location: ./location?search=$search&category=$category&location=$location&area=$area&soi=$soi&road=$road&district=$district&province=$province&postcode=$postcode");

} else {
        echo "Error Remove record: " . $conn->error;
}

$conn->close();
?>
