<?php
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  headerLinks("All Patients");
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
            <!-- <a href="index.php" class="title_link btn btn-primary" type="button">
              <p class="h6">⏎ Return to Main</p>
            </a> -->
            <p class="h3 text-primary"><i class="fa fa-list"></i> All Patient List</p>
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <!-- <div class="x_title">
                                    <h2>Button Example <small>Users</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                            </div>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div> -->
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
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Admitted Date</th>
                            <th>Dicharge date</th>
                            <th>Payment Compelete</th>
                            <th>Status</th>
                            <th>Department</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $documentRootPath = $_SERVER['DOCUMENT_ROOT'];
                          include_once($documentRootPath . "/classes/medicPatientTable.php");
                          $patients = new medicPatientTable('*');
                          $result =  $patients->getResultSet();
                          $result->data_seek(0);
                          $department = [0 => "OPD", 1 => "Emergency", 2 => "Radiology", 3 => "@Chemistry Lab", 4 => "@Stool Examination"];
                          while ($rows = $result->fetch_object()) {
                            $index = rand(0, 4);
                            echo '<tr>';
                            echo '<td>' . $rows->patient_first_name . '</td>';
                            echo '<td><a href="./index_patient.php?card-no=' . $rows->patient_card_number . '" class="btn btn-info">' . $rows->patient_card_number . '</a></td>';
                            echo '<td>' . $rows->patient_phone . '</td>';
                            echo '<td>' . $rows->patient_age . '</td>';
                            echo '<td>' . $rows->patient_gender . '</td>';
                            echo '<td>2011/04/25</td>';
                            echo '<td>2011/04/25</td>';
                            echo '<td>Yes</td>';
                            echo '<td><button class="btn-warning">waiting 30min</button></td>';
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
  <!-- Datatables -->
  <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>
</body>

</html>