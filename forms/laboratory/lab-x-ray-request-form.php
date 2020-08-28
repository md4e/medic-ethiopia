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
    </header>
    <main class="container-fluid flex-fill">
        <div class="container-fluid">
            <div class="row" style="text-align:center">
                <div class="col-md-12">
                    <p class="h1" style="padding-bottom: 20px;">ZEWDITU MEMORIAL HOSPITAL</p>
                    <p class="h4" style="padding-bottom: 20px;">Addis Ababa Kirkos Subcity, Wereda: 7 <br> Telephone: +251-0115518085 P.O.Box 316</p>
                </div>
                <div class="col-md-12" style="padding-bottom: 20px;">
                    <p class="h1">X-Ray</p>
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
                                <li><strong>Clinical History</strong>: Clinical History</li>
                            </ul>
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


                    <div class="form-group row">
                        <div class="col-12">
                            <button name="submit" type="submit" class="btn btn-lg btn-primary btn-block">Save Results</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <footer>
            <?php footer();?>
        </footer>
    </main>

</body>

</html>