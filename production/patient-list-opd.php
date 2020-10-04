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
            <p class="h3">OPD:Patients List</p>
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
                          <th>Name</th>
                          <th>Directed to</th>
                          <th>Registered On</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        $triage_list = new MeTriageQueue('*');
                        $result = $triage_list->getResultSet();
                        $result->data_seek(0);
                        while ($row2 = $result->fetch_object()) {
                          if ($row2->department == 'Emergency') {
                            continue;
                          }
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
                          echo '<td>' . $row2->department . '</td>';
                          echo '<td>' . $row2->requested_on . '</td>';
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