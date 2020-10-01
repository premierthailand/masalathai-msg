<?php include 'config.php'; ?>

<?php
$editid = $_REQUEST["id"];
$search = $_REQUEST["search"];
$masala = $_REQUEST["masala"];
$lite = $_REQUEST["lite"];
$location = $_REQUEST["location"];
$deliver = $_REQUEST["deliver"];
$notDeliver = $_REQUEST["notDeliver"];
$issue = $_REQUEST["issue"];
$issueLite = $_REQUEST["issueLite"];
$category = $_REQUEST["category"];
$area = $_REQUEST["area"];
$soi = $_REQUEST["soi"];
$road = $_REQUEST["road"];
$district = $_REQUEST["district"];
$province = $_REQUEST["province"];
$post = $_REQUEST["post"];
$user = $_SESSION['id'];
$sql =  " UPDATE transection
            SET transection_isActive='0',
            transection_update_id= $user
            WHERE `transection_id`=$editid";
            echo $sql;
$result = mysqli_query($conn, $sql);
if (isset($result)) {

    header("Location: ./list?search=$search&masala=$masala&lite=$lite&location=$location&deliver=$deliver&notDeliver=$notDeliver&issue=$issue&issueLite=$issueLite&category=$category&area=$area&soi=$soi&road=$road&district=$district&province=$province&post=$post");
} else {
       echo "Error Remove record: " . $conn->error;
}

$conn->close();
?>
