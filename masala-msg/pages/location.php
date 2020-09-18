<?php $activeLocation = 'active'; ?>
<?php $pageName = 'Delivery Master List'; ?>
<?php include 'header.php'; ?>

<div class="content">
    <div class="container-fluid">
        <!-- <button type="btn" class="btn btn-success">+ Add</button> -->
        <a href="./location-detail">
            <button type="btn" class="btn btn-success">+ Add</button>
        </a>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">apartment</i>
                        </div>
                        <h4 class="card-title">Delivery Master List</h4>
                    </div>
                    <div class="card-body">
                        <form class="navbar-form col-md-3" action="" method="get">
                            <span class="bmd-form-group">
                                <div class="input-group no-border">
                                    <input type="text" value="" name="delivery-master-search" class="form-control" style="margin-top:5px;margin-right:10px;" placeholder="Search...">
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                        <i class="material-icons">search</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </span>
                        </form>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="font-weight-bold">
                                    <tr>
                                        <td class="text-center">#</td>
                                        <td>Location Name</td>
                                        <td>Address</td>
                                        <td>Tel.</td>
                                        <td>Email</td>
                                        <td class="text-right">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Asok</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Bang Na</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>Siam</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                                                <i class="material-icons">edit</i>
                                            </button>
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