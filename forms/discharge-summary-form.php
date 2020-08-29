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
        <?php headerInfo("Discharge Summary Form") ?>
    </header>
    <main class="container-fluid flex-fill">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="../dispatcher.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Return to Dashboard</a>
                </div>
                <div class="col-md-12" style="text-align:center;">
                    <div class="col-md-12">
                        <p class="h1">Discharge Summary Form</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 all-form-style">
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
                    <div class="form-group row">
                        <label for="discharge-summary-sheet-remark" class="col-4 col-form-label">Recommendation</label>
                        <div class="col-8">
                            <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 all-form-style">
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <div class="col-12" style="text-align: right;">
                                    <button name="submit" type="submit" class="btn btn-lg btn-primary" style="padding:1em;">Save Discharge Summary</button>
                                </div>
                            </div>
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