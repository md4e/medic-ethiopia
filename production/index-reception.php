<?php
include_once "./lab-all-test-defines.php";
include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  headerLinks("Reception");
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

            <p class="h4 text-primary"><i class="fa fa-pencil"></i> Reception </p>
          </div>

          <div class="title_center">
          </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-4 col-sm-12 " style="overflow:scroll; height:800px;">
            <div class="x_panel">
              <div class="x_content">
                <div class="row">
                  <div class="col-sm-12">
                    <?php
                    show_patient_form('index-reception.php');
                    ?>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xm-12">
                     <p class="h1"><a href="./index-reception-appointment.php" class="btn btn-md btn-primary"><i class="fa fa-list"></i> Check Appoitment</a></p>

                </div>
              </div>
            </div>
          </div>
          <!-- </div> -->
          <!-- <div class="row"> -->
          <div class="col-md-8 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                <h2>Enter New Patient information</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
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
                    <label for="date-of-admission" class="col-form-label col-md-3 col-sm-3 label-align">Date of
                      Admission</label>
                    <div class="col-md-6 col-sm-6">
                      <input id="date-of-admission" name="date-of-admission" type="date" class="form-control" required="required">
                      <!-- <span id="date-of-admissionHelpBlock" class="form-text text-muted">when was the patient admitted</span> -->
                    </div>
                  </div>
                  <div class="item form-group">
                    <label for="time-of-admission" class="col-form-label col-md-3 col-sm-3 label-align">Time of Admission</label>
                    <div class="col-md-6 col-sm-6">
                      <input id="time-of-admission" name="time-of-admission" type="time" value="00:00" class="form-control" required="required">
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
                  </div>

                  <div class="item form-group">
                    <label for="region" class="col-form-label col-md-3 col-sm-3 label-align">Housing</label>
                    <div class="col-md-6 col-sm-6">
                      <select id="housing" name="housing" class="custom-select" required="required">
                        <option value="unknown">Choose housing condition</option>
                        <option value="yes">Patient without housing</option>
                        <option value="no">Patient with housing</option>
                      </select>
                    </div>
                  </div>

                  <div class="item form-group without-housing" style="display: none;">
                    <label for="without-housing-detail" class="col-form-label col-md-3 col-sm-3 label-align">Addition Information</label>
                    <div class="col-md-6 col-sm-6">
                      <textarea id="without-housing-detail" name="chief-compliant" cols="40" rows="5" class="form-control"></textarea>
                    </div>
                  </div>

                  <div class="item form-group with-housing">
                    <label for="wereda" class="col-form-label col-md-3 col-sm-3 label-align">Wedera</label>
                    <div class="col-md-3 col-sm-3">
                      <input id="wereda" name="wereda" placeholder="Write wereda" type="number" class="form-control" required="required">
                    </div>
                  </div>
                  <div class="item form-group with-housing">
                    <label for="kebele" class="col-form-label col-md-3 col-sm-3 label-align">Kebele</label>
                    <div class="col-md-6 col-sm-6">
                      <input id="kebele" name="kebele" placeholder="Write keble" type="number" class="form-control" required="required">
                    </div>
                  </div>
                  <div class="item form-group with-housing">
                    <label for="phone" class="col-form-label col-md-3 col-sm-3 label-align">Phone</label>
                    <div class="col-md-6 col-sm-6">
                      <input id="phone" name="phone" placeholder="Write phone number" type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required="required">
                    </div>
                  </div>
                  <div class="item form-group div-subcity with-housing">
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
    //include_js();
    ?>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script>
      $('.auto-generate-card').on("click", function() {
        $('#patient-search').val(Math.floor(Math.random() * 10000000) + 1000);
      });


      $("#housing").change(function() {
        var value = $(this).val();
        if (value == "yes") {
          $(".with-housing").hide();
          $(".without-housing").show();
        } else {
          $(".with-housing").show();
          $(".without-housing").hide();
        }
      });
    </script>

</body>

</html>