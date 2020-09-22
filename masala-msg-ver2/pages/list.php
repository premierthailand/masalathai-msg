<?php $activeList = 'active'; ?>
<?php $pageName = 'Delivery Status'; ?>
<?php include 'header.php'; ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-masala card-header-icon">
            <div class="card-icon">
              <i class="material-icons">library_books</i>
            </div>
            <h4 class="card-title">Delivery List</h4>
          </div>
          <div class="card-body">
            <br/>
            <form action="" method="get">
              <ul class="nav nav-pills nav-pills-info row">
                <li class="active col-md-3" style="padding-right:30px;padding-left:30px;"><a href="#pill1" data-toggle="tab">Masala</a></li>
                <li class="col-md-3" style="padding-right:30px;padding-left:30px;"><a href="#pill2" data-toggle="tab">Masala LITE</a></li>
              </ul>
              <br/>
              <div class="row">
                <div class="col-md-6" style="padding-right:30px;padding-left:30px;">

                  <!-- <h4 class="text-center">
                    <input class="form-check-input" type="radio" name="masalaType" id="exampleRadios1" value="masala" checked>
                    Masala
                  </h4> -->
                  <div class="form-group no-margin-top">
                    <input list="brow" class="custom-select form-control" name="2" placeholder="=== All Issue ===">
                    <datalist id="brow">
                      <option value="Refuse to Accept"></option>
                      <option value="Need a Contact Person"></option>
                      <option value="Other"></option>
                    </datalist>
                  </div>
                  <div class="form-check form-check-radio">
                    <label class="form-check-label datail-type-margin">
                      <input class="form-check-input" type="radio" name="magazineType" id="exampleRadios1" value="masala" checked>
                      Delivered
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="magazineType" id="exampleRadios2" value="lite">
                      Not Delivered
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-group no-margin-top">
                    <input list="brow1" class="custom-select form-control" name="1" placeholder="Sort By..">
                    <datalist id="brow1">
                      <option value="Messenger Name"></option>
                      <option value="Location Name"></option>
                      <option value="Delivery Date"></option>
                    </datalist>
                  </div>
                </div>
                <!-- <div class="col-md-3" style="padding-right:30px;padding-left:30px;">
                  <div class="form-group no-margin-top">
                    <input list="brow" class="custom-select form-control" name="2" placeholder="=== All Issue ===" disabled>
                    <datalist id="brow">
                      <option value="Refuse to Accept"></option>
                      <option value="Need a Contact Person"></option>
                      <option value="Other"></option>
                    </datalist>
                  </div>
                  <div class="form-check form-check-radio">
                    <label class="form-check-label datail-type-margin">
                      <input class="form-check-input" type="radio" name="lite" id="exampleRadios1" value="masala" checked disabled>
                      Delivered
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="lite" id="exampleRadios2" value="lite" disabled>
                      Not Delivered
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-group no-margin-top">
                    <input list="brow1" class="custom-select form-control" name="1" placeholder="Sort By.." disabled>
                    <datalist id="brow1">
                      <option value="Messenger Name"></option>
                      <option value="Location Name"></option>
                      <option value="Delivery Date"></option>
                    </datalist>
                  </div>
                </div> -->
              </div>


            </form>
            <br />

            <div class="table-responsive">
              <table class="table">
                <thead class="font-weight-bold">
                  <tr>
                    <td class="text-center">#</td>
                    <td>Messenger</td>
                    <td>Location</td>
                    <td>Status</td>
                    <td>Comment</td>
                    <td>Delivery Time</td>
                    <td class="text-right">Action</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td>Andrew Mike</td>
                    <td>Asok</td>
                    <td>Delivered</td>
                    <td>-</td>
                    <td>15/9/2020 14:00</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="">
                        <i class="material-icons">image_search</i>
                      </button>
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
                    <td>John Doe</td>
                    <td>Siam</td>
                    <td>Delivered</td>
                    <td>-</td>
                    <td>15/9/2020 14:00</td>
                    <td class="td-actions text-right">
                      <a href="list?img=<?php echo ""; ?>">
                        <button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="">
                          <i class="material-icons">image_search</i>
                        </button>
                      </a>
                      <a href="list?edit=<?php echo ""; ?>">
                        <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                          <i class="material-icons">edit</i>
                        </button>
                      </a>
                      <a href="list?delete=<?php echo ""; ?>">
                        <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                          <i class="material-icons">close</i>
                        </button>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">3</td>
                    <td>Alex Mike</td>
                    <td>Bang Na</td>
                    <td>Delivered</td>
                    <td>-</td>
                    <td>15/9/2020 14:00</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="">
                        <i class="material-icons">image_search</i>
                      </button>
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