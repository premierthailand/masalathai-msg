<?php $activeLocation = 'active'; ?>
<?php $pageName = 'Edit Location'; ?>
<?php include 'header.php'; ?>

<?php

$IDedit = $_REQUEST["id"];
$sql = "SELECT `location_id`,`location_name`,`location_address`,`location_count`,`location_contact_name`,`location_contact_phone`,`category_name` 
 FROM `location` 
 INNER JOIN category ON location.`location_category_id`=category.category_id 
 WHERE `Location_isActive`=1 AND location_id='$IDedit'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
?>

        <form action="" method="get">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <div class="card">
                                <div class="card-header card-header-masala card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons" style="padding-left:4px;">apartment</i>
                                    </div>
                                    <h4 class="card-title"><b>Edit Location</b></h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <!-- Location Name -->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="text-right textDetail">Location Name : </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="location-detail-name" value="<?php echo $row["location_name"]; ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <!-- Address-->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="text-right textDetail">Address : </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="location-detail-address" value="<?php echo $row["location_address"]; ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <!-- Number of Copy -->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="text-right textDetail">Number of Copy : </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="location-detail-copy" value="<?php echo $row["location_count"]; ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <!-- Contact Person-->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="text-right textDetail">Contact Person : </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="location-detail-contact" value="<?php echo $row["location_contact_name"]; ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <!-- Category -->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="text-right">Category : </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <input list="brow" class="custom-select form-control" name="location-detail-catgory" placeholder="Location Name" value="<?php echo $row["category_name"]; ?>">
                                                    <datalist id="brow">
                                                        <?php

                                                        $sql = "SELECT category_name
                                                        FROM `category` ";

                                                        $result = $conn->query($sql);

                                                        if ($result->num_rows > 0) {
                                                            // output data of each row
                                                            while ($row = $result->fetch_assoc()) {
                                                        ?>
                                                                <option value="<?php echo $row["category_name"]; ?>"></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <br>
                                            <!-- insert -->
                                            <div class="row">
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-masala">Save</button>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
<?php
    }
} else {
}

$conn->close();
?>
<?php include 'footer.php'; ?>