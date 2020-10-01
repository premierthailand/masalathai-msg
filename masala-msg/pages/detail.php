<?php $activeDetail = 'active'; ?>
<?php $pageName = 'Delivery Details'; ?>
<?php include 'header.php'; ?>
<?php
$IDedit = $_REQUEST["id"];
$sql = "SELECT issue_id,transection_comment,transection_id,location_name,messenger_name,transection_delivery_date,transection_img,magazineVol_Month_id,magazineVol_Year,magazineType_id
FROM messenger 
    INNER JOIN transection  ON transection.messenger_id = messenger.messenger_id
    INNER JOIN location  ON location.location_id = transection.location_id
    INNER JOIN magazineVol  ON magazineVol.magazineVol_id = transection.magazineVol_id
    WHERE transection_id='$IDedit'
       ";

$result = $conn->query($sql);
$select = "selected";
$row = $result->fetch_assoc();

$date =  date_create($row["transection_delivery_date"]);
$listtime = $row["transection_delivery_date"] == '' ? date("Y-m-d") : date_format($date, "Y-m-d");
$MagazineVol = date_create("1-" . $row["magazineVol_Month_id"] . "-" . $row["magazineVol_Year"]);
$MagazineVoldate = $row["magazineVol_Month_id"] == '' ? date("Y-m") : date_format($MagazineVol, "Y-m");
?>
<input type="hidden" id="txtId" value="<?php echo $IDedit; ?>">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header card-header-masala card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons" style="padding-left:4px;">library_add</i>
                        </div>
                        <h4 class="card-title">Add Delivery</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Status -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="text-right textDetail">Magazine Type : </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label detail-type-margin">
                                                    <input class="form-check-input" type="radio" name="txtMagazine" value="masala" <?php echo $row["magazineType_id"] != 2 ? "checked" : "" ?>>
                                                    Masala
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="txtMagazine" value="lite" <?php echo $row["magazineType_id"] == 2 ? "checked" : "" ?>>
                                                    Masala LITE
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Date -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="text-right textDetail">Delivery Date <span class="red">*</span> : </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group no-margin-top">
                                            <input name="txtDate" type="date" id="txtDate" class="form-control" value="<?php echo $listtime == '' ? date("Y-m-d") : $listtime; ?>" max="<?php echo date("Y-m-d"); ?>" min="2020-10-01" />
                                        </div>
                                    </div>
                                </div>
                                <!-- masala -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="text-right textDetail">Magazine Vol. <span class="red">*</span> : </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group no-margin-top">
                                            <input name="txtVol" type="month" class="form-control" id="txtVol" value="<?php echo  $MagazineVoldate; ?>" max="<?php echo date("Y-m") ?>" min="2020-10" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Location -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="text-right textDetail">Location <span class="red">*</span> : </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group no-margin-top">
                                            <input list="detailLocation" class="custom-select form-control" name="txtLocation" id="txtLocation" value="<?php echo $row["location_name"]; ?>" placeholder="=== Select ===">
                                            <datalist id="detailLocation">
                                                <?php
                                                $sqlLocation = "SELECT location_id,location_name,location_address,location_count,category_name 
                                                            FROM location
                                                            INNER JOIN category ON location.`location_category_id`=category.category_id  
                                                            WHERE Location_isActive='1'
                                                            ORDER BY location_name ASC
                                                            ";

                                                $resultLocation = $conn->query($sqlLocation);

                                                if ($resultLocation->num_rows > 0) {
                                                    // output data of each row
                                                    while ($rowLocation = $resultLocation->fetch_assoc()) {
                                                ?>
                                                        <option data-address="<?php echo $rowLocation["location_address"]; ?>" data-copies="<?php echo $rowLocation["location_count"]; ?>" data-catgory="<?php echo $rowLocation["category_name"]; ?>" value="<?php echo $rowLocation["location_name"]; ?>"></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </datalist>
                                        </div>
                                    </div>
                                </div>


                                <!-- Address -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="text-right">Address : </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="lblAddress"></div>
                                    </div>
                                </div>
                                <!-- Address -->
                                <div class="row detailMargin">
                                    <div class="col-md-3">
                                        <div class="text-right">Number of Copies : </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="lblCopy"></div>
                                    </div>
                                </div>
                                <!-- Category -->
                                <div class="row detailMargin">
                                    <div class="col-md-3">
                                        <div class="text-right">Category : </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="lblCategory"></div>
                                    </div>
                                </div>

                                <!-- Messenger -->
                                <div class="row detailMargin">
                                    <div class="col-md-3">
                                        <div class="text-right textDetail">Messenger <span class="red">*</span> : </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group detail-date-margin no-margin-top">
                                            <input list="messengerLocation" class="custom-select form-control" name="txtMessenger" id="txtMessenger" placeholder="=== Select ===" value="<?php echo $row["messenger_name"]; ?>">
                                            <datalist id="messengerLocation">
                                                <?php
                                                $sql = "SELECT messenger_name
                                                    FROM `messenger` WHERE messenger_isActive='1'
                                                    ORDER BY messenger_name ASC
                                                    ";

                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while ($rowMessenger = $result->fetch_assoc()) {
                                                ?>
                                                        <option value="<?php echo $rowMessenger["messenger_name"]; ?>"></option>
                                                <?php
                                                    }
                                                }
                                                ?> </datalist>
                                        </div>
                                    </div>
                                </div>
                                <!-- Upload -->
                                <input type="hidden" id="tempPhoto" value="<?php echo $row["transection_img"]; ?>">
                                <input type="hidden" id="flagTempPhoto" value="<?php echo $row["transection_img"] == '' ? 0 : 1; ?>">
                                <div class="row detailMargin">
                                    <div class="col-md-3">
                                        <div class="text-right textDetail">Photo <span class="red">*</span> : </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="file" id="txtImage" name="txtImage" accept="image/*" value="<?php echo $row["transection_img"]; ?>">
                                        <div class='preview'>
                                            <img src="../uploads/<?php echo $row["transection_img"]; ?>" id="img" width="auto" height="100">
                                        </div>
                                    </div>
                                </div>
                                <!-- Remark -->
                                <div class="row detailMargin">
                                    <div class="col-md-3">
                                        <div class="text-right textDetail">Remark : </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group no-margin-top">
                                            <select class="form-control ddlRemark" id="txtIssue">
                                            <option value="0" >=== No Issue ===</option>
                                                <?php
                                                $sqlissue = "SELECT issue_id,issue_name
                                                    FROM `issue`";

                                                $resultissue = $conn->query($sqlissue);

                                                if ($resultissue->num_rows > 0) {
                                                    // output data of each row
                                                    while ($rowissue = $resultissue->fetch_assoc()) {
                                                        if ($rowissue["issue_id"] != 0) {
                                                ?>
                                                            <option value="<?php echo $rowissue["issue_id"]; ?>" <?php
                                                                                                                    if ($rowissue["issue_id"] == $row["issue_id"]) {
                                                                                                                        echo "selected";
                                                                                                                    }
                                                                                                                    ?>><?php echo $rowissue["issue_name"]; ?></option>
                                                <?php
                                                        }
                                                    }
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment -->
                                <div class="row" id="lblComment" style="display:none;">
                                    <div class="col-md-3">
                                        <div class="text-right textDetail">Comment : </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group no-margin-top">
                                            <input type="text" class="form-control" id="txtComment" value="<?php echo $row["transection_comment"]; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- Save -->
                                <div class="row">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button class="btn btn-masala pull-left" id="btnSave">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $conn->close(); ?>

<?php include 'footer.php'; ?>

<script>
    var fileName = "";
    $(function() {
        setFilename();
        $("#btnSave").click(clickSave);
        $("#txtLocation").change(changeLocation);
        $("#txtImage").change(uploadImage);
        $("#txtIssue").change(changeRemark);

        changeLocation();
        changeRemark();
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
                    $("#flagTempPhoto").val("");
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

    function clickSave() {
        var id = $("#txtId").val() == null ? "" : $("#txtId").val();
        var magazine = $("input[name='txtMagazine']:checked").val();
        var date = $("#txtDate").val();
        var vol = $("#txtVol").val();
        var location = $("#txtLocation").val();
        var messenger = $("#txtMessenger").val();
        var image = $("#txtImage").val();
        var issue = $("#txtIssue").val();
        var comment = $("#txtComment").val() == null ? "" : $("#txtComment").val();
        if (date.length == 0) {
            alert("Please Enter Delivery Date.");
            $("#txtDate").focus();
            return;
        }
        if (vol.length == 0) {
            alert("Please Enter Magazine Vol.");
            $("#txtVol").focus();
            return;
        }
        if (location.length == 0) {
            alert("Please Enter Location Name.");
            $("#txtLocation").focus();
            return;
        }
        var chkLocation = $("#detailLocation").find("option[value='" + location + "']");
        if (chkLocation.length == 0) {
            alert("Please Enter a Valid Location Name.");
            $("#txtLocation").focus();
            return;
        }
        if (messenger.length == 0) {
            alert("Please Enter Messenger Name.");
            $("#txtMessenger").focus();
            return;
        }
        var chkMessenger = $("#messengerLocation").find("option[value='" + messenger + "']");
        if (chkMessenger.length == 0) {
            alert("Please Enter a Valid Messenger Name.");
            $("#txtMessenger").focus();
            return;
        }
        var image = $('#txtImage')[0].files;
        if ($("#flagTempPhoto").val() == 0) {
            if (image.length != 0) {
                if (image[0].name.split(".").length == 1 || !isImage(image[0])) { //Chagen Type Image
                    alert("Please upload only (png, jpg, jpeg).");
                    return;
                };
                if (image[0].size >= 3000000) {
                    alert("Your image is too large.");
                    return;
                }
            } else {
                alert("Please Upload Photo.");
                return;
            }
        }
        image = fileName;
        var url = window.location.origin + window.location.pathname + "-update?id=" + id +
            "&magazine=" + magazine +
            "&date=" + date +
            "&vol=" + vol +
            "&location=" + location +
            "&messenger=" + messenger +
            "&image=" + image +
            "&issue=" + issue +
            "&comment=" + comment;
        window.location.href = url;
    }

    function changeLocation() {
        var dataLocation = $("#detailLocation").find("option[value='" + $("#txtLocation").val() + "']");
        if (dataLocation.length != 0) {
            $("#lblAddress").html(dataLocation.attr("data-address"));
            $("#lblCopy").html(dataLocation.attr("data-copies"));
            $("#lblCategory").html(dataLocation.attr("data-catgory"));
        } else {
            $("#lblAddress").html("-");
            $("#lblCopy").html("-");
            $("#lblCategory").html("-");
        }
    }

    function changeRemark() {
        if ($("#txtIssue").val() == 3) {
            $("#lblComment").show();
        } else {
            $("#lblComment").hide();
            $("#txtComment").val("");
        }
    }
</script>