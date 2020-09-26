<?php
session_start();
ob_start();
$documentRootPath = $_SERVER['DOCUMENT_ROOT'];
include_once($documentRootPath . "/includes/crypter.php");

if (isset($_REQUEST['card-no-close']) && isset($_SESSION['patient_card_number'])) {
    unset($_SESSION['search_result']);
    unset($_SESSION['patient_card_number']);
    header('Location: ./index_search.php?search-clean=true');
} else {
    $sessionSearchResultDecrypted = json_decode(Crypter::decrypt($_SESSION['search_result'][0]));
    foreach ($sessionSearchResultDecrypted->result as $key => $value) {
        $valueObj = (object) $value;
        if ($valueObj->patient_card_number == Crypter::urldecode_decrypt($_REQUEST['card-no'])) {
            $_SESSION['patient_card_number'] = $value;
            unset($_SESSION['search_result']);
        }
    }
    header('Location: ./index_patient.php');
}