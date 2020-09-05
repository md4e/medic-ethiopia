<?php
include_once "./lab-chemistry-test-list.php";
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/flag.ico">
    <title>index</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><!-- <i class="fa fa-building-o"></i> --> <span>Zewditu
                                Hospital</span></a>
                        <!-- <i class="fa fa-building-o"></i> -->
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <!-- <img src="images/img.jpg" alt="..." class="img-circle profile_img"> -->
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Dr. Name Lastname</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <!-- <h3>Departments</h3> -->
                            <ul class="nav side-menu">
                                <!-- <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a> -->
                                <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                                <li><a href="index2.php">Emergency Department </a></li>
                                <li><a href="index3.php">Out Patient Department (OPD)</a></li>
                                <li><a href="index4.php">Radiology Department</a></li>
                                <li><a href="index5.php">Laboratory Forms</a></li>
                                <li><a href="index6.php">Medical Forms</a></li>
                                <li><a href="index7.php">All Patients</a></li>
                                <!-- <li><a href="index6.html"> Anesthesia and intensive care</a></li>
                                <li><a href="index7.html"> Geriatrics</a></li>
                                <li><a href="index8.html"> Heart and physiology</a></li>
                                <li><a href="index9.html"> Internal medicine and infection</a></li>
                                <li><a href="index10.html"> Surgery and urology</a></li>
                                <li><a href="index11.html"> Gynecology and childbirth</a></li>
                                <li><a href="index12.html"> Medical specialist care</a></li>
                                <li><a href="index13.html"> Neurology</a></li>
                                <li><a href="index14.html"> Orthopedics</a></li>
                                <li><a href="index15.html"> Radiology</a></li>
                                <li><a href="index16.html"> Rehabilitation medicine</a></li> -->
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                    <ul class=" navbar-right">
                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user-md"></i>Dr. Name Lastname
                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:;"> Profile</a>
                                <a class="dropdown-item" href="javascript:;">Help</a>
                                <a class="dropdown-item" href="../index.php"><i class="fa fa-sign-out pull-right"></i> Log
                                    Out</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <a href="index6.php" class="title_link btn btn-primary" type="button">
                            <p class="h6">⏎ Return to Medical Forms</p>
                        </a>
                        <p class="h3 text-primary"> <i class="fa fa-book"></i> Respiratory Rate Oxygen Saturation & Oxygen Therapy</p>
                    </div>

                    <div class="title_center">

                    </div>

                    <!-- <div class="title_right">
                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Enter Patient information and search with id</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form id="xxxx" data-parsley-validate class="form-horizontal form-label-left">
                                    <div class="item form-group">
                                        <label for="card-number" class="col-form-label col-md-3 col-sm-3 label-align">Card No.</label>
                                        <div class="col-md-6 col-sm-6">

                                            <div class="input-group" method="post" action="paitent-search.php">
                                                <input id="card-number" name="card-number" placeholder="Enter Patient by Card No." type="text" class="form-control" required="required">
                                                <input type="submit" value="Patient Search" class="btn btn-success">
                                                <span id="patient-allergiesHelpBlock" class="form-text text-muted">If
                                                    patient is registered in
                                                    New platform filled below will be filled by data result of the
                                                    search request</span>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="patient-queue.php">
                                    <div class="x_title">
                                    <p class="h4 text-warning"> Clinical review required if saturation is outside target range</p>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="item form-group row">
                                        <label for="date-of-order-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
                                        <div class="col-4">
                                            <input id="date-of-order-sheet-date" name="date-of-order-sheet-date" type="date" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group row">
                                        <label for="date-of-order-sheet-time" class="col-form-label col-md-3 col-sm-3 label-align">Time</label>
                                        <div class="col-4">
                                            <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group row">
                                        <label for="date-of-order-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Observation Frequency</label>
                                        <div class="col-4">
                                            <input id="date-of-order-sheet-date" name="date-of-order-sheet-date" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group row">
                                        <label for="urine-analysis-examination-request-result-release" class="col-form-label col-md-3 col-sm-3 label-align">Oxygen Target Rate</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="custom-select" required="required">
                                                <option value="unknown">Choose Oxygen target</option>
                                                <option value="8892">88% - 92%</option>
                                                <option value="9498">94% - 98%</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <span id="patient-allergiesHelpBlock" class="form-text text-muted">Write here if Other is choosen for Oxygen target</span>
                                            <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group row">
                                        <label for="date-of-order-sheet-remark" class="col-form-label col-md-3 col-sm-3 label-align">Respiratory Rate</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group row">
                                        <label for="date-of-order-sheet-remark" class="col-form-label col-md-3 col-sm-3 label-align">Oxygen Saturation</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group row">
                                        <label for="urine-analysis-examination-request-result-release" class="col-form-label col-md-3 col-sm-3 label-align">Oxygen Device on air</label>
                                        <div class="col-3">
                                            <select class="custom-select" required="required">
                                                <?php

                                                foreach ($oxygenDeviceAirArray  as $key => $value) {
                                                    echo '<option value="' . $key . '">' . $value . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group row">
                                        <label for="urine-analysis-examination-request-result-release" class="col-form-label col-md-3 col-sm-3 label-align">Choose Oxygen Therapy</label>
                                        <div class="col-3">
                                            <select class="custom-select" required="required">
                                                <option value="unknown">Choose Oxygen Therapy</option>
                                                <option value="continuous-oxygen">Continuous Oxygen</option>
                                                <option value="prn">PRN</option>
                                                <option value="not-on-oxygen-therapy">Not on Oxygen Therapy</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="x_title">
                                    <p class="h4 text-info">Pain Assessment with management</p>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="item form-group row">
                                        <label for="date-of-order-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
                                        <div class="col-4">
                                            <input id="date-of-order-sheet-date" name="date-of-order-sheet-date" type="date" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group row">
                                        <label for="date-of-order-sheet-time" class="col-form-label col-md-3 col-sm-3 label-align">Time</label>
                                        <div class="col-4">
                                            <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group row">
                                        <label for="date-of-order-sheet-time" class="col-form-label col-md-3 col-sm-3 label-align">Pain score</label>
                                        <div class="col-4">
                                            <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="number" min="0" max="10" step="1" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group row">
                                        <label for="date-of-order-sheet-remark" class="col-form-label col-md-3 col-sm-3 label-align">Pain Management given*</label>
                                        <div class="col-md-6 col-sm-6">
                                            <span id="patient-allergiesHelpBlock" class="form-text text-muted">Write the name of the analgesic given</span>
                                            <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6">
                                            <a href="index5.php" type="button" class="btn btn-lg btn-danger">Cancel</a>
                                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Copyright © 2020 Powered by <a href="http://medic-ethiopia.com" target="blank">Medic-Ethiopia</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <?php
    include_js();
    ?>
</body>

</html>