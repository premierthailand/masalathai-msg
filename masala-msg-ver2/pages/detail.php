<?php $activeDetail = 'active'; ?>
<?php $pageName = 'Delivery Details'; ?>
<?php include 'header.php'; ?>
<form action="" method="get">
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
                                                    <label class="form-check-label datail-type-margin">
                                                        <input class="form-check-input" type="radio" name="magazineType" id="exampleRadios1" value="masala" checked>
                                                        Masala
                                                        <span class="circle">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="magazineType" id="exampleRadios2" value="lite">
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
                                            <div class="text-right textDetail">Date : </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group no-margin-top">
                                                <input type="text" class="form-control" value="<?php echo date("d/m/Y"); ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Location -->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="text-right textDetail">Location Name : </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group detail-date-margin">
                                                <input list="brow" class="custom-select form-control" name="detail-location">
                                                <datalist id="brow">
                                                    <option value="test"></option>
                                                    <option value="Asok"></option>
                                                    <option value="Sukhumvit"></option>
                                                    <option value="Srinakarin"></option>
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
                                            <div>2 Sukhumvit Soi 19 (Wattana), Sukhumvit Road, Klongtoey Nua, Wattana, Bangkok 10110, Thailand.</div>
                                        </div>
                                    </div>
                                    <!-- Address -->
                                    <div class="row detailMargin">
                                        <div class="col-md-3">
                                            <div class="text-right">Number of Copies : </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>120</div>
                                        </div>
                                    </div>
                                    <!-- Category -->
                                    <div class="row detailMargin">
                                        <div class="col-md-3">
                                            <div class="text-right">Category : </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>Shopping Center</div>
                                        </div>
                                    </div>

                                    <!-- Messenger -->
                                    <div class="row detailMargin">
                                        <div class="col-md-3">
                                            <div class="text-right textDetail">Messenger Name : </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group detail-date-margin">
                                                <input list="brow" class="custom-select form-control" name="detail-msg">
                                                <datalist id="brow">
                                                    <option value="Somporn Sompong"></option>
                                                    <option value="Srisan wompong"></option>
                                                    <option value="Song wannawong"></option>
                                                </datalist>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Upload -->
                                    <div class="row detailMargin">
                                        <div class="col-md-3">
                                            <div class="text-right textDetail">Upload Photo : </div>
                                        </div>
                                        <div class="col-md-6">
                                                <input type="file" name="detail-img" accept=".jpg,.png,.jpeg">
                                        </div>
                                    </div>
                                    <!-- Comment -->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="text-right textDetail">Comment : </div>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <!-- Save -->
                                    <div class="row">
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button type="btn" class="btn btn-sm btn-success">Save</button>
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
</form>
<?php include 'footer.php'; ?>