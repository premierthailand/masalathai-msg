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
$sql = "SELECT `location_id`,`location_name`,`location_houseno`,location_soi,location_soi_number,location_subsoi_number,location_road,location_District,location_Province,location_postno,location_area,location_img,location_count,location_contact_name,location_contact_phone,category_name 
 FROM `location` 
 INNER JOIN category ON location.`location_category_id`=category.category_id 
 WHERE `Location_isActive`=1 AND location_id='$IDedit'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
<div class="content">
    <div class="container-fluid">
        <input type="hidden" id="txtId" value="<?php echo $row["location_id"] ?>">
        <input type="hidden" id="tempCopy" value="<?php echo $row["location_count"] ?>">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header card-header-masala card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons" style="padding-left:4px;">apartment</i>
                        </div>
                        <h4 class="card-title"><b><?php echo $pageName ?> </b></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Location Name -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="text-right textDetail">Location Name <span class="red">*</span> : </div>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="location-detail-name" id="txtLocation" placeholder="Location Name" value="<?php echo $row["location_name"] ?>">
                                    </div>
                                    <!-- House Number -->
                                    <div class="col-md-1">
                                        <div class="text-right textDetail">House <span class="red">*</span> : </div>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="location-detail-number" id="txtHouse" placeholder="House" value="<?php echo $row["location_houseno"] ?>">
                                    </div>
                                </div>
                                <br>
                                <!-- Soi -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="text-right textDetail">Soi : </div>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="location-detail-number" id="txtSoiName" placeholder="Soi Name" value="<?php echo $row["location_soi"] ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <?php
                                        ?>
                                        <select class="form-control" id="txtSoi">
                                            <option value="">=== Soi Number ===</option>
                                            <?php for ($i = 0; $i <= 150; $i++) {
                                            ?>
                                                <option value="<?php echo $i; ?>" <?php if ($row["location_soi_number"] == "$i") {
                                                                                        echo "selected";
                                                                                    } ?>> <?php echo $i; ?> </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="text-center" style="margin-top: 10px; font-size:20px;">
                                        <a>/</a>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-control" id="txtSubSoi">
                                            <option value="">=== Sub Number ===</option>
                                            <?php for ($i = 0; $i <= 50; $i++) {
                                            ?>
                                                <option value="<?php echo $i; ?>" <?php if ($row["location_subsoi_number"] == "$i") {
                                                                                        echo "selected";
                                                                                    } ?>> <?php echo $i; ?> </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <!-- Road -->
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="textDetail text-right">Road <span class="red">*</span> : </div>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="location-detail-road" id="txtRoad" placeholder="Road" value="<?php echo $row["location_road"] ?>">
                                    </div>
                                    <!-- District -->
                                    <div class="col-md-1">
                                        <div class="text-right textDetail">District <span class="red">*</span> : </div>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="location-detail-District" id="txtDistrict" placeholder="District" value="<?php echo $row["location_District"] ?>">
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <!-- Province -->
                                    <div class="col-md-2">
                                        <div class="textDetail text-right">Province <span class="red">*</span> : </div>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="location-detail-Province" id="txtProvince" placeholder="Province" value="<?php echo $row["location_Province"] ?>">
                                    </div>
                                    <!-- Post Code -->

                                    <div class="col-md-1">
                                        <div class="text-right textDetail">Post Code &nbsp; </div>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" name="location-detail-PostCode" id="txtPost" placeholder="Post Code" value="<?php echo $row["location_postno"] ?>">
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <!-- Area -->
                                    <div class="col-md-2">
                                        <div class="text-right textDetail">Area <span class="red">*</span> : </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="location-detail-Area" id="txtArea" placeholder="Area" value="<?php echo $row["location_area"] ?>">
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <!-- Number of Copy -->
                                    <div class="col-md-2">
                                        <div class="text-right textDetail">Number of Copies <span class="red">*</span> : </div>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control" id="txtCopy">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                            <option value="30">30</option>
                                            <option value="35">35</option>
                                            <option value="40">40</option>
                                            <option value="45">45</option>
                                            <option value="50">50</option>
                                        </select>

                                    </div>
                                    <!-- Category -->
                                    <div class="col-md-1">
                                        <div class="text-right textDetail">Category <span class="red">*</span></div>
                                    </div>
                                    <div class="col-md-4">
                                        <input list="locationCategory" class="custom-select form-control" id="txtCategory" name="location-detail-catgory" placeholder="=== Select ===" value="<?php echo $row["category_name"] ?>">
                                        <datalist id="locationCategory">
                                            <?php
                                            $sqlCat = "SELECT category_id,category_name
                                                    FROM `category` ";
                                            $resultCat = $conn->query($sqlCat);
                                            if ($resultCat->num_rows > 0) {
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
                                <!-- Contact Person-->
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="text-right textDetail">Contact Name : </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="location-detail-contact" id="txtContact" placeholder="Contact Name" value="<?php echo $row["location_contact_name"] ?>">
                                    </div>
                                </div>
                                <br>
                                <!-- Phone -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="text-right textDetail">Contact Phone : </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="txtPhone" name="phone" placeholder="Contact Phone" value="<?php echo $row["location_contact_phone"] ?>">
                                    </div>
                                </div>
                                <br>
                                <!-- Upload -->
                                <input type="hidden" id="tempPhoto" value="<?php echo $row["location_img"]; ?>">
                                <input type="hidden" id="flagTempPhoto" value="<?php echo $row["location_img"] == '' ? 0 : 1; ?>">
                                <div class="row detailMargin">
                                    <div class="col-md-2">
                                        <div class="text-right textDetail">Photo : </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="file" id="txtImage" name="txtImage" accept=".jpg,.png,.jpeg" value="<?php echo $row["location_img"]; ?>">
                                        <div class='preview'>
                                            <img src="../uploads/<?php echo $row["location_img"]; ?>" id="img" width="auto" height="100">
                                        </div>
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
$conn->close();
?>
<?php include 'footer.php'; ?>



<script>
    var fileName = "";
    $(function() {
        setFilename();
        $("#btnSave").click(saveLocation);
        $("#txtImage").change(uploadImage);
    });

    function setFilename() {
        if ($("#tempPhoto").val() != "") {
            fileName = $("#tempPhoto").val();
            $(".preview img").show();
        }
    }

    function uploadImage() {
        var fd = new FormData();
        var tempFiles = $("#txtImage")[0].files[0]
        fileName = genFileName(tempFiles.name.split(".")[1]);
        var files = new File([tempFiles], fileName, {
            type: tempFiles.type
        });
        fd.append('file', files);

        $.ajax({
            url: 'upload-image.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response != 0) {
                    $("#img").attr("src", response);
                    $(".preview img").show(); // Display image element
                    return fileName;
                } else {
                    alert("Please upload only image files.")
                    return "";
                }
            },
        });

    }

    function saveLocation() {
        var id = $("#txtId").val();
        var location = $("#txtLocation").val();
        var house = $("#txtHouse").val();
        var soiName = $("#txtSoiName").val();
        var soi = $("#txtSoi").val();
        var subsoi = $("#txtSubSoi").val();
        var road = $("#txtRoad").val();
        var district = $("#txtDistrict").val();
        var province = $("#txtProvince").val();
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
        if (road.length == 0) {
            validateAlert("txtRoad", "Please Enter Road");
            $("#txtRoad").focus();
            return;
        }
        if (district.length == 0) {
            validateAlert("txtDistrict", "Please Enter District");
            $("#txtDistrict").focus();
            return;
        }
        if (province.length == 0) {
            validateAlert("txtProvince", "Please Enter Province");
            $("#txtProvince").focus();
            return;
        }
        if (area.length == 0) {
            validateAlert("txtArea", "Please Enter Area");
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
        var image = $('#txtImage')[0].files;
        if ($("#flagTempPhoto").val() == 0) {

            if (image.length != 0) {
                if (image[0].name.split(".").length == 1 || !isImage(image[0])) {
                    alert("Please upload only (png, jpg, jpeg).");
                    return;
                };
                if (image[0].size >= 3000000) {
                    alert("Your image is too large.");
                    return;
                }
            }
        }
        image = fileName;

        var url = window.location.origin + window.location.pathname + "-update?id=" + id +
            "&location=" + location +
            "&houseNo=" + house +
            "&soiName=" + soiName +
            "&soi=" + soi +
            "&subSoi=" + subsoi +
            "&road=" + road +
            "&district=" + district +
            "&province=" + province +
            "&post=" + post +
            "&area=" + area +
            "&copy=" + copy +
            "&category=" + category +
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