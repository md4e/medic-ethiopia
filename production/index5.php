<?php
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  headerLinks("Laboratory Forms");
  ?>
  <style>
    a:hover {
      color: red;
    }
  </style>
</head>

<body class="nav-md">
  <div class="container body">
    <?php
    main_container_top_navigation();
    ?>

    <!-- page content -->
    <div class="right_col" role="main">
      <!-- top tiles -->

      <div class="row">
        <div class="col-md-6">
          <div class="x_panel">
            <div class="x_title">
              <div class="dropdown">
                <button class="btn btn-lg btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-flask"></i> General Laboratory forms
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                  <?php
                  $route = [
                    ["class" => '<p class="h4 text-dark"><i class="fa fa-flask"></i>', "link" => "lab-serology-coagulations.php", "name" => " LAB - Serology & Coagulation Result"],
                    ["class" => '<p class="h4 text-dark"><i class="fa fa-flask"></i>', "link" => "lab-blood-request.php", "name" => " LAB - Blood Request Result"],
                    ["class" => '<p class="h4 text-dark"><i class="fa fa-flask"></i>', "link" => "lab-blood-crossmatch.php", "name" => " LAB - Blood Crossmatch Result"],
                    ["class" => '<p class="h4 text-dark"><i class="fa fa-flask"></i>', "link" => "lab-hematology-request.php", "name" => " LAB - Hematology Request Result"],
                    ["class" => '<p class="h4 text-dark"><i class="fa fa-flask"></i>', "link" => "lab-chemistry-request.php", "name" => " LAB - Chemistry Request Result"],
                    ["class" => '<p class="h4 text-dark"><i class="fa fa-flask"></i>', "link" => "lab-urine-analysis-examination.php", "name" => " LAB - Urine Analysis Examination Result"],
                    ["class" => '<p class="h4 text-dark"><i class="fa fa-flask"></i>', "link" => "lab-stool-examination.php", "name" => " LAB - Stool Examination Result"]
                  ];
                  foreach ($route as $key => $value) {
                    $valueObj = (object)$value;
                    echo '
                               <div class="x_panel">

                                   <a href="' . $valueObj->link . '" class="laboratory-form">
                                     <div class="row" style="display: inline-block;">
                                       ' . $valueObj->class . $valueObj->name . '</p>
                                     </div>
                                   </a>

                           </div>
                             ';
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="x_panel">
            <div class="x_title">
              <a href="patient-list-laboratory.php" class="patient">
                <div class="row" style="display: inline-block;">
                  <p class="h4 text-primary"><i class="fa fa-list"></i> Laboratory Patient List & Queue</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="x_panel">
            <div class="x_title">
              <a href="patient-list-phlebotomy.php" class="patient">
                <div class="row" style="display: inline-block;">
                  <p class="h4 text-primary"><i class="fa fa-eyedropper"></i> Phlebotomy Patient List & Queue</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="x_panel">
            <div class="x_title">
              <a href="lab-supply-list.php" class="patient">
                <div class="row" style="display: inline-block;">
                  <p class="h4 text-primary"><i class="fa fa-shopping-cart"></i> Lab Supply List</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
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
  <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>
</body>

</html>