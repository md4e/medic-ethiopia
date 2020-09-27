<?php
include_once "./lab-all-test-defines.php";
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Hematology Request");
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
                        <p class="h3 text-danger"><i class="fa fa-flask"></i> LAB:Hematology Request</p>
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
                                <?php
                                show_patient();
                                ?>
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="patient-queue.php">
                                    <div class="form-group row">
                                        <label for="hematology-request-form-date" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="hematology-request-form-date" name="hematology-request-form-date" type="date" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hematology-request-form-time" class="col-form-label col-md-3 col-sm-3 label-align">Time</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="hematology-request-form-time" name="hematology-request-form-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hematology-request-form-sample" class="col-form-label col-md-3 col-sm-3 label-align">Type of Sample</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="hematology-request-form-sample" name="hematology-request-form-sample" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hematology-request-form-sample-equipment" class="col-form-label col-md-3 col-sm-3 label-align">Equipment ID</label>
                                        <div class="col-md-6 col-sm-6">
                                            <?php
                                            echo '<select id="hematology-request-form-sample-equipment" name="hematology-request-form-sample-equipment" class="custom-select" required="required">';
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
                                        <div class="card-box table-responsive">
                                            <p class="text-muted font-13 m-b-30">
                                            </p>
                                            <table id="datatable" class="table table-striped table-bordered" style="width:50%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">TYPE OF TEST</th>
                                                        <th scope="col" colspan="3">RESULT (verdict and Reference Range (minimum - maximum) </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    $useSelectiveTest = useSelectiveTest();
                                                    if (isset($useSelectiveTest) && sizeof($useSelectiveTest) > 0) {
                                                        $useList = $useSelectiveTest;
                                                    } else {
                                                        $useList = $hematologyTestArray;
                                                    }
                                                    $useSpecial1 = $useSpecial2 = false;
                                                    foreach ($useList as $key => $value) {
                                                        if ($value['type'] == 'skip') {
                                                            if ($value['name'] == "Blood Parasite")
                                                                $useSpecial1 = true;

                                                            if ($value['name'] == "Blood group & Rh Factor")
                                                                $useSpecial2 = true;
                                                            continue;
                                                        }
                                                        echo '<tr><td class="list-td"><a href="#">' . $value['name'] . '</a></td>';
                                                        echo '<td class="list-td"><input id="hematology-request-form-chem-test-' . $key . '" name="chem-test-' . $key . '" type="number" min="' . $value['range']['Female'][1] . '" step="' . $value['range']['Female'][0] . '" max=' . $value['range']['Male'][2] . ' class="form-control" required="required"></td>';
                                                        echo '<td class="list-td">';
                                                        echo '<select id="hematology-request-form-chem-units" name="hematology-request-form-chem-units" class="custom-select" required="required">';
                                                        foreach ($hematologyLabTestUnitsArray as $key2 => $value2) {
                                                            echo '<option value="chem-unit-' . $key2 . '">' . $value2 . '</option>';
                                                        }
                                                        echo '</select>';
                                                        echo '</td>';
                                                        echo '<td>';

                                                        echo  "Female = " . '(' . $value['range']['Female'][1] . ' - ' . $value['range']['Female'][2] . ') ';
                                                        echo  "Male   = " . '(' . $value['range']['Male'][1] . ' - ' . $value['range']['Male'][2] . ')';
                                                        echo '</td>';
                                                        echo '</tr>';
                                                    }

                                                    if ($useSpecial1 == true) {
                                                        foreach ($hematologyTestOtherSpecialArray as $key => $value) {
                                                            echo '<tr><td class="list-td"><a href="#">' . $value . '</a></td>';
                                                            echo '<td class="list-td" colspan="2" ><input id="hematology-request-form-chem-test-' . $key . '" name="chem-test-' . $key . '" type="text"  class="form-control" required="required"></td>';
                                                            echo '<td class="list-td" ><input id="hematology-request-form-chem-test-' . $key . '" name="chem-test-' . $key . '" type="text"  class="form-control" required="required"></td>';
                                                            echo '</tr>';
                                                        }
                                                    }
                                                    if ($useSpecial2 == true) {
                                                        foreach ($hematologyTestSpecialArray as $skey => $svalue) {
                                                            echo '<tr><td class="list-td"><a href="#">' . $skey . '</a></td>';
                                                            echo '<td class="list-td" colspan="2"><select id="hematology-request-form-chem-units" name="hematology-request-form-chem-units" class="custom-select" required="required">';
                                                            foreach ($svalue as $key3 => $value3) {
                                                                echo '<option value="hematology-request-form-chem-unit-' . $key3 . '">' . $value3 . '</option>';
                                                            }
                                                            echo '</select>';
                                                            echo '</td>';
                                                            echo '<td class="list-td" ><input id="hematology-request-form-chem-test-' . $key . '" name="hematology-request-form-chem-test-' . $key . '" type="text"  class="form-control" required="required"></td>';
                                                            echo '</tr>';
                                                        }
                                                    }                                                    ?>

                                                </tbody>
                                            </table>
                                            <div class="ln_solid"></div>
                                            <div class="item form-group">
                                                <div class="col-md-6 col-sm-6">
                                                    <a href="index5.php" type="button" class="btn btn-lg btn-danger">Cancel</a>
                                                    <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <p class="h5">Reference:
                                                        <a target="blank" title="open in new tab" rel="noopener noreferrer" href="https://www.healthlinkbc.ca/health-topics/zd1440">
                                                            Units of Measurement
                                                        </a>|
                                                        <a target="blank" title="open in new tab" rel="noopener noreferrer" href="../../doc/Clinical_Laboratory_Reference_Values_ref.pdf">
                                                            Clinical Laboratory Reference Values
                                                        </a>
                                                        <p>
                                                </div>
                                            </div>
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