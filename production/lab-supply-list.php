<?php
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Laboratory Forms");
    ?>
    <style>
        a:hover {
            color: red;
        }
    </style>
</head>

<body class="nav-md">
    <div class="container body">
        <?php
        main_container_top_navigation();
        ?>

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="page-title">
                <div class="title_left">
                    <a href="index5.php" class="title_link btn btn-primary" type="button">
                        <p class="h6">⏎ Return to Laboratory Page</p>
                    </a>
                </div>
            </div>

            <div class="clearfix"></div>
            <!-- top tiles -->
            <div class="row">
                <div class="col-md-6">
                    <div class="x_panel">
                        <div class="x_title">
                            <a href="lab-supply-list.php?type=list" class="patient">
                                <div class="row" style="display: inline-block;">
                                    <p class="h4 text-warning"><i class="fa fa-refresh"></i> Current Lab Supply</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="x_panel">
                        <div class="x_title">
                            <a href="lab-supply-list.php?type=form" class="patient">
                                <div class="row" style="display: inline-block;">
                                    <p class="h4 text-primary"><i class="fa fa-list"></i> Lab Supply Form</p>
                                </div>
                            </a>
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
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
</body>

</html>