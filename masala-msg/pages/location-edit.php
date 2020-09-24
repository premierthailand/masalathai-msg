<?php $activeLocation = 'active'; ?>

<?php
if (isset($_REQUEST["id"])) {
    $pageName = 'Edit Location';
} else {
    $pageName = 'Add Location';
} ?>
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
        <div class="content">
            <input type="hidden" id="txtId" value="<?php echo $_REQUEST["id"] ?>">
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
                                                <input type="text" class="form-control" name="location-detail-name" id="txtLocation" value="<?php echo $row["location_name"]; ?>">
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Address-->
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="text-right textDetail">Address : </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="location-detail-address" id="txtAddress" value="<?php echo $row["location_address"]; ?>">
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Category -->
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="text-right textDetail">Category : </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input list="locationCategory" class="custom-select form-control" name="location-detail-catgory" id="txtCategory" value="<?php echo $row["category_name"]; ?>">
                                                <datalist id="locationCategory">
                                                    <?php

                                                    $sqlCat = "SELECT category_id,category_name
                                                        FROM `category` ";

                                                    $resultCat = $conn->query($sqlCat);

                                                    if ($resultCat->num_rows > 0) {
                                                        // output data of each row
                                                        while ($rowCat = $resultCat->fetch_assoc()) {
                                                    ?>      <?php $catIdUpdate = $rowCat["category_id"];?>
                                                            <option value="<?php echo $rowCat["category_name"]; ?>"></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </datalist>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Number of Copy -->
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="text-right textDetail">Number of Copies : </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="location-detail-copy" id="txtCopy" value="<?php echo $row["location_count"]; ?>">
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Contact Person-->
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="text-right textDetail">Contact Name : </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="location-detail-contact" id="txtContact" value="<?php echo $row["location_contact_name"]; ?>">
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Phone -->
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="text-right textDetail">Contact Phone : </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="txtPhone" name="phone" value="<?php echo $row["location_contact_phone"]; ?>">
                                            </div>
                                        </div>
                                        <br>
                                        <!-- insert -->
                                        <div class="row">
                                            <div class="col-md-3">
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn btn-masala" id="btnSave">Save</button>
                                                <a href="./location">
                                                    <button class="btn btn-default">Cancel</button>
                                                </a>
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
    <?php
    }
} else {
    ?>
    <div class="content">
        <div class="container-fluid">
            <input type="hidden" id="txtId" value="">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="card">
                        <div class="card-header card-header-masala card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons" style="padding-left:4px;">apartment</i>
                            </div>
                            <h4 class="card-title"><b>Add Location</b></h4>
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
                                            <input type="text" class="form-control" name="location-detail-name" id="txtLocation" value="">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Address-->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="text-right textDetail">Address : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="location-detail-address" value="" id="txtAddress">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Category -->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="text-right textDetail">Category : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input list="locationCategory" class="custom-select form-control" id="txtCategory" name="location-detail-catgory" value="">
                                            <datalist id="locationCategory">
                                                <?php
                                                $sqlCat = "SELECT category_id,category_name
                                                    FROM `category` ";
                                                $resultCat = $conn->query($sqlCat);
                                                if ($resultCat->num_rows > 0) {
                                                    // output data of each row
                                                    while ($rowCat = $resultCat->fetch_assoc()) {
                                                ?>      <?php $catIdInsert = $rowCat["category_id"];?>
                                                        <option value="<?php echo $rowCat["category_name"]; ?>"></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </datalist>
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Number of Copy -->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="text-right textDetail">Number of Copies : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control" name="location-detail-copy" id="txtCopy" value="">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Contact Person-->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="text-right textDetail">Contact Name : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="location-detail-contact" id="txtContact" value="">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Phone -->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="text-right textDetail">Contact Phone : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="txtPhone" name="phone" value="">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- insert -->
                                    <div class="row">
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-6">

                                            <button class="btn btn-masala" id="btnSave">Save</button> &nbsp;

                                            <a href="./location">
                                                <button class="btn btn-default">Cancel</button>
                                            </a>

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
<?php
}

$conn->close();
?>
<?php include 'footer.php'; ?>



<script>
    $(function() {
        $("#btnSave").click(saveLocation);
    });

    function saveLocation() {
        var id = $("#txtId").val();
        var location = $("#txtLocation").val();
        var address = $("#txtAddress").val();
        var category = $("#txtCategory").val();
        var copy = $("#txtCopy").val();
        var contact = $("#txtContact").val();
        var phone = $("#txtPhone").val();

        if (location.length == 0) {
            alert("Please Enter Location Name");
            $("#txtLocation").focus();
            return;
        }
        if (address.length == 0) {
            alert("Please Enter Address");
            $("#txtAddress").focus();
            return;
        }
        if (category.length == 0) {
            alert("Please Enter Category");
            $("#txtCategory").focus();
            return;
        }
        var chkCategory = $("#locationCategory").find("option[value='" + category + "']");
        if (chkCategory.length ==0) {
            alert("Please Enter a Valid Category.");
            $("#txtCategory").focus();
            return;
        }

        if (copy.length == 0) {
            alert("Please Enter Number of Copies");
            $("#txtCopy").focus();
            return;
        }

        var url = window.location.origin + window.location.pathname + "-update?id=" + id +
            "&location=" + location +
            "&address=" + address +
            "&category=" + category +
            "&copy=" + copy +
            "&contact=" + contact +
            "&phone=" + phone;
        window.location.href = url;
    }
</script>