<?php

/**
 * Class MySqlRecord
 * Base class for the auto generated beans
 *
 * @author Rosario Carvello <rosario.carvello@gmail.com>
 * @version GIT:v1.1.0
 * @copyright (c) 2016 Rosario Carvello <rosario.carvello@gmail.com> - All rights reserved. See License.txt file
 * @license BSD Clause 3 License
 * @license https://opensource.org/licenses/BSD-3-Clause This software is distributed under BSD-3-Clause Public License
 */


class MySqlRecord extends Model
{
    /**
     * A control attribute for storing the last executed SQL statement.
     * @var string
     */
    protected $lastSql = null;

    /**
     * A control attribute for storing the last SQL error.
     * @var string
     */
    protected $lastSqlError = null;

    /* keep it empty if you want to search in all the tables.*/
    protected $tablesToSearch = array();

    //$tablesToSearch = array('patient_table');//,'table_name_2','table_name_3');
    protected $tableFieldsNames = array();

    /**
     * lastSql Gets the last executed SQL statement
     * @return string
     */
    public function lastSql()
    {
        return $this->lastSql;
    }

    /**
     * lastSqlError Gets the last occurred SQL error
     * @return string
     */
    public function lastSqlError()
    {
        return $this->lastSqlError;
    }

    /**
     * isSqlError Gets if an Sql error occurred
     * @return bool
     */
    public function isSqlError()
    {
        if ($this->lastSqlError() != "") {
            return true;
        } else {
            return false;
        }
    }

    /**
     * resetLastSqlError Reset the SQL error information
     */
    protected function resetLastSqlError()
    {
        $this->lastSqlError = "";
    }

    /**
     * parseValue Parses the value and returns NULL if null occurred
     *
     * For a not null value, depending on data type, adjusts
     * the correct quotation by returning a quoted or not escaped string to be used during SQL statements.
     * @param mixed $value The value to evaluate
     * @param string $type The data type of first parameter, default is number (int/float) value
     * @return null|string|int|float quoted or not value
     */
    protected function parseValue($value = null, $type = "number")
    {
        $constants = get_defined_constants();

        if ($type == "int" || $type == "float" || $type == "real" || $type == "double") {
            if ($value != null) {
                switch ($type) {
                    case "double":
                        $value = (float)$value;
                        break;
                    case "float":
                        $value = (float)$value;;
                        break;
                    case "real":
                        $value = (float)$value;;
                        break;
                    default:
                        $value = (int)$value;;
                }
            }
            $type = "number";
        }
        if ($value == null) {
            return "NULL";
        } else if ($value != null && $type != "number" && $type != "date" && $type != "datetime") {
            return "'" . $this->real_escape_string($value) . "'";
        } else if ($value != null && $type != "number" && $type == "date") {
            return    "STR_TO_DATE('" . $this->real_escape_string($value) . "','" . $constants['STORED_DATE_FORMAT'] . "')";
        } else if ($value != null && $type != "number" && $type == "datetime") {
            return    "STR_TO_DATE('" . $this->real_escape_string($value) . "','" . $constants['STORED_DATETIME_FORMAT'] . "')";
        } else if ($value != null && $type == "number" && is_numeric($value)) {
            return $value;
        } else {
            return "NULL";
        }
    }

    /**
     * Replaces backslash present into MySQL strings which containing apostrophes.
     *
     * @param  string $field The field to replace
     * @return string the field without backslash for the aphos
     */
    protected function replaceAposBackSlash($field)
    {
        $r1 =  str_replace("\'", "'", $field);
        $r2 =  str_replace("\\\\", "\\", $r1);
        return $r2;
    }

    public function initSelective()
    {
        $this->tablesToSearch = ['patient_table'];
    }
    public function initAllTable()
    {
        $sql = "show tables";
        $result =  $this->query($sql);
        $this->resultSet = $result;
        $result->data_seek(0);
        while ($rows = $result->fetch_object()) {
            array_push($this->tablesToSearch, $rows->Tables_in_me_db);
        }
        //var_dump($this->tablesToSearch);
        return $result->num_rows;
    }

    public function fetch_array($sql)
    // @method    fetch_array
    // @abstract taking the mySQL $resource id and fetch and return the result array
    // @param   SQL
    // @return  array
    {
        $result = $this->query($sql);
        $data = array();
        echo 'sql: ', $sql, '<br>';

        while ($row = $result->fetch_assoc()) {
            array_push($data, $row);
        }
        mysqli_free_result($result);

        return $data;
    } //@endof  function fetch_array

    public function fetch_array_special($sql)
    // @method    fetch_array_special
    // @abstract taking the mySQL $resource id and fetch and return the result array
    // @param   SQL
    // @return  array
    {
        $result = $this->query($sql);
        $data = array();
        echo 'sql: ', $sql, '<br>';


        while ($row = $result->fetch_assoc()) {
            $data[$row['Field']] = $row['Field'];
        }

        mysqli_free_result($result);
        //pre($data);
        return $data;
    }

    public function tableFields($tableno)
    {
        $sql = 'desc ' . $this->tablesToSearch[$tableno];
        $data = $this->fetch_array_special($sql);
        $this->fieldsNames[$tableno] = $data;
        // var_dump($data);
        return $data;
    }

    function searchOnATable($tableNo, $searchText)
    {
        // build the sql
        $search_sql = 'select * from ' . $this->tablesToSearch[$tableNo] . ' where ';
        //pre($this->fieldsNames);
        $fields_on_this_table =  $this->tableFields($tableNo);

        $len = sizeof($fields_on_this_table);
        for ($i = 0; $i < $len; $i += 1) {
            if ($i != 0) {
                $search_sql .= ' or ';
            }

            $search_sql .= '`' . array_keys($fields_on_this_table)[$i] . '` like \'%' . $searchText . '%\' ';
        }
        return $this->fetch_array($search_sql);
    }

    public function finalSearch($searchText)
    {
        $this->initSelective();
        $result = array();
        $json = '';
        for ($j = 0, $i = 0; $i < sizeof($this->tablesToSearch); $i += 1) {

            $result = $this->searchOnATable($i, $searchText);
            if (!empty($result)) {
                if ($j !== 0) {
                    $json .= ', ';
                }

                // $json .= '{
                //             "table_name":"' . $this->tablesToSearch[$i] . '",
                // 			"table_no":"' . $i . '",
                // 			"result":' . json_encode($result) . ',
                // 			"search_text":"' . $searchText . '"
                // 		}';
                $json .= '{"result":' . json_encode($result) . '}';
                $j += 1;
            }
        }
        echo $json;
        //$json .= ']';
        if ($json != '[]') {
            $documentRootPath = $_SERVER['DOCUMENT_ROOT'];
            include_once($documentRootPath . "/includes/crypter.php");
            $_SESSION['search_result'] = [Crypter::encrypt($json)];
        } else {
            $_SESSION['search_result'] = [];
        }
        var_dump($_SESSION);
    }

    private function isJson($string)
    {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }
}
