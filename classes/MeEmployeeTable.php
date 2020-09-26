<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/classes/init.config.php';

/**
 * Class MeEmployeeTable
 * @extends MySqlRecord
 * @filesource MeEmployeeTable.php
*/

// namespace hulutera;

class MeEmployeeTable extends MySqlRecord
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
     * Class attribute for mapping the primary key id of table employee_table
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
     * Class attribute for mapping table field employee_id
     *
     * Comment for field employee_id: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: UNI
     *  - Default: 
     *  - Extra:  
     * @var string $employeeId
     */
    private $employeeId;

    /**
     * Class attribute for mapping table field first_name
     *
     * Comment for field first_name: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $firstName
     */
    private $firstName;

    /**
     * Class attribute for mapping table field last_name
     *
     * Comment for field last_name: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $lastName
     */
    private $lastName;

    /**
     * Class attribute for mapping table field age
     *
     * Comment for field age: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $age
     */
    private $age;

    /**
     * Class attribute for mapping table field gender
     *
     * Comment for field gender: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $gender
     */
    private $gender;

    /**
     * Class attribute for mapping table field email
     *
     * Comment for field email: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $email
     */
    private $email;

    /**
     * Class attribute for mapping table field phone
     *
     * Comment for field phone: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $phone
     */
    private $phone;

    /**
     * Class attribute for mapping table field job_titile
     *
     * Comment for field job_titile: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $jobTitile
     */
    private $jobTitile;

    /**
     * Class attribute for mapping table field signature
     *
     * Comment for field signature: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $signature
     */
    private $signature;

    /**
     * Class attribute for mapping table field registered_date
     *
     * Comment for field registered_date: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $registeredDate
     */
    private $registeredDate;

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
     * Class attribute for mapping table field role
     *
     * Comment for field role: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $role
     */
    private $role;

    /**
     * Class attribute for storing the SQL DDL of table employee_table
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBlbXBsb3llZV90YWJsZWAgKAogIGBpZGAgaW50KDExKSBOT1QgTlVMTCBBVVRPX0lOQ1JFTUVOVCwKICBgZW1wbG95ZWVfaWRgIHZhcmNoYXIoNDUpIE5PVCBOVUxMLAogIGBmaXJzdF9uYW1lYCB2YXJjaGFyKDQ1KSBOT1QgTlVMTCwKICBgbGFzdF9uYW1lYCB2YXJjaGFyKDQ1KSBOT1QgTlVMTCwKICBgYWdlYCBpbnQoMTEpIERFRkFVTFQgTlVMTCwKICBgZ2VuZGVyYCB2YXJjaGFyKDQ1KSBERUZBVUxUIE5VTEwsCiAgYGVtYWlsYCB2YXJjaGFyKDQ1KSBERUZBVUxUIE5VTEwsCiAgYHBob25lYCB2YXJjaGFyKDQ1KSBOT1QgTlVMTCwKICBgam9iX3RpdGlsZWAgdmFyY2hhcig0NSkgTk9UIE5VTEwsCiAgYHNpZ25hdHVyZWAgdmFyY2hhcig0NSkgTk9UIE5VTEwsCiAgYHJlZ2lzdGVyZWRfZGF0ZWAgdmFyY2hhcig0NSkgTk9UIE5VTEwsCiAgYHN0YXR1c2AgdmFyY2hhcig0NSkgTk9UIE5VTEwsCiAgYHJvbGVgIHZhcmNoYXIoNDUpIE5PVCBOVUxMLAogIFBSSU1BUlkgS0VZIChgaWRgKSwKICBVTklRVUUgS0VZIGBpZHVzZXJzX1VOSVFVRWAgKGBpZGApLAogIFVOSVFVRSBLRVkgYGVtcGxveWVlX2lkX1VOSVFVRWAgKGBlbXBsb3llZV9pZGApCikgRU5HSU5FPUlubm9EQiBBVVRPX0lOQ1JFTUVOVD0yIERFRkFVTFQgQ0hBUlNFVD11dGY4";

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
     * setFirstName Sets the class attribute firstName with a given value
     *
     * The attribute firstName maps the field first_name defined as varchar(45).<br>
     * Comment for field first_name: Not specified.<br>
     * @param string $firstName
     * @category Modifier
     */
    public function setFirstName($firstName)
    {
        $this->firstName = (string)$firstName;
    }

    /**
     * setLastName Sets the class attribute lastName with a given value
     *
     * The attribute lastName maps the field last_name defined as varchar(45).<br>
     * Comment for field last_name: Not specified.<br>
     * @param string $lastName
     * @category Modifier
     */
    public function setLastName($lastName)
    {
        $this->lastName = (string)$lastName;
    }

    /**
     * setAge Sets the class attribute age with a given value
     *
     * The attribute age maps the field age defined as int(11).<br>
     * Comment for field age: Not specified.<br>
     * @param int $age
     * @category Modifier
     */
    public function setAge($age)
    {
        $this->age = (int)$age;
    }

    /**
     * setGender Sets the class attribute gender with a given value
     *
     * The attribute gender maps the field gender defined as varchar(45).<br>
     * Comment for field gender: Not specified.<br>
     * @param string $gender
     * @category Modifier
     */
    public function setGender($gender)
    {
        $this->gender = (string)$gender;
    }

    /**
     * setEmail Sets the class attribute email with a given value
     *
     * The attribute email maps the field email defined as varchar(45).<br>
     * Comment for field email: Not specified.<br>
     * @param string $email
     * @category Modifier
     */
    public function setEmail($email)
    {
        $this->email = (string)$email;
    }

    /**
     * setPhone Sets the class attribute phone with a given value
     *
     * The attribute phone maps the field phone defined as varchar(45).<br>
     * Comment for field phone: Not specified.<br>
     * @param string $phone
     * @category Modifier
     */
    public function setPhone($phone)
    {
        $this->phone = (string)$phone;
    }

    /**
     * setJobTitile Sets the class attribute jobTitile with a given value
     *
     * The attribute jobTitile maps the field job_titile defined as varchar(45).<br>
     * Comment for field job_titile: Not specified.<br>
     * @param string $jobTitile
     * @category Modifier
     */
    public function setJobTitile($jobTitile)
    {
        $this->jobTitile = (string)$jobTitile;
    }

    /**
     * setSignature Sets the class attribute signature with a given value
     *
     * The attribute signature maps the field signature defined as varchar(45).<br>
     * Comment for field signature: Not specified.<br>
     * @param string $signature
     * @category Modifier
     */
    public function setSignature($signature)
    {
        $this->signature = (string)$signature;
    }

    /**
     * setRegisteredDate Sets the class attribute registeredDate with a given value
     *
     * The attribute registeredDate maps the field registered_date defined as varchar(45).<br>
     * Comment for field registered_date: Not specified.<br>
     * @param string $registeredDate
     * @category Modifier
     */
    public function setRegisteredDate($registeredDate)
    {
        $this->registeredDate = (string)$registeredDate;
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
     * setRole Sets the class attribute role with a given value
     *
     * The attribute role maps the field role defined as varchar(45).<br>
     * Comment for field role: Not specified.<br>
     * @param string $role
     * @category Modifier
     */
    public function setRole($role)
    {
        $this->role = (string)$role;
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
     * getFirstName gets the class attribute firstName value
     *
     * The attribute firstName maps the field first_name defined as varchar(45).<br>
     * Comment for field first_name: Not specified.
     * @return string $firstName
     * @category Accessor of $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * getLastName gets the class attribute lastName value
     *
     * The attribute lastName maps the field last_name defined as varchar(45).<br>
     * Comment for field last_name: Not specified.
     * @return string $lastName
     * @category Accessor of $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * getAge gets the class attribute age value
     *
     * The attribute age maps the field age defined as int(11).<br>
     * Comment for field age: Not specified.
     * @return int $age
     * @category Accessor of $age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * getGender gets the class attribute gender value
     *
     * The attribute gender maps the field gender defined as varchar(45).<br>
     * Comment for field gender: Not specified.
     * @return string $gender
     * @category Accessor of $gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * getEmail gets the class attribute email value
     *
     * The attribute email maps the field email defined as varchar(45).<br>
     * Comment for field email: Not specified.
     * @return string $email
     * @category Accessor of $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * getPhone gets the class attribute phone value
     *
     * The attribute phone maps the field phone defined as varchar(45).<br>
     * Comment for field phone: Not specified.
     * @return string $phone
     * @category Accessor of $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * getJobTitile gets the class attribute jobTitile value
     *
     * The attribute jobTitile maps the field job_titile defined as varchar(45).<br>
     * Comment for field job_titile: Not specified.
     * @return string $jobTitile
     * @category Accessor of $jobTitile
     */
    public function getJobTitile()
    {
        return $this->jobTitile;
    }

    /**
     * getSignature gets the class attribute signature value
     *
     * The attribute signature maps the field signature defined as varchar(45).<br>
     * Comment for field signature: Not specified.
     * @return string $signature
     * @category Accessor of $signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * getRegisteredDate gets the class attribute registeredDate value
     *
     * The attribute registeredDate maps the field registered_date defined as varchar(45).<br>
     * Comment for field registered_date: Not specified.
     * @return string $registeredDate
     * @category Accessor of $registeredDate
     */
    public function getRegisteredDate()
    {
        return $this->registeredDate;
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
     * getRole gets the class attribute role value
     *
     * The attribute role maps the field role defined as varchar(45).<br>
     * Comment for field role: Not specified.
     * @return string $role
     * @category Accessor of $role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Gets DDL SQL code of the table employee_table
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
        return "employee_table";
    }

    /**
     * The MeEmployeeTable constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $id is given.
     *  - with a fetched data row from the table employee_table having id=$id
     * @param int $id. If omitted an empty (not fetched) instance is created.
     * @return MeEmployeeTable Object
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
     * Fetchs a table row of employee_table into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $id the primary key id value of table employee_table which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($id)
    {
        if($id == "*"){
            $sql = "SELECT * FROM employee_table";
        } else { //id
            $sql =  "SELECT * FROM employee_table WHERE id={$this->parseValue($id,'int')}";
        }

        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->id = (integer)$rowObject->id;
            @$this->employeeId = $this->replaceAposBackSlash($rowObject->employee_id);
            @$this->firstName = $this->replaceAposBackSlash($rowObject->first_name);
            @$this->lastName = $this->replaceAposBackSlash($rowObject->last_name);
            @$this->age = (integer)$rowObject->age;
            @$this->gender = $this->replaceAposBackSlash($rowObject->gender);
            @$this->email = $this->replaceAposBackSlash($rowObject->email);
            @$this->phone = $this->replaceAposBackSlash($rowObject->phone);
            @$this->jobTitile = $this->replaceAposBackSlash($rowObject->job_titile);
            @$this->signature = $this->replaceAposBackSlash($rowObject->signature);
            @$this->registeredDate = $this->replaceAposBackSlash($rowObject->registered_date);
            @$this->status = $this->replaceAposBackSlash($rowObject->status);
            @$this->role = $this->replaceAposBackSlash($rowObject->role);
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;

    }

    /**
     * Deletes a specific row from the table employee_table
     * @param int $id the primary key id value of table employee_table which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($id)
    {
        $sql = "DELETE FROM employee_table WHERE id={$this->parseValue($id,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of employee_table
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
            INSERT INTO employee_table
            (employee_id,first_name,last_name,age,gender,email,phone,job_titile,signature,registered_date,status,role)
            VALUES(
			{$this->parseValue($this->employeeId,'notNumber')},
			{$this->parseValue($this->firstName,'notNumber')},
			{$this->parseValue($this->lastName,'notNumber')},
			{$this->parseValue($this->age)},
			{$this->parseValue($this->gender,'notNumber')},
			{$this->parseValue($this->email,'notNumber')},
			{$this->parseValue($this->phone,'notNumber')},
			{$this->parseValue($this->jobTitile,'notNumber')},
			{$this->parseValue($this->signature,'notNumber')},
			{$this->parseValue($this->registeredDate,'notNumber')},
			{$this->parseValue($this->status,'notNumber')},
			{$this->parseValue($this->role,'notNumber')})
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
     * Updates a specific row from the table employee_table with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $id the primary key id value of table employee_table which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($id)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                employee_table
            SET 
				employee_id={$this->parseValue($this->employeeId,'notNumber')},
				first_name={$this->parseValue($this->firstName,'notNumber')},
				last_name={$this->parseValue($this->lastName,'notNumber')},
				age={$this->parseValue($this->age)},
				gender={$this->parseValue($this->gender,'notNumber')},
				email={$this->parseValue($this->email,'notNumber')},
				phone={$this->parseValue($this->phone,'notNumber')},
				job_titile={$this->parseValue($this->jobTitile,'notNumber')},
				signature={$this->parseValue($this->signature,'notNumber')},
				registered_date={$this->parseValue($this->registeredDate,'notNumber')},
				status={$this->parseValue($this->status,'notNumber')},
				role={$this->parseValue($this->role,'notNumber')}
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
     * Facility for updating a row of employee_table previously loaded.
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
    * Facility for display a row for employee_table previously loaded.
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
    * Facility for upload a new row into employee_table.
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
