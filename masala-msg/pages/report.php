<?php $activeReport = 'active'; ?>
<?php $pageName = 'Messenger Report'; ?>
<?php include 'header.php'; ?>

<div class="content">
    <div class="container-fluid">
        <!-- <button type="btn" class="btn btn-success">+ Add</button> -->

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
                        <div class="card-body" style="padding-left: 10%;">
                            <form method="get">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Date</label>
                                            <input type="text" value="<?php echo date("d-m-yy"); ?>" class="form-control" name="date-msg">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Name (messenger)</label>
                                            <input list="brow" class="custom-select form-control" name="name-msg">
                                            <datalist id="brow">
                                                <option value="Somporn Sompong"></option>
                                                <option value="Srisan wompong"></option>
                                                <option value="Song wannawong"></option>
                                            </datalist> 
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Location</label>
                                            <input list="brow" class="custom-select form-control" name="report-msg">
                                            <datalist id="brow">
                                                <option value="Somporn Sompong"></option>
                                                <option value="Srisan wompong"></option>
                                                <option value="Song wannawong"></option>
                                            </datalist>
                                        </div>
                                    </div>

                                    <div class="col-md-2 ">
                                        <button type="submit" class="btn btn-masala pull-right">Search</button>
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
                                        <td width="5%">No.</td>
                                        <td width="15%">Messenger Name</td>
                                        <td width="10%">Date</td>
                                        <td width="20%">Location Name</td>
                                        <td width="40%">Address</td>
                                        <td width="10%">Number of Copies</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>1</td>
                                        <td class="text-left">Somporn Sompong</td>
                                        <td>17-09-2020</td>
                                        <td class="text-left">Premeir Thailand</td>
                                        <td class="text-left">85/3 Sukhumvit 12 Alley, Bangkok 10110</td>
                                        <td>10</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>2</td>
                                        <td class="text-left">Srisan wompong</td>
                                        <td>15-09-2020</td>
                                        <td class="text-left">Novotel</td>
                                        <td class="text-left">19/9 Soi Sukhumvit 20, Sukhumvit Road, Klongtoey, 10110</td>
                                        <td>5</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>3</td>
                                        <td class="text-left">Srisan wompong</td>
                                        <td>09-09-2020</td>
                                        <td class="text-left">Red Planet Bangkok Asoke</td>
                                        <td class="text-left">7 Sukhumvit 14 Alley, Khlong Toei Nuea, Khlong Toei, Bangkok 10110</td>
                                        <td>8</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>4</td>
                                        <td class="text-left">Song wannawong</td>
                                        <td>05-09-2020</td>
                                        <td class="text-left">SKYVIEW Hotel Bangkok</td>
                                        <td class="text-left">12 Sukhumvit 24 Alley, Khlong Tan, Khlong Toei, Bangkok 10110</td>
                                        <td>12</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>5</td>
                                        <td class="text-left">Song wannawong</td>
                                        <td>05-09-2020</td>
                                        <td class="text-left">Somerset Ekamai Bangkok</td>
                                        <td class="text-left">22/1 Ekamai Soi 2, Soi Sukhumvit 63, Phra Khanong, Watthana, Bangkok 10110</td>
                                        <td>9</td>
                                    </tr>
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