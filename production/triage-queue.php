<?php
if (isset($_GET['card-no']) && isset($_GET['department'])) {
    include_once "./config.php";
    include_once "../classes/MeTriageQueue.php";
    include_once "../classes/MeEmployeeTable.php";
    include_once "../includes/crypter.php";

    $patient_card_number = Crypter::urldecode_decrypt($_GET['card-no']);
    $department = $_GET['department'];
    // TODO getEmployeeId fro MeEmployeeTable,
    // TODO: 1 .check session
    // 2. check employee exists
    // 3. use employee Id
    $employeeId = '000001';

    /// save to database
    $labQueue = new MeTriageQueue();
    $labQueue->setPatientCardNumber($patient_card_number);
    $labQueue->setEmployeeId($employeeId);
    $labQueue->setDepartment($department);
    $labQueue->setRequestedOn(date("d/m/Y H:i:s"));
    $labQueue->insert();
    header('Location: ./index-reception.php?request=complete&department='.$department);
} else {
    // not successful
    header('Location: ./index-reception.php?request=reject');
}
