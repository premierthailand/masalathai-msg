<?php include 'config.php'; ?>

<?php

$locationID =$_REQUEST["id"];
$locationName =$_REQUEST["location"];
$locationAddress =$_REQUEST["address"];
$locationCopy =$_REQUEST["copy"];
$locationContact =$_REQUEST["contact"];
$locationPhone =$_REQUEST["phone"];
$locationCat =$_REQUEST["category"];
$locationTime=date("Y-m-j H:i:s", strtotime("+7 Hour"));


$sqlcat = "SELECT category_id FROM category WHERE category_name='$locationCat'";
$resultcat = $conn->query($sqlcat);
$row = $resultcat->fetch_assoc();
$categoryID= $row["category_id"];

  
if($_REQUEST["id"]==""){
    
$sql="INSERT INTO location (location_name, location_address, location_count, location_contact_name, location_contact_phone, location_category_id,Location_isActive,location_update_id,location_create_id,location_update_time)
VALUES ('$locationName','$locationAddress','$locationCopy','$locationContact','$locationPhone','$categoryID','1','1','1','$locationTime')";

} else{
   


$sql =  " UPDATE location
            SET location_name='$locationName',location_address='$locationAddress',location_count='$locationCopy',location_contact_name='$locationContact',location_contact_phone='$locationPhone',location_category_id='$categoryID'
            WHERE `location_id`=$locationID";
            
}

$result = mysqli_query($conn, $sql);
if (isset($result)) {

    header("Location: ./location");

} else {
        echo "Error Remove record: " . $conn->error;
}

$conn->close();
?>
<?php include 'header.php'; ?>
<?php include 'footer.php'; ?>