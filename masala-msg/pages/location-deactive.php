<?php include 'config.php'; ?>

<?php
$editid = $_REQUEST["id"];
$sql =  " UPDATE location
            SET Location_isActive='0'
            WHERE `location_id`=$editid";
$result = mysqli_query($conn, $sql);
if (isset($result)) {

    header("Location: ./location.php");

} else {
        echo "Error Remove record: " . $conn->error;
}

$conn->close();
?>
<?php include 'header.php'; ?>

<?php include 'footer.php'; ?>