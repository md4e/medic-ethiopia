<?php
include_once "./includes/common.config.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>

    </style>
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
                <div class="form-group row">
                    <div class="col-md-12">
                        <p text="mute"> Here information will be be available about Employee from Database searched with Employee ID.</p>

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <a href="./index.php" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Logout</a>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px; border-top:black solid 1px;">
                        <p class="h1">Dashboard<p>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 20px;">
                                        <a href="./forms/register.php" class="btn btn-primary btn-lg btn-block" role="button" aria-disabled="true">
                                            <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                                Patient Registeration
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 20px;">
                                        <a href="./forms/vital-sign-form.php" class="btn btn-primary btn-lg btn-block" role="button" aria-disabled="true">
                                            <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                                Vital Sign
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 20px;">
                                        <a href="./forms/order-form.php" class="btn btn-primary btn-lg btn-block" role="button" aria-disabled="true">
                                            <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                                Order Sheet
                                            </div>
                                        </a>
                                    </div>


                                    <div class="col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 20px;">
                                        <a href="./forms/progress-notes-and-treatment-form.php" class="btn btn-primary btn-lg btn-block" role="button" aria-disabled="true">
                                            <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                                Patient's Progress Notes <br>& Investigation Summary
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 20px;">
                                        <a href="./forms/discharge-summary-form.php" class="btn btn-primary btn-lg btn-block" role="button" aria-disabled="true">
                                            <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                                Discharge Summary
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 20px;">
                                        <a href="./forms/history-sheet-form.php" class="btn btn-primary btn-lg btn-block" role="button" aria-disabled="true">
                                            <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                                History Sheet
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 20px;">
                                        <a href="./forms/respiratory-rate-oxygen-saturation-and-oxygen-therapy-form.php" class="btn btn-info btn-lg btn-block" role="button" aria-disabled="true">
                                            <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                                Respiratory Rate, <br> Oxygen Saturation,<br> & Oxygen Therapy
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px;">
                                        <p class="h1">Laboratory forms<p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 20px;">
                                        <a href="./forms/laboratory/lab-serology-and-coagulation-test-request-form.php" class="btn btn-danger btn-lg btn-block" role="button" aria-disabled="true">
                                            <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                                LAB - Serology & <br>Coagulation
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 20px;">
                                        <a href="./forms/laboratory/lab-blood-request-form.php" class="btn btn-danger btn-lg btn-block" role="button" aria-disabled="true">
                                            <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                                LAB - Blood Request
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 20px;">
                                        <a href="./forms/laboratory/lab-blood-crossmatch-request-form.php" class="btn btn-danger btn-lg btn-block" role="button" aria-disabled="true">
                                            <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                                LAB - Blood Crossmatch
                                            </div>
                                        </a> </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 20px;">
                                        <a href="./forms/laboratory/lab-hematology-form.php" class="btn btn-danger btn-lg btn-block" role="button" aria-disabled="true">
                                            <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                                LAB - Hematology Request
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 20px;">
                                        <a href="./forms/laboratory/lab-chemistry-form.php" class="btn btn-success btn-lg btn-block" role="button" aria-disabled="true">
                                            <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                                LAB - Chemistry Request
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 20px;">
                                        <a href="./forms/laboratory/lab-urine-analysis-examination-request-form.php" class="btn btn-warning btn-lg btn-block" role="button" aria-disabled="true">
                                            <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                                LAB - Urine Analysis <br>Examination
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 20px;">
                                        <a href="./forms/laboratory/lab-stool-examination-request-form.php" class="btn btn-lg btn-block" style="background-color:#800020;color:white" role="button" aria-disabled="true">
                                            <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                                LAB - Stool Examination
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 20px;">
                                        <a href="./forms/laboratory/lab-x-ray-request-form.php" class="btn btn-dark btn-lg btn-block" role="button" aria-disabled="true">
                                            <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                                LAB - X-Ray
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px;text-align:right">
                                        <a href="./includes/reference.php">
                                            <p class="h5">Reference pages<p>
                                        </a>
                                    </div>
                                </div>
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