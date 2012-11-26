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
class VTigerProjectTask extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='VTigerProjectTask';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='vtiger_projecttask';
	const SQL_INSERT='INSERT INTO `vtiger_projecttask` (`projecttaskid`,`projecttaskname`,`projecttask_no`,`projecttasktype`,`projecttaskpriority`,`projecttaskprogress`,`projecttaskhours`,`startdate`,`enddate`,`projectid`,`projecttasknumber`) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `vtiger_projecttask` (`projecttaskid`,`projecttaskname`,`projecttask_no`,`projecttasktype`,`projecttaskpriority`,`projecttaskprogress`,`projecttaskhours`,`startdate`,`enddate`,`projectid`,`projecttasknumber`) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `vtiger_projecttask` SET `projecttaskid`=?,`projecttaskname`=?,`projecttask_no`=?,`projecttasktype`=?,`projecttaskpriority`=?,`projecttaskprogress`=?,`projecttaskhours`=?,`startdate`=?,`enddate`=?,`projectid`=?,`projecttasknumber`=? WHERE `projecttaskid`=?';
	const SQL_SELECT_PK='SELECT * FROM `vtiger_projecttask` WHERE `projecttaskid`=?';
	const SQL_DELETE_PK='DELETE FROM `vtiger_projecttask` WHERE `projecttaskid`=?';
	const FIELD_PROJECTTASKID=238189875;
	const FIELD_PROJECTTASKNAME=1267352739;
	const FIELD_PROJECTTASK_NO=-1206057656;
	const FIELD_PROJECTTASKTYPE=1267554642;
	const FIELD_PROJECTTASKPRIORITY=-1967360068;
	const FIELD_PROJECTTASKPROGRESS=-1802977211;
	const FIELD_PROJECTTASKHOURS=628113399;
	const FIELD_STARTDATE=468792202;
	const FIELD_ENDDATE=1162406403;
	const FIELD_PROJECTID=1702786670;
	const FIELD_PROJECTTASKNUMBER=-1826259103;
	private static $PRIMARY_KEYS=array(self::FIELD_PROJECTTASKID);
	private static $AUTOINCREMENT_FIELDS=array();
	private static $FIELD_NAMES=array(
		self::FIELD_PROJECTTASKID=>'projecttaskid',
		self::FIELD_PROJECTTASKNAME=>'projecttaskname',
		self::FIELD_PROJECTTASK_NO=>'projecttask_no',
		self::FIELD_PROJECTTASKTYPE=>'projecttasktype',
		self::FIELD_PROJECTTASKPRIORITY=>'projecttaskpriority',
		self::FIELD_PROJECTTASKPROGRESS=>'projecttaskprogress',
		self::FIELD_PROJECTTASKHOURS=>'projecttaskhours',
		self::FIELD_STARTDATE=>'startdate',
		self::FIELD_ENDDATE=>'enddate',
		self::FIELD_PROJECTID=>'projectid',
		self::FIELD_PROJECTTASKNUMBER=>'projecttasknumber');
	private static $PROPERTY_NAMES=array(
		self::FIELD_PROJECTTASKID=>'projectTaskId',
		self::FIELD_PROJECTTASKNAME=>'projectTaskName',
		self::FIELD_PROJECTTASK_NO=>'projectTaskNo',
		self::FIELD_PROJECTTASKTYPE=>'projectTaskType',
		self::FIELD_PROJECTTASKPRIORITY=>'projectTaskPriority',
		self::FIELD_PROJECTTASKPROGRESS=>'projectTaskProgress',
		self::FIELD_PROJECTTASKHOURS=>'projectTaskHours',
		self::FIELD_STARTDATE=>'startDate',
		self::FIELD_ENDDATE=>'endDate',
		self::FIELD_PROJECTID=>'projectId',
		self::FIELD_PROJECTTASKNUMBER=>'projectTaskNumber');
	private static $PROPERTY_TYPES=array(
		self::FIELD_PROJECTTASKID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_PROJECTTASKNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PROJECTTASK_NO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PROJECTTASKTYPE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PROJECTTASKPRIORITY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PROJECTTASKPROGRESS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PROJECTTASKHOURS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_STARTDATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ENDDATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PROJECTID=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PROJECTTASKNUMBER=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_PROJECTTASKID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_PROJECTTASKNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_PROJECTTASK_NO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_PROJECTTASKTYPE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_PROJECTTASKPRIORITY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_PROJECTTASKPROGRESS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_PROJECTTASKHOURS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_STARTDATE=>array(Db2PhpEntity::JDBC_TYPE_DATE,10,0,true),
		self::FIELD_ENDDATE=>array(Db2PhpEntity::JDBC_TYPE_DATE,10,0,true),
		self::FIELD_PROJECTID=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_PROJECTTASKNUMBER=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_PROJECTTASKID=>0,
		self::FIELD_PROJECTTASKNAME=>null,
		self::FIELD_PROJECTTASK_NO=>null,
		self::FIELD_PROJECTTASKTYPE=>null,
		self::FIELD_PROJECTTASKPRIORITY=>null,
		self::FIELD_PROJECTTASKPROGRESS=>null,
		self::FIELD_PROJECTTASKHOURS=>null,
		self::FIELD_STARTDATE=>null,
		self::FIELD_ENDDATE=>null,
		self::FIELD_PROJECTID=>null,
		self::FIELD_PROJECTTASKNUMBER=>null);
	private $projectTaskId;
	private $projectTaskName;
	private $projectTaskNo;
	private $projectTaskType;
	private $projectTaskPriority;
	private $projectTaskProgress;
	private $projectTaskHours;
	private $startDate;
	private $endDate;
	private $projectId;
	private $projectTaskNumber;

	/**
	 * set value for projecttaskid 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @param mixed $projectTaskId
	 * @return VTigerProjectTask
	 */
	public function &setProjectTaskId($projectTaskId) {
		$this->notifyChanged(self::FIELD_PROJECTTASKID,$this->projectTaskId,$projectTaskId);
		$this->projectTaskId=$projectTaskId;
		return $this;
	}

	/**
	 * get value for projecttaskid 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @return mixed
	 */
	public function getProjectTaskId() {
		return $this->projectTaskId;
	}

	/**
	 * set value for projecttaskname 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @param mixed $projectTaskName
	 * @return VTigerProjectTask
	 */
	public function &setProjectTaskName($projectTaskName) {
		$this->notifyChanged(self::FIELD_PROJECTTASKNAME,$this->projectTaskName,$projectTaskName);
		$this->projectTaskName=$projectTaskName;
		return $this;
	}

	/**
	 * get value for projecttaskname 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getProjectTaskName() {
		return $this->projectTaskName;
	}

	/**
	 * set value for projecttask_no 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $projectTaskNo
	 * @return VTigerProjectTask
	 */
	public function &setProjectTaskNo($projectTaskNo) {
		$this->notifyChanged(self::FIELD_PROJECTTASK_NO,$this->projectTaskNo,$projectTaskNo);
		$this->projectTaskNo=$projectTaskNo;
		return $this;
	}

	/**
	 * get value for projecttask_no 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getProjectTaskNo() {
		return $this->projectTaskNo;
	}

	/**
	 * set value for projecttasktype 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $projectTaskType
	 * @return VTigerProjectTask
	 */
	public function &setProjectTaskType($projectTaskType) {
		$this->notifyChanged(self::FIELD_PROJECTTASKTYPE,$this->projectTaskType,$projectTaskType);
		$this->projectTaskType=$projectTaskType;
		return $this;
	}

	/**
	 * get value for projecttasktype 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getProjectTaskType() {
		return $this->projectTaskType;
	}

	/**
	 * set value for projecttaskpriority 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $projectTaskPriority
	 * @return VTigerProjectTask
	 */
	public function &setProjectTaskPriority($projectTaskPriority) {
		$this->notifyChanged(self::FIELD_PROJECTTASKPRIORITY,$this->projectTaskPriority,$projectTaskPriority);
		$this->projectTaskPriority=$projectTaskPriority;
		return $this;
	}

	/**
	 * get value for projecttaskpriority 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getProjectTaskPriority() {
		return $this->projectTaskPriority;
	}

	/**
	 * set value for projecttaskprogress 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $projectTaskProgress
	 * @return VTigerProjectTask
	 */
	public function &setProjectTaskProgress($projectTaskProgress) {
		$this->notifyChanged(self::FIELD_PROJECTTASKPROGRESS,$this->projectTaskProgress,$projectTaskProgress);
		$this->projectTaskProgress=$projectTaskProgress;
		return $this;
	}

	/**
	 * get value for projecttaskprogress 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getProjectTaskProgress() {
		return $this->projectTaskProgress;
	}

	/**
	 * set value for projecttaskhours 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @param mixed $projectTaskHours
	 * @return VTigerProjectTask
	 */
	public function &setProjectTaskHours($projectTaskHours) {
		$this->notifyChanged(self::FIELD_PROJECTTASKHOURS,$this->projectTaskHours,$projectTaskHours);
		$this->projectTaskHours=$projectTaskHours;
		return $this;
	}

	/**
	 * get value for projecttaskhours 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getProjectTaskHours() {
		return $this->projectTaskHours;
	}

	/**
	 * set value for startdate 
	 *
	 * type:DATE,size:10,default:null,nullable
	 *
	 * @param mixed $startDate
	 * @return VTigerProjectTask
	 */
	public function &setStartDate($startDate) {
		$this->notifyChanged(self::FIELD_STARTDATE,$this->startDate,$startDate);
		$this->startDate=$startDate;
		return $this;
	}

	/**
	 * get value for startdate 
	 *
	 * type:DATE,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * set value for enddate 
	 *
	 * type:DATE,size:10,default:null,nullable
	 *
	 * @param mixed $endDate
	 * @return VTigerProjectTask
	 */
	public function &setEndDate($endDate) {
		$this->notifyChanged(self::FIELD_ENDDATE,$this->endDate,$endDate);
		$this->endDate=$endDate;
		return $this;
	}

	/**
	 * get value for enddate 
	 *
	 * type:DATE,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getEndDate() {
		return $this->endDate;
	}

	/**
	 * set value for projectid 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $projectId
	 * @return VTigerProjectTask
	 */
	public function &setProjectId($projectId) {
		$this->notifyChanged(self::FIELD_PROJECTID,$this->projectId,$projectId);
		$this->projectId=$projectId;
		return $this;
	}

	/**
	 * get value for projectid 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getProjectId() {
		return $this->projectId;
	}

	/**
	 * set value for projecttasknumber 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $projectTaskNumber
	 * @return VTigerProjectTask
	 */
	public function &setProjectTaskNumber($projectTaskNumber) {
		$this->notifyChanged(self::FIELD_PROJECTTASKNUMBER,$this->projectTaskNumber,$projectTaskNumber);
		$this->projectTaskNumber=$projectTaskNumber;
		return $this;
	}

	/**
	 * get value for projecttasknumber 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getProjectTaskNumber() {
		return $this->projectTaskNumber;
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
			self::FIELD_PROJECTTASKID=>$this->getProjectTaskId(),
			self::FIELD_PROJECTTASKNAME=>$this->getProjectTaskName(),
			self::FIELD_PROJECTTASK_NO=>$this->getProjectTaskNo(),
			self::FIELD_PROJECTTASKTYPE=>$this->getProjectTaskType(),
			self::FIELD_PROJECTTASKPRIORITY=>$this->getProjectTaskPriority(),
			self::FIELD_PROJECTTASKPROGRESS=>$this->getProjectTaskProgress(),
			self::FIELD_PROJECTTASKHOURS=>$this->getProjectTaskHours(),
			self::FIELD_STARTDATE=>$this->getStartDate(),
			self::FIELD_ENDDATE=>$this->getEndDate(),
			self::FIELD_PROJECTID=>$this->getProjectId(),
			self::FIELD_PROJECTTASKNUMBER=>$this->getProjectTaskNumber());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_PROJECTTASKID=>$this->getProjectTaskId());
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
	 * Match by attributes of passed example instance and return matched rows as an array of VTigerProjectTask instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param VTigerProjectTask $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return VTigerProjectTask[]
	 */
	public static function findByExample(PDO $db,VTigerProjectTask $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of VTigerProjectTask instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return VTigerProjectTask[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `vtiger_projecttask`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of VTigerProjectTask instances
	 *
	 * @param PDOStatement $stmt
	 * @return VTigerProjectTask[]
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
	 * returns the result as an array of VTigerProjectTask instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return VTigerProjectTask[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new VTigerProjectTask();
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
	 * Execute select query and return matched rows as an array of VTigerProjectTask instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return VTigerProjectTask[]
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
		$sql='DELETE FROM `vtiger_projecttask`'
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
		$this->setProjectTaskId($result['projecttaskid']);
		$this->setProjectTaskName($result['projecttaskname']);
		$this->setProjectTaskNo($result['projecttask_no']);
		$this->setProjectTaskType($result['projecttasktype']);
		$this->setProjectTaskPriority($result['projecttaskpriority']);
		$this->setProjectTaskProgress($result['projecttaskprogress']);
		$this->setProjectTaskHours($result['projecttaskhours']);
		$this->setStartDate($result['startdate']);
		$this->setEndDate($result['enddate']);
		$this->setProjectId($result['projectid']);
		$this->setProjectTaskNumber($result['projecttasknumber']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return VTigerProjectTask
	 */
	public static function findById(PDO $db,$projectTaskId) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$projectTaskId);
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
		$o=new VTigerProjectTask();
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
		$stmt->bindValue(1,$this->getProjectTaskId());
		$stmt->bindValue(2,$this->getProjectTaskName());
		$stmt->bindValue(3,$this->getProjectTaskNo());
		$stmt->bindValue(4,$this->getProjectTaskType());
		$stmt->bindValue(5,$this->getProjectTaskPriority());
		$stmt->bindValue(6,$this->getProjectTaskProgress());
		$stmt->bindValue(7,$this->getProjectTaskHours());
		$stmt->bindValue(8,$this->getStartDate());
		$stmt->bindValue(9,$this->getEndDate());
		$stmt->bindValue(10,$this->getProjectId());
		$stmt->bindValue(11,$this->getProjectTaskNumber());
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
		$stmt->bindValue(12,$this->getProjectTaskId());
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
		$stmt->bindValue(1,$this->getProjectTaskId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
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
		$def->class='VTigerProjectTask';
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
		return self::hashToDomDocument($this->toHash(), 'VTigerProjectTask');
	}

	/**
	 * get single VTigerProjectTask instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return VTigerProjectTask
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new VTigerProjectTask();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of VTigerProjectTask from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return VTigerProjectTask[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('VTigerProjectTask') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>