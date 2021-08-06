<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/classes/init.config.php';

/**
 * Class MeDoctorsTable
 * @extends MySqlRecord
 * @filesource MeDoctorsTable.php
*/

// namespace hulutera;

class MeDoctorsTable extends MySqlRecord
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
     * Class attribute for mapping the primary key id of table doctors_table
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
     * Class attribute for mapping table field doctor_name
     *
     * Comment for field doctor_name: Not specified.<br>
     * Field information:
     *  - Data type: varchar(250)
     *  - Null : NO
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var string $doctorName
     */
    private $doctorName;

    /**
     * Class attribute for mapping table field doctor_speciality
     *
     * Comment for field doctor_speciality: Not specified.<br>
     * Field information:
     *  - Data type: varchar(125)
     *  - Null : YES
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var string $doctorSpeciality
     */
    private $doctorSpeciality;

    /**
     * Class attribute for mapping table field doctor_location
     *
     * Comment for field doctor_location: Not specified.<br>
     * Field information:
     *  - Data type: varchar(125)
     *  - Null : YES
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var string $doctorLocation
     */
    private $doctorLocation;

    /**
     * Class attribute for mapping table field doctor_phone_home
     *
     * Comment for field doctor_phone_home: Not specified.<br>
     * Field information:
     *  - Data type: varchar(250)
     *  - Null : YES
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var string $doctorPhoneHome
     */
    private $doctorPhoneHome;

    /**
     * Class attribute for mapping table field doctor_phone_office
     *
     * Comment for field doctor_phone_office: Not specified.<br>
     * Field information:
     *  - Data type: varchar(250)
     *  - Null : YES
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var string $doctorPhoneOffice
     */
    private $doctorPhoneOffice;

    /**
     * Class attribute for mapping table field doctor_phone_mobile
     *
     * Comment for field doctor_phone_mobile: Not specified.<br>
     * Field information:
     *  - Data type: varchar(250)
     *  - Null : YES
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var string $doctorPhoneMobile
     */
    private $doctorPhoneMobile;

    /**
     * Class attribute for storing the SQL DDL of table doctors_table
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBkb2N0b3JzX3RhYmxlYCAoCiAgYGlkYCBpbnQoMTEpIE5PVCBOVUxMIEFVVE9fSU5DUkVNRU5ULAogIGBkb2N0b3JfbmFtZWAgdmFyY2hhcigyNTApIE5PVCBOVUxMLAogIGBkb2N0b3Jfc3BlY2lhbGl0eWAgdmFyY2hhcigxMjUpIERFRkFVTFQgTlVMTCwKICBgZG9jdG9yX2xvY2F0aW9uYCB2YXJjaGFyKDEyNSkgREVGQVVMVCBOVUxMLAogIGBkb2N0b3JfcGhvbmVfaG9tZWAgdmFyY2hhcigyNTApIERFRkFVTFQgTlVMTCwKICBgZG9jdG9yX3Bob25lX29mZmljZWAgdmFyY2hhcigyNTApIERFRkFVTFQgTlVMTCwKICBgZG9jdG9yX3Bob25lX21vYmlsZWAgdmFyY2hhcigyNTApIERFRkFVTFQgTlVMTCwKICBQUklNQVJZIEtFWSAoYGlkYCkKKSBFTkdJTkU9TXlJU0FNIEFVVE9fSU5DUkVNRU5UPTMwIERFRkFVTFQgQ0hBUlNFVD11dGY4";

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
     * setDoctorName Sets the class attribute doctorName with a given value
     *
     * The attribute doctorName maps the field doctor_name defined as varchar(250).<br>
     * Comment for field doctor_name: Not specified.<br>
     * @param string $doctorName
     * @category Modifier
     */
    public function setDoctorName($doctorName)
    {
        $this->doctorName = (string)$doctorName;
    }

    /**
     * setDoctorSpeciality Sets the class attribute doctorSpeciality with a given value
     *
     * The attribute doctorSpeciality maps the field doctor_speciality defined as varchar(125).<br>
     * Comment for field doctor_speciality: Not specified.<br>
     * @param string $doctorSpeciality
     * @category Modifier
     */
    public function setDoctorSpeciality($doctorSpeciality)
    {
        $this->doctorSpeciality = (string)$doctorSpeciality;
    }

    /**
     * setDoctorLocation Sets the class attribute doctorLocation with a given value
     *
     * The attribute doctorLocation maps the field doctor_location defined as varchar(125).<br>
     * Comment for field doctor_location: Not specified.<br>
     * @param string $doctorLocation
     * @category Modifier
     */
    public function setDoctorLocation($doctorLocation)
    {
        $this->doctorLocation = (string)$doctorLocation;
    }

    /**
     * setDoctorPhoneHome Sets the class attribute doctorPhoneHome with a given value
     *
     * The attribute doctorPhoneHome maps the field doctor_phone_home defined as varchar(250).<br>
     * Comment for field doctor_phone_home: Not specified.<br>
     * @param string $doctorPhoneHome
     * @category Modifier
     */
    public function setDoctorPhoneHome($doctorPhoneHome)
    {
        $this->doctorPhoneHome = (string)$doctorPhoneHome;
    }

    /**
     * setDoctorPhoneOffice Sets the class attribute doctorPhoneOffice with a given value
     *
     * The attribute doctorPhoneOffice maps the field doctor_phone_office defined as varchar(250).<br>
     * Comment for field doctor_phone_office: Not specified.<br>
     * @param string $doctorPhoneOffice
     * @category Modifier
     */
    public function setDoctorPhoneOffice($doctorPhoneOffice)
    {
        $this->doctorPhoneOffice = (string)$doctorPhoneOffice;
    }

    /**
     * setDoctorPhoneMobile Sets the class attribute doctorPhoneMobile with a given value
     *
     * The attribute doctorPhoneMobile maps the field doctor_phone_mobile defined as varchar(250).<br>
     * Comment for field doctor_phone_mobile: Not specified.<br>
     * @param string $doctorPhoneMobile
     * @category Modifier
     */
    public function setDoctorPhoneMobile($doctorPhoneMobile)
    {
        $this->doctorPhoneMobile = (string)$doctorPhoneMobile;
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
     * getDoctorName gets the class attribute doctorName value
     *
     * The attribute doctorName maps the field doctor_name defined as varchar(250).<br>
     * Comment for field doctor_name: Not specified.
     * @return string $doctorName
     * @category Accessor of $doctorName
     */
    public function getDoctorName()
    {
        return $this->doctorName;
    }

    /**
     * getDoctorSpeciality gets the class attribute doctorSpeciality value
     *
     * The attribute doctorSpeciality maps the field doctor_speciality defined as varchar(125).<br>
     * Comment for field doctor_speciality: Not specified.
     * @return string $doctorSpeciality
     * @category Accessor of $doctorSpeciality
     */
    public function getDoctorSpeciality()
    {
        return $this->doctorSpeciality;
    }

    /**
     * getDoctorLocation gets the class attribute doctorLocation value
     *
     * The attribute doctorLocation maps the field doctor_location defined as varchar(125).<br>
     * Comment for field doctor_location: Not specified.
     * @return string $doctorLocation
     * @category Accessor of $doctorLocation
     */
    public function getDoctorLocation()
    {
        return $this->doctorLocation;
    }

    /**
     * getDoctorPhoneHome gets the class attribute doctorPhoneHome value
     *
     * The attribute doctorPhoneHome maps the field doctor_phone_home defined as varchar(250).<br>
     * Comment for field doctor_phone_home: Not specified.
     * @return string $doctorPhoneHome
     * @category Accessor of $doctorPhoneHome
     */
    public function getDoctorPhoneHome()
    {
        return $this->doctorPhoneHome;
    }

    /**
     * getDoctorPhoneOffice gets the class attribute doctorPhoneOffice value
     *
     * The attribute doctorPhoneOffice maps the field doctor_phone_office defined as varchar(250).<br>
     * Comment for field doctor_phone_office: Not specified.
     * @return string $doctorPhoneOffice
     * @category Accessor of $doctorPhoneOffice
     */
    public function getDoctorPhoneOffice()
    {
        return $this->doctorPhoneOffice;
    }

    /**
     * getDoctorPhoneMobile gets the class attribute doctorPhoneMobile value
     *
     * The attribute doctorPhoneMobile maps the field doctor_phone_mobile defined as varchar(250).<br>
     * Comment for field doctor_phone_mobile: Not specified.
     * @return string $doctorPhoneMobile
     * @category Accessor of $doctorPhoneMobile
     */
    public function getDoctorPhoneMobile()
    {
        return $this->doctorPhoneMobile;
    }

    /**
     * Gets DDL SQL code of the table doctors_table
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
        return "doctors_table";
    }

    /**
     * The MeDoctorsTable constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $id is given.
     *  - with a fetched data row from the table doctors_table having id=$id
     * @param int $id. If omitted an empty (not fetched) instance is created.
     * @return MeDoctorsTable Object
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
     * Fetchs a table row of doctors_table into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $id the primary key id value of table doctors_table which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($id)
    {
        if($id == "*"){
            $sql = "SELECT * FROM doctors_table";
        } else { //id
            $sql =  "SELECT * FROM doctors_table WHERE id={$this->parseValue($id,'int')}";
        }

        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->id = (integer)$rowObject->id;
            @$this->doctorName = $this->replaceAposBackSlash($rowObject->doctor_name);
            @$this->doctorSpeciality = $this->replaceAposBackSlash($rowObject->doctor_speciality);
            @$this->doctorLocation = $this->replaceAposBackSlash($rowObject->doctor_location);
            @$this->doctorPhoneHome = $this->replaceAposBackSlash($rowObject->doctor_phone_home);
            @$this->doctorPhoneOffice = $this->replaceAposBackSlash($rowObject->doctor_phone_office);
            @$this->doctorPhoneMobile = $this->replaceAposBackSlash($rowObject->doctor_phone_mobile);
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;

    }

    /**
     * Deletes a specific row from the table doctors_table
     * @param int $id the primary key id value of table doctors_table which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($id)
    {
        $sql = "DELETE FROM doctors_table WHERE id={$this->parseValue($id,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of doctors_table
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
            INSERT INTO doctors_table
            (doctor_name,doctor_speciality,doctor_location,doctor_phone_home,doctor_phone_office,doctor_phone_mobile)
            VALUES(
			{$this->parseValue($this->doctorName,'notNumber')},
			{$this->parseValue($this->doctorSpeciality,'notNumber')},
			{$this->parseValue($this->doctorLocation,'notNumber')},
			{$this->parseValue($this->doctorPhoneHome,'notNumber')},
			{$this->parseValue($this->doctorPhoneOffice,'notNumber')},
			{$this->parseValue($this->doctorPhoneMobile,'notNumber')})
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
     * Updates a specific row from the table doctors_table with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $id the primary key id value of table doctors_table which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($id)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                doctors_table
            SET
				doctor_name={$this->parseValue($this->doctorName,'notNumber')},
				doctor_speciality={$this->parseValue($this->doctorSpeciality,'notNumber')},
				doctor_location={$this->parseValue($this->doctorLocation,'notNumber')},
				doctor_phone_home={$this->parseValue($this->doctorPhoneHome,'notNumber')},
				doctor_phone_office={$this->parseValue($this->doctorPhoneOffice,'notNumber')},
				doctor_phone_mobile={$this->parseValue($this->doctorPhoneMobile,'notNumber')}
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
     * Facility for updating a row of doctors_table previously loaded.
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
    * Facility for display a row for doctors_table previously loaded.
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
    * Facility for upload a new row into doctors_table.
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
