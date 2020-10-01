<?php include 'config.php'; ?>

<?php
if($_REQUEST["type"]==""){
    $type = "masala";
} else{
    $type =$_REQUEST["type"];
    $issue =$_REQUEST["issue"];
    $deliver =$_REQUEST["deliver"];
    $active =$_REQUEST["active"];

}

$editid = $_REQUEST["id"];
$sql =  " UPDATE transection
            SET transection_isActive='1'
            WHERE `transection_id`=$editid";
$result = mysqli_query($conn, $sql);
if (isset($result)) {

    //header("Location: ./list?type=$type&issue=$issue&deliver=$deliver&active=$active");

} else {
        echo "Error Remove record: " . $conn->error;
}

$conn->close();
?>
