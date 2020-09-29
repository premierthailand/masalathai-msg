<?php $activeReport = 'active'; ?>
<?php $pageName = 'Messenger Report'; ?>
<?php include 'header.php'; ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header card-header-masala card-header-icon">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card-icon">
                                    <i class="material-icons">person</i>
                                </div>
                                <h4 class="card-title">Messenger Report</h4>
                            </div>
                            <!-- Search... -->
                            <div class="col-md-3">
                                <div class="form-group bmd-form-group">
                                    <input type="text" class="form-control" id="txtSearch" placeholder="Search..." name="location-search" value="<?php echo $_REQUEST["search"] ?>">

                                </div>
                            </div>

                            <div class="col-md-6 text-right">
                                <form action="report-print" method="post"> 
                                    <button type="submit" class="btn btn-masala btn-print" id="btnPrint">
                                        <i class="material-icons">print</i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Date search -->
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="row">
                                <!-- Masala &Masala Lite -->
                                <div class="col-md-6" style="padding-top: 12px;">
                                    <div class="form-check">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" id="chkMasala" <?php echo $_REQUEST["type"] != 'lite' ? "checked" : ""; ?> type="checkbox" value=""> Masala
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" id="chkLite" <?php echo $_REQUEST["type"] == 'lite' ? "checked" : ""; ?> type="checkbox" value=""> Masala Lite
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" id="txtDate" class="form-control datetimepicker" name="date-msg" placeholder="=== Select Date ===" value="<?php echo $_REQUEST["date"] ?>">
                                            </div>
                                        </div>
                                        <!-- Messenger name -->
                                        <div class="col-md-3">
                                            <div class="form-group bmd-form-group">
                                                <input list="messengerReport" class="custom-select form-control" id="txtMessenger" name="name-msg" placeholder="=== Select Messenger ===" value="<?php echo $_REQUEST["messenger"] ?>">
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
                                        <!-- Location Name -->
                                        <div class="col-md-3">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" class="custom-select form-control" id="txtLocation" name="report-msg" placeholder="Location..." value="<?php echo $_REQUEST["location"] ?>">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- button -->
                                        <div class="col-md-1 ">
                                            <button class="btn btn-masala pull-left" id="btnSearch">Search</button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" id="test123">
                            <table class="table" id="tableReport" width="100%">
                                <thead class="font-weight-bold">
                                    <tr class="text-center">
                                        <td width="5%">No.</td>
                                        <td width="15%">Messenger</td>
                                        <td width="10%">Date</td>
                                        <td width="15%">Location</td>
                                        <td width="35%">Address</td>
                                        <td width="10%">Number of Copies</td>
                                        <td width="10%">Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $No = 0;
                                    $inputDate = $_REQUEST['date'];
                                    $date = date_create($inputDate);
                                    $selectTime = date_format($date, "Y-m-d");
                                    if ($inputDate == '') {
                                        $dateDB = "";
                                    } else {
                                        $dateDB = "AND transection_delivery_date = '$selectTime'";
                                    }

                                    $sql = "SELECT `transection_id`,`transection_delivery_date`,`messenger_name`,`location_name`,`location_address`,`location_count`,transection_img 
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
                                                <td class="td-actions text-center">
                                                    <?php
                                                    if ($row['transection_img'] != '') {
                                                    ?>
                                                        <button type="button" class="btn btn-info" onclick="showImage('../uploads/<?php echo $row['transection_img']; ?>','','')">
                                                            <i class="material-icons">image_search</i> <span>Delivered</span>
                                                        </button>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <div class="text-disabled">
                                                            Not Delivered
                                                        </div>
                                                    <?php } ?>
                                                </td>
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
<script src="../js/jspdf.min.js"></script>
<script src="../js/from_html.js"></script>
<script src="../js/split_text_to_size.js"></script>
<script src="../js/standard_fonts_metrics.js"></script>
<script>
    $(function() {
        $("#tableReport").DataTable({
            "searching": false,
            "lengthChange": false,
            "pageLength": 10
        });
        $("#btnSearch").click(SearchReport);
        $("#btnPrint").click(printPDF);


    });

    function printPDF() {

        var doc = new jsPDF();
        var elementHTML = $('#test123').html();
        var specialElementHandlers = {
            '#elementH': function(element, renderer) {
                return true;
            }
        };
        doc.fromHTML(elementHTML, 15, 15, {
            'width': 170,
            'elementHandlers': specialElementHandlers
        });

        // Save the PDF
        doc.save('sample-document.pdf');
    }

    function SearchReport() {
        var date = $("#txtDate").val();
        var messenger = $("#txtMessenger").val();
        var location = $("#txtLocation").val();
        var search = $("#txtSearch").val();
        var type = $("input[name='type']:checked").val();
        var url = window.location.origin + window.location.pathname + "?type=" + type + "&date=" + date + "&messenger=" + messenger + "&location=" + location + "&search=" + search;
        window.location.href = url;
    }
</script>