<?php include 'config.php'; ?>

<!doctype html>
<html lang="en">

<head>
  <title>Masalathai Messenger</title>
  <link rel="icon" href="http://www.masalathai.com/2015/wp-content/uploads/2020/07/Masala-Logo-1.png" type="image/x-icon">

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link href="../css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../css/family-roboto.css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="../css/main.css" rel="stylesheet" />
  <link href="../css/docs.css" rel="stylesheet" />
  <link href="../css/main2.css" rel="stylesheet" />
  <link href="../css/datetimepicker.css" rel="stylesheet" />
  <style>
    .footer {
      position: fixed;
      left: px;
      bottom: 0;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="masala" data-background-color="white">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          Masala Magazine
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

            <footer class="footer">
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