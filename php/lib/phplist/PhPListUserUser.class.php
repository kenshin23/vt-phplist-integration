<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class PhPListUserUser extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='PhPListUserUser';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='phplist_user_user';
	const SQL_INSERT='INSERT INTO `phplist_user_user` (`id`,`email`,`confirmed`,`blacklisted`,`bouncecount`,`entered`,`modified`,`uniqid`,`htmlemail`,`subscribepage`,`rssfrequency`,`password`,`passwordchanged`,`disabled`,`extradata`,`foreignkey`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `phplist_user_user` (`email`,`confirmed`,`blacklisted`,`bouncecount`,`entered`,`modified`,`uniqid`,`htmlemail`,`subscribepage`,`rssfrequency`,`password`,`passwordchanged`,`disabled`,`extradata`,`foreignkey`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `phplist_user_user` SET `id`=?,`email`=?,`confirmed`=?,`blacklisted`=?,`bouncecount`=?,`entered`=?,`modified`=?,`uniqid`=?,`htmlemail`=?,`subscribepage`=?,`rssfrequency`=?,`password`=?,`passwordchanged`=?,`disabled`=?,`extradata`=?,`foreignkey`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `phplist_user_user` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `phplist_user_user` WHERE `id`=?';
	const FIELD_ID=-80779981;
	const FIELD_EMAIL=-1338057596;
	const FIELD_CONFIRMED=-695459769;
	const FIELD_BLACKLISTED=-1836800668;
	const FIELD_BOUNCECOUNT=-940805521;
	const FIELD_ENTERED=-1632062369;
	const FIELD_MODIFIED=-1858934559;
	const FIELD_UNIQID=1929123444;
	const FIELD_HTMLEMAIL=-1738263623;
	const FIELD_SUBSCRIBEPAGE=-1464749119;
	const FIELD_RSSFREQUENCY=-1476697758;
	const FIELD_PASSWORD=-26435405;
	const FIELD_PASSWORDCHANGED=-1164107103;
	const FIELD_DISABLED=-972480364;
	const FIELD_EXTRADATA=-144189278;
	const FIELD_FOREIGNKEY=1104690467;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_EMAIL=>'email',
		self::FIELD_CONFIRMED=>'confirmed',
		self::FIELD_BLACKLISTED=>'blacklisted',
		self::FIELD_BOUNCECOUNT=>'bouncecount',
		self::FIELD_ENTERED=>'entered',
		self::FIELD_MODIFIED=>'modified',
		self::FIELD_UNIQID=>'uniqid',
		self::FIELD_HTMLEMAIL=>'htmlemail',
		self::FIELD_SUBSCRIBEPAGE=>'subscribepage',
		self::FIELD_RSSFREQUENCY=>'rssfrequency',
		self::FIELD_PASSWORD=>'password',
		self::FIELD_PASSWORDCHANGED=>'passwordchanged',
		self::FIELD_DISABLED=>'disabled',
		self::FIELD_EXTRADATA=>'extradata',
		self::FIELD_FOREIGNKEY=>'foreignkey');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_EMAIL=>'email',
		self::FIELD_CONFIRMED=>'confirmed',
		self::FIELD_BLACKLISTED=>'blacklisted',
		self::FIELD_BOUNCECOUNT=>'bounceCount',
		self::FIELD_ENTERED=>'entered',
		self::FIELD_MODIFIED=>'modified',
		self::FIELD_UNIQID=>'uniQId',
		self::FIELD_HTMLEMAIL=>'htmlEmail',
		self::FIELD_SUBSCRIBEPAGE=>'subscribePage',
		self::FIELD_RSSFREQUENCY=>'rSsFrequency',
		self::FIELD_PASSWORD=>'password',
		self::FIELD_PASSWORDCHANGED=>'passwordChanged',
		self::FIELD_DISABLED=>'disabled',
		self::FIELD_EXTRADATA=>'extraData',
		self::FIELD_FOREIGNKEY=>'foreignKey');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_EMAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CONFIRMED=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_BLACKLISTED=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_BOUNCECOUNT=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ENTERED=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_MODIFIED=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_UNIQID=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_HTMLEMAIL=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_SUBSCRIBEPAGE=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_RSSFREQUENCY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PASSWORD=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PASSWORDCHANGED=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DISABLED=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_EXTRADATA=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FOREIGNKEY=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_EMAIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_CONFIRMED=>array(Db2PhpEntity::JDBC_TYPE_TINYINT,3,0,true),
		self::FIELD_BLACKLISTED=>array(Db2PhpEntity::JDBC_TYPE_TINYINT,3,0,true),
		self::FIELD_BOUNCECOUNT=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_ENTERED=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_MODIFIED=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,false),
		self::FIELD_UNIQID=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_HTMLEMAIL=>array(Db2PhpEntity::JDBC_TYPE_TINYINT,3,0,true),
		self::FIELD_SUBSCRIBEPAGE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_RSSFREQUENCY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_PASSWORD=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_PASSWORDCHANGED=>array(Db2PhpEntity::JDBC_TYPE_DATE,10,0,true),
		self::FIELD_DISABLED=>array(Db2PhpEntity::JDBC_TYPE_TINYINT,3,0,true),
		self::FIELD_EXTRADATA=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,true),
		self::FIELD_FOREIGNKEY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_EMAIL=>'',
		self::FIELD_CONFIRMED=>0,
		self::FIELD_BLACKLISTED=>0,
		self::FIELD_BOUNCECOUNT=>0,
		self::FIELD_ENTERED=>null,
		self::FIELD_MODIFIED=>'CURRENT_TIMESTAMP',
		self::FIELD_UNIQID=>null,
		self::FIELD_HTMLEMAIL=>0,
		self::FIELD_SUBSCRIBEPAGE=>null,
		self::FIELD_RSSFREQUENCY=>null,
		self::FIELD_PASSWORD=>null,
		self::FIELD_PASSWORDCHANGED=>null,
		self::FIELD_DISABLED=>0,
		self::FIELD_EXTRADATA=>null,
		self::FIELD_FOREIGNKEY=>null);
	private $id;
	private $email;
	private $confirmed;
	private $blacklisted;
	private $bounceCount;
	private $entered;
	private $modified;
	private $uniQId;
	private $htmlEmail;
	private $subscribePage;
	private $rSsFrequency;
	private $password;
	private $passwordChanged;
	private $disabled;
	private $extraData;
	private $foreignKey;

	/**
	 * set value for id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return PhPListUserUser
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
	 * set value for email 
	 *
	 * type:VARCHAR,size:255,default:null,index
	 *
	 * @param mixed $email
	 * @return PhPListUserUser
	 */
	public function &setEmail($email) {
		$this->notifyChanged(self::FIELD_EMAIL,$this->email,$email);
		$this->email=$email;
		return $this;
	}

	/**
	 * get value for email 
	 *
	 * type:VARCHAR,size:255,default:null,index
	 *
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * set value for confirmed 
	 *
	 * type:TINYINT,size:3,default:0,nullable
	 *
	 * @param mixed $confirmed
	 * @return PhPListUserUser
	 */
	public function &setConfirmed($confirmed) {
		$this->notifyChanged(self::FIELD_CONFIRMED,$this->confirmed,$confirmed);
		$this->confirmed=$confirmed;
		return $this;
	}

	/**
	 * get value for confirmed 
	 *
	 * type:TINYINT,size:3,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getConfirmed() {
		return $this->confirmed;
	}

	/**
	 * set value for blacklisted 
	 *
	 * type:TINYINT,size:3,default:0,nullable
	 *
	 * @param mixed $blacklisted
	 * @return PhPListUserUser
	 */
	public function &setBlacklisted($blacklisted) {
		$this->notifyChanged(self::FIELD_BLACKLISTED,$this->blacklisted,$blacklisted);
		$this->blacklisted=$blacklisted;
		return $this;
	}

	/**
	 * get value for blacklisted 
	 *
	 * type:TINYINT,size:3,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getBlacklisted() {
		return $this->blacklisted;
	}

	/**
	 * set value for bouncecount 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @param mixed $bounceCount
	 * @return PhPListUserUser
	 */
	public function &setBounceCount($bounceCount) {
		$this->notifyChanged(self::FIELD_BOUNCECOUNT,$this->bounceCount,$bounceCount);
		$this->bounceCount=$bounceCount;
		return $this;
	}

	/**
	 * get value for bouncecount 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getBounceCount() {
		return $this->bounceCount;
	}

	/**
	 * set value for entered 
	 *
	 * type:DATETIME,size:19,default:null,index,nullable
	 *
	 * @param mixed $entered
	 * @return PhPListUserUser
	 */
	public function &setEntered($entered) {
		$this->notifyChanged(self::FIELD_ENTERED,$this->entered,$entered);
		$this->entered=$entered;
		return $this;
	}

	/**
	 * get value for entered 
	 *
	 * type:DATETIME,size:19,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getEntered() {
		return $this->entered;
	}

	/**
	 * set value for modified 
	 *
	 * type:TIMESTAMP,size:19,default:CURRENT_TIMESTAMP
	 *
	 * @param mixed $modified
	 * @return PhPListUserUser
	 */
	public function &setModified($modified) {
		$this->notifyChanged(self::FIELD_MODIFIED,$this->modified,$modified);
		$this->modified=$modified;
		return $this;
	}

	/**
	 * get value for modified 
	 *
	 * type:TIMESTAMP,size:19,default:CURRENT_TIMESTAMP
	 *
	 * @return mixed
	 */
	public function getModified() {
		return $this->modified;
	}

	/**
	 * set value for uniqid 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $uniQId
	 * @return PhPListUserUser
	 */
	public function &setUniQId($uniQId) {
		$this->notifyChanged(self::FIELD_UNIQID,$this->uniQId,$uniQId);
		$this->uniQId=$uniQId;
		return $this;
	}

	/**
	 * get value for uniqid 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getUniQId() {
		return $this->uniQId;
	}

	/**
	 * set value for htmlemail 
	 *
	 * type:TINYINT,size:3,default:0,nullable
	 *
	 * @param mixed $htmlEmail
	 * @return PhPListUserUser
	 */
	public function &setHtmlEmail($htmlEmail) {
		$this->notifyChanged(self::FIELD_HTMLEMAIL,$this->htmlEmail,$htmlEmail);
		$this->htmlEmail=$htmlEmail;
		return $this;
	}

	/**
	 * get value for htmlemail 
	 *
	 * type:TINYINT,size:3,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getHtmlEmail() {
		return $this->htmlEmail;
	}

	/**
	 * set value for subscribepage 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $subscribePage
	 * @return PhPListUserUser
	 */
	public function &setSubscribePage($subscribePage) {
		$this->notifyChanged(self::FIELD_SUBSCRIBEPAGE,$this->subscribePage,$subscribePage);
		$this->subscribePage=$subscribePage;
		return $this;
	}

	/**
	 * get value for subscribepage 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getSubscribePage() {
		return $this->subscribePage;
	}

	/**
	 * set value for rssfrequency 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $rSsFrequency
	 * @return PhPListUserUser
	 */
	public function &setRSsFrequency($rSsFrequency) {
		$this->notifyChanged(self::FIELD_RSSFREQUENCY,$this->rSsFrequency,$rSsFrequency);
		$this->rSsFrequency=$rSsFrequency;
		return $this;
	}

	/**
	 * get value for rssfrequency 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getRSsFrequency() {
		return $this->rSsFrequency;
	}

	/**
	 * set value for password 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @param mixed $password
	 * @return PhPListUserUser
	 */
	public function &setPassword($password) {
		$this->notifyChanged(self::FIELD_PASSWORD,$this->password,$password);
		$this->password=$password;
		return $this;
	}

	/**
	 * get value for password 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * set value for passwordchanged 
	 *
	 * type:DATE,size:10,default:null,nullable
	 *
	 * @param mixed $passwordChanged
	 * @return PhPListUserUser
	 */
	public function &setPasswordChanged($passwordChanged) {
		$this->notifyChanged(self::FIELD_PASSWORDCHANGED,$this->passwordChanged,$passwordChanged);
		$this->passwordChanged=$passwordChanged;
		return $this;
	}

	/**
	 * get value for passwordchanged 
	 *
	 * type:DATE,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPasswordChanged() {
		return $this->passwordChanged;
	}

	/**
	 * set value for disabled 
	 *
	 * type:TINYINT,size:3,default:0,nullable
	 *
	 * @param mixed $disabled
	 * @return PhPListUserUser
	 */
	public function &setDisabled($disabled) {
		$this->notifyChanged(self::FIELD_DISABLED,$this->disabled,$disabled);
		$this->disabled=$disabled;
		return $this;
	}

	/**
	 * get value for disabled 
	 *
	 * type:TINYINT,size:3,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getDisabled() {
		return $this->disabled;
	}

	/**
	 * set value for extradata 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @param mixed $extraData
	 * @return PhPListUserUser
	 */
	public function &setExtraData($extraData) {
		$this->notifyChanged(self::FIELD_EXTRADATA,$this->extraData,$extraData);
		$this->extraData=$extraData;
		return $this;
	}

	/**
	 * get value for extradata 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getExtraData() {
		return $this->extraData;
	}

	/**
	 * set value for foreignkey 
	 *
	 * type:VARCHAR,size:100,default:null,index,nullable
	 *
	 * @param mixed $foreignKey
	 * @return PhPListUserUser
	 */
	public function &setForeignKey($foreignKey) {
		$this->notifyChanged(self::FIELD_FOREIGNKEY,$this->foreignKey,$foreignKey);
		$this->foreignKey=$foreignKey;
		return $this;
	}

	/**
	 * get value for foreignkey 
	 *
	 * type:VARCHAR,size:100,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getForeignKey() {
		return $this->foreignKey;
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
			self::FIELD_EMAIL=>$this->getEmail(),
			self::FIELD_CONFIRMED=>$this->getConfirmed(),
			self::FIELD_BLACKLISTED=>$this->getBlacklisted(),
			self::FIELD_BOUNCECOUNT=>$this->getBounceCount(),
			self::FIELD_ENTERED=>$this->getEntered(),
			self::FIELD_MODIFIED=>$this->getModified(),
			self::FIELD_UNIQID=>$this->getUniQId(),
			self::FIELD_HTMLEMAIL=>$this->getHtmlEmail(),
			self::FIELD_SUBSCRIBEPAGE=>$this->getSubscribePage(),
			self::FIELD_RSSFREQUENCY=>$this->getRSsFrequency(),
			self::FIELD_PASSWORD=>$this->getPassword(),
			self::FIELD_PASSWORDCHANGED=>$this->getPasswordChanged(),
			self::FIELD_DISABLED=>$this->getDisabled(),
			self::FIELD_EXTRADATA=>$this->getExtraData(),
			self::FIELD_FOREIGNKEY=>$this->getForeignKey());
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
	 * Match by attributes of passed example instance and return matched rows as an array of PhPListUserUser instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param PhPListUserUser $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PhPListUserUser[]
	 */
	public static function findByExample(PDO $db,PhPListUserUser $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of PhPListUserUser instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PhPListUserUser[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `phplist_user_user`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of PhPListUserUser instances
	 *
	 * @param PDOStatement $stmt
	 * @return PhPListUserUser[]
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
	 * returns the result as an array of PhPListUserUser instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return PhPListUserUser[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new PhPListUserUser();
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
	 * Execute select query and return matched rows as an array of PhPListUserUser instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return PhPListUserUser[]
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
		$sql='DELETE FROM `phplist_user_user`'
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
		$this->setEmail($result['email']);
		$this->setConfirmed($result['confirmed']);
		$this->setBlacklisted($result['blacklisted']);
		$this->setBounceCount($result['bouncecount']);
		$this->setEntered($result['entered']);
		$this->setModified($result['modified']);
		$this->setUniQId($result['uniqid']);
		$this->setHtmlEmail($result['htmlemail']);
		$this->setSubscribePage($result['subscribepage']);
		$this->setRSsFrequency($result['rssfrequency']);
		$this->setPassword($result['password']);
		$this->setPasswordChanged($result['passwordchanged']);
		$this->setDisabled($result['disabled']);
		$this->setExtraData($result['extradata']);
		$this->setForeignKey($result['foreignkey']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return PhPListUserUser
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
		$o=new PhPListUserUser();
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
		$stmt->bindValue(2,$this->getEmail());
		$stmt->bindValue(3,$this->getConfirmed());
		$stmt->bindValue(4,$this->getBlacklisted());
		$stmt->bindValue(5,$this->getBounceCount());
		$stmt->bindValue(6,$this->getEntered());
		$stmt->bindValue(7,$this->getModified());
		$stmt->bindValue(8,$this->getUniQId());
		$stmt->bindValue(9,$this->getHtmlEmail());
		$stmt->bindValue(10,$this->getSubscribePage());
		$stmt->bindValue(11,$this->getRSsFrequency());
		$stmt->bindValue(12,$this->getPassword());
		$stmt->bindValue(13,$this->getPasswordChanged());
		$stmt->bindValue(14,$this->getDisabled());
		$stmt->bindValue(15,$this->getExtraData());
		$stmt->bindValue(16,$this->getForeignKey());
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
			$stmt->bindValue(1,$this->getEmail());
			$stmt->bindValue(2,$this->getConfirmed());
			$stmt->bindValue(3,$this->getBlacklisted());
			$stmt->bindValue(4,$this->getBounceCount());
			$stmt->bindValue(5,$this->getEntered());
			$stmt->bindValue(6,$this->getModified());
			$stmt->bindValue(7,$this->getUniQId());
			$stmt->bindValue(8,$this->getHtmlEmail());
			$stmt->bindValue(9,$this->getSubscribePage());
			$stmt->bindValue(10,$this->getRSsFrequency());
			$stmt->bindValue(11,$this->getPassword());
			$stmt->bindValue(12,$this->getPasswordChanged());
			$stmt->bindValue(13,$this->getDisabled());
			$stmt->bindValue(14,$this->getExtraData());
			$stmt->bindValue(15,$this->getForeignKey());
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
		$stmt->bindValue(17,$this->getId());
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
		$def->class='PhPListUserUser';
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
		return self::hashToDomDocument($this->toHash(), 'PhPListUserUser');
	}

	/**
	 * get single PhPListUserUser instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return PhPListUserUser
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new PhPListUserUser();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of PhPListUserUser from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return PhPListUserUser[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('PhPListUserUser') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>