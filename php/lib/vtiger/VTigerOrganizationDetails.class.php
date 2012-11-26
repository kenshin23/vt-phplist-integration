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
class VTigerOrganizationDetails extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='VTigerOrganizationDetails';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='vtiger_organizationdetails';
	const SQL_INSERT='INSERT INTO `vtiger_organizationdetails` (`organization_id`,`organizationname`,`address`,`city`,`state`,`country`,`code`,`phone`,`fax`,`website`,`logoname`,`logo`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `vtiger_organizationdetails` (`organization_id`,`organizationname`,`address`,`city`,`state`,`country`,`code`,`phone`,`fax`,`website`,`logoname`,`logo`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `vtiger_organizationdetails` SET `organization_id`=?,`organizationname`=?,`address`=?,`city`=?,`state`=?,`country`=?,`code`=?,`phone`=?,`fax`=?,`website`=?,`logoname`=?,`logo`=? WHERE `organization_id`=?';
	const SQL_SELECT_PK='SELECT * FROM `vtiger_organizationdetails` WHERE `organization_id`=?';
	const SQL_DELETE_PK='DELETE FROM `vtiger_organizationdetails` WHERE `organization_id`=?';
	const FIELD_ORGANIZATION_ID=2084941362;
	const FIELD_ORGANIZATIONNAME=209112339;
	const FIELD_ADDRESS=-1203146369;
	const FIELD_CITY=1757456320;
	const FIELD_STATE=-1338343204;
	const FIELD_COUNTRY=902376737;
	const FIELD_CODE=1757461570;
	const FIELD_PHONE=-1341457991;
	const FIELD_FAX=1719262760;
	const FIELD_WEBSITE=1168881190;
	const FIELD_LOGONAME=309218955;
	const FIELD_LOGO=1757729792;
	private static $PRIMARY_KEYS=array(self::FIELD_ORGANIZATION_ID);
	private static $AUTOINCREMENT_FIELDS=array();
	private static $FIELD_NAMES=array(
		self::FIELD_ORGANIZATION_ID=>'organization_id',
		self::FIELD_ORGANIZATIONNAME=>'organizationname',
		self::FIELD_ADDRESS=>'address',
		self::FIELD_CITY=>'city',
		self::FIELD_STATE=>'state',
		self::FIELD_COUNTRY=>'country',
		self::FIELD_CODE=>'code',
		self::FIELD_PHONE=>'phone',
		self::FIELD_FAX=>'fax',
		self::FIELD_WEBSITE=>'website',
		self::FIELD_LOGONAME=>'logoname',
		self::FIELD_LOGO=>'logo');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ORGANIZATION_ID=>'organizationId',
		self::FIELD_ORGANIZATIONNAME=>'organizationName',
		self::FIELD_ADDRESS=>'address',
		self::FIELD_CITY=>'city',
		self::FIELD_STATE=>'state',
		self::FIELD_COUNTRY=>'country',
		self::FIELD_CODE=>'code',
		self::FIELD_PHONE=>'phone',
		self::FIELD_FAX=>'fax',
		self::FIELD_WEBSITE=>'website',
		self::FIELD_LOGONAME=>'logoName',
		self::FIELD_LOGO=>'logo');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ORGANIZATION_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ORGANIZATIONNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ADDRESS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CITY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_STATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_COUNTRY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CODE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PHONE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FAX=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_WEBSITE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_LOGONAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_LOGO=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ORGANIZATION_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_ORGANIZATIONNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,60,0,true),
		self::FIELD_ADDRESS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,150,0,true),
		self::FIELD_CITY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_STATE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_COUNTRY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_CODE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,30,0,true),
		self::FIELD_PHONE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,30,0,true),
		self::FIELD_FAX=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,30,0,true),
		self::FIELD_WEBSITE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_LOGONAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_LOGO=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ORGANIZATION_ID=>0,
		self::FIELD_ORGANIZATIONNAME=>null,
		self::FIELD_ADDRESS=>null,
		self::FIELD_CITY=>null,
		self::FIELD_STATE=>null,
		self::FIELD_COUNTRY=>null,
		self::FIELD_CODE=>null,
		self::FIELD_PHONE=>null,
		self::FIELD_FAX=>null,
		self::FIELD_WEBSITE=>null,
		self::FIELD_LOGONAME=>null,
		self::FIELD_LOGO=>null);
	private $organizationId;
	private $organizationName;
	private $address;
	private $city;
	private $state;
	private $country;
	private $code;
	private $phone;
	private $fax;
	private $website;
	private $logoName;
	private $logo;

	/**
	 * set value for organization_id 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @param mixed $organizationId
	 * @return VTigerOrganizationDetails
	 */
	public function &setOrganizationId($organizationId) {
		$this->notifyChanged(self::FIELD_ORGANIZATION_ID,$this->organizationId,$organizationId);
		$this->organizationId=$organizationId;
		return $this;
	}

	/**
	 * get value for organization_id 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @return mixed
	 */
	public function getOrganizationId() {
		return $this->organizationId;
	}

	/**
	 * set value for organizationname 
	 *
	 * type:VARCHAR,size:60,default:null,nullable
	 *
	 * @param mixed $organizationName
	 * @return VTigerOrganizationDetails
	 */
	public function &setOrganizationName($organizationName) {
		$this->notifyChanged(self::FIELD_ORGANIZATIONNAME,$this->organizationName,$organizationName);
		$this->organizationName=$organizationName;
		return $this;
	}

	/**
	 * get value for organizationname 
	 *
	 * type:VARCHAR,size:60,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getOrganizationName() {
		return $this->organizationName;
	}

	/**
	 * set value for address 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @param mixed $address
	 * @return VTigerOrganizationDetails
	 */
	public function &setAddress($address) {
		$this->notifyChanged(self::FIELD_ADDRESS,$this->address,$address);
		$this->address=$address;
		return $this;
	}

	/**
	 * get value for address 
	 *
	 * type:VARCHAR,size:150,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * set value for city 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $city
	 * @return VTigerOrganizationDetails
	 */
	public function &setCity($city) {
		$this->notifyChanged(self::FIELD_CITY,$this->city,$city);
		$this->city=$city;
		return $this;
	}

	/**
	 * get value for city 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * set value for state 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $state
	 * @return VTigerOrganizationDetails
	 */
	public function &setState($state) {
		$this->notifyChanged(self::FIELD_STATE,$this->state,$state);
		$this->state=$state;
		return $this;
	}

	/**
	 * get value for state 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * set value for country 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $country
	 * @return VTigerOrganizationDetails
	 */
	public function &setCountry($country) {
		$this->notifyChanged(self::FIELD_COUNTRY,$this->country,$country);
		$this->country=$country;
		return $this;
	}

	/**
	 * get value for country 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * set value for code 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @param mixed $code
	 * @return VTigerOrganizationDetails
	 */
	public function &setCode($code) {
		$this->notifyChanged(self::FIELD_CODE,$this->code,$code);
		$this->code=$code;
		return $this;
	}

	/**
	 * get value for code 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCode() {
		return $this->code;
	}

	/**
	 * set value for phone 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @param mixed $phone
	 * @return VTigerOrganizationDetails
	 */
	public function &setPhone($phone) {
		$this->notifyChanged(self::FIELD_PHONE,$this->phone,$phone);
		$this->phone=$phone;
		return $this;
	}

	/**
	 * get value for phone 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * set value for fax 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @param mixed $fax
	 * @return VTigerOrganizationDetails
	 */
	public function &setFax($fax) {
		$this->notifyChanged(self::FIELD_FAX,$this->fax,$fax);
		$this->fax=$fax;
		return $this;
	}

	/**
	 * get value for fax 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getFax() {
		return $this->fax;
	}

	/**
	 * set value for website 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $website
	 * @return VTigerOrganizationDetails
	 */
	public function &setWebsite($website) {
		$this->notifyChanged(self::FIELD_WEBSITE,$this->website,$website);
		$this->website=$website;
		return $this;
	}

	/**
	 * get value for website 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getWebsite() {
		return $this->website;
	}

	/**
	 * set value for logoname 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $logoName
	 * @return VTigerOrganizationDetails
	 */
	public function &setLogoName($logoName) {
		$this->notifyChanged(self::FIELD_LOGONAME,$this->logoName,$logoName);
		$this->logoName=$logoName;
		return $this;
	}

	/**
	 * get value for logoname 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getLogoName() {
		return $this->logoName;
	}

	/**
	 * set value for logo 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @param mixed $logo
	 * @return VTigerOrganizationDetails
	 */
	public function &setLogo($logo) {
		$this->notifyChanged(self::FIELD_LOGO,$this->logo,$logo);
		$this->logo=$logo;
		return $this;
	}

	/**
	 * get value for logo 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getLogo() {
		return $this->logo;
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
			self::FIELD_ORGANIZATION_ID=>$this->getOrganizationId(),
			self::FIELD_ORGANIZATIONNAME=>$this->getOrganizationName(),
			self::FIELD_ADDRESS=>$this->getAddress(),
			self::FIELD_CITY=>$this->getCity(),
			self::FIELD_STATE=>$this->getState(),
			self::FIELD_COUNTRY=>$this->getCountry(),
			self::FIELD_CODE=>$this->getCode(),
			self::FIELD_PHONE=>$this->getPhone(),
			self::FIELD_FAX=>$this->getFax(),
			self::FIELD_WEBSITE=>$this->getWebsite(),
			self::FIELD_LOGONAME=>$this->getLogoName(),
			self::FIELD_LOGO=>$this->getLogo());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_ORGANIZATION_ID=>$this->getOrganizationId());
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
	 * Match by attributes of passed example instance and return matched rows as an array of VTigerOrganizationDetails instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param VTigerOrganizationDetails $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return VTigerOrganizationDetails[]
	 */
	public static function findByExample(PDO $db,VTigerOrganizationDetails $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of VTigerOrganizationDetails instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return VTigerOrganizationDetails[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `vtiger_organizationdetails`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of VTigerOrganizationDetails instances
	 *
	 * @param PDOStatement $stmt
	 * @return VTigerOrganizationDetails[]
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
	 * returns the result as an array of VTigerOrganizationDetails instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return VTigerOrganizationDetails[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new VTigerOrganizationDetails();
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
	 * Execute select query and return matched rows as an array of VTigerOrganizationDetails instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return VTigerOrganizationDetails[]
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
		$sql='DELETE FROM `vtiger_organizationdetails`'
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
		$this->setOrganizationId($result['organization_id']);
		$this->setOrganizationName($result['organizationname']);
		$this->setAddress($result['address']);
		$this->setCity($result['city']);
		$this->setState($result['state']);
		$this->setCountry($result['country']);
		$this->setCode($result['code']);
		$this->setPhone($result['phone']);
		$this->setFax($result['fax']);
		$this->setWebsite($result['website']);
		$this->setLogoName($result['logoname']);
		$this->setLogo($result['logo']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return VTigerOrganizationDetails
	 */
	public static function findById(PDO $db,$organizationId) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$organizationId);
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
		$o=new VTigerOrganizationDetails();
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
		$stmt->bindValue(1,$this->getOrganizationId());
		$stmt->bindValue(2,$this->getOrganizationName());
		$stmt->bindValue(3,$this->getAddress());
		$stmt->bindValue(4,$this->getCity());
		$stmt->bindValue(5,$this->getState());
		$stmt->bindValue(6,$this->getCountry());
		$stmt->bindValue(7,$this->getCode());
		$stmt->bindValue(8,$this->getPhone());
		$stmt->bindValue(9,$this->getFax());
		$stmt->bindValue(10,$this->getWebsite());
		$stmt->bindValue(11,$this->getLogoName());
		$stmt->bindValue(12,$this->getLogo());
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
		$stmt->bindValue(13,$this->getOrganizationId());
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
		$stmt->bindValue(1,$this->getOrganizationId());
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
		$def->class='VTigerOrganizationDetails';
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
		return self::hashToDomDocument($this->toHash(), 'VTigerOrganizationDetails');
	}

	/**
	 * get single VTigerOrganizationDetails instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return VTigerOrganizationDetails
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new VTigerOrganizationDetails();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of VTigerOrganizationDetails from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return VTigerOrganizationDetails[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('VTigerOrganizationDetails') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>