<?php
include_once "../includes/common.config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Discharge Sheet</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
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
                    <p class="h1">Discharge Summary</p>
                </div>
                <a href="../dispatcher.php" class="btn btn-primary btn-sm" role="button" aria-disabled="true"><p class="h4">Return to Dashboard</p></a>
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
                        <label for="discharge-summary-sheet-date" class="col-4 col-form-label">Date</label>
                        <div class="col-4">
                            <input id="discharge-summary-sheet-date" name="discharge-summary-sheet-date" type="date" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="discharge-summary-sheet-time" class="col-4 col-form-label">Time</label>
                        <div class="col-4">
                            <input id="discharge-summary-sheet-time" name="discharge-summary-sheet-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="discharge-summary-sheet-remark" class="col-4 col-form-label">Brief History</label>
                        <div class="col-8">
                            <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="discharge-summary-sheet-remark" class="col-4 col-form-label">Physical Examination</label>
                        <div class="col-8">
                            <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="discharge-summary-sheet-remark" class="col-4 col-form-label">Laboratory Investigation</label>
                        <div class="col-8">
                            <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="discharge-summary-sheet-remark" class="col-4 col-form-label">Course of Treatment</label>
                        <div class="col-8">
                            <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label">Condition on Discharge</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="condition-for-discharge" id="condition-for-discharge_0" type="radio" class="custom-control-input" value="cured" aria-describedby="condition-for-dischargeHelpBlock">
                                <label for="condition-for-discharge_0" class="custom-control-label">Cured</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="condition-for-discharge" id="condition-for-discharge_1" type="radio" class="custom-control-input" value="improved" aria-describedby="condition-for-dischargeHelpBlock">
                                <label for="condition-for-discharge_1" class="custom-control-label">Improved</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="condition-for-discharge" id="condition-for-discharge_2" type="radio" class="custom-control-input" value="same" aria-describedby="condition-for-dischargeHelpBlock">
                                <label for="condition-for-discharge_2" class="custom-control-label">Same</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="condition-for-discharge" id="condition-for-discharge_3" type="radio" class="custom-control-input" value="dead" aria-describedby="condition-for-dischargeHelpBlock">
                                <label for="condition-for-discharge_3" class="custom-control-label">Dead</label>
                            </div>
                            <span id="condition-for-dischargeHelpBlock" class="form-text text-muted">Choose condition for discharge and fill recommendation</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="discharge-summary-sheet-remark" class="col-4 col-form-label">Recommendation</label>
                <div class="col-8">
                    <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
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