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
          <form class="form-horizontal" action="./production/index1.php?type=athealth" method="post" enctype="multipart/form-data">
            <a href="./athealth_login.php">
              <h1>@Health</h1>
            </a>
            <p class="h6 text-muted">@Every Where @Every Time</p>
            <p class="h4">Signin</p>
            <div>
              <input type="text" class="form-control" name="userID" placeholder="Username" required="" />
            </div>
            <div>
              <input type="password" class="form-control" name="password" placeholder="Password" required="" />
            </div>
            <div>
              <button name="submit" type="submit" value="submit" class="btn btn btn-primary">
                Signin
              </button>
              <a href="./athealth_register.php" type="button" class="btn btn-info">
                <h6>Don't have a account , Register here! </h6>
              </a>
            </div>
            <div>

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

          <table class="table table-striped table-bordered">
            <thead>

            </thead>
            <tbody>
              <tr>
                <th colspan="5">Test Credentials</th>
              </tr>
              <th>Job</th>
              <th>username</th>
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
                <td>Patient</td>
                <td>pat123</td>
                <td>pass123</td>
              </tr>
              <tr>
                <td>Pharmacy, Drug store</td>
                <td>phar123</td>
                <td>pass123</td>
              </tr>
            </tbody>
          </table>
        </section>
      </div>
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