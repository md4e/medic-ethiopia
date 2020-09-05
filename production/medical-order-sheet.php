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
                        <p class="h3 text-primary"> <i class="fa fa-book"></i> Order Sheet</p>
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
                                    <div class="item form-group">
                                        <label for="date-of-order-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="date-of-order-sheet-date" name="date-of-order-sheet-date" type="date" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-order-sheet-time" class="col-form-label col-md-3 col-sm-3 label-align">Time</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="time" value="00:00" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-order-sheet-order-remark" class="col-form-label col-md-3 col-sm-3 label-align">Order</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="order-remark" name="order-remark" cols="40" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="date-of-order-sheet-treatement-remark" class="col-form-label col-md-3 col-sm-3 label-align">Treatment</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="treatement-remark" name="treatement-remark" cols="40" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="problem-list" class="col-form-label col-md-3 col-sm-3 label-align">Problem List</label>
                                        <div class="col-md-6 col-sm-6">
                                          <a type="text" id="add-problem" class="btn btn-warning" style="color:white" value=""><i class="fa fa-plus-circle"></i>Add problem </a>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="offset-3 col-md-6 col-sm-6" id="problem-container">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="order-sheet-condition" class="col-form-label col-md-3 col-sm-3 label-align">Conditions</label>
                                        <div class="col-md-4 col-sm-4">
                                            <select id="order-sheet-condition" name="order-sheet-condition" class="custom-select">
                                                <option value="unknown">Choose conditions</option>
                                                <option value="critical">Critical</option>
                                                <option value="subcritical">Subcritical</option>
                                                <option value="stable">Stabile</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <!-- <div class="col-md-4 col-sm-4">
                                            <input id="order-sheet-condition-other" name="order-sheet-condition-other" placeholder="Write here is condition is other" type="text" class="form-control">
                                        </div> -->
                                    </div>
                                    <div class="item form-group">
                                        <label for="order-sheet-diet" class="col-form-label col-md-3 col-sm-3 label-align">Diet</label>
                                        <div class="col-md-4 col-sm-4">
                                            <select id="order-sheet-diet" name="order-sheet-diet" class="custom-select" required="required">
                                                <option value="unknown">Choose Diet</option>
                                                <option value="tolerated">as tolerated</option>
                                                <option value="free">Salt free</option>
                                                <option value="fatfree">Low fat</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <!-- <div class="col-md-4 col-sm-4">
                                            <input id="order-sheet-diet-other" name="order-sheet-diet-other" placeholder="Write here if diet is Other" type="text" class="form-control">
                                        </div> -->
                                    </div>
                                    <div class="item form-group">
                                        <label for="order-sheet-ambulation" class="col-form-label col-md-3 col-sm-3 label-align">Ambulation</label>
                                        <div class="col-md-4 col-sm-4">
                                            <select id="order-sheet-ambulation" name="order-sheet-ambulation" class="custom-select">
                                                <option value="unknown">Choose ambulation</option>
                                                <option value="tolerated">As tolerated</option>
                                                <option value="bedrest">bedrest</option>
                                            </select>
                                        </div>
                                        <!-- <div class="col-md-4 col-sm-4">
                                            <input id="order-sheet-ambulation-other" name="order-sheet-ambulation-other" placeholder="Write here if Ambulation is Other" type="text" class="form-control">
                                        </div> -->
                                    </div>
                                    <div class="item form-group">
                                        <label for="order-sheet-nursing-care" class="col-form-label col-md-3 col-sm-3 label-align">Nursing Care</label>
                                        <div class="col-md-4 col-sm-4">
                                            <select id="order-sheet-nursing-care" name="order-sheet-nursing-care" class="custom-select" required="required">
                                                <option value="unknown">Choose Nursing Care</option>
                                                <option value="nursing-care-vsign">Nursing Care Vital Sign</option>
                                                <option value="regular-vsign">Regular Vital Sign</option>
                                                <option value="wound-care">Wound Care</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <!-- <div class="col-md-4 col-sm-4">
                                            <input id="order-sheet-nursing-care-other" name="order-sheet-nursing-care-other" placeholder="Write here if Nusing Care is Other" type="text" class="form-control" required="required">
                                        </div> -->
                                    </div>
                                    <div class="item form-group">
                                        <label for="order-sheet-avail-medication" class="col-form-label col-md-3 col-sm-3 label-align">Available Medications</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="order-sheet-avail-medication" name="order-sheet-avail-medication" class="custom-select" required="required" aria-describedby="order-sheet-avail-medicationHelpBlock">
                                                <option value="unknown">Choose Medication</option>
                                                <option value="0">Medication 0</option>
                                                <option value="1">Medication 1</option>
                                            </select>
                                            <span id="order-sheet-avail-medicationHelpBlock" class="form-text text-muted">Choose available medications in the hospital's pharmacy</span>
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

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <script>
        var i = 1;
        $("#add-problem").click(function() {
            var currentdate = new Date();
            var datetime = "[" + currentdate.getDate() + "-"
                + (currentdate.getMonth()+1)  + "-"
                + currentdate.getFullYear() + " "
                + currentdate.getHours() + ":"
                + currentdate.getMinutes("00") + ":"
                + currentdate.getSeconds() + "] ";
            $("<div />", {
                    "class": "wrapper",
                    id: "product" + i
                })
                .append($("<p />", {
                    type: "text",
                    id: "name" + i,
                    class:"h4"
                }))
                .append("P" + i + ": <small/>Problem "+i+"</small/>")
                .append($("<textarea />", {
                    type: "text",
                    id: "property" + i,
                    cols:"40",
                    rows:"5",
                    class:"form-control",
                    text:datetime + "\n"
                }))
                .appendTo("#problem-container");
            i++;
        });

        $("input").live("click", function() {
            $("span").text("Clicked ID: " + this.id);
        });
    </script>
</body>

</html>