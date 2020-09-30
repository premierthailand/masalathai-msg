<?php $activeLocation = 'active'; ?>
<?php $pageName = 'Delivery Master List'; ?>
<?php include 'header.php'; ?>

<div class="content">
    <div class="container-fluid">
        <?php
        if ($_SESSION['status'] == 'Manager' or $_SESSION['status'] == 'webDev') {
        ?>
            <a href="./location-edit">
                <button type="btn" class="btn btn-masala">+ Add</button>
            </a>
        <?php
        }
        ?>
        <div class="row delivery-padding-top" style="padding-top: 20px;">
            <div class="col-lg-12 col-md-12">
                <div class="card ">
                    <div class="col-md-12">
                        <div class="card-header card-header-masala card-header-icon">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card-icon">
                                        <i class="material-icons">apartment</i>
                                    </div>
                                    <h4 class="card-title">Delivery Master List</h4>
                                </div>
                                <div class="col-md-3" style="margin-top: 10px;">
                                    <input type="text" class="form-control" id="txtSearch" placeholder="Search..." value="<?php echo $_REQUEST["search"] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <input list="categoryLocation" id="txtCategory" class="custom-select form-control" name="location-category" placeholder="=== Category ===" value="<?php echo $_REQUEST["category"] ?>">
                                        <datalist id="categoryLocation">
                                            <?php
                                            $sql = "SELECT category_name
                                            FROM `category` ";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
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
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <input type="text" class="form-control" id="txtLocation" placeholder="Location..." name="location-location" value="<?php echo $_REQUEST["location"] ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <input type="text" class="form-control" id="txtArea" placeholder="Area..." name="location-area" value="<?php echo $_REQUEST["area"] ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <input type="text" class="form-control" id="txtSoi" placeholder="Soi..." value="<?php echo $_REQUEST["soi"] ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <input type="text" class="form-control" id="txtRoad" placeholder="Road..." value="<?php echo $_REQUEST["road"] ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <input type="text" class="form-control" id="txtDistrict" placeholder="District..." value="<?php echo $_REQUEST["district"] ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <input type="text" class="form-control" id="txtProvince" placeholder="Province..." value="<?php echo $_REQUEST["province"] ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <input type="number" class="form-control" id="txtPostcode" placeholder="Post code..." value="<?php echo $_REQUEST["postcode"] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <button class="btn btn-masala pull-left" id="btnSearch">Search</button>
                                    &emsp;
                                    <button class="btn btn-defalt pull-rigth" id="btnClear">Clear</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="tableLocation" width="100%">
                                <thead class="font-weight-bold">
                                    <tr class="text-center">
                                        <td width="5%">No.</td>
                                        <td width="15%">Location</td>
                                        <td width="20%">Address</td>
                                        <td width="10%">Area</td>
                                        <td width="5%">Number of Copies</td>
                                        <td width="10%">Contact</td>
                                        <td width="10%">Phone</td>
                                        <td width="10%">Category</td>
                                        <td width="15%">Action</td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    if ($_REQUEST["location"] == 'undefined' && $_REQUEST["location"] == '') {
                                        $SearchLocation = " OR location_name like'%" . $_REQUEST["search"] . "%'";
                                    } else {
                                        $SearchLocation = " AND location_name like'%" . $_REQUEST["location"] . "%'
                                                            AND location_name like'%" . $_REQUEST["search"] . "%'
                                                            ";
                                    }




                                    $No = 0;
                                    $sql = "SELECT `location_id`,location_address,`location_name`,`location_houseno`,location_soi,location_soi_number,location_subsoi_number,location_road,location_District,location_Province,location_postno,location_area,location_img,location_count,location_contact_name,location_contact_phone,category_name 
                                            FROM `location` 
                                            INNER JOIN category ON location.`location_category_id`=category.category_id 
                                            WHERE `Location_isActive`=1 
                                            AND category_name like'%" . $_REQUEST["category"] . "%'
                                            AND location_name like'%" . $_REQUEST["location"] . "%'
                                            AND location_area like'%" . $_REQUEST["area"] . "%'
                                            AND location_address like'%" . $_REQUEST["soi"] . "%'
                                            AND location_road like'%" . $_REQUEST["road"] . "%'
                                            AND location_District like'%" . $_REQUEST["district"] . "%'
                                            AND location_Province like'%" . $_REQUEST["province"] . "%'
                                            AND location_postno like'%" . $_REQUEST["postcode"] . "%'
                                            AND ( location_address like'%" . $_REQUEST["search"] . "%'
                                            OR location_contact_name like'%" . $_REQUEST["search"] . "%'
                                            OR location_contact_phone like'%" . $_REQUEST["search"] . "%'
                                            OR category_name like'%" . $_REQUEST["search"] . "%'
                                            OR location_name like'%" . $_REQUEST["search"] . "%'
                                            OR location_area like'%" . $_REQUEST["search"] . "%'
                                            OR location_soi like'%" . $_REQUEST["search"] . "%'
                                            OR location_road like'%" . $_REQUEST["search"] . "%'
                                            OR location_District like'%" . $_REQUEST["search"] . "%'
                                            OR location_Province like'%" . $_REQUEST["search"] . "%'
                                            OR location_postno like'%" . $_REQUEST["search"] . "%')

                                            
                                            ORDER BY location_name ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $No++
                                    ?>



                                            <tr class="text-center">
                                                <td><?php echo $No; ?></td>
                                                <td class="text-left"><?php echo $row["location_name"]; ?></td>
                                                <td class="text-left">
                                                    <?php echo $row["location_address"]; ?>
    
                                                </td>
                                                <td><?php echo $row["location_area"]; ?></td>
                                                <td><?php echo $row["location_count"]; ?></td>
                                                <td class="text-left"><?php echo $row["location_contact_name"]; ?></td>
                                                <td><?php echo $row["location_contact_phone"]; ?></td>
                                                <td><?php echo $row["category_name"]; ?></td>
                                                <td class="td-actions text-center">
                                                    <?php
                                                    if ($row['location_img'] != '') {
                                                    ?>
                                                        <button type="button" rel="tooltip" class="btn btn-info" onclick="showImage('../uploads/<?php echo $row['location_img']; ?>','','')">
                                                            <i class="material-icons">image_search</i>
                                                        </button>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        &emsp;&emsp;
                                                    <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($_SESSION['status'] == 'Manager' or $_SESSION['status'] == 'webDev') {
                                                    ?>
                                                        <a href="location-edit?id=<?php echo $row["location_id"]; ?>">
                                                            <button type="button" class="btn btn-success">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                        </a>
                                                        <button type="button" class="btn btn-danger" onclick="deactivateLocation(<?php echo $row['location_id']; ?>,'<?php echo $row['location_name']; ?>')">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    <?php
                                                    }
                                                    ?>
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

<script>
    var searchParams = new URLSearchParams(window.location.search);
    $(function() {
        $("#tableLocation").DataTable({
            "searching": false,
            "lengthChange": false,
            "pageLength": 10
        })
        $("#btnSearch").click(searchLocation);
        $("#btnClear").click(clearLocation);
    });

    function clearLocation() {
        $("#txtSearch").val("");
        $("#txtCategory").val("");
        $("#txtLocation").val("");
        $("#txtArea").val("");
        $("#txtSoi").val("");
        $("#txtRoad").val("");
        $("#txtDistrict").val("");
        $("#txtProvince").val("");
        $("#txtPostcode").val("");
        // searchLocation();
    }

    function searchLocation() {
        var search = $("#txtSearch").val();
        var category = $("#txtCategory").val();
        var location = $("#txtLocation").val();
        var area = $("#txtArea").val();
        var soi = $("#txtSoi").val();
        var road = $("#txtRoad").val();
        var district = $("#txtDistrict").val();
        var province = $("#txtProvince").val();
        var postcode = $("#txtPostcode").val();
        var url = window.location.origin + window.location.pathname + "?search=" + search +
            "&category=" + category +
            "&location=" + location +
            "&area=" + area +
            "&soi=" + soi +
            "&road=" + road +
            "&district=" + district +
            "&province=" + province +
            "&postcode=" + postcode;
        window.location.href = url;
    }

    function deactivateLocation(id, name) {
        Swal.fire({
            title: 'Deactive ' + name + ' ?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f44336',
            cancelButtonColor: '#AAA',
            confirmButtonText: 'Yes, Deactive it!'
        }).then((result) => {
            if (result.value) {
                Swal.fire({
                    title: 'Deactiveted!',
                    type: 'success',
                    confirmButtonText: 'OK!'
                }).then((result) => {
                    if (result.value) {
                        var search = $("#txtSearch").val();
                        var category = $("#txtCategory").val();
                        var location = $("#txtLocation").val();
                        var area = $("#txtArea").val();
                        var soi = $("#txtSoi").val();
                        var road = $("#txtRoad").val();
                        var district = $("#txtDistrict").val();
                        var province = $("#txtProvince").val();
                        var postcode = $("#txtPostcode").val();
                        var url = window.location.origin + window.location.pathname + "-deactive?id=" + id +
                            "search" + search +
                            "&category=" + category +
                            "&location=" + location +
                            "&area=" + area +
                            "&soi=" + soi +
                            "&road=" + road +
                            "&district=" + district +
                            "&province=" + province +
                            "&postcode=" + postcode;
                        window.location.href = url;
                    }
                })
            }
        })
    }
</script>