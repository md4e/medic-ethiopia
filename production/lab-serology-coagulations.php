<?php
include_once "./lab-chemistry-test-list.php";
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Serology & Coagulation");
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
                        <p class="h3 text-danger"><i class="fa fa-flask"></i> LAB:Serology and Coagulation</p>
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
                        <div class="x_panel  all-form-style-blood-lab">
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
                                    <div class="item form-group">
                                        <label for="serology-coagulation-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="serology-coagulation-sheet-date" name="serology-coagulation-sheet-date" type="date" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="serology-coagulation-sheet-time" class="col-form-label col-md-3 col-sm-3 label-align">Time</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="serology-coagulation-sheet-time" name="serology-coagulation-sheet-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="serology-coagulation-sheet-specimen" class="col-form-label col-md-3 col-sm-3 label-align">Type of Specimen</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="serology-coagulation-sheet-specimen" name="serology-coagulation-sheet-specimen" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="serology-coagulation-sheet-specimen-collection" class="col-form-label col-md-3 col-sm-3 label-align">Type of Specimen Collection</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="serology-coagulation-sheet-specimen-collection" name="serology-coagulation-sheet-specimen-collection" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="serology-coagulation-sheet-result-release" class="col-form-label col-md-3 col-sm-3 label-align">Time of result release</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="serology-coagulation-sheet-specimen-collection-time" name="serology-coagulation-sheet-specimen-collection-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="card-box table-responsive">
                                            <p class="text-muted font-13 m-b-30">
                                            </p>
                                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" colspan="5">SEROLOGY</th>
                                                        </tr>
                                                        <tr>
                                                            <td scope="col">TYPE OF TEST</th>
                                                            <td scope="col" colspan="4">RESULT (verdict and Reference Range (minimum - maximum) </th>
                                                        </tr>
                                                    </thead>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($serologyTestArray as $key => $value) {
                                                        //echo '<tr><td class="list-td"><a href="#" title="' . $value['fullname'] . '">' . $value['name'] . '</a></td>';
                                                        echo '<tr><td class="list-td">' . $value['name'] . '</td>';
                                                        echo '<td class="list-td"><input id="serology-test-' . $key . '" name="serology-test-' . $key . '" type="number" min="' . $value['range'][1] . '" step="' . $value['range'][0] . '" max=' . $value['range'][2] . ' class="form-control" required="required"></td>';
                                                        // echo '<td class="list-td"><select id="chem-units" name="chem-units" class="custom-select" required="required">';
                                                        // foreach ($chemistryLabTestUnitsArray as $key2 => $value2) {
                                                        //     echo '<option value="chem-unit-' . $key2 . '">' . $value2 . '</option>';
                                                        // }
                                                        // echo '</select>';
                                                        // echo '</td>';
                                                        echo '<td class="list-td">
                                                                <select id="chem-verdict" name="chem-verdict" class="custom-select" required="required">';
                                                        foreach ($verdict as $key3 => $value3) {
                                                            echo '<option value="verdict-unit-' . $key3 . '" style="' . $value3[1] . '">' . $value3[0] . '</option>';
                                                        }
                                                        echo '</select>';
                                                        echo '</td>';
                                                        echo '<td class="list-td">Range not specified</td>';
                                                        //echo '<td class="list-td">' . $value['range'][1] . ' - ' . $value['range'][2] . ' ' . $value['unit'] . '</td>';
                                                        echo '</tr>';
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="card-box table-responsive">
                                            <p class="text-muted font-13 m-b-30">

                                            </p>
                                            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" colspan="5">COAGULATION TEST</th>
                                                    </tr>
                                                    <tr>
                                                        <td scope="col">TYPE OF TEST</td>
                                                        <td scope="col" colspan="2">RESULT (verdict and Reference Range (minimum - maximum) </td>
                                                        <td scope="col" class="list-td">Equipment ID: <br><input id="coagulation-test-equipment-id" name="coagulation-test-equipment-id" type="number" class="form-control" required="required"></td>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    foreach ($coagulationTestArray as $key => $value) {
                                                        //echo '<tr><td class="list-td"><a href="#">' . $value['name'] . '</a></td>';
                                                        echo '<tr><td class="list-td">' . $value['name'] . '</td>';
                                                        echo '<td class="list-td"><input id="coagulation-test-' . $key . '" name="coagulation-test-' . $key . '" type="number" min="' . $value['range'][1] . '" step="' . $value['range'][0] . '" max=' . $value['range'][2] . ' class="form-control" required="required"></td>';
                                                        // echo '<td class="list-td"><select id="chem-units" name="chem-units" class="custom-select" required="required">';
                                                        // foreach ($chemistryLabTestUnitsArray as $key2 => $value2) {
                                                        //     echo '<option value="chem-unit-' . $key2 . '">' . $value2 . '</option>';
                                                        // }
                                                        // echo '</select>';
                                                        // echo '</td>';
                                                        echo '<td class="list-td">
                                                                <select id="chem-verdict" name="chem-verdict" class="custom-select" required="required">';
                                                        foreach ($verdict as $key3 => $value3) {
                                                            echo '<option value="verdict-unit-' . $key3 . '" style="' . $value3[1] . '">' . $value3[0] . '</option>';
                                                        }
                                                        echo '</select>';
                                                        echo '</td>';
                                                        $second = "";
                                                        if ($value['name'] !== "INR") {
                                                            $second = " SEC";
                                                        }
                                                        echo '<td class="list-td">' . $value['range'][1] . ' - ' . $value['range'][2] . $second . '</td>
                                                                </tr>';
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