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
class VTigerWsEntity extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='VTigerWsEntity';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='vtiger_ws_entity';
	const SQL_INSERT='INSERT INTO `vtiger_ws_entity` (`id`,`name`,`handler_path`,`handler_class`,`ismodule`) VALUES (?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `vtiger_ws_entity` (`name`,`handler_path`,`handler_class`,`ismodule`) VALUES (?,?,?,?)';
	const SQL_UPDATE='UPDATE `vtiger_ws_entity` SET `id`=?,`name`=?,`handler_path`=?,`handler_class`=?,`ismodule`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `vtiger_ws_entity` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `vtiger_ws_entity` WHERE `id`=?';
	const FIELD_ID=845169625;
	const FIELD_NAME=459340233;
	const FIELD_HANDLER_PATH=1622811960;
	const FIELD_HANDLER_CLASS=-1244132667;
	const FIELD_ISMODULE=-590128044;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_NAME=>'name',
		self::FIELD_HANDLER_PATH=>'handler_path',
		self::FIELD_HANDLER_CLASS=>'handler_class',
		self::FIELD_ISMODULE=>'ismodule');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_NAME=>'name',
		self::FIELD_HANDLER_PATH=>'handlerPath',
		self::FIELD_HANDLER_CLASS=>'handlerClass',
		self::FIELD_ISMODULE=>'isModule');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_HANDLER_PATH=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_HANDLER_CLASS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ISMODULE=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,false),
		self::FIELD_HANDLER_PATH=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_HANDLER_CLASS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,64,0,false),
		self::FIELD_ISMODULE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_NAME=>'',
		self::FIELD_HANDLER_PATH=>'',
		self::FIELD_HANDLER_CLASS=>'',
		self::FIELD_ISMODULE=>0);
	private $id;
	private $name;
	private $handlerPath;
	private $handlerClass;
	private $isModule;

	/**
	 * set value for id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return VTigerWsEntity
	 */
	public function &setId($id) {
		$this->notifyChanged(self::FIELD_ID,$this->id,$id);
		$this->id=$id;
		return $this;
	}

	/**
	 * get value for id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * set value for name 
	 *
	 * type:VARCHAR,size:25,default:null
	 *
	 * @param mixed $name
	 * @return VTigerWsEntity
	 */
	public function &setName($name) {
		$this->notifyChanged(self::FIELD_NAME,$this->name,$name);
		$this->name=$name;
		return $this;
	}

	/**
	 * get value for name 
	 *
	 * type:VARCHAR,size:25,default:null
	 *
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * set value for handler_path 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $handlerPath
	 * @return VTigerWsEntity
	 */
	public function &setHandlerPath($handlerPath) {
		$this->notifyChanged(self::FIELD_HANDLER_PATH,$this->handlerPath,$handlerPath);
		$this->handlerPath=$handlerPath;
		return $this;
	}

	/**
	 * get value for handler_path 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getHandlerPath() {
		return $this->handlerPath;
	}

	/**
	 * set value for handler_class 
	 *
	 * type:VARCHAR,size:64,default:null
	 *
	 * @param mixed $handlerClass
	 * @return VTigerWsEntity
	 */
	public function &setHandlerClass($handlerClass) {
		$this->notifyChanged(self::FIELD_HANDLER_CLASS,$this->handlerClass,$handlerClass);
		$this->handlerClass=$handlerClass;
		return $this;
	}

	/**
	 * get value for handler_class 
	 *
	 * type:VARCHAR,size:64,default:null
	 *
	 * @return mixed
	 */
	public function getHandlerClass() {
		return $this->handlerClass;
	}

	/**
	 * set value for ismodule 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @param mixed $isModule
	 * @return VTigerWsEntity
	 */
	public function &setIsModule($isModule) {
		$this->notifyChanged(self::FIELD_ISMODULE,$this->isModule,$isModule);
		$this->isModule=$isModule;
		return $this;
	}

	/**
	 * get value for ismodule 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getIsModule() {
		return $this->isModule;
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
			self::FIELD_NAME=>$this->getName(),
			self::FIELD_HANDLER_PATH=>$this->getHandlerPath(),
			self::FIELD_HANDLER_CLASS=>$this->getHandlerClass(),
			self::FIELD_ISMODULE=>$this->getIsModule());
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
	 * Match by attributes of passed example instance and return matched rows as an array of VTigerWsEntity instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param VTigerWsEntity $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return VTigerWsEntity[]
	 */
	public static function findByExample(PDO $db,VTigerWsEntity $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of VTigerWsEntity instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return VTigerWsEntity[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `vtiger_ws_entity`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of VTigerWsEntity instances
	 *
	 * @param PDOStatement $stmt
	 * @return VTigerWsEntity[]
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
	 * returns the result as an array of VTigerWsEntity instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return VTigerWsEntity[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new VTigerWsEntity();
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
	 * Execute select query and return matched rows as an array of VTigerWsEntity instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return VTigerWsEntity[]
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
		$sql='DELETE FROM `vtiger_ws_entity`'
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
		$this->setName($result['name']);
		$this->setHandlerPath($result['handler_path']);
		$this->setHandlerClass($result['handler_class']);
		$this->setIsModule($result['ismodule']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return VTigerWsEntity
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
		$o=new VTigerWsEntity();
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
		$stmt->bindValue(2,$this->getName());
		$stmt->bindValue(3,$this->getHandlerPath());
		$stmt->bindValue(4,$this->getHandlerClass());
		$stmt->bindValue(5,$this->getIsModule());
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
			$stmt->bindValue(1,$this->getName());
			$stmt->bindValue(2,$this->getHandlerPath());
			$stmt->bindValue(3,$this->getHandlerClass());
			$stmt->bindValue(4,$this->getIsModule());
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
		$stmt->bindValue(6,$this->getId());
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
	 * Fetch VTigerWsEntityTables's which this VTigerWsEntity references.
	 * `vtiger_ws_entity`.`id` -> `vtiger_ws_entity_tables`.`webservice_entity_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerWsEntityTables[]
	 */
	public function fetchVTigerWsEntityTablesCollection(PDO $db, $sort=null) {
		$filter=array(VTigerWsEntityTables::FIELD_WEBSERVICE_ENTITY_ID=>$this->getId());
		return VTigerWsEntityTables::findByFilter($db, $filter, true, $sort);
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
		$def->class='VTigerWsEntity';
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
		return self::hashToDomDocument($this->toHash(), 'VTigerWsEntity');
	}

	/**
	 * get single VTigerWsEntity instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return VTigerWsEntity
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new VTigerWsEntity();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of VTigerWsEntity from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return VTigerWsEntity[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('VTigerWsEntity') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>