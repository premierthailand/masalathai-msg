<?php include 'config.php'; ?>

<?php

$locationID =$_REQUEST["id"];
$locationName =$_REQUEST["location"];
$locationhouseNo =$_REQUEST["houseNo"];
$locationsoiName =$_REQUEST["soiName"];
$locationsoi =$_REQUEST["soi"];
$locationsubsoi =$_REQUEST["subSoi"];
$locationroad =$_REQUEST["road"];
$locationDistrict =$_REQUEST["district"];
$locationProvince =$_REQUEST["province"];
$locationpost =$_REQUEST["post"];
$locationarea =$_REQUEST["area"];
$locationCat =$_REQUEST["category"];
$locationCopy =$_REQUEST["copy"];
$locationContact =$_REQUEST["contact"];
$locationPhone =$_REQUEST["phone"];
$locationimage =$_REQUEST["image"];
$locationTime=date("Y-m-j H:i:s", strtotime("+7 Hour"));

$sqlcat = "SELECT category_id FROM category WHERE category_name='$locationCat'";
$resultcat = $conn->query($sqlcat);
$row = $resultcat->fetch_assoc();
$categoryID= $row["category_id"];

echo $locationID."id : d<br>";
echo $locationName." : location<br>";
echo $locationhouseNo." : House<br>";
echo $locationsoiName." : soi name<br>";
echo $locationsoi." : soi<br>";
echo $locationsubsoi." : sub soi<br>";
echo $locationroad." : road<br>";
echo $locationDistrict." : District<br>";
echo $locationProvince." : Province<br>";
echo $locationpost." : post<br>";
echo $locationarea." : area<br>";
echo $locationCat." : category<br>";
echo $locationCopy." : copy<br>";
echo $locationContact." : contact<br>";
echo $locationPhone ." : phone<br>";
echo $locationimage." : image<br>";

if($_REQUEST["id"]==""){
    if($locationimage!=''||$locationimage!='undefined'){
        $imgstatus=1;
    } else {
        $imgstatus=0;
    }
$sql="INSERT INTO location (location_name,location_address, location_houseno,location_soi,location_soi_number,location_subsoi_number,location_road,location_District,location_Province,location_postno,location_area,location_img , location_count, location_contact_name, location_contact_phone, location_category_id,Location_isActive,location_update_id,location_create_id,location_update_time)
VALUES ('$locationName',
        '$locationhouseNo $locationsoiName $locationsoi/$locationsubsoi $locationroad $locationDistrict $locationProvince $locationpost',
        '$locationhouseNo',
        '$locationsoiName',
        '$locationsoi',
        '$locationsubsoi',
        '$locationroad',
        '$locationDistrict',
        '$locationProvince',
        '$locationpost',
        '$locationarea',
        '1',
        '$locationimage',
        '$locationCopy',
        '$locationContact',
        '$locationPhone',
        '$categoryID',
        '1',
        '1',
        '1',
        '$locationTime')
        ";

 } else {
   
if($locationimage!=''){
    $addImg = "location_img='$locationimage',";
} 

$sql =  " UPDATE location
            SET location_name=          '$locationName',
                location_address=       '$locationhouseNo $locationsoiName $locationsoi/$locationsubsoi $locationroad $locationDistrict $locationProvince $locationpost',
                location_houseno=       '$locationhouseNo',
                location_soi=           '$locationsoiName',
                location_soi_number=    '$locationsoi',
                location_subsoi_number= '$locationsubsoi',
                location_road=          '$locationroad',
                location_District=      '$locationDistrict',
                location_Province=      '$locationProvince',
                location_postno=        '$locationpost',
                location_area=          '$locationarea',
                $addImg
                location_count=         '$locationCopy',
                location_contact_name=  '$locationContact',
                location_contact_phone= '$locationPhone',
                location_category_id=   '$categoryID'

            WHERE `location_id`=$locationID";
            
}

$result = mysqli_query($conn, $sql);
if (isset($result)) {

    //header("Location: ./location");


} else {
        echo "Error Remove record: " . $conn->error;
}

$conn->close();
?>
