<?php
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Patient Journal Full");
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
            <?php patient_journal_navigation(); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <?php
                            show_patient_form('patient-journal-full.php');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_SESSION['pID']) && isset($_SESSION['patient_card_number'])) {

            ?>
                <div class="row">
                    <div class="col-md-6" style="background-color: #ffe082;  border-radius:5px; padding:5px">
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="item form-group">
                                <div class="col-md-12 col-sm-12">
                                    <p class="h3 text-primary x_title"> History Sheet
                                    </p>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="record-date" class="col-form-label col-md-3 col-sm-3 label-align">Date and time</label>
                                <div class="col-md-9 col-sm-12">
                                    <input id="record-date" name="date-of-vital-sign-record-date" type="text" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="date-of-order-sheet-chief-compliant" class="col-form-label col-md-3 col-sm-3 label-align">Chief Compliant</label>
                                <div class="col-md-9 col-sm-12">
                                    <input id="chief-compliant" name="chief-compliant" placeholder="" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label for="date-of-order-sheet-chief-compliant" class="col-form-label col-md-3 col-sm-3 label-align">General Appearance</label>
                                <div class="col-md-9 col-sm-12">
                                    <textarea id="chief-compliant" name="chief-compliant" cols="40" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="vital-signs" style="background-color:#c7c7c7; border:1px solid brown;color:black; border-radius:5px; padding:5px">
                                <p class="h4 text-dark">Fetched from Database Vital Signs</p>
                                <div class="item form-group">
                                    <label for="date-of-history-sheet-record-bp" class="col-form-label col-md-3 col-sm-3 label-align" title="Blood Pressure">BP</label>
                                    <div class="col-md-2 col-sm-2">
                                        <input id="bp-systolic" name="bp-systolic" placeholder="Systolic" type="number" min="0" class="form-control" required="required">
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <input id="bp-diastolic" name="bp-diastolic" placeholder="Diastolic" type="number" min="0" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="date-of-history-sheet-record-pulse-rate" class="col-form-label col-md-3 col-sm-3 label-align" title="Pluse Rate (beats/minutes)">PR</label>
                                    <div class="col-md-9 col-sm-12">
                                        <input id="pulse-rate" name="pulse-rate" placeholder="pulse rate" type="number" min="0" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="date-of-history-sheet-record-respiration" class="col-form-label col-md-3 col-sm-3 label-align">Respiration (breaths/minute)</label>
                                    <div class="col-md-9 col-sm-12">
                                        <input id="resipiration-rate" name="resipiration-rate" placeholder="resipiration" type="number" min="0" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="date-of-history-sheet-record-temprature" class="col-form-label col-md-3 col-sm-3 label-align">Temprature (&#8451;)</label>
                                    <div class="col-md-9 col-sm-12">
                                        <input id="temprature" name="temprature" placeholder="temprature" type="number" min="0" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="date-of-history-sheet-record-spo2" class="col-form-label col-md-3 col-sm-3 label-align" title="Oxygen saturation">SPO<sub>2</sub></label>
                                    <div class="col-md-9 col-sm-12">
                                        <input id="spo2" name="spo2" placeholder="SPO2" type="number" min="0" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="date-of-history-sheet-rbs" class="col-form-label col-md-3 col-sm-3 label-align" title="Blood Glucose Level">BGL</label>
                                    <div class="col-md-9 col-sm-12">
                                        <input id="rbs" name="rbs" placeholder="Random Blood Sugar" type="number" min="0" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="item form-group physical-examination">
                                <div class="offest-12 col-md-12 col-sm-12">
                                    <div class="item form-group">
                                        <label for="date-of-history-sheet-heent" class="col-form-label col-md-3 col-sm-3 label-align" title="Head,Ear,Eyes,Neck,&Throat">HEENT</label>
                                        <div class="col-md-3 col-sm-3">
                                            <input id="heent" name="heent" placeholder="" type="text" class="form-control">
                                        </div>
                                        <?php normalAbNormal('heent'); ?>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-history-sheet-lg" class="col-form-label col-md-3 col-sm-3 label-align" title="Lymphoglandular System">LS</label>
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
                                        <label for="date-of-history-sheet-cvs" class="col-form-label col-md-3 col-sm-3 label-align" title="Cardio Vascular System">CVS</label>
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
                                        <label for="date-of-history-sheet-igs" class="col-form-label col-md-3 col-sm-3 label-align">Integumentary System</label>
                                        <div class="col-md-3 col-sm-3">
                                            <input id="igs" name="igs" placeholder="" type="text" class="form-control">
                                        </div>
                                        <?php normalAbNormal('igs'); ?>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-history-sheet-cns" class="col-form-label col-md-3 col-sm-3 label-align" title="Central Nervous system">CNS</label>
                                        <div class="col-md-3 col-sm-3">
                                            <input id="cns" name="cns" placeholder="" type="text" class="form-control">
                                        </div>
                                        <?php normalAbNormal('cns'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="date-of-order-sheet-assessment" class="col-form-label col-md-3 col-sm-3 label-align">Assessment</label>
                                <div class="col-md-9 col-sm-12">
                                    <textarea id="assessment" name="assessment" cols="40" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="date-of-order-sheet-investigation-sent" class="col-form-label col-md-3 col-sm-3 label-align">Investigation Sent</label>
                                <div class="col-md-9 col-sm-12">
                                    <textarea id="investigation-sent" name="investigation-sent" cols="40" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="date-of-order-sheet-plan" class="col-form-label col-md-3 col-sm-3 label-align">Plan</label>
                                <div class="col-md-9 col-sm-12">
                                    <textarea id="plan" name="plan" cols="40" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="date-of-order-sheet-remark" class="col-form-label col-md-3 col-sm-3 label-align">Other Remarks</label>
                                <div class="col-md-9 col-sm-12">
                                    <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-9 col-sm-12">
                                    <a href="patient-journal-full.php" type="button" class="btn btn-lg btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-lg btn-primary">Save History</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6" style="background-color: #dcedc8; border-radius:5px; padding:5px">
                        <div class="item form-group">
                            <div class="col-md-12 col-sm-12">
                                <p class="h3 text-primary x_title"> Order Sheet
                                </p>
                            </div>
                        </div>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="patient-queue.php">
                            <div class="item form-group">
                                <label for="record-date2" class="col-form-label col-md-3 col-sm-3 label-align">Date and time</label>
                                <div class="col-md-9 col-sm-12">
                                    <input id="record-date2" name="date-of-vital-sign-record-date2" type="text" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="date-of-order-sheet-order-remark" class="col-form-label col-md-3 col-sm-3 label-align">Order</label>
                                <div class="col-md-9 col-sm-12">
                                    <textarea id="order-remark" name="order-remark" cols="40" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="date-of-order-sheet-treatement-remark" class="col-form-label col-md-3 col-sm-3 label-align">Treatment</label>
                                <div class="col-md-9 col-sm-12">
                                    <textarea id="treatement-remark" name="treatement-remark" cols="40" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="problem-list" class="col-form-label col-md-3 col-sm-3 label-align">Problem List</label>
                                <div class="col-md-9 col-sm-12">
                                    <a type="text" id="add-problem" class="btn btn-success" style="color:white" value=""><i class="fa fa-plus-circle"></i> Add Problem </a>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="offset-3 col-md-9 col-sm-12" id="problem-container">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="order-sheet-condition" class="col-form-label col-md-3 col-sm-3 label-align">Conditions</label>
                                <div class="col-md-4 col-sm-4">
                                    <select id="order-sheet-condition" name="order-sheet-condition" class="custom-select">
                                        <option value="unknown">Choose conditions</option>
                                        <option value="critical">Critical</option>
                                        <option value="subcritical">Subcritical</option>
                                        <option value="stable">Stabile</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <!-- <div class="col-md-4 col-sm-4">
                                            <input id="order-sheet-condition-other" name="order-sheet-condition-other" placeholder="Write here is condition is other" type="text" class="form-control">
                                        </div> -->
                            </div>
                            <div class="item form-group">
                                <label for="order-sheet-diet" class="col-form-label col-md-3 col-sm-3 label-align">Diet</label>
                                <div class="col-md-4 col-sm-4">
                                    <select id="order-sheet-diet" name="order-sheet-diet" class="custom-select" required="required">
                                        <option value="unknown">Choose Diet</option>
                                        <option value="tolerated">as tolerated</option>
                                        <option value="free">Salt free</option>
                                        <option value="fatfree">Low fat</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <input id="order-sheet-diet-other" name="order-sheet-diet-other" placeholder="Write here if diet is Other" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="order-sheet-ambulation" class="col-form-label col-md-3 col-sm-3 label-align">Ambulation</label>
                                <div class="col-md-4 col-sm-4">
                                    <select id="order-sheet-ambulation" name="order-sheet-ambulation" class="custom-select">
                                        <option value="unknown">Choose ambulation</option>
                                        <option value="tolerated">As tolerated</option>
                                        <option value="bedrest">bedrest</option>
                                    </select>
                                </div>
                                <!-- <div class="col-md-4 col-sm-4">
                                <input id="order-sheet-ambulation-other" name="order-sheet-ambulation-other" placeholder="Write here if Ambulation is Other" type="text" class="form-control">
                            </div> -->
                            </div>
                            <div class="item form-group">
                                <label for="order-sheet-nursing-care" class="col-form-label col-md-3 col-sm-3 label-align">Vital Sign</label>
                                <div class="col-md-4 col-sm-4">
                                    <select id="order-sheet-nursing-care" name="order-sheet-nursing-care" class="custom-select" required="required">
                                        <option value="unknown">Choose Vital Sign</option>
                                        <option value="bid">BID: Twice a day</option>
                                        <option value="tid">TID: Three times a day</option>
                                        <option value="qid">QID: Four times a day</option>
                                    </select>
                                </div>
                                <!-- <div class="col-md-4 col-sm-4">
                                            <input id="order-sheet-nursing-care-other" name="order-sheet-nursing-care-other" placeholder="Write here if Nusing Care is Other" type="text" class="form-control" required="required">
                                        </div> -->
                            </div>
                            <div class="item form-group">
                                <label for="region" class="col-form-label col-md-3 col-sm-3 label-align">Available Medication Internal</label>
                                <div class="col-md-6 col-sm-12">
                                    <select name="medication-request-all" id="medication-request-list" class="custom-select" required="required">
                                        <option value="medication-serology">Choose you medication internal</option>
                                        <?php
                                        $drugs = new MeDrugListInhouse('*');
                                        $result =  $drugs->getResultSet();
                                        $result->data_seek(0);
                                        while ($rows = $result->fetch_object()) {
                                            echo '<option value="' . $rows->id . '">' . $rows->name . '</option>';
                                        }
                                        ?>

                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="region" class="col-form-label col-md-3 col-sm-3 label-align">Available Medication External</label>
                                <div class="col-md-6 col-sm-12">
                                    <select name="medication-request-all" id="medication-request-list" class="custom-select" required="required">
                                        <option value="medication-serology">Choose you medication External</option>
                                        <?php
                                        foreach ($medication  as $key => $value) {
                                            echo '<option value="' . $key . '">' . $value . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="order-sheet-avail-medication" class="col-form-label col-md-3 col-sm-3 label-align">Medication Dosage</label>
                                <div class="col-md-6 col-sm-12">
                                    <select id="order-sheet-nursing-care" name="order-sheet-nursing-care" class="custom-select" required="required">
                                        <option value="unknown">Dosage</option>
                                        <option value="po">PO: Orally (per oral)</option>
                                        <option value="bid">BID: Twice a day</option>
                                        <option value="tid">TID: Three times a day</option>
                                        <option value="qid">QID: Four times a day</option>
                                        <option value="qhs">QHS: Before bed</option>
                                        <option value="q4h">Q4H: Every 4 hours</option>
                                        <option value="q6h">Q6H: Every 6 hours</option>
                                        <option value="q8h">Q8H: Every 8 hours</option>
                                        <option value="prn">PRN: As needed</option>
                                        <option value="ac">A.C or q.a.c Before meal</option>
                                        <option value="pc">P.C. After meal</option>
                                    </select>

                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-9 col-sm-12">
                                    <a href="patient-journal-full.php" type="button" class="btn btn-lg btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-lg btn-primary">Save Order</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php } ?>

            <!-- http://medic-ethiopia/production/medical-history-sheet.php -->
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
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
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

        // var time = new Date();
        // $('#record-date').val(time.toString('YYYY-MM-dd'));
        // $('#record-date2').val(time.toString('YYYY-MM-dd'));

        setInterval(function() {
            var time = new Date();
            $('#record-date').val(time.toString('YYYY-MM-dd'));
            $('#record-date2').val(time.toString('YYYY-MM-dd'));
        }, 500);
        var i = 1;
        $("#add-problem").click(function() {
            var currentdate = new Date();
            var datetime = "[" + currentdate.getDate() + "-" +
                (currentdate.getMonth() + 1) + "-" +
                currentdate.getFullYear() + " " +
                currentdate.getHours() + ":" +
                currentdate.getMinutes("00") + ":" +
                currentdate.getSeconds() + "] ";
            $("<div />", {
                    "class": "wrapper",
                    id: "product" + i
                })
                .append($("<p />", {
                    type: "text",
                    id: "name" + i,
                    class: "h4"
                }))
                .append("P" + i + ": <small/>Problem " + i + "</small/>")
                .append($("<textarea />", {
                    type: "text",
                    id: "property" + i,
                    cols: "40",
                    rows: "5",
                    class: "form-control",
                    text: datetime + "\n"
                }))
                .appendTo("#problem-container");
            i++;
        });
    </script>
</body>

</html>