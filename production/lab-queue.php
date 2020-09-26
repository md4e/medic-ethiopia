<?php
include_once "./config.php";
include_once "../classes/MeLabQueue.php";
include_once "../classes/MeEmployeeTable.php";
include_once "./lab-all-test-defines.php";

if (isset($_GET['ids']) && isset($_GET['requester']) && isset($_SESSION['patient_card_number'])) {

    //remove empty elements, and save in array
    $id = array_filter(explode(',', $_GET['ids']));

    // json encod ids
    $final = json_encode($id);

    // get requester table id
    $requester = $_GET['requester'];
    $lab_table_id = $GLOBALS['labTableToId'][$requester]['id'];
    // TODO getEmployeeId fro MeEmployeeTable,
    // TODO: 1 .check session
    // 2. check employee exists
    // 3. use employee Id
    $employeeId = '000001';
    var_dump($_GET['ids']);
//exit;
    /// save to database
    $labQueue = new MeLabQueue();
    $labQueue->setPatientCardNumber($_SESSION['patient_card_number']->patient_card_number);
    $labQueue->setEmployeeId($employeeId);
    $labQueue->setLabTableId($lab_table_id);
    $labQueue->setLabRequestData($final);
    $labQueue->setRequestedOn(date("d/m/Y H:i:s"));
    $labQueue->insert();

    header('Location: ./index_patient.php?lab-request=complete');
} else {
    // not sucessful
    header('Location: ./index_patient.php');
}