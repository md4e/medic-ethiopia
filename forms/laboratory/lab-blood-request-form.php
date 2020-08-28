<?php
include_once "./lab-chemistry-test-list.php";
include_once "../../includes/common.config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Lab:Blood Request</title>
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
                    <p class="h1">Lab: Blood Request Form</p>
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
                        <?php foreach ($bloodRequestFormCrcAndFfpArray as $key0 => $value0) {
                            echo'
                            <div class="col-12">
                                <table class="table col-12 list-td">
                                    <thead>
                                        <tr>
                                            <th scope="col" colspan="4" style="border:1px solid black;text-align:center; background-color:black; color:white">'.$value0.'</th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="border:1px solid black;;font-weight:bold">Blood Type</th>
                                            <th scope="col" style="border:1px solid black;;font-weight:bold">Number of Units Requested</th>
                                            <th scope="col" style="border:1px solid black;;font-weight:bold">Number of Units Supplied</th>
                                            <th scope="col" style="border:1px solid black;;font-weight:bold">Remark</th>
                                        </tr>
                                    </thead>
                                    <tbody>';

                                        foreach ($bloodRequestFormArray as $key => $value) {
                                            echo '<tr><td class="list-td"><a href="#" >' . $value . '</a></td>';
                                            echo '<td class="list-td"><input id="blood-request-test-' . $value0 . '-' . $key0. '-' . $key .'-0" name="blood-request-test-start-' . $key0 . '-' . $key. '-0" type="number" class="form-control" required="required"></td>';
                                            echo '<td class="list-td"><input id="blood-request-test-' . $value0 . '-' . $key0. '-' . $key .'-1" name="blood-request-test-start-' . $key0 . '-' . $key. '-1" type="number" class="form-control" required="required"></td>';
                                            echo '<td class="list-td"><input id="blood-request-test-' . $value0 . '-' . $key0. '-' . $key .'-2" name="blood-request-test-start-' . $key0 . '-' . $key. '-2" type="text" class="form-control" required="required"></td>';
                                            //echo '<td class="list-td"><textarea id="blood-request-test-' . $value0 . '-' . $key . '" placeholder="Write remark" name="blood-request-test-' . $value0 . '-' . $key . '" cols="10" rows="3" class="form-control" aria-describedby="patient-allergies-if-yesBlock" required="required"></textarea></td>';
                                            echo '</tr>';
                                        }
                                    echo '</tbody>
                                </table>
                            </div>';
                        }

                        ?>
                        <div class="col-12">
                            <table class="table col-12 list-td">
                                <thead>
                                <tr>
                                    <th scope="col" colspan="4" style="border:1px solid black;text-align:center; background-color:black; color:white">Other Blood Components</th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="border:1px solid black;;font-weight:bold">Blood Type</th>
                                            <th scope="col" style="border:1px solid black;;font-weight:bold">Number of Units Requested</th>
                                            <th scope="col" style="border:1px solid black;;font-weight:bold">Number of Units Supplied</th>
                                            <th scope="col" style="border:1px solid black;;font-weight:bold">Remark</th>
                                        </tr>
                                <tbody>

                                    <?php

                                       foreach ($bloodRequestFormOtherBloodComponentsArray as $key => $value) {
                                           echo '<tr><td class="list-td"><a href="#" >' . $value . '</a></td>';
                                           echo '<td class="list-td"><input id="blood-request-other-test-' . $key.'-0" name="blood-request-other-test-' . $key. '-0" type="number" class="form-control" required="required"></td>';
                                           echo '<td class="list-td"><input id="blood-request-other-test-' . $key.'-1" name="blood-request-other-test-' . $key. '-1" type="number" class="form-control" required="required"></td>';
                                           echo '<td class="list-td"><input id="blood-request-other-test-' . $key.'-2" name="blood-request-other-test-' . $key. '-2" type="text" class="form-control" required="required"></td>';
                                           //echo '<td class="list-td"><textarea id="blood-request-test-' . $value0 . '-' . $key . '" placeholder="Write remark" name="blood-request-test-' . $value0 . '-' . $key . '" cols="10" rows="3" class="form-control" aria-describedby="patient-allergies-if-yesBlock" required="required"></textarea></td>';
                                           echo '</tr>';
                                       }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <button name="submit" type="submit" class="btn btn-lg btn-primary btn-block">Save Results</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
        <footer>
            <?php footer();?>
        </footer>
    </main>

</body>

</html>