<?php
include_once "./lab-chemistry-test-list.php";
include_once "./config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Blood Request");
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
                        <p class="h3 text-danger"><i class="fa fa-flask"></i> LAB:Blood Request</p>
                    </div>
                    <div class="title_center">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Enter Patient information and search with id</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form id="xxxx" data-parsley-validate class="form-horizontal form-label-left" action="./core.php">
                                    <div class="item form-group">
                                        <label for="card-number" class="col-form-label col-md-3 col-sm-3 label-align">Card No.</label>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="input-group" method="post" action="paitent-search.php">
                                                <input id="card-number" name="card-number" placeholder="Enter Patient by Card No." type="text" class="form-control" required="required">
                                                <input type="submit" value="Patient Search" class="btn btn-success">
                                                <span id="patient-allergiesHelpBlock" class="form-text text-muted">If
                                                    patient is registered in
                                                    New platform filled below will be filled by data result of the
                                                    search request</span>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="lab-blood-request-form.php">
                                    <div class="item form-group">
                                        <label for="blood-request-form-date" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="blood-request-form-date" name="blood-request-form-date" type="date" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="blood-request-form-time" class="col-form-label col-md-3 col-sm-3 label-align">Time of Collection</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="blood-request-form-time" name="blood-request-form-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="blood-request-form-result-release" class="col-form-label col-md-3 col-sm-3 label-align"">Time of result release</label>
                                        <div class=" col-md-6 col-sm-6">
                                            <input id=" blood-request-form-collection-time" name="blood-request-form-collection-time" type="time" value="00:00" class="form-control" required="required">
                                    </div>
                            </div>
                            <?php foreach ($bloodRequestFormCrcAndFfpArray as $key0 => $value0) {
                                echo '
                                <div class="item form-group">
                                <div class="card-box table-responsive">
                                <p class="text-muted font-13 m-b-30"></p>
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th scope="col" colspan="5"><h3>' . $value0 . '</h3></th>
                                </tr>
                                <tr>
                                <th scope="col" style="font-weight:bold">Blood Group</th>
                                <th scope="col" style="font-weight:bold">Rh factor</th>
                                <th scope="col" style="font-weight:bold">Number of Units Requested</th>
                                <th scope="col" style="font-weight:bold">Number of Units Supplied</th>
                                <th scope="col" style="font-weight:bold">Remark</th>
                                </tr>
                                </thead><tbody>';
                                echo '<tr>';
                                echo '<td><select id="blood-request-test-blood-group" name="blood-request-test-blood-group" class="custom-select" required="required">';
                                foreach ($bloodGroupArray as $key => $value) {
                                    echo '<option value="'.$key.'">' . $value . '</option>';
                                }
                                echo '</select></td>';
                                echo '<td><select id="blood-request-test-rh-factor" name="blood-request-test-rh-factor" class="custom-select" required="required">';
                                foreach ($bloodRhFactorArray as $key => $value) {
                                    echo '<option value="'.$key.'">' . $value . '</option>';
                                }
                                echo '</select></td>';
                                echo '<td class="list-td"><input id="blood-request-test-' . $value0 . '-' . $key0 . '-' . $key .
                                '-0" name="blood-request-test-start-' . $key0 . '-' . $key . '-0" type="number" class="form-control" required="required"></td>';
                                echo '<td class="list-td"><input id="blood-request-test-' . $value0 . '-' . $key0 . '-' . $key .
                                '-1" name="blood-request-test-start-' . $key0 . '-' . $key . '-1" type="number" class="form-control" required="required"></td>';
                                echo '<td class="list-td"><input id="blood-request-test-' . $value0 . '-' . $key0 . '-' . $key .
                                '-2" name="blood-request-test-start-' . $key0 . '-' . $key . '-2" type="text" class="form-control" required="required"></td>';
                                echo '</tr>';
                                echo '</tbody></table></div></div>';
                            }
                            ?>

                            <div class="item form-group">
                                <div class="card-box table-responsive">
                                    <p class="text-muted font-13 m-b-30">
                                    </p>
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th scope="col" colspan="4">
                                                    <h3>Blood Components</h3>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="col" style="font-weight:bold">Blood Type</th>
                                                <th scope="col" style="font-weight:bold">Number of Units Requested</th>
                                                <th scope="col" style="font-weight:bold">Number of Units Supplied</th>
                                                <th scope="col" style="font-weight:bold">Remark</th>
                                            </tr>
                                        <tbody>

                                            <?php

                                            foreach ($bloodRequestFormOtherBloodComponentsArray as $key => $value) {
                                                //echo '<tr><td class="list-td"><a href="#" >' . $value . '</a></td>';
                                                echo '<tr><td class="list-td">' . $value . '</td>';
                                                echo '<td class="list-td"><input id="blood-request-other-test-' . $key . '-0" name="blood-request-other-test-' . $key . '-0" type="number" class="form-control" required="required"></td>';
                                                echo '<td class="list-td"><input id="blood-request-other-test-' . $key . '-1" name="blood-request-other-test-' . $key . '-1" type="number" class="form-control" required="required"></td>';
                                                echo '<td class="list-td"><input id="blood-request-other-test-' . $key . '-2" name="blood-request-other-test-' . $key . '-2" type="text" class="form-control" required="required"></td>';
                                                //echo '<td class="list-td"><textarea id="blood-request-test-' . $value0 . '-' . $key . '" placeholder="Write remark" name="blood-request-test-' . $value0 . '-' . $key . '" cols="10" rows="3" class="form-control" aria-describedby="patient-allergies-if-yesBlock" required="required"></textarea></td>';
                                                echo '</tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
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