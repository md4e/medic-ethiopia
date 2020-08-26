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
                    <p class="h1">Lab: Hematology Request Form</p>
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
                        <label for="serology-coagulation-sheet-date" class="col-2 col-form-label">Date</label>
                        <div class="col-4">
                            <input id="serology-coagulation-sheet-date" name="serology-coagulation-sheet-date" type="date" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="serology-coagulation-sheet-time" class="col-2 col-form-label">Time</label>
                        <div class="col-4">
                            <input id="serology-coagulation-sheet-time" name="serology-coagulation-sheet-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="serology-coagulation-sheet-sample" class="col-2 col-form-label">Type of Sample</label>
                        <div class="col-4">
                            <input id="serology-coagulation-sheet-sample" name="serology-coagulation-sheet-sample" type="text" class="form-control" required="required">
                        </div>
                        <label for="serology-coagulation-sheet-sample" class="col-2 col-form-label">Equipment ID</label>
                        <div class="col-4">
                            <input id="serology-coagulation-sheet-sample" name="serology-coagulation-sheet-sample" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <table class="table col-12 list-td">
                                <thead>
                                    <tr>
                                        <th scope="col" style="border:1px solid black;">TYPE OF TEST</th>
                                        <th scope="col" colspan="3" style="border:1px solid black;">RESULT (verdict and Reference Range (minimum - maximum) </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($hematologyTestArray as $key => $value) {
                                        echo '<tr><td class="list-td"><a href="#">' . $value['name'] . '</a></td>';
                                        echo '<td class="list-td"><input id="chem-test-' . $key . '" name="chem-test-' . $key . '" type="number" min="' . $value['range']['Female'][1] . '" step="' . $value['range']['Female'][0] . '" max=' . $value['range']['Male'][2] . ' class="form-control" required="required"></td>';
                                        echo '<td class="list-td"><select id="chem-units" name="chem-units" class="custom-select" required="required">';
                                        foreach ($hematologyLabTestUnitsArray as $key2 => $value2) {
                                            echo '<option value="chem-unit-' . $key2 . '">' . $value2 . '</option>';
                                        }
                                        echo '</select>';
                                        echo '</td>';
                                        // echo '<td class="list-td">
                                        //     <select id="chem-verdict" name="chem-verdict" class="custom-select" required="required">';
                                        // foreach ($verdict as $key3 => $value3) {
                                        //     echo '<option value="verdict-unit-' . $key3 . '" style="' . $value3[1] . '">' . $value3[0] . '</option>';
                                        // }
                                        // echo '</select>';
                                        // echo '</td>';

                                        echo '<td class="list-td">';

                                        echo  "Female = " . '(' . $value['range']['Female'][1] . ' - ' . $value['range']['Female'][2] . ') ';
                                        echo  "Male   = " . '(' . $value['range']['Male'][1] . ' - ' . $value['range']['Male'][2] . ')';
                                        echo '</td>';
                                        echo '</tr>';
                                    }



                                    foreach ($hematologyTestOtherSpecialArray as $sokey => $sovalue) {
                                        echo '<tr><td class="list-td"><a href="#">' . $sovalue . '</a></td>';
                                        echo '<td class="list-td" colspan="2" ><input id="chem-test-' . $key . '" name="chem-test-' . $key . '" type="text"  class="form-control" required="required"></td>';
                                        echo '<td class="list-td" ><input id="chem-test-' . $key . '" name="chem-test-' . $key . '" type="text"  class="form-control" required="required"></td>';
                                        echo '</tr>';
                                    }

                                    foreach ($hematologyTestSpecialArray as $skey => $svalue) {
                                        echo '<tr><td class="list-td"><a href="#">' . $skey . '</a></td>';
                                        echo '<td class="list-td" colspan="2"><select id="chem-units" name="chem-units" class="custom-select" required="required">';
                                        foreach ($svalue as $key3 => $value3) {
                                            echo '<option value="chem-unit-' . $key3 . '">' . $value3 . '</option>';
                                        }
                                        echo '</select>';
                                        echo '</td>';
                                        echo '<td class="list-td" ><input id="chem-test-' . $key . '" name="chem-test-' . $key . '" type="text"  class="form-control" required="required"></td>';
                                        echo '</tr>';
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <div class="form-group row">
                                <div class="col-12">
                                    <button name="submit" type="submit" class="btn btn-lg btn-primary">Save</button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <p class="h2">Reference<p>
                                            <a target="blank" title="open in new tab" rel="noopener noreferrer" href="https://www.healthlinkbc.ca/health-topics/zd1440">Units of Measurement</a>
                                            <br><a target="blank" title="open in new tab" rel="noopener noreferrer" href="../../doc/Clinical_Laboratory_Reference_Values_ref.pdf">Clinical Laboratory Reference Values</a>
                                </div>
                            </div>
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