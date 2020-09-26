<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/classes/init.config.php';

/**
 * Class MePatientTable
 * @extends MySqlRecord
 * @filesource MePatientTable.php
*/

// namespace hulutera;

class MePatientTable extends MySqlRecord
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
     * Class attribute for mapping the primary key patient_id of table patient_table
     *
     * Comment for field patient_id: Not specified<br>
     * @var int $patientId
     */
    private $patientId;

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
     *  - DB Index: UNI
     *  - Default: 
     *  - Extra:  
     * @var string $patientCardNumber
     */
    private $patientCardNumber;

    /**
     * Class attribute for mapping table field patient_first_name
     *
     * Comment for field patient_first_name: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $patientFirstName
     */
    private $patientFirstName;

    /**
     * Class attribute for mapping table field patient_last_name
     *
     * Comment for field patient_last_name: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $patientLastName
     */
    private $patientLastName;

    /**
     * Class attribute for mapping table field patient_email
     *
     * Comment for field patient_email: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $patientEmail
     */
    private $patientEmail;

    /**
     * Class attribute for mapping table field patient_phone
     *
     * Comment for field patient_phone: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $patientPhone
     */
    private $patientPhone;

    /**
     * Class attribute for mapping table field patient_job_titile
     *
     * Comment for field patient_job_titile: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $patientJobTitile
     */
    private $patientJobTitile;

    /**
     * Class attribute for mapping table field patient_signature
     *
     * Comment for field patient_signature: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $patientSignature
     */
    private $patientSignature;

    /**
     * Class attribute for mapping table field patient_registered_date
     *
     * Comment for field patient_registered_date: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $patientRegisteredDate
     */
    private $patientRegisteredDate;

    /**
     * Class attribute for mapping table field patient_age
     *
     * Comment for field patient_age: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $patientAge
     */
    private $patientAge;

    /**
     * Class attribute for mapping table field patient_gender
     *
     * Comment for field patient_gender: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $patientGender
     */
    private $patientGender;

    /**
     * Class attribute for mapping table field patient_status
     *
     * Comment for field patient_status: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $patientStatus
     */
    private $patientStatus;

    /**
     * Class attribute for mapping table field patient_wereda
     *
     * Comment for field patient_wereda: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $patientWereda
     */
    private $patientWereda;

    /**
     * Class attribute for mapping table field patient_kebele
     *
     * Comment for field patient_kebele: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $patientKebele
     */
    private $patientKebele;

    /**
     * Class attribute for mapping table field patient_address
     *
     * Comment for field patient_address: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $patientAddress
     */
    private $patientAddress;

    /**
     * Class attribute for mapping table field patient_session_status
     *
     * Comment for field patient_session_status: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: closed
     *  - Extra:  
     * @var string $patientSessionStatus
     */
    private $patientSessionStatus;

    /**
     * Class attribute for mapping table field patient_session_open_at
     *
     * Comment for field patient_session_open_at: Not specified.<br>
     * Field information:
     *  - Data type: datetime
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $patientSessionOpenAt
     */
    private $patientSessionOpenAt;

    /**
     * Class attribute for mapping table field patient_session_closed_at
     *
     * Comment for field patient_session_closed_at: Not specified.<br>
     * Field information:
     *  - Data type: datetime
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $patientSessionClosedAt
     */
    private $patientSessionClosedAt;

    /**
     * Class attribute for storing the SQL DDL of table patient_table
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBwYXRpZW50X3RhYmxlYCAoCiAgYHBhdGllbnRfaWRgIGludCgxMSkgTk9UIE5VTEwgQVVUT19JTkNSRU1FTlQsCiAgYHBhdGllbnRfY2FyZF9udW1iZXJgIHZhcmNoYXIoNDUpIE5PVCBOVUxMLAogIGBwYXRpZW50X2ZpcnN0X25hbWVgIHZhcmNoYXIoNDUpIE5PVCBOVUxMLAogIGBwYXRpZW50X2xhc3RfbmFtZWAgdmFyY2hhcig0NSkgTk9UIE5VTEwsCiAgYHBhdGllbnRfZW1haWxgIHZhcmNoYXIoNDUpIERFRkFVTFQgTlVMTCwKICBgcGF0aWVudF9waG9uZWAgdmFyY2hhcig0NSkgTk9UIE5VTEwsCiAgYHBhdGllbnRfam9iX3RpdGlsZWAgdmFyY2hhcig0NSkgREVGQVVMVCBOVUxMLAogIGBwYXRpZW50X3NpZ25hdHVyZWAgdmFyY2hhcig0NSkgREVGQVVMVCBOVUxMLAogIGBwYXRpZW50X3JlZ2lzdGVyZWRfZGF0ZWAgdmFyY2hhcig0NSkgTk9UIE5VTEwsCiAgYHBhdGllbnRfYWdlYCBpbnQoMTEpIE5PVCBOVUxMLAogIGBwYXRpZW50X2dlbmRlcmAgdmFyY2hhcig0NSkgTk9UIE5VTEwsCiAgYHBhdGllbnRfc3RhdHVzYCB2YXJjaGFyKDQ1KSBOT1QgTlVMTCwKICBgcGF0aWVudF93ZXJlZGFgIGludCgxMSkgREVGQVVMVCBOVUxMLAogIGBwYXRpZW50X2tlYmVsZWAgaW50KDExKSBERUZBVUxUIE5VTEwsCiAgYHBhdGllbnRfYWRkcmVzc2AgdmFyY2hhcig0NSkgTk9UIE5VTEwsCiAgYHBhdGllbnRfc2Vzc2lvbl9zdGF0dXNgIHZhcmNoYXIoNDUpIE5PVCBOVUxMIERFRkFVTFQgJ2Nsb3NlZCcsCiAgYHBhdGllbnRfc2Vzc2lvbl9vcGVuX2F0YCBkYXRldGltZSBOT1QgTlVMTCwKICBgcGF0aWVudF9zZXNzaW9uX2Nsb3NlZF9hdGAgZGF0ZXRpbWUgTk9UIE5VTEwsCiAgUFJJTUFSWSBLRVkgKGBwYXRpZW50X2lkYCksCiAgVU5JUVVFIEtFWSBgaWR1c2Vyc19VTklRVUVgIChgcGF0aWVudF9pZGApLAogIFVOSVFVRSBLRVkgYHBhdGllbnRfY2FyZF9udW1iZXJfVU5JUVVFYCAoYHBhdGllbnRfY2FyZF9udW1iZXJgKQopIEVOR0lORT1Jbm5vREIgQVVUT19JTkNSRU1FTlQ9MTAwIERFRkFVTFQgQ0hBUlNFVD11dGY4";

    /**
     * setPatientId Sets the class attribute patientId with a given value
     *
     * The attribute patientId maps the field patient_id defined as int(11).<br>
     * Comment for field patient_id: Not specified.<br>
     * @param int $patientId
     * @category Modifier
     */
    public function setPatientId($patientId)
    {
        $this->patientId = (int)$patientId;
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
     * setPatientFirstName Sets the class attribute patientFirstName with a given value
     *
     * The attribute patientFirstName maps the field patient_first_name defined as varchar(45).<br>
     * Comment for field patient_first_name: Not specified.<br>
     * @param string $patientFirstName
     * @category Modifier
     */
    public function setPatientFirstName($patientFirstName)
    {
        $this->patientFirstName = (string)$patientFirstName;
    }

    /**
     * setPatientLastName Sets the class attribute patientLastName with a given value
     *
     * The attribute patientLastName maps the field patient_last_name defined as varchar(45).<br>
     * Comment for field patient_last_name: Not specified.<br>
     * @param string $patientLastName
     * @category Modifier
     */
    public function setPatientLastName($patientLastName)
    {
        $this->patientLastName = (string)$patientLastName;
    }

    /**
     * setPatientEmail Sets the class attribute patientEmail with a given value
     *
     * The attribute patientEmail maps the field patient_email defined as varchar(45).<br>
     * Comment for field patient_email: Not specified.<br>
     * @param string $patientEmail
     * @category Modifier
     */
    public function setPatientEmail($patientEmail)
    {
        $this->patientEmail = (string)$patientEmail;
    }

    /**
     * setPatientPhone Sets the class attribute patientPhone with a given value
     *
     * The attribute patientPhone maps the field patient_phone defined as varchar(45).<br>
     * Comment for field patient_phone: Not specified.<br>
     * @param string $patientPhone
     * @category Modifier
     */
    public function setPatientPhone($patientPhone)
    {
        $this->patientPhone = (string)$patientPhone;
    }

    /**
     * setPatientJobTitile Sets the class attribute patientJobTitile with a given value
     *
     * The attribute patientJobTitile maps the field patient_job_titile defined as varchar(45).<br>
     * Comment for field patient_job_titile: Not specified.<br>
     * @param string $patientJobTitile
     * @category Modifier
     */
    public function setPatientJobTitile($patientJobTitile)
    {
        $this->patientJobTitile = (string)$patientJobTitile;
    }

    /**
     * setPatientSignature Sets the class attribute patientSignature with a given value
     *
     * The attribute patientSignature maps the field patient_signature defined as varchar(45).<br>
     * Comment for field patient_signature: Not specified.<br>
     * @param string $patientSignature
     * @category Modifier
     */
    public function setPatientSignature($patientSignature)
    {
        $this->patientSignature = (string)$patientSignature;
    }

    /**
     * setPatientRegisteredDate Sets the class attribute patientRegisteredDate with a given value
     *
     * The attribute patientRegisteredDate maps the field patient_registered_date defined as varchar(45).<br>
     * Comment for field patient_registered_date: Not specified.<br>
     * @param string $patientRegisteredDate
     * @category Modifier
     */
    public function setPatientRegisteredDate($patientRegisteredDate)
    {
        $this->patientRegisteredDate = (string)$patientRegisteredDate;
    }

    /**
     * setPatientAge Sets the class attribute patientAge with a given value
     *
     * The attribute patientAge maps the field patient_age defined as int(11).<br>
     * Comment for field patient_age: Not specified.<br>
     * @param int $patientAge
     * @category Modifier
     */
    public function setPatientAge($patientAge)
    {
        $this->patientAge = (int)$patientAge;
    }

    /**
     * setPatientGender Sets the class attribute patientGender with a given value
     *
     * The attribute patientGender maps the field patient_gender defined as varchar(45).<br>
     * Comment for field patient_gender: Not specified.<br>
     * @param string $patientGender
     * @category Modifier
     */
    public function setPatientGender($patientGender)
    {
        $this->patientGender = (string)$patientGender;
    }

    /**
     * setPatientStatus Sets the class attribute patientStatus with a given value
     *
     * The attribute patientStatus maps the field patient_status defined as varchar(45).<br>
     * Comment for field patient_status: Not specified.<br>
     * @param string $patientStatus
     * @category Modifier
     */
    public function setPatientStatus($patientStatus)
    {
        $this->patientStatus = (string)$patientStatus;
    }

    /**
     * setPatientWereda Sets the class attribute patientWereda with a given value
     *
     * The attribute patientWereda maps the field patient_wereda defined as int(11).<br>
     * Comment for field patient_wereda: Not specified.<br>
     * @param int $patientWereda
     * @category Modifier
     */
    public function setPatientWereda($patientWereda)
    {
        $this->patientWereda = (int)$patientWereda;
    }

    /**
     * setPatientKebele Sets the class attribute patientKebele with a given value
     *
     * The attribute patientKebele maps the field patient_kebele defined as int(11).<br>
     * Comment for field patient_kebele: Not specified.<br>
     * @param int $patientKebele
     * @category Modifier
     */
    public function setPatientKebele($patientKebele)
    {
        $this->patientKebele = (int)$patientKebele;
    }

    /**
     * setPatientAddress Sets the class attribute patientAddress with a given value
     *
     * The attribute patientAddress maps the field patient_address defined as varchar(45).<br>
     * Comment for field patient_address: Not specified.<br>
     * @param string $patientAddress
     * @category Modifier
     */
    public function setPatientAddress($patientAddress)
    {
        $this->patientAddress = (string)$patientAddress;
    }

    /**
     * setPatientSessionStatus Sets the class attribute patientSessionStatus with a given value
     *
     * The attribute patientSessionStatus maps the field patient_session_status defined as varchar(45).<br>
     * Comment for field patient_session_status: Not specified.<br>
     * @param string $patientSessionStatus
     * @category Modifier
     */
    public function setPatientSessionStatus($patientSessionStatus)
    {
        $this->patientSessionStatus = (string)$patientSessionStatus;
    }

    /**
     * setPatientSessionOpenAt Sets the class attribute patientSessionOpenAt with a given value
     *
     * The attribute patientSessionOpenAt maps the field patient_session_open_at defined as datetime.<br>
     * Comment for field patient_session_open_at: Not specified.<br>
     * @param string $patientSessionOpenAt
     * @category Modifier
     */
    public function setPatientSessionOpenAt($patientSessionOpenAt)
    {
        $this->patientSessionOpenAt = (string)$patientSessionOpenAt;
    }

    /**
     * setPatientSessionClosedAt Sets the class attribute patientSessionClosedAt with a given value
     *
     * The attribute patientSessionClosedAt maps the field patient_session_closed_at defined as datetime.<br>
     * Comment for field patient_session_closed_at: Not specified.<br>
     * @param string $patientSessionClosedAt
     * @category Modifier
     */
    public function setPatientSessionClosedAt($patientSessionClosedAt)
    {
        $this->patientSessionClosedAt = (string)$patientSessionClosedAt;
    }

    /**
     * getPatientId gets the class attribute patientId value
     *
     * The attribute patientId maps the field patient_id defined as int(11).<br>
     * Comment for field patient_id: Not specified.
     * @return int $patientId
     * @category Accessor of $patientId
     */
    public function getPatientId()
    {
        return $this->patientId;
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
     * getPatientFirstName gets the class attribute patientFirstName value
     *
     * The attribute patientFirstName maps the field patient_first_name defined as varchar(45).<br>
     * Comment for field patient_first_name: Not specified.
     * @return string $patientFirstName
     * @category Accessor of $patientFirstName
     */
    public function getPatientFirstName()
    {
        return $this->patientFirstName;
    }

    /**
     * getPatientLastName gets the class attribute patientLastName value
     *
     * The attribute patientLastName maps the field patient_last_name defined as varchar(45).<br>
     * Comment for field patient_last_name: Not specified.
     * @return string $patientLastName
     * @category Accessor of $patientLastName
     */
    public function getPatientLastName()
    {
        return $this->patientLastName;
    }

    /**
     * getPatientEmail gets the class attribute patientEmail value
     *
     * The attribute patientEmail maps the field patient_email defined as varchar(45).<br>
     * Comment for field patient_email: Not specified.
     * @return string $patientEmail
     * @category Accessor of $patientEmail
     */
    public function getPatientEmail()
    {
        return $this->patientEmail;
    }

    /**
     * getPatientPhone gets the class attribute patientPhone value
     *
     * The attribute patientPhone maps the field patient_phone defined as varchar(45).<br>
     * Comment for field patient_phone: Not specified.
     * @return string $patientPhone
     * @category Accessor of $patientPhone
     */
    public function getPatientPhone()
    {
        return $this->patientPhone;
    }

    /**
     * getPatientJobTitile gets the class attribute patientJobTitile value
     *
     * The attribute patientJobTitile maps the field patient_job_titile defined as varchar(45).<br>
     * Comment for field patient_job_titile: Not specified.
     * @return string $patientJobTitile
     * @category Accessor of $patientJobTitile
     */
    public function getPatientJobTitile()
    {
        return $this->patientJobTitile;
    }

    /**
     * getPatientSignature gets the class attribute patientSignature value
     *
     * The attribute patientSignature maps the field patient_signature defined as varchar(45).<br>
     * Comment for field patient_signature: Not specified.
     * @return string $patientSignature
     * @category Accessor of $patientSignature
     */
    public function getPatientSignature()
    {
        return $this->patientSignature;
    }

    /**
     * getPatientRegisteredDate gets the class attribute patientRegisteredDate value
     *
     * The attribute patientRegisteredDate maps the field patient_registered_date defined as varchar(45).<br>
     * Comment for field patient_registered_date: Not specified.
     * @return string $patientRegisteredDate
     * @category Accessor of $patientRegisteredDate
     */
    public function getPatientRegisteredDate()
    {
        return $this->patientRegisteredDate;
    }

    /**
     * getPatientAge gets the class attribute patientAge value
     *
     * The attribute patientAge maps the field patient_age defined as int(11).<br>
     * Comment for field patient_age: Not specified.
     * @return int $patientAge
     * @category Accessor of $patientAge
     */
    public function getPatientAge()
    {
        return $this->patientAge;
    }

    /**
     * getPatientGender gets the class attribute patientGender value
     *
     * The attribute patientGender maps the field patient_gender defined as varchar(45).<br>
     * Comment for field patient_gender: Not specified.
     * @return string $patientGender
     * @category Accessor of $patientGender
     */
    public function getPatientGender()
    {
        return $this->patientGender;
    }

    /**
     * getPatientStatus gets the class attribute patientStatus value
     *
     * The attribute patientStatus maps the field patient_status defined as varchar(45).<br>
     * Comment for field patient_status: Not specified.
     * @return string $patientStatus
     * @category Accessor of $patientStatus
     */
    public function getPatientStatus()
    {
        return $this->patientStatus;
    }

    /**
     * getPatientWereda gets the class attribute patientWereda value
     *
     * The attribute patientWereda maps the field patient_wereda defined as int(11).<br>
     * Comment for field patient_wereda: Not specified.
     * @return int $patientWereda
     * @category Accessor of $patientWereda
     */
    public function getPatientWereda()
    {
        return $this->patientWereda;
    }

    /**
     * getPatientKebele gets the class attribute patientKebele value
     *
     * The attribute patientKebele maps the field patient_kebele defined as int(11).<br>
     * Comment for field patient_kebele: Not specified.
     * @return int $patientKebele
     * @category Accessor of $patientKebele
     */
    public function getPatientKebele()
    {
        return $this->patientKebele;
    }

    /**
     * getPatientAddress gets the class attribute patientAddress value
     *
     * The attribute patientAddress maps the field patient_address defined as varchar(45).<br>
     * Comment for field patient_address: Not specified.
     * @return string $patientAddress
     * @category Accessor of $patientAddress
     */
    public function getPatientAddress()
    {
        return $this->patientAddress;
    }

    /**
     * getPatientSessionStatus gets the class attribute patientSessionStatus value
     *
     * The attribute patientSessionStatus maps the field patient_session_status defined as varchar(45).<br>
     * Comment for field patient_session_status: Not specified.
     * @return string $patientSessionStatus
     * @category Accessor of $patientSessionStatus
     */
    public function getPatientSessionStatus()
    {
        return $this->patientSessionStatus;
    }

    /**
     * getPatientSessionOpenAt gets the class attribute patientSessionOpenAt value
     *
     * The attribute patientSessionOpenAt maps the field patient_session_open_at defined as datetime.<br>
     * Comment for field patient_session_open_at: Not specified.
     * @return string $patientSessionOpenAt
     * @category Accessor of $patientSessionOpenAt
     */
    public function getPatientSessionOpenAt()
    {
        return $this->patientSessionOpenAt;
    }

    /**
     * getPatientSessionClosedAt gets the class attribute patientSessionClosedAt value
     *
     * The attribute patientSessionClosedAt maps the field patient_session_closed_at defined as datetime.<br>
     * Comment for field patient_session_closed_at: Not specified.
     * @return string $patientSessionClosedAt
     * @category Accessor of $patientSessionClosedAt
     */
    public function getPatientSessionClosedAt()
    {
        return $this->patientSessionClosedAt;
    }

    /**
     * Gets DDL SQL code of the table patient_table
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
        return "patient_table";
    }

    /**
     * The MePatientTable constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $patientId is given.
     *  - with a fetched data row from the table patient_table having patient_id=$patientId
     * @param int $patientId. If omitted an empty (not fetched) instance is created.
     * @return MePatientTable Object
     */
    public function __construct($patientId = null)
    {
        parent::__construct();
        if (!empty($patientId)) {
            $this->select($patientId);
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
     * Fetchs a table row of patient_table into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $patientId the primary key patient_id value of table patient_table which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($patientId)
    {
        if($patientId == "*"){
            $sql = "SELECT * FROM patient_table";
        } else { //id
            $sql =  "SELECT * FROM patient_table WHERE patient_id={$this->parseValue($patientId,'int')}";
        }

        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->patientId = (integer)$rowObject->patient_id;
            @$this->patientCardNumber = $this->replaceAposBackSlash($rowObject->patient_card_number);
            @$this->patientFirstName = $this->replaceAposBackSlash($rowObject->patient_first_name);
            @$this->patientLastName = $this->replaceAposBackSlash($rowObject->patient_last_name);
            @$this->patientEmail = $this->replaceAposBackSlash($rowObject->patient_email);
            @$this->patientPhone = $this->replaceAposBackSlash($rowObject->patient_phone);
            @$this->patientJobTitile = $this->replaceAposBackSlash($rowObject->patient_job_titile);
            @$this->patientSignature = $this->replaceAposBackSlash($rowObject->patient_signature);
            @$this->patientRegisteredDate = $this->replaceAposBackSlash($rowObject->patient_registered_date);
            @$this->patientAge = (integer)$rowObject->patient_age;
            @$this->patientGender = $this->replaceAposBackSlash($rowObject->patient_gender);
            @$this->patientStatus = $this->replaceAposBackSlash($rowObject->patient_status);
            @$this->patientWereda = (integer)$rowObject->patient_wereda;
            @$this->patientKebele = (integer)$rowObject->patient_kebele;
            @$this->patientAddress = $this->replaceAposBackSlash($rowObject->patient_address);
            @$this->patientSessionStatus = $this->replaceAposBackSlash($rowObject->patient_session_status);
            @$this->patientSessionOpenAt = empty($rowObject->patient_session_open_at) ? null : date(FETCHED_DATETIME_FORMAT,strtotime($rowObject->patient_session_open_at));
            @$this->patientSessionClosedAt = empty($rowObject->patient_session_closed_at) ? null : date(FETCHED_DATETIME_FORMAT,strtotime($rowObject->patient_session_closed_at));
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;

    }

    /**
     * Deletes a specific row from the table patient_table
     * @param int $patientId the primary key patient_id value of table patient_table which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($patientId)
    {
        $sql = "DELETE FROM patient_table WHERE patient_id={$this->parseValue($patientId,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of patient_table
     *
     * All class attributes values defined for mapping all table fields are automatically used during inserting
     * @return mixed MySQL insert result
     * @category DML
     */
    public function insert()
    {
        if ($this->isPkAutoIncrement) {
            $this->patientId = "";
        }
        // $constants = get_defined_constants();
        $sql = <<< SQL
            INSERT INTO patient_table
            (patient_card_number,patient_first_name,patient_last_name,patient_email,patient_phone,patient_job_titile,patient_signature,patient_registered_date,patient_age,patient_gender,patient_status,patient_wereda,patient_kebele,patient_address,patient_session_status,patient_session_open_at,patient_session_closed_at)
            VALUES(
			{$this->parseValue($this->patientCardNumber,'notNumber')},
			{$this->parseValue($this->patientFirstName,'notNumber')},
			{$this->parseValue($this->patientLastName,'notNumber')},
			{$this->parseValue($this->patientEmail,'notNumber')},
			{$this->parseValue($this->patientPhone,'notNumber')},
			{$this->parseValue($this->patientJobTitile,'notNumber')},
			{$this->parseValue($this->patientSignature,'notNumber')},
			{$this->parseValue($this->patientRegisteredDate,'notNumber')},
			{$this->parseValue($this->patientAge)},
			{$this->parseValue($this->patientGender,'notNumber')},
			{$this->parseValue($this->patientStatus,'notNumber')},
			{$this->parseValue($this->patientWereda)},
			{$this->parseValue($this->patientKebele)},
			{$this->parseValue($this->patientAddress,'notNumber')},
			{$this->parseValue($this->patientSessionStatus,'notNumber')},
			{$this->parseValue($this->patientSessionOpenAt,'datetime')},
			{$this->parseValue($this->patientSessionClosedAt,'datetime')})
SQL;
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        } else {
            $this->allowUpdate = true;
            if ($this->isPkAutoIncrement) {
                $this->patientId = $this->insert_id;
            }
        }
        return $result;
    }

    /**
     * Updates a specific row from the table patient_table with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $patientId the primary key patient_id value of table patient_table which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($patientId)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                patient_table
            SET 
				patient_card_number={$this->parseValue($this->patientCardNumber,'notNumber')},
				patient_first_name={$this->parseValue($this->patientFirstName,'notNumber')},
				patient_last_name={$this->parseValue($this->patientLastName,'notNumber')},
				patient_email={$this->parseValue($this->patientEmail,'notNumber')},
				patient_phone={$this->parseValue($this->patientPhone,'notNumber')},
				patient_job_titile={$this->parseValue($this->patientJobTitile,'notNumber')},
				patient_signature={$this->parseValue($this->patientSignature,'notNumber')},
				patient_registered_date={$this->parseValue($this->patientRegisteredDate,'notNumber')},
				patient_age={$this->parseValue($this->patientAge)},
				patient_gender={$this->parseValue($this->patientGender,'notNumber')},
				patient_status={$this->parseValue($this->patientStatus,'notNumber')},
				patient_wereda={$this->parseValue($this->patientWereda)},
				patient_kebele={$this->parseValue($this->patientKebele)},
				patient_address={$this->parseValue($this->patientAddress,'notNumber')},
				patient_session_status={$this->parseValue($this->patientSessionStatus,'notNumber')},
				patient_session_open_at={$this->parseValue($this->patientSessionOpenAt,'datetime')},
				patient_session_closed_at={$this->parseValue($this->patientSessionClosedAt,'datetime')}
            WHERE
                patient_id={$this->parseValue($patientId,'int')}
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            } else {
                $this->select($patientId);
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
     * Facility for updating a row of patient_table previously loaded.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating.
     * @category DML Helper
     * @return mixed MySQLi update result
     */
    public function updateCurrent()
    {
        if ($this->patientId != "") {
            return $this->update($this->patientId);
        } else {
            return false;
        }
    }

    /**
    * Facility for display a row for patient_table previously loaded.
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
    * Facility for upload a new row into patient_table.
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
