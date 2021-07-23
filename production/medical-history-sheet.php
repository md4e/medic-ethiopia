<?php
include_once "./lab-all-test-defines.php";
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("History Sheet");
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
                        <a href="patient-journal-full.php" class="title_link btn btn-primary" type="button">
                            <p class="h6">⏎ Return Patient Journal</p>
                        </a>
                        <p class="h3 text-primary"> <i class="fa fa-book"></i> History Sheet</p>
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
                                <?php
                                show_patient_form('medical-history-sheet.php');
                                ?>
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    <div class="item form-group">
                                        <label for="record-date" class="col-form-label col-md-3 col-sm-3 label-align">Date and time</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="record-date" name="date-of-vital-sign-record-date" type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-order-sheet-chief-compliant" class="col-form-label col-md-3 col-sm-3 label-align">Chief Compliant</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="chief-compliant" name="chief-compliant" placeholder="" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label for="date-of-order-sheet-chief-compliant" class="col-form-label col-md-3 col-sm-3 label-align">General Appearance</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="chief-compliant" name="chief-compliant" cols="40" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-history-sheet-record-bp" class="col-form-label col-md-3 col-sm-3 label-align">Blood Pressure (B/P)</label>
                                        <div class="col-md-2 col-sm-2">
                                            <input id="bp-systolic" name="bp-systolic" placeholder="Systolic" type="number" min="0" class="form-control" required="required">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <input id="bp-diastolic" name="bp-diastolic" placeholder="Diastolic" type="number" min="0" class="form-control" required="required">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <input id="bp-diastolic" name="bp-diastolic" placeholder="Diastolic" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-history-sheet-record-pulse-rate" class="col-form-label col-md-3 col-sm-3 label-align">Pluse Rate (beats/minutes)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="pulse-rate" name="pulse-rate" placeholder="pulse rate" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-history-sheet-record-respiration" class="col-form-label col-md-3 col-sm-3 label-align">Respiration (breaths/minute)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="resipiration-rate" name="resipiration-rate" placeholder="resipiration" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-history-sheet-record-temprature" class="col-form-label col-md-3 col-sm-3 label-align">Temprature (&#8451;)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="temprature" name="temprature" placeholder="temprature" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-history-sheet-record-spo2" class="col-form-label col-md-3 col-sm-3 label-align">Oxygen saturation (SPO<sub>2</sub>)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="spo2" name="spo2" placeholder="SPO2" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-history-sheet-rbs" class="col-form-label col-md-3 col-sm-3 label-align">Blood Glucose Level (BGL)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="rbs" name="rbs" placeholder="Random Blood Sugar" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <!-- <div class="item form-group">
                                        <label for="order-sheet-physical-examination" class="col-form-label col-md-3 col-sm-3 label-align">Pertient Finding</label>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input name="ospe-pertinet" id="ospe-pertinet_0" type="radio" aria-describedby="ospe-pertinetHelpBlock" class="custom-control-input" value="normal">
                                                    <label for="ospe-pertinet_0" class="custom-control-label">NORMAL</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input name="ospe-pertinet" id="ospe-no-pertinet_1" type="radio" aria-describedby="ospe-no-pertinetHelpBlock" class="custom-control-input" value="abnormal">
                                                    <label for="ospe-no-pertinet_1" class="custom-control-label">ABNORMAL</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="item form-group physical-examination">
                                        <div class="offest-12 col-md-12 col-sm-12">
                                            <div class="item form-group">
                                                <label for="date-of-history-sheet-heent" class="col-form-label col-md-3 col-sm-3 label-align">Head,Ear,Eyes,Neck,&Throat (HEENT) </label>
                                                <div class="col-md-3 col-sm-3">
                                                    <input id="heent" name="heent" placeholder="" type="text" class="form-control">
                                                </div>
                                                <?php normalAbNormal('heent'); ?>
                                            </div>
                                            <div class="item form-group">
                                                <label for="date-of-history-sheet-lg" class="col-form-label col-md-3 col-sm-3 label-align">Lymphoglandular System (LS)</label>
                                                <div class="col-md-3 col-sm-3">
                                                    <input id="lg" name="lg" placeholder="" type="text" class="form-control">
                                                </div>
                                                <?php normalAbNormal('lg'); ?>
                                            </div>
                                            <div class="item form-group">
                                                <label for="date-of-history-sheet-chest" class="col-form-label col-md-3 col-sm-3 label-align">Chest</label>
                                                <div class="col-md-3 col-sm-3">
                                                    <input id="chest" name="chest" placeholder="" type="text" class="form-control">
                                                </div>
                                                <?php normalAbNormal('chest'); ?>
                                            </div>
                                            <div class="item form-group">
                                                <label for="date-of-history-sheet-cvs" class="col-form-label col-md-3 col-sm-3 label-align">Cardio Vascular System (CVS)</label>
                                                <div class="col-md-3 col-sm-3">
                                                    <input id="cvs" name="cvs" placeholder="" type="text" class="form-control">
                                                </div>
                                                <?php normalAbNormal('cvs'); ?>
                                            </div>
                                            <div class="item form-group">
                                                <label for="date-of-history-sheet-abdomen" class="col-form-label col-md-3 col-sm-3 label-align">Abdomen</label>
                                                <div class="col-md-3 col-sm-3">
                                                    <input id="abdomen" name="abdomen" placeholder="" type="text" class="form-control">
                                                </div>
                                                <?php normalAbNormal('abdomen'); ?>
                                            </div>
                                            <div class="item form-group">
                                                <label for="date-of-history-sheet-gus" class="col-form-label col-md-3 col-sm-3 label-align">GenitoUrinary System</label>
                                                <div class="col-md-3 col-sm-3">
                                                    <input id="gus" name="gus" placeholder="" type="text" class="form-control">
                                                </div>
                                                <?php normalAbNormal('gus'); ?>
                                            </div>
                                            <div class="item form-group">
                                                <label for="date-of-history-sheet-mss" class="col-form-label col-md-3 col-sm-3 label-align">Musculoskeletal System</label>
                                                <div class="col-md-3 col-sm-3">
                                                    <input id="mss" name="mss" placeholder="" type="text" class="form-control">
                                                </div>
                                                <?php normalAbNormal('mss'); ?>
                                            </div>
                                            <div class="item form-group">
                                                <label for="date-of-history-sheet-igs" class="col-form-label col-md-3 col-sm-3 label-align">Integumentary system</label>
                                                <div class="col-md-3 col-sm-3">
                                                    <input id="igs" name="igs" placeholder="" type="text" class="form-control">
                                                </div>
                                                <?php normalAbNormal('igs'); ?>
                                            </div>
                                            <div class="item form-group">
                                                <label for="date-of-history-sheet-cns" class="col-form-label col-md-3 col-sm-3 label-align">Central Nervous system (CNS)</label>
                                                <div class="col-md-3 col-sm-3">
                                                    <input id="cns" name="cns" placeholder="" type="text" class="form-control">
                                                </div>
                                                <?php normalAbNormal('cns'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-order-sheet-assessment" class="col-form-label col-md-3 col-sm-3 label-align">Assessment</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="assessment" name="assessment" cols="40" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-order-sheet-investigation-sent" class="col-form-label col-md-3 col-sm-3 label-align">Investigation Sent</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="investigation-sent" name="investigation-sent" cols="40" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-order-sheet-plan" class="col-form-label col-md-3 col-sm-3 label-align">Plan</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="plan" name="plan" cols="40" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-order-sheet-remark" class="col-form-label col-md-3 col-sm-3 label-align">Other Remarks</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>

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
    <script>
        $(function() {
            $('input:radio').change(function() {
                var temp = this.id;
                var inputDisable = temp.split('_')[0];
                var choose = temp.split('_')[1];
                if (choose == '0') {
                    $("#" + inputDisable).prop("disabled", true);
                } else if (choose == '1') {
                    $("#" + inputDisable).prop("disabled", false);
                }
            });
        });
        var time = new Date();
        $('#record-date').val(time.toString('YYYY-MM-dd'));
    </script>
</body>

</html>