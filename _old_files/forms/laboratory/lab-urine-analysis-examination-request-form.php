<?php
include_once "./lab-chemistry-test-list.php";
include_once "../../includes/common.config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../../images/flag.ico">
<meta charset="utf-8">
    <title>Lab:Urine Analysis</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
</head>

<body>
    <header>
        <?php headerInfo("Lab: Urine Analysis Examination Request Form") ?>
    </header>
    <main class="container-fluid flex-fill">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="../../dispatcher.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Return to Dashboard</a>
                </div>
                <div class="col-md-12" style="text-align:center;">
                    <div class="col-md-12">
                        <p class="h1">Lab: Urine Analysis Examination Request Form</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 all-form-style-lab-yellow">
                    <div class="form-group row">
                        <label for="patient-id" class="col-4 col-form-label">Patient ID</label>
                        <div class="col-4">
                            <input id="patient-id" name="patient-id" placeholder="Patient001" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="urine-analysis-examination-request-date" class="col-4 col-form-label">Date</label>
                        <div class="col-3">
                            <input id="urine-analysis-examination-request-date" name="urine-analysis-examination-request-date" type="date" class="form-control" required="required">
                        </div>
                        <label for="urine-analysis-examination-request-time" class="col-2 col-form-label">Time</label>
                        <div class="col-3">
                            <input id="urine-analysis-examination-request-time" name="urine-analysis-examination-request-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="urine-analysis-examination-request-specimen" class="col-4 col-form-label">Type of Specimen</label>
                        <div class="col-3">
                            <input id="urine-analysis-examination-request-specimen" name="urine-analysis-examination-request-specimen" type="text" class="form-control" required="required">
                        </div>

                        <label for="urine-analysis-examination-request-specimen" class="col-2 col-form-label">Equipment ID</label>
                        <div class="col-3">
                            <?php
                           echo '<select id="urine-analysis-examination-equipment" name="urine-analysis-examination-equipment" class="custom-select" required="required">';
                                echo '<option value="unknown">Choose Equipment</option>';
                            for ($i=10000;$i<50000; $i+=1000) {
                                echo '<option value="' . $i . '">ZMRH-EQP-' . $i . '</option>';
                            }
                            echo '<option value="10000000">Not listed</option>';
                            echo '</select>';
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="urine-analysis-examination-request-specimen-collection" class="col-4 col-form-label">Type of Specimen Collection</label>
                        <div class="col-3">
                            <input id="urine-analysis-examination-request-specimen-collection" name="urine-analysis-examination-request-specimen-collection" type="text" class="form-control" required="required">
                        </div>
                        <label for="urine-analysis-examination-request-result-release" class="col-2 col-form-label">Time of result release</label>
                        <div class="col-2">
                            <input id="urine-analysis-examination-request-specimen-collection-time" name="urine-analysis-examination-request-specimen-collection-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <table class="table col-12 list-td">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="5" style="border:1px solid black;text-align:center; background-color:black; color:white">PHYSICAL & CHEMICAL EXAMINATION</th>
                                    </tr>
                                    <tr>
                                        <td scope="col" style="border:1px solid black;;font-weight:bold">ANALYTE</th>
                                        <td scope="col" colspan="4" style="border:1px solid black;;font-weight:bold">RESULT (verdict and Reference Range (minimum - maximum) </th>
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

                                    foreach ($urineAnalysisTestArray as $key => $value) {
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
                        <div class="col-12">
                            <table class="table col-12 list-td">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="5" style="border:1px solid black;text-align:center; background-color:black; color:white">MICROSCOPY</th>
                                    </tr>
                                    <tr>
                                        <td scope="col" style="border:1px solid black;font-weight:bold">TYPE OF TEST</td>
                                        <td scope="col" style="border:1px solid black;;font-weight:bold">RESULT (verdict and Reference Range (minimum - maximum) </td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($urineAnalysisTestMicroscopyArray as $key => $value) {
                                        //echo '<tr><td class="list-td"><a href="#">' . $value . '</a></td>';
                                        echo '<tr><td class="list-td">' . $value . '</td>';
                                        echo '<td class="list-td"><input id="coagulation-test-' . $key . '" name="coagulation-test-' . $key . '" type="number" class="form-control" required="required"></td>';
                                        echo '</tr>';
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 all-form-style-lab-yellow">
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <div class="col-12" style="text-align: right;">
                                <button name="submit" type="submit" class="btn btn-lg btn-warning" style="padding:1em;">Save Urine Analysis Examination Data</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
        <footer>
            <?php footer(); ?>
        </footer>
    </main>

</body>

</html>