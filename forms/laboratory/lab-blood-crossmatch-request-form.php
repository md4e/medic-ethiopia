<?php
include_once "./lab-chemistry-test-list.php";
include_once "../../includes/common.config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../.../../images/flag.ico">
<meta charset="utf-8">
    <title>Lab:Blood Crossmatch</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
</head>

<body>
    <header>
        <?php headerInfo("Lab: Blood Crossmatch Request") ?>
    </header>
    <main class="container-fluid flex-fill">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="../../dispatcher.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Return to Dashboard</a>
                </div>
                <div class="col-md-12" style="text-align:center;">
                    <div class="col-md-12">
                        <p class="h1">Lab: Blood Crossmatch Request</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 all-form-style-blood-lab">
                    <div class="form-group row">
                        <label for="patient-id" class="col-md-4 col-sm-12 col-xs-12 col-form-label"">Patient ID</label>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <input id="patient-id" name="patient-id" placeholder="Patient001" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood-crossmatch-request-date" class="col-md-4 col-sm-12 col-xs-12 col-form-label"">Date</label>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <input id="blood-crossmatch-request-date" name="blood-crossmatch-request-date" type="date" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood-crossmatch-request-time" class="col-md-4 col-sm-12 col-xs-12 col-form-label"">Time</label>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <input id="blood-crossmatch-request-time" name="blood-crossmatch-request-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood-crossmatch-request-specimen" class="col-md-4 col-sm-12 col-xs-12 col-form-label"">Reason for transfusion</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <input id="blood-crossmatch-request-specimen" name="blood-crossmatch-request-specimen" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood-crossmatch-request-specimen-collection" class="col-md-4 col-sm-12 col-xs-12 col-form-label"">Type of Specimen Collection</label>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <input id="blood-crossmatch-request-specimen-collection" name="blood-crossmatch-request-specimen-collection" type="text" class="form-control" required="required">
                        </div>
                        <label for="blood-crossmatch-request-result-release" class="col-md-3 col-sm-12 col-xs-12 col-form-label"">Time of result release</label>
                        <div class="col-md-2 col-sm-12 col-xs-12">
                            <input id="blood-crossmatch-request-specimen-collection-time" name="blood-crossmatch-request-specimen-collection-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood-crossmatch-request-specimen-collection" class="col-md-4 col-sm-12 col-xs-12 col-form-label"">Blood bag Number</label>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <input id="blood-crossmatch-request-specimen-collection" name="blood-crossmatch-request-specimen-collection" type="number" min="0" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood-crossmatch-request-result-release" class="col-md-4 col-sm-12 col-xs-12 col-form-label"">Blood bag Exp</label>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <input id="blood-crossmatch-request-specimen-collection" name="blood-crossmatch-request-specimen-collection" type="number" min="0" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood-crossmatch-request-result-release" class="col-md-4 col-sm-12 col-xs-12 col-form-label"">Blood group</label>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <select class="custom-select" required="required">
                                <?php

                                foreach ($bloodRequestFormArray  as $key => $value) {
                                    echo '<option value="' . $key . '">' . $value . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12" style="border:1px solid black;text-align:center; background-color:black; color:white">
                            <p class="h4"> Emergency crossmatch</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood-crossmatch-request-result-release" class="col-md-4 col-sm-12 col-xs-12 col-form-label"">Result</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <input id="blood-crossmatch-request-specimen-collection" name="blood-crossmatch-request-specimen-collection" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood-crossmatch-request-specimen-collection" class="col-md-4 col-sm-12 col-xs-12 col-form-label"">Test Done By</label>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <input id="blood-crossmatch-request-specimen-collection" name="blood-crossmatch-request-specimen-collection" type="text" class="form-control" required="required">
                        </div>
                        <label for="blood-crossmatch-request-result-release" class="col-md-3 col-sm-12 col-xs-12 col-form-label"">Time of result release</label>
                        <div class="col-md-2 col-sm-12 col-xs-12">
                            <input id="blood-crossmatch-request-specimen-collection-time" name="blood-crossmatch-request-specimen-collection-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood-crossmatch-request-result-release" class="col-md-4 col-sm-12 col-xs-12 col-form-label"">Reviewed By</label>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <input id="blood-crossmatch-request-specimen-collection" name="blood-crossmatch-request-specimen-collection" type="text" class="form-control" required="required">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12" style="border:1px solid black;text-align:center; background-color:black; color:white">
                            <p class="h4"> Test tube method</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood-crossmatch-request-result-release" class="col-md-4 col-sm-12 col-xs-12 col-form-label"">Result</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <input id="blood-crossmatch-request-specimen-collection" name="blood-crossmatch-request-specimen-collection" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood-crossmatch-request-specimen-collection" class="col-md-4 col-sm-12 col-xs-12 col-form-label"">Test Done By</label>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <input id="blood-crossmatch-request-specimen-collection" name="blood-crossmatch-request-specimen-collection" type="text" class="form-control" required="required">
                        </div>
                        <label for="blood-crossmatch-request-result-release" class="col-md-3 col-sm-12 col-xs-12 col-form-label"">Time of result release</label>
                        <div class="col-md-2 col-sm-12 col-xs-12">
                            <input id="blood-crossmatch-request-specimen-collection-time" name="blood-crossmatch-request-specimen-collection-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood-crossmatch-request-result-release" class="col-md-4 col-sm-12 col-xs-12 col-form-label"">Reviewed By</label>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <input id="blood-crossmatch-request-specimen-collection" name="blood-crossmatch-request-specimen-collection" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood-crossmatch-request-result-release" class="col-md-4 col-sm-12 col-xs-12 col-form-label"">Comment</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12  all-form-style-blood-lab">
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="col-12 save-result-button">
                                    <button name="submit" type="submit" class="btn btn-lg btn-danger" style="padding:1em;">Save Blood Crossmatch Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <footer>
            <?php footer(); ?>
        </footer>
    </main>

</body>

</html>