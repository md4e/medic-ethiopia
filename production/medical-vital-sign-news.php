<?php
include_once "./lab-chemistry-test-list.php";
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Vital Sign");
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
                        <p class="h4 text-primary"><i class="fa fa-book"></i> Vital Sign (NEWS)</p>
                    </div>
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

                                    <div class="item form-group" style="text-align:right;padding:0em">
                                        <div id="txt" style="text-align:right;padding:0em"></div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-vital-sign-record-date" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="date-of-vital-sign-record-date" name="date-of-vital-sign-record-date" type="date" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-vital-sign-record-time" class="col-form-label col-md-3 col-sm-3 label-align">Time</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="date-of-vital-sign-record-time" name="date-of-vital-sign-record-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label for="date-of-vital-sign-record-bp" class="col-form-label col-md-3 col-sm-3 label-align">Blood Pressure (B/P)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="bp-systolic" name="bp-systolic" placeholder="Systolic" type="number" min="0" class="form-control" required="required">
                                            <input id="bp-diastolic" name="bp-diastolic" placeholder="Diastolic" type="number" min="0" class="form-control" required="required">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="col-6 bp-alert-message-systolic">
                                                <p></p>
                                            </div>
                                            <div class="col-6 bp-alert-message-diastolic">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-vital-sign-record-pulse-rate" class="col-form-label col-md-3 col-sm-3 label-align">Pluse Rate (beats/minutes)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="pulse-rate" name="pulse-rate" placeholder="pulse rate" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-vital-sign-record-respiration" class="col-form-label col-md-3 col-sm-3 label-align">Respiration (breaths/minute)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="resipiration-rate" name="resipiration-rate" placeholder="resipiration" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-vital-sign-record-temprature" class="col-form-label col-md-3 col-sm-3 label-align">Temprature (&#8451;)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="temprature" name="temprature" placeholder="temprature" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-vital-sign-record-spo2" class="col-form-label col-md-3 col-sm-3 label-align">Oxygen saturation (SPO<sub>2</sub>)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="spo2" name="spo2" placeholder="SPO2" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-vital-sign-rbs" class="col-form-label col-md-3 col-sm-3 label-align">RBS (Random Blood Sugar)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="rbs" name="rbs" placeholder="Random Blood Sugar" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label for="date-of-vital-sign-record-remark" class="col-form-label col-md-3 col-sm-3 label-align">Remark</label>
                                        <div class="col-md-6 col-sm-6" style="border:1px dotted;">
                                            <p text="mute"> Here an algorithm will assist to give remarks based on the data input above. Additional Remarks are available here.</p>
                                            <ul style="list-style-type:none;">
                                                <li><strong>B/P</strong>: NORMAL/Elevated/Hypertension Stage 1/Hypertension Stage 2/Hypertensive crisis </li>
                                                <li><strong>Pluse</strong>: NORMAL/ABNORMAL </li>
                                                <li><strong>Respiration</strong>: NORMAL/ABNORMAL </li>
                                                <li><strong>Temprature </strong>: NORMAL/ABNORMAL</li>
                                                <li><strong>Respiration: </strong>Below normal/Normal/Above normal</li>
                                                <li><strong>ALERT: </strong>A timer of Max 30 Minutes reporting is alerted</li>
                                            </ul>
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