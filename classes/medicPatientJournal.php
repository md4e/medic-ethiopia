<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/classes/init.config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/classes/medicPatientTable.php';

/**
 * Class medicPatientJournal
 * @extends MySqlRecord
 * @filesource medicPatientJournal.php
*/

// namespace hulutera;

class medicPatientJournal extends MySqlRecord
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
     * Class attribute for mapping the primary key id of table patient_journal
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
     * Class attribute for mapping table field journal_long
     *
     * Comment for field journal_long: Not specified.<br>
     * Field information:
     *  - Data type: longtext
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $journalLong
     */
    private $journalLong;

    /**
     * Class attribute for mapping table field journal_summary
     *
     * Comment for field journal_summary: Not specified.<br>
     * Field information:
     *  - Data type: longtext
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $journalSummary
     */
    private $journalSummary;

    /**
     * Class attribute for mapping table field journal_date
     *
     * Comment for field journal_date: Not specified.<br>
     * Field information:
     *  - Data type: datetime
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $journalDate
     */
    private $journalDate;

    /**
     * Class attribute for storing the SQL DDL of table patient_journal
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBwYXRpZW50X2pvdXJuYWxgICgKICBgaWRgIGludCgxMSkgTk9UIE5VTEwgQVVUT19JTkNSRU1FTlQsCiAgYHBhdGllbnRfY2FyZF9udW1iZXJgIHZhcmNoYXIoNDUpIE5PVCBOVUxMLAogIGBlbXBsb3llZV9pZGAgdmFyY2hhcig0NSkgTk9UIE5VTEwsCiAgYGpvdXJuYWxfbG9uZ2AgbG9uZ3RleHQgTk9UIE5VTEwsCiAgYGpvdXJuYWxfc3VtbWFyeWAgbG9uZ3RleHQgTk9UIE5VTEwsCiAgYGpvdXJuYWxfZGF0ZWAgZGF0ZXRpbWUgTk9UIE5VTEwsCiAgUFJJTUFSWSBLRVkgKGBpZGApLAogIFVOSVFVRSBLRVkgYGlkcGF0aWVudF9qb3VybmFsX1VOSVFVRWAgKGBpZGApLAogIEtFWSBgZmtfcGF0aWVudF9qb3VybmFsX3BhdGllbnRfdGFibGUxX2lkeGAgKGBwYXRpZW50X2NhcmRfbnVtYmVyYCksCiAgS0VZIGBma19wYXRpZW50X2pvdXJuYWxfZW1wbG95ZWVfdGFibGUxX2lkeGAgKGBlbXBsb3llZV9pZGApLAogIENPTlNUUkFJTlQgYGZrX3BhdGllbnRfam91cm5hbF9lbXBsb3llZV90YWJsZTFgIEZPUkVJR04gS0VZIChgZW1wbG95ZWVfaWRgKSBSRUZFUkVOQ0VTIGBlbXBsb3llZV90YWJsZWAgKGBlbXBsb3llZV9pZGApIE9OIERFTEVURSBOTyBBQ1RJT04gT04gVVBEQVRFIE5PIEFDVElPTiwKICBDT05TVFJBSU5UIGBma19wYXRpZW50X2pvdXJuYWxfcGF0aWVudF90YWJsZTFgIEZPUkVJR04gS0VZIChgcGF0aWVudF9jYXJkX251bWJlcmApIFJFRkVSRU5DRVMgYHBhdGllbnRfdGFibGVgIChgcGF0aWVudF9jYXJkX251bWJlcmApIE9OIERFTEVURSBOTyBBQ1RJT04gT04gVVBEQVRFIE5PIEFDVElPTgopIEVOR0lORT1Jbm5vREIgREVGQVVMVCBDSEFSU0VUPXV0Zjg=";

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
     * setJournalLong Sets the class attribute journalLong with a given value
     *
     * The attribute journalLong maps the field journal_long defined as longtext.<br>
     * Comment for field journal_long: Not specified.<br>
     * @param string $journalLong
     * @category Modifier
     */
    public function setJournalLong($journalLong)
    {
        $this->journalLong = (string)$journalLong;
    }

    /**
     * setJournalSummary Sets the class attribute journalSummary with a given value
     *
     * The attribute journalSummary maps the field journal_summary defined as longtext.<br>
     * Comment for field journal_summary: Not specified.<br>
     * @param string $journalSummary
     * @category Modifier
     */
    public function setJournalSummary($journalSummary)
    {
        $this->journalSummary = (string)$journalSummary;
    }

    /**
     * setJournalDate Sets the class attribute journalDate with a given value
     *
     * The attribute journalDate maps the field journal_date defined as datetime.<br>
     * Comment for field journal_date: Not specified.<br>
     * @param string $journalDate
     * @category Modifier
     */
    public function setJournalDate($journalDate)
    {
        $this->journalDate = (string)$journalDate;
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
     * getJournalLong gets the class attribute journalLong value
     *
     * The attribute journalLong maps the field journal_long defined as longtext.<br>
     * Comment for field journal_long: Not specified.
     * @return string $journalLong
     * @category Accessor of $journalLong
     */
    public function getJournalLong()
    {
        return $this->journalLong;
    }

    /**
     * getJournalSummary gets the class attribute journalSummary value
     *
     * The attribute journalSummary maps the field journal_summary defined as longtext.<br>
     * Comment for field journal_summary: Not specified.
     * @return string $journalSummary
     * @category Accessor of $journalSummary
     */
    public function getJournalSummary()
    {
        return $this->journalSummary;
    }

    /**
     * getJournalDate gets the class attribute journalDate value
     *
     * The attribute journalDate maps the field journal_date defined as datetime.<br>
     * Comment for field journal_date: Not specified.
     * @return string $journalDate
     * @category Accessor of $journalDate
     */
    public function getJournalDate()
    {
        return $this->journalDate;
    }

    /**
     * Gets DDL SQL code of the table patient_journal
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
        return "patient_journal";
    }

    /**
     * The medicPatientJournal constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $id is given.
     *  - with a fetched data row from the table patient_journal having id=$id
     * @param int $id. If omitted an empty (not fetched) instance is created.
     * @return medicPatientJournal Object
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
     * Fetchs a table row of patient_journal into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $id the primary key id value of table patient_journal which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($id)
    {
        if($id == "*"){
            $sql = "SELECT * FROM patient_journal";
        } else { //id
            $sql =  "SELECT * FROM patient_journal WHERE id={$this->parseValue($id,'int')}";
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
            @$this->journalLong = $this->replaceAposBackSlash($rowObject->journal_long);
            @$this->journalSummary = $this->replaceAposBackSlash($rowObject->journal_summary);
            @$this->journalDate = empty($rowObject->journal_date) ? null : date(FETCHED_DATETIME_FORMAT,strtotime($rowObject->journal_date));
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;

    }

    /**
     * Deletes a specific row from the table patient_journal
     * @param int $id the primary key id value of table patient_journal which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($id)
    {
        $sql = "DELETE FROM patient_journal WHERE id={$this->parseValue($id,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of patient_journal
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
            INSERT INTO patient_journal
            (patient_card_number,employee_id,journal_long,journal_summary,journal_date)
            VALUES(
			{$this->parseValue($this->patientCardNumber,'notNumber')},
			{$this->parseValue($this->employeeId,'notNumber')},
			{$this->parseValue($this->journalLong,'notNumber')},
			{$this->parseValue($this->journalSummary,'notNumber')},
			{$this->parseValue($this->journalDate,'datetime')})
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
     * Updates a specific row from the table patient_journal with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $id the primary key id value of table patient_journal which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($id)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                patient_journal
            SET 
				patient_card_number={$this->parseValue($this->patientCardNumber,'notNumber')},
				employee_id={$this->parseValue($this->employeeId,'notNumber')},
				journal_long={$this->parseValue($this->journalLong,'notNumber')},
				journal_summary={$this->parseValue($this->journalSummary,'notNumber')},
				journal_date={$this->parseValue($this->journalDate,'datetime')}
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
     * Facility for updating a row of patient_journal previously loaded.
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
    * Facility for display a row for patient_journal previously loaded.
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
    * Facility for upload a new row into patient_journal.
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
