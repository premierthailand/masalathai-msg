<?php $activeList = 'active'; ?>
<?php $pageName = 'Delivery Status'; ?>
<?php include 'header.php'; ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">assignment</i>
            </div>
            <h4 class="card-title">Delivery list</h4>
          </div>
          <div class="card-body">
          <div class="row col-md-6" style="padding-left:15px;">
              <div class="form-group col-md-3">
                <select class="form-control" id="exampleSelect1">
                  <option>=== Year ===</option>
                  <option>2020</option>
                  <option>2019</option>
                  <option>2018</option>
                  <option>2017</option>
                  <option>2016</option>
                  <option>2015</option>
                  <option>2014</option>
                  <option>2013</option>
                  <option>2012</option>
                  <option>2011</option>
                  <option>2010</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <select class="form-control" id="exampleSelect1">
                  <option>=== Month ===</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                </select>
              </div>
              <div class="navbar-form col-md-6">
                <span class="bmd-form-group">
                  <div class="input-group no-border" style="margin-top: 8px;">
                    <input type="text" value="" class="form-control" style="margin-top:5px;margin-right:10px;" placeholder="Search...">
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                      <i class="material-icons">search</i>
                      <div class="ripple-container"></div>
                    </button>
                  </div>
                </span>
              </div>
            </div>
            
            
            
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