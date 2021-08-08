<?php
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  session_handler();
  headerLinks("Dashboard");
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
            <h3>Doctors - Specialists - Physicians list</h3>
          </div>

          <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right top_search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
          <div class="x_panel">
            <div class="x_content">
              <div class="col-md-12 col-sm-12  text-center">
                <!-- <ul class="pagination pagination-split">
                  <li><a href="#">A</a></li>
                  <li><a href="#">B</a></li>
                  <li><a href="#">C</a></li>
                  <li><a href="#">D</a></li>
                  <li><a href="#">E</a></li>
                  <li>...</li>
                  <li><a href="#">W</a></li>
                  <li><a href="#">X</a></li>
                  <li><a href="#">Y</a></li>
                  <li><a href="#">Z</a></li>
                </ul> -->
              </div>
              <div class="clearfix"></div>
              <?php
              $documentRootPath = $_SERVER['DOCUMENT_ROOT'];
              include_once $documentRootPath . "/classes/MeDoctorsTable.php";
              $doctors = new MeDoctorsTable('*');
              $result =  $doctors->getResultSet();
              $result->data_seek(0);
              while ($rows = $result->fetch_object()) {
                if($rows->id == $_GET['id'])
                echo '
              <div class="col-md-4 col-sm-4  profile_details">
                <div class="well profile_view">
                  <div class="col-sm-12">
                    <h4 class="brief"><i>' . $rows->doctor_speciality . '</i></h4>
                    <div class="left col-sm-7">
                      <h2>' . $rows->doctor_name . '</h2>
                      <ul class="list-unstyled">
                        <li><i class="fa fa-building"></i> ' . $rows->doctor_location . ' </li>
                        <li><i class="fa fa-phone"></i> Office:' . $rows->doctor_phone_office . ' </li>
                        <li><i class="fa fa-phone"></i> Mobile:' . $rows->doctor_phone_mobile . ' </li>
                      </ul>
                    </div>
                    <div class="right col-sm-5 text-center">
                      <img src="../images/user.png" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                  <div class=" bottom text-center">
                    <div class=" col-sm-6 emphasis">
                      <p class="ratings">
                        <a>4.0</a>
                        <a href="#"><span class="fa fa-star"></span></a>
                        <a href="#"><span class="fa fa-star"></span></a>
                        <a href="#"><span class="fa fa-star"></span></a>
                        <a href="#"><span class="fa fa-star"></span></a>
                        <a href="#"><span class="fa fa-star-o"></span></a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
';
              }
              ?>
              <div class="col-md-8 col-sm-8 ">


              <form id="demo-form" data-parsley-validate>

												<label for="heard">Rate your doctor*</label>
												<select id="heard" class="form-control" required>
													<option value="">Choose rate</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
												</select>

												<label for="message"> Put your comment here</label>
												<textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>

												<br />
												<span class="btn btn-primary">Submit</span>

									</form>

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
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>
</body>

</html>