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
class VTigerPotStageHistory extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='VTigerPotStageHistory';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='vtiger_potstagehistory';
	const SQL_INSERT='INSERT INTO `vtiger_potstagehistory` (`historyid`,`potentialid`,`amount`,`stage`,`probability`,`expectedrevenue`,`closedate`,`lastmodified`) VALUES (?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `vtiger_potstagehistory` (`potentialid`,`amount`,`stage`,`probability`,`expectedrevenue`,`closedate`,`lastmodified`) VALUES (?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `vtiger_potstagehistory` SET `historyid`=?,`potentialid`=?,`amount`=?,`stage`=?,`probability`=?,`expectedrevenue`=?,`closedate`=?,`lastmodified`=? WHERE `historyid`=?';
	const SQL_SELECT_PK='SELECT * FROM `vtiger_potstagehistory` WHERE `historyid`=?';
	const SQL_DELETE_PK='DELETE FROM `vtiger_potstagehistory` WHERE `historyid`=?';
	const FIELD_HISTORYID=-822848906;
	const FIELD_POTENTIALID=-1883693632;
	const FIELD_AMOUNT=-1897052175;
	const FIELD_STAGE=-1984039867;
	const FIELD_PROBABILITY=-2127005636;
	const FIELD_EXPECTEDREVENUE=-1052507413;
	const FIELD_CLOSEDATE=1264600941;
	const FIELD_LASTMODIFIED=1734393912;
	private static $PRIMARY_KEYS=array(self::FIELD_HISTORYID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_HISTORYID);
	private static $FIELD_NAMES=array(
		self::FIELD_HISTORYID=>'historyid',
		self::FIELD_POTENTIALID=>'potentialid',
		self::FIELD_AMOUNT=>'amount',
		self::FIELD_STAGE=>'stage',
		self::FIELD_PROBABILITY=>'probability',
		self::FIELD_EXPECTEDREVENUE=>'expectedrevenue',
		self::FIELD_CLOSEDATE=>'closedate',
		self::FIELD_LASTMODIFIED=>'lastmodified');
	private static $PROPERTY_NAMES=array(
		self::FIELD_HISTORYID=>'historyId',
		self::FIELD_POTENTIALID=>'potentialId',
		self::FIELD_AMOUNT=>'amount',
		self::FIELD_STAGE=>'stage',
		self::FIELD_PROBABILITY=>'probability',
		self::FIELD_EXPECTEDREVENUE=>'expectedRevenue',
		self::FIELD_CLOSEDATE=>'cloSedate',
		self::FIELD_LASTMODIFIED=>'lastModified');
	private static $PROPERTY_TYPES=array(
		self::FIELD_HISTORYID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_POTENTIALID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_AMOUNT=>Db2PhpEntity::PHP_TYPE_FLOAT,
		self::FIELD_STAGE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PROBABILITY=>Db2PhpEntity::PHP_TYPE_FLOAT,
		self::FIELD_EXPECTEDREVENUE=>Db2PhpEntity::PHP_TYPE_FLOAT,
		self::FIELD_CLOSEDATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_LASTMODIFIED=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_HISTORYID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_POTENTIALID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_AMOUNT=>array(Db2PhpEntity::JDBC_TYPE_DECIMAL,10,0,true),
		self::FIELD_STAGE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_PROBABILITY=>array(Db2PhpEntity::JDBC_TYPE_DECIMAL,7,3,true),
		self::FIELD_EXPECTEDREVENUE=>array(Db2PhpEntity::JDBC_TYPE_DECIMAL,10,0,true),
		self::FIELD_CLOSEDATE=>array(Db2PhpEntity::JDBC_TYPE_DATE,10,0,true),
		self::FIELD_LASTMODIFIED=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_HISTORYID=>null,
		self::FIELD_POTENTIALID=>0,
		self::FIELD_AMOUNT=>null,
		self::FIELD_STAGE=>null,
		self::FIELD_PROBABILITY=>null,
		self::FIELD_EXPECTEDREVENUE=>null,
		self::FIELD_CLOSEDATE=>null,
		self::FIELD_LASTMODIFIED=>null);
	private $historyId;
	private $potentialId;
	private $amount;
	private $stage;
	private $probability;
	private $expectedRevenue;
	private $cloSedate;
	private $lastModified;

	/**
	 * set value for historyid 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $historyId
	 * @return VTigerPotStageHistory
	 */
	public function &setHistoryId($historyId) {
		$this->notifyChanged(self::FIELD_HISTORYID,$this->historyId,$historyId);
		$this->historyId=$historyId;
		return $this;
	}

	/**
	 * get value for historyid 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getHistoryId() {
		return $this->historyId;
	}

	/**
	 * set value for potentialid 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @param mixed $potentialId
	 * @return VTigerPotStageHistory
	 */
	public function &setPotentialId($potentialId) {
		$this->notifyChanged(self::FIELD_POTENTIALID,$this->potentialId,$potentialId);
		$this->potentialId=$potentialId;
		return $this;
	}

	/**
	 * get value for potentialid 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getPotentialId() {
		return $this->potentialId;
	}

	/**
	 * set value for amount 
	 *
	 * type:DECIMAL,size:10,default:null,nullable
	 *
	 * @param mixed $amount
	 * @return VTigerPotStageHistory
	 */
	public function &setAmount($amount) {
		$this->notifyChanged(self::FIELD_AMOUNT,$this->amount,$amount);
		$this->amount=$amount;
		return $this;
	}

	/**
	 * get value for amount 
	 *
	 * type:DECIMAL,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * set value for stage 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $stage
	 * @return VTigerPotStageHistory
	 */
	public function &setStage($stage) {
		$this->notifyChanged(self::FIELD_STAGE,$this->stage,$stage);
		$this->stage=$stage;
		return $this;
	}

	/**
	 * get value for stage 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getStage() {
		return $this->stage;
	}

	/**
	 * set value for probability 
	 *
	 * type:DECIMAL,size:7,default:null,nullable
	 *
	 * @param mixed $probability
	 * @return VTigerPotStageHistory
	 */
	public function &setProbability($probability) {
		$this->notifyChanged(self::FIELD_PROBABILITY,$this->probability,$probability);
		$this->probability=$probability;
		return $this;
	}

	/**
	 * get value for probability 
	 *
	 * type:DECIMAL,size:7,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getProbability() {
		return $this->probability;
	}

	/**
	 * set value for expectedrevenue 
	 *
	 * type:DECIMAL,size:10,default:null,nullable
	 *
	 * @param mixed $expectedRevenue
	 * @return VTigerPotStageHistory
	 */
	public function &setExpectedRevenue($expectedRevenue) {
		$this->notifyChanged(self::FIELD_EXPECTEDREVENUE,$this->expectedRevenue,$expectedRevenue);
		$this->expectedRevenue=$expectedRevenue;
		return $this;
	}

	/**
	 * get value for expectedrevenue 
	 *
	 * type:DECIMAL,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getExpectedRevenue() {
		return $this->expectedRevenue;
	}

	/**
	 * set value for closedate 
	 *
	 * type:DATE,size:10,default:null,nullable
	 *
	 * @param mixed $cloSedate
	 * @return VTigerPotStageHistory
	 */
	public function &setCloSedate($cloSedate) {
		$this->notifyChanged(self::FIELD_CLOSEDATE,$this->cloSedate,$cloSedate);
		$this->cloSedate=$cloSedate;
		return $this;
	}

	/**
	 * get value for closedate 
	 *
	 * type:DATE,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCloSedate() {
		return $this->cloSedate;
	}

	/**
	 * set value for lastmodified 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $lastModified
	 * @return VTigerPotStageHistory
	 */
	public function &setLastModified($lastModified) {
		$this->notifyChanged(self::FIELD_LASTMODIFIED,$this->lastModified,$lastModified);
		$this->lastModified=$lastModified;
		return $this;
	}

	/**
	 * get value for lastmodified 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getLastModified() {
		return $this->lastModified;
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
			self::FIELD_HISTORYID=>$this->getHistoryId(),
			self::FIELD_POTENTIALID=>$this->getPotentialId(),
			self::FIELD_AMOUNT=>$this->getAmount(),
			self::FIELD_STAGE=>$this->getStage(),
			self::FIELD_PROBABILITY=>$this->getProbability(),
			self::FIELD_EXPECTEDREVENUE=>$this->getExpectedRevenue(),
			self::FIELD_CLOSEDATE=>$this->getCloSedate(),
			self::FIELD_LASTMODIFIED=>$this->getLastModified());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_HISTORYID=>$this->getHistoryId());
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
	 * Match by attributes of passed example instance and return matched rows as an array of VTigerPotStageHistory instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param VTigerPotStageHistory $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return VTigerPotStageHistory[]
	 */
	public static function findByExample(PDO $db,VTigerPotStageHistory $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of VTigerPotStageHistory instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return VTigerPotStageHistory[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `vtiger_potstagehistory`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of VTigerPotStageHistory instances
	 *
	 * @param PDOStatement $stmt
	 * @return VTigerPotStageHistory[]
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
	 * returns the result as an array of VTigerPotStageHistory instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return VTigerPotStageHistory[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new VTigerPotStageHistory();
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
	 * Execute select query and return matched rows as an array of VTigerPotStageHistory instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return VTigerPotStageHistory[]
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
		$sql='DELETE FROM `vtiger_potstagehistory`'
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
		$this->setHistoryId($result['historyid']);
		$this->setPotentialId($result['potentialid']);
		$this->setAmount($result['amount']);
		$this->setStage($result['stage']);
		$this->setProbability($result['probability']);
		$this->setExpectedRevenue($result['expectedrevenue']);
		$this->setCloSedate($result['closedate']);
		$this->setLastModified($result['lastmodified']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return VTigerPotStageHistory
	 */
	public static function findById(PDO $db,$historyId) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$historyId);
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
		$o=new VTigerPotStageHistory();
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
		$stmt->bindValue(1,$this->getHistoryId());
		$stmt->bindValue(2,$this->getPotentialId());
		$stmt->bindValue(3,$this->getAmount());
		$stmt->bindValue(4,$this->getStage());
		$stmt->bindValue(5,$this->getProbability());
		$stmt->bindValue(6,$this->getExpectedRevenue());
		$stmt->bindValue(7,$this->getCloSedate());
		$stmt->bindValue(8,$this->getLastModified());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getHistoryId()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getPotentialId());
			$stmt->bindValue(2,$this->getAmount());
			$stmt->bindValue(3,$this->getStage());
			$stmt->bindValue(4,$this->getProbability());
			$stmt->bindValue(5,$this->getExpectedRevenue());
			$stmt->bindValue(6,$this->getCloSedate());
			$stmt->bindValue(7,$this->getLastModified());
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
			$this->setHistoryId($lastInsertId);
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
		$stmt->bindValue(9,$this->getHistoryId());
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
		$stmt->bindValue(1,$this->getHistoryId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch VTigerPotential which references this VTigerPotStageHistory. Will return null in case reference is invalid.
	 * `vtiger_potstagehistory`.`potentialid` -> `vtiger_potential`.`potentialid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerPotential
	 */
	public function fetchVTigerPotential(PDO $db, $sort=null) {
		$filter=array(VTigerPotential::FIELD_POTENTIALID=>$this->getPotentialId());
		$result=VTigerPotential::findByFilter($db, $filter, true, $sort);
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
		$def->class='VTigerPotStageHistory';
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
		return self::hashToDomDocument($this->toHash(), 'VTigerPotStageHistory');
	}

	/**
	 * get single VTigerPotStageHistory instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return VTigerPotStageHistory
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new VTigerPotStageHistory();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of VTigerPotStageHistory from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return VTigerPotStageHistory[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('VTigerPotStageHistory') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>