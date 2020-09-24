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
            <br />
            <div class="row">
              <div class="col-md-6">
                <!-- Magazine Type -->
                <div class="form-check form-check-radio">
                  <label class="form-check-label detail-type-margin col-md-3">
                    <input class="form-check-input" type="radio" name="type" value="masala" <?php
                                                                                            if ($_REQUEST["type"] == '') {
                                                                                              echo "checked";
                                                                                            } elseif ($_REQUEST["type"] == 'masala') {
                                                                                              echo "checked";
                                                                                            } else {
                                                                                              echo "";
                                                                                            }
                                                                                            ?>>
                    Masala
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                  <label class="form-check-label col-md-6">
                    <input class="form-check-input" type="radio" name="type" value="lite" <?php
                                                                                          if ($_REQUEST["type"] == 'lite') {
                                                                                            echo "checked";
                                                                                          } else {
                                                                                            echo "";
                                                                                          }
                                                                                          ?>>
                    Masala LITE
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
                <hr />
                <!-- Issue Masala-->
                <div class="form-group no-margin-top">
                  <input list="issueList" style="<?php if ($_REQUEST["type"] == 'lite') echo "display:none"; ?>" id="txtIssue" class="custom-select form-control" name="issue" placeholder="=== Masala Issue ===" value="<?php 
                                                                                                                                                                                                                                        if($_REQUEST["type"] != 'lite'){
                                                                                                                                                                                                                                        echo  $_REQUEST["issue"];
                                                                                                                                                                                                                                        } ?>">
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
                  <input list="issueListLite" style="<?php if ($_REQUEST["type"] != 'lite') echo "display:none"; ?>" id="txtLite" class="custom-select form-control" name="issue1" placeholder="=== Masala Lite Issue ===" value="<?php 
                                                                                                                                                                                                                                        if($_REQUEST["type"] == 'lite'){
                                                                                                                                                                                                                                        echo  $_REQUEST["issue"];
                                                                                                                                                                                                                                        } ?>">
                  <datalist id="issueListLite">
                    <?php
                    $sql = "SELECT magazineVol_Month,magazineVol_Year
                    FROM `magazineVol` Where magazineType_id=2
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


                <!-- Delivered -->
                <div class="form-check form-check-radio">
                  <label class="form-check-label detail-type-margin col-md-3">
                    <input class="form-check-input" type="checkbox" name="deliver" id="txtDelivered" <?php
                                                                                                      if ($_REQUEST["deliver"] == '') {
                                                                                                        echo "checked";
                                                                                                      } elseif ($_REQUEST["deliver"] == '1') {
                                                                                                        echo "checked";
                                                                                                      } else {
                                                                                                        echo "";
                                                                                                      }
                                                                                                      ?>>
                    Delivered
                    <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                  </label>
                  <label class="form-check-label col-md-3">
                    <input class="form-check-input" type="checkbox" name="active" id="txtActive" <?php
                                                                                                  if ($_REQUEST["active"] == '') {
                                                                                                    echo "checked";
                                                                                                  } elseif ($_REQUEST["active"] == '1') {
                                                                                                    echo "checked";
                                                                                                  } else {
                                                                                                    echo "";
                                                                                                  }
                                                                                                  ?>>
                    Active
                    <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
                <div class="form-check form-check-radio">
                </div>
                <br />
                <button class="btn btn-masala pull-left" id="btnSearch">Search</button>
                <div class="clearfix"></div>
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
                    <td width="10%">Delivery Time</td>
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
                  
                  $sql = "SELECT transection_id,location_name,messenger_name,transection_delivery_date,transection_img,magazineVol_Month,magazineVol_Year 
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
                      <tr>
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
                          <button type="button" rel="tooltip" class="btn btn-info" onclick="showImage('../img/<?php echo $image; ?>','','')">
                            <i class="material-icons">image_search</i>
                          </button>
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


<?php include 'footer.php'; ?>

<script>
  $(function() {
    $("#tableList").DataTable({
      "searching": false,
      "lengthChange": false,
      "pageLength": 10
    })
    $("#btnSearch").click(searchlist);
    $("input[name='type']").change(changeType);
  });

  function changeType() {
    var type = $("input[name='type']:checked").val();
    if (type != "lite") {
      $("#txtIssue").show();
      $("#txtLite").hide();
      $("#txtLite").val("");
    } else {
      $("#txtIssue").hide();
      $("#txtLite").show();
      $("#txtIssue").val("");
    }
  }

  function searchlist() {
    var type = $("input[name='type']:checked").val();
    var issue = $("#txtIssue").val();
    if (type == "lite") {
      issue = $("#txtLite").val();
    }
    var deliver = $("#txtDelivered").is(":checked") ? 1 : 0;
    var active = $("#txtActive").is(":checked") ? 1 : 0
    var url = window.location.origin + window.location.pathname + "?type=" + type + "&issue=" + issue + "&deliver=" + deliver + "&active=" + active;
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
            var deliver = $("#txtDelivered").is(":checked") ? 1 : 0;
            var active = $("#txtActive").is(":checked") ? 1 : 0
            var url = window.location.origin + window.location.pathname + "-deactive?id=" + id +
              "&type=" + type +
              "&issue=" + issue +
              "&deliver=" + deliver +
              "&active=" + active;
            window.location.href = url;
          }
        })
      }
    })
  }
</script>