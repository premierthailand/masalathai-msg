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
                <div class="col-md-2">
                  <div class="card-icon">
                    <i class="material-icons">library_books</i>
                  </div>
                  <h4 class="card-title">Delivery List</h4>
                </div>
                <div class="col-md-3" style="margin-top: 10px;">
                  <input type="email" class="form-control" id="txtSearch" placeholder="Search..." name="location-search" value="<?php echo $_REQUEST["search"] ?>">
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-5">
                      <!-- Magazine Type -->
                      <div class="form-check form-check-radio">
                        <label class="form-check-label col-md-5">
                          <input class="form-check-input" type="radio" name="type" value="masala" <?php echo $_REQUEST["type"] != 'lite' ? "checked" : ""; ?>>
                          Masala
                          <span class="circle">
                            <span class="check"></span>
                          </span>
                        </label>
                        <label class="form-check-label col-md-5">
                          <input class="form-check-input" type="radio" name="type" value="lite" <?php echo $_REQUEST["type"] == 'lite' ? "checked" : ""; ?>>
                          Masala Lite
                          <span class="circle">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5">
                      <!-- Delivered -->
                      <div class="form-check form-check-radio">
                        <label class="form-check-label col-md-5">
                          <input class="form-check-input" type="radio" name="deliver" value="1" <?php echo $_REQUEST["deliver"] != '0' ? "checked" : ""; ?>>
                          Delivered
                          <span class="circle">
                            <span class="check"></span>
                          </span>
                        </label>
                        <label class="form-check-label col-md-5">
                          <input class="form-check-input" type="radio" name="deliver" value="0" <?php echo $_REQUEST["deliver"] == '0' ? "checked" : ""; ?>>
                          Not Delivered
                          <span class="circle">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <!-- Magazine Type -->
                      <div class="row">

                        <!-- Issue Masala-->
                        <div class="form-group bmd-form-group col-md-2">
                          <input list="issueList" id="txtIssue" class="custom-select form-control" placeholder="=== Masala Issue ===" value="">
                          <datalist id="issueList" class="text-left">
                            <?php
                            $sql = "SELECT magazineVol_Month,magazineVol_Year
                              FROM `magazineVol` Where magazineType_id=1 
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
                          <input list="issueListLite" id="txtLite" class="custom-select form-control" placeholder="=== Masala Lite Issue ===" value="">
                          <datalist id="issueListLite">
                            <?php
                            $sql = "SELECT magazineVol_Month,magazineVol_Year
                              FROM `magazineVol` Where magazineType_id=2
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
                        <div class="col-md-3">
                          <div class="form-group bmd-form-group">
                            <input type="email" class="form-control" id="txtSearch" placeholder="Location..." name="location-search" value="<?php echo $_REQUEST["search"] ?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group bmd-form-group">
                            <input type="email" class="form-control" id="txtSearch" placeholder="Area..." name="location-search" value="<?php echo $_REQUEST["search"] ?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group bmd-form-group">
                                <input type="email" class="form-control" id="txtSearch" placeholder="Soi..." name="location-search" value="<?php echo $_REQUEST["search"] ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group bmd-form-group">
                                <input type="email" class="form-control" id="txtSearch" placeholder="Road..." name="location-search" value="<?php echo $_REQUEST["search"] ?>">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group bmd-form-group">
                            <input type="email" class="form-control" id="txtSearch" placeholder="District..." name="location-search" value="<?php echo $_REQUEST["search"] ?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group bmd-form-group">
                            <input type="email" class="form-control" id="txtSearch" placeholder="Province..." name="location-search" value="<?php echo $_REQUEST["search"] ?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group bmd-form-group">
                            <input type="email" class="form-control" id="txtSearch" placeholder="Post Code..." name="location-search" value="<?php echo $_REQUEST["search"] ?>">
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
                    <td width="15%">Messenger</td>
                    <td width="20%">Location</td>
                    <td width="15%">Status</td>
                    <td width="15%">Issue</td>
                    <td width="10%">Delivery Date</td>
                    <td width="10%">Action</td>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $No = 0;
                  if ($_REQUEST["type"] == '') {
                    $dataDB = "AND magazineType_name ='masala'";
                  } elseif ($_REQUEST["type"] !== '') {
                    $dataDB = "AND magazineType_name ='" . $_REQUEST["type"] . "'";
                  }
                  if ($_REQUEST["deliver"] == '') {
                    $activeDB = "AND transection_isActive ='1'";
                  } elseif ($_REQUEST["active"] !== '') {
                    $activeDB = "AND transection_isActive ='" . $_REQUEST["active"] . "'";
                  }

                  if ($_REQUEST["deliver"] != '0') {
                    $deliverDB = "AND transection_img is not null AND transection_img != ''";
                  } elseif ($_REQUEST["deliver"] == '0') {
                    $deliverDB = "AND (transection_img is null OR transection_img ='')";
                  }
                  if ($_REQUEST["issue"] == '') {
                    $issueDB = "";
                  } elseif ($_REQUEST["issue"] !== '') {
                    $issueDB = "AND magazineVol.magazineVol_Month ='" . $_REQUEST["issue"] . "'";
                  }

                  $sql = "SELECT Location_isActive,transection_id,location_name,messenger_name,transection_delivery_date,transection_img,magazineVol_Month,magazineVol_Year 
                    FROM messenger 
                        INNER JOIN transection  ON transection.messenger_id = messenger.messenger_id
                        INNER JOIN location  ON location.location_id = transection.location_id
                        INNER JOIN magazineVol  ON magazineVol.magazineVol_id = transection.magazineVol_id
                        INNER JOIN magazinetype  ON magazinetype.magazineType_id = magazineVol.magazineType_id
                        WHERE 1=1 
                            $dataDB
                            $activeDB
                            $deliverDB
                            $issueDB
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
                        <td class="text-center">

                          <?php
                          $status = $row["transection_img"];
                          if ($status != '') {
                            echo "Delivered";
                          } else {
                            echo "Not Delivered";
                          }
                          ?>

                        </td>
                        <td class="text-center"><?php echo $row["magazineVol_Month"]; ?></td>
                        <td class="text-center"><?php echo $listtime; ?></td>
                        <td class="td-actions text-center">
                          <?php
                          if ($image != '') {

                          ?>
                            <button type="button" rel="tooltip" class="btn btn-info" onclick="showImage('../uploads/<?php echo $image; ?>','','')">
                              <i class="material-icons">image_search</i>
                            </button>
                          <?php
                          }
                          ?>
                          <a href="./detail?id=<?php echo $row["transection_id"]; ?>">
                            <button type="button" class="btn btn-success">
                              <i class="material-icons">edit</i>
                            </button>
                          </a>
                          <button type="button" class="btn btn-danger" onclick="deactivateList(<?php echo $row['transection_id']; ?>)">
                            <i class="material-icons">close</i>
                          </button>

                        </td>
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
    $("#btnSearch").click(searchlist);
  });

  function searchlist() {
    var type = $("").val();
    var issue = $("#txtIssue").val();
    if (type == "lite") {
      issue = $("#txtLite").val();
    }
    var deliver = $("input[name='deliver']:checked").val();
    var url = window.location.origin + window.location.pathname + "?type=" + type + "&issue=" + issue + "&deliver=" + deliver;
    window.location.href = url;
  }

  function deactivateList(id) {
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
            var type = $("input[name='type']:checked").val();
            var issue = $("#txtIssue").val();
            if (type == "lite") {
              issue = $("#txtLite").val();
            }
            var deliver = $("input[name='deliver']:checked").val();
            var url = window.location.origin + window.location.pathname + "-deactive?id=" + id +
              "&type=" + type +
              "&issue=" + issue +
              "&deliver=" + deliver;
            window.location.href = url;
          }
        })
      }
    })
  }
</script>