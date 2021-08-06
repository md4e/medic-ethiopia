<?php
include_once "./production/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  headerLinks("medic-ethiopia", ".");
  ?>
</head>
<style>
  .mybox {
    box-shadow: rgba(0, 0, 0, 0.75) 0px 5px 15px;
    padding: 20px;
    ;

  }
</style>

<body class="login">
  <div>
    <div class="login_wrapper">
      <div class="form login_form">
        <a href="index.php">
          <h3 style="text-align:center;"><i class="fa fa-level-up"></i> www.medic-ethiopia.com</h3>
        </a>
        <section class="login_content mybox">

          <form class="form-horizontal" action="./production/index1.php" method="post" enctype="multipart/form-data">
            <a href="./athealth_login.php">
              <h1>Electronic Medical Record (EMR)</h1>
            </a>
            <p class="h6 ">Online Digital Healthcare System</p>
            <p class="h4">Signin</p>
            <div>
              <select class="form-control" name="hospitalName" style="border-radius: 3px;
              -webkit-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
              -ms-box-shadow: 0 1px 0 #fff,0 -2px 5px rgba(0,0,0,0.08) inset;
              -o-box-shadow: 0 1px 0 #fff,0 -2px 5px rgba(0,0,0,0.08) inset;
              box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
              border: 1px solid #c8c8c8;
              color: #777;
              margin: 0 0 20px;
              width: 100%;">
                <option value="unknown">Choose Hospital</option>
                <?php
                foreach ($hospital as $key => $value) {
                  echo '<option value = "' . $value  . '">' . $value . '</option>';
                }
                ?>
              </select>
            </div>
            <div>
              <input type="text" class="form-control" name="employeeID" placeholder="EmployeeID" required="" />
            </div>
            <div>
              <input type="password" class="form-control" name="employeePassword" placeholder="Password" required="" />
            </div>
            <div>
              <button name="submit" type="submit" value="submit" class="btn btn btn-primary">
                Login
              </button>
            </div>
            <div>
              <table class="table table-striped table-bordered">
                <thead>

                </thead>
                <tbody>
                  <tr>
                    <th colspan="5">Test Credentials <br>(Choose Hospital:Zeweditu)</th>
                  </tr>
                  <th>Job</th>
                  <th>EmployeeID</th>
                  <th>Password</th>
                  <tr>
                    <td>CEOS,Admins</td>
                    <td>ceo123</td>
                    <td>pass123</td>
                  </tr>
                  <tr>
                    <td>Physcians, Doctors</td>
                    <td>doc123</td>
                    <td>pass123</td>
                  </tr>
                  <tr>
                    <td>Labratory, Phlebotomy</td>
                    <td>lab123</td>
                    <td>pass123</td>
                  </tr>
                  <tr>
                    <td>Reception</td>
                    <td>recp123</td>
                    <td>pass123</td>
                  </tr>
                  <tr>
                    <td>Pharmacy, Drug store</td>
                    <td>phar123</td>
                    <td>pass123</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="clearfix"></div>

            <div class="separator">
              <div class="clearfix"></div>
              <br />
              <p>Only Authorized person can use this application. If you are not authorized exit immediately.</p>
              <div>
                <p>Copywrite © 2020<br> Power by: <a href="http://www.abgasim.com" style="font-size:1.1em;font-weight:normal;color:#007bff">ABGASIM</a></p>
              </div>
            </div>
          </form>
        </section>
      </div>

      <!-- <div id="register" class="animate form registration_form">
        <section class="login_content">
          <form>
            <h1>Create Account</h1>
            <div>
              <input type="text" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
              <input type="email" class="form-control" placeholder="Email" required="" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
              <a class="btn btn-default submit" href="index.html">Submit</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Already a member ?
                <a href="#signin" class="to_register"> Log in </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div class="separator">
              <div class="clearfix"></div>
              <br />
              <p>Only Authorized person can use this application. If you are not authorized exit immediately.</p>
              <div>
                <p>Copywrite © 2020<br> Power by: <a href="http://www.medic-ethiopia.com" style="font-size:1.1em;font-weight:normal;color:#007bff">Medic-Ethiopia</a></p>
              </div>
            </div>
            </div>
          </form>
        </section>
      </div> -->
    </div>
  </div>
  <script src="./vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="./vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Parsley -->
  <script src="./vendors/parsleyjs/dist/parsley.min.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="./build/js/custom.min.js"></script>
</body>

</html>