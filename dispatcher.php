<?php
include_once "./includes/common.config.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            min-height: 100vh;
            background-color: #87ceeb66;
        }

        .flex-fill {
            flex: 1 1 auto;
            width: 100%;
            border-radius: 15px;

        }

        input {
            border: none;
        }

        .wordwrap {
            font-size: 30px;
            text-align: center;
            padding:20px;
        }
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
                    <div class="col-8">
                        <p text="mute"> Here information will be be available about Employee from Database searched with Employee ID.</p>

                    </div>

                    <div class="col-4">
                        <a href="./index.php" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Logout</a>
                    </div>
                </div>


                <div class="col-12" style="padding-bottom: 20px; border-top:black solid 1px;">
                    <p class="h1">Dashboard<p>

                            <div class="row">
                                <div class="col-4" style="padding-bottom: 20px;">
                                    <a href="./forms/register.php" class="btn btn-primary btn-lg btn-block" role="button" aria-disabled="true">
                                        <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                            Patient Registeration
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4" style="padding-bottom: 20px;">
                                    <a href="./forms/vital-sign-form.php" class="btn btn-primary btn-lg btn-block" role="button" aria-disabled="true">
                                        <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                            Vital Sign Form
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4" style="padding-bottom: 20px;">
                                    <a href="./forms/order-form.php" class="btn btn-primary btn-lg btn-block" role="button" aria-disabled="true">
                                        <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                            Order Sheet
                                        </div>
                                    </a>
                                </div>


                                <div class="col-4" style="padding-bottom: 20px;">
                                    <a href="./forms/progress-notes-and-treatment-form.php" class="btn btn-primary btn-lg btn-block" role="button" aria-disabled="true">
                                        <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                            Progress Notes and Treatment Form
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4" style="padding-bottom: 20px;">
                                    <a href="./forms/discharge-summary-form.php" class="btn btn-primary btn-lg btn-block" role="button" aria-disabled="true">
                                        <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                            Discharge Summary Form
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4" style="padding-bottom: 20px;">
                                    <a href="./forms/history-sheet-form.php" class="btn btn-primary btn-lg btn-block" role="button" aria-disabled="true">
                                        <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                            History Sheet
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4" style="padding-bottom: 20px;">
                                    <a href="./forms/respiratory-rate-oxygen-saturation-and-oxygen-therapy-form.php" class="btn btn-info btn-lg btn-block" role="button" aria-disabled="true">
                                        <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                            Respiratory rate <br> Oxygen Saturation & Oxygen Therapy
                                        </div>
                                    </a>
                                </div>

                                <div class="col-12" style="padding-bottom: 20px;">
                                    <p class="h1">Laboratory forms<p>
                                </div>
                                <div class="col-4" style="padding-bottom: 20px;">
                                    <a href="./forms/laboratory/lab-serology-and-coagulation-test-request-form.php" class="btn btn-danger btn-lg btn-block" role="button" aria-disabled="true">
                                        <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                            LAB - Serology And Coagulation
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4" style="padding-bottom: 20px;">
                                    <a href="./forms/laboratory/lab-blood-request-form.php" class="btn btn-danger btn-lg btn-block" role="button" aria-disabled="true">
                                        <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                            LAB - Blood Request Form
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4" style="padding-bottom: 20px;">
                                    <a href="./forms/laboratory/lab-blood-crossmatch-request-form.php" class="btn btn-danger btn-lg btn-block" role="button" aria-disabled="true">
                                        <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                            LAB - Blood Crossmatch
                                        </div>
                                    </a> </div>
                                <div class="col-4" style="padding-bottom: 20px;">
                                    <a href="./forms/laboratory/lab-hematology-form.php" class="btn btn-danger btn-lg btn-block" role="button" aria-disabled="true">
                                        <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                            LAB - Hematology request
                                        </div>
                                    </a>
                                </div>

                                <div class="col-4" style="padding-bottom: 20px;">
                                    <a href="./forms/laboratory/lab-chemistry-form.php" class="btn btn-success btn-lg btn-block" role="button" aria-disabled="true">
                                        <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                            LAB - Chemistry request form
                                        </div>
                                    </a>
                                </div>

                                <div class="col-4" style="padding-bottom: 20px;">
                                    <a href="./forms/laboratory/lab-urine-analysis-examination-request-form.php" class="btn btn-warning btn-lg btn-block" role="button" aria-disabled="true">
                                        <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                            LAB - Urine Analysis Examination
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4" style="padding-bottom: 20px;">
                                    <a href="./forms/laboratory/lab-stool-examination-request-form.php" class="btn btn-lg btn-block" style="background-color:#800020;color:white" role="button" aria-disabled="true">
                                        <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                            LAB - Stool Examination
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4" style="padding-bottom: 20px;">
                                    <a href="./forms/laboratory/lab-x-ray-request-form.php" class="btn btn-dark btn-lg btn-block" role="button" aria-disabled="true">
                                        <div class="col-md-12 wordwrap" style="min-height: 100px; padding-bottom: 20px;">
                                            LAB - X-Ray
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12" style="padding-bottom: 20px;">
                                    <a href="./includes/reference.php"><p class="h1">Reference pages<p></a>
                                </div>
                            </div>
                </div>
            </div>
        </div>
        <footer>
            Copyright © 2020 <br>Powered by <a target="blank" href="https://www.medic-ethiopia.com">medic-ethiopia</a>
        </footer>
    </main>

</body>

</html>