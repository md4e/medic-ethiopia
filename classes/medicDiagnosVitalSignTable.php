<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/classes/init.config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/classes/medicPatientTable.php';

/**
 * Class medicDiagnosVitalSignTable
 * @extends MySqlRecord
 * @filesource medicDiagnosVitalSignTable.php
*/

// namespace hulutera;

class medicDiagnosVitalSignTable extends MySqlRecord
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
     * Class attribute for mapping the primary key id of table diagnos_vital_sign_table
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
     * Class attribute for mapping table field blood_pressure
     *
     * Comment for field blood_pressure: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $bloodPressure
     */
    private $bloodPressure;

    /**
     * Class attribute for mapping table field pluse_rate
     *
     * Comment for field pluse_rate: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $pluseRate
     */
    private $pluseRate;

    /**
     * Class attribute for mapping table field respiration
     *
     * Comment for field respiration: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $respiration
     */
    private $respiration;

    /**
     * Class attribute for mapping table field temprature
     *
     * Comment for field temprature: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $temprature
     */
    private $temprature;

    /**
     * Class attribute for mapping table field oxygen_saturation
     *
     * Comment for field oxygen_saturation: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $oxygenSaturation
     */
    private $oxygenSaturation;

    /**
     * Class attribute for mapping table field radom_blood_sugar
     *
     * Comment for field radom_blood_sugar: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $radomBloodSugar
     */
    private $radomBloodSugar;

    /**
     * Class attribute for mapping table field fasting_blood_sugar
     *
     * Comment for field fasting_blood_sugar: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $fastingBloodSugar
     */
    private $fastingBloodSugar;

    /**
     * Class attribute for mapping table field remarks
     *
     * Comment for field remarks: Not specified.<br>
     * Field information:
     *  - Data type: json
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var null $remarks
     */
    private $remarks;

    /**
     * Class attribute for mapping table field created_at
     *
     * Comment for field created_at: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
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
     * Class attribute for storing the SQL DDL of table diagnos_vital_sign_table
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBkaWFnbm9zX3ZpdGFsX3NpZ25fdGFibGVgICgKICBgaWRgIGludCgxMSkgTk9UIE5VTEwgQVVUT19JTkNSRU1FTlQsCiAgYHBhdGllbnRfY2FyZF9udW1iZXJgIHZhcmNoYXIoNDUpIE5PVCBOVUxMLAogIGBlbXBsb3llZV9pZGAgdmFyY2hhcig0NSkgTk9UIE5VTEwsCiAgYGJsb29kX3ByZXNzdXJlYCBpbnQoMTEpIE5PVCBOVUxMLAogIGBwbHVzZV9yYXRlYCBpbnQoMTEpIE5PVCBOVUxMLAogIGByZXNwaXJhdGlvbmAgaW50KDExKSBOT1QgTlVMTCwKICBgdGVtcHJhdHVyZWAgaW50KDExKSBOT1QgTlVMTCwKICBgb3h5Z2VuX3NhdHVyYXRpb25gIGludCgxMSkgTk9UIE5VTEwsCiAgYHJhZG9tX2Jsb29kX3N1Z2FyYCBpbnQoMTEpIE5PVCBOVUxMLAogIGBmYXN0aW5nX2Jsb29kX3N1Z2FyYCBpbnQoMTEpIERFRkFVTFQgTlVMTCwKICBgcmVtYXJrc2AganNvbiBERUZBVUxUIE5VTEwsCiAgYGNyZWF0ZWRfYXRgIHZhcmNoYXIoNDUpIE5PVCBOVUxMLAogIGBzdGF0dXNgIHZhcmNoYXIoNDUpIE5PVCBOVUxMLAogIFBSSU1BUlkgS0VZIChgaWRgKSwKICBVTklRVUUgS0VZIGBpZF9VTklRVUVgIChgaWRgKSwKICBLRVkgYGZrX2RpYWdub3Nfdml0YWxfc2lnbl90YWJsZV9wYXRpZW50X3RhYmxlMV9pZHhgIChgcGF0aWVudF9jYXJkX251bWJlcmApLAogIEtFWSBgZmtfZGlhZ25vc192aXRhbF9zaWduX3RhYmxlX2VtcGxveWVlX3RhYmxlMV9pZHhgIChgZW1wbG95ZWVfaWRgKSwKICBDT05TVFJBSU5UIGBma19kaWFnbm9zX3ZpdGFsX3NpZ25fdGFibGVfZW1wbG95ZWVfdGFibGUxYCBGT1JFSUdOIEtFWSAoYGVtcGxveWVlX2lkYCkgUkVGRVJFTkNFUyBgZW1wbG95ZWVfdGFibGVgIChgZW1wbG95ZWVfaWRgKSBPTiBERUxFVEUgTk8gQUNUSU9OIE9OIFVQREFURSBOTyBBQ1RJT04sCiAgQ09OU1RSQUlOVCBgZmtfZGlhZ25vc192aXRhbF9zaWduX3RhYmxlX3BhdGllbnRfdGFibGUxYCBGT1JFSUdOIEtFWSAoYHBhdGllbnRfY2FyZF9udW1iZXJgKSBSRUZFUkVOQ0VTIGBwYXRpZW50X3RhYmxlYCAoYHBhdGllbnRfY2FyZF9udW1iZXJgKSBPTiBERUxFVEUgTk8gQUNUSU9OIE9OIFVQREFURSBOTyBBQ1RJT04KKSBFTkdJTkU9SW5ub0RCIERFRkFVTFQgQ0hBUlNFVD11dGY4";

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
     * setBloodPressure Sets the class attribute bloodPressure with a given value
     *
     * The attribute bloodPressure maps the field blood_pressure defined as int(11).<br>
     * Comment for field blood_pressure: Not specified.<br>
     * @param int $bloodPressure
     * @category Modifier
     */
    public function setBloodPressure($bloodPressure)
    {
        $this->bloodPressure = (int)$bloodPressure;
    }

    /**
     * setPluseRate Sets the class attribute pluseRate with a given value
     *
     * The attribute pluseRate maps the field pluse_rate defined as int(11).<br>
     * Comment for field pluse_rate: Not specified.<br>
     * @param int $pluseRate
     * @category Modifier
     */
    public function setPluseRate($pluseRate)
    {
        $this->pluseRate = (int)$pluseRate;
    }

    /**
     * setRespiration Sets the class attribute respiration with a given value
     *
     * The attribute respiration maps the field respiration defined as int(11).<br>
     * Comment for field respiration: Not specified.<br>
     * @param int $respiration
     * @category Modifier
     */
    public function setRespiration($respiration)
    {
        $this->respiration = (int)$respiration;
    }

    /**
     * setTemprature Sets the class attribute temprature with a given value
     *
     * The attribute temprature maps the field temprature defined as int(11).<br>
     * Comment for field temprature: Not specified.<br>
     * @param int $temprature
     * @category Modifier
     */
    public function setTemprature($temprature)
    {
        $this->temprature = (int)$temprature;
    }

    /**
     * setOxygenSaturation Sets the class attribute oxygenSaturation with a given value
     *
     * The attribute oxygenSaturation maps the field oxygen_saturation defined as int(11).<br>
     * Comment for field oxygen_saturation: Not specified.<br>
     * @param int $oxygenSaturation
     * @category Modifier
     */
    public function setOxygenSaturation($oxygenSaturation)
    {
        $this->oxygenSaturation = (int)$oxygenSaturation;
    }

    /**
     * setRadomBloodSugar Sets the class attribute radomBloodSugar with a given value
     *
     * The attribute radomBloodSugar maps the field radom_blood_sugar defined as int(11).<br>
     * Comment for field radom_blood_sugar: Not specified.<br>
     * @param int $radomBloodSugar
     * @category Modifier
     */
    public function setRadomBloodSugar($radomBloodSugar)
    {
        $this->radomBloodSugar = (int)$radomBloodSugar;
    }

    /**
     * setFastingBloodSugar Sets the class attribute fastingBloodSugar with a given value
     *
     * The attribute fastingBloodSugar maps the field fasting_blood_sugar defined as int(11).<br>
     * Comment for field fasting_blood_sugar: Not specified.<br>
     * @param int $fastingBloodSugar
     * @category Modifier
     */
    public function setFastingBloodSugar($fastingBloodSugar)
    {
        $this->fastingBloodSugar = (int)$fastingBloodSugar;
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
     * setCreatedAt Sets the class attribute createdAt with a given value
     *
     * The attribute createdAt maps the field created_at defined as varchar(45).<br>
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
     * getBloodPressure gets the class attribute bloodPressure value
     *
     * The attribute bloodPressure maps the field blood_pressure defined as int(11).<br>
     * Comment for field blood_pressure: Not specified.
     * @return int $bloodPressure
     * @category Accessor of $bloodPressure
     */
    public function getBloodPressure()
    {
        return $this->bloodPressure;
    }

    /**
     * getPluseRate gets the class attribute pluseRate value
     *
     * The attribute pluseRate maps the field pluse_rate defined as int(11).<br>
     * Comment for field pluse_rate: Not specified.
     * @return int $pluseRate
     * @category Accessor of $pluseRate
     */
    public function getPluseRate()
    {
        return $this->pluseRate;
    }

    /**
     * getRespiration gets the class attribute respiration value
     *
     * The attribute respiration maps the field respiration defined as int(11).<br>
     * Comment for field respiration: Not specified.
     * @return int $respiration
     * @category Accessor of $respiration
     */
    public function getRespiration()
    {
        return $this->respiration;
    }

    /**
     * getTemprature gets the class attribute temprature value
     *
     * The attribute temprature maps the field temprature defined as int(11).<br>
     * Comment for field temprature: Not specified.
     * @return int $temprature
     * @category Accessor of $temprature
     */
    public function getTemprature()
    {
        return $this->temprature;
    }

    /**
     * getOxygenSaturation gets the class attribute oxygenSaturation value
     *
     * The attribute oxygenSaturation maps the field oxygen_saturation defined as int(11).<br>
     * Comment for field oxygen_saturation: Not specified.
     * @return int $oxygenSaturation
     * @category Accessor of $oxygenSaturation
     */
    public function getOxygenSaturation()
    {
        return $this->oxygenSaturation;
    }

    /**
     * getRadomBloodSugar gets the class attribute radomBloodSugar value
     *
     * The attribute radomBloodSugar maps the field radom_blood_sugar defined as int(11).<br>
     * Comment for field radom_blood_sugar: Not specified.
     * @return int $radomBloodSugar
     * @category Accessor of $radomBloodSugar
     */
    public function getRadomBloodSugar()
    {
        return $this->radomBloodSugar;
    }

    /**
     * getFastingBloodSugar gets the class attribute fastingBloodSugar value
     *
     * The attribute fastingBloodSugar maps the field fasting_blood_sugar defined as int(11).<br>
     * Comment for field fasting_blood_sugar: Not specified.
     * @return int $fastingBloodSugar
     * @category Accessor of $fastingBloodSugar
     */
    public function getFastingBloodSugar()
    {
        return $this->fastingBloodSugar;
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
     * getCreatedAt gets the class attribute createdAt value
     *
     * The attribute createdAt maps the field created_at defined as varchar(45).<br>
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
     * Gets DDL SQL code of the table diagnos_vital_sign_table
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
        return "diagnos_vital_sign_table";
    }

    /**
     * The medicDiagnosVitalSignTable constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $id is given.
     *  - with a fetched data row from the table diagnos_vital_sign_table having id=$id
     * @param int $id. If omitted an empty (not fetched) instance is created.
     * @return medicDiagnosVitalSignTable Object
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
     * Fetchs a table row of diagnos_vital_sign_table into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $id the primary key id value of table diagnos_vital_sign_table which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($id)
    {
        if($id == "*"){
            $sql = "SELECT * FROM diagnos_vital_sign_table";
        } else { //id
            $sql =  "SELECT * FROM diagnos_vital_sign_table WHERE id={$this->parseValue($id,'int')}";
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
            @$this->bloodPressure = (integer)$rowObject->blood_pressure;
            @$this->pluseRate = (integer)$rowObject->pluse_rate;
            @$this->respiration = (integer)$rowObject->respiration;
            @$this->temprature = (integer)$rowObject->temprature;
            @$this->oxygenSaturation = (integer)$rowObject->oxygen_saturation;
            @$this->radomBloodSugar = (integer)$rowObject->radom_blood_sugar;
            @$this->fastingBloodSugar = (integer)$rowObject->fasting_blood_sugar;
            @$this->remarks = $rowObject->remarks;
            @$this->createdAt = $this->replaceAposBackSlash($rowObject->created_at);
            @$this->status = $this->replaceAposBackSlash($rowObject->status);
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;

    }

    /**
     * Deletes a specific row from the table diagnos_vital_sign_table
     * @param int $id the primary key id value of table diagnos_vital_sign_table which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($id)
    {
        $sql = "DELETE FROM diagnos_vital_sign_table WHERE id={$this->parseValue($id,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of diagnos_vital_sign_table
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
            INSERT INTO diagnos_vital_sign_table
            (patient_card_number,employee_id,blood_pressure,pluse_rate,respiration,temprature,oxygen_saturation,radom_blood_sugar,fasting_blood_sugar,remarks,created_at,status)
            VALUES(
			{$this->parseValue($this->patientCardNumber,'notNumber')},
			{$this->parseValue($this->employeeId,'notNumber')},
			{$this->parseValue($this->bloodPressure)},
			{$this->parseValue($this->pluseRate)},
			{$this->parseValue($this->respiration)},
			{$this->parseValue($this->temprature)},
			{$this->parseValue($this->oxygenSaturation)},
			{$this->parseValue($this->radomBloodSugar)},
			{$this->parseValue($this->fastingBloodSugar)},
			{$this->parseValue($this->remarks,'notNumber')},
			{$this->parseValue($this->createdAt,'notNumber')},
			{$this->parseValue($this->status,'notNumber')})
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
     * Updates a specific row from the table diagnos_vital_sign_table with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $id the primary key id value of table diagnos_vital_sign_table which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($id)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                diagnos_vital_sign_table
            SET 
				patient_card_number={$this->parseValue($this->patientCardNumber,'notNumber')},
				employee_id={$this->parseValue($this->employeeId,'notNumber')},
				blood_pressure={$this->parseValue($this->bloodPressure)},
				pluse_rate={$this->parseValue($this->pluseRate)},
				respiration={$this->parseValue($this->respiration)},
				temprature={$this->parseValue($this->temprature)},
				oxygen_saturation={$this->parseValue($this->oxygenSaturation)},
				radom_blood_sugar={$this->parseValue($this->radomBloodSugar)},
				fasting_blood_sugar={$this->parseValue($this->fastingBloodSugar)},
				remarks={$this->parseValue($this->remarks,'notNumber')},
				created_at={$this->parseValue($this->createdAt,'notNumber')},
				status={$this->parseValue($this->status,'notNumber')}
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
     * Facility for updating a row of diagnos_vital_sign_table previously loaded.
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
    * Facility for display a row for diagnos_vital_sign_table previously loaded.
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
    * Facility for upload a new row into diagnos_vital_sign_table.
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
