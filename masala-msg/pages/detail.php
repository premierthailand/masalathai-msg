<?php $activeDetail = 'active'; ?>
<?php $pageName = 'Delivery Details'; ?>
<?php include 'header.php'; ?>
<?php
if ($_REQUEST["id"] != '') {
?>
    <?php
    $IDedit = $_REQUEST["id"];
    $sql = "SELECT issue_name,transection_id,location_name,messenger_name,transection_delivery_date,transection_img,magazineVol_Month_id,magazineVol_Year 
FROM messenger 
    INNER JOIN transection  ON transection.messenger_id = messenger.messenger_id
    INNER JOIN location  ON location.location_id = transection.location_id
    INNER JOIN magazineVol  ON magazineVol.magazineVol_id = transection.magazineVol_id
    INNER JOIN magazinetype  ON magazinetype.magazineType_id = magazineVol.magazineType_id
    INNER JOIN issue  ON issue.issue_id = transection.issue_id
    WHERE transection_id='$IDedit'
       ";

    $result = $conn->query($sql);
    $select = "selected";

    ?>
    <input type="hidden" id="txtId" value="<?php echo $IDedit; ?>">
    <?php
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $date = date_create($row["transection_delivery_date"]);
            $listtime = date_format($date, "Y-m-d");
            $MagazineVol = date_create("1-" . $row["magazineVol_Month_id"] . "-" . $row["magazineVol_Year"]);
            $MagazineVoldate = date_format($MagazineVol, "Y-m");

    ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header card-header-masala card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons" style="padding-left:4px;">library_add</i>
                                    </div>
                                    <h4 class="card-title">Update Delivery</h4>
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
                                                                <input class="form-check-input" type="radio" name="txtMagazine" value="masala" checked>
                                                                Masala
                                                                <span class="circle">
                                                                    <span class="check"></span>
                                                                </span>
                                                            </label>
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="txtMagazine" value="lite">
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
                                                    <div class="text-right textDetail">Delivery Date : </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group no-margin-top">
                                                        <input name="txtDate" type="date" id="txtDate" class="form-control" value="<?php echo $listtime; ?>" max="<?php echo date("Y-m-d"); ?>" min="1990-01-01" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- masala -->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="text-right textDetail">Magazine Vol. : </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group no-margin-top">
                                                        <input name="txtVol" type="month" class="form-control" id="txtVol" value="<?php echo  $MagazineVoldate; ?>" max="<?php echo date("Y-m") ?>" min="1990-01" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Location -->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="text-right textDetail">Location Name: </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group no-margin-top">
                                                        <input list="detailLocation" class="custom-select form-control" name="txtLocation" id="txtLocation" value="<?php echo $row["location_name"]; ?>">
                                                        <datalist id="detailLocation">
                                                            <?php
                                                            $sqlLocation = "SELECT location_id,location_name,location_address,location_count,category_name FROM location
                                                INNER JOIN category ON location.`location_category_id`=category.category_id  WHERE Location_isActive='1'
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
                                                    <div id="lblAddress">-</div>
                                                </div>
                                            </div>
                                            <!-- Address -->
                                            <div class="row detailMargin">
                                                <div class="col-md-3">
                                                    <div class="text-right">Number of Copies : </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div id="lblCopy">-</div>
                                                </div>
                                            </div>
                                            <!-- Category -->
                                            <div class="row detailMargin">
                                                <div class="col-md-3">
                                                    <div class="text-right">Category : </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div id="lblCategory">-</div>
                                                </div>
                                            </div>

                                            <!-- Messenger -->
                                            <div class="row detailMargin">
                                                <div class="col-md-3">
                                                    <div class="text-right textDetail">Messenger Name : </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group detail-date-margin no-margin-top">
                                                        <input list="messengerLocation" class="custom-select form-control" name="txtMessenger" id="txtMessenger" value="<?php echo $row["messenger_name"]; ?>">
                                                        <datalist id="messengerLocation">
                                                            <?php
                                                            $sqlmessenger = "SELECT messenger_name
                                                    FROM `messenger` WHERE messenger_isActive='1'
                                                    ";

                                                            $resultmessenger = $conn->query($sqlmessenger);

                                                            if ($resultmessenger->num_rows > 0) {
                                                                // output data of each row
                                                                while ($rowmessenger = $resultmessenger->fetch_assoc()) {
                                                            ?>
                                                                    <option value="<?php echo $rowmessenger["messenger_name"]; ?>"></option>
                                                            <?php
                                                                }
                                                            }
                                                            ?> </datalist>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Upload -->
                                            <div class="row detailMargin">
                                                <div class="col-md-3">
                                                    <div class="text-right textDetail">Upload Photo : </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="file" id="txtImage" name="txtImage" accept=".jpg,.png,.jpeg" value="<?php echo $row["transection_img"]; ?>">
                                                </div>
                                            </div>
                                            <!-- Comment -->
                                            <div class="row detailMargin">
                                                <div class="col-md-3">
                                                    <div class="text-right textDetail">Issue : </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group no-margin-top">
                                                        <select class="form-control" name="txtIssue" id="txtIssue">
                                                            <?php
                                                            $sqlissue = "SELECT issue_id,issue_name
                                                    FROM `issue`";

                                                            $resultissue = $conn->query($sqlissue);

                                                            if ($resultissue->num_rows > 0) {
                                                                // output data of each row
                                                                while ($rowissue = $resultissue->fetch_assoc()) {
                                                            ?>
                                                                    <option value="<?php echo $rowissue["issue_id"]; ?>" <?php
                                                                                                                            if ($rowissue["issue_name"] == $row["issue_name"]) {
                                                                                                                                echo "selected";
                                                                                                                            }
                                                                                                                            ?>><?php echo $rowissue["issue_name"]; ?></option>
                                                            <?php
                                                                }
                                                            }
                                                            ?>

                                                        </select>
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


    <?php
        }
    }
} else {
    ?>
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
                                                        <input class="form-check-input" type="radio" name="txtMagazine" value="masala" checked>
                                                        Masala
                                                        <span class="circle">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="txtMagazine" value="lite">
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
                                            <div class="text-right textDetail">Delivery Date : </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group no-margin-top">
                                                <input name="txtDate" type="date" id="txtDate" class="form-control" value="<?php echo date("Y-m-d"); ?>" max="<?php echo date("Y-m-d"); ?>" min="1990-01-01" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- masala -->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="text-right textDetail">Magazine Vol. : </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group no-margin-top">
                                                <input name="txtVol" type="month" class="form-control" id="txtVol" value="<?php echo date("Y-m") ?>" max="<?php echo date("Y-m") ?>" min="1990-01" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Location -->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="text-right textDetail">Location Name : </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group no-margin-top">
                                                <input list="detailLocation" class="custom-select form-control" name="txtLocation" id="txtLocation">
                                                <datalist id="detailLocation">
                                                    <?php
                                                    $sql = "SELECT location_id,location_name,location_address,location_count,category_name FROM location
                                                INNER JOIN category ON location.`location_category_id`=category.category_id  WHERE Location_isActive='1'
                                                     ";

                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                        // output data of each row
                                                        while ($row = $result->fetch_assoc()) {
                                                    ?>
                                                            <option data-address="<?php echo $row["location_address"]; ?>" data-copies="<?php echo $row["location_count"]; ?>" data-catgory="<?php echo $row["category_name"]; ?>" value="<?php echo $row["location_name"]; ?>"></option>
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
                                            <div id="lblAddress">-</div>
                                        </div>
                                    </div>
                                    <!-- Address -->
                                    <div class="row detailMargin">
                                        <div class="col-md-3">
                                            <div class="text-right">Number of Copies : </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="lblCopy">-</div>
                                        </div>
                                    </div>
                                    <!-- Category -->
                                    <div class="row detailMargin">
                                        <div class="col-md-3">
                                            <div class="text-right">Category : </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="lblCategory">-</div>
                                        </div>
                                    </div>

                                    <!-- Messenger -->
                                    <div class="row detailMargin">
                                        <div class="col-md-3">
                                            <div class="text-right textDetail">Messenger Name : </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group detail-date-margin no-margin-top">
                                                <input list="messengerLocation" class="custom-select form-control" name="txtMessenger" id="txtMessenger">
                                                <datalist id="messengerLocation">
                                                    <?php
                                                    $sql = "SELECT messenger_name
                                                    FROM `messenger` WHERE messenger_isActive='1'
                                                    ";

                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                        // output data of each row
                                                        while ($row = $result->fetch_assoc()) {
                                                    ?>
                                                            <option value="<?php echo $row["messenger_name"]; ?>"></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?> </datalist>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Upload -->
                                    <div class="row detailMargin">
                                        <div class="col-md-3">
                                            <div class="text-right textDetail">Upload Photo : </div>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="file" id="txtImage" name="txtImage" accept=".jpg,.png,.jpeg">
                                        </div>
                                    </div>
                                    <!-- Comment -->
                                    <div class="row detailMargin">
                                        <div class="col-md-3">
                                            <div class="text-right textDetail">Issue : </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group no-margin-top">
                                                <select class="form-control" name="txtIssue" id="txtIssue">
                                                    <?php
                                                    $sql = "SELECT issue_id,issue_name
                                                    FROM `issue`";

                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                        // output data of each row
                                                        while ($row = $result->fetch_assoc()) {
                                                    ?>
                                                            <option value="<?php echo $row["issue_id"]; ?>"><?php echo $row["issue_name"]; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>

                                                </select>
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


<?php
}
?>
<?php include 'footer.php'; ?>

<script>
    $(function() {
        $("#btnSave").click(clickSave);
        changeLocation();
        $("#txtLocation").change(changeLocation);
    });

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

    function clickSave() {
        var id = $("#txtId").val();
        var magazine = $("input[name='txtMagazine']:checked").val();
        var date = $("#txtDate").val();
        var vol = $("#txtVol").val();
        var location = $("#txtLocation").val();
        var messenger = $("#txtMessenger").val();
        var image = $("#txtImage").val();
        var issue = $("#txtIssue").val();
        if (date.length == 0) {
            alert("Please Enter Delivery Date.");
            return;
        }
        if (vol.length == 0) {
            alert("Please Enter Magazine Vol.");
            return;
        }
        if (location.length == 0) {
            alert("Please Enter Location Name.");
            return;
        }
        var chkLocation = $("#detailLocation").find("option[value='" + location + "']");
        if (chkLocation.length == 0) {
            alert("Please Enter a Valid Location Name.");
            return;
        }
        if (messenger.length == 0) {
            alert("Please Enter Messenger Name.");
            return;
        }
        var chkMessenger = $("#messengerLocation").find("option[value='" + messenger + "']");
        if (chkMessenger.length == 0) {
            alert("Please Enter a Valid Messenger Name.");
            return;
        }

        var url = window.location.origin + window.location.pathname + "-update?id=" + id +
            "&magazine=" + magazine +
            "&date=" + date +
            "&vol=" + vol +
            "&location=" + location +
            "&messenger=" + messenger +
            "&image=" + image +
            "&issue=" + issue;
        window.location.href = url;
    }
</script>