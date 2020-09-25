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
$sql = "SELECT `location_id`,`location_name`,`location_houseno`,location_soi,location_road,location_District,location_Province,location_postno,location_area,img_status,location_img,location_count,location_contact_name,location_contact_phone,category_name 
 FROM `location` 
 INNER JOIN category ON location.`location_category_id`=category.category_id 
 WHERE `Location_isActive`=1 AND location_id='$IDedit'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
?>
        <div class="content">
        <div class="container-fluid">
            <input type="hidden" id="txtId" value="<?php echo $row["location_id"]?>">
            <input type="hidden" id="tempCopy" value="<?php echo $row["location_count"]?>">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-masala card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons" style="padding-left:4px;">apartment</i>
                            </div>
                            <h4 class="card-title"><b>Edit Location </b></h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Location Name -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">Location Name <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="location-detail-name" id="txtLocation" placeholder="Location Name" value="<?php echo $row["location_name"]?>">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- House Number -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">House Number <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="location-detail-number" id="txtHouse" placeholder="House Number" value="<?php echo $row["location_houseno"]?>">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Soi -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">Soi <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="location-detail-soi" id="txtSoi" placeholder="Soi" value="<?php echo $row["location_soi"]?>">
                                        </div>
                                    <!-- Road -->
                                        <div class="col-md-2">
                                            <div class="textDetail text-right">Road <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="location-detail-road" id="txtRoad" placeholder="Road" value="<?php echo $row["location_road"]?>">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- District -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">District <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="location-detail-District" id="txtDistrict" placeholder="District" value="<?php echo $row["location_District"]?>">
                                        </div>
                                    <!-- Province -->
                                        <div class="col-md-2">
                                            <div class="textDetail text-right">Province <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="location-detail-Province" id="txtProvince" placeholder="Province" value="<?php echo $row["location_Province"]?>">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Post Code -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">Post Code <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control" name="location-detail-PostCode" id="txtPost" placeholder="Post Code" value="<?php echo $row["location_postno"]?>">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Area -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">Area <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="location-detail-Area" id="txtArea" placeholder="Area" value="<?php echo $row["location_area"]?>">
                                        </div>
                                    </div>
                                    <br>
                                    
                                    <!-- Category -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">Category <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input list="locationCategory" class="custom-select form-control" id="txtCategory" name="location-detail-catgory" placeholder="=== Select Category ===" value="<?php echo $row["category_name"]?>">
                                            <datalist id="locationCategory">
                                                <?php
                                                $sqlCat = "SELECT category_id,category_name
                                                    FROM `category` ";
                                                $resultCat = $conn->query($sqlCat);
                                                if ($resultCat->num_rows > 0) {
                                                    // output data of each row
                                                    while ($rowCat = $resultCat->fetch_assoc()) {
                                                ?> <?php $catIdInsert = $rowCat["category_id"]; ?>
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
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">Number of Copies <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control" id="txtCopy"></select>
                                            <!-- <input type="number" class="form-control" name="location-detail-copy" id="txtCopy" value="1"> -->
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Contact Person-->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">Contact Name : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="location-detail-contact" id="txtContact" placeholder="Contact Name" value="<?php echo $row["location_contact_name"]?>">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Phone -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">Contact Phone : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="txtPhone" name="phone" placeholder="Contact Phone" value="<?php echo $row["location_contact_phone"]?>">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Upload -->
                                    <div class="row detailMargin">
                                                <div class="col-md-2">
                                                    <div class="text-right textDetail">Upload Photo : </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" id="txtImage" name="txtImage" accept=".jpg,.png,.jpeg" value="<?php echo $row["transection_img"]; ?>">
                                                </div>
                                            </div>
                                            <br>
                                    <!-- insert -->
                                    <div class="row">

                                        <div class="col-md-6 text-center">

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
} else {
    ?>
    <div class="content">
        <div class="container-fluid">
            <input type="hidden" id="txtId" value="">
            <input type="hidden" id="tempCopy" value="1">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-masala card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons" style="padding-left:4px;">apartment</i>
                            </div>
                            <h4 class="card-title"><b>Add Location</b></h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Location Name -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">Location Name <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="location-detail-name" id="txtLocation" placeholder="Location Name">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- House Number -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">House Number <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="location-detail-number" id="txtHouse" placeholder="House Number">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Soi -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">Soi <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="location-detail-soi" id="txtSoi" placeholder="Soi">
                                        </div>
                                    <!-- Road -->
                                        <div class="col-md-2">
                                            <div class="textDetail text-right">Road <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="location-detail-road" id="txtRoad" placeholder="Road">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- District -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">District <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="location-detail-District" id="txtDistrict" placeholder="District">
                                        </div>
                                    <!-- Province -->
                                        <div class="col-md-2">
                                            <div class="textDetail text-right">Province <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="location-detail-Province" id="txtProvince" placeholder="Province">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Post Code -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">Post Code <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control" name="location-detail-PostCode" id="txtPost" placeholder="Post Code">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Area -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">Area <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="location-detail-Area" id="txtArea" placeholder="Area">
                                        </div>
                                    </div>
                                    <br>
                                    
                                    <!-- Category -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">Category <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input list="locationCategory" class="custom-select form-control" id="txtCategory" name="location-detail-catgory" value="" placeholder="=== Select Category ===">
                                            <datalist id="locationCategory">
                                                <?php
                                                $sqlCat = "SELECT category_id,category_name
                                                    FROM `category` ";
                                                $resultCat = $conn->query($sqlCat);
                                                if ($resultCat->num_rows > 0) {
                                                    // output data of each row
                                                    while ($rowCat = $resultCat->fetch_assoc()) {
                                                ?> <?php $catIdInsert = $rowCat["category_id"]; ?>
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
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">Number of Copies <span class="red">*</span> : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control" id="txtCopy"></select>
                                            <!-- <input type="number" class="form-control" name="location-detail-copy" id="txtCopy" value="1"> -->
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Contact Person-->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">Contact Name : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="location-detail-contact" id="txtContact" value="" placeholder="Contact Name">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Phone -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-right textDetail">Contact Phone : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="txtPhone" name="phone" value="" placeholder="Contact Phone">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Upload -->
                                    <div class="row detailMargin">
                                                <div class="col-md-2">
                                                    <div class="text-right textDetail">Upload Photo : </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" id="txtImage" name="txtImage" accept=".jpg,.png,.jpeg" value="<?php echo $row["transection_img"]; ?>">
                                                </div>
                                            </div>
                                            <br>
                                    <!-- insert -->
                                    <div class="row">

                                        <div class="col-md-6 text-center">

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
        genCopyData();
    });

    function genCopyData() {
        for (var i = 1; i <= 100; i++) {
            var sel = document.getElementById("txtCopy");
            sel.options[sel.options.length] = new Option(i, i);
        }
        $("#txtCopy").val($("#tempCopy").val());
    }

    function saveLocation() {
        var id = $("#txtId").val();
        var location = $("#txtLocation").val();
        var house = $("#txtHouse").val();
        var soi = $("#txtSoi").val();
        var road = $("#txtRoad").val();
        var District = $("#txtDistrict").val();
        var Province = $("#txtProvince").val();
        var area = $("#txtArea").val();
        var post = $("#txtPost").val();
        var category = $("#txtCategory").val();
        var copy = $("#txtCopy").val();
        var contact = $("#txtContact").val();
        var phone = $("#txtPhone").val();
        var image = $("#txtImage").val();

        if (location.length == 0) {
            validateAlert("txtLocation", "Please Enter Location Name");
            return;
        }
        if (house.length == 0) {
            validateAlert("txtHouse", "Please Enter House");
            return;
        }
        if (soi.length == 0) {
            validateAlert("txtSoi", "Please Enter Soi");
            return;
        }
        if (road.length == 0) {
            validateAlert("txtRoad", "Please Enter Road");
            $("#txtRoad").focus();
            return;
        }
        if (District.length == 0) {
            validateAlert("txtDistrict", "Please Enter District");
            $("#txtDistrict").focus();
            return;
        }
        if (Province.length == 0) {
            validateAlert("txtProvince", "Please Enter Province");
            $("#txtProvince").focus();
            return;
        }
        if (area.length == 0) {
            validateAlert("txtArea", "Please Enter Area");
            return;
        }
        if (post.length == 0) {
            validateAlert("txtPost", "Please Enter Post");
            return;
        }
        if (category.length == 0) {
            validateAlert("txtCategory", "Please Enter Category");
            return;
        }
        var chkCategory = $("#locationCategory").find("option[value='" + category + "']");
        if (chkCategory.length == 0) {
            validateAlert("txtCategory", "Please Enter a Valid Category");
            return;
        }

        if (copy.length == 0) {
            validateAlert("txtCopy", "Please Enter Number of Copies");
            return;
        }

        var url = window.location.origin + window.location.pathname + "-update?id=" + id +
            "&location=" + location +
            "&houseNo=" + house +
            "&soi=" + soi +
            "&road=" + road +
            "&District=" + District +
            "&Province=" + Province +
            "&post=" + post +
            "&area=" + area +
            "&category=" + category +
            "&copy=" + copy +
            "&contact=" + contact +
            "&phone=" + phone +
            "&image=" + image;
        
        window.location.href = url;
    }

    function validateAlert(id, text) {
        alert(text);
        $("#" + id).focus();
    }
</script>