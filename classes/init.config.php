<?php
/**
 * Defines the constants for MySQL database connection parameters used by a Bean.
 */
if ($_SERVER['SERVER_NAME'] == "medic-ethiopia" || $_SERVER['SERVER_NAME'] == "localhost") {
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASSWORD", "");
    define("DBNAME", "me_db");
    define('DBPORT', '3306');
} else {
    if ($_SERVER['SERVER_NAME'] == "medic-ethiopia.com") {
        $config = parse_ini_file('/home/a1e50s1696c1/db.ini');
        define("DBHOST", $config["DBHOST2"]);
        define("DBUSER", $config["DBUSER2"]);
        define("DBPASSWORD", $config["DBPASSWORD2"]);
        define("DBNAME", $config["DBNAME2"]);
        define('DBPORT', $config['DBPORT2']);
    }
}
/**
 * Date formats:
 * @note HTML5 date format is like 2016/01/20 - aaaa/mm/dd
 */

/**
 * Defines a constant for the transformation of the date format of all
 * date fields fetched from mysql tables
 * You may change this value according to your language format.
 * For more information read the MySQL specifications for date format
 * Most used  format: define("FETCHED_DATE_FORMAT","d/m/Y");
 */
define("FETCHED_DATE_FORMAT", "d/m/Y");
// define("FETCHED_DATE_FORMAT","Y-m-d");

/**
 * Defines a constant for the transformation of the datetime format of all
 * datetime fields fetched from mysql tables.
 * You may change this value according to your language format.
 * For more information read the MySQL specifications for date format
 * Most used format: define("FETCHED_DATETIME_FORMAT","d/m/Y H:i:s");
 *
 */
define("FETCHED_DATETIME_FORMAT", "d/m/Y H:i:s");
// define("FETCHED_DATETIME_FORMAT","Y-m-d H:i:s");

/**
 * Defines a constant for interpreting of dates format used into all the
 * SQL statements for inserting or updating mysql date fields.
 * You may change this value according to your language format.
 * For more information read the MySQL specifications for date format
 * Most used format: define("STORED_DATE_FORMAT","%d/%m/%Y");
 */
define("STORED_DATE_FORMAT", "%d/%m/%Y");
// define("STORED_DATE_FORMAT","%Y-%m-%d");

/**
 * Defines a constant for interpreting of datetime format used into all the
 * SQL statements for inserting or updating mysql datetime fields.
 * You may change this value according to your language format.
 * For more information read the MySQL specifications for date format
 * Most used format: define("STORED_DATETIME_FORMAT","%d/%m/%Y %H:%i:%s");
 */
define("STORED_DATETIME_FORMAT", "%d/%m/%Y %H:%i:%s");
// define("STORED_DATETIME_FORMAT","%Y-%m-%d %H:%i:%s");

/**
 *  Includes
 */
require_once "Model.php";
require_once "MySqlRecord.php";