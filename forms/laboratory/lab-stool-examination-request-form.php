<?php
include_once "../../includes/common.config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../../images/flag.ico">
<meta charset="utf-8">
    <title>Lab:Stool Exam</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
</head>

<body>
    <header>
        <?php headerInfo("Stool Examination Form") ?>
    </header>
    <main class="container-fluid flex-fill">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="../../dispatcher.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Return to Dashboard</a>
                </div>
                <div class="col-md-12" style="text-align:center;">
                    <div class="col-md-12">
                        <p class="h1">Stool Examination Form</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 all-form-style-lab-brown">
                    <form>
                        <div class="form-group row">
                            <label for="patient-id" class="col-4 col-form-label">Patient ID</label>
                            <div class="col-4">
                                <input id="patient-id" name="patient-id" placeholder="Patient001" type="text" class="form-control" required="required">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="date-of-order-sheet-date" class="col-4 col-form-label">Date</label>
                            <div class="col-3">
                                <input id="date-of-order-sheet-date" name="date-of-order-sheet-date" type="date" class="form-control" required="required">
                            </div>

                            <label for="date-of-order-sheet-time" class="col-2 col-form-label">Time</label>
                            <div class="col-3">
                                <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="time" value="00:00" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date-of-order-sheet-remark" class="col-4 col-form-label">Treatment and Observation</label>
                            <div class="col-8">
                                <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Color of Specimen</label>
                            <div class="col-8">
                                <div class="custom-control custom-checkbox custom-control-inline stool-div-color" style="background:#C5DF71">
                                    <input name="color-of-Specimen" id="color-of-Specimen_0" type="checkbox" class="custom-control-input" value="green" required="required">
                                    <label for="color-of-Specimen_0" class="custom-control-label">Greenish</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline stool-div-color" style="background:brown">
                                    <input  style="background-color: brown;" name="color-of-Specimen" id="color-of-Specimen_1" type="checkbox" class="custom-control-input" value="brown" required="required">
                                    <label for="color-of-Specimen_1" class="custom-control-label">Brownish</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline stool-div-color" style="background:#FFF198">
                                    <input name="color-of-Specimen" id="color-of-Specimen_2" type="checkbox" class="custom-control-input" value="yellow" required="required">
                                    <label for="color-of-Specimen_2" class="custom-control-label">Yellowish</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline stool-div-color" style="color:white; background:#333">
                                    <input name="color-of-Specimen" id="color-of-Specimen_3" type="checkbox" class="custom-control-input" value="black" required="required">
                                    <label for="color-of-Specimen_3" class="custom-control-label">Blackish</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-4 col-form-label">Choose consistency</label>
                            <div class="col-8">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="stool-consistency" id="stool-consistency_0" type="checkbox" required="required" class="custom-control-input" value="watery" aria-describedby="stool-consistencyHelpBlock">
                                    <label for="stool-consistency_0" class="custom-control-label">Watery</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="stool-consistency" id="stool-consistency_1" type="checkbox" required="required" class="custom-control-input" value="soft" aria-describedby="stool-consistencyHelpBlock">
                                    <label for="stool-consistency_1" class="custom-control-label">Soft</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="stool-consistency" id="stool-consistency_2" type="checkbox" required="required" class="custom-control-input" value="semi-formed" aria-describedby="stool-consistencyHelpBlock">
                                    <label for="stool-consistency_2" class="custom-control-label">Semi-formed</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="stool-consistency" id="stool-consistency_3" type="checkbox" required="required" class="custom-control-input" value="hard" aria-describedby="stool-consistencyHelpBlock">
                                    <label for="stool-consistency_3" class="custom-control-label">Hard</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="stool-consistency" id="stool-consistency_4" type="checkbox" required="required" class="custom-control-input" value="gaseous" aria-describedby="stool-consistencyHelpBlock">
                                    <label for="stool-consistency_4" class="custom-control-label">Gaseous</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="stool-consistency" id="stool-consistency_5" type="checkbox" required="required" class="custom-control-input" value="sem-liquid" aria-describedby="stool-consistencyHelpBlock">
                                    <label for="stool-consistency_5" class="custom-control-label">Sem-liquid</label>
                                </div>
                                <!-- <span id="stool-consistencyHelpBlock" class="form-text text-muted">Choose stool consistency to the closest</span> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stool-ova-and-parasite-direct" class="col-4 col-form-label">Ova and Parasite Direct</label>
                            <div class="col-8">
                                <textarea id="stool-ova-and-parasite-direct" name="stool-ova-and-parasite-direct" cols="40" rows="5" class="form-control" required="required"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stool-wbc" class="col-4 col-form-label">WBC</label>
                            <div class="col-8">
                                <input id="stool-wbc" name="stool-wbc" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stool-rbc" class="col-4 col-form-label">RBC</label>
                            <div class="col-8">
                                <input id="stool-rbc" name="stool-rbc" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stool-h.phlori-stool-ag-test" class="col-4 col-form-label">H. Phlori stool Ag Test</label>
                            <div class="col-8">
                                <input id="stool-h.phlori-stool-ag-test" name="stool-h.phlori-stool-ag-test" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stool-concentration-technique" class="col-4 col-form-label">Concentration Technique</label>
                            <div class="col-8">
                                <input id="stool-concentration-technique" name="stool-concentration-technique" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stool-occult-blood" class="col-4 col-form-label">Occult Blood</label>
                            <div class="col-8">
                                <input id="stool-occult-blood" name="stool-occult-blood" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stool-other" class="col-4 col-form-label">Other</label>
                            <div class="col-8">
                                <textarea id="stool-other" name="stool-other" cols="40" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stool-comment" class="col-4 col-form-label">Comment</label>
                            <div class="col-8">
                                <textarea id="stool-comment" name="stool-comment" cols="40" rows="5" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12 ">
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <div class="col-12" style="text-align: right;">
                                        <button name="submit" type="submit" class="btn btn-lg btn-dark" style="padding:1em;background:#3B1D00;color:white;">Save Stool Result Data</button>
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