<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Autogenerated CRUD-like access library for Vtiger Database Tables
 *
 * GNU General Public Licence v3
 * Copyright (C) 2012 Carlos Paparoni
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @category   VtigerPhplistIntegration
 * @package    VtigerDBCRUDLibrary
 * @author     Carlos Paparoni <carlos.paparoni@gmail.com>
 * @copyright  (C) 2012 Carlos Paparoni
 * @license    http://www.gnu.org/licenses/gpl.html GNU General Public Licence v3
 * @version    1.0
 * @link       http://d1m1.heliohost.org/code/php/vtiger-access-library
 */


/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class VTigerWebFormsField extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='VTigerWebFormsField';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='vtiger_webforms_field';
	const SQL_INSERT='INSERT INTO `vtiger_webforms_field` (`id`,`webformid`,`fieldname`,`neutralizedfield`,`defaultvalue`,`required`) VALUES (?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `vtiger_webforms_field` (`webformid`,`fieldname`,`neutralizedfield`,`defaultvalue`,`required`) VALUES (?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `vtiger_webforms_field` SET `id`=?,`webformid`=?,`fieldname`=?,`neutralizedfield`=?,`defaultvalue`=?,`required`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `vtiger_webforms_field` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `vtiger_webforms_field` WHERE `id`=?';
	const FIELD_ID=-1700809667;
	const FIELD_WEBFORMID=-1864932399;
	const FIELD_FIELDNAME=2325795;
	const FIELD_NEUTRALIZEDFIELD=-1623818459;
	const FIELD_DEFAULTVALUE=-246144910;
	const FIELD_REQUIRED=120287553;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_WEBFORMID=>'webformid',
		self::FIELD_FIELDNAME=>'fieldname',
		self::FIELD_NEUTRALIZEDFIELD=>'neutralizedfield',
		self::FIELD_DEFAULTVALUE=>'defaultvalue',
		self::FIELD_REQUIRED=>'required');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_WEBFORMID=>'webFormId',
		self::FIELD_FIELDNAME=>'fieldName',
		self::FIELD_NEUTRALIZEDFIELD=>'neutralizedField',
		self::FIELD_DEFAULTVALUE=>'defaultValue',
		self::FIELD_REQUIRED=>'required');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_WEBFORMID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_FIELDNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_NEUTRALIZEDFIELD=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DEFAULTVALUE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_REQUIRED=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_WEBFORMID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_FIELDNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,false),
		self::FIELD_NEUTRALIZEDFIELD=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,false),
		self::FIELD_DEFAULTVALUE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,200,0,true),
		self::FIELD_REQUIRED=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_WEBFORMID=>0,
		self::FIELD_FIELDNAME=>'',
		self::FIELD_NEUTRALIZEDFIELD=>'',
		self::FIELD_DEFAULTVALUE=>null,
		self::FIELD_REQUIRED=>0);
	private $id;
	private $webFormId;
	private $fieldName;
	private $neutralizedField;
	private $defaultValue;
	private $required;

	/**
	 * set value for id 
	 *
	 * type:INT,size:10,default:null,primary,index,autoincrement
	 *
	 * @param mixed $id
	 * @return VTigerWebFormsField
	 */
	public function &setId($id) {
		$this->notifyChanged(self::FIELD_ID,$this->id,$id);
		$this->id=$id;
		return $this;
	}

	/**
	 * get value for id 
	 *
	 * type:INT,size:10,default:null,primary,index,autoincrement
	 *
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * set value for webformid 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @param mixed $webFormId
	 * @return VTigerWebFormsField
	 */
	public function &setWebFormId($webFormId) {
		$this->notifyChanged(self::FIELD_WEBFORMID,$this->webFormId,$webFormId);
		$this->webFormId=$webFormId;
		return $this;
	}

	/**
	 * get value for webformid 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getWebFormId() {
		return $this->webFormId;
	}

	/**
	 * set value for fieldname 
	 *
	 * type:VARCHAR,size:50,default:null,index
	 *
	 * @param mixed $fieldName
	 * @return VTigerWebFormsField
	 */
	public function &setFieldName($fieldName) {
		$this->notifyChanged(self::FIELD_FIELDNAME,$this->fieldName,$fieldName);
		$this->fieldName=$fieldName;
		return $this;
	}

	/**
	 * get value for fieldname 
	 *
	 * type:VARCHAR,size:50,default:null,index
	 *
	 * @return mixed
	 */
	public function getFieldName() {
		return $this->fieldName;
	}

	/**
	 * set value for neutralizedfield 
	 *
	 * type:VARCHAR,size:50,default:null
	 *
	 * @param mixed $neutralizedField
	 * @return VTigerWebFormsField
	 */
	public function &setNeutralizedField($neutralizedField) {
		$this->notifyChanged(self::FIELD_NEUTRALIZEDFIELD,$this->neutralizedField,$neutralizedField);
		$this->neutralizedField=$neutralizedField;
		return $this;
	}

	/**
	 * get value for neutralizedfield 
	 *
	 * type:VARCHAR,size:50,default:null
	 *
	 * @return mixed
	 */
	public function getNeutralizedField() {
		return $this->neutralizedField;
	}

	/**
	 * set value for defaultvalue 
	 *
	 * type:VARCHAR,size:200,default:null,nullable
	 *
	 * @param mixed $defaultValue
	 * @return VTigerWebFormsField
	 */
	public function &setDefaultValue($defaultValue) {
		$this->notifyChanged(self::FIELD_DEFAULTVALUE,$this->defaultValue,$defaultValue);
		$this->defaultValue=$defaultValue;
		return $this;
	}

	/**
	 * get value for defaultvalue 
	 *
	 * type:VARCHAR,size:200,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getDefaultValue() {
		return $this->defaultValue;
	}

	/**
	 * set value for required 
	 *
	 * type:INT,size:10,default:0
	 *
	 * @param mixed $required
	 * @return VTigerWebFormsField
	 */
	public function &setRequired($required) {
		$this->notifyChanged(self::FIELD_REQUIRED,$this->required,$required);
		$this->required=$required;
		return $this;
	}

	/**
	 * get value for required 
	 *
	 * type:INT,size:10,default:0
	 *
	 * @return mixed
	 */
	public function getRequired() {
		return $this->required;
	}

	/**
	 * Get table name
	 *
	 * @return string
	 */
	public static function getTableName() {
		return self::SQL_TABLE_NAME;
	}

	/**
	 * Get array with field id as index and field name as value
	 *
	 * @return array
	 */
	public static function getFieldNames() {
		return self::$FIELD_NAMES;
	}

	/**
	 * Get array with field id as index and property name as value
	 *
	 * @return array
	 */
	public static function getPropertyNames() {
		return self::$PROPERTY_NAMES;
	}

	/**
	 * get the field name for the passed field id.
	 *
	 * @param int $fieldId
	 * @param bool $fullyQualifiedName true if field name should be qualified by table name
	 * @return string field name for the passed field id, null if the field doesn't exist
	 */
	public static function getFieldNameByFieldId($fieldId, $fullyQualifiedName=true) {
		if (!array_key_exists($fieldId, self::$FIELD_NAMES)) {
			return null;
		}
		$fieldName=self::SQL_IDENTIFIER_QUOTE . self::$FIELD_NAMES[$fieldId] . self::SQL_IDENTIFIER_QUOTE;
		if ($fullyQualifiedName) {
			return self::SQL_IDENTIFIER_QUOTE . self::SQL_TABLE_NAME . self::SQL_IDENTIFIER_QUOTE . '.' . $fieldName;
		}
		return $fieldName;
	}

	/**
	 * Get array with field ids of identifiers
	 *
	 * @return array
	 */
	public static function getIdentifierFields() {
		return self::$PRIMARY_KEYS;
	}

	/**
	 * Get array with field ids of autoincrement fields
	 *
	 * @return array
	 */
	public static function getAutoincrementFields() {
		return self::$AUTOINCREMENT_FIELDS;
	}

	/**
	 * Get array with field id as index and property type as value
	 *
	 * @return array
	 */
	public static function getPropertyTypes() {
		return self::$PROPERTY_TYPES;
	}

	/**
	 * Get array with field id as index and field type as value
	 *
	 * @return array
	 */
	public static function getFieldTypes() {
		return self::$FIELD_TYPES;
	}

	/**
	 * Assign default values according to table
	 * 
	 */
	public function assignDefaultValues() {
		$this->assignByArray(self::$DEFAULT_VALUES);
	}


	/**
	 * return hash with the field name as index and the field value as value.
	 *
	 * @return array
	 */
	public function toHash() {
		$array=$this->toArray();
		$hash=array();
		foreach ($array as $fieldId=>$value) {
			$hash[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		return $hash;
	}

	/**
	 * return array with the field id as index and the field value as value.
	 *
	 * @return array
	 */
	public function toArray() {
		return array(
			self::FIELD_ID=>$this->getId(),
			self::FIELD_WEBFORMID=>$this->getWebFormId(),
			self::FIELD_FIELDNAME=>$this->getFieldName(),
			self::FIELD_NEUTRALIZEDFIELD=>$this->getNeutralizedField(),
			self::FIELD_DEFAULTVALUE=>$this->getDefaultValue(),
			self::FIELD_REQUIRED=>$this->getRequired());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_ID=>$this->getId());
	}

	/**
	 * cached statements
	 *
	 * @var array<string,array<string,PDOStatement>>
	 */
	private static $stmts=array();
	private static $cacheStatements=true;
	
	/**
	 * prepare passed string as statement or return cached if enabled and available
	 *
	 * @param PDO $db
	 * @param string $statement
	 * @return PDOStatement
	 */
	protected static function prepareStatement(PDO $db, $statement) {
		if(self::isCacheStatements()) {
			if (in_array($statement, array(self::SQL_INSERT, self::SQL_INSERT_AUTOINCREMENT, self::SQL_UPDATE, self::SQL_SELECT_PK, self::SQL_DELETE_PK))) {
				$dbInstanceId=spl_object_hash($db);
				if (empty(self::$stmts[$statement][$dbInstanceId])) {
					self::$stmts[$statement][$dbInstanceId]=$db->prepare($statement);
				}
				return self::$stmts[$statement][$dbInstanceId];
			}
		}
		return $db->prepare($statement);
	}

	/**
	 * Enable statement cache
	 *
	 * @param bool $cache
	 */
	public static function setCacheStatements($cache) {
		self::$cacheStatements=true==$cache;
	}

	/**
	 * Check if statement cache is enabled
	 *
	 * @return bool
	 */
	public static function isCacheStatements() {
		return self::$cacheStatements;
	}
	
	/**
	 * check if this instance exists in the database
	 *
	 * @param PDO $db
	 * @return bool
	 */
	public function existsInDatabase(PDO $db) {
		$filter=array();
		foreach ($this->getPrimaryKeyValues() as $fieldId=>$value) {
			$filter[]=new DFC($fieldId, $value, DFC::EXACT_NULLSAFE);
		}
		return 0!=count(self::findByFilter($db, $filter, true));
	}
	
	/**
	 * Update to database if exists, otherwise insert
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateInsertToDatabase(PDO $db) {
		if ($this->existsInDatabase($db)) {
			return $this->updateToDatabase($db);
		} else {
			return $this->insertIntoDatabase($db);
		}
	}

	/**
	 * Query by Example.
	 *
	 * Match by attributes of passed example instance and return matched rows as an array of VTigerWebFormsField instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param VTigerWebFormsField $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return VTigerWebFormsField[]
	 */
	public static function findByExample(PDO $db,VTigerWebFormsField $example, $and=true, $sort=null) {
		$exampleValues=$example->toArray();
		$filter=array();
		foreach ($exampleValues as $fieldId=>$value) {
			if (null!==$value) {
				$filter[$fieldId]=$value;
			}
		}
		return self::findByFilter($db, $filter, $and, $sort);
	}

	/**
	 * Query by filter.
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * Will return matched rows as an array of VTigerWebFormsField instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return VTigerWebFormsField[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `vtiger_webforms_field`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of VTigerWebFormsField instances
	 *
	 * @param PDOStatement $stmt
	 * @return VTigerWebFormsField[]
	 */
	public static function fromStatement(PDOStatement $stmt) {
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * returns the result as an array of VTigerWebFormsField instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return VTigerWebFormsField[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new VTigerWebFormsField();
			$o->assignByHash($result);
			$o->notifyPristine();
			$resultInstances[]=$o;
		}
		$stmt->closeCursor();
		return $resultInstances;
	}

	/**
	 * Get sql WHERE part from filter.
	 *
	 * @param array $filter
	 * @param bool $and
	 * @param bool $fullyQualifiedNames true if field names should be qualified by table name
	 * @param bool $prependWhere true if WHERE should be prepended to conditions
	 * @return string
	 */
	public static function buildSqlWhere($filter, $and, $fullyQualifiedNames=true, $prependWhere=false) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		return $filter->buildSqlWhere(new self::$CLASS_NAME, $fullyQualifiedNames, $prependWhere);
	}

	/**
	 * get sql ORDER BY part from DSCs
	 *
	 * @param array $sort array of DSC instances
	 * @return string
	 */
	protected static function buildSqlOrderBy($sort) {
		return DSC::buildSqlOrderBy(new self::$CLASS_NAME, $sort);
	}

	/**
	 * bind values from filter to statement
	 *
	 * @param PDOStatement $stmt
	 * @param DFCInterface $filter
	 */
	public static function bindValuesForFilter(PDOStatement &$stmt, DFCInterface $filter) {
		$filter->bindValuesForFilter(new self::$CLASS_NAME, $stmt);
	}

	/**
	 * Execute select query and return matched rows as an array of VTigerWebFormsField instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return VTigerWebFormsField[]
	 */
	public static function findBySql(PDO $db, $sql) {
		$stmt=$db->query($sql);
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * Delete rows matching the filter
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * @param PDO $db
	 * @param array $filter
	 * @param bool $and
	 * @return mixed
	 */
	public static function deleteByFilter(PDO $db, $filter, $and=true) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		if (0==count($filter)) {
			throw new InvalidArgumentException('refusing to delete without filter'); // just comment out this line if you are brave
		}
		$sql='DELETE FROM `vtiger_webforms_field`'
		. self::buildSqlWhere($filter, $and, false, true);
		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Assign values from array with the field id as index and the value as value
	 *
	 * @param array $array
	 */
	public function assignByArray($array) {
		$result=array();
		foreach ($array as $fieldId=>$value) {
			$result[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		$this->assignByHash($result);
	}

	/**
	 * Assign values from hash where the indexes match the tables field names
	 *
	 * @param array $result
	 */
	public function assignByHash($result) {
		$this->setId($result['id']);
		$this->setWebFormId($result['webformid']);
		$this->setFieldName($result['fieldname']);
		$this->setNeutralizedField($result['neutralizedfield']);
		$this->setDefaultValue($result['defaultvalue']);
		$this->setRequired($result['required']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return VTigerWebFormsField
	 */
	public static function findById(PDO $db,$id) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$id);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$result=$stmt->fetch(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
		if(!$result) {
			return null;
		}
		$o=new VTigerWebFormsField();
		$o->assignByHash($result);
		$o->notifyPristine();
		return $o;
	}

	/**
	 * Bind all values to statement
	 *
	 * @param PDOStatement $stmt
	 */
	protected function bindValues(PDOStatement &$stmt) {
		$stmt->bindValue(1,$this->getId());
		$stmt->bindValue(2,$this->getWebFormId());
		$stmt->bindValue(3,$this->getFieldName());
		$stmt->bindValue(4,$this->getNeutralizedField());
		$stmt->bindValue(5,$this->getDefaultValue());
		$stmt->bindValue(6,$this->getRequired());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getId()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getWebFormId());
			$stmt->bindValue(2,$this->getFieldName());
			$stmt->bindValue(3,$this->getNeutralizedField());
			$stmt->bindValue(4,$this->getDefaultValue());
			$stmt->bindValue(5,$this->getRequired());
		} else {
			$stmt=self::prepareStatement($db,self::SQL_INSERT);
			$this->bindValues($stmt);
		}
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$lastInsertId=$db->lastInsertId();
		if (false!==$lastInsertId) {
			$this->setId($lastInsertId);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Update this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateToDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_UPDATE);
		$this->bindValues($stmt);
		$stmt->bindValue(7,$this->getId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Delete this instance from the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function deleteFromDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_DELETE_PK);
		$stmt->bindValue(1,$this->getId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch VTigerWebForms which references this VTigerWebFormsField. Will return null in case reference is invalid.
	 * `vtiger_webforms_field`.`webformid` -> `vtiger_webforms`.`id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerWebForms
	 */
	public function fetchVTigerWebForms(PDO $db, $sort=null) {
		$filter=array(VTigerWebForms::FIELD_ID=>$this->getWebFormId());
		$result=VTigerWebForms::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch VTigerField which references this VTigerWebFormsField. Will return null in case reference is invalid.
	 * `vtiger_webforms_field`.`fieldname` -> `vtiger_field`.`fieldname`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerField
	 */
	public function fetchVTigerField(PDO $db, $sort=null) {
		$filter=array(VTigerField::FIELD_FIELDNAME=>$this->getFieldName());
		$result=VTigerField::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * return array with the property name as index and the field value as value.
	 * ezComponents support method
	 *
	 * @return array
	 */
	public function getState() {
		$array=$this->toArray();
		$state=array();
		foreach ($array as $fieldId=>$value) {
			$state[self::$PROPERTY_NAMES[$fieldId]]=$value;
		}
		return $state;
	}

	/**
	 * Assign values from hash where the indexes match the property names.
	 * ezComponents support method
	 *
	 * @param array $state
	 */
	public function setState(array $state) {
		$propertyNameToFieldId=array_flip(self::$PROPERTY_NAMES);
		$hash=$this->toHash();
		foreach ($state as $propertyName=>$value) {
			$hash[self::$FIELD_NAMES[$propertyNameToFieldId[$propertyName]]]=$value;
		}
		$this->assignByHash($hash);
	}

	/**
	 * get persistence definition for ezComponents
	 *
	 * @return ezcPersistentObjectDefinition
	 */
	public static function toEzcPersistentObjectDefinition() {
		static $typeMapping=array(
			Db2PhpEntity::PHP_TYPE_BOOL=>ezcPersistentObjectProperty::PHP_TYPE_BOOL,
			Db2PhpEntity::PHP_TYPE_INT=>ezcPersistentObjectProperty::PHP_TYPE_INT,
			Db2PhpEntity::PHP_TYPE_FLOAT=>ezcPersistentObjectProperty::PHP_TYPE_FLOAT,
			Db2PhpEntity::PHP_TYPE_STRING=>ezcPersistentObjectProperty::PHP_TYPE_STRING
		);
		$def=new ezcPersistentObjectDefinition();
		$def->table=self::SQL_TABLE_NAME;
		$def->class='VTigerWebFormsField';
		if (!empty (self::$PRIMARY_KEYS)) {
			$pkField=self::$PRIMARY_KEYS[0];
			$def->idProperty=new ezcPersistentObjectIdProperty();
			$def->idProperty->columnName=self::$FIELD_NAMES[$pkField];
			$def->idProperty->propertyName=self::$PROPERTY_NAMES[$pkField];
			$def->idProperty->generator=new ezcPersistentGeneratorDefinition(
				in_array($pkField, self::$AUTOINCREMENT_FIELDS) ? 'ezcPersistentNativeGenerator' : 'ezcPersistentManualGenerator');
		} else {
			$pkField=null;
		}
		foreach (self::$PROPERTY_NAMES as $fieldId=>$propertyName) {
			if ($fieldId!==$pkField) {
				$def->properties[$propertyName]=new ezcPersistentObjectProperty();
				$def->properties[$propertyName]->columnName=self::$FIELD_NAMES[$fieldId];
				$def->properties[$propertyName]->propertyName=$propertyName;
				$def->properties[$propertyName]->propertyType=$typeMapping[self::$PROPERTY_TYPES[$fieldId]];
			}
		}
		return $def;
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'VTigerWebFormsField');
	}

	/**
	 * get single VTigerWebFormsField instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return VTigerWebFormsField
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new VTigerWebFormsField();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of VTigerWebFormsField from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return VTigerWebFormsField[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('VTigerWebFormsField') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>