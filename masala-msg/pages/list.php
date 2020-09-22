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
                    <input class="form-check-input" type="radio" name="type" value="masala" checked>
                    Masala
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                  <label class="form-check-label col-md-6">
                    <input class="form-check-input" type="radio" name="type" value="lite">
                    Masala LITE
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
                <hr />
                <!-- Issue -->
                <div class="form-group no-margin-top">
                  <input list="issueList" id="txtIssue" class="custom-select form-control" name="issue" placeholder="=== All Issue ===">
                  <datalist id="issueList">
                    <?php
                    $sql = "SELECT issue_name
                    FROM `issue` 
                    Where issue_id != 0";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while ($row = $result->fetch_assoc()) {
                    ?>
                        <option value="<?php echo $row["issue_name"]; ?>"></option>
                    <?php
                      }
                    }
                    ?>
                  </datalist>
                </div>
                <!-- Delivered -->
                <div class="form-check form-check-radio">
                  <label class="form-check-label detail-type-margin col-md-3">
                    <input class="form-check-input" type="checkbox" name="deliver" id="txtDelivered" checked>
                    Delivered
                    <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                  </label>
                  <label class="form-check-label col-md-3">
                    <input class="form-check-input" type="checkbox" name="active" id="txtActive" checked>
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
                  <tr>
                    <?php

                    $No = 0;
                    $date = date_create($row["transection_delivery_date"]);
                    $listtime = date_format($date, "d-m-Y");
                    $sql = "SELECT location_name,messenger_name,transection_delivery_date,transection_img,issue_name 
                    FROM messenger 
                        INNER JOIN transection  ON transection.messenger_id = messenger.messenger_id
                        INNER JOIN location  ON location.location_id = transection.location_id
                        INNER JOIN issue  ON issue.issue_id = transection.issue_id";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while ($row = $result->fetch_assoc()) {
                        $No++;
                    ?>
                        <td class="text-center"><?php echo $No;?></td>
                        <td><?php echo $row["messenger_name"]; ?></td>
                        <td><?php echo $row["location_name"]; ?></td>
                        <td class="text-center">

                          <?php 
                          $status=$row["transection_img"];
                              if($status!=''){
                                echo "Delivered";
                              }else{
                                echo "Not Delivered";
                              }
                           ?>

                        </td>
                        <td><?php echo $row["issue_name"]; ?></td>
                        <td class="text-center"><?php echo $listtime; ?></td>
                        <td class="td-actions text-center">
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
  });

  function searchlist() {
    var type = $("input[name='type']:checked").val();;
    var issue = $("#txtIssue").val();
    var deliver = $("#txtDelivered").val() == "on";
    var active = $("#txtActive").val() == "on";
    var url = window.location.origin + window.location.pathname + "?type=" + type + "&issue=" + issue + "&deliver=" + deliver + "&active=" + active;
    window.location.href = url;
  }
</script>