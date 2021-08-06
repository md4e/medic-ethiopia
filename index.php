<?php
include_once "./production/config.php";
include_once "./production/athealth_config.php";
unset($_SESSION['pID']);
unset($_SESSION['mainUser']);
unset($_SESSION['patient_card_number']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_handler();
    headerLinks("Dashboard");

    ?>
    <style>
    .mybox {
        box-shadow: rgba(0, 0, 0, 0.75) 0px 5px 15px;
        padding: 20px 0 20px 0;;
        text-align: center;
        margin-left: 10%;
        margin-top: 100px;;
        color: white;
        background-color: #2a3f54;
    }
    .mybox:hover{
        color: black;
        background-color: white;
        font-size: 50px;;
    }
    </style>
</head>


<body style="background-color: white;">
<div class="container" style="text-align:center">
        <div class="col-md-12">
            <a href="index.php" class="href"><h1 style="text-align:center;"> www.medic-ethiopia.com</h1></a>
            <span class="h6 text-muted">Digital Healthcare System Solutions Catalog</span>
        </div>
        <div class="col-md-12">
            <a href="./login.php" class="href"><div class="col-md-4 h1 mybox">EMR Demo
            <br>
            <span class="h4">A case study at Zeweditu Hospital</span>
            </div
            ></a>
            <a href="./athealth_login.php" class="href"><div class="col-md-4 h1 mybox">@Health Demo<br>
            <span class="h4">service to find health professionals nearest to patient</span>
            </div
            ></a>

        </div>
    </div>
</body>

</html>

