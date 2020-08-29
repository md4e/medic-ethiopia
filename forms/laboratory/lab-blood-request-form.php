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
        <?php headerInfo("Lab: Blood Request Form") ?>
    </header>
    <main class="container-fluid flex-fill">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="../../dispatcher.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Return to Dashboard</a>
                </div>
                <div class="col-md-12" style="text-align:center;">
                    <div class="col-md-12">
                        <p class="h1">Lab: Blood Request Form</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 all-form-style-blood-lab">
                    <div class="form-group row">
                        <label for="patient-id" class="col-4 col-form-label">Patient ID</label>
                        <div class="col-md-4 col-sm-12 col-xs-12 ">
                            <input id="patient-id" name="patient-id" placeholder="Patient001" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood-request-form-date" class="col-4 col-form-label">Date</label>
                        <div class="col-md-4 col-sm-12 col-xs-12 ">
                            <input id="blood-request-form-date" name="blood-request-form-date" type="date" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood-request-form-time" class="col-4 col-form-label">Time</label>
                        <div class="col-md-4 col-sm-12 col-xs-12 ">
                            <input id="blood-request-form-time" name="blood-request-form-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood-request-form" class="col-4 col-form-label">Type of Specimen</label>
                        <div class="col-md-8 col-sm-12 col-xs-12 ">
                            <input id="blood-request-form" name="blood-request-form" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood-request-form-collection" class="col-4 col-form-label">Type of Specimen Collection</label>
                        <div class="col-md-3 col-sm-12 col-xs-12 ">
                            <input id="blood-request-form-collection" name="blood-request-form-collection" type="text" class="form-control" required="required">
                        </div>
                        <label for="blood-request-form-result-release" class="col-md-3 col-sm-12 col-xs-12 col-form-label"">Time of result release</label>
                        <div class="col-md-2 col-sm-12 col-xs-12 ">
                            <input id="blood-request-form-collection-time" name="blood-request-form-collection-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <?php foreach ($bloodRequestFormCrcAndFfpArray as $key0 => $value0) {
                            echo '
                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                <table class="table col-12 list-td">
                                    <thead>
                                        <tr>
                                            <th scope="col" colspan="4" style="border:1px solid black;text-align:center; background-color:black; color:white">' . $value0 . '</th>
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
                                //echo '<tr><td class="list-td"><a href="#" >' . $value . '</a></td>';
                                echo '<tr><td class="list-td">' . $value . '</td>';
                                echo '<td class="list-td"><input id="blood-request-test-' . $value0 . '-' . $key0 . '-' . $key . '-0" name="blood-request-test-start-' . $key0 . '-' . $key . '-0" type="number" class="form-control" required="required"></td>';
                                echo '<td class="list-td"><input id="blood-request-test-' . $value0 . '-' . $key0 . '-' . $key . '-1" name="blood-request-test-start-' . $key0 . '-' . $key . '-1" type="number" class="form-control" required="required"></td>';
                                echo '<td class="list-td"><input id="blood-request-test-' . $value0 . '-' . $key0 . '-' . $key . '-2" name="blood-request-test-start-' . $key0 . '-' . $key . '-2" type="text" class="form-control" required="required"></td>';
                                //echo '<td class="list-td"><textarea id="blood-request-test-' . $value0 . '-' . $key . '" placeholder="Write remark" name="blood-request-test-' . $value0 . '-' . $key . '" cols="10" rows="3" class="form-control" aria-describedby="patient-allergies-if-yesBlock" required="required"></textarea></td>';
                                echo '</tr>';
                            }
                            echo '</tbody>
                                </table>
                            </div>';
                        }

                        ?>
                        <div class="col-md-12 col-sm-12 col-xs-12 ">
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
                                        //echo '<tr><td class="list-td"><a href="#" >' . $value . '</a></td>';
                                        echo '<tr><td class="list-td">' . $value . '</td>';
                                        echo '<td class="list-td"><input id="blood-request-other-test-' . $key . '-0" name="blood-request-other-test-' . $key . '-0" type="number" class="form-control" required="required"></td>';
                                        echo '<td class="list-td"><input id="blood-request-other-test-' . $key . '-1" name="blood-request-other-test-' . $key . '-1" type="number" class="form-control" required="required"></td>';
                                        echo '<td class="list-td"><input id="blood-request-other-test-' . $key . '-2" name="blood-request-other-test-' . $key . '-2" type="text" class="form-control" required="required"></td>';
                                        //echo '<td class="list-td"><textarea id="blood-request-test-' . $value0 . '-' . $key . '" placeholder="Write remark" name="blood-request-test-' . $value0 . '-' . $key . '" cols="10" rows="3" class="form-control" aria-describedby="patient-allergies-if-yesBlock" required="required"></textarea></td>';
                                        echo '</tr>';
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12  all-form-style-blood-lab">
                        <div class="form-group row">
                            <div class="offset-4 col-md-8 col-sm-12 col-xs-12 ">
                                <div class="col-12" style="text-align: right;">
                                    <button name="submit" type="submit" class="btn btn-lg btn-danger" style="padding:1em;">Save Blood Request Results</button>
                                </div>
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