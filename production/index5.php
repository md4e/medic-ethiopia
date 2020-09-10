<?php
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  headerLinks("Laboratory Forms");
  ?>
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
              <a href="patient-list-laboratory.php" class="patient">
                <div class="row" style="display: inline-block;">
                  <p class="h4 text-primary"><i class="fa fa-pencil"></i> Patient List and Queue</p>
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
              <a href="lab-request-sc.php" class="patient">
                <div class="row" style="display: inline-block;">
                  <p class="h4 text-danger"><i class="fa fa-share"></i> Laboratory Request</p>
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
              <div class="dropdown">
                <button class="btn btn-lg btn-danger dropdown-toggle"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-flask"></i>  All Laboratory forms
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                  <?php
                  $route = [
                    ["class" => '<p class="h4 text-danger"><i class="fa fa-flask"></i>', "link" => "lab-serology-coagulations.php", "name" => " LAB - Serology & Coagulation"],
                    ["class" => '<p class="h4 text-danger"><i class="fa fa-flask"></i>', "link" => "lab-blood-request.php", "name" => " LAB - Blood Request"],
                    ["class" => '<p class="h4 text-danger"><i class="fa fa-flask"></i>', "link" => "lab-blood-crossmatch.php", "name" => " LAB - Blood Crossmatch"],
                    ["class" => '<p class="h4 text-danger"><i class="fa fa-flask"></i>', "link" => "lab-hematology-request.php", "name" => " LAB - Hematology Request"],
                    ["class" => '<p class="h4 text-danger"><i class="fa fa-flask"></i>', "link" => "lab-chemistry-request.php", "name" => " LAB - Chemistry Request"],
                    ["class" => '<p class="h4 text-warning"><i class="fa fa-flask"></i>', "link" => "lab-urine-analysis-examination.php", "name" => " LAB - Urine Analysis Examination"],
                    ["class" => '<p class="h4 text-dark"><i class="fa fa-flask"></i>', "link" => "lab-stool-examination.php", "name" => " LAB - Stool Examination"]
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