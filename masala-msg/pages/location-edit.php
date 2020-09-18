<?php $activeLocation = 'active'; ?>
<?php $pageName = 'Edit Location'; ?>
<?php include 'header.php'; ?>
<form action="" method="get">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="card">
                        <div class="card-header card-header-masala card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons" style="padding-left:4px;">apartment</i>
                            </div>
                            <h4 class="card-title"><b>Edit Location</b></h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-11">
                                    <!-- Location Name -->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="text-right textDetail">Location Name : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="location-detail-name" value="Premeir Thailand">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Address-->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="text-right textDetail">Address : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="location-detail-address" value="85/3 Sukhumvit 12 Alley, Bangkok 10110">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Number of Copy -->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="text-right textDetail">Number of Copy : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="location-detail-copy" value="10">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Contact Person-->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="text-right textDetail">Contact Person : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="location-detail-contact" value="Somporn Sompong">
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Category -->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="text-right">Category : </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input list="brow" class="custom-select form-control" name="location-detail-catgory" placeholder="Location Name" value="Hotel">
                                            <datalist id="brow">
                                                <option value="Hotel"></option>
                                                <option value="Hospital"></option>
                                                <option value="School"></option>
                                            </datalist>
                                        </div>
                                    </div>
                                    <br>
                                    <!-- insert -->
                                    <div class="row">
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-masala">Save</button>
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
</form>
<?php include 'footer.php'; ?>