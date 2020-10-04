<?php
include_once "./lab-all-test-defines.php";
include_once "./config.php";
include_once "../includes/crypter.php";
include_once "../classes/MePatientTable.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Chemistry Request");
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
                        <p class="h3 text-success"><i class="fa fa-flask"></i> LAB:Chemistry Request</p>
                    </div>
                    <div class="title_center">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel all-form-style-lab-green">
                            <!-- <div class="x_title">
                                <h2>Enter Patient information and search with id</h2>
                                <div class="clearfix"></div>
                            </div> -->
                            <div class="x_content">
                                <br />
                                <?php
                                show_patient('lab-chemistry-request.php');
                                ?>
                                <!-- <div class="item form-group">
                                    <div class="col-md-6 col-sm-6">
                                        <select name="" id="" class="newlist custom-select">
                                            <option value="unknown">Choose Test to add to list</option>
                                            <?php
                                            // var_dump($chemistryLabTestArray);
                                            // foreach ($chemistryLabTestArray as $key => $value) {
                                            //     echo '<option value="' . $value['name'] . '">' . $value['name'] . '</option>';
                                            // }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <button class="btn btn-sm btn-success">Add Test</button>
                                    </div>
                                </div> -->
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="patient-queue.php">

                                    <div class="item form-group">
                                        <div class="card-box table-responsive">
                                            <p class="text-muted font-13 m-b-30">
                                            </p>
                                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">TYPE OF TEST</th>
                                                        <th scope="col" colspan="4">RESULT (verdict and Reference Range (minimum - maximum) </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    $useSelectiveTest = useSelectiveTest();
                                                    if (isset($useSelectiveTest) && sizeof($useSelectiveTest) > 0) {
                                                        $useList = $useSelectiveTest;
                                                    } else {
                                                        $useList = $chemistryLabTestArray;
                                                    }
                                                    foreach ($useList as $key => $value) {
                                                        echo '<tr><td class="list-td">' . $value['name'] . '</td>';
                                                        //echo '<tr><td class="list-td"><a href="#">' . $value['name'] . '</a></td>';
                                                        echo '<td class="list-td"><input id="chem-test-' . $key . '" name="chem-test-' . $key . '" type="number" min="' . $value['range'][1] . '" step="' . $value['range'][0] . '" max=' . $value['range'][2] . ' class="form-control" required="required"></td>';
                                                        echo '<td class="list-td"><select id="chem-units" name="chem-units" class="custom-select" required="required">';
                                                        foreach ($chemistryLabTestUnitsArray as $key2 => $value2) {
                                                            echo '<option value="chem-unit-' . $key2 . '">' . $value2 . '</option>';
                                                        }
                                                        echo '</select>';
                                                        echo '</td>';
                                                        echo '<td class="list-td">
                                            <select id="chem-verdict" name="chem-verdict" class="custom-select" required="required">';
                                                        foreach ($verdict as $key3 => $value3) {
                                                            echo '<option value="verdict-unit-' . $key3 . '" style="' . $value3[1] . '">' . $value3[0] . '</option>';
                                                        }
                                                        echo '</select>';
                                                        echo '</td>';

                                                        echo '<td class="list-td">' . $value['range'][1] . ' - ' . $value['range'][2] . ' ' . $value['unit'] . '
                                            </td>
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

                                    <div class="item form-group">
                                        <div class="col-12">
                                            <p class="h5">Reference:
                                                <a target="blank" title="open in new tab" rel="noopener noreferrer" href="https://www.healthlinkbc.ca/health-topics/zd1440">Units of Measurement</a>
                                                | <a target="blank" title="open in new tab" rel="noopener noreferrer" href="../../doc/Clinical_Laboratory_Reference_Values_ref.pdf">Clinical Laboratory Reference Values</a>
                                            </p>
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