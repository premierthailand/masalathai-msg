<?php $activeDetail = 'active'; ?>
<?php $pageName = 'Delivery Details'; ?>
<?php include 'header.php'; ?>
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
                                            <input name="txtDate" type="date" id="txtDate" class="form-control" value="<?php echo date("Y-m-d"); ?>" />
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
                                            <input name="txtVol" type="month" class="form-control" id="txtVol" value="<?php echo date("Y-m") ?>" />
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
                                                $sql = "SELECT location_id,location_name
                                                    FROM `location`";

                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                ?>
                                                        <option value="<?php echo $row["location_name"]; ?>"></option>
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
                                        <div id="lblAddress">2 Sukhumvit Soi 19 (Wattana), Sukhumvit Road, Klongtoey Nua, Wattana, Bangkok 10110, Thailand.</div>
                                    </div>
                                </div>
                                <!-- Address -->
                                <div class="row detailMargin">
                                    <div class="col-md-3">
                                        <div class="text-right">Number of Copies : </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="lblCopy">120</div>
                                    </div>
                                </div>
                                <!-- Category -->
                                <div class="row detailMargin">
                                    <div class="col-md-3">
                                        <div class="text-right">Category : </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="lblCategory">Shopping Center</div>
                                    </div>
                                </div>

                                <!-- Messenger -->
                                <div class="row detailMargin">
                                    <div class="col-md-3">
                                        <div class="text-right textDetail">Messenger Name : </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group detail-date-margin">
                                            <input list="messengerLocation" class="custom-select form-control" name="txtMessenger" id="txtMessenger">
                                            <datalist id="messengerLocation">
                                                <?php
                                                $sql = "SELECT messenger_name
                                                    FROM `messenger`";

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
                                            <button class="btn btn-masala pull-left" id="btnSearch">Save</button>
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
<?php include 'footer.php'; ?>

<script>
    $(function() {
        $("#btnSearch").click(clickSearch);
    });
    function clickSearch(){
        var magazine =  $("input[name='txtMagazine']:checked"). val();
        var date = $("#txtDate").val();
        var vol = $("#txtVol").val();
        var location = $("#txtLocation").val();
        var messenger = $("#txtMessenger").val();
        var image = $("#txtImage").val();
        var issue = $("#txtIssue").val();
        if(date.length==0){
            alert("Please Enter Delivery Date");
            return;
        }
        if(vol.length==0){
            alert("Please Enter Magazine Vol.");
            return;
        }
        if(location.length==0){
            alert("Please Enter Location Name");
            return;
        }
        if(messenger.length==0){
            alert("Please Enter Messenger Name");
            return;
        }

        var url = window.location.origin + window.location.pathname +"-add.php?magazine=" + magazine 
                    + "&date=" + date
                    + "&vol=" + vol
                    + "&location=" + location
                    + "&messenger=" + messenger
                    + "&image=" + image
                    + "&issue=" + issue;
        window.location.href = url;
    }
</script>