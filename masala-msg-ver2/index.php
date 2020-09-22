<?php include 'pages/config.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <title>Masalathai messenger</title>
    <link rel="icon" href="http://www.masalathai.com/2015/wp-content/uploads/2020/07/Masala-Logo-1.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link href="css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link href="css/material-dashboard.min.css?v=2.0.3" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/family-roboto.css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> -->
    <!-- Material Kit CSS -->
    <link href="css/main.css" rel="stylesheet" />
    <link href="css/docs.css" rel="stylesheet" />
    <link href="css/datetimepicker.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="container-fluid">
                <div class="row login-margin">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <form id="RegisterValidation" action="./pages/dashboard" method="post" novalidate="novalidate">
                            <div class="card ">
                                <div class="card-header card-header-masala card-header-icon ">
                                    <div class="card-icon">
                                        <i class="material-icons">mail_outline</i>
                                    </div>
                                    <h4 class="card-title">Login</h4>
                                </div>
                                <div class="card-body ">
                                    <div class="form-group bmd-form-group">
                                        <input type="email" class="form-control" id="exampleEmail" required="true" name="email" aria-required="true" placeholder="Email Address *">
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <input type="password" class="form-control" id="examplePassword" required="true" name="password" aria-required="true" placeholder="Email Address *">
                                    </div>
                                    <div class="card-footer text-right">
                                        <div class="form-check mr-auto">
                                            <label class="form-check-label">
                                                <a href=""></a>
                                            </label>
                                        </div>

                                        <button type="submit" class="btn btn-masala">Login</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>