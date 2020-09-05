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
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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
                                <li><a href="index8.html"> Heart and physiology</a></li>
                                <li><a href="index9.html"> Internal medicine and infection</a></li>
                                <li><a href="index10.html"> Surgery and urology</a></li>
                                <li><a href="index11.html"> Gynecology and childbirth</a></li>
                                <li><a href="index12.html"> Medical specialist care</a></li>
                                <li><a href="index13.html"> Neurology</a></li>
                                <li><a href="index14.html"> Orthopedics</a></li>
                                <li><a href="index15.html"> Radiology</a></li>
                                <li><a href="index16.html"> Rehabilitation medicine</a></li>
                                <li><a href="index17.html"> Geriatrics</a></li> -->
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
                        <p class="h3"> Vital Sign (NEWS)</p>
                    </div>
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

                                    <div class="item form-group" style="text-align:right;padding:0em">
                                        <div id="txt" style="text-align:right;padding:0em"></div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-vital-sign-record-date" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="date-of-vital-sign-record-date" name="date-of-vital-sign-record-date" type="date" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-vital-sign-record-time" class="col-form-label col-md-3 col-sm-3 label-align">Time</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="date-of-vital-sign-record-time" name="date-of-vital-sign-record-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label for="date-of-vital-sign-record-bp" class="col-form-label col-md-3 col-sm-3 label-align">Blood Pressure (B/P)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="bp-systolic" name="bp-systolic" placeholder="Systolic" type="number" min="0" class="form-control" required="required">
                                            <input id="bp-diastolic" name="bp-diastolic" placeholder="Diastolic" type="number" min="0" class="form-control" required="required">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="col-6 bp-alert-message-systolic">
                                                <p></p>
                                            </div>
                                            <div class="col-6 bp-alert-message-diastolic">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-vital-sign-record-pulse-rate" class="col-form-label col-md-3 col-sm-3 label-align">Pluse Rate (beats/minutes)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="pulse-rate" name="pulse-rate" placeholder="pulse rate" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-vital-sign-record-respiration" class="col-form-label col-md-3 col-sm-3 label-align">Respiration (breaths/minute)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="resipiration-rate" name="resipiration-rate" placeholder="resipiration" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-vital-sign-record-temprature" class="col-form-label col-md-3 col-sm-3 label-align">Temprature (&#8451;)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="temprature" name="temprature" placeholder="temprature" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-vital-sign-record-spo2" class="col-form-label col-md-3 col-sm-3 label-align">Oxygen saturation (SPO<sub>2</sub>)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="spo2" name="spo2" placeholder="SPO2" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-vital-sign-rbs" class="col-form-label col-md-3 col-sm-3 label-align">RBS (Random Blood Sugar)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="rbs" name="rbs" placeholder="Random Blood Sugar" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label for="date-of-vital-sign-record-remark" class="col-form-label col-md-3 col-sm-3 label-align">Remark</label>
                                        <div class="col-md-6 col-sm-6" style="border:1px dotted;">
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
                                    <div class="ln_solid"></div>
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