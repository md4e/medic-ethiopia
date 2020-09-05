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
    <title>Order Sheet</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
</head>

<body>
    <header>
        <?php headerInfo("Order & Treatment Form") ?>
    </header>
    <main class="container-fluid flex-fill">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="../dispatcher.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Return to Dashboard</a>
                </div>
                <div class="col-md-12" style="text-align:center;">
                    <div class="col-md-12">
                        <p class="h1">Order & Treatement Form</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 all-form-style">
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
                        <label for="date-of-order-sheet-order-remark" class="col-4 col-form-label">Order</label>
                        <div class="col-8">
                            <textarea id="order-remark" name="order-remark" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date-of-order-sheet-treatement-remark" class="col-4 col-form-label">Treatment</label>
                        <div class="col-8">
                            <textarea id="treatement-remark" name="treatement-remark" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="problem-list" class="col-4 col-form-label">Problem List</label>
                        <div class="col-4">
                            <select id="problem-list" name="problem-list" class="custom-select" required="required">
                                <option value="unknown">Choose Problem List</option>
                                <option value="problem-list-p1">P1</option>
                                <option value="problem-list-p2">P2</option>
                                <option value="problem-list-px">Px</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <input id="order-sheet-problem-list-other" name="order-sheet-problem-list-other" placeholder="Write here if problem list is Other" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="order-sheet-condition" class="col-4 col-form-label">Conditions</label>
                        <div class="col-4">
                            <select id="order-sheet-condition" name="order-sheet-condition" class="custom-select">
                                <option value="unknown">Choose conditions</option>
                                <option value="critical">Critical</option>
                                <option value="subcritical">Subcritical</option>
                                <option value="stable">Stabile</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <input id="order-sheet-condition-other" name="order-sheet-condition-other" placeholder="Write here is condition is other" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="order-sheet-diet" class="col-4 col-form-label">Diet</label>
                        <div class="col-4">
                            <select id="order-sheet-diet" name="order-sheet-diet" class="custom-select" required="required">
                                <option value="unknown">Choose Diet</option>
                                <option value="tolerated">as tolerated</option>
                                <option value="free">Salt free</option>
                                <option value="fatfree">Low fat</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <input id="order-sheet-diet-other" name="order-sheet-diet-other" placeholder="Write here if diet is Other" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="order-sheet-ambulation" class="col-4 col-form-label">Ambulation</label>
                        <div class="col-4">
                            <select id="order-sheet-ambulation" name="order-sheet-ambulation" class="custom-select">
                                <option value="unknown">Choose ambulation</option>
                                <option value="tolerated">As tolerated</option>
                                <option value="bedrest">bedrest</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <input id="order-sheet-ambulation-other" name="order-sheet-ambulation-other" placeholder="Write here if Ambulation is Other" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="order-sheet-nursing-care" class="col-4 col-form-label">Nursing Care</label>
                        <div class="col-4">
                            <select id="order-sheet-nursing-care" name="order-sheet-nursing-care" class="custom-select" required="required">
                                <option value="unknown">Choose Nursing Care</option>
                                <option value="nursing-care-vsign">Nursing Care Vital Sign</option>
                                <option value="regular-vsign">Regular Vital Sign</option>
                                <option value="wound-care">Wound Care</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <input id="order-sheet-nursing-care-other" name="order-sheet-nursing-care-other" placeholder="Write here if Nusing Care is Other" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="order-sheet-avail-medication" class="col-4 col-form-label">Available Medications</label>
                        <div class="col-8">
                            <select id="order-sheet-avail-medication" name="order-sheet-avail-medication" class="custom-select" required="required" aria-describedby="order-sheet-avail-medicationHelpBlock">
                                <option value="unknown">Choose Medication</option>
                                <option value="0">Medication 0</option>
                                <option value="1">Medication 1</option>
                            </select>
                            <span id="order-sheet-avail-medicationHelpBlock" class="form-text text-muted">Choose available medications in the hospital's pharmacy</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 all-form-style">
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <div class="col-12" style="text-align: right;">
                                <button name="submit" type="submit" class="btn btn-lg btn-primary" style="padding:1em;">Save Order & Treatment</button>
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