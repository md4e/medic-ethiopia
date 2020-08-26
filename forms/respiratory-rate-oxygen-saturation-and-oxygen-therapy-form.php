<?php
include_once "./laboratory/lab-chemistry-test-list.php";
include_once "../includes/common.config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Respiratory</title>
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
                    <p class="h1">Respiratory rate Oxygen Saturation & Oxygen Therapy</p>
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
                        <div class="col-12" style="border:1px solid black;text-align:center; background-color:black; color:white">
                            <p class="h4 text-warning"> Clinical review required if saturation is outside target range</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date-of-order-sheet-date" class="col-4 col-form-label">Date</label>
                        <div class="col-4">
                            <input id="date-of-order-sheet-date" name="date-of-order-sheet-date" type="date" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date-of-order-sheet-time" class="col-4 col-form-label">Time</label>
                        <div class="col-4">
                            <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date-of-order-sheet-date" class="col-4 col-form-label">Observation Frequency</label>
                        <div class="col-4">
                            <input id="date-of-order-sheet-date" name="date-of-order-sheet-date" type="number" min="0" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="urine-analysis-examination-request-result-release" class="col-4 col-form-label">Oxygen Target Rate</label>
                        <div class="col-8">
                            <select class="custom-select" required="required">
                                <option value="unknown">Choose Oxygen target</option>
                                <option value="8892">88% - 92%</option>
                                <option value="9498">94% - 98%</option>
                                <option value="Other">Other</option>
                            </select>
                            <span id="patient-allergiesHelpBlock" class="form-text text-muted">Write here if Other is choosen for Oxygen target</span>
                            <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="number"  min="0" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date-of-order-sheet-remark" class="col-4 col-form-label">Respiratory Rate</label>
                        <div class="col-8">
                            <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="number"  min="0" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date-of-order-sheet-remark" class="col-4 col-form-label">Oxygen Saturation</label>
                        <div class="col-8">
                            <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="number"  min="0" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="urine-analysis-examination-request-result-release" class="col-4 col-form-label">Oxygen Device on air</label>
                        <div class="col-3">
                            <select class="custom-select" required="required">
                                <?php

                                foreach ($oxygenDeviceAirArray  as $key => $value) {
                                    echo '<option value="' . $key . '">' . $value . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="urine-analysis-examination-request-result-release" class="col-4 col-form-label">Choose Oxygen Therapy</label>
                        <div class="col-3">
                            <select class="custom-select" required="required">
                                <option value="unknown">Choose Oxygen Therapy</option>
                                <option value="continuous-oxygen">Continuous Oxygen</option>
                                <option value="prn">PRN</option>
                                <option value="not-on-oxygen-therapy">Not on Oxygen Therapy</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12" style="border:1px solid black;text-align:center; background-color:black; color:white">
                            <p class="h4"> Pain Assessment with management</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date-of-order-sheet-date" class="col-4 col-form-label">Date</label>
                        <div class="col-4">
                            <input id="date-of-order-sheet-date" name="date-of-order-sheet-date" type="date" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date-of-order-sheet-time" class="col-4 col-form-label">Time</label>
                        <div class="col-4">
                            <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date-of-order-sheet-time" class="col-4 col-form-label">Pain score</label>
                        <div class="col-4">
                            <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="number" min="0" max="10" step="1" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date-of-order-sheet-remark" class="col-4 col-form-label">Pain Management given*</label>
                        <div class="col-8">
                            <span id="patient-allergiesHelpBlock" class="form-text text-muted">Write the name of the analgesic given</span>
                            <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <button name="submit" type="submit" class="btn btn-lg btn-primary">Save and Sign</button>
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