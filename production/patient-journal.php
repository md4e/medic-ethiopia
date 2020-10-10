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
            <!-- top tiles -->
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <?php
                            show_patient_form('patient-journal.php');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <a href="patient-journal-bio.php" class="patient">
                                <div class="row" style="display: inline-block;">
                                    <p class="h4 text-primary"><i class="fa fa-user"></i> Patient Bio</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <a href="patient-journal-full.php" class="patient">
                                <div class="row" style="display: inline-block;">
                                    <p class="h4 text-primary"><i class="fa fa-pencil"></i> Patient Journal</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <a href="patient-journal-medication.php" class="patient">
                                <div class="row" style="display: inline-block;">
                                    <p class="h4 text-primary"><i class="fa fa-cubes"></i> Patient Medication</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <a href="patient-journal-nursing-care.php" class="patient">
                                <div class="row" style="display: inline-block;">
                                    <p class="h4 text-primary"><i class="fa fa-scissors"></i> Patient Nursing Care</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <a href="patient-journal-lab-request.php" class="patient">
                                <div class="row" style="display: inline-block;">
                                    <p class="h4 text-primary"><i class="fa fa-flask"></i> Patient Lab Request</p>
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