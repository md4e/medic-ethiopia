<?php
session_start();
ob_start();
$documentRootPath = $_SERVER['DOCUMENT_ROOT'];
include_once($documentRootPath . "/includes/crypter.php");

// No request or total reqeust session is empty
if (!isset($_REQUEST['card-no']) || !isset($_SESSION['search_result'])) {
    //header('Location: ./index1.php');
}
// session set for patient and wanted to close
if (isset($_REQUEST['card-no']) && isset($_SESSION['patient_card_number'])) {
    unset($_SESSION['search_result']);
    unset($_SESSION['patient_card_number']);
    header('Location: ./index1.php');
    exit();
}
/// create as session for patiet with matching patient_card_number
if (!isset($_SESSION['patient_card_number'])) {
    $sessionSearchResultDecrypted = json_decode(Crypter::decrypt($_SESSION['search_result'][0]));
    foreach ($sessionSearchResultDecrypted->result as $key => $value) {
        $valueObj = (object) $value;
        if ($valueObj->patient_card_number == Crypter::urldecode_decrypt($_REQUEST['card-no'])) {
            $_SESSION['patient_card_number'] = $value;
            unset($_SESSION['search_result']);
            header('Location: ./index_patient.php');
        }
    }
}