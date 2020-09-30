<?php $activeList = 'active'; ?>
<?php $pageName = 'Delivery Status'; ?>
<?php include 'header.php'; ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="col-lg-12 col-md-12">
            <div class="card-header card-header-masala card-header-icon">
              <div class="row">
                <div class="col-md-2" style="padding-right: 0;">
                  <div class="card-icon">
                    <i class="material-icons">library_books</i>
                  </div>
                  <h4 class="card-title">Delivery List </h4>
                </div>
                <div class="col-md-4" style="margin-top: 10px;">
                  <input class="form-control" id="txtSearch" placeholder="Search..." value="<?php echo $_REQUEST["search"] ?>">
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12" style="padding-top: 12px;">
                      <div class="form-check">
                        <div class="row">
                          <!-- Magazine Type -->
                          <div class="col-md-2">
                            <label class="form-check-label">
                              <input class="form-check-input" id="chkMasala" <?php echo $_REQUEST["masala"] != '0' ? "checked" : ""; ?> type="checkbox" value=""> Masala
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                          <div class="col-md-2">
                            <label class="form-check-label">
                              <input class="form-check-input" id="chkLite" <?php echo $_REQUEST["lite"] != '0' ? "checked" : ""; ?> type="checkbox" value=""> Masala Lite
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                          <div class="col-md-2"></div>
                          <!-- Delivered -->
                          <div class="col-md-2">
                            <label class="form-check-label">
                              <input class="form-check-input" id="chkDeliver" <?php echo $_REQUEST["deliver"] != '0' ? "checked" : ""; ?> type="checkbox" value=""> Delivered
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                          <div class="col-md-2">
                            <label class="form-check-label">
                              <input class="form-check-input" id="chkNotDeliver" <?php echo $_REQUEST["notDeliver"] != '0' ? "checked" : ""; ?> type="checkbox" value=""> Not Delivered
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <!-- Issue Masala-->
                        <div class="form-group bmd-form-group col-md-2">
                          <input list="issueList" id="txtIssue" class="custom-select form-control" placeholder="=== Masala Issue ===" value="<?php echo $_REQUEST["issue"] ?>">
                          <datalist id="issueList" class="text-left">
                            <?php
                            $monthsearch = date("n");
                            $yearsearch = date("Y");
                            $sql = "SELECT magazineVol_Month,magazineVol_Year
                              FROM `magazineVol` 
                              Where magazineType_id=1 
                              AND magazineVol_Month_id <= $monthsearch
                              AND magazineVol_Year <= $yearsearch
                              ORDER BY magazineVol_Year DESC, CAST(magazineVol_Month_id AS int) DESC ";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              // output data of each row
                              while ($row = $result->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $row["magazineVol_Month"]; ?>"></option>
                            <?php
                              }
                            }

                            ?>
                          </datalist>
                        </div>

                        <!-- Issue Masala Lite-->
                        <div class="form-group bmd-form-group col-md-2">
                          <input list="issueListLite" id="txtLite" class="custom-select form-control" placeholder="=== Masala Lite Issue ===" value="<?php echo $_REQUEST["issueLite"] ?>">
                          <datalist id="issueListLite">
                            <?php
                            $sql = "SELECT magazineVol_Month,magazineVol_Year
                              FROM `magazineVol` 
                              Where magazineType_id=2
                              AND magazineVol_Month_id <= $monthsearch
                              AND magazineVol_Year <= $yearsearch
                              ORDER BY magazineVol_Year DESC, CAST(magazineVol_Month_id AS int) DESC ";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                              while ($row = $result->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $row["magazineVol_Month"]; ?>"></option>
                            <?php
                              }
                            }
                            ?>
                          </datalist>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group bmd-form-group">
                            <input list="categoryLocation" id="txtCategory" class="custom-select form-control" name="location-category" placeholder="=== Category ===" value="<?php echo $_REQUEST["category"] ?>">
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
                        <!-- Location name -->
                        <div class="col-md-2">
                          <div class="form-group bmd-form-group">
                            <input class="form-control" id="txtLocation" placeholder="Location..." value="<?php echo $_REQUEST["location"] ?>">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group bmd-form-group">
                            <input class="form-control" id="txtArea" placeholder="Area..." value="<?php echo $_REQUEST["area"] ?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <div class="form-group bmd-form-group">
                            <input class="form-control" id="txtSoi" placeholder="Soi..." value="<?php echo $_REQUEST["soi"] ?>">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group bmd-form-group">
                            <input class="form-control" id="txtRoad" placeholder="Road..." value="<?php echo $_REQUEST["road"] ?>">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group bmd-form-group">
                            <input class="form-control" id="txtDistrict" placeholder="District..." value="<?php echo $_REQUEST["district"] ?>">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group bmd-form-group">
                            <input class="form-control" id="txtProvince" placeholder="Province..." value="<?php echo $_REQUEST["province"] ?>">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group bmd-form-group">
                            <input class="form-control" id="txtPostCode" placeholder="Post Code..." value="<?php echo $_REQUEST["post"] ?>">
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
                </div>
              </div>
            </div>
            <br />

            <div class="table-responsive">
              <table class="table" id="tableList" width="100%">
                <thead class="font-weight-bold">
                  <tr class="text-center">
                    <td width="5%">No.</td>
                    <td width="20%">Messenger</td>
                    <td width="20%">Location</td>
                    <td width="15%">Issue</td>
                    <td width="10%">Delivery Date</td>
                    <td width="15%">Comment</td>
                    <td width="5%">Status</td>
                    <td width="10%">Action</td>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $No = 0;
                  if ($_REQUEST["masala"] == '0') {
                    $masalaDB = "AND magazineType_name !='masala'";
                  }
                  if ($_REQUEST["lite"] == '0') {
                    $liteDB = "AND magazineType_name !='lite'";
                  }

                  if ($_REQUEST["search"] != '') {
                    $searchDB = "AND (location_name like '%" . $_REQUEST['search'] . "%'
                                      OR messenger_name like '%" . $_REQUEST['search'] . "%'
                                      OR transection_delivery_date like '%" . $_REQUEST['search'] . "%'
                                      OR magazineVol_Month like '%" . $_REQUEST['search'] . "%'
                                      OR magazineVol_Year like '%" . $_REQUEST['search'] . "%'
                                      OR category_name like '%" . $_REQUEST['search'] . "%'
                                      OR location_area like '%" . $_REQUEST['search'] . "%'
                                      OR location_soi like '%" . $_REQUEST['search'] . "%'
                                      OR location_soi_number like '%" . $_REQUEST['search'] . "%'
                                      OR location_subsoi_number like '%" . $_REQUEST['search'] . "%'
                                      OR location_road like '%" . $_REQUEST['search'] . "%'
                                      OR location_District like '%" . $_REQUEST['search'] . "%'
                                      OR location_Province like '%" . $_REQUEST['search'] . "%'
                                      OR location_postno like '%" . $_REQUEST['search'] . "%'
                  )";
                  }
                  if ($_REQUEST["deliver"] == '0') {
                    $deliverDB = "AND transection.issue_id !='0'";
                  }
                  if ($_REQUEST["notDeliver"] == '0') {
                    $notDeliverDB = "AND transection.issue_id ='0'";
                  }

                  if ($_REQUEST["issue"] == '') {
                    $issueDB = "";
                  } elseif ($_REQUEST["issue"] !== '') {
                    $issueDB = "AND magazineVol.magazineVol_Month ='" . $_REQUEST["issue"] . "'";
                  }
                  if ($_REQUEST["issueLite"] == '') {
                    $issueLiteDB = "";
                  } elseif ($_REQUEST["issueLite"] !== '') {
                    $issueLiteDB = "AND magazineVol.magazineVol_Month ='" . $_REQUEST["issueLite"] . "'";
                  }
                  $sql = "SELECT Location_isActive,transection_id,location_name,messenger_name,transection_delivery_date,transection_img,magazineVol_Month,magazineVol_Year,issue.issue_id,issue_name,transection_comment
                  ,category.category_name
                  ,location.location_area
                  ,location.location_soi
                  ,location.location_soi_number
                  ,location.location_subsoi_number
                  ,location.location_road
                  ,location.location_District
                  ,location.location_Province
                  
                  ,location.location_postno
                    FROM messenger 
                        INNER JOIN transection  ON transection.messenger_id = messenger.messenger_id
                        INNER JOIN location  ON location.location_id = transection.location_id
                        INNER JOIN category  ON category.category_id  = location.location_category_id
                        INNER JOIN magazineVol  ON magazineVol.magazineVol_id = transection.magazineVol_id
                        INNER JOIN magazinetype  ON magazinetype.magazineType_id = magazineVol.magazineType_id
                        INNER JOIN issue  ON issue.issue_id  = transection.issue_id 
                        WHERE 1=1 
                        AND location_name like '%" . $_REQUEST['location'] . "%'
                        AND category_name like '%" . $_REQUEST['category'] . "%'
                        AND location_area like '%" . $_REQUEST['area'] . "%'
                        AND location_address like '%" . $_REQUEST['soi'] . "%'
                        AND location_road like '%" . $_REQUEST['road'] . "%'
                        AND location_District like '%" . $_REQUEST['district'] . "%'
                        AND location_Province like '%" . $_REQUEST['province'] . "%'
                        AND location_postno like '%" . $_REQUEST['post'] . "%'
                            $masalaDB
                            $liteDB
                            $searchDB
                            $deliverDB 
                            $notDeliverDB
                            $issueDB
                            $issueLiteDB
                           ";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {

                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                      $No++;
                      $date = date_create($row["transection_delivery_date"]);
                      $listtime = date_format($date, "d-m-Y");
                      $image = $row["transection_img"];
                  ?>
                      <tr class="<?php echo $row["Location_isActive"] == 0 ? 'location-Deactive' : '' ?>">
                        <td class="text-center"><?php echo $No; ?></td>
                        <td><?php echo $row["messenger_name"]; ?></td>
                        <td><?php echo $row["location_name"]; ?></td>

                        <td class="text-center"><?php echo $row["magazineVol_Month"]; ?></td>
                        <td class="text-center"><?php echo $listtime; ?></td>
                        <td class="text-center"><?php echo $row['issue_id'] != 3 ? $row["issue_name"] : $row["transection_comment"]; ?></td>
                        <td class="td-actions text-center">
                          <?php
                          echo $row['issue_id'] == '0' ? "Delivered" : "Not Delivered";
                          ?>
                        </td>

                        <td class="td-actions text-center">
                          <button type="button" class="btn btn-info" onclick="showImage('../uploads/<?php echo $row['transection_img']; ?>','','')">
                            <i class="material-icons">image_search</i>
                          </button>
                          <a href="./detail?id=<?php echo $row["transection_id"]; ?>">
                            <button type="button" class="btn btn-success">
                              <i class="material-icons">edit</i>
                            </button>
                          </a>
                          <?php
                          if ($_SESSION['status'] == 'Manager' or $_SESSION['status'] == 'webDev') {
                          ?>
                            <button type="button" class="btn btn-danger" onclick="deactivateList(<?php echo $row['transection_id']; ?>)">
                              <i class="material-icons">close</i>
                            </button>
                        </td>
                      <?php
                          }
                      ?>
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
</div>


<?php include 'footer.php'; ?>

<script>
  $(function() {
    $("#tableList").DataTable({
      "searching": false,
      "lengthChange": false,
      "pageLength": 10
    })
    $("#btnSearch").click(searchList);
    $("#btnClear").click(clearList);
  });

  function clearList() {
    $("#txtSearch").val("");
    $("#chkMasala")[0].checked = true
    $("#chkLite")[0].checked = true
    $("#chkDeliver")[0].checked = true
    $("#chkNotDeliver")[0].checked = true
    $("#txtIssue").val("");
    $("#txtLite").val("");
    $("#txtCategory").val("");
    $("#txtLocation").val("");
    $("#txtArea").val("");
    $("#txtSoi").val("");
    $("#txtRoad").val("");
    $("#txtDistrict").val("");
    $("#txtProvince").val("");
    $("#txtPostCode").val("");
  }

  function searchList() {
    var search = $("#txtSearch").val();
    var masala = boolCheckbox("chkMasala");
    var lite = boolCheckbox("chkLite");
    var deliver = boolCheckbox("chkDeliver");
    var notDeliver = boolCheckbox("chkNotDeliver");
    var issue = $("#txtIssue").val();
    var issueLite = $("#txtLite").val();
    var category = $("#txtCategory").val();
    var location = $("#txtLocation").val();
    var area = $("#txtArea").val();
    var soi = $("#txtSoi").val();
    var road = $("#txtRoad").val();
    var district = $("#txtDistrict").val();
    var province = $("#txtProvince").val();
    var post = $("#txtPostCode").val();


    var url = window.location.origin + window.location.pathname + "?search=" + search +
      "&masala=" + masala +
      "&lite=" + lite +
      "&deliver=" + deliver +
      "&notDeliver=" + notDeliver +
      "&issue=" + issue +
      "&issueLite=" + issueLite +
      "&category=" + category +
      "&location=" + location +
      "&area=" + area +
      "&soi=" + soi +
      "&road=" + road +
      "&district=" + district +
      "&province=" + province +
      "&post=" + post;
    window.location.href = url;
  }

  function deactivateList(id, name) {
    Swal.fire({
      title: 'Are you sure?',
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
            var masala = boolCheckbox("chkMasala");
            var lite = boolCheckbox("chkLite");
            var deliver = boolCheckbox("chkDeliver");
            var notDeliver = boolCheckbox("chkNotDeliver");
            var issue = $("#txtIssue").val();
            var issueLite = $("#txtLite").val();
            var category = $("#txtCategory").val();
            var location = $("#txtLocation").val();
            var area = $("#txtArea").val();
            var soi = $("#txtSoi").val();
            var road = $("#txtRoad").val();
            var district = $("#txtDistrict").val();
            var province = $("#txtProvince").val();
            var post = $("#txtPostCode").val();
            var url = window.location.origin + window.location.pathname + "-deactive?id=" + id +
              "&search=" + search +
              "&masala=" + masala +
              "&lite=" + lite +
              "&deliver=" + deliver +
              "&notDeliver=" + notDeliver +
              "&issue=" + issue +
              "&issueLite=" + issueLite +
              "&category=" + category +
              "&location=" + location +
              "&area=" + area +
              "&soi=" + soi +
              "&road=" + road +
              "&district=" + district +
              "&province=" + province +
              "&post=" + post;
            alert(url);
            return;
            window.location.href = url;
          }
        })
      }
    })
  }
</script>