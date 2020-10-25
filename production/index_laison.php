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

          </div>

        </div>

        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-6 col-sm-12 ">
            <div class="x_panel" style="border: 2px solid blue;border-radius:5px">
              <div class="x_content">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">
                      <p class="text-muted font-13 m-b-30">

                      </p>
                      <table id="datatable-button" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                          <tr>
                            <th colspan="4" class="h4 text-primary" style="text-align: center;"><i class="fa fa-bed"></i> Ward Bed Status</th>
                          </tr>
                          <th>Ward</th>
                          <th>Total number of Beds </th>
                          <th>Available Beds </th>
                          <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          //Pediatrics, surgery , internal medicine, gynecology obstetrics
                          $bed = [
                            0 => ["name" => "Pediatrics", "current" => 5, "capacity" => 10],
                            1 => ["name" => "Surgery", "current" => 2, "capacity" => 10],
                            3 => ["name" => "Internal Medicine", "current" => 10, "capacity" => 10],
                            4 => ["name" => "Gynecology", "current" => 6, "capacity" => 10],
                            5 => ["name" => "Obstetrics", "current" => 2, "capacity" => 10],
                            6 => ["name" => "Labor", "current" => 3, "capacity" => 10],
                            7 => ["name" => "Pediatrics Neuro Surgery", "current" => 4, "capacity" => 10],
                            8 => ["name" => "Adult Neuro Surgery", "current" => 9, "capacity" => 10],
                          ];
                          foreach ($bed as $key => $value) {
                            $available =($value['capacity'] - $value['current']);
                            $available =  ($available == 0) ? '<i class="fa fa-bed text-danger"></i> '.$available:'<i class="fa fa-bed text-success"></i> '.$available;
                            echo '
                              <tr>
                              <td>' . $value['name'] . '</td>
                              <td>'  . $value['capacity'] . '</td>
                              <td>' . ($available) . '</td>';
                            $style = '';
                            if ($value['current'] < $value['capacity']) {

                              $style = 'class="btn btn-sm btn-success"';
                            } else {

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
          <div class="col-md-6 col-sm-12 ">
            <div class="x_panel"  style="border: 2px solid red;border-radius:5px">
              <div class="x_content " >
                <div class="row">
                  <div class="col-sm-12 " >
                    <div class="card-box table-responsive">
                      <p class="text-muted font-13 m-b-30">

                      </p>
                      <table id="datatable-button" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                          <tr>
                            <th colspan="4" class="h4 text-danger" style="text-align: center; "><i class="fa fa-lightbulb-o"></i> Operation Room Status</th>
                          </tr>
                          <th>Department</th>
                          <th>Available Number of OR </th>
                          <th>Status </th>
                          <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          //Pediatrics, surgery , internal medicine, gynecology obstetrics
                          $bed = [
                            0 => ["name" => "Minor OR", "current" => 1, "capacity" => 1],
                            1 => ["name" => "General Surgery OR1", "current" => 1, "capacity" => 1],
                            2 => ["name" => "General Surgery OR2", "current" => 1, "capacity" => 1],
                            3 => ["name" => "Pediatrics Neuro Surgery", "current" => 1, "capacity" => 1],
                            4 => ["name" => "Gynecology", "current" => 0, "capacity" => 1],
                            5 => ["name" => "Obstetrics", "current" => 0, "capacity" => 1],
                          ];
                          foreach ($bed as $key => $value) {
                            $available =($value['capacity'] - $value['current']);
                            $OR =  ($available == 0) ? '<i class="fa fa-lightbulb-o text-danger"></i> OR':'<i class="fa fa-lightbulb-o text-success"></i> Available';

                            echo '
                              <tr>
                              <td>' . $value['name'] . '</td>
                              <td>'  . $value['capacity'] . '</td>
                              <td>' . $OR . '</td>';
                            $style = '';
                            if ($available != 0) {

                              $style = 'class="btn btn-sm btn-success"';
                            } else {

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