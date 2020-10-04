<?php
include_once "./lab-all-test-defines.php";
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Urine Analysis & Examination");
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
                        <p class="h3 text-warning"><i class="fa fa-flask"></i> LAB:Urine Analysis Examination</p>
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
                        <div class="x_panel all-form-style-lab-yellow">
                            <div class="x_title">
                                <h2>Enter Patient information and search with id</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <?php
                                 show_patient('lab-urine-analysis-examination.php');
                                ?>
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="patient-queue.php">
                                    <div class="item form-group">
                                        <label for="patient-id" class="col-form-label col-md-3 col-sm-3 label-align">Patient ID</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="patient-id" name="patient-id" placeholder="Patient001" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="urine-analysis-examination-request-date" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="urine-analysis-examination-request-date" name="urine-analysis-examination-request-date" type="date" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="urine-analysis-examination-request-time" class="col-form-label col-md-3 col-sm-3 label-align">Time</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="urine-analysis-examination-request-time" name="urine-analysis-examination-request-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="urine-analysis-examination-request-specimen" class="col-form-label col-md-3 col-sm-3 label-align">Type of Specimen</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="urine-analysis-examination-request-specimen" name="urine-analysis-examination-request-specimen" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="urine-analysis-examination-request-specimen" class="col-form-label col-md-3 col-sm-3 label-align">Equipment ID</label>
                                        <div class="col-md-6 col-sm-6">
                                            <?php
                                            echo '<select id="urine-analysis-examination-equipment" name="urine-analysis-examination-equipment" class="custom-select" required="required">';
                                            echo '<option value="unknown">Choose Equipment</option>';
                                            for ($i = 10000; $i < 50000; $i += 1000) {
                                                echo '<option value="' . $i . '">ZMRH-EQP-' . $i . '</option>';
                                            }
                                            echo '<option value="10000000">Not listed</option>';
                                            echo '</select>';
                                            ?>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="urine-analysis-examination-request-specimen-collection" class="col-form-label col-md-3 col-sm-3 label-align">Type of Specimen Collection</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="urine-analysis-examination-request-specimen-collection" name="urine-analysis-examination-request-specimen-collection" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="urine-analysis-examination-request-result-release" class="col-form-label col-md-3 col-sm-3 label-align">Time of result release</label>
                                        <div class="col-2">
                                            <input id="urine-analysis-examination-request-specimen-collection-time" name="urine-analysis-examination-request-specimen-collection-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="card-box table-responsive">
                                            <p class="text-muted font-13 m-b-30">
                                            </p>
                                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" colspan="5" style="text-align:center;">PHYSICAL & CHEMICAL EXAMINATION</th>
                                                    </tr>
                                                    <tr>
                                                        <td scope="col" style="font-weight:bold">ANALYTE</th>
                                                        <td scope="col" colspan="4" style="font-weight:bold">RESULT (verdict and Reference Range (minimum - maximum) </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td class="list-td">Color</td>
                                                        <td class="list-td" colspan="2">
                                                            <textarea id="remark" name="remark" cols="40" rows="3" class="form-control"></textarea>
                                                        </td>
                                                        <td class="list-td">
                                                            <input id="serology-test-result" name="xray-request-date" type="text" class="form-control" required="required">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="list-td">Appearance</td>
                                                        <td class="list-td" colspan="2">
                                                            <textarea id="remark" name="remark" cols="40" rows="3" class="form-control"></textarea>
                                                        </td>
                                                        <td class="list-td">
                                                            <input id="serology-test-result" name="xray-request-date" type="text" class="form-control" required="required">
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $useSelectiveTest = useSelectiveTest();
                                                    if (isset($useSelectiveTest) && sizeof($useSelectiveTest) > 0) {
                                                        $useList = $useSelectiveTest;
                                                    } else {
                                                        $useList = $urineAnalysisWithMicroscopyTestArray; //urineAnalysisWithMicroscopyTestArray
                                                    }
                                                    foreach ($useList as $key => $value) {
                                                        //echo '<tr><td class="list-td"><a href="#" title="' . $value['fullname'] . '">' . $value['name'] . '</a></td>';
                                                        echo '<tr><td class="list-td">' . $value['name'] . '</td>';
                                                        echo '<td class="list-td"><input id="serology-test-' . $key . '" name="serology-test-' . $key . '" type="number" min="' . $value['range'][1] . '" step="' . $value['range'][0] . '" max="' . $value['range'][2] . '"" class="form-control" required="required"></td>';
                                                        echo '<td class="list-td">';
                                                        if ($value['name'] == "pH") {
                                                            echo '<select id="chem-verdict" name="chem-verdict" class="custom-select" required="required">';
                                                            foreach ($pH as $key3 => $value3) {
                                                                echo '<option value="verdict-unit-' . $key3 . '" style="' . $value3[1] . '">' . $value3[0] . '</option>';
                                                            }
                                                            echo '</select>';
                                                        } else if ($value['name'] == "Specific gravity") {
                                                            //echo '<input id="serology-test-' . $key . '" name="serology-test-' . $key . '" type="number" min="1.005" step="0.001" max="1.025" class="form-control" required="required">';
                                                        } else {
                                                            echo '<select id="chem-verdict" name="chem-verdict" class="custom-select" required="required">';
                                                            foreach ($negativePositive as $key3 => $value3) {
                                                                echo '<option value="verdict-unit-' . $key3 . '" style="' . $value3[1] . '">' . $value3[0] . '</option>';
                                                            }
                                                            echo '</select>';
                                                        }
                                                        echo '</td>';
                                                        //echo '<td class="list-td">Range not specified</td>';
                                                        echo '<td class="list-td">' . $value['range'][1] . ' - ' . $value['range'][2] . '</td>';
                                                        echo '</tr>';
                                                    }
                                                    ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- <div class="item form-group">
                                        <div class="card-box table-responsive">
                                            <p class="text-muted font-13 m-b-30">
                                            </p>
                                            <table id="datatable" class="table table-striped table-bordered" style="width:50%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" colspan="2" style="text-align:center;">MICROSCOPY</th>
                                                    </tr>
                                                    <tr>
                                                        <td scope="col" style="font-weight:bold">TYPE OF TEST</td>
                                                        <td scope="col" style="font-weight:bold">RESULT (verdict and Reference Range (minimum - maximum) </td>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    // foreach ($urineAnalysisTestMicroscopyArray as $key => $value) {
                                                    //     //echo '<tr><td class="list-td"><a href="#">' . $value . '</a></td>';
                                                    //     echo '<tr><td class="list-td">' . $value . '</td>';
                                                    //     echo '<td class="list-td"><input id="coagulation-test-' . $key . '" name="coagulation-test-' . $key . '" type="number" class="form-control" required="required"></td>';
                                                    //     echo '</tr>';
                                                    // }
                                                    ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div> -->
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