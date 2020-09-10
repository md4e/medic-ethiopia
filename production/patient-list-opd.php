<?php
include_once "./lab-chemistry-test-list.php";
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
                            <th>Name</th>
                            <th>Age</th>
                            <th>Phone No.</th>
                            <th>Appointment date</th>
                            <th>New Appointment date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><a href="" class="btn btn-info">Name FatherName</a></td>
                            <td>61</td>
                            <td>0911123456</td>
                            <td>2011/04/25</td>
                            <td>
                              <div>
                                <div class="custom-control custom-checkbox custom-control-inline m-2">
                                  <input name="change-appointment_0" id="change-appointment_0" type="checkbox" aria-describedby="change-appointmentHelpBlock" class="custom-control-input" value="new-date">
                                  <label for="change-appointment_0" class="custom-control-label">Change new data</label>
                                </div>
                                <div class="change-appointment" style="display:none">
                                  <input id="new-date-opd" name="new-date-opd" type="date" class="form-control" required="required">
                                  <textarea id="new-date-remark" name="new-date-remark" placeholder="Write Reason for new change to send to patient" cols="4" rows="3" class="form-control"></textarea>
                                  <button class="btn-sm btn-success">Save date and nottify</button>
                                </div>
                              </div>
                            </td>
                          </tr>
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