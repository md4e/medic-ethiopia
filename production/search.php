<?php
session_start();
ob_start();
$_REQUEST['search_text'] = filter_input(INPUT_POST, "search_text", FILTER_SANITIZE_STRING);
$documentRootPath = $_SERVER['DOCUMENT_ROOT'];
include_once($documentRootPath . "/classes/init.config.php");
(new MySqlRecord())->finalSearch($_REQUEST['search_text']);
header('Location: ./index_search.php?search_text='.$_REQUEST['search_text']);