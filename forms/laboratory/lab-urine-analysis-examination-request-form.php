<?php
include_once "./lab-chemistry-test-list.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            min-height: 100vh;
        }

        .flex-fill {
            flex: 1 1 auto;
            width: 50%;
            border-radius: 15px;
            background-color: #87ceeb66;
        }

        input {
            border: none;
        }

        .table td:first-child {
            text-align: right;
        }

        .list-td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <header>


    </header>
    <main class="container-fluid flex-fill">
        <div class="container-fluid">
            <div class="row" style="text-align:center">
                <div class="col-md-12">
                    <p class="h1" style="padding-bottom: 20px;">ZEWDITU MEMORIAL HOSPITAL</p>
                    <p class="h4" style="padding-bottom: 20px;">Addis Ababa Kirkos Subcity, Wereda: 7 <br> Telephone: +251-0115518085 P.O.Box 316</p>
                </div>
                <div class="col-md-12" style="padding-bottom: 20px;">
                    <p class="h1">Lab: Urine Analysis Examination Request Form</p>
                </div>
                <a href="../../dispatcher.php" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Back to Dashboard</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form>
                        <div class="form-group row">
                            <form>
                                <label for="patient-id" class="col-4 col-form-label">Patient ID</label>
                                <div class="col-4">
                                    <input id="patient-id" name="patient-id" placeholder="Patient001" type="text" class="form-control" required="required">
                                </div>
                                <div class="col-4">
                                    <button name="submit" type="submit" class="btn btn-md btn-secondary">Search Patient</button>
                                </div>
                        </div>
                    </form>
                    <div class="form-group row">
                        <div class="col-12" style="border:1px solid black;">
                            <p text="mute"> This will be available from Database search using the above form by Entering the Patient ID.
                                Patient ID is Auto-generated upon registeration.</p>
                            <ul style="list-style-type:none;">
                                <li><strong>Name</strong>: Patient001 </li>
                                <li><strong>Age</strong>: 100 </li>
                                <li><strong>Sex</strong>: F/M </li>
                                <li><strong>Date of Admission: </strong> dd/mm/yy hh:mm:ss </li>
                                <li><strong>Ward(Bed): </strong>W-0 B-0</li>
                                <li><strong>Department</strong>: DeptA</li>
                            </ul>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="urine-analysis-examination-request-date" class="col-4 col-form-label">Date</label>
                        <div class="col-4">
                            <input id="urine-analysis-examination-request-date" name="urine-analysis-examination-request-date" type="date" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="urine-analysis-examination-request-time" class="col-4 col-form-label">Time</label>
                        <div class="col-4">
                            <input id="urine-analysis-examination-request-time" name="urine-analysis-examination-request-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="urine-analysis-examination-request-specimen" class="col-4 col-form-label">Type of Specimen</label>
                        <div class="col-8">
                            <input id="urine-analysis-examination-request-specimen" name="urine-analysis-examination-request-specimen" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="urine-analysis-examination-request-specimen" class="col-4 col-form-label">Equipment ID</label>
                        <div class="col-4">
                            <input id="urine-analysis-examination-id" name="urine-analysis-examination-id" type="number" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="urine-analysis-examination-request-specimen-collection" class="col-4 col-form-label">Type of Specimen Collection</label>
                        <div class="col-3">
                            <input id="urine-analysis-examination-request-specimen-collection" name="urine-analysis-examination-request-specimen-collection" type="text" class="form-control" required="required">
                        </div>
                        <label for="urine-analysis-examination-request-result-release" class="col-3 col-form-label">Time of result release</label>
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
                                        <td class="list-td"><a href="#"> Color</a></td>
                                        <td class="list-td" colspan="2">
                                            <textarea id="remark" name="remark" cols="40" rows="3" class="form-control"></textarea>
                                        </td>
                                        <td class="list-td">
                                            <input id="serology-test-result" name="xray-request-date" type="text" class="form-control" required="required">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="list-td"><a href="#">Appearance</a> </td>
                                        <td class="list-td" colspan="2">
                                            <textarea id="remark" name="remark" cols="40" rows="3" class="form-control"></textarea>
                                        </td>
                                        <td class="list-td">
                                            <input id="serology-test-result" name="xray-request-date" type="text" class="form-control" required="required">
                                        </td>
                                    </tr>
                                    <?php

                                    foreach ($urineAnalysisTestArray as $key => $value) {
                                        echo '<tr><td class="list-td"><a href="#" title="' . $value['fullname'] . '">' . $value['name'] . '</a></td>';
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
                                        echo '<tr><td class="list-td"><a href="#">' . $value . '</a></td>';
                                        echo '<td class="list-td"><input id="coagulation-test-' . $key . '" name="coagulation-test-' . $key . '" type="number" class="form-control" required="required"></td>';
                                        echo '</tr>';
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-lg btn-primary">Save</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
        <footer>
            Copyright © 2020 <br>Powered by <a target="blank" href="https://www.medic-ethiopia.com">medic-ethiopia</a>
        </footer>
    </main>

</body>

</html>