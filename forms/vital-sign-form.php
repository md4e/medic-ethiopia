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
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery-3.5.1.min.js"></script>

    <script>
        $(document).ready(function() {
            var finalRemark = $('#remark').text();
            $('#bp-systolic').on("change", function() {
                var value = this.value;
                var className = '.bp-alert-message-systolic p';
                $(className).first().removeAttr('class');
                var remark = 'Systolic is measured :';
                var grade = "Sys - ";
                if (value <= 90) {
                    grade += "LOW";
                    $(className).first().addClass("alert-div text-info");
                } else if (value > 90 && value <= 120) {
                    grade += "NORMAL";
                    $(className).first().addClass("alert-div text-success");
                } else if (value > 120 && value <= 140) {
                    grade += "ABOVE NORMAL";
                    $(className).first().addClass("alert-div text-warning");
                } else if (value > 140) {
                    grade += "HIGH,";
                    $(className).first().addClass("alert-div text-danger");
                }
                $(className).first().text(grade);
                finalRemark = remark + grade;
            });

            $('#bp-diastolic').on("change", function() {
                var value = this.value;
                var className = '.bp-alert-message-diastolic p';
                $(className).first().removeAttr('class');
                var grade = "Dia - ";
                if (value <= 90) {
                    grade += "LOW";
                    $(className).first().addClass("alert-div text-info");
                } else if (value > 90 && value <= 120) {
                    grade += "NORMAL";
                    $(className).first().addClass("alert-div text-success");
                } else if (value > 120 && value <= 140) {
                    grade += "ABOVE NORMAL";
                    $(className).first().addClass("alert-div text-warning");
                } else if (value > 140) {
                    grade += "HIGH";
                    $(className).first().addClass("alert-div text-danger");
                }
                $(className).first().text(grade);
            });
        });

        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML =
                h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }; // add zero in front of numbers < 10
            return i;
        }
    </script>
</head>

<body onload="startTime()">
    <header>
        <?php headerInfo("Patient Admission") ?>
    </header>
    <main class="container-fluid flex-fill">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="../dispatcher.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Return to Dashboard</a>
                </div>
                <div class="col-md-12" style="text-align:center;">
                    <div class="col-md-12">
                        <p class="h1">Vital Sign Form</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-12 all-form-style">
                        <div class="form-group row" style="text-align:right;padding:0em">
                            <div id="txt" style="text-align:right;padding:0em"></div>
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
                            <div class="col-4">
                                <div class="col-6 bp-alert-message-systolic">
                                    <p></p>
                                </div>
                                <div class="col-6 bp-alert-message-diastolic">
                                    <p></p>
                                </div>
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
                            <label for="date-of-vital-sign-rbs" class="col-4 col-form-label">RBS (Random Blood Sugar)</label>
                            <div class="col-4">
                                <input id="rbs" name="rbs" placeholder="Random Blood Sugar" type="number" min="0" class="form-control" required="required">
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
                                    <li><strong>ALERT: </strong>A timer of Max 30 Minutes reporting is alerted</li>
                                </ul>
                                <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
                            </div>


                        </div>
                    </div>

                    <div class="col-md-12 all-form-style">
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <div class="col-12" style="text-align: right;">
                                    <button name="submit" type="submit" class="btn btn-lg btn-primary" style="padding:1em;">Save</button>
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