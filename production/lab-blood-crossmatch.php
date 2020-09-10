<?php
include_once "./lab-chemistry-test-list.php";
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Blood Crossmatch");
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
                        <a href="index5.php" class="title_link btn btn-primary" type="button">
                            <p class="h6">⏎ Return to Laboratory Forms</p>
                        </a>
                        <p class="h3 text-danger"><i class="fa fa-flask"></i> LAB:Blood Crossmatch</p>
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
                        <div class="x_panel all-form-style-blood-lab">
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
                                        <label for="blood-crossmatch-request-date" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="blood-crossmatch-request-date" name="blood-crossmatch-request-date" type="date" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="blood-crossmatch-request-time" class="col-form-label col-md-3 col-sm-3 label-align">Time</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="blood-crossmatch-request-time" name="blood-crossmatch-request-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="blood-crossmatch-request-specimen" class="col-form-label col-md-3 col-sm-3 label-align">Reason for transfusion</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="blood-crossmatch-request-specimen" name="blood-crossmatch-request-specimen" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="blood-crossmatch-request-specimen-collection" class="col-form-label col-md-3 col-sm-3 label-align">Type of Specimen Collection</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="blood-crossmatch-request-specimen-collection" name="blood-crossmatch-request-specimen-collection" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="blood-crossmatch-request-result-release" class="col-form-label col-md-3 col-sm-3 label-align">Time of result release</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="blood-crossmatch-request-specimen-collection-time" name="blood-crossmatch-request-specimen-collection-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="blood-crossmatch-request-specimen-collection" class="col-form-label col-md-3 col-sm-3 label-align">Blood bag Number</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="blood-crossmatch-request-specimen-collection" name="blood-crossmatch-request-specimen-collection" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="blood-crossmatch-request-result-release" class="col-form-label col-md-3 col-sm-3 label-align">Blood bag Exp</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="blood-crossmatch-request-specimen-collection" name="blood-crossmatch-request-specimen-collection" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="blood-crossmatch-request-result-release" class="col-form-label col-md-3 col-sm-3 label-align">Blood group</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="custom-select" required="required">
                                                <?php

                                                foreach ($bloodRequestFormArray  as $key => $value) {
                                                    echo '<option value="' . $key . '">' . $value . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="x_title">
                                                <p class="h4"> Emergency crossmatch</p>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="blood-crossmatch-request-result-release" class="col-form-label col-md-3 col-sm-3 label-align">Result</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="blood-crossmatch-request-specimen-collection" name="blood-crossmatch-request-specimen-collection" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="blood-crossmatch-request-specimen-collection" class="col-form-label col-md-3 col-sm-3 label-align">Test Done By</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="blood-crossmatch-request-specimen-collection" name="blood-crossmatch-request-specimen-collection" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="blood-crossmatch-request-result-release" class="col-form-label col-md-3 col-sm-3 label-align">Time of result release</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="blood-crossmatch-request-specimen-collection-time" name="blood-crossmatch-request-specimen-collection-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="blood-crossmatch-request-result-release" class="col-form-label col-md-3 col-sm-3 label-align">Reviewed By</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="blood-crossmatch-request-specimen-collection" name="blood-crossmatch-request-specimen-collection" type="text" class="form-control" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="x_title">
                                                <p class="h4"> Test tube method</p>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="blood-crossmatch-request-result-release" class="col-form-label col-md-3 col-sm-3 label-align">Result</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="blood-crossmatch-request-specimen-collection" name="blood-crossmatch-request-specimen-collection" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="blood-crossmatch-request-specimen-collection" class="col-form-label col-md-3 col-sm-3 label-align">Test Done By</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="blood-crossmatch-request-specimen-collection" name="blood-crossmatch-request-specimen-collection" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="blood-crossmatch-request-result-release" class="col-form-label col-md-3 col-sm-3 label-align">Time of result release</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="blood-crossmatch-request-specimen-collection-time" name="blood-crossmatch-request-specimen-collection-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="blood-crossmatch-request-result-release" class="col-form-label col-md-3 col-sm-3 label-align">Reviewed By</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="blood-crossmatch-request-specimen-collection" name="blood-crossmatch-request-specimen-collection" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="blood-crossmatch-request-result-release" class="col-form-label col-md-3 col-sm-3 label-align">Comment</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
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