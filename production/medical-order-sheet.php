<?php
include_once "./lab-all-test-defines.php";
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Order Sheet");
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
                        <p class="h3 text-primary"> <i class="fa fa-book"></i> Order Sheet</p>
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
                                show_patient_form('medical-order-sheet.php');
                                ?>
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="patient-queue.php">
                                    <div class="item form-group">
                                        <label for="record-date" class="col-form-label col-md-3 col-sm-3 label-align">Date and time</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="record-date" name="date-of-vital-sign-record-date" type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-order-sheet-time" class="col-form-label col-md-3 col-sm-3 label-align">Time</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-order-sheet-order-remark" class="col-form-label col-md-3 col-sm-3 label-align">Order</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="order-remark" name="order-remark" cols="40" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-order-sheet-treatement-remark" class="col-form-label col-md-3 col-sm-3 label-align">Treatment</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="treatement-remark" name="treatement-remark" cols="40" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="problem-list" class="col-form-label col-md-3 col-sm-3 label-align">Problem List</label>
                                        <div class="col-md-6 col-sm-6">
                                            <a type="text" id="add-problem" class="btn btn-warning" style="color:white" value=""><i class="fa fa-plus-circle"></i>Add problem </a>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="offset-3 col-md-6 col-sm-6" id="problem-container">
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
                                        <!-- <div class="col-md-4 col-sm-4">
                                            <input id="order-sheet-diet-other" name="order-sheet-diet-other" placeholder="Write here if diet is Other" type="text" class="form-control">
                                        </div> -->
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
                                        <label for="order-sheet-nursing-care" class="col-form-label col-md-3 col-sm-3 label-align">Nursing Care</label>
                                        <div class="col-md-4 col-sm-4">
                                            <select id="order-sheet-nursing-care" name="order-sheet-nursing-care" class="custom-select" required="required">
                                                <option value="unknown">Choose Nursing Care</option>
                                                <option value="nursing-care-vsign">Nursing Care Vital Sign</option>
                                                <option value="regular-vsign">Regular Vital Sign</option>
                                                <option value="wound-care">Wound Care</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <!-- <div class="col-md-4 col-sm-4">
                                            <input id="order-sheet-nursing-care-other" name="order-sheet-nursing-care-other" placeholder="Write here if Nusing Care is Other" type="text" class="form-control" required="required">
                                        </div> -->
                                    </div>
                                    <div class="item form-group">
                                        <label for="order-sheet-avail-medication" class="col-form-label col-md-3 col-sm-3 label-align">Available Medications</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="order-sheet-avail-medication" name="order-sheet-avail-medication" class="custom-select" required="required" aria-describedby="order-sheet-avail-medicationHelpBlock">
                                                <option value="unknown">Choose Medication</option>
                                                <?php

                                                foreach ($medication as $key => $value) {
                                                    echo '<option value="' . $key . '">' . $value . '</option>';
                                                }
                                                ?>


                                                <option value="0">Medication 0</option>
                                                <option value="1">Medication 1</option>
                                            </select>
                                            <span id="order-sheet-avail-medicationHelpBlock" class="form-text text-muted">Choose available medications in the hospital's pharmacy</span>
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

    <script>
         var time = new Date();
        $('#record-date').val(time.toString('YYYY-MM-dd'));

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

        $("input").live("click", function() {
            $("span").text("Clicked ID: " + this.id);
        });


    </script>
</body>

</html>