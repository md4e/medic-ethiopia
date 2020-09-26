<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/classes/init.config.php';

/**
 * Class MeAdmissionTable
 * @extends MySqlRecord
 * @filesource MeAdmissionTable.php
*/

// namespace hulutera;

class MeAdmissionTable extends MySqlRecord
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
     * Class attribute for mapping the primary key id of table admission_table
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
     * Class attribute for mapping table field created_at
     *
     * Comment for field created_at: Not specified.<br>
     * Field information:
     *  - Data type: datetime
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $createdAt
     */
    private $createdAt;

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
     * Class attribute for mapping table field bed_number
     *
     * Comment for field bed_number: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $bedNumber
     */
    private $bedNumber;

    /**
     * Class attribute for mapping table field examination_room
     *
     * Comment for field examination_room: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $examinationRoom
     */
    private $examinationRoom;

    /**
     * Class attribute for mapping table field refered_from
     *
     * Comment for field refered_from: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $referedFrom
     */
    private $referedFrom;

    /**
     * Class attribute for mapping table field allergies
     *
     * Comment for field allergies: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $allergies
     */
    private $allergies;

    /**
     * Class attribute for mapping table field remarks
     *
     * Comment for field remarks: Not specified.<br>
     * Field information:
     *  - Data type: json
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var null $remarks
     */
    private $remarks;

    /**
     * Class attribute for mapping table field admission_date
     *
     * Comment for field admission_date: Not specified.<br>
     * Field information:
     *  - Data type: datetime
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $admissionDate
     */
    private $admissionDate;

    /**
     * Class attribute for storing the SQL DDL of table admission_table
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBhZG1pc3Npb25fdGFibGVgICgKICBgaWRgIGludCgxMSkgTk9UIE5VTEwgQVVUT19JTkNSRU1FTlQsCiAgYHBhdGllbnRfY2FyZF9udW1iZXJgIHZhcmNoYXIoNDUpIE5PVCBOVUxMLAogIGBlbXBsb3llZV9pZGAgdmFyY2hhcig0NSkgTk9UIE5VTEwsCiAgYGNyZWF0ZWRfYXRgIGRhdGV0aW1lIE5PVCBOVUxMLAogIGBzdGF0dXNgIHZhcmNoYXIoNDUpIE5PVCBOVUxMLAogIGBiZWRfbnVtYmVyYCB2YXJjaGFyKDQ1KSBOT1QgTlVMTCwKICBgZXhhbWluYXRpb25fcm9vbWAgdmFyY2hhcig0NSkgTk9UIE5VTEwsCiAgYHJlZmVyZWRfZnJvbWAgdmFyY2hhcig0NSkgTk9UIE5VTEwsCiAgYGFsbGVyZ2llc2AgdmFyY2hhcig0NSkgTk9UIE5VTEwsCiAgYHJlbWFya3NgIGpzb24gTk9UIE5VTEwsCiAgYGFkbWlzc2lvbl9kYXRlYCBkYXRldGltZSBOT1QgTlVMTCwKICBQUklNQVJZIEtFWSAoYGlkYCksCiAgVU5JUVVFIEtFWSBgaWRfVU5JUVVFYCAoYGlkYCksCiAgS0VZIGBma19hZG1pc3Npb25fdGFibGVfcGF0aWVudF90YWJsZTFfaWR4YCAoYHBhdGllbnRfY2FyZF9udW1iZXJgKSwKICBLRVkgYGZrX2FkbWlzc2lvbl90YWJsZV9lbXBsb3llZV90YWJsZTFfaWR4YCAoYGVtcGxveWVlX2lkYCksCiAgQ09OU1RSQUlOVCBgZmtfYWRtaXNzaW9uX3RhYmxlX2VtcGxveWVlX3RhYmxlMWAgRk9SRUlHTiBLRVkgKGBlbXBsb3llZV9pZGApIFJFRkVSRU5DRVMgYGVtcGxveWVlX3RhYmxlYCAoYGVtcGxveWVlX2lkYCkgT04gREVMRVRFIE5PIEFDVElPTiBPTiBVUERBVEUgTk8gQUNUSU9OLAogIENPTlNUUkFJTlQgYGZrX2FkbWlzc2lvbl90YWJsZV9wYXRpZW50X3RhYmxlMWAgRk9SRUlHTiBLRVkgKGBwYXRpZW50X2NhcmRfbnVtYmVyYCkgUkVGRVJFTkNFUyBgcGF0aWVudF90YWJsZWAgKGBwYXRpZW50X2NhcmRfbnVtYmVyYCkgT04gREVMRVRFIE5PIEFDVElPTiBPTiBVUERBVEUgTk8gQUNUSU9OCikgRU5HSU5FPUlubm9EQiBBVVRPX0lOQ1JFTUVOVD0zIERFRkFVTFQgQ0hBUlNFVD11dGY4";

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
     * setCreatedAt Sets the class attribute createdAt with a given value
     *
     * The attribute createdAt maps the field created_at defined as datetime.<br>
     * Comment for field created_at: Not specified.<br>
     * @param string $createdAt
     * @category Modifier
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = (string)$createdAt;
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
     * setBedNumber Sets the class attribute bedNumber with a given value
     *
     * The attribute bedNumber maps the field bed_number defined as varchar(45).<br>
     * Comment for field bed_number: Not specified.<br>
     * @param string $bedNumber
     * @category Modifier
     */
    public function setBedNumber($bedNumber)
    {
        $this->bedNumber = (string)$bedNumber;
    }

    /**
     * setExaminationRoom Sets the class attribute examinationRoom with a given value
     *
     * The attribute examinationRoom maps the field examination_room defined as varchar(45).<br>
     * Comment for field examination_room: Not specified.<br>
     * @param string $examinationRoom
     * @category Modifier
     */
    public function setExaminationRoom($examinationRoom)
    {
        $this->examinationRoom = (string)$examinationRoom;
    }

    /**
     * setReferedFrom Sets the class attribute referedFrom with a given value
     *
     * The attribute referedFrom maps the field refered_from defined as varchar(45).<br>
     * Comment for field refered_from: Not specified.<br>
     * @param string $referedFrom
     * @category Modifier
     */
    public function setReferedFrom($referedFrom)
    {
        $this->referedFrom = (string)$referedFrom;
    }

    /**
     * setAllergies Sets the class attribute allergies with a given value
     *
     * The attribute allergies maps the field allergies defined as varchar(45).<br>
     * Comment for field allergies: Not specified.<br>
     * @param string $allergies
     * @category Modifier
     */
    public function setAllergies($allergies)
    {
        $this->allergies = (string)$allergies;
    }

    /**
     * setRemarks Sets the class attribute remarks with a given value
     *
     * The attribute remarks maps the field remarks defined as json.<br>
     * Comment for field remarks: Not specified.<br>
     * @param null $remarks
     * @category Modifier
     */
    public function setRemarks($remarks)
    {
        $this->remarks = (string)$remarks;
    }

    /**
     * setAdmissionDate Sets the class attribute admissionDate with a given value
     *
     * The attribute admissionDate maps the field admission_date defined as datetime.<br>
     * Comment for field admission_date: Not specified.<br>
     * @param string $admissionDate
     * @category Modifier
     */
    public function setAdmissionDate($admissionDate)
    {
        $this->admissionDate = (string)$admissionDate;
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
     * getCreatedAt gets the class attribute createdAt value
     *
     * The attribute createdAt maps the field created_at defined as datetime.<br>
     * Comment for field created_at: Not specified.
     * @return string $createdAt
     * @category Accessor of $createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
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
     * getBedNumber gets the class attribute bedNumber value
     *
     * The attribute bedNumber maps the field bed_number defined as varchar(45).<br>
     * Comment for field bed_number: Not specified.
     * @return string $bedNumber
     * @category Accessor of $bedNumber
     */
    public function getBedNumber()
    {
        return $this->bedNumber;
    }

    /**
     * getExaminationRoom gets the class attribute examinationRoom value
     *
     * The attribute examinationRoom maps the field examination_room defined as varchar(45).<br>
     * Comment for field examination_room: Not specified.
     * @return string $examinationRoom
     * @category Accessor of $examinationRoom
     */
    public function getExaminationRoom()
    {
        return $this->examinationRoom;
    }

    /**
     * getReferedFrom gets the class attribute referedFrom value
     *
     * The attribute referedFrom maps the field refered_from defined as varchar(45).<br>
     * Comment for field refered_from: Not specified.
     * @return string $referedFrom
     * @category Accessor of $referedFrom
     */
    public function getReferedFrom()
    {
        return $this->referedFrom;
    }

    /**
     * getAllergies gets the class attribute allergies value
     *
     * The attribute allergies maps the field allergies defined as varchar(45).<br>
     * Comment for field allergies: Not specified.
     * @return string $allergies
     * @category Accessor of $allergies
     */
    public function getAllergies()
    {
        return $this->allergies;
    }

    /**
     * getRemarks gets the class attribute remarks value
     *
     * The attribute remarks maps the field remarks defined as json.<br>
     * Comment for field remarks: Not specified.
     * @return null $remarks
     * @category Accessor of $remarks
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * getAdmissionDate gets the class attribute admissionDate value
     *
     * The attribute admissionDate maps the field admission_date defined as datetime.<br>
     * Comment for field admission_date: Not specified.
     * @return string $admissionDate
     * @category Accessor of $admissionDate
     */
    public function getAdmissionDate()
    {
        return $this->admissionDate;
    }

    /**
     * Gets DDL SQL code of the table admission_table
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
        return "admission_table";
    }

    /**
     * The MeAdmissionTable constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $id is given.
     *  - with a fetched data row from the table admission_table having id=$id
     * @param int $id. If omitted an empty (not fetched) instance is created.
     * @return MeAdmissionTable Object
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
     * Fetchs a table row of admission_table into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $id the primary key id value of table admission_table which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($id)
    {
        if($id == "*"){
            $sql = "SELECT * FROM admission_table";
        } else { //id
            $sql =  "SELECT * FROM admission_table WHERE id={$this->parseValue($id,'int')}";
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
            @$this->createdAt = empty($rowObject->created_at) ? null : date(FETCHED_DATETIME_FORMAT,strtotime($rowObject->created_at));
            @$this->status = $this->replaceAposBackSlash($rowObject->status);
            @$this->bedNumber = $this->replaceAposBackSlash($rowObject->bed_number);
            @$this->examinationRoom = $this->replaceAposBackSlash($rowObject->examination_room);
            @$this->referedFrom = $this->replaceAposBackSlash($rowObject->refered_from);
            @$this->allergies = $this->replaceAposBackSlash($rowObject->allergies);
            @$this->remarks = $rowObject->remarks;
            @$this->admissionDate = empty($rowObject->admission_date) ? null : date(FETCHED_DATETIME_FORMAT,strtotime($rowObject->admission_date));
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;

    }

    /**
     * Deletes a specific row from the table admission_table
     * @param int $id the primary key id value of table admission_table which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($id)
    {
        $sql = "DELETE FROM admission_table WHERE id={$this->parseValue($id,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of admission_table
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
            INSERT INTO admission_table
            (patient_card_number,employee_id,created_at,status,bed_number,examination_room,refered_from,allergies,remarks,admission_date)
            VALUES(
			{$this->parseValue($this->patientCardNumber,'notNumber')},
			{$this->parseValue($this->employeeId,'notNumber')},
			{$this->parseValue($this->createdAt,'datetime')},
			{$this->parseValue($this->status,'notNumber')},
			{$this->parseValue($this->bedNumber,'notNumber')},
			{$this->parseValue($this->examinationRoom,'notNumber')},
			{$this->parseValue($this->referedFrom,'notNumber')},
			{$this->parseValue($this->allergies,'notNumber')},
			{$this->parseValue($this->remarks,'notNumber')},
			{$this->parseValue($this->admissionDate,'datetime')})
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
     * Updates a specific row from the table admission_table with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $id the primary key id value of table admission_table which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($id)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                admission_table
            SET 
				patient_card_number={$this->parseValue($this->patientCardNumber,'notNumber')},
				employee_id={$this->parseValue($this->employeeId,'notNumber')},
				created_at={$this->parseValue($this->createdAt,'datetime')},
				status={$this->parseValue($this->status,'notNumber')},
				bed_number={$this->parseValue($this->bedNumber,'notNumber')},
				examination_room={$this->parseValue($this->examinationRoom,'notNumber')},
				refered_from={$this->parseValue($this->referedFrom,'notNumber')},
				allergies={$this->parseValue($this->allergies,'notNumber')},
				remarks={$this->parseValue($this->remarks,'notNumber')},
				admission_date={$this->parseValue($this->admissionDate,'datetime')}
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
     * Facility for updating a row of admission_table previously loaded.
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
    * Facility for display a row for admission_table previously loaded.
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
    * Facility for upload a new row into admission_table.
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
