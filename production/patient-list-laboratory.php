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
              <p class="h6">⏎ Return to Laboratory Forms</p>
            </a>
            <p class="h3 text-primary"><i class="fa fa-list"></i> Patient List & Queue</p>
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
                            <th>Laboratory</th>
                            <th>Requested On & Types</th>
                            <th>Queue Number</th>
                            <th>Payment Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php

                          $requestingLab = [0 => "Stool Examination", 1 => "Serology & Coagulation", 2 => "Radiology (x-ray)", 3 => "@Chemistry Lab", 4 => "@Blood Crossmatch"];
                          $payment = [0 => ["Complete", "btn-success"], 1 => ["Processing", "btn-warning"], 2 => ["Free Pass", "btn-info"]];
                          $labQueue = new MeLabQueue('*');
                          $result = $labQueue->getResultSet();
                          $result->data_seek(0);
                          while ($row = $result->fetch_object()) {
                            // //var_dump(array_column($GLOBALS['labTableToId'], 'id'));
                            //var_dump($row->lab_request_data);
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
                                foreach ($requestes as $k2 => $v2) {
                                  foreach ($value['data'] as $k3 => $v3) {
                                    if ($k3 == $v2) {
                                      if ($i % 5 ==  0 && $i != 0) {
                                        $break = '<br>';
                                      } else {
                                        $break = '';
                                      }
                                      $requestStr .= '<span style="border:1px solid black; color:#fff; background:#333; border-radius:5px;margin:1px;padding:3px;display:inline;">' . str_replace("\\", "", $v3['name']) . '</span>' . $break;
                                      $i++;
                                    }
                                  }
                                }
                                break;
                              }
                            }
                            $index = rand(0, 4);
                            $index2 = rand(0, 2);
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

                                $finalUrl = '&id=' . $row2->patient_id . '&url='.  $url. '&patient_card_number='. $row2->patient_card_number . '&table='.$tableName .'&data='. $row->lab_request_data;

                                echo '<p><strong><a href="./session.php?selective=' . urlencode($finalUrl) . '" type="button" class="btn btn-sm btn-success"><i class="fa fa-arrow-right"></i> Record ' . $alias . ' Test Result</a></strong></p>';
                                // echo '<p><strong><a href="./session.php?selective=' . Crypter::urlencode_base64_encode_encrypt($finalUrl) . '" type="button" class="btn btn-sm btn-success"><i class="fa fa-arrow-right"></i> Perform ' . $alias . ' Test</a></strong></p>';
                                echo '</td>';
                              }
                            }

                            echo '<td>' . $tableName . '</td>';
                            echo '<td><p class="h5">' . $row->requested_on . '</p><p>' . $requestStr . '</p></td>';
                            echo '<td>' . (($index) + 10) . '  <button class="btn-danger"> <i class="fa fa-bell"></i> waiting ' . ($index * 10) . 'min</button></td>';
                            echo '<td><button class="' . $payment[$index2][1] . '">' . $payment[$index2][0] . '</button></td>';
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

</body>

</html>