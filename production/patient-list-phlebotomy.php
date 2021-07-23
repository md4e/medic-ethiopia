<?php
$documentRootPath = $_SERVER['DOCUMENT_ROOT'];
include_once $documentRootPath . "/includes/crypter.php";
include_once $documentRootPath . "/production/lab-all-test-defines.php";
include_once $documentRootPath . "/production/config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  headerLinks("Paitent list Lab");
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
            <a href="index5.php" class="title_link btn btn-primary" type="button">
              <p class="h6">⏎ Return to Laboratory Page</p>
            </a>
            <p class="h3 text-primary"><i class="fa fa-list"></i> Phlebotomy List & Queue</p>
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
                            <th>Patient info</th>
                            <th>Send to Laboratory</th>
                            <th>Patient Location</th>
                            <th>Queue Number</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php


                          $phlebotomyStatus =  ["completed" => "btn-success", "not started" => "btn-dark", "request back" => "btn-warning"];
                          $labQueue = new MeLabQueue('*');
                          $result = $labQueue->getResultSet();
                          $result->data_seek(0);
                          while ($row = $result->fetch_object()) {
                            // //var_dump(array_column($GLOBALS['labTableToId'], 'id'));
                            //var_dump($row->lab_request_data);
                            if ($row->phlebotomy_status == "completed")
                            {
                              continue;
                            }
                            $tableName = '';
                            $table = '';
                            $requestStr = '';
                            $requestes = json_decode($row->lab_request_data);

                            $url = '';
                            $alias = '';
                            foreach ($GLOBALS['labTableToId'] as $key => $value) {
                              if ($value['id'] == $row->lab_table_id) {
                                $tableName = $key;
                                $table = $value['data'];
                                $url = $value['url'];
                                $alias = $value['alias'];
                                $i = 0;
                                break;
                              }
                            }
                            $index = rand(0, 4);
                            $index2 = rand(0, 2);
                            $index3 = rand(0, 21);
                            echo '<tr>';
                            $patient = new MePatientTable('*');
                            $result2 = $patient->getResultSet();
                            $result2->data_seek(0);

                            while ($row2 = $result2->fetch_object()) {
                              if ($row->patient_card_number == $row2->patient_card_number) {
                                echo '<td>';
                                echo '<p>
                                <strong>Card No.:</strong> .<u> <strong  style="color:green">' . $row2->patient_card_number . '</strong><br>
                                <strong>Name:</strong> ' . $row2->patient_first_name . ', <strong>Age:</strong>:' . $row2->patient_age . ', Dept: OPD,<br>
                                <strong>PhoneNr.:</strong> ' . $row2->patient_phone;

                                echo '<p><strong><a href="./patient-list-phlebotomy.php?status=' . Crypter::ENCODE('cancel_' . $row->id) . '" type="button" class="btn btn-sm btn-danger"><i class="fa fa-cross"></i> Cancle </a></strong>';
                                echo '<strong><a href="./patient-list-phlebotomy.php?status=' . Crypter::ENCODE('completed_' . $row->id) . '" type="button" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Done </a></strong></p>';

                                echo '</td>';
                              }
                            }
                            if (isset($_GET['status'])) {
                              $newStatus = Crypter::DECODE($_GET['status']);
                              if (strpos($newStatus, 'completed') !== false) {
                                if (strpos($newStatus, strval($row->id)) !== false) {
                                  $row->phlebotomy_status = "completed";
                                  $test = new MeLabQueue($row->id);
                                  $test->setPhlebotomyStatus($row->phlebotomy_status);
                                  $test->updateCurrent();
                                }
                              }else if (strpos($newStatus, 'cancel') !== false) {
                                if (strpos($newStatus, strval($row->id)) !== false) {
                                  $row->phlebotomy_status = "not started";
                                  $test = new MeLabQueue($row->id);
                                  $test->setPhlebotomyStatus($row->phlebotomy_status);
                                  $test->updateCurrent();
                                }
                              }
                            }
                            echo '<td>' . str_replace('-form', '', $tableName) . '</td>';
                            echo '<td>OPD</td>';
                            echo '<td>10</td>';
                            echo '<td><button class="' . $phlebotomyStatus[$row->phlebotomy_status] . '">' . $row->phlebotomy_status . '</button></td>';
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

</body>

</html>