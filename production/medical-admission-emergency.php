<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/flag.ico">
    <title>index </title>

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
                                <a class="dropdown-item" href="../index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
                        <a href="index2.php" class="title_link btn btn-primary" type="button">
                            <p class="h6">⏎ Return to Emergency Department</p>
                        </a>
                        <p class="h3">Emergency:Patient Admission</p>
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
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    <div class="item form-group">
                                        <label for="card-number" class="col-form-label col-md-3 col-sm-3 label-align">Card No.</label>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">ZMRH-</div>
                                                </div>
                                                <input id="card-number" name="card-number" placeholder="Write bed number" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <a class="btn btn-primary auto-generate-card" type="text" style="color: white;">Auto Generate</a>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="fullname" class="col-form-label col-md-3 col-sm-3 label-align">Name
                                            and Surname</label>
                                        <div class="col-6">
                                            <input id="fullname" name="fu
                                                      llname" placeholder="Write patient full name" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="gender" class="col-form-label col-md-3 col-sm-3 label-align">Gender
                                            (Sex)</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="gender" name="gender" class="custom-select" required="required">
                                                <option value="unknown">Choose gender</option>
                                                <option value="female">Female</option>
                                                <option value="male">Male</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="age" class="col-form-label col-md-3 col-sm-3 label-align">Age</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="age" name="age" placeholder="Write age" type="number" min="0" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="region" class="col-form-label col-md-3 col-sm-3 label-align">Region</label>
                                        <div class="col-6">
                                            <select id="region" name="region" class="custom-select" required="required">
                                                <option value="unknown">Choose Region</option>
                                                <option value="1"> Addis Ababa (AA)</option>
                                                <option value="2"> Afar Region (AF)</option>
                                                <option value="3"> Amhara Region (AR)</option>
                                                <option value="4"> Benishangul-Gumuz Region (BR)</option>
                                                <option value="5"> Dire Dawa (City) (DD)</option>
                                                <option value="6"> Gambela Region (GR)</option>
                                                <option value="7"> Harari Region (HR)</option>
                                                <option value="8"> Oromia Region (OR)</option>
                                                <option value="9"> Sidama Region (SR)</option>
                                                <option value="10"> Somalia Region (SR)</option>
                                                <option value="11"> Southern Nations, Nationalities, and Peoples' Region
                                                    (SNNP)</option>
                                                <option value="12"> Tigray Region (TG)</option>
                                            </select>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="patient-allergies" id="patient-homeless_0" type="checkbox" aria-describedby="patient-allergiesHelpBlock" class="custom-control-input" value="0" required="required">
                                            <label for="patient-homeless_0" class="custom-control-label" title="homeless">Distitude</label>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="wereda" class="col-form-label col-md-3 col-sm-3 label-align">Wedera</label>
                                        <div class="col-md-3 col-sm-3">
                                            <input id="wereda" name="wereda" placeholder="Write wereda" type="number" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="kebele" class="col-form-label col-md-3 col-sm-3 label-align">Kebele</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="kebele" name="kebele" placeholder="Write keble" type="number" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="phone" class="col-form-label col-md-3 col-sm-3 label-align">Phone</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="phone" name="phone" placeholder="Write phone number" type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group div-subcity">
                                        <label for="subcity" class="col-form-label col-md-3 col-sm-3 label-align">Subcity</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="subcity" name="subcity" class="custom-select" required="required">
                                                <option value="unknown">Choose subcity</option>
                                                <option value="0">Arada Sub City</option>
                                                <option value="1">Akaki Kaliti Sub City</option>
                                                <option value="2">Addis Ketema Sub City</option>
                                                <option value="3">Bole Sub City</option>
                                                <option value="4">Gullele Sub City</option>
                                                <option value="5">Kirkos Sub City</option>
                                                <option value="6">Kolfe Keranio Sub City</option>
                                                <option value="7">Lideta Sub City</option>
                                                <option value="8">Nefas Silk Sub City</option>
                                                <option value="9">Yeka Sub City</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label for="religion" class="col-form-label col-md-3 col-sm-3 label-align">Religion</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="religion" name="religion" class="custom-select" required="required">
                                                <option value="unknown">Choose religion</option>
                                                <option value="bahai">Bahá'í faith</option>
                                                <option value="catholic">Catholic</option>
                                                <option value="orthodox">Ethiopian Orthodox</option>
                                                <option value="judaism">Judaism</option>
                                                <option value="muslim">Muslim</option>
                                                <option value="protestant">Protestants</option>
                                                <option value="traditional">Traditional faiths</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="department-name" class="col-form-label col-md-3 col-sm-3 label-align">Department</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="ward" name="department" class="custom-select" required="required">
                                                <option value="unknown">Choose department</option>
                                                <option value="emergency-care">Emergency care</option>
                                                <option value="anesthesia-and-intensive-care">Anesthesia and intensive
                                                    care</option>
                                                <option value="geriatrics">Geriatrics</option>
                                                <option value="heart-and-physiology">Heart and physiology</option>
                                                <option value="internal-medicin-and-infection">Internal medicine and
                                                    infection</option>
                                                <option value="surgery-and-urology">Surgery and urology</option>
                                                <option value="gynecology-and-childbirth">Gynecology and childbirth
                                                </option>
                                                <option value="medical-specialist-care">Medical specialist care</option>
                                                <option value="neurology">Neurology</option>
                                                <option value="orthopedics">Orthopedics</option>
                                                <option value="radiology">Radiology</option>
                                                <option value="rehabilitation-medicine">Rehabilitation medicine</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label for="bed-number" class="col-form-label col-md-3 col-sm-3 label-align">Bed
                                            No.</label>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">BD-</div>
                                                </div>
                                                <input id="bed-number" name="bed-number" placeholder="Write bed number" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="examination-room-number" class="col-form-label col-md-3 col-sm-3 label-align">Examination
                                            Room No.</label>
                                        <div class="col-md-3 col-sm-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">RM-</div>
                                                </div>
                                                <input id="examination-room-" name="examination-room-" placeholder="Write Examination Room Number" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="item form-group">
                                        <label for="refering-hospital-name" class="col-form-label col-md-3 col-sm-3 label-align">Refered
                                            from</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="refering-hospital-name" name="refering-hospital-name" class="custom-select" required="required">
                                                <?php
                                                foreach ($hospital as $key => $value) {
                                                    echo '<option value = "' . $key . '">' . $value . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <div class="offset-3 col-md-6 col-sm-6">
                                            <input id="refering-hospital-name-other" name="refering-hospital-name-other" placeholder="Write referring hospital if not in list" type="text" class="form-control">
                                        </div>
                                    </div>


                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Patient have
                                            Allergies<sup>*</sup></label>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="patient-allergies" id="patient-allergies_0" type="checkbox" aria-describedby="patient-allergiesHelpBlock" class="custom-control-input" value="0">
                                                <label for="patient-allergies_0" class="custom-control-label">No</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="patient-allergies" id="patient-allergies_1" type="checkbox" aria-describedby="patient-allergiesHelpBlock" class="custom-control-input" value="0">
                                                <label for="patient-allergies_1" class="custom-control-label">Yes</label>
                                            </div>
                                            <select id="patient-allergies-type" name="patient-allergies-type" class="custom-select" required="required">

                                                <option value="unknown">Choose Allergy</option>
                                                <?php
                                                foreach ($allegies as $key => $value) {
                                                    echo '<option value = "' . $key . '" title="' . $value . '">' . $key . '</option>';
                                                }
                                                ?>
                                            </select>
                                            <span id="patient-allergiesHelpBlock" class="form-text text-muted">Check if
                                                patient have allergies if yes write in field below</span>
                                            <textarea id="patient-allergies-if-yes" placeholder="Write here if Patient have allergies" name="patient-allergies-if-yes" cols="40" rows="3" class="form-control" aria-describedby="patient-allergies-if-yesBlock" required="required"></textarea>
                                        </div>
                                    </div>


                                    <div class="item form-group">
                                        <label for="diagnosis-on-admission" class="col-form-label col-md-3 col-sm-3 label-align">Diagnosis on
                                            Admission</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="diagnosis-on-admission" name="diagnosis-on-admission" cols="40" rows="5" class="form-control" aria-describedby="diagnosis-on-admissionHelpBlock" required="required"></textarea>
                                            <span id="diagnosis-on-admissionHelpBlock" class="form-text text-muted">Write
                                                diagnosis on patient arrival</span>
                                        </div>
                                    </div>


                                    <div class="item form-group">
                                        <label for="name-of-his-her-doctor" class="col-form-label col-md-3 col-sm-3 label-align">Name of
                                            his/her doctor</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="name-of-his-her-doctor" name="name-of-his-her-doctor" aria-describedby="name-of-his-her-doctorHelpBlock" required="required" class="custom-select">
                                                <option value="unknown">Choose doctor</option>
                                                <option value="a">Dr. A</option>
                                                <option value="b">Dr. B</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <span id="name-of-his-her-doctorHelpBlock" class="form-text text-muted">Name
                                                of patient following
                                                doctor</span>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label for="date-of-admission" class="col-form-label col-md-3 col-sm-3 label-align">Date of
                                            Admission</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="date-of-admission" name="date-of-admission" type="date" class="form-control" required="required">
                                            <!-- <span id="date-of-admissionHelpBlock" class="form-text text-muted">when was the patient admitted</span> -->
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="admitting-doctor" class="col-form-label col-md-3 col-sm-3 label-align">Admitting
                                            Doctor</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="admitting-doctor" name="admitting-doctor" class="custom-select" aria-describedby="admitting-doctorHelpBlock">
                                                <option value="unknown">Choose doctor</option>
                                                <option value="a">Dr. A</option>
                                                <option value="b">Dr. B</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <!-- <span id="admitting-doctorHelpBlock" class="form-text text-muted">Choose Admitting Doctor</span> -->
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="director-signature-for-admission" class="col-form-label col-md-3 col-sm-3 label-align">Director Signature for
                                            Admission</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="director-signature-for-admission" name="director-signature-for-admission" required="required" class="custom-select" aria-describedby="director-signature-for-admissionHelpBlock">
                                                <option value="unknow">Choose signature</option>
                                                <option value="yes-admitted">Yes, I confirm Admission</option>
                                            </select>
                                            <!-- <span id="director-signature-for-admissionHelpBlock" class="form-text text-muted">Medical Director confirm for Admission of patient</span> -->
                                        </div>
                                    </div>


                                    <div class="item form-group">
                                        <label for="date-of-discharge" class="col-form-label col-md-3 col-sm-3 label-align">Date of
                                            Discharge</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="date-of-discharge" name="date-of-discharge" type="date" class="form-control" aria-describedby="date-of-dischargeHelpBlock">
                                            <!-- <span id="date-of-dischargeHelpBlock" class="form-text text-muted">when was the patient discharged</span> -->
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="discharging-doctor" class="col-form-label col-md-3 col-sm-3 label-align">Discharging
                                            Doctor</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="discharging-doctor" name="discharging-doctor" class="custom-select" aria-describedby="discharging-doctorHelpBlock" required="required">
                                                <option value="unknown">Choose doctor</option>
                                                <option value="a">Dr. A</option>
                                                <option value="b">Dr. B</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <!-- <span id="discharging-doctorHelpBlock" class="form-text text-muted">Choose the discharging Doctor</span> -->
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label for="director-signature-for-dicharge" class="col-form-label col-md-3 col-sm-3 label-align">Director Signature for
                                            Dicharge</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select id="director-signature-for-dicharge" name="director-signature-for-dicharge" class="custom-select" aria-describedby="director-signature-for-dichargeHelpBlock">
                                                <option value="unknow">Choose signature</option>
                                                <option value="yes-confirm-discharge">Yes, I confirm dischage
                                                </option>
                                            </select>
                                            <!-- <span id="director-signature-for-dichargeHelpBlock" class="form-text text-muted">Medical Director confirm for Discharging of patient</span> -->
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button type="submit" class="btn btn-lg btn-success">Register</button>
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
        $('.auto-generate-card').on("click", function() {
            $('#card-number').val(Math.floor(Math.random() * 10000000) + 1000);
        });
    </script>

</body>

</html>