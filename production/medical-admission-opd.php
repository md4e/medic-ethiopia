<?php
include_once "./lab-chemistry-test-list.php";
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    headerLinks("OPD Admission");
    ?>
</head>


<body class="nav-md">
    <div class="container body">
        <?php
        main_container_top_navigation();
        ?>

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <a href="index3.php" class="title_link btn btn-primary" type="button">
                            <p class="h6">⏎ Return to OPD</p>
                        </a>
                        <p class="h3">OPD:Patient Admission</p>
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
<?php
patient_search()
?>
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="patient-queue.php">
                                    <div class="item form-group">
                                        <label for="fullname" class="col-form-label col-md-3 col-sm-3 label-align">Name
                                            and Surname</label>
                                        <div class="col-md-6 col-sm-6">
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
                                        <div class="col-md-6 col-sm-6">
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

    <?php
    include_js();
    ?>

    <script>
        $('.auto-generate-card').on("click", function() {
            $('#card-number').val(Math.floor(Math.random() * 10000000) + 1000);
        });
    </script>

</body>

</html>