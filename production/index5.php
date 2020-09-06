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
              <a href="patient-list-laboratory.php" class="laboratory-form">
                <div class="row" style="display: inline-block;">
                  <p class="h4 text-primary"><i class="fa fa-list"></i> Patient List and Queue</p>
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
              <a href="lab-serology-coagulations.php" class="laboratory-form">
                <div class="row" style="display: inline-block;">
                  <p class="h4 text-danger"><i class="fa fa-flask"></i> LAB - Serology & Coagulation</p>
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
              <a href="lab-blood-request.php" class="laboratory-form">
                <div class="row" style="display: inline-block;">
                  <p class="h4 text-danger"><i class="fa fa-flask"></i> LAB - Blood Request</p>
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
              <a href="lab-blood-crossmatch.php" class="laboratory-form">
                <div class="row" style="display: inline-block;">
                  <p class="h4 text-danger"><i class="fa fa-flask"></i> LAB - Blood Crossmatch</p>
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
              <a href="lab-hematology-request.php" class="laboratory-form">
                <div class="row" style="display: inline-block;">
                  <p class="h4 text-danger"><i class="fa fa-flask"></i> LAB - Hematology Request</p>
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
              <a href="lab-chemistry-request.php" class="laboratory-form">
                <div class="row" style="display: inline-block;">
                  <p class="h4 text-success"><i class="fa fa-flask"></i> LAB - Chemistry Request</p>
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
              <a href="lab-urine-analysis-examination.php" class="laboratory-form">
                <div class="row" style="display: inline-block;">
                  <p class="h4 text-warning"><i class="fa fa-flask"></i> LAB - Urine Analysis Examination</p>
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
              <a href="lab-stool-examination.php" class="laboratory-form">
                <div class="row" style="display: inline-block;">
                  <p class="h4 text-dark"><i class="fa fa-flask"></i> LAB - Stool Examination</p>
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
              <a href="lab-x-ray.php" class="laboratory-form">
                <div class="row" style="display: inline-block;">
                  <p class="h4 text-primary"><i class="fa fa-camera"></i> LAB - X-Ray</p>
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