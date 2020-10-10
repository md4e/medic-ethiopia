<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/classes/init.config.php';

/**
 * Class MeDrugListInhouse
 * @extends MySqlRecord
 * @filesource MeDrugListInhouse.php
*/

// namespace hulutera;

class MeDrugListInhouse extends MySqlRecord
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
     * Class attribute for mapping the primary key id of table drug_list_inhouse
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
     * Class attribute for mapping table field emplyee_id
     *
     * Comment for field emplyee_id: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: MUL
     *  - Default:
     *  - Extra:
     * @var int $emplyeeId
     */
    private $emplyeeId;

    /**
     * Class attribute for mapping table field name
     *
     * Comment for field name: Not specified.<br>
     * Field information:
     *  - Data type: longtext
     *  - Null : YES
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var string $name
     */
    private $name;

    /**
     * Class attribute for mapping table field type
     *
     * Comment for field type: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : YES
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var string $type
     */
    private $type;

    /**
     * Class attribute for mapping table field quantity
     *
     * Comment for field quantity: Not specified.<br>
     * Field information:
     *  - Data type: int(25)
     *  - Null : NO
     *  - DB Index:
     *  - Default: 100
     *  - Extra:
     * @var int $quantity
     */
    private $quantity;

    /**
     * Class attribute for mapping table field status
     *
     * Comment for field status: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : NO
     *  - DB Index:
     *  - Default: limited
     *  - Extra:
     * @var string $status
     */
    private $status;

    /**
     * Class attribute for mapping table field created_on
     *
     * Comment for field created_on: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : YES
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var string $createdOn
     */
    private $createdOn;

    /**
     * Class attribute for storing the SQL DDL of table drug_list_inhouse
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBkcnVnX2xpc3RfaW5ob3VzZWAgKAogIGBpZGAgaW50KDExKSBOT1QgTlVMTCBBVVRPX0lOQ1JFTUVOVCwKICBgZW1wbHllZV9pZGAgaW50KDExKSBOT1QgTlVMTCwKICBgbmFtZWAgbG9uZ3RleHQsCiAgYHR5cGVgIHZhcmNoYXIoNDUpIERFRkFVTFQgTlVMTCwKICBgcXVhbnRpdHlgIGludCgyNSkgTk9UIE5VTEwgREVGQVVMVCAnMTAwJywKICBgc3RhdHVzYCB2YXJjaGFyKDQ1KSBOT1QgTlVMTCBERUZBVUxUICdsaW1pdGVkJywKICBgY3JlYXRlZF9vbmAgdmFyY2hhcig0NSkgREVGQVVMVCBOVUxMLAogIFBSSU1BUlkgS0VZIChgaWRgKSwKICBVTklRVUUgS0VZIGBpZF9VTklRVUVgIChgaWRgKSwKICBLRVkgYGZrX2RydWdfbGlzdF9pbmhvdXNlX2VtcGxveWVlX3RhYmxlMV9pZHhgIChgZW1wbHllZV9pZGApLAogIENPTlNUUkFJTlQgYGZrX2RydWdfbGlzdF9pbmhvdXNlX2VtcGxveWVlX3RhYmxlMWAgRk9SRUlHTiBLRVkgKGBlbXBseWVlX2lkYCkgUkVGRVJFTkNFUyBgZW1wbG95ZWVfdGFibGVgIChgaWRgKSBPTiBERUxFVEUgTk8gQUNUSU9OIE9OIFVQREFURSBOTyBBQ1RJT04KKSBFTkdJTkU9SW5ub0RCIEFVVE9fSU5DUkVNRU5UPTMzMSBERUZBVUxUIENIQVJTRVQ9dXRmOA==";

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
     * setEmplyeeId Sets the class attribute emplyeeId with a given value
     *
     * The attribute emplyeeId maps the field emplyee_id defined as int(11).<br>
     * Comment for field emplyee_id: Not specified.<br>
     * @param int $emplyeeId
     * @category Modifier
     */
    public function setEmplyeeId($emplyeeId)
    {
        $this->emplyeeId = (int)$emplyeeId;
    }

    /**
     * setName Sets the class attribute name with a given value
     *
     * The attribute name maps the field name defined as longtext.<br>
     * Comment for field name: Not specified.<br>
     * @param string $name
     * @category Modifier
     */
    public function setName($name)
    {
        $this->name = (string)$name;
    }

    /**
     * setType Sets the class attribute type with a given value
     *
     * The attribute type maps the field type defined as varchar(45).<br>
     * Comment for field type: Not specified.<br>
     * @param string $type
     * @category Modifier
     */
    public function setType($type)
    {
        $this->type = (string)$type;
    }

    /**
     * setQuantity Sets the class attribute quantity with a given value
     *
     * The attribute quantity maps the field quantity defined as int(25).<br>
     * Comment for field quantity: Not specified.<br>
     * @param int $quantity
     * @category Modifier
     */
    public function setQuantity($quantity)
    {
        $this->quantity = (int)$quantity;
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
     * setCreatedOn Sets the class attribute createdOn with a given value
     *
     * The attribute createdOn maps the field created_on defined as varchar(45).<br>
     * Comment for field created_on: Not specified.<br>
     * @param string $createdOn
     * @category Modifier
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = (string)$createdOn;
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
     * getEmplyeeId gets the class attribute emplyeeId value
     *
     * The attribute emplyeeId maps the field emplyee_id defined as int(11).<br>
     * Comment for field emplyee_id: Not specified.
     * @return int $emplyeeId
     * @category Accessor of $emplyeeId
     */
    public function getEmplyeeId()
    {
        return $this->emplyeeId;
    }

    /**
     * getName gets the class attribute name value
     *
     * The attribute name maps the field name defined as longtext.<br>
     * Comment for field name: Not specified.
     * @return string $name
     * @category Accessor of $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * getType gets the class attribute type value
     *
     * The attribute type maps the field type defined as varchar(45).<br>
     * Comment for field type: Not specified.
     * @return string $type
     * @category Accessor of $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * getQuantity gets the class attribute quantity value
     *
     * The attribute quantity maps the field quantity defined as int(25).<br>
     * Comment for field quantity: Not specified.
     * @return int $quantity
     * @category Accessor of $quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
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
     * getCreatedOn gets the class attribute createdOn value
     *
     * The attribute createdOn maps the field created_on defined as varchar(45).<br>
     * Comment for field created_on: Not specified.
     * @return string $createdOn
     * @category Accessor of $createdOn
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Gets DDL SQL code of the table drug_list_inhouse
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
        return "drug_list_inhouse";
    }

    /**
     * The MeDrugListInhouse constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $id is given.
     *  - with a fetched data row from the table drug_list_inhouse having id=$id
     * @param int $id. If omitted an empty (not fetched) instance is created.
     * @return MeDrugListInhouse Object
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
     * Fetchs a table row of drug_list_inhouse into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $id the primary key id value of table drug_list_inhouse which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($id)
    {
        if($id == "*"){
            $sql = "SELECT * FROM drug_list_inhouse";
        } else { //id
            $sql =  "SELECT * FROM drug_list_inhouse WHERE id={$this->parseValue($id,'int')}";
        }

        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->id = (integer)$rowObject->id;
            @$this->emplyeeId = (integer)$rowObject->emplyee_id;
            @$this->name = $this->replaceAposBackSlash($rowObject->name);
            @$this->type = $this->replaceAposBackSlash($rowObject->type);
            @$this->quantity = (integer)$rowObject->quantity;
            @$this->status = $this->replaceAposBackSlash($rowObject->status);
            @$this->createdOn = date("d/m/Y H:i:s");
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;

    }

    /**
     * Deletes a specific row from the table drug_list_inhouse
     * @param int $id the primary key id value of table drug_list_inhouse which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($id)
    {
        $sql = "DELETE FROM drug_list_inhouse WHERE id={$this->parseValue($id,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of drug_list_inhouse
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
            INSERT INTO drug_list_inhouse
            (emplyee_id,name,type,quantity,status,created_on)
            VALUES(
			{$this->parseValue($this->emplyeeId)},
			{$this->parseValue($this->name,'notNumber')},
			{$this->parseValue($this->type,'notNumber')},
			{$this->parseValue($this->quantity)},
			{$this->parseValue($this->status,'notNumber')},
			{$this->parseValue($this->createdOn,'notNumber')})
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
     * Updates a specific row from the table drug_list_inhouse with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $id the primary key id value of table drug_list_inhouse which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($id)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                drug_list_inhouse
            SET
				emplyee_id={$this->parseValue($this->emplyeeId)},
				name={$this->parseValue($this->name,'notNumber')},
				type={$this->parseValue($this->type,'notNumber')},
				quantity={$this->parseValue($this->quantity)},
				status={$this->parseValue($this->status,'notNumber')},
				created_on={$this->parseValue($this->createdOn,'notNumber')}
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
     * Facility for updating a row of drug_list_inhouse previously loaded.
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
    * Facility for display a row for drug_list_inhouse previously loaded.
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
    * Facility for upload a new row into drug_list_inhouse.
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
