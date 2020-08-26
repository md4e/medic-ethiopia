<?php
session_start();

include_once "./locale/en.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <title>medic-ethiopia</title>
    <style>
        body {
            min-height: 100vh;
            /* transform: scale(1.5,1.5);
            transform-origin: 0 0 ; */
            background-color: #87ceeb66;
        }

        .flex-fill {
            flex: 1 1 auto;
            width: 25%;
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
                <p class="h1 text-primary">medic-ethiopia</p>
                <p class="h5 text-muted">Digital Healthcare System</p>
                <!-- <img src="./images/zh_logo2.png" style="width:150px;height:150px"> -->
            </div>
            <div class="row">
                <div class="col-12 col-xs-12 ">
                    <form class="form-horizontal" action="./dispatcher.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="hospitalName">
                                Choose hospital
                            </label>
                            <select class="form-control" name="hospitalName" >
                                <?php
                                foreach ($hospital as $key => $value) {
                                    echo '<option value = "' . $key . '">' . $value . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="employeeNumber">
                                Employee Number
                            </label>
                            <input type="number" min="0" name="employeeNumber" class="form-control" id="employeeNumber" />
                        </div>
                        <div class="form-group">
                            <label for="employeePassword">
                                Password
                            </label>
                            <input type="password" name="employeePassword" class="form-control" id="employeePassword" />
                        </div>
                        <div class="form-group">
                            <button name="submit" type="submit" value="submit" class="btn btn-primary">

                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid">
            <div class="row" style="text-align:center">
                Copyright © 2020 <br>Powered by <a target="blank" href="https://www.medic-ethiopia.com">medic-ethiopia</a>
            </div>
        </div>
    </footer>
</body>

</html>