<?php include 'config.php'; ?>

<?php
if($_REQUEST["type"]==""){
    $type = "masala";
} else{
    $type =$_REQUEST["type"];
}

$editid = $_REQUEST["id"];
$sql =  " UPDATE transection
            SET transection_isActive='1'
            WHERE `transection_id`=$editid";
$result = mysqli_query($conn, $sql);
if (isset($result)) {

    header("Location: ./list?type=$type");

} else {
        echo "Error Remove record: " . $conn->error;
}

$conn->close();
?>
<?php include 'header.php'; ?>

<?php include 'footer.php'; ?>