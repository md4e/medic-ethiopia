<?php
session_start();
ob_start();
if (isset($_POST['search_text'])) {
    $_POST['search_text'] = filter_input(INPUT_POST, "search_text", FILTER_SANITIZE_STRING);
    $documentRootPath = $_SERVER['DOCUMENT_ROOT'];
    include_once($documentRootPath . "/classes/init.config.php");


    (new MySqlRecord())->finalSearch($_POST['search_text']);
    if (isset($_GET['caller'])) {
        //exit;
        header('Location: ./' . $_GET['caller'] . '?search_text=' . $_POST['search_text']);
    } else {
        header('Location: ./index_search.php?search_text=' . $_POST['search_text']);
    }
}else {
    header('Location: ./index1.php');
}
