<?php

function lab_request_serology()
{
    echo '
    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="lab-queue.php">
    <div class="item form-group">
        <label for="serology-coagulation-sheet-date" class="col-form-label col-md-2 col-sm-2 label-align">Serology</label>
        <div class="col-md-8 col-sm-8">';
    global $serologyTestArray;
    foreach ($serologyTestArray as $key => $value) {
        echo '
        <div class="col-md-4">
        <input name="lab-serology_" id="' . $key . '" type="button" style="font-weight:bold" value="+" onclick="isClicked(\'' . $key . '\',\'' . $value['name'] . '\',\'lab-serology\')">
        <label for="lab-serology_' . $key . '" class="" title="homeless">' . $value['name'] . '</label>
    </div>
        ';
    }

    echo '</div></div>';

    echo '<div class="item form-group">
        <label for="serology-coagulation-sheet-date" class="col-form-label col-md-2 col-sm-2 label-align">Coagulation Test</label>
        <div class="col-md-6 col-sm-6">';
    global $coagulationTestArray;
    foreach ($coagulationTestArray as $key => $value) {
        echo '
        <div class="custom-control custom-checkbox custom-control-inline col-md-2 m-1">
        <input name="lab-coagulation" id="lab-coagulation-' . $key . '" type="checkbox" aria-describedby="lab-coagulationHelpBlock" class="custom-control-input" value="0" required="required">
        <label for="lab-coagulation-' . $key . '" class="custom-control-label" title="homeless">' . $value['name'] . '</label>
    </div>
        ';
    }
    echo '</div>
    </div>
    <div class="item form-group">
    <label for="serology-coagulation-sheet-date" class="col-form-label col-md-2 col-sm-2 label-align">Request Summary</label>
    <div class="col-md-8 col-sm-8 lab-serology">
    <p class="test" style="display:none"></p>
    </div>
    </div>
    <div class="ln_solid"></div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6">
            <a href="./index_patient.php" type="button" class="btn btn-danger">Cancel Request</a>
            <button type="submit" class="btn  btn-primary">Send Request</button>

        </div>
    </div>
</form>
    ';
}
function lab_request_blood()
{
    include_once "./lab-chemistry-test-list.php";

    echo '<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="lab-queue.php">
    <div class="item form-group">
        <label for="serology-coagulation-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Blood request</label>
        <div class="col-md-6 col-sm-6">';

    $bloodTestType = ["CRC", "FFP"];
    foreach ($bloodTestType as $key => $value) {
        echo '
        <div class="custom-control custom-checkbox custom-control-inline col-md-4 m-1">
        <input name="lab-blood" id="lab-blood-' . $key . '" type="checkbox" aria-describedby="lab-bloodHelpBlock" class="custom-control-input" value="0" required="required">
        <label for="lab-blood-' . $key . '" class="custom-control-label" title="blood">' . $value . '</label>
    </div>
        ';
    }

    echo '</div>
    </div>
    <div class="ln_solid"></div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6">
            <a href="./index_patient.php" type="button" class="btn btn-danger">Cancel Request</a>
            <button type="submit" class="btn  btn-primary">Send Request</button>
        </div>
    </div>
</form>';
}
function lab_request_hematology()
{

    echo '<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="lab-queue.php">
<div class="item form-group">
    <label for="serology-coagulation-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Hematology Request</label>
    <div class="col-md-6 col-sm-6">';
    global $hematologyTestArray;
    foreach ($hematologyTestArray as $key => $value) {
        echo '
    <div class="custom-control custom-checkbox custom-control-inline col-md-4 m-1">
    <input name="lab-hematology" id="lab-hematology-' . $key . '" type="checkbox" aria-describedby="lab-hematologyHelpBlock" class="custom-control-input" value="0" required="required">
    <label for="lab-hematology-' . $key . '" class="custom-control-label" title="hematology">' . $value['name'] . '</label>
</div>
    ';
    }

    echo '</div></div>
<div class="ln_solid"></div>
<div class="item form-group">
    <div class="col-md-6 col-sm-6">
        <a href="./index_patient.php" type="button" class="btn btn-danger">Cancel Request</a>
        <button type="submit" class="btn  btn-primary">Send Request</button>
    </div>
</div>
</form>';
}

function lab_request_chemistry()
{
    include_once "./lab-chemistry-test-list.php";
    echo '<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="lab-queue.php">
    <div class="item form-group">
        <label for="serology-coagulation-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Chemistry Request</label>
        <div class="col-md-6 col-sm-6">';
    global $chemistryLabTestArray;
    foreach ($chemistryLabTestArray as $key => $value) {
        echo '
        <div class="custom-control custom-checkbox custom-control-inline col-md-4 m-1">
        <input name="lab-chemistry" id="lab-chemistry-' . $key . '" type="checkbox" aria-describedby="lab-chemistryHelpBlock" class="custom-control-input" value="0" required="required">
        <label for="lab-chemistry-' . $key . '" class="custom-control-label" title="chemistry">' . $value['name'] . '</label>
    </div>
        ';
    }

    echo '</div>
    </div>
    <div class="ln_solid"></div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6">
            <a href="./index_patient.php" type="button" class="btn btn-danger">Cancel Request</a>
            <button type="submit" class="btn  btn-primary">Send Request</button>

        </div>
    </div>
</form>
';
}
function lab_request_urine()
{
    include_once "./lab-chemistry-test-list.php";
    echo '<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="lab-queue.php">
    <div class="item form-group">
        <label for="serology-coagulation-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Urine Analysis Request</label>
        <div class="col-md-6 col-sm-6">';
    global $urineAnalysisTestArray;
    foreach ($urineAnalysisTestArray as $key => $value) {
        echo '
        <div class="custom-control custom-checkbox custom-control-inline col-md-4 m-1">
        <input name="lab-urine-analysis" id="lab-urine-analysis-' . $key . '" type="checkbox" aria-describedby="lab-urineAnalysisHelpBlock" class="custom-control-input" value="0" required="required">
        <label for="lab-urine-analysis-' . $key . '" class="custom-control-label" title="urine-analysis">' . $value['name'] . '</label>
    </div>
        ';
    }
    echo '<div class="col-md-12 m-2"><strong>MICROSCOPIC</strong></div>';
    global $urineAnalysisTestMicroscopyArray;
    foreach ($urineAnalysisTestMicroscopyArray as $key => $value) {
        echo '
        <div class="custom-control custom-checkbox custom-control-inline col-md-4 m-1">
        <input name="lab-urine-analysis" id="lab-urine-analysis-' . $key . '" type="checkbox" aria-describedby="lab-urineAnalysisHelpBlock" class="custom-control-input" value="0" required="required">
        <label for="lab-urine-analysis-' . $key . '" class="custom-control-label" title="urine-analysis">' . $value . '</label>
    </div>
        ';
    }

    echo '</div></div>
    <div class="ln_solid"></div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6">
            <a href="./index_patient.php" type="button" class="btn btn-danger">Cancel Request</a>
            <button type="submit" class="btn  btn-primary">Send Request</button>
        </div>
    </div>
</form>';
}
function lab_request_all()
{
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

    echo '<div id="lab-urine" class="labratory-requests" style="display:none;">';
    lab_request_urine();
    echo '</div>';
}