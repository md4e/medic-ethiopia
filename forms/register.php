<?php
include_once "../locale/en.php";
include_once "../includes/common.config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <script src="../js/jquery-3.5.1.min.js"></script>

  <script>
    $(document).ready(function() {

      $('.auto-generate-card').on("click", function() {
        // var usersid =  $(this).data("id");
        // var username = $(this).data("username");

        $('#card-number').val(Math.floor(Math.random()* 10000000)+1);
      })

    });
  </script>
  <style>
    .no-arrow {
  -moz-appearance: textfield;
}
.no-arrow::-webkit-inner-spin-button {
  display: none;
}
.no-arrow::-webkit-outer-spin-button,
.no-arrow::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
  </style>
</head>

<body>
  <header>


  </header>
  <main class="container-fluid flex-fill">
    <div class="container-fluid">
      <div class="row" style="text-align:center">
        <div class="col-md-12">
          <p class="h1" style="padding-bottom: 20px;">ZEWDITU MEMORIAL HOSPITAL</p>
          <p class="h4" style="padding-bottom: 20px;">Addis Ababa Kirkos Subcity, Wereda: 7 <br> Telephone: +251-0115518085 P.O.Box 316</p>
        </div>
        <div class="col-md-12" style="padding-bottom: 20px;">
          <p class="h1">Patient Admission</p>
        </div>
        <a href="../dispatcher.php" class="btn btn-primary btn-sm" role="button" aria-disabled="true">
          <p class="h4">
            <p class="h4">Return to Dashboard</p>
          </p>
        </a>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form>
            <div class="col-md-12 register-patient-bio">
              <div class="form-group row">
                <label for="card-number" class="col-4 col-form-label">Card No.</label>
                <div class="col-4">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">C-</div>
                    </div>
                    <input id="card-number" name="card-number" placeholder="Write card number" type="number" min="0" step="1" class="form-control" required="required">
                    <a type="text" class="auto-generate-card btn btn-primary">Auto Generate</a>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="fullname" class="col-4 col-form-label">Name and Surname</label>
                <div class="col-6">
                  <input id="fullname" name="fu
                  llname" placeholder="Write patient full name" type="text" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group row">
                <label for="gender" class="col-4 col-form-label">Gender (Sex)</label>
                <div class="col-2">
                  <select id="gender" name="gender" class="custom-select" required="required">
                    <option value="unknown">Choose gender</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                  </select>
                </div>
                <label for="age" class="col-1 col-form-label">Age</label>
                <div class="col-2">
                  <input id="age" name="age" placeholder="Write age" type="number" min="0" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group row">
                <label for="region" class="col-4 col-form-label">Region</label>
                <div class="col-6">
                  <select id="subcity" name="region" class="custom-select" required="required">
                    <option value="unknown">Choose Region</option>
                    <?php
                    foreach ($regions as $key => $value) {
                      echo '<option value="' . $key . '">' . $value . '</option>';
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="wereda" class="col-4 col-form-label">Wedera</label>
                <div class="col-2">
                  <input id="wereda" name="wereda" placeholder="Write wereda" type="number" class="form-control" required="required">
                </div>
                <label for="kebele" class="col-1 col-form-label">Kebele</label>
                <div class="col-2">
                  <input id="kebele" name="kebele" placeholder="Write keble" type="number" class="form-control" required="required">
                </div>
                <label for="phone" class="col-1 col-form-label">Phone (+251-0)</label>
                <div class="col-2">
                  <input id="phone" name="phone" placeholder="Write phone number" type="number" class="form-control" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required="required">
                </div>
              </div>
              <div class="form-group row">
                <label for="subcity" class="col-4 col-form-label">Subcity</label>
                <div class="col-4">
                  <select id="subcity" name="subcity" class="custom-select" required="required">
                    <option value="unknown">Choose subcity</option>
                    <option value="unknown">Arada Sub City</option>
                    <option value="unknown">Akaki Kaliti Sub City</option>
                    <option value="unknown">Addis Ketema Sub City</option>
                    <option value="unknown">Bole Sub City</option>
                    <option value="unknown">Gullele Sub City</option>
                    <option value="unknown">Kirkos Sub City</option>
                    <option value="unknown">Kolfe Keranio Sub City</option>
                    <option value="unknown">Lideta Sub City</option>
                    <option value="unknown">Nefas Silk Sub City</option>
                    <option value="unknown">Yeka Sub City</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="religion" class="col-4 col-form-label">Religion</label>
                <div class="col-4">
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
              <div class="form-group row">
                <label for="department-name" class="col-4 col-form-label">Department</label>
                <div class="col-8">
                  <select id="ward" name="department" class="custom-select" required="required">
                    <option value="unknown">Choose department</option>
                    <option value="emergency-care">Emergency care</option>
                    <option value="anesthesia-and-intensive-care">Anesthesia and intensive care</option>
                    <option value="geriatrics">Geriatrics</option>
                    <option value="heart-and-physiology">Heart and physiology</option>
                    <option value="internal-medicin-and-infection">Internal medicine and infection</option>
                    <option value="surgery-and-urology">Surgery and urology</option>
                    <option value="gynecology-and-childbirth">Gynecology and childbirth</option>
                    <option value="medical-specialist-care">Medical specialist care</option>
                    <option value="neurology">Neurology</option>
                    <option value="orthopedics">Orthopedics</option>
                    <option value="radiology">Radiology</option>
                    <option value="rehabilitation-medicine">Rehabilitation medicine</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="bed-number" class="col-4 col-form-label">Bed No.</label>
                <div class="col-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">B-</div>
                    </div>
                    <input id="bed-number" name="bed-number" placeholder="Write bed number" type="text" class="form-control" required="required">
                  </div>
                </div>
                <label for="examination-room-number" class="col-2 col-form-label">Examination Room No.</label>
                <div class="col-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Room-</div>
                    </div>
                    <input id="examination-room-" name="examination-room-" placeholder="Write Examination Room Number" type="text" class="form-control" required="required">
                  </div>
                </div>
              </div>


              <div class="form-group row">
                <label for="refering-hospital-name" class="col-4 col-form-label">Refered from</label>
                <div class="col-8">
                  <select class="form-control" name="refering-hospital-name">
                    <?php
                    foreach ($hospital as $key => $value) {
                      echo '<option value = "' . $key . '">' . $value . '</option>';
                    }
                    ?>
                  </select>
                </div>
                <div class="offset-4 col-8">
                  <input id="refering-hospital-name-other" name="refering-hospital-name-other" placeholder="Write referring hospital if not in list" type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-12 register-patient-allergy">
              <div class="form-group row">
                <label class="col-4 col-form-label">Patient have Allergies<sup>*</sup></label>
                <div class="col-4">
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="patient-allergies" id="patient-allergies_0" type="checkbox" checked="checked" aria-describedby="patient-allergiesHelpBlock" class="custom-control-input" value="1">
                    <label for="patient-allergies_0" class="custom-control-label">No</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="patient-allergies" id="patient-allergies_1" type="checkbox" aria-describedby="patient-allergiesHelpBlock" class="custom-control-input" value="0">
                    <label for="patient-allergies_1" class="custom-control-label">Yes</label>
                  </div>
                  <select class="form-control" name="refering-hospital-name">
                    <option value="unknown">Choose Allergy</option>
                    <?php
                    foreach ($allegies as $key => $value) {
                      echo '<option value = "' . $key . '" title="' . $value . '">' . $key . '</option>';
                    }
                    ?>
                  </select>
                  <span id="patient-allergiesHelpBlock" class="form-text text-muted">Check if patient have allergies if yes write in field below</span>
                  <textarea id="patient-allergies-if-yes" placeholder="Write here if Patient have allergies" name="patient-allergies-if-yes" cols="40" rows="3" class="form-control" aria-describedby="patient-allergies-if-yesBlock" required="required"></textarea>
                </div>
              </div>
            </div>
            <div class="col-md-12 register-patient-bio">
              <div class="form-group row">
                <label for="diagnosis-on-admission" class="col-4 col-form-label">Diagnosis on Admission</label>
                <div class="col-8">
                  <textarea id="diagnosis-on-admission" name="diagnosis-on-admission" cols="40" rows="5" class="form-control" aria-describedby="diagnosis-on-admissionHelpBlock" required="required"></textarea>
                  <span id="diagnosis-on-admissionHelpBlock" class="form-text text-muted">Write diagnosis on patient arrival</span>
                </div>
              </div>
              <!-- <div class="form-group row">
              <label for="diagnosis-ascertained" class="col-4 col-form-label">Diagnosis Ascertained</label>
              <div class="col-8">
                <textarea id="diagnosis-ascertained" name="diagnosis-ascertained" cols="40" rows="5" class="form-control" aria-describedby="diagnosis-ascertainedHelpBlock"></textarea>
                <span id="diagnosis-ascertainedHelpBlock" class="form-text text-muted">Write the when diagnosis is certained</span>
              </div>
            </div>
            <div class="form-group row">
              <label for="result" class="col-4 col-form-label">Result</label>
              <div class="col-8">
                <textarea id="result" name="result" cols="40" rows="5" class="form-control"></textarea>
              </div>
            </div> -->
              <div class="form-group row">
                <div class="col-4 col-sm-12 col-xs-12">
                <div class="form-group row">
                    <label for="name-of-his-her-doctor" class="col-4 col-form-label">Name of his/her doctor</label>
                    <div class="col-4">
                      <select id="name-of-his-her-doctor" name="name-of-his-her-doctor" aria-describedby="name-of-his-her-doctorHelpBlock" required="required" class="custom-select">
                        <option value="unknown">Choose doctor</option>
                        <option value="a">Dr. A</option>
                        <option value="b">Dr. B</option>
                        <option value="other">Other</option>
                      </select>
                      <span id="name-of-his-her-doctorHelpBlock" class="form-text text-muted">Name of patient following doctor</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="date-of-admission" class="col-4 col-form-label">Date of Admission</label>
                    <div class="col-2">
                      <input id="date-of-admission" name="date-of-admission" type="date" class="form-control" required="required">
                      <!-- <span id="date-of-admissionHelpBlock" class="form-text text-muted">when was the patient admitted</span> -->
                    </div>
                    <label for="admitting-doctor" class="col-2 col-form-label">Admitting Doctor</label>
                    <div class="col-4">
                      <select id="admitting-doctor" name="admitting-doctor" class="custom-select" aria-describedby="admitting-doctorHelpBlock">
                        <option value="unknown">Choose doctor</option>
                        <option value="a">Dr. A</option>
                        <option value="b">Dr. B</option>
                        <option value="other">Other</option>
                      </select>
                      <!-- <span id="admitting-doctorHelpBlock" class="form-text text-muted">Choose Admitting Doctor</span> -->
                    </div>
                  </div>
                </div>
                <div class="col-4 col-sm-12 col-xs-12">
                  <div class="form-group row">
                    <label for="date-of-discharge" class="col-4 col-form-label">Date of Discharge</label>
                    <div class="col-2">
                      <input id="date-of-discharge" name="date-of-discharge" type="date" class="form-control" aria-describedby="date-of-dischargeHelpBlock">
                      <!-- <span id="date-of-dischargeHelpBlock" class="form-text text-muted">when was the patient discharged</span> -->
                    </div>
                    <label for="discharging-doctor" class="col-2 col-form-label">Discharging Doctor</label>
                    <div class="col-4">
                      <select id="discharging-doctor" name="discharging-doctor" class="custom-select" aria-describedby="discharging-doctorHelpBlock" required="required">
                        <option value="unknown">Choose doctor</option>
                        <option value="a">Dr. A</option>
                        <option value="b">Dr. B</option>
                        <option value="other">Other</option>
                      </select>
                      <!-- <span id="discharging-doctorHelpBlock" class="form-text text-muted">Choose the discharging Doctor</span> -->
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="director-signature-for-admission" class="col-4 col-form-label">Director Signature for Admission</label>
                    <div class="col-2">
                      <select id="director-signature-for-admission" name="director-signature-for-admission" required="required" class="custom-select" aria-describedby="director-signature-for-admissionHelpBlock">
                        <option value="unknow">Choose signature</option>
                        <option value="yes-admitted">Yes, I confirm Admission</option>
                      </select>
                      <!-- <span id="director-signature-for-admissionHelpBlock" class="form-text text-muted">Medical Director confirm for Admission of patient</span> -->
                    </div>

                    <label for="director-signature-for-dicharge" class="col-2 col-form-label">Director Signature for Dicharge</label>
                    <div class="col-2">
                      <select id="director-signature-for-dicharge" name="director-signature-for-dicharge" class="custom-select" aria-describedby="director-signature-for-dichargeHelpBlock">
                        <option value="unknow">Choose signature</option>
                        <option value="yes-confirm-discharge">Yes, I confirm dischage</option>
                      </select>
                      <!-- <span id="director-signature-for-dichargeHelpBlock" class="form-text text-muted">Medical Director confirm for Discharging of patient</span> -->
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="offset-4 col-8">
                      <div class="col-12" style="text-align: right;">
                        <button name="submit" type="submit" class="btn btn-lg btn-primary" style="padding:1em;">Register</button>
                      </div>
                    </div>
                  </div>
                </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <script>
    var max = 13;
    var $wrap = $('.card-number');
    $('.auto-generate-card').click(function() {
      var num = +$wrap.text();
      $wrap.text(num + Math.ceil(Math.random() * max));
    });
  </script>
  <footer>
    <?php footer(); ?>
  </footer>
</body>

</html>