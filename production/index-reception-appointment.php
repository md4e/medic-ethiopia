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
            <a href="index-reception.php" class="title_link btn btn-primary" type="button">
              <p class="h6">⏎ Return to Reception</p>
            </a>
            <p class="h3">Reception: Patients Appointment</p>
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_content">
              <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">
                      <p class="text-muted font-13 m-b-30">

                      </p>

                      <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>CardNo</th>
                            <th>Phone</th>
                            <th>Queue</th>
                            <th>Gender</th>
                            <th>Appointment Date</th>
                            <th>Action</th>
                            <th>Department</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $documentRootPath = $_SERVER['DOCUMENT_ROOT'];
                          include_once $documentRootPath . "/classes/MePatientTable.php";
                          $patients = new MePatientTable('*');
                          $result =  $patients->getResultSet();
                          $result->data_seek(0);
                          $department = [0 => "Medical specialist care", 1 => "Emergency", 2 => "Radiology", 3 => "Anesthesia and intensive", 4 => "Neurology"];
                          while ($rows = $result->fetch_object()) {
                            $index = rand(0, 4);
                            echo '<tr>';
                            echo '<td>' . $rows->patient_first_name . '</td>';
                            echo '<td><a href="./index_patient.php?card-no=' . $rows->patient_card_number . '" class="btn btn-info">' . $rows->patient_card_number . '</a></td>';
                            echo '<td>' . $rows->patient_phone . '</td>';
                            echo '<td>' . $rows->patient_age . '</td>';
                            echo '<td>' . $rows->patient_gender . '</td>';
                            echo '<td>2011/04/25</td>';
                            echo '<td><button class="btn-danger">Cancel Appointment</button></td>';
                            echo '<td>' . $department[$index] . '</td>';
                            echo '</tr>';
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

  <script>
    $(document).ready(function() {
      $("input[name=change-appointment_0]").on("change", function() {
        if (this.checked) {
          $(".change-appointment").show();
        } else {
          $("#new-date-opd").val("");
          $("#new-date-remark").val("");
          $(".change-appointment").hide();

        }
        //$("#" + test).show();
      });
    });
  </script>
</body>

</html>