<?php

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
        }

        .flex-fill {
            flex: 1 1 auto;
            width: 50%;
            border-radius: 15px;
            background-color: #87ceeb66;
        }

        input {
            border: none;
        }
        .col-form-label{
            text-align: right;
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
                <div class="col-md-12" style="padding-bottom: 20px;">
                    <p class="h1">Progress Notes & Treatment</p>
                </div>
                <a href="../dispatcher.php" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Back to Dashboard</a>
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
                        <label for="date-of-order-sheet-remark" class="col-4 col-form-label">Progess Notes and Treatment</label>
                        <div class="col-8">
                            <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date-of-order-sheet-charge" class="col-4 col-form-label">Charge</label>
                        <div class="col-8">
                            <textarea id="date-of-order-sheet-charge" name="date-of-order-sheet-charge" cols="40" rows="5" class="form-control"></textarea>

                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-lg btn-primary">Save</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
        <footer>
            Copyright © 2020 <br>Powered by <a target="blank" href="https://www.medic-ethiopia.com">medic-ethiopia</a>
        </footer>
    </main>

</body>

</html>