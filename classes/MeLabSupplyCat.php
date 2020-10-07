<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/classes/init.config.php';

/**
 * Class MeLabSupplyCat
 * @extends MySqlRecord
 * @filesource MeLabSupplyCat.php
*/

// namespace hulutera;

class MeLabSupplyCat extends MySqlRecord
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
     * Class attribute for mapping the primary key id of table lab_supply_cat
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
     * Class attribute for mapping table field name
     *
     * Comment for field name: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : YES
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var string $name
     */
    private $name;

    /**
     * Class attribute for mapping table field created_on
     *
     * Comment for field created_on: Not specified.<br>
     * Field information:
     *  - Data type: datetime
     *  - Null : YES
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var string $createdOn
     */
    private $createdOn;

    /**
     * Class attribute for storing the SQL DDL of table lab_supply_cat
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBsYWJfc3VwcGx5X2NhdGAgKAogIGBpZGAgaW50KDExKSBOT1QgTlVMTCBBVVRPX0lOQ1JFTUVOVCwKICBgbmFtZWAgdmFyY2hhcig0NSkgREVGQVVMVCBOVUxMLAogIGBjcmVhdGVkX29uYCBkYXRldGltZSBERUZBVUxUIE5VTEwsCiAgUFJJTUFSWSBLRVkgKGBpZGApLAogIFVOSVFVRSBLRVkgYGlkX1VOSVFVRWAgKGBpZGApCikgRU5HSU5FPUlubm9EQiBERUZBVUxUIENIQVJTRVQ9dXRmOA==";

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
     * setName Sets the class attribute name with a given value
     *
     * The attribute name maps the field name defined as varchar(45).<br>
     * Comment for field name: Not specified.<br>
     * @param string $name
     * @category Modifier
     */
    public function setName($name)
    {
        $this->name = (string)$name;
    }

    /**
     * setCreatedOn Sets the class attribute createdOn with a given value
     *
     * The attribute createdOn maps the field created_on defined as datetime.<br>
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
     * getName gets the class attribute name value
     *
     * The attribute name maps the field name defined as varchar(45).<br>
     * Comment for field name: Not specified.
     * @return string $name
     * @category Accessor of $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * getCreatedOn gets the class attribute createdOn value
     *
     * The attribute createdOn maps the field created_on defined as datetime.<br>
     * Comment for field created_on: Not specified.
     * @return string $createdOn
     * @category Accessor of $createdOn
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Gets DDL SQL code of the table lab_supply_cat
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
        return "lab_supply_cat";
    }

    /**
     * The MeLabSupplyCat constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $id is given.
     *  - with a fetched data row from the table lab_supply_cat having id=$id
     * @param int $id. If omitted an empty (not fetched) instance is created.
     * @return MeLabSupplyCat Object
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
     * Fetchs a table row of lab_supply_cat into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $id the primary key id value of table lab_supply_cat which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($id)
    {
        if($id == "*"){
            $sql = "SELECT * FROM lab_supply_cat";
        } else { //id
            $sql =  "SELECT * FROM lab_supply_cat WHERE id={$this->parseValue($id,'int')}";
        }

        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->id = (integer)$rowObject->id;
            @$this->name = $this->replaceAposBackSlash($rowObject->name);
            @$this->createdOn = empty($rowObject->created_on) ? null : date(FETCHED_DATETIME_FORMAT,strtotime($rowObject->created_on));
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;

    }

    /**
     * Deletes a specific row from the table lab_supply_cat
     * @param int $id the primary key id value of table lab_supply_cat which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($id)
    {
        $sql = "DELETE FROM lab_supply_cat WHERE id={$this->parseValue($id,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of lab_supply_cat
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
            INSERT INTO lab_supply_cat
            (name,created_on)
            VALUES(
			{$this->parseValue($this->name,'notNumber')},
			{$this->parseValue($this->createdOn,'datetime')})
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
     * Updates a specific row from the table lab_supply_cat with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $id the primary key id value of table lab_supply_cat which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($id)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                lab_supply_cat
            SET
				name={$this->parseValue($this->name,'notNumber')},
				created_on={$this->parseValue($this->createdOn,'datetime')}
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
     * Facility for updating a row of lab_supply_cat previously loaded.
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
    * Facility for display a row for lab_supply_cat previously loaded.
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
    * Facility for upload a new row into lab_supply_cat.
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
