<?php

include_once "./lab-chemistry-test-list.php";
include_once "../../includes/common.config.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Lab:Chemistry</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
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
                    <p class="h2">Chemistry Laboratory Request Form</p>
                </div>
                <a href="../../dispatcher.php" class="btn btn-primary btn-sm" role="button" aria-disabled="true"><p class="h4">Return to Dashboard</p></a>
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
                            </form>
                        </div>

                        <div class="form-group row">
                            <div class="col-12" style="border:1px solid black;">
                                <p text="mute"> This will be available from Database search using the above form by Entering the Patient ID.
                                    Patient ID is Auto-generated upon registeration.</p>
                                <ul style="list-style-type:none;">
                                    <li><strong>Name</strong>: Patient001 </li>
                                    <li><strong>Age</strong>: 100 </li>
                                    <li><strong>Sex</strong>: F/M </li>
                                    <li><strong>Date of Admission: </strong> dd/mm/yy hh:mm:ss </li>
                                    <li><strong>Ward(Bed): </strong>Ward and Roome</li>
                                    <li><strong>Clinical History</strong>: history</li>
                                    <li><strong>Department</strong>: DeptA</li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <table class="table col-12 list-td">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="border:1px solid black;">TYPE OF TEST</th>
                                            <th scope="col" colspan="4" style="border:1px solid black;">RESULT (verdict and Reference Range (minimum - maximum) </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        foreach ($chemistryLabTestArray as $key => $value) {
                                            echo '<tr><td class="list-td"><a href="#">' . $value['name'] . '</a></td>';
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
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button name="submit" type="submit" class="btn btn-lg btn-primary btn-block">Save Results</button>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <p class="h2">Reference</p>
                                        <a target="blank" title="open in new tab" rel="noopener noreferrer" href="https://www.healthlinkbc.ca/health-topics/zd1440">Units of Measurement</a>
                                        <br><a target="blank" title="open in new tab" rel="noopener noreferrer" href="../../doc/Clinical_Laboratory_Reference_Values_ref.pdf">Clinical Laboratory Reference Values</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <footer>
                <?php footer(); ?>
            </footer>
    </main>

</body>

</html>