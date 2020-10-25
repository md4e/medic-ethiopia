<?php
include_once "./lab-all-test-defines.php";
include_once "./config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  headerLinks("Patient detail");
  ?>
</head>

<body class="nav-md">
  <div class="container body">
    <?php
    main_container_top_navigation();
    ?>

    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <a href="patient-list-emergency.php" class="title_link btn btn-primary" type="button">
              <p class="h6">⏎ Return to Emergency Patient List</p>
            </a>
            <a href="patient-list-opd.php" class="title_link btn btn-primary" type="button">
              <p class="h6">⏎ Return to OPD Patient List</p>
            </a>
            <p class="h3 text-primary"><i class="fa fa-bed"></i> Laison</p>

          </div>

        </div>

        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-6 col-sm-12 ">
            <div class="x_panel">
              <div class="x_content">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">
                      <p class="text-muted font-13 m-b-30">

                      </p>
                      <table id="datatable-button" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th>Department</th>
                            <th>Available Bed </th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php
                          //Pediatrics, surgery , internal medicine, gynecology obstetrics
                          $bed = [
                            0 => ["name" => "Pediatrics", "current" => 5, "capacity" => 10],
                            1 => ["name" => "Surgery", "current" => 2, "capacity" => 10],
                            2 => ["name" => "Minor OR", "current" => 7, "capacity" => 10],
                            3 => ["name" => "Internal Medicine", "current" => 10, "capacity" => 10],
                            4 => ["name" => "Gynecology Obstetrics", "current" => 6, "capacity" => 10],
                          ];
                          foreach ($bed as $key => $value) {
                            echo '
                              <tr>
                              <td>' . $value['name'] . '</td>
                              <td>' . $value['current'] . '/' . $value['capacity'] . '</td>';
                            $style = '';
                            if ($value['current'] < $value['capacity']) {
                              echo '<td>' . ($value['capacity'] - $value['current']) . ' Available</td>';
                              $style = 'class="btn btn-sm btn-success"';
                            } else {
                              echo '<td>Full</td>';
                              $style = 'class="btn btn-sm btn-muted" disabled=disabled';
                            }
                            echo '
                              <td><button ' . $style . '>Book</button></td>
                              </tr>
                              ';
                          }
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
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- Datatables -->
  <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>

</body>

</html>