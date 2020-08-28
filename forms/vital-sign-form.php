<?php
include_once "../includes/common.config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Vital Sign</title>
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
                    <p class="h1">Vital Sign Form</p>
                </div>
                <a href = "../dispatcher.php" class="btn btn-primary btn-sm" role="button" aria-disabled="true"><p class="h4">Return to Dashboard</p></a>
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
                        <label for="date-of-vital-sign-record-date" class="col-4 col-form-label">Date</label>
                        <div class="col-4">
                            <input id="date-of-vital-sign-record-date" name="date-of-vital-sign-record-date" type="date" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date-of-vital-sign-record-time" class="col-4 col-form-label">Time</label>
                        <div class="col-4">
                            <input id="date-of-vital-sign-record-time" name="date-of-vital-sign-record-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="date-of-vital-sign-record-bp" class="col-4 col-form-label">Blood Pressure (B/P)</label>
                        <div class="col-4">
                            <input id="bp-systolic" name="bp-systolic" placeholder="Systolic" type="number" min="0" class="form-control" required="required">
                            <input id="bp-diastolic" name="bp-diastolic" placeholder="Diastolic" type="number" min="0" class="form-control" required="required">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="date-of-vital-sign-record-pulse-rate" class="col-4 col-form-label">Pluse Rate (beats/minutes)</label>
                        <div class="col-4">
                            <input id="pulse-rate" name="pulse-rate" placeholder="pulse rate" type="number" min="0" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date-of-vital-sign-record-respiration" class="col-4 col-form-label">Respiration (breaths/minute)</label>
                        <div class="col-4">
                            <input id="resipiration-rate" name="resipiration-rate" placeholder="resipiration" type="number" min="0" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date-of-vital-sign-record-temprature" class="col-4 col-form-label">Temprature (&#8451;)</label>
                        <div class="col-4">
                            <input id="temprature" name="temprature" placeholder="temprature" type="number" min="0" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date-of-vital-sign-record-spo2" class="col-4 col-form-label">Oxygen saturation (SPO<sub>2</sub>)</label>
                        <div class="col-4">
                            <input id="spo2" name="spo2" placeholder="SPO2" type="number" min="0" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date-of-vital-sign-record-remark" class="col-4 col-form-label">Remark</label>
                        <div class="col-8" style="border:1px solid black;">
                            <p text="mute"> Here an algorithm will assist to give remarks based on the data input above. Additional Remarks are available here.</p>
                            <ul style="list-style-type:none;">
                                <li><strong>B/P</strong>: NORMAL/Elevated/Hypertension Stage 1/Hypertension Stage 2/Hypertensive crisis </li>
                                <li><strong>Pluse</strong>: NORMAL/ABNORMAL </li>
                                <li><strong>Respiration</strong>: NORMAL/ABNORMAL </li>
                                <li><strong>Temprature </strong>: NORMAL/ABNORMAL</li>
                                <li><strong>Respiration: </strong>Below normal/Normal/Above normal</li>
                            </ul>
                            <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
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