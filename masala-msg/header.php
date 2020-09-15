<?php include 'config.php';?>

<!doctype html>
<html lang="en">

<head>
  <title>Masalathai Messenger</title>
  <link rel="icon" href="http://www.masalathai.com/2015/wp-content/uploads/2020/07/Masala-Logo-1.png" type="image/x-icon">

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link href="css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/family-roboto.css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> -->
  <!-- Material Kit CSS -->
  <link href="css/main.css" rel="stylesheet" />
  <link href="css/datetimepicker.css" rel="stylesheet" />
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
    <div class="sidebar" data-color="purple" data-background-color="white">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          Masala Magazine
        </a>
      </div>
      <div class="sidebar-wrapper">
      <ul class="nav">
          <li class="nav-item <?php echo $activeIndex?>">
            <a class="nav-link" href="./home.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php echo $activeList?>">
            <a class="nav-link" href="./list.php">
              <i class="material-icons">view_list</i>
              <p>Delivery list</p>
            </a>
          </li>
          <li class="nav-item <?php echo $activeLocation?>">
            <a class="nav-link" href="./location.php">
              <i class="material-icons">location_on</i>
              <p>Location</p>
            </a>
          </li>
          <li class="nav-item <?php echo $activeMsg?>">
            <a class="nav-link" href="./messenger.php">
              <i class="material-icons">directions_bikes</i>
              <p>Messenger</p>
            </a>
          </li>
        <li class="nav-item <?php echo $activeProfile?>">
            <a class="nav-link" href="./profile.php">
              <i class="material-icons">person</i>
              <p>Profile</p>
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
    <div class="main-panel">
          <!-- Navbar -->
    
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
              <div class="navbar-wrapper">
                <a class="navbar-brand" href="javascript:;">Dashboard</a>
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end">
                <form class="navbar-form">
                  <span class="bmd-form-group"><div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">&emsp; 
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                      <i class="material-icons">search</i>
                      <div class="ripple-container"></div>
                    </button>
              </div></span>
                </form>
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