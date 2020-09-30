<?php
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
            <a href="index4.php" class="title_link btn btn-primary" type="button">
              <p class="h6">⏎ Return to Radiology Department</p>
            </a>
            <p class="h3 text-dark"><i class="fa fa-list"></i> Radiology:Patient List</p>
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
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>NEWS Rank</th>
                            <th>Dicharge date</th>
                            <th>Dicharge date</th>
                            <th>Payment Compelete</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><a href="" class="btn btn-info">Name FatherName</a></td>
                            <td>Accountant</td>
                            <td>Addis Ababa</td>
                            <td>61</td>
                            <td>4</td>
                            <td>2011/04/25</td>
                            <td>2011/04/25</td>
                            <td>Yes</td>
                            <td><button class="btn-warning">waiting 30min</button></td>
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

</body>

</html>