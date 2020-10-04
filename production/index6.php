<?php
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Medical Forms");
    ?>
</head>

<body class="nav-md">
  <div class="container body">
        <?php
        main_container_top_navigation();
        ?>

    <!-- page content -->
    <div class="right_col" role="main">
      <!-- top tiles -->
      <?php
      $list = [
        0 => ["name" => "Vital Sign (MEWS)", "link" => "medical-vital-sign-news.php"],
        1 => ["name" => "Order Sheet", "link" => "medical-order-sheet.php"],
        2 => ["name" => "Patient's Progress Notes and Investigation Summary", "link" => "medical-patient-notes-and-investigation-summary.php"],
        3 => ["name" => "Discharge Summary", "link" => "medical-discharge-summary.php"],
        4 => ["name" => "History Sheet", "link" => "medical-history-sheet.php"],
        5 => ["name" => "Respiratory rate Oxygen Saturation & Oxygen Therapy Form", "link" => "medical-respiratory-and-oxygen.php"]

      ];
      foreach ($list as $key => $value) {
        $valueObj = (object)$value;
        echo '
            <div class="row">
              <div class="col-md-6">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="' . $valueObj->link . '" class="laboratory-form">
                      <div class="row" style="display: inline-block;">
                        <p class="h4 text-primary"><i class="fa fa-book"></i> ' . $valueObj->name . '</p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            ';
      }
      ?>
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
  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>
</body>

</html>