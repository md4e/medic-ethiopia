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
                    <p class="h1">Lab: Serology & Coagulation Test</p>
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
                        <label for="serology-coagulation-sheet-date" class="col-4 col-form-label">Date</label>
                        <div class="col-4">
                            <input id="serology-coagulation-sheet-date" name="serology-coagulation-sheet-date" type="date" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="serology-coagulation-sheet-time" class="col-4 col-form-label">Time</label>
                        <div class="col-4">
                            <input id="serology-coagulation-sheet-time" name="serology-coagulation-sheet-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="serology-coagulation-sheet-specimen" class="col-4 col-form-label">Type of Specimen</label>
                        <div class="col-8">
                            <input id="serology-coagulation-sheet-specimen" name="serology-coagulation-sheet-specimen" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="serology-coagulation-sheet-specimen-collection" class="col-4 col-form-label">Type of Specimen Collection</label>
                        <div class="col-3">
                            <input id="serology-coagulation-sheet-specimen-collection" name="serology-coagulation-sheet-specimen-collection" type="text" class="form-control" required="required">
                        </div>
                        <label for="serology-coagulation-sheet-result-release" class="col-3 col-form-label">Time of result release</label>
                        <div class="col-2">
                            <input id="serology-coagulation-sheet-specimen-collection-time" name="serology-coagulation-sheet-specimen-collection-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <table class="table col-12 list-td">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="5" style="border:1px solid black;text-align:center; background-color:black; color:white">SEROLOGY</th>
                                    </tr>
                                    <tr>
                                        <td scope="col" style="border:1px solid black;;font-weight:bold">TYPE OF TEST</th>
                                        <td scope="col" colspan="4" style="border:1px solid black;;font-weight:bold">RESULT (verdict and Reference Range (minimum - maximum) </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($serologyTestArray as $key => $value) {
                                        echo '<tr><td class="list-td"><a href="#" title="'.$value['fullname'].'">' . $value['name'] . '</a></td>';
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
                        <div class="col-12">
                            <table class="table col-12 list-td">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="5" style="border:1px solid black;text-align:center; background-color:black; color:white">COAGULATION TEST</th>
                                    </tr>
                                    <tr>
                                        <td scope="col" style="border:1px solid black;font-weight:bold">TYPE OF TEST</td>
                                        <td scope="col" colspan="2" style="border:1px solid black;;font-weight:bold">RESULT (verdict and Reference Range (minimum - maximum) </td>
                                        <td scope="col" class="list-td">Equipment ID: <br><input id="coagulation-test-equipment-id" name="coagulation-test-equipment-id" type="number" class="form-control" required="required"></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($coagulationTestArray as $key => $value) {
                                        echo '<tr><td class="list-td"><a href="#">' . $value['name'] . '</a></td>';
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
                                        echo '<td class="list-td">' . $value['range'][1] . ' - ' . $value['range'][2] . $second.'</td>
                                            </tr>';
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