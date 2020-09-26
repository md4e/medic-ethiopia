<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/classes/init.config.php';

/**
 * Class MeLabSerologyCoagulationTable
 * @extends MySqlRecord
 * @filesource MeLabSerologyCoagulationTable.php
*/

// namespace hulutera;

class MeLabSerologyCoagulationTable extends MySqlRecord
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
     * Class attribute for mapping the primary key id of table lab_serology_coagulation_table
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
     * Class attribute for mapping table field request_date
     *
     * Comment for field request_date: Not specified.<br>
     * Field information:
     *  - Data type: datetime
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $requestDate
     */
    private $requestDate;

    /**
     * Class attribute for mapping table field completed_date
     *
     * Comment for field completed_date: Not specified.<br>
     * Field information:
     *  - Data type: datetime
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $completedDate
     */
    private $completedDate;

    /**
     * Class attribute for mapping table field results
     *
     * Comment for field results: Not specified.<br>
     * Field information:
     *  - Data type: json
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var null $results
     */
    private $results;

    /**
     * Class attribute for mapping table field status
     *
     * Comment for field status: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $status
     */
    private $status;

    /**
     * Class attribute for mapping table field employee_table_id
     *
     * Comment for field employee_table_id: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $employeeTableId
     */
    private $employeeTableId;

    /**
     * Class attribute for mapping table field patient_table_patient_id
     *
     * Comment for field patient_table_patient_id: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $patientTablePatientId
     */
    private $patientTablePatientId;

    /**
     * Class attribute for storing the SQL DDL of table lab_serology_coagulation_table
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBsYWJfc2Vyb2xvZ3lfY29hZ3VsYXRpb25fdGFibGVgICgKICBgaWRgIGludCgxMSkgTk9UIE5VTEwgQVVUT19JTkNSRU1FTlQsCiAgYHBhdGllbnRfY2FyZF9udW1iZXJgIHZhcmNoYXIoNDUpIE5PVCBOVUxMLAogIGBlbXBsb3llZV9pZGAgdmFyY2hhcig0NSkgTk9UIE5VTEwsCiAgYHJlcXVlc3RfZGF0ZWAgZGF0ZXRpbWUgTk9UIE5VTEwsCiAgYGNvbXBsZXRlZF9kYXRlYCBkYXRldGltZSBOT1QgTlVMTCwKICBgcmVzdWx0c2AganNvbiBOT1QgTlVMTCwKICBgc3RhdHVzYCB2YXJjaGFyKDQ1KSBOT1QgTlVMTCwKICBgZW1wbG95ZWVfdGFibGVfaWRgIGludCgxMSkgTk9UIE5VTEwsCiAgYHBhdGllbnRfdGFibGVfcGF0aWVudF9pZGAgaW50KDExKSBOT1QgTlVMTCwKICBQUklNQVJZIEtFWSAoYGlkYCksCiAgS0VZIGBma19sYWJfc2Vyb2xvZ3lfY29hZ3VsYXRpb25fdGFibGVfZW1wbG95ZWVfdGFibGUxX2lkeGAgKGBlbXBsb3llZV9pZGApLAogIEtFWSBgZmtfbGFiX3Nlcm9sb2d5X2NvYWd1bGF0aW9uX3RhYmxlX3BhdGllbnRfdGFibGUxX2lkeGAgKGBwYXRpZW50X2NhcmRfbnVtYmVyYCksCiAgQ09OU1RSQUlOVCBgZmtfbGFiX3Nlcm9sb2d5X2NvYWd1bGF0aW9uX3RhYmxlX2VtcGxveWVlX3RhYmxlMWAgRk9SRUlHTiBLRVkgKGBlbXBsb3llZV9pZGApIFJFRkVSRU5DRVMgYGVtcGxveWVlX3RhYmxlYCAoYGVtcGxveWVlX2lkYCkgT04gREVMRVRFIE5PIEFDVElPTiBPTiBVUERBVEUgTk8gQUNUSU9OLAogIENPTlNUUkFJTlQgYGZrX2xhYl9zZXJvbG9neV9jb2FndWxhdGlvbl90YWJsZV9wYXRpZW50X3RhYmxlMWAgRk9SRUlHTiBLRVkgKGBwYXRpZW50X2NhcmRfbnVtYmVyYCkgUkVGRVJFTkNFUyBgcGF0aWVudF90YWJsZWAgKGBwYXRpZW50X2NhcmRfbnVtYmVyYCkgT04gREVMRVRFIE5PIEFDVElPTiBPTiBVUERBVEUgTk8gQUNUSU9OCikgRU5HSU5FPUlubm9EQiBERUZBVUxUIENIQVJTRVQ9dXRmOA==";

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
     * setRequestDate Sets the class attribute requestDate with a given value
     *
     * The attribute requestDate maps the field request_date defined as datetime.<br>
     * Comment for field request_date: Not specified.<br>
     * @param string $requestDate
     * @category Modifier
     */
    public function setRequestDate($requestDate)
    {
        $this->requestDate = (string)$requestDate;
    }

    /**
     * setCompletedDate Sets the class attribute completedDate with a given value
     *
     * The attribute completedDate maps the field completed_date defined as datetime.<br>
     * Comment for field completed_date: Not specified.<br>
     * @param string $completedDate
     * @category Modifier
     */
    public function setCompletedDate($completedDate)
    {
        $this->completedDate = (string)$completedDate;
    }

    /**
     * setResults Sets the class attribute results with a given value
     *
     * The attribute results maps the field results defined as json.<br>
     * Comment for field results: Not specified.<br>
     * @param null $results
     * @category Modifier
     */
    public function setResults($results)
    {
        $this->results = (string)$results;
    }

    /**
     * setStatus Sets the class attribute status with a given value
     *
     * The attribute status maps the field status defined as varchar(45).<br>
     * Comment for field status: Not specified.<br>
     * @param string $status
     * @category Modifier
     */
    public function setStatus($status)
    {
        $this->status = (string)$status;
    }

    /**
     * setEmployeeTableId Sets the class attribute employeeTableId with a given value
     *
     * The attribute employeeTableId maps the field employee_table_id defined as int(11).<br>
     * Comment for field employee_table_id: Not specified.<br>
     * @param int $employeeTableId
     * @category Modifier
     */
    public function setEmployeeTableId($employeeTableId)
    {
        $this->employeeTableId = (int)$employeeTableId;
    }

    /**
     * setPatientTablePatientId Sets the class attribute patientTablePatientId with a given value
     *
     * The attribute patientTablePatientId maps the field patient_table_patient_id defined as int(11).<br>
     * Comment for field patient_table_patient_id: Not specified.<br>
     * @param int $patientTablePatientId
     * @category Modifier
     */
    public function setPatientTablePatientId($patientTablePatientId)
    {
        $this->patientTablePatientId = (int)$patientTablePatientId;
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
     * getRequestDate gets the class attribute requestDate value
     *
     * The attribute requestDate maps the field request_date defined as datetime.<br>
     * Comment for field request_date: Not specified.
     * @return string $requestDate
     * @category Accessor of $requestDate
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * getCompletedDate gets the class attribute completedDate value
     *
     * The attribute completedDate maps the field completed_date defined as datetime.<br>
     * Comment for field completed_date: Not specified.
     * @return string $completedDate
     * @category Accessor of $completedDate
     */
    public function getCompletedDate()
    {
        return $this->completedDate;
    }

    /**
     * getResults gets the class attribute results value
     *
     * The attribute results maps the field results defined as json.<br>
     * Comment for field results: Not specified.
     * @return null $results
     * @category Accessor of $results
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * getStatus gets the class attribute status value
     *
     * The attribute status maps the field status defined as varchar(45).<br>
     * Comment for field status: Not specified.
     * @return string $status
     * @category Accessor of $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * getEmployeeTableId gets the class attribute employeeTableId value
     *
     * The attribute employeeTableId maps the field employee_table_id defined as int(11).<br>
     * Comment for field employee_table_id: Not specified.
     * @return int $employeeTableId
     * @category Accessor of $employeeTableId
     */
    public function getEmployeeTableId()
    {
        return $this->employeeTableId;
    }

    /**
     * getPatientTablePatientId gets the class attribute patientTablePatientId value
     *
     * The attribute patientTablePatientId maps the field patient_table_patient_id defined as int(11).<br>
     * Comment for field patient_table_patient_id: Not specified.
     * @return int $patientTablePatientId
     * @category Accessor of $patientTablePatientId
     */
    public function getPatientTablePatientId()
    {
        return $this->patientTablePatientId;
    }

    /**
     * Gets DDL SQL code of the table lab_serology_coagulation_table
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
        return "lab_serology_coagulation_table";
    }

    /**
     * The MeLabSerologyCoagulationTable constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $id is given.
     *  - with a fetched data row from the table lab_serology_coagulation_table having id=$id
     * @param int $id. If omitted an empty (not fetched) instance is created.
     * @return MeLabSerologyCoagulationTable Object
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
     * Fetchs a table row of lab_serology_coagulation_table into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $id the primary key id value of table lab_serology_coagulation_table which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($id)
    {
        if($id == "*"){
            $sql = "SELECT * FROM lab_serology_coagulation_table";
        } else { //id
            $sql =  "SELECT * FROM lab_serology_coagulation_table WHERE id={$this->parseValue($id,'int')}";
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
            @$this->requestDate = empty($rowObject->request_date) ? null : date(FETCHED_DATETIME_FORMAT,strtotime($rowObject->request_date));
            @$this->completedDate = empty($rowObject->completed_date) ? null : date(FETCHED_DATETIME_FORMAT,strtotime($rowObject->completed_date));
            @$this->results = $rowObject->results;
            @$this->status = $this->replaceAposBackSlash($rowObject->status);
            @$this->employeeTableId = (integer)$rowObject->employee_table_id;
            @$this->patientTablePatientId = (integer)$rowObject->patient_table_patient_id;
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;

    }

    /**
     * Deletes a specific row from the table lab_serology_coagulation_table
     * @param int $id the primary key id value of table lab_serology_coagulation_table which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($id)
    {
        $sql = "DELETE FROM lab_serology_coagulation_table WHERE id={$this->parseValue($id,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of lab_serology_coagulation_table
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
            INSERT INTO lab_serology_coagulation_table
            (patient_card_number,employee_id,request_date,completed_date,results,status,employee_table_id,patient_table_patient_id)
            VALUES(
			{$this->parseValue($this->patientCardNumber,'notNumber')},
			{$this->parseValue($this->employeeId,'notNumber')},
			{$this->parseValue($this->requestDate,'datetime')},
			{$this->parseValue($this->completedDate,'datetime')},
			{$this->parseValue($this->results,'notNumber')},
			{$this->parseValue($this->status,'notNumber')},
			{$this->parseValue($this->employeeTableId)},
			{$this->parseValue($this->patientTablePatientId)})
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
     * Updates a specific row from the table lab_serology_coagulation_table with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $id the primary key id value of table lab_serology_coagulation_table which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($id)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                lab_serology_coagulation_table
            SET 
				patient_card_number={$this->parseValue($this->patientCardNumber,'notNumber')},
				employee_id={$this->parseValue($this->employeeId,'notNumber')},
				request_date={$this->parseValue($this->requestDate,'datetime')},
				completed_date={$this->parseValue($this->completedDate,'datetime')},
				results={$this->parseValue($this->results,'notNumber')},
				status={$this->parseValue($this->status,'notNumber')},
				employee_table_id={$this->parseValue($this->employeeTableId)},
				patient_table_patient_id={$this->parseValue($this->patientTablePatientId)}
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
     * Facility for updating a row of lab_serology_coagulation_table previously loaded.
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
    * Facility for display a row for lab_serology_coagulation_table previously loaded.
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
    * Facility for upload a new row into lab_serology_coagulation_table.
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
