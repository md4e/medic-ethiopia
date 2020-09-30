<?php
session_start();
ob_start();
$documentRootPath = $_SERVER['DOCUMENT_ROOT'];
include_once $documentRootPath . "/includes/crypter.php";
include_once $documentRootPath . "/classes/MePatientTable.php";

if (isset($_GET['selective']) && !isset($_SESSION['patient_card_number'])) {
    $finalUrl = $_GET['selective'];
    $finalUrl2 = urldecode($finalUrl);
    parse_str($finalUrl2, $finalUrl3);
    var_dump($finalUrl2);
    var_dump($finalUrl3);
    //exit;
    // var_dump(json_decode(json_decode($finalUrl2->data)));
    $patients = new MePatientTable("*");
    $result = $patients->getResultSet();
    $result->data_seek(0);
    while ($row = $result->fetch_object()) {
        if ($row->patient_card_number == $finalUrl3['patient_card_number']) {
            $_SESSION['patient_card_number'] = $row;
            break;
        }
    }
    $finalUrl = '&id=' . $finalUrl3['id'] . '&patient_card_number=' . $finalUrl3['patient_card_number'] . '&table=' . $finalUrl3['table'] . '&data=' . $finalUrl3['data'];
    header('Location: ./' . $finalUrl3['url'] . '?selective=true' . (urlencode($finalUrl)));
} else {
    if (isset($_REQUEST['card-no-close']) && isset($_SESSION['patient_card_number'])) {
        unset($_SESSION['search_result']);
        unset($_SESSION['patient_card_number']);
        if (isset($_GET['caller'])) {
            header('Location: ./' . $_GET['caller'].'?search-clean=true');
        } else {
            header('Location: ./index_search.php?search-clean=true');
        }
    } else {
        $sessionSearchResultDecrypted = json_decode(Crypter::decrypt($_SESSION['search_result'][0]));
        foreach ($sessionSearchResultDecrypted->result as $key => $value) {
            $valueObj = (object) $value;
            if ($valueObj->patient_card_number == Crypter::urldecode_decrypt($_REQUEST['card-no'])) {
                $_SESSION['patient_card_number'] = $value;
                unset($_SESSION['search_result']);
            }
        }
        var_dump($_GET['caller']);
        //exit();
        if (isset($_GET['caller'])) {
            header('Location: ./' . $_GET['caller']);
        } else {
            header('Location: ./index_patient.php');
        }
    }
}
