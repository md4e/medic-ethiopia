<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/classes/init.config.php';

/**
 * Class MeTriageQueue
 * @extends MySqlRecord
 * @filesource MeTriageQueue.php
*/

// namespace hulutera;

class MeTriageQueue extends MySqlRecord
{
    /**
     * A control attribute for the update operation.
     * @note An instance fetched from db is allowed to run the update operation.
     *       A new instance (not fetched from db) is allowed only to run the insert operation but,
     *       after running insertion, the instance is automatically allowed to run update operation.
     * @var bool
     */
    private $allowUpdate = false;

    /**
     * Class attribute for mapping the primary key id of table triage_queue
     *
     * Comment for field id: Not specified<br>
     * @var int $id
     */
    private $id;

    /**
     * A class attribute for evaluating if the table has an autoincrement primary key
     * @var bool $isPkAutoIncrement
     */
    private $isPkAutoIncrement = true;

    /**
     * Class attribute for mapping table field patient_card_number
     *
     * Comment for field patient_card_number: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: MUL
     *  - Default:
     *  - Extra:
     * @var string $patientCardNumber
     */
    private $patientCardNumber;

    /**
     * Class attribute for mapping table field employee_id
     *
     * Comment for field employee_id: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: MUL
     *  - Default:
     *  - Extra:
     * @var string $employeeId
     */
    private $employeeId;

    /**
     * Class attribute for mapping table field department
     *
     * Comment for field department: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var string $department
     */
    private $department;

    /**
     * Class attribute for mapping table field requested_on
     *
     * Comment for field requested_on: Not specified.<br>
     * Field information:
     *  - Data type: datetime
     *  - Null : NO
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var string $requestedOn
     */
    private $requestedOn;

    /**
     * Class attribute for storing the SQL DDL of table triage_queue
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGB0cmlhZ2VfcXVldWVgICgKICBgaWRgIGludCgxMSkgTk9UIE5VTEwgQVVUT19JTkNSRU1FTlQsCiAgYHBhdGllbnRfY2FyZF9udW1iZXJgIHZhcmNoYXIoNDUpIE5PVCBOVUxMLAogIGBlbXBsb3llZV9pZGAgdmFyY2hhcig0NSkgTk9UIE5VTEwsCiAgYGRlcGFydG1lbnRgIHZhcmNoYXIoNDUpIE5PVCBOVUxMLAogIGByZXF1ZXN0ZWRfb25gIGRhdGV0aW1lIE5PVCBOVUxMLAogIFBSSU1BUlkgS0VZIChgaWRgKSwKICBLRVkgYGZrX3RyaWFnZV9xdWV1ZV9wYXRpZW50X3RhYmxlMV9pZHhgIChgcGF0aWVudF9jYXJkX251bWJlcmApLAogIEtFWSBgZmtfdHJpYWdlX3F1ZXVlX2VtcGxveWVlX3RhYmxlMV9pZHhgIChgZW1wbG95ZWVfaWRgKSwKICBDT05TVFJBSU5UIGBma190cmlhZ2VfcXVldWVfZW1wbG95ZWVfdGFibGUxYCBGT1JFSUdOIEtFWSAoYGVtcGxveWVlX2lkYCkgUkVGRVJFTkNFUyBgZW1wbG95ZWVfdGFibGVgIChgZW1wbG95ZWVfaWRgKSBPTiBERUxFVEUgTk8gQUNUSU9OIE9OIFVQREFURSBOTyBBQ1RJT04sCiAgQ09OU1RSQUlOVCBgZmtfdHJpYWdlX3F1ZXVlX3BhdGllbnRfdGFibGUxYCBGT1JFSUdOIEtFWSAoYHBhdGllbnRfY2FyZF9udW1iZXJgKSBSRUZFUkVOQ0VTIGBwYXRpZW50X3RhYmxlYCAoYHBhdGllbnRfY2FyZF9udW1iZXJgKSBPTiBERUxFVEUgTk8gQUNUSU9OIE9OIFVQREFURSBOTyBBQ1RJT04KKSBFTkdJTkU9SW5ub0RCIERFRkFVTFQgQ0hBUlNFVD11dGY4";

    /**
     * setId Sets the class attribute id with a given value
     *
     * The attribute id maps the field id defined as int(11).<br>
     * Comment for field id: Not specified.<br>
     * @param int $id
     * @category Modifier
     */
    public function setId($id)
    {
        $this->id = (int)$id;
    }

    /**
     * setPatientCardNumber Sets the class attribute patientCardNumber with a given value
     *
     * The attribute patientCardNumber maps the field patient_card_number defined as varchar(45).<br>
     * Comment for field patient_card_number: Not specified.<br>
     * @param string $patientCardNumber
     * @category Modifier
     */
    public function setPatientCardNumber($patientCardNumber)
    {
        $this->patientCardNumber = (string)$patientCardNumber;
    }

    /**
     * setEmployeeId Sets the class attribute employeeId with a given value
     *
     * The attribute employeeId maps the field employee_id defined as varchar(45).<br>
     * Comment for field employee_id: Not specified.<br>
     * @param string $employeeId
     * @category Modifier
     */
    public function setEmployeeId($employeeId)
    {
        $this->employeeId = (string)$employeeId;
    }

    /**
     * setDepartment Sets the class attribute department with a given value
     *
     * The attribute department maps the field department defined as varchar(45).<br>
     * Comment for field department: Not specified.<br>
     * @param string $department
     * @category Modifier
     */
    public function setDepartment($department)
    {
        $this->department = (string)$department;
    }

    /**
     * setRequestedOn Sets the class attribute requestedOn with a given value
     *
     * The attribute requestedOn maps the field requested_on defined as datetime.<br>
     * Comment for field requested_on: Not specified.<br>
     * @param string $requestedOn
     * @category Modifier
     */
    public function setRequestedOn($requestedOn)
    {
        $this->requestedOn = (string)$requestedOn;
    }

    /**
     * getId gets the class attribute id value
     *
     * The attribute id maps the field id defined as int(11).<br>
     * Comment for field id: Not specified.
     * @return int $id
     * @category Accessor of $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * getPatientCardNumber gets the class attribute patientCardNumber value
     *
     * The attribute patientCardNumber maps the field patient_card_number defined as varchar(45).<br>
     * Comment for field patient_card_number: Not specified.
     * @return string $patientCardNumber
     * @category Accessor of $patientCardNumber
     */
    public function getPatientCardNumber()
    {
        return $this->patientCardNumber;
    }

    /**
     * getEmployeeId gets the class attribute employeeId value
     *
     * The attribute employeeId maps the field employee_id defined as varchar(45).<br>
     * Comment for field employee_id: Not specified.
     * @return string $employeeId
     * @category Accessor of $employeeId
     */
    public function getEmployeeId()
    {
        return $this->employeeId;
    }

    /**
     * getDepartment gets the class attribute department value
     *
     * The attribute department maps the field department defined as varchar(45).<br>
     * Comment for field department: Not specified.
     * @return string $department
     * @category Accessor of $department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * getRequestedOn gets the class attribute requestedOn value
     *
     * The attribute requestedOn maps the field requested_on defined as datetime.<br>
     * Comment for field requested_on: Not specified.
     * @return string $requestedOn
     * @category Accessor of $requestedOn
     */
    public function getRequestedOn()
    {
        return $this->requestedOn;
    }

    /**
     * Gets DDL SQL code of the table triage_queue
     * @return string
     * @category Accessor
     */
    public function getDdl()
    {
        return base64_decode($this->ddl);
    }

    /**
    * Gets the name of the managed table
    * @return string
    * @category Accessor
    */
    public function getTableName()
    {
        return "triage_queue";
    }

    /**
     * The MeTriageQueue constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $id is given.
     *  - with a fetched data row from the table triage_queue having id=$id
     * @param int $id. If omitted an empty (not fetched) instance is created.
     * @return MeTriageQueue Object
     */
    public function __construct($id = null)
    {
        parent::__construct();
        if (!empty($id)) {
            $this->select($id);
        }
    }

    /**
     * The implicit destructor
     */
    public function __destruct()
    {
        $this->close();
    }

    /**
     * Explicit destructor. It calls the implicit destructor automatically.
     */
    public function close()
    {

    }

    /**
     * Fetchs a table row of triage_queue into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $id the primary key id value of table triage_queue which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($id)
    {
        if($id == "*"){
            $sql = "SELECT * FROM triage_queue";
        } else { //id
            $sql =  "SELECT * FROM triage_queue WHERE id={$this->parseValue($id,'int')}";
        }

        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->id = (integer)$rowObject->id;
            @$this->patientCardNumber = $this->replaceAposBackSlash($rowObject->patient_card_number);
            @$this->employeeId = $this->replaceAposBackSlash($rowObject->employee_id);
            @$this->department = $this->replaceAposBackSlash($rowObject->department);
            @$this->requestedOn = empty($rowObject->requested_on) ? null : date(FETCHED_DATETIME_FORMAT,strtotime($rowObject->requested_on));
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;

    }

    /**
     * Deletes a specific row from the table triage_queue
     * @param int $id the primary key id value of table triage_queue which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($id)
    {
        $sql = "DELETE FROM triage_queue WHERE id={$this->parseValue($id,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of triage_queue
     *
     * All class attributes values defined for mapping all table fields are automatically used during inserting
     * @return mixed MySQL insert result
     * @category DML
     */
    public function insert()
    {
        if ($this->isPkAutoIncrement) {
            $this->id = "";
        }
        // $constants = get_defined_constants();
        $sql = <<< SQL
            INSERT INTO triage_queue
            (patient_card_number,employee_id,department,requested_on)
            VALUES(
			{$this->parseValue($this->patientCardNumber,'notNumber')},
			{$this->parseValue($this->employeeId,'notNumber')},
			{$this->parseValue($this->department,'notNumber')},
			{$this->parseValue($this->requestedOn,'datetime')})
SQL;
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        } else {
            $this->allowUpdate = true;
            if ($this->isPkAutoIncrement) {
                $this->id = $this->insert_id;
            }
        }
        return $result;
    }

    /**
     * Updates a specific row from the table triage_queue with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $id the primary key id value of table triage_queue which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($id)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                triage_queue
            SET
				patient_card_number={$this->parseValue($this->patientCardNumber,'notNumber')},
				employee_id={$this->parseValue($this->employeeId,'notNumber')},
				department={$this->parseValue($this->department,'notNumber')},
				requested_on={$this->parseValue($this->requestedOn,'datetime')}
            WHERE
                id={$this->parseValue($id,'int')}
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            } else {
                $this->select($id);
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
     * Facility for updating a row of triage_queue previously loaded.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating.
     * @category DML Helper
     * @return mixed MySQLi update result
     */
    public function updateCurrent()
    {
        if ($this->id != "") {
            return $this->update($this->id);
        } else {
            return false;
        }
    }

    /**
    * Facility for display a row for triage_queue previously loaded.
    *
    * All class attribute values defined for mapping all table fields are automatically used during updating.
    * @category DML Helper
    * @return mixed MySQLi update result
    */
    public function display()
    {
        echo "!!!! SELAM NEW! DISPLAY CONTENT EMPTY, JUMP ON IT :) !!!";
    }

    /**
    * Facility for upload a new row into triage_queue.
    *
    * All class attribute values defined for mapping all table fields are automatically used during updating.
    * @category DML Helper
    * @return mixed MySQLi update result
    */
    public function upload($data = null)
    {
        global $documnetRootPath;
        echo "!!!! SELAM NEW! UPLOAD CONTENT EMPTY, JUMP ON IT :) !!!";
    }

}
?>
