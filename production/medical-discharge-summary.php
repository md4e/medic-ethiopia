<?php
include_once "./lab-chemistry-test-list.php";
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Discharge Summary");
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
                        <p class="h3 text-primary"> <i class="fa fa-book"></i> Dischage Summary</p>
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
                                        <label for="discharge-summary-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="discharge-summary-sheet-date" name="discharge-summary-sheet-date" type="date" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="discharge-summary-sheet-time" class="col-form-label col-md-3 col-sm-3 label-align">Time</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="discharge-summary-sheet-time" name="discharge-summary-sheet-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="discharge-summary-sheet-remark" class="col-form-label col-md-3 col-sm-3 label-align">Brief History</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="remark" name="remark" cols="40" rows="5" class="form-control" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="discharge-summary-sheet-remark" class="col-form-label col-md-3 col-sm-3 label-align">Physical Examination</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="remark" name="remark" cols="40" rows="5" class="form-control" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="discharge-summary-sheet-remark" class="col-form-label col-md-3 col-sm-3 label-align">Laboratory Investigation</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="remark" name="remark" cols="40" rows="5" class="form-control" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="discharge-summary-sheet-remark" class="col-form-label col-md-3 col-sm-3 label-align">Course of Treatment</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="remark" name="remark" cols="40" rows="5" class="form-control" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="discharge-summary-sheet-appointment-date" class="col-form-label col-md-3 col-sm-3 label-align">Appointment Date</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="discharge-summary-sheet-appointment-date" name="discharge-summary-sheet-appointment-date" type="date" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="discharge-summary-sheet-appointment-time" class="col-form-label col-md-3 col-sm-3 label-align">Appointment Time</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="discharge-summary-sheet-appointment-time" name="discharge-summary-sheet-appointment-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="discharge-summary-sheet-nursing-care" class="col-form-label col-md-3 col-sm-3 label-align">Appointed To</label>
                                        <div class="col-md-4 col-sm-4">
                                            <select id="discharge-summary-sheet-nursing-care" name="discharge-summary-sheet-nursing-care" class="custom-select" required="required">
                                                <option value="unknown">Choose Appointed to</option>
                                                <option value="dm-clinic">DM Clinc</option>
                                                <option value="art-clinic">ART Clinic</option>
                                                <option value="anc-clinic">ANC Clinic</option>
                                                <option value="neurology-clinic">Neurology Clinic</option>
                                                <option value="cardiac-clinic">Cardiac Clinic</option>
                                                <option value="renal-clinic">Renal Clinic</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <!-- <div class="col-md-4 col-sm-4">
                                            <input id="discharge-summary-sheet-nursing-care-other" name="discharge-summary-sheet-nursing-care-other" placeholder="Write here if Nusing Care is Other" type="text" class="form-control" required="required">
                                        </div> -->
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Condition on Discharge</label>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="condition-for-discharge" id="condition-for-discharge_0" type="radio" class="custom-control-input" value="cured" aria-describedby="condition-for-dischargeHelpBlock" required="required">
                                                <label for="condition-for-discharge_0" class="custom-control-label">Cured</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="condition-for-discharge" id="condition-for-discharge_1" type="radio" class="custom-control-input" value="improved" aria-describedby="condition-for-dischargeHelpBlock">
                                                <label for="condition-for-discharge_1" class="custom-control-label">Improved</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="condition-for-discharge" id="condition-for-discharge_2" type="radio" class="custom-control-input" value="same" aria-describedby="condition-for-dischargeHelpBlock">
                                                <label for="condition-for-discharge_2" class="custom-control-label">Same</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="condition-for-discharge" id="condition-for-discharge_3" type="radio" class="custom-control-input" value="dead" aria-describedby="condition-for-dischargeHelpBlock">
                                                <label for="condition-for-discharge_3" class="custom-control-label">Dead</label>
                                            </div>
                                            <span id="condition-for-dischargeHelpBlock" class="form-text text-muted">Choose condition for discharge and fill recommendation</span>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="discharge-summary-sheet-remark" class="col-form-label col-md-3 col-sm-3 label-align">Recommendation</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
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
                    Copyright © 2020 Powered by <a href="http://medic-ethiopia.com" target="blank">Medic-Ethiopia</a>
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