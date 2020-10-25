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
            <a href="index3.php" class="title_link btn btn-primary" type="button">
              <p class="h6">⏎ Return to OPD</p>
            </a>
            <p class="h3">OPD:Patients Appointment</p>
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
                      <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th>Paitent Info</th>
                            <th>Appointment date</th>
                            <th>New Appointment date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $triage_list = new MePatientTable('*');
                          $result = $triage_list->getResultSet();
                          $result->data_seek(0);
                          while ($row2 = $result->fetch_object()) {
                            echo '<tr>';
                            echo '<td>';
                            $patient = new MePatientTable($row2->patient_card_number);
                            echo '<p class="h6 text-primary"><i class="fa fa-user"></i> ' . $patient->getPatientFirstName() . ', Age:' . $patient->getPatientAge() . '</p>';
                            echo '<strong>Card No.:</strong> ' . $row2->patient_card_number . ' ';
                            echo '<p>';
                            echo '<strong>PhoneNr.:</strong> ' . $patient->getPatientPhone() . ' ';
                            echo '<strong>Wereda.:</strong> ' . $patient->getPatientWereda() . ' ';
                            echo '<strong>Kebele.:</strong> ' . $patient->getPatientKebele();

                            // echo '<p><strong><a href="./session.php?patient_card_number=' . $row2->patient_card_number .
                            //   '" type="button" class="btn btn-sm btn-success"><i class="fa fa-arrow-right"></i> Admit</a></strong></p>';
                            echo '</td>';
                            echo '<td>' . date("Y-m-d H:i:s", $row2->patient_registered_date) . '</td>';
                            echo '<td>
                          <div>
                            <div class="custom-control custom-checkbox custom-control-inline m-2">
                              <a href="#" onclick="changeAppointment(\'open\',\'' . $row2->patient_card_number . '\')" name="change-appointment_' . $row2->patient_card_number .
                              '" id="change-appointment_' . $row2->patient_card_number . '" type="button"
                              >Change new date</a>

                            </div>
                            <div class="change-appointment-' . $row2->patient_card_number . '" style="display:none">
                              <input id="new-date-opd-' . $row2->patient_card_number . '" name="new-date-opd-' . $row2->patient_card_number . '" type="date" class="form-control" required="required">
                              <textarea id="new-date-remark-' . $row2->patient_card_number . '" name="new-date-remark-' . $row2->patient_card_number . '" placeholder="Write Reason for new change to send to patient" cols="4" rows="3" class="form-control"></textarea>
                              <a href="#" onclick="changeAppointment(\'close\',\'' . $row2->patient_card_number . '\')" type="button" id="change-appointment-cancel-' . $row2->patient_card_number . '" class="change-appointment-cancel-' . $row2->patient_card_number . ' btn-sm btn-danger">Cancel Change</a>
                              <a href="#" type="button" id="change-appointment-success-' . $row2->patient_card_number . '" class="change-appointment-success-' . $row2->patient_card_number . ' btn btn-sm btn-success">Save date and notify</a>

                            </div>
                          </div>
                        </td>';
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
    function changeAppointment(param1, param2) {
      if (param1 == 'open') {
        $(".change-appointment-" + param2).show();
      }
      else if(param1 == 'close') {
        $("#new-date-opd-" + param2).val("");
        $("#new-date-remark-" + param2).val("");
        $(".change-appointment-" + param2).hide();
      }
    }
  </script>
</body>

</html>