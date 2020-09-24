<?php $activeLocation = 'active'; ?>
<?php $pageName = 'Delivery Master List'; ?>
<?php include 'header.php'; ?>

<div class="content">
    <div class="container-fluid">
        <a href="./location-edit">
            <button type="btn" class="btn btn-masala">+ Add</button>
        </a>
        <div class="row delivery-padding-top" style="padding-top: 20px;">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header card-header-masala card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">apartment</i>
                        </div>
                        <h4 class="card-title">Delivery Master List</h4>
                    </div>
                    <div class="col-md-12">
                        <div class="card-body" style="padding-left: 5%;">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <input list="categoryLocation" id="txtCategory" class="custom-select form-control" name="location-category" placeholder="Category" value="<?php echo $_REQUEST["category"] ?>">
                                        <datalist id="categoryLocation">
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
                                <div class="col-md-3">
                                    <div class="form-group bmd-form-group">
                                        <input type="email" class="form-control" id="txtSearch" placeholder="Search..." name="location-search" value="<?php echo $_REQUEST["search"] ?>">
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
                            <table class="table" id="tableLocation" width="100%">
                                <thead class="font-weight-bold">
                                    <tr class="text-center">
                                        <td width="3%">No.</td>
                                        <td width="10%">Location Name</td>
                                        <td width="30%">Address</td>
                                        <td width="10%">Number of Copies</td>
                                        <td width="10%">Contact Person</td>
                                        <td width="12%">Phone</td>
                                        <td width="15%">Category</td>
                                        <td width="10%">Action</td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $No = 0;
                                    $sql = "SELECT `location_id`,`location_name`,`location_address`,`location_count`,`location_contact_name`,`location_contact_phone`,`category_name` 
                                            FROM `location` 
                                            INNER JOIN category ON location.`location_category_id`=category.category_id 
                                            WHERE `Location_isActive`=1 
                                            AND category_name like'%" . $_REQUEST["category"] . "%'
                                            AND (location_name like'%" . $_REQUEST["search"] . "%'
                                            OR location_address like'%" . $_REQUEST["search"] . "%'
                                            OR location_count like'%" . $_REQUEST["search"] . "%'
                                            OR location_contact_name like'%" . $_REQUEST["search"] . "%'
                                            OR location_contact_phone like'%" . $_REQUEST["search"] . "%'
                                            )
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
                                                <td class="text-left"><?php echo $row["location_address"]; ?></td>
                                                <td><?php echo $row["location_count"]; ?></td>
                                                <td class="text-left"><?php echo $row["location_contact_name"]; ?></td>
                                                <td><?php echo $row["location_contact_phone"]; ?></td>
                                                <td><?php echo $row["category_name"]; ?></td>
                                                <td class="td-actions text-center">
                                                    <a href="location-edit?id=<?php echo $row["location_id"]; ?>">
                                                        <button type="button" class="btn btn-success">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                    </a>
                                                    <button type="button" class="btn btn-danger" onclick="deactivateLocation(<?php echo $row['location_id']; ?>,'<?php echo $row['location_name']; ?>')">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    } else {
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
    });

    function searchLocation() {
        var category = $("#txtCategory").val();
        var search = $("#txtSearch").val();
        var url = window.location.origin + window.location.pathname + "?category=" + category + "&search=" + search;
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
                        var category = $("#txtCategory").val();
                        var search = $("#txtSearch").val();
                        var url = window.location.origin + window.location.pathname + "-deactive?id=" + id +
                            "&category=" + category +
                            "&search=" + search;
                        window.location.href = url;
                    }
                })
            }
        })
    }
</script>