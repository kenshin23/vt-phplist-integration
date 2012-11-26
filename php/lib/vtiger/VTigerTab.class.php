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
class VTigerTab extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='VTigerTab';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='vtiger_tab';
	const SQL_INSERT='INSERT INTO `vtiger_tab` (`tabid`,`name`,`presence`,`tabsequence`,`tablabel`,`modifiedby`,`modifiedtime`,`customized`,`ownedby`,`isentitytype`,`version`,`parent`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `vtiger_tab` (`tabid`,`name`,`presence`,`tabsequence`,`tablabel`,`modifiedby`,`modifiedtime`,`customized`,`ownedby`,`isentitytype`,`version`,`parent`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `vtiger_tab` SET `tabid`=?,`name`=?,`presence`=?,`tabsequence`=?,`tablabel`=?,`modifiedby`=?,`modifiedtime`=?,`customized`=?,`ownedby`=?,`isentitytype`=?,`version`=?,`parent`=? WHERE `tabid`=?';
	const SQL_SELECT_PK='SELECT * FROM `vtiger_tab` WHERE `tabid`=?';
	const SQL_DELETE_PK='DELETE FROM `vtiger_tab` WHERE `tabid`=?';
	const FIELD_TABID=1779216673;
	const FIELD_NAME=57215674;
	const FIELD_PRESENCE=74153386;
	const FIELD_TABSEQUENCE=-1126727865;
	const FIELD_TABLABEL=455284014;
	const FIELD_MODIFIEDBY=-2039942705;
	const FIELD_MODIFIEDTIME=-1879328187;
	const FIELD_CUSTOMIZED=-523145872;
	const FIELD_OWNEDBY=928495405;
	const FIELD_ISENTITYTYPE=1735973750;
	const FIELD_VERSION=-1960121783;
	const FIELD_PARENT=-792901351;
	private static $PRIMARY_KEYS=array(self::FIELD_TABID);
	private static $AUTOINCREMENT_FIELDS=array();
	private static $FIELD_NAMES=array(
		self::FIELD_TABID=>'tabid',
		self::FIELD_NAME=>'name',
		self::FIELD_PRESENCE=>'presence',
		self::FIELD_TABSEQUENCE=>'tabsequence',
		self::FIELD_TABLABEL=>'tablabel',
		self::FIELD_MODIFIEDBY=>'modifiedby',
		self::FIELD_MODIFIEDTIME=>'modifiedtime',
		self::FIELD_CUSTOMIZED=>'customized',
		self::FIELD_OWNEDBY=>'ownedby',
		self::FIELD_ISENTITYTYPE=>'isentitytype',
		self::FIELD_VERSION=>'version',
		self::FIELD_PARENT=>'parent');
	private static $PROPERTY_NAMES=array(
		self::FIELD_TABID=>'tabId',
		self::FIELD_NAME=>'name',
		self::FIELD_PRESENCE=>'presence',
		self::FIELD_TABSEQUENCE=>'tabSequence',
		self::FIELD_TABLABEL=>'tablaBel',
		self::FIELD_MODIFIEDBY=>'modifiedBy',
		self::FIELD_MODIFIEDTIME=>'modifiedTime',
		self::FIELD_CUSTOMIZED=>'customized',
		self::FIELD_OWNEDBY=>'ownedBy',
		self::FIELD_ISENTITYTYPE=>'isEntityType',
		self::FIELD_VERSION=>'version',
		self::FIELD_PARENT=>'parent');
	private static $PROPERTY_TYPES=array(
		self::FIELD_TABID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PRESENCE=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_TABSEQUENCE=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_TABLABEL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_MODIFIEDBY=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_MODIFIEDTIME=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_CUSTOMIZED=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_OWNEDBY=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ISENTITYTYPE=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_VERSION=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PARENT=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_TABID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,false),
		self::FIELD_PRESENCE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_TABSEQUENCE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_TABLABEL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,false),
		self::FIELD_MODIFIEDBY=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_MODIFIEDTIME=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_CUSTOMIZED=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_OWNEDBY=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_ISENTITYTYPE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_VERSION=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,10,0,true),
		self::FIELD_PARENT=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,30,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_TABID=>0,
		self::FIELD_NAME=>'',
		self::FIELD_PRESENCE=>1,
		self::FIELD_TABSEQUENCE=>null,
		self::FIELD_TABLABEL=>'',
		self::FIELD_MODIFIEDBY=>null,
		self::FIELD_MODIFIEDTIME=>null,
		self::FIELD_CUSTOMIZED=>null,
		self::FIELD_OWNEDBY=>null,
		self::FIELD_ISENTITYTYPE=>1,
		self::FIELD_VERSION=>null,
		self::FIELD_PARENT=>null);
	private $tabId;
	private $name;
	private $presence;
	private $tabSequence;
	private $tablaBel;
	private $modifiedBy;
	private $modifiedTime;
	private $customized;
	private $ownedBy;
	private $isEntityType;
	private $version;
	private $parent;

	/**
	 * set value for tabid 
	 *
	 * type:INT,size:10,default:0,primary,index
	 *
	 * @param mixed $tabId
	 * @return VTigerTab
	 */
	public function &setTabId($tabId) {
		$this->notifyChanged(self::FIELD_TABID,$this->tabId,$tabId);
		$this->tabId=$tabId;
		return $this;
	}

	/**
	 * get value for tabid 
	 *
	 * type:INT,size:10,default:0,primary,index
	 *
	 * @return mixed
	 */
	public function getTabId() {
		return $this->tabId;
	}

	/**
	 * set value for name 
	 *
	 * type:VARCHAR,size:25,default:null,unique
	 *
	 * @param mixed $name
	 * @return VTigerTab
	 */
	public function &setName($name) {
		$this->notifyChanged(self::FIELD_NAME,$this->name,$name);
		$this->name=$name;
		return $this;
	}

	/**
	 * get value for name 
	 *
	 * type:VARCHAR,size:25,default:null,unique
	 *
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * set value for presence 
	 *
	 * type:INT,size:10,default:1
	 *
	 * @param mixed $presence
	 * @return VTigerTab
	 */
	public function &setPresence($presence) {
		$this->notifyChanged(self::FIELD_PRESENCE,$this->presence,$presence);
		$this->presence=$presence;
		return $this;
	}

	/**
	 * get value for presence 
	 *
	 * type:INT,size:10,default:1
	 *
	 * @return mixed
	 */
	public function getPresence() {
		return $this->presence;
	}

	/**
	 * set value for tabsequence 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $tabSequence
	 * @return VTigerTab
	 */
	public function &setTabSequence($tabSequence) {
		$this->notifyChanged(self::FIELD_TABSEQUENCE,$this->tabSequence,$tabSequence);
		$this->tabSequence=$tabSequence;
		return $this;
	}

	/**
	 * get value for tabsequence 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTabSequence() {
		return $this->tabSequence;
	}

	/**
	 * set value for tablabel 
	 *
	 * type:VARCHAR,size:25,default:null
	 *
	 * @param mixed $tablaBel
	 * @return VTigerTab
	 */
	public function &setTablaBel($tablaBel) {
		$this->notifyChanged(self::FIELD_TABLABEL,$this->tablaBel,$tablaBel);
		$this->tablaBel=$tablaBel;
		return $this;
	}

	/**
	 * get value for tablabel 
	 *
	 * type:VARCHAR,size:25,default:null
	 *
	 * @return mixed
	 */
	public function getTablaBel() {
		return $this->tablaBel;
	}

	/**
	 * set value for modifiedby 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $modifiedBy
	 * @return VTigerTab
	 */
	public function &setModifiedBy($modifiedBy) {
		$this->notifyChanged(self::FIELD_MODIFIEDBY,$this->modifiedBy,$modifiedBy);
		$this->modifiedBy=$modifiedBy;
		return $this;
	}

	/**
	 * get value for modifiedby 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getModifiedBy() {
		return $this->modifiedBy;
	}

	/**
	 * set value for modifiedtime 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $modifiedTime
	 * @return VTigerTab
	 */
	public function &setModifiedTime($modifiedTime) {
		$this->notifyChanged(self::FIELD_MODIFIEDTIME,$this->modifiedTime,$modifiedTime);
		$this->modifiedTime=$modifiedTime;
		return $this;
	}

	/**
	 * get value for modifiedtime 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getModifiedTime() {
		return $this->modifiedTime;
	}

	/**
	 * set value for customized 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $customized
	 * @return VTigerTab
	 */
	public function &setCustomized($customized) {
		$this->notifyChanged(self::FIELD_CUSTOMIZED,$this->customized,$customized);
		$this->customized=$customized;
		return $this;
	}

	/**
	 * get value for customized 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCustomized() {
		return $this->customized;
	}

	/**
	 * set value for ownedby 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $ownedBy
	 * @return VTigerTab
	 */
	public function &setOwnedBy($ownedBy) {
		$this->notifyChanged(self::FIELD_OWNEDBY,$this->ownedBy,$ownedBy);
		$this->ownedBy=$ownedBy;
		return $this;
	}

	/**
	 * get value for ownedby 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getOwnedBy() {
		return $this->ownedBy;
	}

	/**
	 * set value for isentitytype 
	 *
	 * type:INT,size:10,default:1
	 *
	 * @param mixed $isEntityType
	 * @return VTigerTab
	 */
	public function &setIsEntityType($isEntityType) {
		$this->notifyChanged(self::FIELD_ISENTITYTYPE,$this->isEntityType,$isEntityType);
		$this->isEntityType=$isEntityType;
		return $this;
	}

	/**
	 * get value for isentitytype 
	 *
	 * type:INT,size:10,default:1
	 *
	 * @return mixed
	 */
	public function getIsEntityType() {
		return $this->isEntityType;
	}

	/**
	 * set value for version 
	 *
	 * type:VARCHAR,size:10,default:null,nullable
	 *
	 * @param mixed $version
	 * @return VTigerTab
	 */
	public function &setVersion($version) {
		$this->notifyChanged(self::FIELD_VERSION,$this->version,$version);
		$this->version=$version;
		return $this;
	}

	/**
	 * get value for version 
	 *
	 * type:VARCHAR,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getVersion() {
		return $this->version;
	}

	/**
	 * set value for parent 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @param mixed $parent
	 * @return VTigerTab
	 */
	public function &setParent($parent) {
		$this->notifyChanged(self::FIELD_PARENT,$this->parent,$parent);
		$this->parent=$parent;
		return $this;
	}

	/**
	 * get value for parent 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getParent() {
		return $this->parent;
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
			self::FIELD_TABID=>$this->getTabId(),
			self::FIELD_NAME=>$this->getName(),
			self::FIELD_PRESENCE=>$this->getPresence(),
			self::FIELD_TABSEQUENCE=>$this->getTabSequence(),
			self::FIELD_TABLABEL=>$this->getTablaBel(),
			self::FIELD_MODIFIEDBY=>$this->getModifiedBy(),
			self::FIELD_MODIFIEDTIME=>$this->getModifiedTime(),
			self::FIELD_CUSTOMIZED=>$this->getCustomized(),
			self::FIELD_OWNEDBY=>$this->getOwnedBy(),
			self::FIELD_ISENTITYTYPE=>$this->getIsEntityType(),
			self::FIELD_VERSION=>$this->getVersion(),
			self::FIELD_PARENT=>$this->getParent());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_TABID=>$this->getTabId());
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
	 * Match by attributes of passed example instance and return matched rows as an array of VTigerTab instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param VTigerTab $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return VTigerTab[]
	 */
	public static function findByExample(PDO $db,VTigerTab $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of VTigerTab instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return VTigerTab[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `vtiger_tab`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of VTigerTab instances
	 *
	 * @param PDOStatement $stmt
	 * @return VTigerTab[]
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
	 * returns the result as an array of VTigerTab instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return VTigerTab[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new VTigerTab();
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
	 * Execute select query and return matched rows as an array of VTigerTab instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return VTigerTab[]
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
		$sql='DELETE FROM `vtiger_tab`'
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
		$this->setTabId($result['tabid']);
		$this->setName($result['name']);
		$this->setPresence($result['presence']);
		$this->setTabSequence($result['tabsequence']);
		$this->setTablaBel($result['tablabel']);
		$this->setModifiedBy($result['modifiedby']);
		$this->setModifiedTime($result['modifiedtime']);
		$this->setCustomized($result['customized']);
		$this->setOwnedBy($result['ownedby']);
		$this->setIsEntityType($result['isentitytype']);
		$this->setVersion($result['version']);
		$this->setParent($result['parent']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return VTigerTab
	 */
	public static function findById(PDO $db,$tabId) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$tabId);
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
		$o=new VTigerTab();
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
		$stmt->bindValue(1,$this->getTabId());
		$stmt->bindValue(2,$this->getName());
		$stmt->bindValue(3,$this->getPresence());
		$stmt->bindValue(4,$this->getTabSequence());
		$stmt->bindValue(5,$this->getTablaBel());
		$stmt->bindValue(6,$this->getModifiedBy());
		$stmt->bindValue(7,$this->getModifiedTime());
		$stmt->bindValue(8,$this->getCustomized());
		$stmt->bindValue(9,$this->getOwnedBy());
		$stmt->bindValue(10,$this->getIsEntityType());
		$stmt->bindValue(11,$this->getVersion());
		$stmt->bindValue(12,$this->getParent());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_INSERT);
		$this->bindValues($stmt);
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
	 * Update this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateToDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_UPDATE);
		$this->bindValues($stmt);
		$stmt->bindValue(13,$this->getTabId());
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
		$stmt->bindValue(1,$this->getTabId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch VTigerBlocks's which this VTigerTab references.
	 * `vtiger_tab`.`tabid` -> `vtiger_blocks`.`tabid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerBlocks[]
	 */
	public function fetchVTigerBlocksCollection(PDO $db, $sort=null) {
		$filter=array(VTigerBlocks::FIELD_TABID=>$this->getTabId());
		return VTigerBlocks::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch VTigerCustomView's which this VTigerTab references.
	 * `vtiger_tab`.`name` -> `vtiger_customview`.`entitytype`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerCustomView[]
	 */
	public function fetchVTigerCustomViewCollection(PDO $db, $sort=null) {
		$filter=array(VTigerCustomView::FIELD_ENTITYTYPE=>$this->getName());
		return VTigerCustomView::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch VTigerDaTashaReModuleRel's which this VTigerTab references.
	 * `vtiger_tab`.`tabid` -> `vtiger_datashare_module_rel`.`tabid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerDaTashaReModuleRel[]
	 */
	public function fetchVTigerDaTashaReModuleRelCollection(PDO $db, $sort=null) {
		$filter=array(VTigerDaTashaReModuleRel::FIELD_TABID=>$this->getTabId());
		return VTigerDaTashaReModuleRel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch VTigerDaTashaReRelatedModules's which this VTigerTab references.
	 * `vtiger_tab`.`tabid` -> `vtiger_datashare_relatedmodules`.`tabid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerDaTashaReRelatedModules[]
	 */
	public function fetchVTigerDaTashaReRelatedModulesCollection(PDO $db, $sort=null) {
		$filter=array(VTigerDaTashaReRelatedModules::FIELD_TABID=>$this->getTabId());
		return VTigerDaTashaReRelatedModules::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch VTigerDefaultCv's which this VTigerTab references.
	 * `vtiger_tab`.`tabid` -> `vtiger_defaultcv`.`tabid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerDefaultCv[]
	 */
	public function fetchVTigerDefaultCvCollection(PDO $db, $sort=null) {
		$filter=array(VTigerDefaultCv::FIELD_TABID=>$this->getTabId());
		return VTigerDefaultCv::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch VTigerEntityName's which this VTigerTab references.
	 * `vtiger_tab`.`tabid` -> `vtiger_entityname`.`tabid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerEntityName[]
	 */
	public function fetchVTigerEntityNameCollection(PDO $db, $sort=null) {
		$filter=array(VTigerEntityName::FIELD_TABID=>$this->getTabId());
		return VTigerEntityName::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch VTigerField's which this VTigerTab references.
	 * `vtiger_tab`.`tabid` -> `vtiger_field`.`tabid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerField[]
	 */
	public function fetchVTigerFieldCollection(PDO $db, $sort=null) {
		$filter=array(VTigerField::FIELD_TABID=>$this->getTabId());
		return VTigerField::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch VTigerOrgShareAction2Tab's which this VTigerTab references.
	 * `vtiger_tab`.`tabid` -> `vtiger_org_share_action2tab`.`tabid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerOrgShareAction2Tab[]
	 */
	public function fetchVTigerOrgShareAction2TabCollection(PDO $db, $sort=null) {
		$filter=array(VTigerOrgShareAction2Tab::FIELD_TABID=>$this->getTabId());
		return VTigerOrgShareAction2Tab::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch VTigerParentTabRel's which this VTigerTab references.
	 * `vtiger_tab`.`tabid` -> `vtiger_parenttabrel`.`tabid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerParentTabRel[]
	 */
	public function fetchVTigerParentTabRelCollection(PDO $db, $sort=null) {
		$filter=array(VTigerParentTabRel::FIELD_TABID=>$this->getTabId());
		return VTigerParentTabRel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch VTigerTabInfo's which this VTigerTab references.
	 * `vtiger_tab`.`tabid` -> `vtiger_tab_info`.`tabid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerTabInfo[]
	 */
	public function fetchVTigerTabInfoCollection(PDO $db, $sort=null) {
		$filter=array(VTigerTabInfo::FIELD_TABID=>$this->getTabId());
		return VTigerTabInfo::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch VTigerUserModulePreferences's which this VTigerTab references.
	 * `vtiger_tab`.`tabid` -> `vtiger_user_module_preferences`.`tabid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerUserModulePreferences[]
	 */
	public function fetchVTigerUserModulePreferencesCollection(PDO $db, $sort=null) {
		$filter=array(VTigerUserModulePreferences::FIELD_TABID=>$this->getTabId());
		return VTigerUserModulePreferences::findByFilter($db, $filter, true, $sort);
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
		$def->class='VTigerTab';
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
		return self::hashToDomDocument($this->toHash(), 'VTigerTab');
	}

	/**
	 * get single VTigerTab instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return VTigerTab
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new VTigerTab();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of VTigerTab from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return VTigerTab[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('VTigerTab') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>