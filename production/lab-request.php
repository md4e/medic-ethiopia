<?php
include_once "./lab-all-test-defines.php";
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Serology & Coagulation Request");
    ?>
    <style>

    </style>
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

                    </div>

                    <div class="title_center">

                    </div>


                </div>
                <div class="clearfix"></div>
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-patient-search" role="tabpanel" aria-labelledby="nav-patient-search-tab">
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 lab-request" id="div-request-sc">
                                    <div class="x_panel">
                                        <div class="x_titles">
                                            <p class="h4 text-dark"><i class="fa fa-search"></i> Search Patient Here</p>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                </li>
                                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix">

                                            </div>
                                            <?php
                                            show_patient_form('./lab-request.php');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="all-request"  <?php echo isset($_GET['card-no']) ?'' :'style="display:none;"'; ?>>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 lab-request" id="div-request-sc">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <p class="h4 text-danger"><i class="fa fa-flask"></i> LAB:Request Serology & Coagulation <?php echo isset($_GET['card-no']) ? $_GET['card-no'] : ""; ?></p>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a href="./index1.php" class=""><button class="btn btn-md btn-danger"><i class="fa fa-close"></i>Close Patient Session</button></a>

                                                    <!-- <li><a class="collapse-link"><i class="fa fa-chevron-up"></i><button class="btn btn-md btn-danger">CLOSE</button></a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                    </li>
                                                    <li><a class="close-link"><i class="fa fa-close"></i></a> -->
                                                    </li>
                                                </ul>
                                                <div class="clearfix">
                                                    <?php
                                                    show_patient(isset($_GET['card-no']) ? $_GET['card-no'] : null);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="x_content">
                                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="lab-queue.php">
                                                    <div class="item form-group">
                                                        <label for="serology-coagulation-sheet-date" class="col-form-label col-md-2 col-sm-2 label-align">SEROLOGY</label>
                                                        <div class="col-md-8 col-sm-8">
                                                            <?php
                                                            foreach ($serologyTestArray as $key => $value) {
                                                                echo '
                                                        <div class="custom-control custom-checkbox custom-control-inline col-md-4 m-1">
                                                        <input name="lab-serology_" id="lab-serology_' . $key . '" type="checkbox" aria-describedby="lab-serologyHelpBlock" class="custom-control-input" value="0" required="required">
                                                        <label for="lab-serology_' . $key . '" class="custom-control-label" title="homeless">' . $value['name'] . '</label>
                                                    </div>
                                                        ';
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="x_title"></div>
                                                    <div class="item form-group">
                                                        <label for="serology-coagulation-sheet-date" class="col-form-label col-md-2 col-sm-2 label-align">COAGULATION TEST</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <?php
                                                            foreach ($coagulationTestArray as $key => $value) {
                                                                echo '
                                                        <div class="custom-control custom-checkbox custom-control-inline col-md-2 m-1">
                                                        <input name="lab-coagulation" id="lab-coagulation-' . $key . '" type="checkbox" aria-describedby="lab-coagulationHelpBlock" class="custom-control-input" value="0" required="required">
                                                        <label for="lab-coagulation-' . $key . '" class="custom-control-label" title="homeless">' . $value['name'] . '</label>
                                                    </div>
                                                        ';
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>

                                                    <div class="ln_solid"></div>
                                                    <div class="item form-group">
                                                        <div class="col-md-6 col-sm-6">
                                                            <a href="index5.php" type="button" class="btn btn-lg btn-danger">Cancel Request</a>
                                                            <button type="submit" class="btn btn-lg btn-primary">Complete Request</button>

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12 col-sm-12 lab-request" id="div-request-br">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <p class="h4 text-danger"><i class="fa fa-flask"></i> LAB:Blood request <?php echo  isset($_GET['card-no']) ? $_GET['card-no'] : ""; ?></p>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                    </li>
                                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix">
                                                    <?php
                                                    show_patient(isset($_GET['card-no']) ? $_GET['card-no'] : null);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="x_content">
                                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="lab-queue.php">
                                                    <div class="item form-group">
                                                        <label for="serology-coagulation-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Blood request</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <?php
                                                            $bloodTestType = ["CRC", "FFP"];
                                                            foreach ($bloodTestType as $key => $value) {
                                                                echo '
                                                        <div class="custom-control custom-checkbox custom-control-inline col-md-4 m-1">
                                                        <input name="lab-blood" id="lab-blood-' . $key . '" type="checkbox" aria-describedby="lab-bloodHelpBlock" class="custom-control-input" value="0" required="required">
                                                        <label for="lab-blood-' . $key . '" class="custom-control-label" title="blood">' . $value . '</label>
                                                    </div>
                                                        ';
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>

                                                    <div class="ln_solid"></div>
                                                    <div class="item form-group">
                                                        <div class="col-md-6 col-sm-6">
                                                            <a href="index5.php" type="button" class="btn btn-lg btn-danger">Cancel Request</a>
                                                            <button type="submit" class="btn btn-lg btn-primary">Complete Request</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12 col-sm-12 lab-request" id="div-request-hr">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <p class="h4 text-danger"><i class="fa fa-flask"></i> LAB:Hematology Request <?php echo  isset($_GET['card-no']) ? $_GET['card-no'] : ""; ?></p>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                    </li>
                                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix">
                                                    <?php
                                                    show_patient(isset($_GET['card-no']) ? $_GET['card-no'] : null);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="x_content">
                                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="lab-queue.php">
                                                    <div class="item form-group">
                                                        <label for="serology-coagulation-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Hematology Request</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <?php
                                                            foreach ($hematologyTestArray as $key => $value) {
                                                                echo '
                                                        <div class="custom-control custom-checkbox custom-control-inline col-md-4 m-1">
                                                        <input name="lab-hematology" id="lab-hematology-' . $key . '" type="checkbox" aria-describedby="lab-hematologyHelpBlock" class="custom-control-input" value="0" required="required">
                                                        <label for="lab-hematology-' . $key . '" class="custom-control-label" title="hematology">' . $value['name'] . '</label>
                                                    </div>
                                                        ';
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>

                                                    <div class="ln_solid"></div>
                                                    <div class="item form-group">
                                                        <div class="col-md-6 col-sm-6">
                                                            <a href="index5.php" type="button" class="btn btn-lg btn-danger">Cancel Request</a>
                                                            <button type="submit" class="btn btn-lg btn-primary">Complete Request</button>

                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12 col-sm-12 lab-request" id="div-request-cr">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <p class="h4 text-danger"><i class="fa fa-flask"></i> LAB:Chemistry Lab Request <?php echo  isset($_GET['card-no']) ? $_GET['card-no'] : ""; ?></p>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                    </li>
                                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix">
                                                    <?php
                                                    show_patient(isset($_GET['card-no']) ? $_GET['card-no'] : null);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="x_content">
                                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="lab-queue.php">
                                                    <div class="item form-group">
                                                        <label for="serology-coagulation-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Chemistry Request</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <?php
                                                            foreach ($chemistryLabTestArray as $key => $value) {
                                                                echo '
                                                        <div class="custom-control custom-checkbox custom-control-inline col-md-4 m-1">
                                                        <input name="lab-chemistry" id="lab-chemistry-' . $key . '" type="checkbox" aria-describedby="lab-chemistryHelpBlock" class="custom-control-input" value="0" required="required">
                                                        <label for="lab-chemistry-' . $key . '" class="custom-control-label" title="chemistry">' . $value['name'] . '</label>
                                                    </div>
                                                        ';
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>

                                                    <div class="ln_solid"></div>
                                                    <div class="item form-group">
                                                        <div class="col-md-6 col-sm-6">
                                                            <a href="index5.php" type="button" class="btn btn-lg btn-danger">Cancel Request</a>
                                                            <button type="submit" class="btn btn-lg btn-primary">Complete Request</button>

                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12 col-sm-12 lab-request" id="div-request-ur">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <p class="h4 text-danger"><i class="fa fa-flask"></i> LAB:Urine Analysis Request <?php echo  isset($_GET['card-no']) ? $_GET['card-no'] : ""; ?></p>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                    </li>
                                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix">
                                                    <?php
                                                    show_patient(isset($_GET['card-no']) ? $_GET['card-no'] : null);
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="x_content">
                                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="lab-queue.php">
                                                    <div class="item form-group">
                                                        <label for="serology-coagulation-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Urine Analysis Request</label>
                                                        <div class="col-md-6 col-sm-6">
                                                            <?php
                                                            foreach ($urineAnalysisTestArray as $key => $value) {
                                                                echo '
                                                        <div class="custom-control custom-checkbox custom-control-inline col-md-4 m-1">
                                                        <input name="lab-urine-analysis" id="lab-urine-analysis-' . $key . '" type="checkbox" aria-describedby="lab-urineAnalysisHelpBlock" class="custom-control-input" value="0" required="required">
                                                        <label for="lab-urine-analysis-' . $key . '" class="custom-control-label" title="urine-analysis">' . $value['name'] . '</label>
                                                    </div>

                                                        ';
                                                            }
                                                            echo '<div class="col-md-12 m-2"><strong>MICROSCOPIC</strong></div>';
                                                            foreach ($urineAnalysisTestMicroscopyArray as $key => $value) {
                                                                echo '
                                                        <div class="custom-control custom-checkbox custom-control-inline col-md-4 m-1">
                                                        <input name="lab-urine-analysis" id="lab-urine-analysis-' . $key . '" type="checkbox" aria-describedby="lab-urineAnalysisHelpBlock" class="custom-control-input" value="0" required="required">
                                                        <label for="lab-urine-analysis-' . $key . '" class="custom-control-label" title="urine-analysis">' . $value . '</label>
                                                    </div>

                                                        ';
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>

                                                    <div class="ln_solid"></div>
                                                    <div class="item form-group">
                                                        <div class="col-md-6 col-sm-6">
                                                            <a href="index5.php" type="button" class="btn btn-lg btn-danger">Cancel Request</a>
                                                            <button type="submit" class="btn btn-lg btn-primary">Complete Request</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-sr" role="tabpanel" aria-labelledby="nav-sr-tab">
                        </div>
                    </div>
                    <!-- <select id="lab-request-type" name="lab-request-type" class="custom-select">

                            <label><i class="fa fa-flask"></i> Choose Laboratory Request Type</label>
                            <?php
                            $route = [
                                ["class" => "request-sc", "pFaClass" => '<p class="h4 text-danger"><i class="fa fa-flask"></i>', "link" => "lab-request.php", "name" => " LAB - Request Serology & Coagulation"],
                                ["class" => "request-br", "pFaClass" => '<p class="h4 text-danger"><i class="fa fa-flask"></i>', "link" => "lab-blood-request.php?type=request", "name" => " LAB - Blood Request"],
                                ["class" => "request-bx", "pFaClass" => '<p class="h4 text-danger"><i class="fa fa-flask"></i>', "link" => "lab-blood-crossmatch.php?type=request", "name" => " LAB - Blood Crossmatch"],
                                ["class" => "request-hr", "pFaClass" => '<p class="h4 text-danger"><i class="fa fa-flask"></i>', "link" => "lab-hematology-request.php?type=request", "name" => " LAB - Hematology Request"],
                                ["class" => "request-cr", "pFaClass" => '<p class="h4 text-danger"><i class="fa fa-flask"></i>', "link" => "lab-chemistry-request.php?type=request", "name" => " LAB - Chemistry Request"],
                                ["class" => "request-ur", "pFaClass" => '<p class="h4 text-warning"><i class="fa fa-flask"></i>', "link" => "lab-urine-analysis-examination.php?type=request", "name" => " LAB - Urine Analysis Examination"],
                                ["class" => "request-sr", "pFaClass" => '<p class="h4 text-dark"><i class="fa fa-flask"></i>', "link" => "lab-stool-examination.php?type=request", "name" => " LAB - Stool Examination"]
                            ];

                            echo '<option>Choose Labratory Request Type</option>';
                            foreach ($route as $key => $value) {
                                $valueObj = (object)$value;
                                echo '<option  value="div-' . $valueObj->class . '">' . $valueObj->pFaClass . $valueObj->name . '</p></option>';
                            }
                            ?>
                        </select> -->
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

    <?php
    include_js();
    ?>

    <script>
        $(function() {
            $('#lab-request-type').change(function() {
                $('.lab-request').hide();
                $('#' + $(this).val()).show();
            });

        });
    </script>
</body>

</html>