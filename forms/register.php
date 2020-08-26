<?php
include_once "../locale/en.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      min-height: 100vh;
    }

    .flex-fill {
      flex: 1 1 auto;
      width: 50%;
      border-radius: 15px;
      background-color: #87ceeb66;
    }

    input {
      border: none;
    }

    .col-form-label {
      text-align: right;
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
        <a href="../dispatcher.php" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Back to Dashboard</a>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form>
            <div class="form-group row">
              <label for="fullname" class="col-4 col-form-label">Name and Surname</label>
              <div class="col-8">
                <input id="fullname" name="fullname" placeholder="write patient full name" type="text" class="form-control" required="required">
              </div>
            </div>
            <div class="form-group row">
              <label for="residence" class="col-4 col-form-label">Address</label>
              <div class="col-8">
                <input id="residence" name="residence" placeholder="write patient address, e.g street, " type="text" class="form-control" required="required">
              </div>
            </div>
            <div class="form-group row">
              <label for="gender" class="col-4 col-form-label">Gender (Sex)</label>
              <div class="col-4">
                <select id="gender" name="gender" class="custom-select" required="required">
                  <option value="unknown">Choose gender</option>
                  <option value="female">Female</option>
                  <option value="male">Male</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="age" class="col-4 col-form-label">Age</label>
              <div class="col-4">
                <input id="age" name="age" placeholder="write age" type="number" min="0" class="form-control" required="required">
              </div>
            </div>
            <div class="form-group row">
              <label for="wereda" class="col-4 col-form-label">Wedera</label>
              <div class="col-4">
                <input id="wereda" name="wereda" placeholder="write wereda" type="text" class="form-control" required="required">
              </div>
            </div>
            <div class="form-group row">
              <label for="kebele" class="col-4 col-form-label">Kebele</label>
              <div class="col-4">
                <input id="kebele" name="kebele" placeholder="write keble" type="text" class="form-control" required="required">
              </div>
            </div>
            <div class="form-group row">
              <label for="subcity" class="col-4 col-form-label">Subcity</label>
              <div class="col-8">
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
              <label for="ward-number" class="col-4 col-form-label">Ward</label>
              <div class="col-8">
                <select id="ward" name="ward" class="custom-select" required="required">
                  <option value="unknown">Choose ward</option>
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
              <div class="col-4">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">B-</div>
                  </div>
                  <input id="bed-number" name="bed-number" placeholder="write bed number" type="text" class="form-control" required="required">
                </div>
              </div>
            </div>


            <div class="form-group row">

              <label for="refering-hospital-name" class="col-4 col-form-label">Refering from Hospital/Health Center</label>
              <div class="col-4">
                <select class="form-control" name="refering-hospital-name">
                  <?php
                  foreach ($hospital as $key => $value) {
                    echo '<option value = "' . $key . '">' . $value . '</option>';
                  }
                  ?>
                </select>
              </div>
              <div class="col-4">
                <input id="refering-hospital-name-other" name="refering-hospital-name-other" placeholder="write referring hospital if not in list" type="text" class="form-control" required="required">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-4 col-form-label">Patient have Allergies</label>
              <div class="col-8">
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input name="patient-allergies" id="patient-allergies_0" type="checkbox" checked="checked" aria-describedby="patient-allergiesHelpBlock" class="custom-control-input" value="1">
                  <label for="patient-allergies_0" class="custom-control-label">No</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input name="patient-allergies" id="patient-allergies_1" type="checkbox" aria-describedby="patient-allergiesHelpBlock" class="custom-control-input" value="0">
                  <label for="patient-allergies_1" class="custom-control-label">Yes</label>
                </div>
                <span id="patient-allergiesHelpBlock" class="form-text text-muted">Check if patient have allergies if yes write in field below</span>
                <textarea id="patient-allergies-if-yes" placeholder="Write here if Patient have allergies" name="patient-allergies-if-yes" cols="40" rows="3" class="form-control" aria-describedby="patient-allergies-if-yesBlock" required="required"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="diagnosis-on-admission" class="col-4 col-form-label">Diagnosis on Admission</label>
              <div class="col-8">
                <textarea id="diagnosis-on-admission" name="diagnosis-on-admission" cols="40" rows="5" class="form-control" aria-describedby="diagnosis-on-admissionHelpBlock" required="required"></textarea>
                <span id="diagnosis-on-admissionHelpBlock" class="form-text text-muted">Write diagnosis on patient arrival</span>
              </div>
            </div>
            <div class="form-group row">
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
            </div>
            <div class="form-group row">
              <label for="date-of-admission" class="col-4 col-form-label">Date of Admission</label>
              <div class="col-4">
                <input id="date-of-admission" name="date-of-admission" type="date" class="form-control" required="required">
                <span id="date-of-admissionHelpBlock" class="form-text text-muted">when was the patient admitted</span>
              </div>
            </div>
            <div class="form-group row">
              <label for="dr-admitting" class="col-4 col-form-label">Admitting Doctor</label>
              <div class="col-8">
                <select id="dr-admitting" name="dr-admitting" class="custom-select" aria-describedby="dr-admittingHelpBlock">
                  <option value="unknown">Choose doctor</option>
                  <option value="a">Dr. A</option>
                  <option value="b">Dr. B</option>
                  <option value="other">Other</option>
                </select>
                <span id="dr-admittingHelpBlock" class="form-text text-muted">Choose Admitting Doctor</span>
              </div>
            </div>
            <div class="form-group row">
              <label for="date-of-discharge" class="col-4 col-form-label">Date of Discharge</label>
              <div class="col-4">
                <input id="date-of-discharge" name="date-of-discharge" type="date" class="form-control" aria-describedby="date-of-dischargeHelpBlock">
                <span id="date-of-dischargeHelpBlock" class="form-text text-muted">when was the patient discharged</span>
              </div>
            </div>
            <div class="form-group row">
              <label for="discharging-doctor" class="col-4 col-form-label">Discharging Doctor</label>
              <div class="col-8">
                <select id="discharging-doctor" name="discharging-doctor" class="custom-select" aria-describedby="discharging-doctorHelpBlock" required="required">
                  <option value="unknown">Choose doctor</option>
                  <option value="a">Dr. A</option>
                  <option value="b">Dr. B</option>
                  <option value="other">Other</option>
                </select>
                <span id="discharging-doctorHelpBlock" class="form-text text-muted">Choose the discharging Doctor</span>
              </div>
            </div>
            <div class="form-group row">
              <label for="name-of-his-her-doctor" class="col-4 col-form-label">Name of his/her doctor</label>
              <div class="col-8">
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
              <label for="director-signature-for-admission" class="col-4 col-form-label">Director Signature for Admission</label>
              <div class="col-4">
                <select id="director-signature-for-admission" name="director-signature-for-admission" required="required" class="custom-select" aria-describedby="director-signature-for-admissionHelpBlock">
                  <option value="unknow">Choose signature</option>
                  <option value="yes-admitted">Yes, I confirm Admission</option>
                </select>
                <span id="director-signature-for-admissionHelpBlock" class="form-text text-muted">Medical Director confirm for Admission of patient</span>
              </div>
            </div>
            <div class="form-group row">
              <label for="director-signature-for-dicharge" class="col-4 col-form-label">Director Signature for Dicharge</label>
              <div class="col-4">
                <select id="director-signature-for-dicharge" name="director-signature-for-dicharge" class="custom-select" aria-describedby="director-signature-for-dichargeHelpBlock">
                  <option value="unknow">Choose signature</option>
                  <option value="yes-confirm-discharge">Yes, I confirm dischage</option>
                </select>
                <span id="director-signature-for-dichargeHelpBlock" class="form-text text-muted">Medical Director confirm for Discharging of patient</span>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-lg btn-primary">Register</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <footer>
      Copyright © 2020 <br>Powered by <a target="blank" href="https://www.medic-ethiopia.com">medic-ethiopia</a>
    </footer>
  </main>

</body>

</html>