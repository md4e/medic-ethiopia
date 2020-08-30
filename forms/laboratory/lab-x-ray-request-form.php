<?php
include_once "../../includes/common.config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Lab:X-Ray</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
</head>

<body>
    <header>
        <?php headerInfo("X-Ray Request Form") ?>
    </header>
    <main class="container-fluid flex-fill">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="../../dispatcher.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Return to Dashboard</a>
                </div>
                <div class="col-md-12" style="text-align:center;">
                    <div class="col-md-12">
                        <p class="h1">X-Ray Request Form</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 all-form-style-lab-x-ray">
                    <form>
                        <div class="form-group row">
                            <label for="patient-id" class="col-4 col-form-label">Patient ID</label>
                            <div class="col-4">
                                <input id="patient-id" name="patient-id" placeholder="Patient001" type="text" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="xray-request-date" class="col-4 col-form-label">Date</label>
                            <div class="col-4">
                                <input id="xray-request-date" name="xray-request-date" type="date" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="xray-request-time" class="col-4 col-form-label">Time</label>
                            <div class="col-4">
                                <input id="xray-request-time" name="xray-request-time" type="time" value="00:00" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Patient Type</label>
                            <div class="col-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="bed-or-ambulatory-patient" id="bed-or-ambulatory-patient_0" type="radio" class="custom-control-input" value="bed-patient" required="required">
                                    <label for="bed-or-ambulatory-patient_0" class="custom-control-label">Bed Patient</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="bed-or-ambulatory-patient" id="bed-or-ambulatory-patient_1" type="radio" class="custom-control-input" value="ambulatory-patient" required="required">
                                    <label for="bed-or-ambulatory-patient_1" class="custom-control-label">Ambulatory Patient</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="xray-request-remark" class="col-4 col-form-label">Examination Request 1.</label>
                            <div class="col-8">
                                <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="xray-request-remark" class="col-4 col-form-label">Examination Request 2.</label>
                            <div class="col-8">
                                <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="xray-request-remark" class="col-4 col-form-label">Examination Request 3.</label>
                            <div class="col-8">
                                <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="xray-request-remark" class="col-4 col-form-label">Upload X-Ray Image</label>
                            <div class="col-8">
                                <input id="remark" type="file" name="remark" cols="40" rows="5" class="form-control"></input>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <div class="col-12" style="text-align: right;">
                                        <button name="submit" type="submit" class="btn btn-lg" style="color:white;padding:1em;background:#01010f">Save X-Ray Result Data</button>
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