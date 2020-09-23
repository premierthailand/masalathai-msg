<?php $activeReport = 'active'; ?>
<?php $pageName = 'Messenger Report'; ?>
<?php include 'header.php'; ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header card-header-masala card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">person</i>
                        </div>
                        <h3 class="card-title">Messenger Report</h3>
                    </div>
                    <div class="col-md-12">
                        <div class="card-body" style="padding-left: 5%;">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <input type="text" id="txtDate" class="form-control datetimepicker" name="date-msg" placeholder="Date" value="<?php echo $_REQUEST["date"] ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <input list="messengerReport" class="custom-select form-control" id="txtMessenger" name="name-msg" placeholder="Messenger Name" value="<?php echo $_REQUEST["messenger"] ?>">
                                        <datalist id="messengerReport">
                                            <?php

                                            $sql = "SELECT messenger_name
                                            FROM `messenger` ";

                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                            ?>
                                                    <option value="<?php echo $row["messenger_name"]; ?>"></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </datalist>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <input list="locationReport" class="custom-select form-control" id="txtLocation" name="report-msg" placeholder="Location Name" value="<?php echo $_REQUEST["location"] ?>">
                                        <datalist id="locationReport">
                                            <?php

                                            $sql = "SELECT location_name
                                            FROM `location` ";

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

                                <div class="col-md-2 ">
                                    <button class="btn btn-masala pull-left" id="btnSearch">Search</button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="tableReport" width="100%">
                                <thead class="font-weight-bold">
                                    <tr class="text-center">
                                        <td width="5%">No.</td>
                                        <td width="15%">Messenger Name</td>
                                        <td width="10%">Date</td>
                                        <td width="20%">Location Name</td>
                                        <td width="40%">Address</td>
                                        <td width="10%">Number of Copies</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $No = 0;
                                    $inputDate=$_REQUEST['date'];
                                    $date = date_create($inputDate);
                                    $selectTime = date_format($date, "Y-m-d");
                                    if ($inputDate==''){
                                        $dateDB ="";
                                    } else {
                                        $dateDB ="AND transection_delivery_date = '$selectTime'";
                                    }
                                    
                                    $sql = "SELECT `transection_id`,`transection_delivery_date`,`messenger_name`,`location_name`,`location_address`,`location_count` 
                                            FROM location
                                            INNER JOIN transection  ON transection.location_id = location.location_id
                                            INNER JOIN messenger ON messenger.messenger_id = transection.messenger_id
                                            WHERE `Location_isActive`=1 
                                            $dateDB
                                                AND messenger_name LIKE '%" . $_REQUEST["messenger"] . "%' 
                                                AND location_name LIKE '%" . $_REQUEST["location"] . "%'";
                                    $result = $conn->query($sql);
                                                
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $No++;
                                    ?>
                                            <tr class="text-center">
                                                <?php
                                                $showdate = date_create($row["transection_delivery_date"]);
                                                $showtime = date_format($showdate, "d-m-Y");

                                                ?>
                                                <td><?php echo $No ?></td>
                                                <td class="text-left"><?php echo $row["messenger_name"]; ?></td>
                                                <td><?php echo $showtime ?></td>
                                                <td class="text-left"><?php echo $row["location_name"]; ?></td>
                                                <td class="text-left"><?php echo $row["location_address"]; ?></td>
                                                <td><?php echo $row["location_count"]; ?></td>
                                            </tr>
                                    <?php
                                        }
                                    }

                                    $conn->close();
                                    ?>
                                </tbody>
                            </table>
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
        $("#tableReport").DataTable({
            "searching": false,
            "lengthChange": false,
            "pageLength": 10
        });
        $("#btnSearch").click(SearchReport);

    });

    function SearchReport() {
        var date = $("#txtDate").val();
        var messenger = $("#txtMessenger").val();
        var location = $("#txtLocation").val();
        var url = window.location.origin + window.location.pathname + "?date=" + date + "&messenger=" + messenger + "&location=" + location;
        window.location.href = url;
    }
</script>