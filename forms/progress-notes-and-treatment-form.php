<?php
include_once "../includes/common.config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../images/flag.ico">
<meta charset="utf-8">
    <title>Progess Notes and Treatment</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
</head>

<body>
    <header>
        <?php headerInfo("Progress Notes & Treatment Form") ?>
    </header>
    <main class="container-fluid flex-fill">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="../dispatcher.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Return to Dashboard</a>
                </div>
                <div class="col-md-12" style="text-align:center;">
                    <div class="col-md-12">
                        <p class="h1">Patient's Progress Notes & Investigation Summary</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 all-form-style">

                    <div class="form-group row">
                        <div class="offset-4 col-md-8">
                            <a href="./vital-sign-form.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Get Patient Vital Sign Report</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="progress-notes-and-treatment-form-date" class="col-4 col-form-label">Date</label>
                        <div class="col-3">
                            <input id="progress-notes-and-treatment-form-date" name="progress-notes-and-treatment-form-date" type="date" class="form-control" required="required">
                        </div>
                        <label for="progress-notes-and-treatment-form-time" class="col-2 col-form-label">Time</label>
                        <div class="col-3">
                            <input id="progress-notes-and-treatment-form-time" name="progress-notes-and-treatment-form-time" type="time" value="00:00" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="progress-notes-and-treatment-form-remark" class="col-4 col-form-label">Progess Notes and Treatment</label>
                        <div class="col-8">
                            <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="progress-notes-and-treatment-form-charge" class="col-4 col-form-label">Charge</label>
                        <div class="col-8">
                            <textarea id="progress-notes-and-treatment-form-charge" name="progress-notes-and-treatment-form-charge" cols="40" rows="5" class="form-control"></textarea>

                        </div>
                    </div>

                    <div class="col-md-12 register-patient-allergy">
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Patient have Allergies<sup>*</sup></label>
                            <div class="col-4">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="progress-notes-and-treatment-form-patient-allergies" id="progress-notes-and-treatment-form-patient-allergies_0" type="checkbox" aria-describedby="progress-notes-and-treatment-form-patient-allergiesHelpBlock" class="custom-control-input" value="0">
                                    <label for="progress-notes-and-treatment-form-patient-allergies_0" class="custom-control-label">No</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="progress-notes-and-treatment-form-patient-allergies" id="progress-notes-and-treatment-form-patient-allergies_1" type="checkbox" aria-describedby="progress-notes-and-treatment-form-patient-allergiesHelpBlock" class="custom-control-input" value="0">
                                    <label for="progress-notes-and-treatment-form-patient-allergies_1" class="custom-control-label">Yes</label>
                                </div>
                                <select id="progress-notes-and-treatment-form-patient-allergies-type" name="progress-notes-and-treatment-form-patient-allergies-type" class="custom-select" required="required">

                                    <option value="unknown">Choose Allergy</option>
                                    <?php
                                    foreach ($allegies as $key => $value) {
                                        echo '<option value = "' . $key . '" title="' . $value . '">' . $key . '</option>';
                                    }
                                    ?>
                                </select>
                                <span id="progress-notes-and-treatment-form-patient-allergiesHelpBlock" class="form-text text-muted">Check if patient have allergies if yes write in field below</span>
                                <textarea id="progress-notes-and-treatment-form-patient-allergies-if-yes" placeholder="Write here if Patient have allergies" name="progress-notes-and-treatment-form-patient-allergies-if-yes" cols="40" rows="3" class="form-control" aria-describedby="progress-notes-and-treatment-form-patient-allergies-if-yesBlock" required="required"></textarea>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 all-form-style">
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <div class="col-12" style="text-align: right;">
                                <button name="submit" type="submit" class="btn btn-lg btn-primary" style="padding:1em;">Save Progress & Summary</button>
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