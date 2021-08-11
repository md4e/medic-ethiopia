<?php
include_once "./production/athealth_config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  athealth_headerLinks("medic-ethiopia", ".");
  ?>
</head>
<style>
  body {
    background: url("./images/login-page.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
  }

  .mybox {
    box-shadow: rgba(0, 0, 0, 0.75) 0px 5px 15px;
    padding: 20px;
  }
</style>

<body class="">
  <div>
    <div class="login_wrapper">
      <div class="form login login_form">
        <section class="login_content mybox">
          <a href="index.php">
            <h1 style="text-align:center;"> www.medic-ethiopia.com</h1>
          </a>
          <form class="form-horizontal" action="./athealth_register_verify.php" method="post" enctype="multipart/form-data">
            <a href="./athealth_login.php">
              <h1>@Health</h1>
            </a>
            <p class="h6 text-muted">@Every Where @Every Time</p>
            <p class="h4">Verification</p>
            <?php
            if (isset($_POST) && isset($_POST['phone'])) {
              echo '<h6 class="text-success">Enter Verification code sent to phone Number:' . $_POST['phone'] . ' Or Request a new code</h6>';
            }
            if (isset($_GET['type']) && $_GET['type'] == 'resend-code') {
              echo '<h6 class="text-success">A Verification code is sent to your phone Number, please wait before requesting a new code</h6>';
            }


            ?>
            <div>
              <input type="number" class="form-control" name="code" placeholder="Verification Code" required="" />
            </div>
            <div>
              <button name="verify-code" type="submit" value="submit" class="btn btn btn-success">
                Verify Code
              </button>

            </div>
          </form>
          <form class="form-horizontal" action="./athealth_register_verify.php?type=resend-code" method="post" enctype="multipart/form-data">
            <button name="resend-code" type="submit" value="submit" class="btn btn btn-warning">
              Send New Code
            </button>
          </form>
          <div class="separator">
            <div class="clearfix"></div>
            <br />
            <p>Only Authorized person can use this application. If you are not authorized exit immediately.</p>
            <div>
              <p>Copywrite © 2020<br> Power by: <a href="http://www.abgasim.com" style="font-size:1.1em;font-weight:normal;color:#007bff">ABGASIM</a></p>
            </div>
          </div>
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