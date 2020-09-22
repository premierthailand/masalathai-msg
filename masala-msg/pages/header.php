<?php include 'config.php'; ?>

<!doctype html>
<html lang="en">

<head>
  <title>Masalathai Messenger</title>
  <link rel="icon" href="../img/Masala-Logo-1.png" type="image/x-icon">

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <link href="../css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link href="../css/family-roboto.css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" rel="stylesheet" type="text/css" />
  <link href="../css/font-awesome.min.css" rel="stylesheet" />
  <link href="../css/dataTables.bootstrap4.min.css" rel="stylesheet" />
  <link href="../css/docs.css" rel="stylesheet" />
  <link href="../css/datetimepicker.css" rel="stylesheet" />
  <link href="../css/main.css" rel="stylesheet" />
  <link href="../css/main2.css" rel="stylesheet" />
  
</head>

<body >
  <div class="wrapper ">
    <div class="sidebar sidebar-bg" data-color="masala" data-background-color="white" style="background-image: url('../img/bg-134521.jpg');">
      <div class="logo">
        <a href="dashboard" class="simple-text logo-mini">
          <img src="../img/Masala-Logo.png" width="200">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php echo $activeIndex ?>">
            <a class="nav-link" href="./dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php echo $activeLocation ?>">
            <a class="nav-link" href="./location">
              <i class="material-icons">apartment</i>
              <p>Delivery Master List</p>
            </a>
          </li>
          <li class="nav-item <?php echo $activeList ?>">
            <a class="nav-link" href="./list">
              <i class="material-icons">library_books</i>
              <p>Delivery Status</p>
            </a>
          </li>
          <li class="nav-item <?php echo $activeDetail ?>">
            <a class="nav-link" href="./detail">
              <i class="material-icons">library_add</i>
              <p>Delivery Details</p>
            </a>
          </li>
          <li class="nav-item <?php echo $activeReport ?>">
            <a class="nav-link" href="./report">
              <i class="material-icons">person</i>
              <p>Messenger Report</p>
            </a>
          </li>
        </ul>
        <ul class="nav">
          <li class="nav-item">
            <footer class="footer">&emsp;&emsp;
                <div class="container-fluid">
                  <hr>
                  <div class="">
                    &copy;
                    <script>
                      document.write(new Date().getFullYear())
                    </script>
                    <br>
                    <a href="#">Masala, Magazine</a>
                  </div>
                  <!-- your footer here -->
                </div>
            </footer>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel paddingPanel">
      <!-- Navbar -->

      <div class="container-fluid">
        <div class="row">
          <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="navbar-wrapper">
              <a class="navbar-brand" href="javascript:;">
                <h2 style="padding-left:15px;">
                  <?php echo $pageName ?>
                </h2>
              </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">

              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">person</i>
                    user : test
                    <div class="ripple-container"></div></a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                    <a class="dropdown-item" href="#">Log out</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>


        <!-- End Navbar -->