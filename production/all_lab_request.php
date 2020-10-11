<?php

function lab_request_serology()
{
    include_once "./lab-all-test-defines.php";
    echo '
    <div class="item form-group">
        <label for="serology-coagulation-sheet-date" class="col-form-label col-md-2 col-sm-2 label-align">Serology & Coagulation </label>
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

    echo '</div></div>
    <div class="item form-group">
    <label for="serology-coagulation-sheet-date" class="col-form-label col-md-2 col-sm-2 label-align">Request Summary</label>
    <div class="col-md-8 col-sm-8 lab-serology-form">
    <input type="text" class="test-lab-serology-form" style="display:none">
    <input type="hidden" class="test-lab-serology-form" value="lab-serology-form">
    </div>
    </div>
    ';
}

function lab_request_blood()
{
    include_once "./lab-all-test-defines.php";

    echo '
    <div class="item form-group">
        <label for="serology-coagulation-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Blood request</label>
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

    echo '</div>
    </div>';
}
function lab_request_hematology()
{

    echo '
<div class="item form-group">
    <label for="serology-coagulation-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Hematology Request</label>
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

    echo '</div>
    </div><div class="item form-group">
    <label for="serology-coagulation-sheet-date" class="col-form-label col-md-2 col-sm-2 label-align">Request Summary</label>
    <div class="col-md-8 col-sm-8 lab-hematology-form">
    <input type="text" class="test-lab-hematology-form" style="display:none">
    </div>
    </div>';
}

function lab_request_chemistry()
{
    include_once "./lab-all-test-defines.php";
    echo '
    <div class="item form-group">
        <label for="serology-coagulation-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Chemistry Request</label>
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

    echo '</div>
    </div><div class="item form-group">
    <label for="serology-coagulation-sheet-date" class="col-form-label col-md-2 col-sm-2 label-align">Request Summary</label>
    <div class="col-md-8 col-sm-8 lab-chemistry-form">
    <input type="text" class="test-lab-chemistry-form" style="display:none">
    </div>
    </div>
';
}
function lab_request_urine()
{
    include_once "./lab-all-test-defines.php";
    echo '
    <div class="item form-group">
        <label for="serology-coagulation-sheet-date" class="col-form-label col-md-3 col-sm-3 label-align">Urine Analysis Request</label>
        <div class="col-md-6 col-sm-6">';
    global $urineAnalysisWithMicroscopyTestArray;
    foreach ($urineAnalysisWithMicroscopyTestArray as $key => $value) {

        echo '
        <div class="col-md-4">
        <input name="lab-urine-analysis_" id="lab-urine-analysis-' . $key . '" type="button" style="font-weight:bold" value="+ '. $value['name'] .'"
         onclick="isClicked(\'lab-urine-analysis-' . $key . '\',\'' . $value['name'] . '\',\'lab-urine-analysis-form\')">
        <label for="lab-urine-analysis-' . $key . '" class="" title="lab"></label>
    </div>
        ';
    }
    echo '</div>
    </div><div class="item form-group">
    <label for="serology-coagulation-sheet-date" class="col-form-label col-md-2 col-sm-2 label-align">Request Summary</label>
    <div class="col-md-8 col-sm-8 lab-urine-analysis-form">
    <input type="text" class="test-lab-urine-analysis-form" style="display:none">
    </div>
    </div>';
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
}
