<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/classes/init.config.php';

/**
 * Class MeLabSupplyList
 * @extends MySqlRecord
 * @filesource MeLabSupplyList.php
*/

// namespace hulutera;

class MeLabSupplyList extends MySqlRecord
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
     * Class attribute for mapping the primary key id of table lab_supply_list
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
     *  - DB Index: MUL
     *  - Default:
     *  - Extra:
     * @var string $employeeId
     */
    private $employeeId;

    /**
     * Class attribute for mapping table field catergory_id
     *
     * Comment for field catergory_id: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: MUL
     *  - Default:
     *  - Extra:
     * @var int $catergoryId
     */
    private $catergoryId;

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
     * Class attribute for mapping table field unit
     *
     * Comment for field unit: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : YES
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var string $unit
     */
    private $unit;

    /**
     * Class attribute for mapping table field current_amount
     *
     * Comment for field current_amount: Not specified.<br>
     * Field information:
     *  - Data type: float
     *  - Null : YES
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var float $currentAmount
     */
    private $currentAmount;

    /**
     * Class attribute for mapping table field max_stock
     *
     * Comment for field max_stock: Not specified.<br>
     * Field information:
     *  - Data type: float
     *  - Null : YES
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var float $maxStock
     */
    private $maxStock;

    /**
     * Class attribute for mapping table field min_stock
     *
     * Comment for field min_stock: Not specified.<br>
     * Field information:
     *  - Data type: float
     *  - Null : YES
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var float $minStock
     */
    private $minStock;

    /**
     * Class attribute for mapping table field q4_consumption_b
     *
     * Comment for field q4_consumption_b: Not specified.<br>
     * Field information:
     *  - Data type: float
     *  - Null : YES
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var float $q4ConsumptionB
     */
    private $q4ConsumptionB;

    /**
     * Class attribute for mapping table field annual_consumption_c
     *
     * Comment for field annual_consumption_c: Not specified.<br>
     * Field information:
     *  - Data type: float
     *  - Null : YES
     *  - DB Index:
     *  - Default:
     *  - Extra:
     * @var float $annualConsumptionC
     */
    private $annualConsumptionC;

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
     * Class attribute for storing the SQL DDL of table lab_supply_list
     * @var string base64 encoded string for DDL
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBsYWJfc3VwcGx5X2xpc3RgICgKICBgaWRgIGludCgxMSkgTk9UIE5VTEwgQVVUT19JTkNSRU1FTlQsCiAgYGVtcGxveWVlX2lkYCB2YXJjaGFyKDQ1KSBOT1QgTlVMTCwKICBgY2F0ZXJnb3J5X2lkYCBpbnQoMTEpIE5PVCBOVUxMLAogIGBuYW1lYCB2YXJjaGFyKDQ1KSBERUZBVUxUIE5VTEwsCiAgYHVuaXRgIHZhcmNoYXIoNDUpIERFRkFVTFQgTlVMTCwKICBgY3VycmVudF9hbW91bnRgIGZsb2F0IERFRkFVTFQgTlVMTCwKICBgbWF4X3N0b2NrYCBmbG9hdCBERUZBVUxUIE5VTEwsCiAgYG1pbl9zdG9ja2AgZmxvYXQgREVGQVVMVCBOVUxMLAogIGBxNF9jb25zdW1wdGlvbl9iYCBmbG9hdCBERUZBVUxUIE5VTEwsCiAgYGFubnVhbF9jb25zdW1wdGlvbl9jYCBmbG9hdCBERUZBVUxUIE5VTEwsCiAgYGNyZWF0ZWRfb25gIGRhdGV0aW1lIERFRkFVTFQgTlVMTCwKICBQUklNQVJZIEtFWSAoYGlkYCksCiAgVU5JUVVFIEtFWSBgaWRfVU5JUVVFYCAoYGlkYCksCiAgS0VZIGBma19sYWJfc3VwcGx5X2xpc3RfZW1wbG95ZWVfdGFibGUxX2lkeGAgKGBlbXBsb3llZV9pZGApLAogIEtFWSBgZmtfbGFiX3N1cHBseV9saXN0X2xhYl9zdXBwbHlfY2F0ZXJnb3J5MV9pZHhgIChgY2F0ZXJnb3J5X2lkYCksCiAgQ09OU1RSQUlOVCBgZmtfbGFiX3N1cHBseV9saXN0X2VtcGxveWVlX3RhYmxlMWAgRk9SRUlHTiBLRVkgKGBlbXBsb3llZV9pZGApIFJFRkVSRU5DRVMgYGVtcGxveWVlX3RhYmxlYCAoYGVtcGxveWVlX2lkYCkgT04gREVMRVRFIE5PIEFDVElPTiBPTiBVUERBVEUgTk8gQUNUSU9OLAogIENPTlNUUkFJTlQgYGZrX2xhYl9zdXBwbHlfbGlzdF9sYWJfc3VwcGx5X2NhdGVyZ29yeTFgIEZPUkVJR04gS0VZIChgY2F0ZXJnb3J5X2lkYCkgUkVGRVJFTkNFUyBgbGFiX3N1cHBseV9jYXRgIChgaWRgKSBPTiBERUxFVEUgTk8gQUNUSU9OIE9OIFVQREFURSBOTyBBQ1RJT04KKSBFTkdJTkU9SW5ub0RCIERFRkFVTFQgQ0hBUlNFVD11dGY4";

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
     * setCatergoryId Sets the class attribute catergoryId with a given value
     *
     * The attribute catergoryId maps the field catergory_id defined as int(11).<br>
     * Comment for field catergory_id: Not specified.<br>
     * @param int $catergoryId
     * @category Modifier
     */
    public function setCatergoryId($catergoryId)
    {
        $this->catergoryId = (int)$catergoryId;
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
     * setUnit Sets the class attribute unit with a given value
     *
     * The attribute unit maps the field unit defined as varchar(45).<br>
     * Comment for field unit: Not specified.<br>
     * @param string $unit
     * @category Modifier
     */
    public function setUnit($unit)
    {
        $this->unit = (string)$unit;
    }

    /**
     * setCurrentAmount Sets the class attribute currentAmount with a given value
     *
     * The attribute currentAmount maps the field current_amount defined as float.<br>
     * Comment for field current_amount: Not specified.<br>
     * @param float $currentAmount
     * @category Modifier
     */
    public function setCurrentAmount($currentAmount)
    {
        $this->currentAmount = (float)$currentAmount;
    }

    /**
     * setMaxStock Sets the class attribute maxStock with a given value
     *
     * The attribute maxStock maps the field max_stock defined as float.<br>
     * Comment for field max_stock: Not specified.<br>
     * @param float $maxStock
     * @category Modifier
     */
    public function setMaxStock($maxStock)
    {
        $this->maxStock = (float)$maxStock;
    }

    /**
     * setMinStock Sets the class attribute minStock with a given value
     *
     * The attribute minStock maps the field min_stock defined as float.<br>
     * Comment for field min_stock: Not specified.<br>
     * @param float $minStock
     * @category Modifier
     */
    public function setMinStock($minStock)
    {
        $this->minStock = (float)$minStock;
    }

    /**
     * setQ4ConsumptionB Sets the class attribute q4ConsumptionB with a given value
     *
     * The attribute q4ConsumptionB maps the field q4_consumption_b defined as float.<br>
     * Comment for field q4_consumption_b: Not specified.<br>
     * @param float $q4ConsumptionB
     * @category Modifier
     */
    public function setQ4ConsumptionB($q4ConsumptionB)
    {
        $this->q4ConsumptionB = (float)$q4ConsumptionB;
    }

    /**
     * setAnnualConsumptionC Sets the class attribute annualConsumptionC with a given value
     *
     * The attribute annualConsumptionC maps the field annual_consumption_c defined as float.<br>
     * Comment for field annual_consumption_c: Not specified.<br>
     * @param float $annualConsumptionC
     * @category Modifier
     */
    public function setAnnualConsumptionC($annualConsumptionC)
    {
        $this->annualConsumptionC = (float)$annualConsumptionC;
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
     * getCatergoryId gets the class attribute catergoryId value
     *
     * The attribute catergoryId maps the field catergory_id defined as int(11).<br>
     * Comment for field catergory_id: Not specified.
     * @return int $catergoryId
     * @category Accessor of $catergoryId
     */
    public function getCatergoryId()
    {
        return $this->catergoryId;
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
     * getUnit gets the class attribute unit value
     *
     * The attribute unit maps the field unit defined as varchar(45).<br>
     * Comment for field unit: Not specified.
     * @return string $unit
     * @category Accessor of $unit
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * getCurrentAmount gets the class attribute currentAmount value
     *
     * The attribute currentAmount maps the field current_amount defined as float.<br>
     * Comment for field current_amount: Not specified.
     * @return float $currentAmount
     * @category Accessor of $currentAmount
     */
    public function getCurrentAmount()
    {
        return $this->currentAmount;
    }

    /**
     * getMaxStock gets the class attribute maxStock value
     *
     * The attribute maxStock maps the field max_stock defined as float.<br>
     * Comment for field max_stock: Not specified.
     * @return float $maxStock
     * @category Accessor of $maxStock
     */
    public function getMaxStock()
    {
        return $this->maxStock;
    }

    /**
     * getMinStock gets the class attribute minStock value
     *
     * The attribute minStock maps the field min_stock defined as float.<br>
     * Comment for field min_stock: Not specified.
     * @return float $minStock
     * @category Accessor of $minStock
     */
    public function getMinStock()
    {
        return $this->minStock;
    }

    /**
     * getQ4ConsumptionB gets the class attribute q4ConsumptionB value
     *
     * The attribute q4ConsumptionB maps the field q4_consumption_b defined as float.<br>
     * Comment for field q4_consumption_b: Not specified.
     * @return float $q4ConsumptionB
     * @category Accessor of $q4ConsumptionB
     */
    public function getQ4ConsumptionB()
    {
        return $this->q4ConsumptionB;
    }

    /**
     * getAnnualConsumptionC gets the class attribute annualConsumptionC value
     *
     * The attribute annualConsumptionC maps the field annual_consumption_c defined as float.<br>
     * Comment for field annual_consumption_c: Not specified.
     * @return float $annualConsumptionC
     * @category Accessor of $annualConsumptionC
     */
    public function getAnnualConsumptionC()
    {
        return $this->annualConsumptionC;
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
     * Gets DDL SQL code of the table lab_supply_list
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
        return "lab_supply_list";
    }

    /**
     * The MeLabSupplyList constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $id is given.
     *  - with a fetched data row from the table lab_supply_list having id=$id
     * @param int $id. If omitted an empty (not fetched) instance is created.
     * @return MeLabSupplyList Object
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
     * Fetchs a table row of lab_supply_list into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $id the primary key id value of table lab_supply_list which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($id)
    {
        if($id == "*"){
            $sql = "SELECT * FROM lab_supply_list";
        } else { //id
            $sql =  "SELECT * FROM lab_supply_list WHERE id={$this->parseValue($id,'int')}";
        }

        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->id = (integer)$rowObject->id;
            @$this->employeeId = $this->replaceAposBackSlash($rowObject->employee_id);
            @$this->catergoryId = (integer)$rowObject->catergory_id;
            @$this->name = $this->replaceAposBackSlash($rowObject->name);
            @$this->unit = $this->replaceAposBackSlash($rowObject->unit);
            @$this->currentAmount = (float)$rowObject->current_amount;
            @$this->maxStock = (float)$rowObject->max_stock;
            @$this->minStock = (float)$rowObject->min_stock;
            @$this->q4ConsumptionB = (float)$rowObject->q4_consumption_b;
            @$this->annualConsumptionC = (float)$rowObject->annual_consumption_c;
            @$this->createdOn = empty($rowObject->created_on) ? null : date(FETCHED_DATETIME_FORMAT,strtotime($rowObject->created_on));
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;

    }

    /**
     * Deletes a specific row from the table lab_supply_list
     * @param int $id the primary key id value of table lab_supply_list which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($id)
    {
        $sql = "DELETE FROM lab_supply_list WHERE id={$this->parseValue($id,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of lab_supply_list
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
            INSERT INTO lab_supply_list
            (employee_id,catergory_id,name,unit,current_amount,max_stock,min_stock,q4_consumption_b,annual_consumption_c,created_on)
            VALUES(
			{$this->parseValue($this->employeeId,'notNumber')},
			{$this->parseValue($this->catergoryId)},
			{$this->parseValue($this->name,'notNumber')},
			{$this->parseValue($this->unit,'notNumber')},
			{$this->parseValue($this->currentAmount)},
			{$this->parseValue($this->maxStock)},
			{$this->parseValue($this->minStock)},
			{$this->parseValue($this->q4ConsumptionB)},
			{$this->parseValue($this->annualConsumptionC)},
			{$this->parseValue($this->createdOn,'datetime')})
SQL;

        var_dump($sql);
            //exit();
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
     * Updates a specific row from the table lab_supply_list with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $id the primary key id value of table lab_supply_list which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($id)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                lab_supply_list
            SET
				employee_id={$this->parseValue($this->employeeId,'notNumber')},
				catergory_id={$this->parseValue($this->catergoryId)},
				name={$this->parseValue($this->name,'notNumber')},
				unit={$this->parseValue($this->unit,'notNumber')},
				current_amount={$this->parseValue($this->currentAmount)},
				max_stock={$this->parseValue($this->maxStock)},
				min_stock={$this->parseValue($this->minStock)},
				q4_consumption_b={$this->parseValue($this->q4ConsumptionB)},
				annual_consumption_c={$this->parseValue($this->annualConsumptionC)},
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
     * Facility for updating a row of lab_supply_list previously loaded.
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
    * Facility for display a row for lab_supply_list previously loaded.
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
    * Facility for upload a new row into lab_supply_list.
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
