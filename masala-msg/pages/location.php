<?php $activeLocation = 'active'; ?>
<?php $pageName = 'Delivery Master List'; ?>
<?php include 'header.php'; ?>

<div class="content">
    <div class="container-fluid">
        <a href="./location-detail">
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
                            <form method="get">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <input list="brow" class="custom-select form-control" name="location-category" placeholder="Category">
                                            <datalist id="brow">
                                                <option value="Hotel"></option>
                                                <option value="School"></option>
                                                <option value="Hospital"></option>
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Search..." name="location-search">
                                        </div>
                                    </div>

                                    <div class="col-md-2 ">
                                        <button type="submit" class="btn btn-masala pull-left">Search</button>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="font-weight-bold">
                                    <tr class="text-center">
                                        <td width="3%">No.</td>
                                        <td width="15%">Location Name</td>
                                        <td width="30%">Address</td>
                                        <td width="5%">Number of Copies</td>
                                        <td width="10%">Contact Person</td>
                                        <td width="12%">Phone</td>
                                        <td width="15%">Category</td>
                                        <td width="10%">Action</td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $No=0;
                                    $sql = "SELECT  location_id,
                                                    location_name,
                                                    location_address,
                                                    location_count,
                                                    location_contact_name,
                                                    location_contact_phone,
                                                    category_name 
                                            FROM location 
                                            INNER JOIN category ON 
                                                    location.location_category_id=category.category_id where Location_isActive=1" ;
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $No++;
                                    ?>



                                            <tr class="text-center">
                                                <td><?php echo $No?></td>
                                                <td class="text-left"><?php echo $row["location_name"]; ?></td>
                                                <td class="text-left"><?php echo $row["location_address"]; ?></td>
                                                <td><?php echo $row["location_count"]; ?></td>
                                                <td class="text-left"><?php echo $row["location_contact_name"]; ?></td>
                                                <td><?php echo $row["location_contact_phone"]; ?></td>
                                                <td><?php echo $row["category_name"]; ?></td>
                                                <td class="td-actions text-center">
                                                    <a href="location-edit?id=<?php echo $row["location_id"]; ?>">
                                                        <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                    </a>
                                                    <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "<script type='text/javascript'>alert('Error : Database Connection Failed');</script>";
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