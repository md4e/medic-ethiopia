<?php?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../images/flag.ico">

  <title>index</title>




  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><!-- <i class="fa fa-building-o"></i> --> <span>Zewditu Hospital</span></a>
            <!-- <i class="fa fa-building-o"></i> -->
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <!-- <img src="images/img.jpg" alt="..." class="img-circle profile_img"> -->
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Dr. Name Lastname</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <!-- <h3>Departments</h3> -->
              <ul class="nav side-menu">
                <!-- <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a> -->
                <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                <li><a href="index2.php">Emergency Department </a></li>
                <li><a href="index3.php">Out Patient Department (OPD)</a></li>
                <li><a href="index4.php">Radiology Department</a></li>
                <li><a href="index5.php">Laboratory Forms</a></li>
                <li><a href="index6.php">Medical Forms</a></li>
                <li><a href="index7.php">All Patients</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- top navigation -->
    <div class="top_nav">
      <div class="nav_menu">
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
          <ul class=" navbar-right">
            <li class="nav-item dropdown open" style="padding-left: 15px;">
              <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user-md"></i>Dr. Name Lastname
              </a>
              <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="javascript:;"> Profile</a>
                <a class="dropdown-item" href="javascript:;">Help</a>
                <a class="dropdown-item" href="../index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- /top navigation -->

    <!-- page content -->
    <div class="right_col" role="main">
      <!-- top tiles -->
      <?php
      $list = [
        0 => ["name" => "Vital Sign (NEWS)", "link" => "medical-vital-sign-news.php"],
        1 => ["name" => "Order Sheet", "link" => "medical-order-sheet.php"],
        2 => ["name" => "Patient's Progress Notes and Investigation Summary", "link" => "medical-patient-notes-and-investigation-summary.php"],
        3 => ["name" => "Discharge Summary", "link" => "medical-discharge-summary.php"],
        4 => ["name" => "History Sheet", "link" => "medical-history-sheet.php"],
        5 => ["name" => "Respiratory rate Oxygen Saturation & Oxygen Therapy Form", "link" => "medical-respiratory-and-oxygen.php"]

      ];
      foreach ($list as $key => $value) {
        $valueObj = (object)$value;
        echo '
            <div class="row">
              <div class="col-md-6">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="' . $valueObj->link . '" class="laboratory-form">
                      <div class="row" style="display: inline-block;">
                        <p class="h4 text-primary"><i class="fa fa-book"></i> ' . $valueObj->name . '</p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            ';
      }
      ?>
    </div>
  </div>
  </div>
  <!-- /page content -->

  <!-- footer content -->
  <footer>
    <div class="pull-right">
      Copyright © 2020 Powered by <a href="http://medic-ethiopia.com" target="blank">Medic-Ethiopia</a>
    </div>
    <div class="clearfix"></div>
  </footer>
  <!-- /footer content -->
  </div>
  </div>
</body>

</html>