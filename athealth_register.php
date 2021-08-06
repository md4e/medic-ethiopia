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
    .mybox {
        box-shadow: rgba(0, 0, 0, 0.75) 0px 5px 15px;
        padding: 20px;;
    }
    </style>

<body class="login">
  <div>
    <div class="login_wrapper">
      <div class="form login_form">
        <section class="login_content mybox">
          <a href="index.php">
            <h1 style="text-align:center;"> www.medic-ethiopia.com</h1>
          </a>
          <form class="form-horizontal" action="./athealth_register_verify.php" method="post" enctype="multipart/form-data">
            <a href="./athealth_login.php"><h1>@Health</h1></a>
            <p class="h6 text-muted">@Every Where @Every Time</p>
            <p class="h4">Signup</p>
            <div>
              <input type="text" class="form-control" name="name" placeholder="Your Name" required="" />
            </div>
            <div>
              <input type="text" class="form-control" name="fname" placeholder="Father's Name" required="" />
            </div>
            <div>
              <input type="number" class="form-control" name="phone" placeholder="Phone Number" required="" />
            </div>
            <div>
              <input type="password" class="form-control" name="password" placeholder="Password" required="" />
            </div>
            <div>
              <button name="submit" type="submit" value="submit" class="btn btn btn-primary">
              Signup
              </button>
            </div>
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