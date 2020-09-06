<?php
include_once "./lab-chemistry-test-list.php";
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("Stool Examination");
    ?>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title">
                            <!-- <i class="fa fa-building-o"></i> --> <span>Zewditu
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
                        <a href="index5.php" class="title_link btn btn-primary" type="button">
                            <p class="h6">⏎ Return to Laboratory Forms</p>
                        </a>
                        <p class="h3 text-dark"><i class="fa fa-flask"></i> LAB:Stool Examination</p>
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
                                    <div class="col-md-12 all-form-style-lab-brown">
                                        <div class="form-group row">
                                            <label for="date-of-order-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="date-of-order-sheet-date" name="date-of-order-sheet-date" type="date" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="date-of-order-sheet-time" class="col-form-label col-md-3 col-sm-3 label-align">Time</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="date-of-order-sheet-time" name="date-of-order-sheet-time" type="time" value="00:00" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="date-of-order-sheet-remark" class="col-form-label col-md-3 col-sm-3 label-align">Treatment and Observation</label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea id="remark" name="remark" cols="40" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Color of Specimen</label>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline stool-div-color" style="background:#C5DF71">
                                                    <input name="color-of-Specimen" id="color-of-Specimen_0" type="checkbox" class="custom-control-input" value="green" required="required">
                                                    <label for="color-of-Specimen_0" class="custom-control-label">Greenish</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline stool-div-color" style="background:brown">
                                                    <input style="background-color: brown;" name="color-of-Specimen" id="color-of-Specimen_1" type="checkbox" class="custom-control-input" value="brown" required="required">
                                                    <label for="color-of-Specimen_1" class="custom-control-label">Brownish</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline stool-div-color" style="background:#FFF198">
                                                    <input name="color-of-Specimen" id="color-of-Specimen_2" type="checkbox" class="custom-control-input" value="yellow" required="required">
                                                    <label for="color-of-Specimen_2" class="custom-control-label">Yellowish</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline stool-div-color" style="color:white; background:#333">
                                                    <input name="color-of-Specimen" id="color-of-Specimen_3" type="checkbox" class="custom-control-input" value="black" required="required">
                                                    <label for="color-of-Specimen_3" class="custom-control-label">Blackish</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Choose consistency</label>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="stool-consistency" id="stool-consistency_0" type="checkbox" required="required" class="custom-control-input" value="watery" aria-describedby="stool-consistencyHelpBlock">
                                                    <label for="stool-consistency_0" class="custom-control-label">Watery</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="stool-consistency" id="stool-consistency_1" type="checkbox" required="required" class="custom-control-input" value="soft" aria-describedby="stool-consistencyHelpBlock">
                                                    <label for="stool-consistency_1" class="custom-control-label">Soft</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="stool-consistency" id="stool-consistency_2" type="checkbox" required="required" class="custom-control-input" value="semi-formed" aria-describedby="stool-consistencyHelpBlock">
                                                    <label for="stool-consistency_2" class="custom-control-label">Semi-formed</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="stool-consistency" id="stool-consistency_3" type="checkbox" required="required" class="custom-control-input" value="hard" aria-describedby="stool-consistencyHelpBlock">
                                                    <label for="stool-consistency_3" class="custom-control-label">Hard</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="stool-consistency" id="stool-consistency_4" type="checkbox" required="required" class="custom-control-input" value="gaseous" aria-describedby="stool-consistencyHelpBlock">
                                                    <label for="stool-consistency_4" class="custom-control-label">Gaseous</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input name="stool-consistency" id="stool-consistency_5" type="checkbox" required="required" class="custom-control-input" value="sem-liquid" aria-describedby="stool-consistencyHelpBlock">
                                                    <label for="stool-consistency_5" class="custom-control-label">Sem-liquid</label>
                                                </div>
                                                <!-- <span id="stool-consistencyHelpBlock" class="form-text text-muted">Choose stool consistency to the closest</span> -->
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="stool-ova-and-parasite-direct" class="col-form-label col-md-3 col-sm-3 label-align">Ova and Parasite Direct</label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea id="stool-ova-and-parasite-direct" name="stool-ova-and-parasite-direct" cols="40" rows="5" class="form-control" required="required"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="stool-wbc" class="col-form-label col-md-3 col-sm-3 label-align">WBC</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="stool-wbc" name="stool-wbc" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="stool-rbc" class="col-form-label col-md-3 col-sm-3 label-align">RBC</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="stool-rbc" name="stool-rbc" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="stool-h.phlori-stool-ag-test" class="col-form-label col-md-3 col-sm-3 label-align">H. Phlori stool Ag Test</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="stool-h.phlori-stool-ag-test" name="stool-h.phlori-stool-ag-test" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="stool-concentration-technique" class="col-form-label col-md-3 col-sm-3 label-align">Concentration Technique</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="stool-concentration-technique" name="stool-concentration-technique" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="stool-occult-blood" class="col-form-label col-md-3 col-sm-3 label-align">Occult Blood</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="stool-occult-blood" name="stool-occult-blood" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="stool-other" class="col-form-label col-md-3 col-sm-3 label-align">Other</label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea id="stool-other" name="stool-other" cols="40" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="stool-comment" class="col-form-label col-md-3 col-sm-3 label-align">Comment</label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea id="stool-comment" name="stool-comment" cols="40" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6">
                                                <button type="submit" class="btn btn-lg btn-dark">Save Stool Result Data</button>
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