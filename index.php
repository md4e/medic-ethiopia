<?php
session_start();

include_once "./locale/en.php";
include_once "./includes/common.config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>medic-ethiopia</title>
</head>


<body>
    <header>


    </header>
    <main class="container-fluid flex-fill index-page">

        <div class="container-fluid">
            <div class="row" style="text-align:center">
                <div class="col-12 col-xs-12 ">
                    <p class="h1 text-primary">medic-ethiopia</p>
                    <p class="h5 text-muted">Digital Healthcare System</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xs-12 box" >
                    <form class="form-horizontal" action="./dispatcher.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="hospitalName">
                                Choose hospital
                            </label>
                            <select class="form-control" name="hospitalName">
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
                        <div class="form-group offest-6">
                            <button name="submit" type="submit" value="submit" class="btn btn-primary">
                                Login
                            </button>
                        </div>
                        <p class="h6 text-muted" style="text-align: center;">Only Authorized person can use this application. If you are not authorized exit immediately.</p>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php footer(); ?>
    </footer>
</body>

</html>