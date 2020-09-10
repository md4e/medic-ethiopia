<?php
include_once "./lab-chemistry-test-list.php";
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Stool Examination");
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
                        <p class="h3 text-dark"><i class="fa fa-flask"></i> LAB:Stool Examination</p>
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
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="date-of-order-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="date-of-order-sheet-date" name="date-of-order-sheet-date" type="date" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="date-of-order-sheet-time" class="col-form-label col-md-3 col-sm-3 label-align">Time</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="time" value="00:00" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="date-of-order-sheet-remark" class="col-form-label col-md-3 col-sm-3 label-align">Treatment and Observation</label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Color of Specimen</label>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline stool-div-color" style="background:#C5DF71">
                                                    <input name="color-of-Specimen" id="color-of-Specimen_0" type="checkbox" class="custom-control-input" value="green" required="required">
                                                    <label for="color-of-Specimen_0" class="custom-control-label">Greenish</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline stool-div-color" style="background:brown">
                                                    <input style="background-color: brown;" name="color-of-Specimen" id="color-of-Specimen_1" type="checkbox" class="custom-control-input" value="brown" required="required">
                                                    <label for="color-of-Specimen_1" class="custom-control-label">Brownish</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline stool-div-color" style="background:#FFF198">
                                                    <input name="color-of-Specimen" id="color-of-Specimen_2" type="checkbox" class="custom-control-input" value="yellow" required="required">
                                                    <label for="color-of-Specimen_2" class="custom-control-label">Yellowish</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline stool-div-color" style="color:white; background:#333">
                                                    <input name="color-of-Specimen" id="color-of-Specimen_3" type="checkbox" class="custom-control-input" value="black" required="required">
                                                    <label for="color-of-Specimen_3" class="custom-control-label">Blackish</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Choose consistency</label>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="stool-consistency" id="stool-consistency_0" type="checkbox" required="required" class="custom-control-input" value="watery" aria-describedby="stool-consistencyHelpBlock">
                                                    <label for="stool-consistency_0" class="custom-control-label">Watery</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="stool-consistency" id="stool-consistency_1" type="checkbox" required="required" class="custom-control-input" value="soft" aria-describedby="stool-consistencyHelpBlock">
                                                    <label for="stool-consistency_1" class="custom-control-label">Soft</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="stool-consistency" id="stool-consistency_2" type="checkbox" required="required" class="custom-control-input" value="semi-formed" aria-describedby="stool-consistencyHelpBlock">
                                                    <label for="stool-consistency_2" class="custom-control-label">Semi-formed</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="stool-consistency" id="stool-consistency_3" type="checkbox" required="required" class="custom-control-input" value="hard" aria-describedby="stool-consistencyHelpBlock">
                                                    <label for="stool-consistency_3" class="custom-control-label">Hard</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="stool-consistency" id="stool-consistency_4" type="checkbox" required="required" class="custom-control-input" value="gaseous" aria-describedby="stool-consistencyHelpBlock">
                                                    <label for="stool-consistency_4" class="custom-control-label">Gaseous</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="stool-consistency" id="stool-consistency_5" type="checkbox" required="required" class="custom-control-input" value="sem-liquid" aria-describedby="stool-consistencyHelpBlock">
                                                    <label for="stool-consistency_5" class="custom-control-label">Sem-liquid</label>
                                                </div>
                                                <!-- <span id="stool-consistencyHelpBlock" class="form-text text-muted">Choose stool consistency to the closest</span> -->
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="stool-ova-and-parasite-direct" class="col-form-label col-md-3 col-sm-3 label-align">Ova and Parasite Direct</label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea id="stool-ova-and-parasite-direct" name="stool-ova-and-parasite-direct" cols="40" rows="5" class="form-control" required="required"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="stool-wbc" class="col-form-label col-md-3 col-sm-3 label-align">WBC</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="stool-wbc" name="stool-wbc" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="stool-rbc" class="col-form-label col-md-3 col-sm-3 label-align">RBC</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="stool-rbc" name="stool-rbc" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="stool-h.phlori-stool-ag-test" class="col-form-label col-md-3 col-sm-3 label-align">H. Phlori stool Ag Test</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="stool-h.phlori-stool-ag-test" name="stool-h.phlori-stool-ag-test" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="stool-concentration-technique" class="col-form-label col-md-3 col-sm-3 label-align">Concentration Technique</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="stool-concentration-technique" name="stool-concentration-technique" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="stool-occult-blood" class="col-form-label col-md-3 col-sm-3 label-align">Occult Blood</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="stool-occult-blood" name="stool-occult-blood" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="stool-other" class="col-form-label col-md-3 col-sm-3 label-align">Other</label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea id="stool-other" name="stool-other" cols="40" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="stool-comment" class="col-form-label col-md-3 col-sm-3 label-align">Comment</label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea id="stool-comment" name="stool-comment" cols="40" rows="5" class="form-control"></textarea>
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