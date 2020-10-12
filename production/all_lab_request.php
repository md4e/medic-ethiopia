<?php

function lab_request_serology()
{
    echo '<div class="item form-group">
        <label for="serology-coagulation-sheet-date" class="col-form-label col-md-2 col-sm-2 label-align">Serology & Coagulation
        <span id="HelpBlock" class="form-text text-muted">
        <small>Choose the lab request by clicking on the item on the right</small>
        </span>
        </label>
        <div class="col-md-8 col-sm-8">';
    global $serologyAndCoagulationTestArray;
    foreach ($serologyAndCoagulationTestArray as $key => $value) {
        echo '
        <div class="col-md-4">
        <input name="lab-serology_" id="lab-serology-' . $key . '" type="button" style="font-weight:bold" value="+ ' . $value['name'] . '"
        onclick="isClicked(\'lab-serology-' . $key . '\',\'' . $value['name'] . '\',\'lab-serology-form\')">
    </div>
        ';
    }
    echo '</div></div>';
}

function lab_request_blood()
{
    echo '<div class="item form-group">
        <label for="lab_request_blood" class="col-form-label col-md-2 col-sm-2 label-align">Blood request
        <span id="HelpBlock" class="form-text text-muted">
        <small>Choose the lab request by clicking on the item on the right</small>
        </span>
        </label>
        <div class="col-md-6 col-sm-6">';
    global $bloodTestType;

    foreach ($bloodTestType as $key => $value) {
        echo '
        <div class="custom-control custom-checkbox custom-control-inline col-md-4 m-1">
        <input name="lab-blood" id="lab-blood-' . $key . '" type="checkbox" aria-describedby="lab-bloodHelpBlock" class="custom-control-input" value="0" required="required">
        <label for="lab-blood-' . $key . '" class="custom-control-label" title="blood">' . $value . '</label>
    </div>
        ';
    }
    echo '</div></div>';
}
function lab_request_hematology()
{
    echo '<div class="item form-group">
    <label for="lab_request_hematology" class="col-form-label col-md-2 col-sm-2 label-align">Hematology Request
    <span id="HelpBlock" class="form-text text-muted">
        <small>Choose the lab request by clicking on the item on the right</small>
        </span>
        </label>
    <div class="col-md-8 col-sm-8">';
    global $hematologyTestArray;
    foreach ($hematologyTestArray as $key => $value) {
        echo '
        <div class="col-md-4">
        <input name="lab-hematology_" id="lab-hematology-' . $key . '" type="button" style="font-weight:bold" value="+ ' . $value['name'] . '"
         onclick="isClicked(\'lab-hematology-' . $key . '\',\'' . $value['name'] . '\',\'lab-hematology-form\')">
    </div>
        ';
    }
    echo '</div></div>';
}

function lab_request_chemistry()
{
    include_once "./lab-all-test-defines.php";
    echo '<div class="item form-group">
        <label for="lab_request_chemistry" class="col-form-label col-md-2 col-sm-2 label-align">Chemistry Request
        <span id="HelpBlock" class="form-text text-muted">
        <small>Choose the lab request by clicking on the item on the right</small>
        </span>
        </label>
        <div class="col-md-6 col-sm-6">';
    global $chemistryLabTestArray;
    foreach ($chemistryLabTestArray as $key => $value) {
        echo '
        <div class="col-md-4">
        <input name="lab-chemistry-" id="lab-chemistry-' . $key . '" type="button" style="font-weight:bold" value="+ ' . $value['name'] . '"
         onclick="isClicked(\'lab-chemistry-' . $key . '\',\'' . $value['name'] . '\',\'lab-chemistry-form\',\'' . sizeof($chemistryLabTestArray) . '\')">
    </div>
        ';
    }
    echo '</div></div>';
}
function lab_request_urine()
{
    include_once "./lab-all-test-defines.php";
    echo '<div class="item form-group">
        <label for="lab_request_urine" class="col-form-label col-md-2 col-sm-2 label-align">Urine Analysis Request
        <span id="HelpBlock" class="form-text text-muted">
        <small>Choose the lab request by clicking on the item on the right</small>
        </span>
        </label>
        <div class="col-md-6 col-sm-6">';
    global $urineAnalysisWithMicroscopyTestArray;
    foreach ($urineAnalysisWithMicroscopyTestArray as $key => $value) {

        echo '
        <div class="col-md-4">
        <input name="lab-urine-analysis_" id="lab-urine-analysis-' . $key . '" type="button" style="font-weight:bold" value="+ ' . $value['name'] . '"
         onclick="isClicked(\'lab-urine-analysis-' . $key . '\',\'' . $value['name'] . '\',\'lab-urine-analysis-form\')">
        <label for="lab-urine-analysis-' . $key . '" class="" title="lab"></label>
    </div>
        ';
    }
    echo '</div></div>';
}
function lab_request_all()
{
    echo ' <div class="item form-group">
    <label for="lab-request-types" class="col-form-label col-md-2 col-sm-2 label-align">Choose Labratory request</label>
    <div class="col-6">
        <select name="lab-request-all" id="lab-request-list" class="custom-select" required="required">Test
            <option value="unknown">Choose you treatment request</option>
            <option value="lab-serology">Serology and Coagulation Lab Request</option>
            <option value="lab-blood">Blood and Blood Crossmatch Lab request</option>
            <option value="lab-hematolog">Hematology Lab Request</option>
            <option value="lab-chemistry">Chemisitry Lab Request</option>
            <option value="lab-stool">Stool Examination Lab Request</option>
            <option value="lab-radiology-x-ray">Radiology X-ray Request</option>
            <option value="lab-radiology-ct-scan">Radiology CT Scan Request</option>
            <option value="lab-urine">Urine Analysis Examination Lab Request</option>
        </select>
    </div>
</div>';
    echo ' <div class="item form-group">';
    echo '<div id="lab-serology" class="labratory-requests" style="display:none;">';
    lab_request_serology();
    echo '</div>';

    echo '<div id="lab-blood" class="labratory-requests" style="display:none;">';
    lab_request_blood();
    echo '</div>';

    echo '<div id="lab-hematolog" class="labratory-requests" style="display:none;">';
    lab_request_hematology();
    echo '</div>';

    echo '<div id="lab-chemistry" class="labratory-requests" style="display:none;">';
    lab_request_chemistry();
    echo '</div>';

    echo '<div id="lab-stool" class="labratory-requests" style="display:none;">';
    echo "Stool";
    echo '</div>';

    echo '<div id="lab-radiology-x-ray" class="labratory-requests" style="display:none;">';
    echo "Radiology X-ray";
    echo '</div>';

    echo '<div id="lab-radiology-ct-scan" class="labratory-requests" style="display:none;">';
    echo "Radiology CT scan";
    echo '</div>';

    echo '<div id="lab-urine" class="labratory-requests" style="display:none;">';
    lab_request_urine();
    echo '</div>';
    echo '</div>';
    echo '<div id="lab-request-summary" class="labratory-requests" style="display:none;">';
    echo '
    <div class="item form-group">
    <label for="request-summary" class="col-form-label col-md-2 col-sm-2 label-align">Request Summary</label>
    <div class="col-md-8 col-sm-8 request-summary">
    <input type="text" class="request-summary-data" style="display:none">
    <input type="text" class="test-data-requester" style="display:none">
    <input type="text" class="test-data" style="display:none">
    </div>
    </div>';
    echo '</div>';

    echo '<div class="item form-group">
    <div class="col-md-6 col-sm-6">
        <a href="./patient-journal.php" type="button" class="btn btn-danger">Cancel Request</a>
        <button type="submit" class="btn  btn-primary" id="submit-final">Send Request</button>
    </div>
    </div>';
}
