<?php
include_once "./lab-all-test-defines.php";
include_once "./config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  headerLinks("Patient detail");
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
          <?php
          if (isset($_GET['patient_card_number'])) {
            echo '
            <div class="title_left">
              <a href="patient-list-triage.php" class="title_link btn btn-primary" type="button">
                <p class="h6">⏎ Return to Central Triage Patient List</p>
              </a>

            </div>';
          } else {
            echo '
            <div class="title_left">
              <a href="index-central-triage.php" class="title_link btn btn-primary" type="button">
                <p class="h6">⏎ Return to Central Triage Page</p>
              </a>
              <p class="h3">Central Triage:Patient List</p>
            </div>';
          }
          ?>
        </div>

        <div class="clearfix"></div>

        <div class="row">
          <?php
          if (isset($_GET['patient_card_number'])) {
            echo '<div class="col-md-12 col-sm-12" style="display:none;">';
          } else {
            echo '<div class="col-md-12 col-sm-12">';
          }
          ?>
          <div class="x_panel">
            <div class="x_content">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">

                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Directed to</th>
                          <th>Registered On</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        $triage_list = new MeTriageQueue('*');
                        $result = $triage_list->getResultSet();
                        $result->data_seek(0);
                        while ($row2 = $result->fetch_object()) {
                          if ($row2->department == 'OPD') {
                            continue;
                          }
                          echo '<tr>';
                          echo '<td>';
                          $patient = new MePatientTable($row2->patient_card_number);
                          echo '<p class="h6 text-primary"><i class="fa fa-user"></i> ' . $patient->getPatientFirstName() . ', Age:' . $patient->getPatientAge() . '</p>';
                          echo '<strong>Card No.:</strong> ' . $row2->patient_card_number . ' ';
                          echo '<p>';
                          echo '<strong>PhoneNr.:</strong> ' . $patient->getPatientPhone() . ' ';
                          echo '<strong>Wereda.:</strong> ' . $patient->getPatientWereda() . ' ';
                          echo '<strong>Kebele.:</strong> ' . $patient->getPatientKebele();

                          echo '<p><strong><a href="./patient-list-triage.php?patient_card_number=' . $row2->patient_card_number .
                            '" type="button" class="btn btn-sm btn-success"><i class="fa fa-arrow-right"></i> Do Triage</a></strong></p>';
                          echo '</td>';
                          echo '<td>' . $row2->department . '</td>';
                          echo '<td>' . $row2->requested_on . '</td>';
                          echo '</tr>';
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php
        if (!isset($_GET['patient_card_number'])) {
          echo '<div class="col-md-12 col-sm-12" style="display:none;">';
        } else {
          echo '<div class="col-md-12 col-sm-12">';
        }
        ?>
        <div class="x_panel" style="border:3px solid green">
          <div class="x_title">
            <h1>ED Triage Sheet</h1>
            <div class="clearfix"></div>
            <?php
            show_patient('patient-list-triage.php', $_GET['patient_card_number']);
            ?>
          </div>
          <div class="x_content">
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="patient-queue.php">
              <!-- -->
              <div class="item form-group">
                <div class="col-md-12 col-sm-12 col-sm-12">
                  <label for="region" class="col-form-label col-md-3 col-sm-3 label-align">Mode of Arrival to Hospital/ED</label>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter" id="search-filter_0" type="checkbox" class="custom-control-input" value="all" aria-describedby="search-filterHelpBlock">
                    <label for="search-filter_0" class="custom-control-label">Ambulance</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter" id="search-filter_1" type="checkbox" class="custom-control-input" value="name" aria-describedby="search-filterHelpBlock">
                    <label for="search-filter_1" class="custom-control-label">Private Car</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter" id="search-filter_2" type="checkbox" class="custom-control-input" value="name" aria-describedby="search-filterHelpBlock">
                    <label for="search-filter_2" class="custom-control-label">Walking</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter" id="search-filter_3" type="checkbox" class="custom-control-input" value="telephone" aria-describedby="search-filterHelpBlock">
                    <label for="search-filter_3" class="custom-control-label">Carried</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter" id="search-filter_4" type="checkbox" class="custom-control-input" value="address" aria-describedby="search-filterHelpBlock">
                    <label for="search-filter_4" class="custom-control-label">Taxi</label>
                  </div>
                </div>
              </div>
              <!-- -->
              <div class="item form-group">
                <label for="refering-hospital-name" class="col-form-label col-md-3 col-sm-3 label-align">Origin of Referal
                  </label>
                <div class="col-md-6 col-sm-6">
                  <select id="refering-hospital-name" name="refering-hospital-name" class="custom-select">
                    <option value="unknown">Choose Refered from</option>
                    <option value="emergency">Emergency</option>
                    <option value="polic"> Police</option>
                    <option value="self"> Self</option>
                    <option value="relative"> Relative</option>
                    <option value="non-relative"> Non-Relative</option>
                    <?php
                    foreach ($hospital as $key => $value) {
                      echo '<option value = "' . $key . '">' . $value . '</option>';
                    }
                    ?>
                  </select>
                </div>
                <!-- <div class="col-md-2 col-sm-2">
                  <select id="refering-source" name="refering-source" class="custom-select">
                    <option value="unknown">Refere</option>

                  </select>
                </div> -->
                <!-- <div class="custom-control custom-radio custom-control-inline">
                      <input name="search-filter-hospital" id="search-filter-hospital_0" type="radio" class="custom-control-input" value="all" aria-describedby="search-filterHelpBlock">
                      <label for="search-filter-hospital_0" class="custom-control-label">Private Hospital</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="search-filter-hospital" id="search-filter-hospital_1" type="radio" class="custom-control-input" value="name" aria-describedby="search-filterHelpBlock">
                      <label for="search-filter-hospital_1" class="custom-control-label">Health Center</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="search-filter-hospital" id="search-filter-hospital_2" type="radio" class="custom-control-input" value="name" aria-describedby="search-filterHelpBlock">
                      <label for="search-filter-hospital_2" class="custom-control-label">Police</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="search-filter-hospital" id="search-filter-hospital_3" type="radio" class="custom-control-input" value="telephone" aria-describedby="search-filterHelpBlock">
                      <label for="search-filter-hospital_3" class="custom-control-label"></label>
                    </div>
                  </div> -->

              </div>
              <div class="item form-group">
                <div class="offset-3 col-md-6 col-sm-6">
                  <input id="refering-hospital-name-other" name="refering-hospital-name-other" placeholder="Write referring hospital if not in list" type="text" class="form-control">
                </div>
              </div>
              <!-- -->
              <div class="item form-group">
                <div class="col-md-12 col-sm-12 col-sm-12">
                  <label for="region" class="col-form-label col-md-3 col-sm-3 label-align">Pre-hospital care/ First Aid Given</label>
                  <div class="col-md-4 col-sm-4">
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input name="search-filter-first-aid" id="search-filter-first-aid_0" type="checkbox" class="custom-control-input" value="all" aria-describedby="search-filterHelpBlock">
                      <label for="search-filter-first-aid_0" class="custom-control-label">YES</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input name="search-filter-first-aid" id="search-filter-first-aid_1" type="checkbox" class="custom-control-input" value="name" aria-describedby="search-filterHelpBlock">
                      <label for="search-filter-first-aid_1" class="custom-control-label">NO</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- -->
              <div class="item form-group">
                <label for="chief-compliant" class="col-form-label col-md-3 col-sm-3 label-align">Chief Compliant</label>
                <div class="col-md-8 col-sm-12">
                  <textarea id="chief-compliant" name="chief-compliant" cols="40" rows="3" class="form-control"></textarea>
                  <p></p>
                  <p><strong>A. Non-Trauma</strong></p>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-non-trauma" id="search-filter-non-trauma_0" type="checkbox" class="custom-control-input" value="all" aria-describedby="search-filter-non-traumaHelpBlock">
                    <label for="search-filter-non-trauma_0" class="custom-control-label">Chest Pain</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-non-trauma" id="search-filter-non-trauma_1" type="checkbox" class="custom-control-input" value="name" aria-describedby="search-filter-non-traumaHelpBlock">
                    <label for="search-filter-non-trauma_1" class="custom-control-label">Fever</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-non-trauma" id="search-filter-non-trauma_2" type="checkbox" class="custom-control-input" value="name" aria-describedby="search-filter-non-traumaHelpBlock">
                    <label for="search-filter-non-trauma_2" class="custom-control-label">Diarrhea/Vomiting</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-non-trauma" id="search-filter-non-trauma_3" type="checkbox" class="custom-control-input" value="telephone" aria-describedby="search-filter-non-traumaHelpBlock">
                    <label for="search-filter-non-trauma_3" class="custom-control-label">Headache</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-non-trauma" id="search-filter-non-trauma_4" type="checkbox" class="custom-control-input" value="address" aria-describedby="search-filter-non-traumaHelpBlock">
                    <label for="search-filter-non-trauma_4" class="custom-control-label">Sudden Collapse</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-non-trauma" id="search-filter-non-trauma_5" type="checkbox" class="custom-control-input" value="address" aria-describedby="search-filter-non-traumaHelpBlock">
                    <label for="search-filter-non-trauma_5" class="custom-control-label">Poisoning</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-non-trauma" id="search-filter-non-trauma_6" type="checkbox" class="custom-control-input" value="address" aria-describedby="search-filter-non-traumaHelpBlock">
                    <label for="search-filter-non-trauma_6" class="custom-control-label">Convulsion</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-non-trauma" id="search-filter-non-trauma_7" type="checkbox" class="custom-control-input" value="address" aria-describedby="search-filter-non-traumaHelpBlock">
                    <label for="search-filter-non-trauma_7" class="custom-control-label">Respiratory Problem</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-non-trauma" id="search-filter-non-trauma_8" type="checkbox" class="custom-control-input" value="address" aria-describedby="search-filter-non-traumaHelpBlock">
                    <label for="search-filter-non-trauma_8" class="custom-control-label">Abdominal Pain</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-non-trauma" id="search-filter-non-trauma_9" type="checkbox" class="custom-control-input" value="address" aria-describedby="search-filter-non-traumaHelpBlock">
                    <label for="search-filter-non-trauma_9" class="custom-control-label">Other</label>
                  </div>
                  <p></p>
                  <p><strong>B. Trauma</strong></p>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-trauma" id="search-filter-trauma_0" type="checkbox" class="custom-control-input" value="all" aria-describedby="search-filter-traumaHelpBlock">
                    <label for="search-filter-trauma_0" class="custom-control-label">RTA</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-trauma" id="search-filter-trauma_1" type="checkbox" class="custom-control-input" value="name" aria-describedby="search-filter-traumaHelpBlock">
                    <label for="search-filter-trauma_1" class="custom-control-label">Fall Accident</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-trauma" id="search-filter-trauma_2" type="checkbox" class="custom-control-input" value="name" aria-describedby="search-filter-traumaHelpBlock">
                    <label for="search-filter-trauma_2" class="custom-control-label">Suicide</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-trauma" id="search-filter-trauma_3" type="checkbox" class="custom-control-input" value="telephone" aria-describedby="search-filter-traumaHelpBlock">
                    <label for="search-filter-trauma_3" class="custom-control-label">Homicide</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-trauma" id="search-filter-trauma_4" type="checkbox" class="custom-control-input" value="address" aria-describedby="search-filter-traumaHelpBlock">
                    <label for="search-filter-trauma_4" class="custom-control-label">Gunshot</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-trauma" id="search-filter-trauma_5" type="checkbox" class="custom-control-input" value="address" aria-describedby="search-filter-traumaHelpBlock">
                    <label for="search-filter-trauma_5" class="custom-control-label">Stub</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-trauma" id="search-filter-trauma_6" type="checkbox" class="custom-control-input" value="address" aria-describedby="search-filter-traumaHelpBlock">
                    <label for="search-filter-trauma_6" class="custom-control-label">Burn</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-trauma" id="search-filter-trauma_7" type="checkbox" class="custom-control-input" value="address" aria-describedby="search-filter-traumaHelpBlock">
                    <label for="search-filter-trauma_7" class="custom-control-label">Foreign Body Swallowing</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-trauma" id="search-filter-trauma_8" type="checkbox" class="custom-control-input" value="address" aria-describedby="search-filter-traumaHelpBlock">
                    <label for="search-filter-trauma_8" class="custom-control-label">Other</label>
                  </div>
                  <p></p>
                  <p><strong>C. <u>Ob</u>stetrics and <u>Gyn</u>ecology</strong></p>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-ob-gyn" id="search-filter-ob-gyn_0" type="checkbox" class="custom-control-input" value="all" aria-describedby="search-filter-ob-gynHelpBlock">
                    <label for="search-filter-ob-gyn_0" class="custom-control-label">Vagina bleeding</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-ob-gyn" id="search-filter-ob-gyn_1" type="checkbox" class="custom-control-input" value="name" aria-describedby="search-filter-ob-gynHelpBlock">
                    <label for="search-filter-ob-gyn_1" class="custom-control-label">Labor Pain</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-ob-gyn" id="search-filter-ob-gyn_2" type="checkbox" class="custom-control-input" value="name" aria-describedby="search-filter-ob-gynHelpBlock">
                    <label for="search-filter-ob-gyn_2" class="custom-control-label">Lower Abdominal Pain</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-ob-gyn" id="search-filter-ob-gyn_3" type="checkbox" class="custom-control-input" value="telephone" aria-describedby="search-filter-ob-gynHelpBlock">
                    <label for="search-filter-ob-gyn_3" class="custom-control-label">Eclampsia</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-ob-gyn" id="search-filter-ob-gyn_4" type="checkbox" class="custom-control-input" value="address" aria-describedby="search-filter-ob-gynHelpBlock">
                    <label for="search-filter-ob-gyn_4" class="custom-control-label">FHB</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-ob-gyn" id="search-filter-ob-gyn_5" type="checkbox" class="custom-control-input" value="address" aria-describedby="search-filter-ob-gynHelpBlock">
                    <label for="search-filter-ob-gyn_5" class="custom-control-label">P/E</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="search-filter-ob-gyn" id="search-filter-ob-gyn_6" type="checkbox" class="custom-control-input" value="address" aria-describedby="search-filter-ob-gynHelpBlock">
                    <label for="search-filter-ob-gyn_6" class="custom-control-label">Other</label>
                  </div>
                </div>
              </div>
              <!-- -->
              <div class="item form-group">
                <label for="past-medical-illness" class="col-form-label col-md-3 col-sm-3 label-align">Past Medical illness</label>
                <div class="col-md-6 col-sm-6">
                  <input id="past-medical-illness" name="past-medical-illness" placeholder="Write medical illness" type="text" class="form-control">
                </div>
              </div>
              <!-- -->
              <div class="item form-group">
                <label for="region" class="col-form-label col-md-3 col-sm-3 label-align">History of allergy</label>
                <div class="col-md-6 col-sm-6">
                  <select id="allergies-name" name="allergies-name" class="custom-select">
                    <option value="choose">Choose allergy</option>
                    <?php
                    foreach ($allergies as $key => $value) {
                      echo '<option value = "' . $key . '">' . $key . '</option>';
                    }
                    ?>
                  </select>
                </div>
              </div>
              <!-- -->
              <div class="item form-group">
                <label for="rbs" class="col-form-label col-md-3 col-sm-3 label-align">RBS</label>
                <div class="col-md-6 col-sm-6">
                  <input id="rbs" name="rbs" placeholder="Write RBS" type="number" class="form-control" required="required">
                </div>
              </div>
              <div class="item form-group">
                <label for="spo2" class="col-form-label col-md-3 col-sm-3 label-align">SpO2</label>
                <div class="col-md-6 col-sm-6">
                  <input id="spo2" name="spo2" placeholder="Write SpO2" type="number" class="form-control" required="required">
                </div>
              </div>
              <div class="item form-group">
                <label for="bp" class="col-form-label col-md-3 col-sm-3 label-align">B/P</label>
                <div class="col-md-6 col-sm-6">
                  <input id="bp" name="bp" placeholder="Write B/P" type="number" class="form-control" required="required">
                </div>
              </div>
              <div class="item form-group">
                <label for="pr" class="col-form-label col-md-3 col-sm-3 label-align">PR</label>
                <div class="col-md-6 col-sm-6">
                  <input id="pr" name="pr" placeholder="Write PR" type="number" class="form-control" required="required">
                </div>
              </div>
              <div class="item form-group">
                <label for="temprature" class="col-form-label col-md-3 col-sm-3 label-align">Temp,&#8451;</label>
                <div class="col-md-6 col-sm-6">
                  <input id="temprature" name="temprature" placeholder="Write temprature" type="number" class="form-control" required="required">
                </div>
              </div>
              <!-- -->
              <div class="item form-group">
                <label for="condition-on-arrival" class="col-form-label col-md-3 col-sm-3 label-align">Condition on Arrival</label>
                <div class="col-md-6 col-sm-6">
                  <input id="condition-on-arrival" name="condition-on-arrival" placeholder="Condition on Arrival" type="text" class="form-control">
                </div>
              </div>

              <div class="item form-group">
                <div class="col-md-12 col-sm-12">
                  <div class="card-box table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered table-fixed" style="width:100%; text-align:center;">
                      <thead>
                        <tr style="background:#041E42;color:white">
                          <th colspan="8">
                            <p class="h5">Modified Early Warning Score (MEWS)</p>
                          </th>
                        </tr>
                        <tr class="h6" style="background:#041E42;color:white">
                          <th>Score</th>
                          <th>3</th>
                          <th>2</th>
                          <th>1</th>
                          <th>0</th>
                          <th>1</th>
                          <th>2</th>
                          <th>3</th>
                        </tr>

                      </thead>
                      <tbody>
                        <?php
                        foreach ($modifiedEarlyWarningScore as $key => $value) {

                          echo '<tr>';
                          echo '
                              <td class="h6" style="background:#041E42;color:white">' . $key . '</td>
                              <td class="h6" style="background:#D6001C; color:white;">

                              <div class="custom-control custom-radio custom-control-inline">
                                <input name="' . $key . '" id="' . $key . '-L3" type="radio" class="custom-control-input" value="a">
                                <label for="' . $key . '-L3" class="custom-control-label">' . $value["L3"] . '</label>
                              </div>
                              </td>
                              <td class="h6" style="background:orange"><div class="custom-control custom-radio custom-control-inline">
                              <input name="' . $key . '" id="' . $key . '-L2" type="radio" class="custom-control-input" value="a">
                              <label for="' . $key . '-L2" class="custom-control-label">' . $value["L2"] . '</label>
                            </div></td>
                              <td class="h6" style="background:yellow">
                              <div class="custom-control custom-radio custom-control-inline">
                              <input name="' . $key . '" id="' . $key . '-L1" type="radio" class="custom-control-input" value="a">
                              <label for="' . $key . '-L1" class="custom-control-label">' . $value["L1"] . '</label>
                            </div></td>
                              <td class="h6" style="background:#b9ee51"><div class="custom-control custom-radio custom-control-inline">
                              <input name="' . $key . '" id="' . $key . '-N" type="radio" class="custom-control-input" value="a">
                              <label for="' . $key . '-N" class="custom-control-label">' . $value["N"] . '</label>
                            </div></td>
                              <td class="h6" style="background:yellow"><div class="custom-control custom-radio custom-control-inline">
                              <input name="' . $key . '" id="' . $key . '-R1" type="radio" class="custom-control-input" value="a">
                              <label for="' . $key . '-R1" class="custom-control-label">' . $value["R1"] . '</label>
                            </div></td>
                              <td class="h6" style="background:orange"><div class="custom-control custom-radio custom-control-inline">
                              <input name="' . $key . '" id="' . $key . '-R2" type="radio" class="custom-control-input" value="a">
                              <label for="' . $key . '-R2" class="custom-control-label">' . $value["R2"] . '</label>
                            </div></td>
                              <td class="h6" style="background:#D6001C; color:white;"><div class="custom-control custom-radio custom-control-inline">
                              <input name="' . $key . '" id="' . $key . '-R3" type="radio" class="custom-control-input" value="a">
                              <label for="' . $key . '-R3" class="custom-control-label">' . $value["R3"] . '</label>
                            </div></td>
                              ';
                          echo '</tr>';
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="item form-group">
                <label for="assessment" class="col-form-label col-md-3 col-sm-3 label-align">Assessment</label>

                <div class="col-md-6 col-sm-6">
                  <select id="assessment" name="assessment" class="custom-select" required="required">
                    <option value="unknown">Choose assessment</option>
                    <option value="0" style="background:red;;color:black">Red</option>
                    <option value="1" style="background:orange;color:black">Orange</option>
                    <option value="2" style="background:yellow;color:black">Yellow</option>
                    <option value="3" style="background:green;color:white">Green</option>
                    <option value="4" style="background:black;color:white">Black</option>
                  </select>
                </div>
              </div>
              <div class="item form-group red-orange" style="display: none;">
                <label for="red-orange-detail" class="col-form-label col-md-3 col-sm-3 label-align">Addition help give to Patient</label>
                <div class="col-md-6 col-sm-6">
                  <textarea id="red-orange-detail" placeholder="Write here if Additional help is given to Patient" name="chief-compliant" cols="40" rows="4" class="form-control"></textarea>
                </div>
              </div>
              <div class="item form-group">
                <label for="transfer-name" class="col-form-label col-md-3 col-sm-3 label-align">Transfer to</label>
                <div class="col-md-6 col-sm-6">
                  <select id="transfer" name="transfer" class="custom-select" required="required">
                    <option value="unknown">Choose transfer</option>
                    <?php
                    foreach ($clinicList as $key => $value) {
                      $optVal = str_replace(')','',str_replace('(','-',str_replace(' ','-',strtolower($value))));
                      echo '<option value="'.$optVal.'">'.$value.'</option>';
                    }
                    ?>
                  </select>
                  <span>
                    <div class="h5" style="margin:5px;color: white;background:#000000;border:1px solid #333;padding:2px;border-radius:4px;"><strong><u>Attention</u></strong><i class="fa fa-exclamation"></i>
                      <p class="h5" style="color: white;background:#000000;padding:2px;border-radius:4px;"><i class="fa fa-asterisk"></i> <strong><span style="color: #D6001C;"> Red </span></strong>
                        and <strong><span style="color: orange;">Orange </span></strong>
                        - pass through patient's file to the respective <u>Emergency</u> department and <u> START RESUSCITATION</u> simultaneously!</p>
                      <p class="h5" style="color: white;background:#000000;padding:2px;border-radius:4px;"> <i class="fa fa-asterisk"></i> <strong><span style="color: yellow;">Yellow </span></strong>
                        and <strong><span style="color: #b9ee51;">Green </span></strong>
                        - pass on the patient's file to the respective <u>Emergency</u> department immediately!</p>
                    </div>
                  </span>
                </div>
              </div>
              <div class="item form-group">
                <label for="treatment-and-triage-investiagtion" class="col-form-label col-md-3 col-sm-3 label-align">Treatment and Investigation on triage</label>
                <div class="col-md-8 col-sm-12">
                  <textarea id="treatment-and-triage-investiagtion" name="treatment-and-triage-investiagtion" cols="40" rows="3" class="form-control"></textarea>
                </div>
              </div>

              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6">
                  <a href="patient-list-triage.php?request=cancel" type="button" class="btn btn-lg btn-danger">Cancel</a>
                  <button type="submit" class="btn btn-lg btn-primary">Sign & Save</button>
                </div>
              </div>
            </form>

          </div>
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
  <!-- Datatables -->
  <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>
  <script>
    $("#assessment").change(function() {
      var bkgcolor = $(this).children(":selected").css("background");
      var color = $(this).children(":selected").css("color");
      $('#assessment').css('background', bkgcolor);
      $('#assessment').css('color', color);
      var value = $('#assessment').val();

      if (value == 0  || value == 1) {
        $(".red-orange").show();
      } else{// if(value == 2 || value == 3) {
        $(".red-orange").hide();
      }
    });
  </script>
</body>

</html>