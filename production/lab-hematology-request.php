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
                        <a href="index5.php" class="title_link btn btn-primary" type="button">
                            <p class="h6">⏎ Return to Laboratory Forms</p>
                        </a>
                        <p class="h3 text-danger"><i class="fa fa-flask"></i> LAB:Hematology Request</p>
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
                                        <div class="form-group row">
                                            <label for="hematology-request-form-date" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="hematology-request-form-date" name="hematology-request-form-date" type="date" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hematology-request-form-time" class="col-form-label col-md-3 col-sm-3 label-align">Time</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="hematology-request-form-time" name="hematology-request-form-time" type="time" value="00:00" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hematology-request-form-sample" class="col-form-label col-md-3 col-sm-3 label-align">Type of Sample</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="hematology-request-form-sample" name="hematology-request-form-sample" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hematology-request-form-sample-equipment" class="col-form-label col-md-3 col-sm-3 label-align">Equipment ID</label>
                                            <div class="col-md-6 col-sm-6">
                                                <?php
                                                echo '<select id="hematology-request-form-sample-equipment" name="hematology-request-form-sample-equipment" class="custom-select" required="required">';
                                                echo '<option value="unknown">Choose Equipment</option>';
                                                for ($i = 10000; $i < 50000; $i += 1000) {
                                                    echo '<option value="' . $i . '">ZMRH-EQP-' . $i . '</option>';
                                                }
                                                echo '<option value="10000000">Not listed</option>';
                                                echo '</select>';
                                                ?>

                                            </div>
                                        </div>
                                        <div class="item form-group">
                                        <div class="card-box table-responsive">
                                            <p class="text-muted font-13 m-b-30">
                                            </p>
                                            <table id="datatable" class="table table-striped table-bordered" style="width:50%">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" >TYPE OF TEST</th>
                                                            <th scope="col" colspan="3" >RESULT (verdict and Reference Range (minimum - maximum) </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
                                                        foreach ($hematologyTestArray as $key => $value) {
                                                            echo '<tr><td class="list-td"><a href="#">' . $value['name'] . '</a></td>';
                                                            echo '<td class="list-td"><input id="hematology-request-form-chem-test-' . $key . '" name="chem-test-' . $key . '" type="number" min="' . $value['range']['Female'][1] . '" step="' . $value['range']['Female'][0] . '" max=' . $value['range']['Male'][2] . ' class="form-control" required="required"></td>';
                                                            echo '<td class="list-td">';
                                                            echo '<select id="hematology-request-form-chem-units" name="hematology-request-form-chem-units" class="custom-select" required="required">';
                                                            foreach ($hematologyLabTestUnitsArray as $key2 => $value2) {
                                                                echo '<option value="chem-unit-' . $key2 . '">' . $value2 . '</option>';
                                                            }
                                                            echo '</select>';
                                                            echo '</td>';
                                                            // echo '<td class="list-td">
                                                            //     <select id="chem-verdict" name="chem-verdict" class="custom-select" required="required">';
                                                            // foreach ($verdict as $key3 => $value3) {
                                                            //     echo '<option value="verdict-unit-' . $key3 . '" style="' . $value3[1] . '">' . $value3[0] . '</option>';
                                                            // }
                                                            // echo '</select>';
                                                            // echo '</td>';

                                                            echo '<td>';

                                                            echo  "Female = " . '(' . $value['range']['Female'][1] . ' - ' . $value['range']['Female'][2] . ') ';
                                                            echo  "Male   = " . '(' . $value['range']['Male'][1] . ' - ' . $value['range']['Male'][2] . ')';
                                                            echo '</td>';
                                                            echo '</tr>';
                                                        }



                                                        foreach ($hematologyTestOtherSpecialArray as $sokey => $sovalue) {
                                                            echo '<tr><td class="list-td"><a href="#">' . $sovalue . '</a></td>';
                                                            echo '<td class="list-td" colspan="2" ><input id="hematology-request-form-chem-test-' . $key . '" name="chem-test-' . $key . '" type="text"  class="form-control" required="required"></td>';
                                                            echo '<td class="list-td" ><input id="hematology-request-form-chem-test-' . $key . '" name="chem-test-' . $key . '" type="text"  class="form-control" required="required"></td>';
                                                            echo '</tr>';
                                                        }

                                                        foreach ($hematologyTestSpecialArray as $skey => $svalue) {
                                                            echo '<tr><td class="list-td"><a href="#">' . $skey . '</a></td>';
                                                            echo '<td class="list-td" colspan="2"><select id="hematology-request-form-chem-units" name="hematology-request-form-chem-units" class="custom-select" required="required">';
                                                            foreach ($svalue as $key3 => $value3) {
                                                                echo '<option value="hematology-request-form-chem-unit-' . $key3 . '">' . $value3 . '</option>';
                                                            }
                                                            echo '</select>';
                                                            echo '</td>';
                                                            echo '<td class="list-td" ><input id="hematology-request-form-chem-test-' . $key . '" name="hematology-request-form-chem-test-' . $key . '" type="text"  class="form-control" required="required"></td>';
                                                            echo '</tr>';
                                                        }
                                                        ?>

                                                    </tbody>
                                                </table>
                                                <div class="ln_solid"></div>
                                           <div class="item form-group">
                                                <div class="col-md-6 col-sm-6">
                                                <button type="submit" class="btn btn-lg btn-danger">Save Hematology Request Data</button>
                                            </div>
                                        </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <p class="h5">Reference:
                                                                <a target="blank" title="open in new tab" rel="noopener noreferrer" href="https://www.healthlinkbc.ca/health-topics/zd1440">
                                                                    Units of Measurement
                                                                </a>|
                                                                <a target="blank" title="open in new tab" rel="noopener noreferrer" href="../../doc/Clinical_Laboratory_Reference_Values_ref.pdf">
                                                                    Clinical Laboratory Reference Values
                                                                </a>
                                                                <p>
                                                    </div>
                                                </div>
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