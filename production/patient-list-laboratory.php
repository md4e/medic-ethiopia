<?php
include_once "./lab-chemistry-test-list.php";
include_once "./config.php";
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
                            <th>Name</th>
                            <th>Age</th>
                            <th>NEWS Rank</th>
                            <th>Laboratory</th>
                            <th>Queue Number</th>
                            <th>Payment Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                            $requestingLab = [0=>"Stool Examination",1=>"Serology & Coagulation",2=>"Radiology (x-ray)",3=>"@Chemistry Lab", 4=>"@Blood Crossmatch"];
                            $payment = [0=>["Complete", "btn-success"], 1=>["Processing","btn-warning"], 2=>["Free Pass","btn-info"]];
                            for ($i=0; $i < 50; $i++) {
                                $index = rand(0,4);
                                $index2 = rand(0,2);
                            echo '
                          <tr>
                            <td><a href="" class="btn btn-info">Name Lastname</a></td>
                            <td>'.($index*20 + $index2).'</td>
                            <td>4</td>
                            <td>'.$requestingLab[$index].'</td>
                            <td>'.(($i*$index)+10).'  <button class="btn-danger"> <i class="fa fa-bell"></i> waiting '.($index*10).'min</button></td>
                            <td><button class="'.$payment[$index2][1].'">'.$payment[$index2][0].'</button></td>
                          </tr>';
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