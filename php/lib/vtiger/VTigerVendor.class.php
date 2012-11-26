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
class VTigerVendor extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='VTigerVendor';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='vtiger_vendor';
	const SQL_INSERT='INSERT INTO `vtiger_vendor` (`vendorid`,`vendor_no`,`vendorname`,`phone`,`email`,`website`,`glacct`,`category`,`street`,`city`,`state`,`pobox`,`postalcode`,`country`,`description`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `vtiger_vendor` (`vendorid`,`vendor_no`,`vendorname`,`phone`,`email`,`website`,`glacct`,`category`,`street`,`city`,`state`,`pobox`,`postalcode`,`country`,`description`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `vtiger_vendor` SET `vendorid`=?,`vendor_no`=?,`vendorname`=?,`phone`=?,`email`=?,`website`=?,`glacct`=?,`category`=?,`street`=?,`city`=?,`state`=?,`pobox`=?,`postalcode`=?,`country`=?,`description`=? WHERE `vendorid`=?';
	const SQL_SELECT_PK='SELECT * FROM `vtiger_vendor` WHERE `vendorid`=?';
	const SQL_DELETE_PK='DELETE FROM `vtiger_vendor` WHERE `vendorid`=?';
	const FIELD_VENDORID=700394515;
	const FIELD_VENDOR_NO=237384296;
	const FIELD_VENDORNAME=-1230587005;
	const FIELD_PHONE=1532866494;
	const FIELD_EMAIL=1522843116;
	const FIELD_WEBSITE=1730739947;
	const FIELD_GLACCT=19825192;
	const FIELD_CATEGORY=-1430820690;
	const FIELD_STREET=371271603;
	const FIELD_CITY=49061147;
	const FIELD_STATE=1535981281;
	const FIELD_POBOX=1533062588;
	const FIELD_POSTALCODE=86428904;
	const FIELD_COUNTRY=1464235494;
	const FIELD_DESCRIPTION=-1290995124;
	private static $PRIMARY_KEYS=array(self::FIELD_VENDORID);
	private static $AUTOINCREMENT_FIELDS=array();
	private static $FIELD_NAMES=array(
		self::FIELD_VENDORID=>'vendorid',
		self::FIELD_VENDOR_NO=>'vendor_no',
		self::FIELD_VENDORNAME=>'vendorname',
		self::FIELD_PHONE=>'phone',
		self::FIELD_EMAIL=>'email',
		self::FIELD_WEBSITE=>'website',
		self::FIELD_GLACCT=>'glacct',
		self::FIELD_CATEGORY=>'category',
		self::FIELD_STREET=>'street',
		self::FIELD_CITY=>'city',
		self::FIELD_STATE=>'state',
		self::FIELD_POBOX=>'pobox',
		self::FIELD_POSTALCODE=>'postalcode',
		self::FIELD_COUNTRY=>'country',
		self::FIELD_DESCRIPTION=>'description');
	private static $PROPERTY_NAMES=array(
		self::FIELD_VENDORID=>'vendorId',
		self::FIELD_VENDOR_NO=>'vendorNo',
		self::FIELD_VENDORNAME=>'vendorName',
		self::FIELD_PHONE=>'phone',
		self::FIELD_EMAIL=>'email',
		self::FIELD_WEBSITE=>'website',
		self::FIELD_GLACCT=>'glAcct',
		self::FIELD_CATEGORY=>'category',
		self::FIELD_STREET=>'street',
		self::FIELD_CITY=>'city',
		self::FIELD_STATE=>'state',
		self::FIELD_POBOX=>'poBox',
		self::FIELD_POSTALCODE=>'postalCode',
		self::FIELD_COUNTRY=>'country',
		self::FIELD_DESCRIPTION=>'description');
	private static $PROPERTY_TYPES=array(
		self::FIELD_VENDORID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_VENDOR_NO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_VENDORNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PHONE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_EMAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_WEBSITE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_GLACCT=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CATEGORY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_STREET=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CITY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_STATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_POBOX=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_POSTALCODE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_COUNTRY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DESCRIPTION=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_VENDORID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_VENDOR_NO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,false),
		self::FIELD_VENDORNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_PHONE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_EMAIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_WEBSITE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_GLACCT=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,200,0,true),
		self::FIELD_CATEGORY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_STREET=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,true),
		self::FIELD_CITY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,30,0,true),
		self::FIELD_STATE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,30,0,true),
		self::FIELD_POBOX=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,30,0,true),
		self::FIELD_POSTALCODE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_COUNTRY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_DESCRIPTION=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_VENDORID=>0,
		self::FIELD_VENDOR_NO=>'',
		self::FIELD_VENDORNAME=>null,
		self::FIELD_PHONE=>null,
		self::FIELD_EMAIL=>null,
		self::FIELD_WEBSITE=>null,
		self::FIELD_GLACCT=>null,
		self::FIELD_CATEGORY=>null,
		self::FIELD_STREET=>null,
		self::FIELD_CITY=>null,
		self::FIELD_STATE=>null,
		self::FIELD_POBOX=>null,
		self::FIELD_POSTALCODE=>null,
		self::FIELD_COUNTRY=>null,
		self::FIELD_DESCRIPTION=>null);
	private $vendorId;
	private $vendorNo;
	private $vendorName;
	private $phone;
	private $email;
	private $website;
	private $glAcct;
	private $category;
	private $street;
	private $city;
	private $state;
	private $poBox;
	private $postalCode;
	private $country;
	private $description;

	/**
	 * set value for vendorid 
	 *
	 * type:INT,size:10,default:0,primary,unique
	 *
	 * @param mixed $vendorId
	 * @return VTigerVendor
	 */
	public function &setVendorId($vendorId) {
		$this->notifyChanged(self::FIELD_VENDORID,$this->vendorId,$vendorId);
		$this->vendorId=$vendorId;
		return $this;
	}

	/**
	 * get value for vendorid 
	 *
	 * type:INT,size:10,default:0,primary,unique
	 *
	 * @return mixed
	 */
	public function getVendorId() {
		return $this->vendorId;
	}

	/**
	 * set value for vendor_no 
	 *
	 * type:VARCHAR,size:100,default:null
	 *
	 * @param mixed $vendorNo
	 * @return VTigerVendor
	 */
	public function &setVendorNo($vendorNo) {
		$this->notifyChanged(self::FIELD_VENDOR_NO,$this->vendorNo,$vendorNo);
		$this->vendorNo=$vendorNo;
		return $this;
	}

	/**
	 * get value for vendor_no 
	 *
	 * type:VARCHAR,size:100,default:null
	 *
	 * @return mixed
	 */
	public function getVendorNo() {
		return $this->vendorNo;
	}

	/**
	 * set value for vendorname 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $vendorName
	 * @return VTigerVendor
	 */
	public function &setVendorName($vendorName) {
		$this->notifyChanged(self::FIELD_VENDORNAME,$this->vendorName,$vendorName);
		$this->vendorName=$vendorName;
		return $this;
	}

	/**
	 * get value for vendorname 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getVendorName() {
		return $this->vendorName;
	}

	/**
	 * set value for phone 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $phone
	 * @return VTigerVendor
	 */
	public function &setPhone($phone) {
		$this->notifyChanged(self::FIELD_PHONE,$this->phone,$phone);
		$this->phone=$phone;
		return $this;
	}

	/**
	 * get value for phone 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * set value for email 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $email
	 * @return VTigerVendor
	 */
	public function &setEmail($email) {
		$this->notifyChanged(self::FIELD_EMAIL,$this->email,$email);
		$this->email=$email;
		return $this;
	}

	/**
	 * get value for email 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * set value for website 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $website
	 * @return VTigerVendor
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
	 * set value for glacct 
	 *
	 * type:VARCHAR,size:200,default:null,nullable
	 *
	 * @param mixed $glAcct
	 * @return VTigerVendor
	 */
	public function &setGlAcct($glAcct) {
		$this->notifyChanged(self::FIELD_GLACCT,$this->glAcct,$glAcct);
		$this->glAcct=$glAcct;
		return $this;
	}

	/**
	 * get value for glacct 
	 *
	 * type:VARCHAR,size:200,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getGlAcct() {
		return $this->glAcct;
	}

	/**
	 * set value for category 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $category
	 * @return VTigerVendor
	 */
	public function &setCategory($category) {
		$this->notifyChanged(self::FIELD_CATEGORY,$this->category,$category);
		$this->category=$category;
		return $this;
	}

	/**
	 * get value for category 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * set value for street 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @param mixed $street
	 * @return VTigerVendor
	 */
	public function &setStreet($street) {
		$this->notifyChanged(self::FIELD_STREET,$this->street,$street);
		$this->street=$street;
		return $this;
	}

	/**
	 * get value for street 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getStreet() {
		return $this->street;
	}

	/**
	 * set value for city 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @param mixed $city
	 * @return VTigerVendor
	 */
	public function &setCity($city) {
		$this->notifyChanged(self::FIELD_CITY,$this->city,$city);
		$this->city=$city;
		return $this;
	}

	/**
	 * get value for city 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * set value for state 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @param mixed $state
	 * @return VTigerVendor
	 */
	public function &setState($state) {
		$this->notifyChanged(self::FIELD_STATE,$this->state,$state);
		$this->state=$state;
		return $this;
	}

	/**
	 * get value for state 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * set value for pobox 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @param mixed $poBox
	 * @return VTigerVendor
	 */
	public function &setPoBox($poBox) {
		$this->notifyChanged(self::FIELD_POBOX,$this->poBox,$poBox);
		$this->poBox=$poBox;
		return $this;
	}

	/**
	 * get value for pobox 
	 *
	 * type:VARCHAR,size:30,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPoBox() {
		return $this->poBox;
	}

	/**
	 * set value for postalcode 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $postalCode
	 * @return VTigerVendor
	 */
	public function &setPostalCode($postalCode) {
		$this->notifyChanged(self::FIELD_POSTALCODE,$this->postalCode,$postalCode);
		$this->postalCode=$postalCode;
		return $this;
	}

	/**
	 * get value for postalcode 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPostalCode() {
		return $this->postalCode;
	}

	/**
	 * set value for country 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $country
	 * @return VTigerVendor
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
	 * set value for description 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @param mixed $description
	 * @return VTigerVendor
	 */
	public function &setDescription($description) {
		$this->notifyChanged(self::FIELD_DESCRIPTION,$this->description,$description);
		$this->description=$description;
		return $this;
	}

	/**
	 * get value for description 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getDescription() {
		return $this->description;
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
			self::FIELD_VENDORID=>$this->getVendorId(),
			self::FIELD_VENDOR_NO=>$this->getVendorNo(),
			self::FIELD_VENDORNAME=>$this->getVendorName(),
			self::FIELD_PHONE=>$this->getPhone(),
			self::FIELD_EMAIL=>$this->getEmail(),
			self::FIELD_WEBSITE=>$this->getWebsite(),
			self::FIELD_GLACCT=>$this->getGlAcct(),
			self::FIELD_CATEGORY=>$this->getCategory(),
			self::FIELD_STREET=>$this->getStreet(),
			self::FIELD_CITY=>$this->getCity(),
			self::FIELD_STATE=>$this->getState(),
			self::FIELD_POBOX=>$this->getPoBox(),
			self::FIELD_POSTALCODE=>$this->getPostalCode(),
			self::FIELD_COUNTRY=>$this->getCountry(),
			self::FIELD_DESCRIPTION=>$this->getDescription());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_VENDORID=>$this->getVendorId());
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
	 * Match by attributes of passed example instance and return matched rows as an array of VTigerVendor instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param VTigerVendor $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return VTigerVendor[]
	 */
	public static function findByExample(PDO $db,VTigerVendor $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of VTigerVendor instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return VTigerVendor[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `vtiger_vendor`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of VTigerVendor instances
	 *
	 * @param PDOStatement $stmt
	 * @return VTigerVendor[]
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
	 * returns the result as an array of VTigerVendor instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return VTigerVendor[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new VTigerVendor();
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
	 * Execute select query and return matched rows as an array of VTigerVendor instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return VTigerVendor[]
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
		$sql='DELETE FROM `vtiger_vendor`'
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
		$this->setVendorId($result['vendorid']);
		$this->setVendorNo($result['vendor_no']);
		$this->setVendorName($result['vendorname']);
		$this->setPhone($result['phone']);
		$this->setEmail($result['email']);
		$this->setWebsite($result['website']);
		$this->setGlAcct($result['glacct']);
		$this->setCategory($result['category']);
		$this->setStreet($result['street']);
		$this->setCity($result['city']);
		$this->setState($result['state']);
		$this->setPoBox($result['pobox']);
		$this->setPostalCode($result['postalcode']);
		$this->setCountry($result['country']);
		$this->setDescription($result['description']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return VTigerVendor
	 */
	public static function findById(PDO $db,$vendorId) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$vendorId);
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
		$o=new VTigerVendor();
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
		$stmt->bindValue(1,$this->getVendorId());
		$stmt->bindValue(2,$this->getVendorNo());
		$stmt->bindValue(3,$this->getVendorName());
		$stmt->bindValue(4,$this->getPhone());
		$stmt->bindValue(5,$this->getEmail());
		$stmt->bindValue(6,$this->getWebsite());
		$stmt->bindValue(7,$this->getGlAcct());
		$stmt->bindValue(8,$this->getCategory());
		$stmt->bindValue(9,$this->getStreet());
		$stmt->bindValue(10,$this->getCity());
		$stmt->bindValue(11,$this->getState());
		$stmt->bindValue(12,$this->getPoBox());
		$stmt->bindValue(13,$this->getPostalCode());
		$stmt->bindValue(14,$this->getCountry());
		$stmt->bindValue(15,$this->getDescription());
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
		$stmt->bindValue(16,$this->getVendorId());
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
		$stmt->bindValue(1,$this->getVendorId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch VTigerPurchaseOrder's which this VTigerVendor references.
	 * `vtiger_vendor`.`vendorid` -> `vtiger_purchaseorder`.`vendorid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerPurchaseOrder[]
	 */
	public function fetchVTigerPurchaseOrderCollection(PDO $db, $sort=null) {
		$filter=array(VTigerPurchaseOrder::FIELD_VENDORID=>$this->getVendorId());
		return VTigerPurchaseOrder::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch VTigerSalesOrder's which this VTigerVendor references.
	 * `vtiger_vendor`.`vendorid` -> `vtiger_salesorder`.`vendorid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerSalesOrder[]
	 */
	public function fetchVTigerSalesOrderCollection(PDO $db, $sort=null) {
		$filter=array(VTigerSalesOrder::FIELD_VENDORID=>$this->getVendorId());
		return VTigerSalesOrder::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch VTigerVendorCf's which this VTigerVendor references.
	 * `vtiger_vendor`.`vendorid` -> `vtiger_vendorcf`.`vendorid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerVendorCf[]
	 */
	public function fetchVTigerVendorCfCollection(PDO $db, $sort=null) {
		$filter=array(VTigerVendorCf::FIELD_VENDORID=>$this->getVendorId());
		return VTigerVendorCf::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch VTigerVendorContactRel's which this VTigerVendor references.
	 * `vtiger_vendor`.`vendorid` -> `vtiger_vendorcontactrel`.`vendorid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerVendorContactRel[]
	 */
	public function fetchVTigerVendorContactRelCollection(PDO $db, $sort=null) {
		$filter=array(VTigerVendorContactRel::FIELD_VENDORID=>$this->getVendorId());
		return VTigerVendorContactRel::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch VTigerCRmEntity which references this VTigerVendor. Will return null in case reference is invalid.
	 * `vtiger_vendor`.`vendorid` -> `vtiger_crmentity`.`crmid`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return VTigerCRmEntity
	 */
	public function fetchVTigerCRmEntity(PDO $db, $sort=null) {
		$filter=array(VTigerCRmEntity::FIELD_CRMID=>$this->getVendorId());
		$result=VTigerCRmEntity::findByFilter($db, $filter, true, $sort);
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
		$def->class='VTigerVendor';
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
		return self::hashToDomDocument($this->toHash(), 'VTigerVendor');
	}

	/**
	 * get single VTigerVendor instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return VTigerVendor
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new VTigerVendor();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of VTigerVendor from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return VTigerVendor[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('VTigerVendor') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>