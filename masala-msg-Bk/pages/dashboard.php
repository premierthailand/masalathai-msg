<?php $activeIndex = 'active'; ?>
<?php $pageName = 'Dashboard'; ?>
<?php include 'header.php'; ?>
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6">
    <a href="location">
      <div class="card card-stats">
        <div class="card-header card-header-masala card-header-icon">
          <div class="card-icon">
            <i class="material-icons">apartment</i>
          </div>
          <p class="card-category"><b>Delivery Master List</b></p>
          <h3 class="card-title">

            <table width="100%">
              <tr>
                <td width="40%">
                  <?php
                  $sql =  "SELECT COUNT(location_id) FROM location;";
                  $result = mysqli_query($conn, $sql);
                  $row = $result->fetch_row();
                  echo $row[0];
                  ?>
                </td>
              </tr>
              <tr class="card-category">
                <td style="color:#000;">Locations</td>
              </tr>
            </table>
          </h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="material-icons">date_range</i> &ensp;See more...
          </div>
        </div>
    </a>
  </div>
  </a>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
  <a href="list">
    <div class="card card-stats">
      <div class="card-header card-header-masala card-header-icon">
        <div class="card-icon">
          <i class="material-icons">library_books</i>
        </div>
        <p class="card-category"><b>Delivery Status</b></p>
        <h3 class="card-title">
          <table width="100%">
            <tr>
              <td width="30%">
              </td>
              <td width="30%" style="border-right:1px solid #aaa; padding-right: 10px;">
                <?php

                $sqlDeliver =  "SELECT COUNT(transection_id) FROM transection WHERE transection_img != '';";
                $resultDeliver = mysqli_query($conn, $sqlDeliver);
                $rowDeliver = $resultDeliver->fetch_row();
                echo $rowDeliver[0];
                ?>
                <div class="card-category " style="color:green; ">
                  Delivered
                </div>
              </td>
              <td width="40%">
                <?php
                $sqlNotDeliver =  "SELECT COUNT(transection_id) FROM transection WHERE transection_img = '';";
                $resultNotDeliver = mysqli_query($conn, $sqlNotDeliver);
                $rowNotDeliver = $resultNotDeliver->fetch_row();
                echo $rowNotDeliver[0];
                ?>
                <div class="card-category " style="color:#b4292d;">
                  Not Delivered
                </div>
              </td>
            </tr>
          </table>
        </h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">date_range</i> &ensp;See more...
        </div>
      </div>
    </div>
  </a>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
  <a href="detail">
    <div class="card card-stats">
      <div class="card-header card-header-masala card-header-icon">
        <div class="card-icon">
          <i class="material-icons">library_add</i>
        </div>
        <p class="card-category"><b>Delivery Detail</b></p>
        <h3 class="card-title">
          <table style="width:100%">
            <tr>

              <td width="60%">
                <span style="font-size: 26px;">
                  <b> + </b>
                </span>
                Add
              </td>
            </tr>
            <tr class="card-category">

              <td style="color:#000;">Delivery</td>
            </tr>
          </table>
        </h3>
      </Div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">date_range</i> &ensp;See more...
        </div>
      </div>
    </div>
  </a>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
  <a href="report">
    <div class="card card-stats">
      <div class="card-header card-header-masala card-header-icon">
        <div class="card-icon">
          <i class="material-icons">person</i>
        </div>
        <p class="card-category"><b>Messenger</b></p>
        <h3 class="card-title">
          <table style="width:100%">
            <tr>
              <td width="60%">
                <?php
                $sql =  "SELECT COUNT(messenger_id) FROM messenger;";
                $result = mysqli_query($conn, $sql);
                $row = $result->fetch_row();
                echo $row[0];
                ?>
              </td>
            </tr>
            <tr class="card-category">
              <td style="color:#000;">Persons</td>
            </tr>
          </table>

        </h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">date_range</i> &ensp;See more...
        </div>
      </div>
    </div>
  </a>
</div>

</div>
<?php include 'footer.php'; ?>