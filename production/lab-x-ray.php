<?php
include_once "./lab-all-test-defines.php";
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("x-ray");
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
                        <a href="index4.php" class="title_link btn btn-primary" type="button">
                            <p class="h6">⏎ Return to Laboratory Forms</p>
                        </a>
                        <p class="h3 text-dark"><i class="fa fa-camera"></i> LAB:X-RAY</p>
                    </div>
                    <div class="title_center">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel all-form-style-lab-x-ray">
                            <div class="x_title">
                                <h2>Enter Patient information and search with id</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form id="xxxx" data-parsley-validate class="form-horizontal form-label-left" action="./core.php">
                                    <div class="item form-group">
                                        <label for="patient-search" class="col-form-label col-md-3 col-sm-3 label-align">Card No.</label>
                                        <div class="col-md-6 col-sm-6">

                                            <div class="input-group" method="post" action="paitent-search.php">
                                                <input id="patient-search" name="patient-search" placeholder="Enter query" type="text" class="form-control" required="required">
                                                <input type="submit" value="Patient Search" class="btn btn-success">
                                                <span id="patient-allergiesHelpBlock" class="form-text text-muted">If
                                                    patient is registered in
                                                    New platform filled below will be filled by data result of the
                                                    search request</span>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="patient-queue.php">
                                    <div class="form-group row">
                                        <label for="xray-request-date" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="xray-request-date" name="xray-request-date" type="date" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="xray-request-time" class="col-form-label col-md-3 col-sm-3 label-align">Time</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="xray-request-time" name="xray-request-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Patient Type</label>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="bed-or-ambulatory-patient" id="bed-or-ambulatory-patient_0" type="radio" class="custom-control-input" value="bed-patient" required="required">
                                                <label for="bed-or-ambulatory-patient_0" class="custom-control-label">Bed Patient</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="bed-or-ambulatory-patient" id="bed-or-ambulatory-patient_1" type="radio" class="custom-control-input" value="ambulatory-patient" required="required">
                                                <label for="bed-or-ambulatory-patient_1" class="custom-control-label">Ambulatory Patient</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="bed-or-ambulatory-patient" id="bed-or-ambulatory-patient_2" type="checkbox" class="custom-control-input" value="ambulatory-patient" required="required">
                                                <label for="bed-or-ambulatory-patient_2" class="custom-control-label">Is Porter Needed?</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="problem-list" class="col-form-label col-md-3 col-sm-3 label-align">Examination Request</label>
                                        <div class="col-md-6 col-sm-6">
                                            <a type="text" id="add-problem" class="btn btn-warning" style="color:white" value=""><i class="fa fa-plus-circle"></i>Add Request</a>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="offset-3 col-md-6 col-sm-6" id="problem-container">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <form action="form_upload.html" class="dropzone"></form>
                                        <label for="xray-request-remark" class="col-form-label col-md-3 col-sm-3 label-align">Upload X-Ray Image</label>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="x_content">
                                                <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p>
                                                <form action="form_upload.html" class="dropzone"></form>
                                                <br />
                                                <br />
                                                <br />
                                                <br />
                                            </div>
                                        </div>


                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <a href="index5.php" type="button" class="btn btn-lg btn-danger">Cancel</a>
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
    <!-- Dropzone.js -->
    <script src="../vendors/dropzone/dist/min/dropzone.min.js"></script>
    <script>
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
                .append("Examination " + i)
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