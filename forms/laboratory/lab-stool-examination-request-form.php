<?php
include_once "../../includes/common.config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Lab:Stool Exam</title>
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
                    <p class="h1">Stool Examination</p>
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
                            </form>
                        </div>

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
                            <label for="date-of-order-sheet-remark" class="col-4 col-form-label">Treatment and Observation</label>
                            <div class="col-8">
                                <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Color of Specimen</label>
                            <div class="col-8">
                                <div class="custom-control custom-radio custom-control-inline stool-div-color" style="background-color: green;">
                                    <input name="color-of-Specimen" id="color-of-Specimen_0" type="radio" class="custom-control-input" value="green" required="required">
                                    <label for="color-of-Specimen_0" class="custom-control-label">Green</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline stool-div-color" style="background-color: brown;">
                                    <input name="color-of-Specimen" id="color-of-Specimen_1" type="radio" class="custom-control-input" value="brown" required="required">
                                    <label for="color-of-Specimen_1" class="custom-control-label">Brown</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline stool-div-color" style="background-color: yellow;">
                                    <input name="color-of-Specimen" id="color-of-Specimen_2" type="radio" class="custom-control-input" value="yellow" required="required">
                                    <label for="color-of-Specimen_2" class="custom-control-label">Yellow</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline stool-div-color" style="background-color: black;">
                                    <input name="color-of-Specimen" id="color-of-Specimen_3" type="radio" class="custom-control-input" value="black" required="required">
                                    <label for="color-of-Specimen_3" class="custom-control-label">Black</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stool-consistency" class="col-4 col-form-label">Consistency</label>
                            <div class="col-8">
                                <select id="stool-consistency" name="stool-consistency" class="custom-select" aria-describedby="stool-consistencyHelpBlock" required="required" multiple="multiple">
                                    <option value="unknown">Choose consistency</option>
                                    <option value="watery">Watery</option>
                                    <option value="soft">Soft</option>
                                    <option value="semi-formed">Semi-formed</option>
                                    <option value="hard">Hard</option>
                                    <option value="gaseous">Gaseous</option>
                                    <option value="semi-liquid">Sem-liquid</option>
                                </select>
                                <span id="stool-consistencyHelpBlock" class="form-text text-muted">Choose stool consistency</span>
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