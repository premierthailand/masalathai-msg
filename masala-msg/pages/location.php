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
                                        <td width="5%">No.</td>
                                        <td width="15%">Location Name</td>
                                        <td width="35%">Address</td>
                                        <td width="10%">Number of Copies</td>
                                        <td width="10%">Contact Person</td>
                                        <td width="15%">Category</td>
                                        <td width="10%">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>1</td>
                                        <td class="text-left">Premeir Thailand</td>
                                        <td class="text-left">85/3 Sukhumvit 12 Alley, Bangkok 10110</td>
                                        <td>10</td>
                                        <td class="text-left">Somporn Sompong</td>
                                        <td>Hotel</td>
                                        <td class="td-actions text-center">
                                            <a href="location-edit">
                                                <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>2</td>
                                        <td class="text-left">Novotel</td>
                                        <td class="text-left">19/9 Soi Sukhumvit 20, Sukhumvit Road, Klongtoey, 10110</td>
                                        <td>5</td>
                                        <td class="text-left">Srisan wompong</td>
                                        <td>Hotel</td>
                                        <td class="td-actions text-center">
                                            <a href="location-edit">
                                                <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>3</td>
                                        <td class="text-left">Red Planet Bangkok Asoke</td>
                                        <td class="text-left">7 Sukhumvit 14 Alley, Khlong Toei Nuea, Khlong Toei, Bangkok 10110</td>
                                        <td>8</td>
                                        <td class="text-left">Srisan wompong</td>
                                        <td>Hotel</td>
                                        <td class="td-actions text-center">
                                            <a href="location-edit">
                                                <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>4</td>
                                        <td class="text-left">SKYVIEW Hotel Bangkok</td>
                                        <td class="text-left">12 Sukhumvit 24 Alley, Khlong Tan, Khlong Toei, Bangkok 10110</td>
                                        <td>12</td>
                                        <td class="text-left">Song wannawong</td>
                                        <td>Hotel</td>
                                        <td class="td-actions text-center">
                                            <a href="location-edit">
                                                <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>5</td>
                                        <td class="text-left">Somerset Ekamai Bangkok</td>
                                        <td class="text-left">22/1 Ekamai Soi 2, Soi Sukhumvit 63, Phra Khanong, Watthana, Bangkok 10110</td>
                                        <td>9</td>
                                        <td class="text-left">Song wannawong</td>
                                        <td>Hotel</td>
                                        <td class="td-actions text-center">
                                            <a href="location-edit">
                                                <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
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