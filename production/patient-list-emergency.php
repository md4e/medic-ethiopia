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
            <a href="index2.php" class="title_link btn btn-primary" type="button">
              <p class="h6">⏎ Return to Emergency Department</p>
            </a>

          </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
          <!-- <div class="col-md-6 col-sm-12 ">
            <div class="x_panel">
              <div class="x_content">
                <p class="h3 text-primary"><i class="fa fa-bed"></i> Laison</p>
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
          </div> -->

          <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_content">
                <p class="h3 text-danger"><i class="fa fa-list"></i> Emergency Patient List</p>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">
                      <p class="text-muted font-13 m-b-30">
                      </p>
                      <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Action <br><span>asdsadsda</span></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $documentRootPath = $_SERVER['DOCUMENT_ROOT'];
                          include_once $documentRootPath . "/classes/MePatientTable.php";
                          $patients = new MePatientTable('*');
                          $result =  $patients->getResultSet();
                          $result->data_seek(0);
                          $department = [0 => "OPD", 1 => "Emergency", 2 => "Radiology", 3 => "@Chemistry Lab", 4 => "@Stool Examination"];
                          while ($rows = $result->fetch_object()) {
                            $index = rand(0, 4);
                            echo '<tr>';
                            echo '<td>';
                            $patient = new MePatientTable($rows->patient_card_number);
                            $documentRootPath = $_SERVER['DOCUMENT_ROOT'];
                            include_once($documentRootPath . "/includes/crypter.php");
                            echo '<p class="h6 text-primary"><i class="fa fa-user"></i> ' . $patient->getPatientFirstName() . ', Age:' . $patient->getPatientAge() . '</p>';


                            echo '<strong>PhoneNr.:</strong> ' . $patient->getPatientPhone() . ' ';
                            echo '<strong>Wereda.:</strong> ' . $patient->getPatientWereda() . ' ';
                            echo '<strong>Kebele.:</strong> ' . $patient->getPatientKebele();
                            echo '<br><a href="./session.php?card-no=' . Crypter::urlencode_encrypt($rows->patient_card_number) . '" class="btn btn-sm btn-info">' . $rows->patient_card_number . '</a>';
                            echo '</td>';
                            echo '<td>';
                            echo '<a href="index_laison.php?card-no=' . $rows->patient_card_number . '" type="button" class="btn btn-success"><i class="fa fa-bed"></i> Ward (Laison)</a>';
                            echo '<a href="index-or.php?card-no=' . $rows->patient_card_number . '" type="button" class="btn btn-danger"><i class="fa fa-scissors"></i> To Major OR</a>';
                            echo '<a href="index-or.php?card-no=' . $rows->patient_card_number . '" type="button" class="btn btn-warning"><i class="fa fa-scissors"></i> To Minor OR</a>';
                            echo '<a href="index-calendar.php?card-no=' . $rows->patient_card_number . '" type="button" class="btn btn-info"><i class="fa fa-calendar"></i> Schedule appointment</a>';


                            echo  '</td>';

                            echo '</tr>';
                          }
                          ?>
                        </tbody>
                        <select name="laison" id="">
                          <option value=""></option>
                        </select>
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
        Copyright © 2020 Powered by <a href="http://abgasim.com" target="blank">ABGASIM</a>
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
  <script>
    function changeAppointment(param1, param2) {
      if (param1 == 'open') {
        $(".change-appointment-" + param2).show();
      } else if (param1 == 'close') {
        $("#new-date-opd-" + param2).val("");
        $("#new-date-remark-" + param2).val("");
        $(".change-appointment-" + param2).hide();
      }
    }
  </script>

</body>

</html>