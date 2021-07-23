<?php
include_once "./lab-all-test-defines.php";
include_once "./config.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Patient Notes and Investigation Summary");
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
                        <a href="index6.php" class="title_link btn btn-primary" type="button">
                            <p class="h6">⏎ Return to Medical Forms</p>
                        </a>
                        <p class="h3 text-primary"> <i class="fa fa-book"></i> Patient Notes and Investigation Summary</p>
                    </div>

                    <div class="title_center">

                    </div>

                    <!-- <div class="title_right">
                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Enter Patient information and search with id</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
<?php
patient_search()
?>
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="patient-queue.php">
                                    <div class="item form-group">
                                        <label for="progress-notes-and-treatment-form-date" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="progress-notes-and-treatment-form-date" name="progress-notes-and-treatment-form-date" type="date" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="progress-notes-and-treatment-form-time" class="col-form-label col-md-3 col-sm-3 label-align">Time</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="progress-notes-and-treatment-form-time" name="progress-notes-and-treatment-form-time" type="time" value="00:00" class="form-control" required="required" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="progress-notes-and-treatment-form-remark" class="col-form-label col-md-3 col-sm-3 label-align">Progess Notes and Treatment</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="remark" name="remark" cols="40" rows="5" class="form-control" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="progress-notes-and-treatment-form-charge" class="col-form-label col-md-3 col-sm-3 label-align">Charge</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="progress-notes-and-treatment-form-charge" name="progress-notes-and-treatment-form-charge" cols="40" rows="5" class="form-control" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Patient have Allergies<sup>*</sup></label>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="progress-notes-and-treatment-form-patient-allergies" id="progress-notes-and-treatment-form-patient-allergies_0" type="checkbox" aria-describedby="progress-notes-and-treatment-form-patient-allergiesHelpBlock" class="custom-control-input" value="0" required="required">
                                                <label for="progress-notes-and-treatment-form-patient-allergies_0" class="custom-control-label">No</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="progress-notes-and-treatment-form-patient-allergies" id="progress-notes-and-treatment-form-patient-allergies_1" type="checkbox" aria-describedby="progress-notes-and-treatment-form-patient-allergiesHelpBlock" class="custom-control-input" value="0" required="required">
                                                <label for="progress-notes-and-treatment-form-patient-allergies_1" class="custom-control-label">Yes</label>
                                            </div>
                                            <select id="progress-notes-and-treatment-form-patient-allergies-type" name="progress-notes-and-treatment-form-patient-allergies-type" class="custom-select" required="required">

                                                <option value="unknown">Choose Allergy</option>
                                                <?php
                                                foreach ($allegies as $key => $value) {
                                                    echo '<option value = "' . $key . '" title="' . $value . '">' . $key . '</option>';
                                                }
                                                ?>
                                            </select>
                                            <span id="progress-notes-and-treatment-form-patient-allergiesHelpBlock" class="form-text text-muted">Check if patient have allergies if yes write in field below</span>
                                            <textarea id="progress-notes-and-treatment-form-patient-allergies-if-yes" placeholder="Write here if Patient have allergies" name="progress-notes-and-treatment-form-patient-allergies-if-yes" cols="40" rows="3" class="form-control" aria-describedby="progress-notes-and-treatment-form-patient-allergies-if-yesBlock" required="required"></textarea>
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <a href="index6.php" type="button" class="btn btn-lg btn-danger">Cancel</a>
                                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                        </div>
                                    </div>

                                </form>

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

    <?php
    include_js();
    ?>
</body>

</html>