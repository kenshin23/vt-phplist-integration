<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class PhPListAdmin extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='PhPListAdmin';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='phplist_admin';
	const SQL_INSERT='INSERT INTO `phplist_admin` (`id`,`loginname`,`namelc`,`email`,`created`,`modified`,`modifiedby`,`password`,`passwordchanged`,`superuser`,`disabled`) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `phplist_admin` (`loginname`,`namelc`,`email`,`created`,`modified`,`modifiedby`,`password`,`passwordchanged`,`superuser`,`disabled`) VALUES (?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `phplist_admin` SET `id`=?,`loginname`=?,`namelc`=?,`email`=?,`created`=?,`modified`=?,`modifiedby`=?,`password`=?,`passwordchanged`=?,`superuser`=?,`disabled`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `phplist_admin` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `phplist_admin` WHERE `id`=?';
	const FIELD_ID=683967523;
	const FIELD_LOGINNAME=-1221419668;
	const FIELD_NAMELC=1969275978;
	const FIELD_EMAIL=748296084;
	const FIELD_CREATED=224603360;
	const FIELD_MODIFIED=231805905;
	const FIELD_MODIFIEDBY=-572821528;
	const FIELD_PASSWORD=2064305059;
	const FIELD_PASSWORDCHANGED=-994719311;
	const FIELD_SUPERUSER=165230014;
	const FIELD_DISABLED=1118260100;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_LOGINNAME=>'loginname',
		self::FIELD_NAMELC=>'namelc',
		self::FIELD_EMAIL=>'email',
		self::FIELD_CREATED=>'created',
		self::FIELD_MODIFIED=>'modified',
		self::FIELD_MODIFIEDBY=>'modifiedby',
		self::FIELD_PASSWORD=>'password',
		self::FIELD_PASSWORDCHANGED=>'passwordchanged',
		self::FIELD_SUPERUSER=>'superuser',
		self::FIELD_DISABLED=>'disabled');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_LOGINNAME=>'logInName',
		self::FIELD_NAMELC=>'nameLc',
		self::FIELD_EMAIL=>'email',
		self::FIELD_CREATED=>'created',
		self::FIELD_MODIFIED=>'modified',
		self::FIELD_MODIFIEDBY=>'modifiedBy',
		self::FIELD_PASSWORD=>'password',
		self::FIELD_PASSWORDCHANGED=>'passwordChanged',
		self::FIELD_SUPERUSER=>'superuser',
		self::FIELD_DISABLED=>'disabled');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_LOGINNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_NAMELC=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_EMAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CREATED=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_MODIFIED=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_MODIFIEDBY=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PASSWORD=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PASSWORDCHANGED=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SUPERUSER=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_DISABLED=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_LOGINNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,false),
		self::FIELD_NAMELC=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_EMAIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_CREATED=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_MODIFIED=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,false),
		self::FIELD_MODIFIEDBY=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,25,0,true),
		self::FIELD_PASSWORD=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_PASSWORDCHANGED=>array(Db2PhpEntity::JDBC_TYPE_DATE,10,0,true),
		self::FIELD_SUPERUSER=>array(Db2PhpEntity::JDBC_TYPE_TINYINT,3,0,true),
		self::FIELD_DISABLED=>array(Db2PhpEntity::JDBC_TYPE_TINYINT,3,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_LOGINNAME=>'',
		self::FIELD_NAMELC=>null,
		self::FIELD_EMAIL=>'',
		self::FIELD_CREATED=>null,
		self::FIELD_MODIFIED=>'CURRENT_TIMESTAMP',
		self::FIELD_MODIFIEDBY=>null,
		self::FIELD_PASSWORD=>null,
		self::FIELD_PASSWORDCHANGED=>null,
		self::FIELD_SUPERUSER=>0,
		self::FIELD_DISABLED=>0);
	private $id;
	private $logInName;
	private $nameLc;
	private $email;
	private $created;
	private $modified;
	private $modifiedBy;
	private $password;
	private $passwordChanged;
	private $superuser;
	private $disabled;

	/**
	 * set value for id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return PhPListAdmin
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
	 * set value for loginname 
	 *
	 * type:VARCHAR,size:25,default:null,index
	 *
	 * @param mixed $logInName
	 * @return PhPListAdmin
	 */
	public function &setLogInName($logInName) {
		$this->notifyChanged(self::FIELD_LOGINNAME,$this->logInName,$logInName);
		$this->logInName=$logInName;
		return $this;
	}

	/**
	 * get value for loginname 
	 *
	 * type:VARCHAR,size:25,default:null,index
	 *
	 * @return mixed
	 */
	public function getLogInName() {
		return $this->logInName;
	}

	/**
	 * set value for namelc 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @param mixed $nameLc
	 * @return PhPListAdmin
	 */
	public function &setNameLc($nameLc) {
		$this->notifyChanged(self::FIELD_NAMELC,$this->nameLc,$nameLc);
		$this->nameLc=$nameLc;
		return $this;
	}

	/**
	 * get value for namelc 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getNameLc() {
		return $this->nameLc;
	}

	/**
	 * set value for email 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $email
	 * @return PhPListAdmin
	 */
	public function &setEmail($email) {
		$this->notifyChanged(self::FIELD_EMAIL,$this->email,$email);
		$this->email=$email;
		return $this;
	}

	/**
	 * get value for email 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * set value for created 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $created
	 * @return PhPListAdmin
	 */
	public function &setCreated($created) {
		$this->notifyChanged(self::FIELD_CREATED,$this->created,$created);
		$this->created=$created;
		return $this;
	}

	/**
	 * get value for created 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCreated() {
		return $this->created;
	}

	/**
	 * set value for modified 
	 *
	 * type:TIMESTAMP,size:19,default:CURRENT_TIMESTAMP
	 *
	 * @param mixed $modified
	 * @return PhPListAdmin
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
	 * set value for modifiedby 
	 *
	 * type:VARCHAR,size:25,default:null,nullable
	 *
	 * @param mixed $modifiedBy
	 * @return PhPListAdmin
	 */
	public function &setModifiedBy($modifiedBy) {
		$this->notifyChanged(self::FIELD_MODIFIEDBY,$this->modifiedBy,$modifiedBy);
		$this->modifiedBy=$modifiedBy;
		return $this;
	}

	/**
	 * get value for modifiedby 
	 *
	 * type:VARCHAR,size:25,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getModifiedBy() {
		return $this->modifiedBy;
	}

	/**
	 * set value for password 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @param mixed $password
	 * @return PhPListAdmin
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
	 * @return PhPListAdmin
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
	 * set value for superuser 
	 *
	 * type:TINYINT,size:3,default:0,nullable
	 *
	 * @param mixed $superuser
	 * @return PhPListAdmin
	 */
	public function &setSuperuser($superuser) {
		$this->notifyChanged(self::FIELD_SUPERUSER,$this->superuser,$superuser);
		$this->superuser=$superuser;
		return $this;
	}

	/**
	 * get value for superuser 
	 *
	 * type:TINYINT,size:3,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getSuperuser() {
		return $this->superuser;
	}

	/**
	 * set value for disabled 
	 *
	 * type:TINYINT,size:3,default:0,nullable
	 *
	 * @param mixed $disabled
	 * @return PhPListAdmin
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
			self::FIELD_LOGINNAME=>$this->getLogInName(),
			self::FIELD_NAMELC=>$this->getNameLc(),
			self::FIELD_EMAIL=>$this->getEmail(),
			self::FIELD_CREATED=>$this->getCreated(),
			self::FIELD_MODIFIED=>$this->getModified(),
			self::FIELD_MODIFIEDBY=>$this->getModifiedBy(),
			self::FIELD_PASSWORD=>$this->getPassword(),
			self::FIELD_PASSWORDCHANGED=>$this->getPasswordChanged(),
			self::FIELD_SUPERUSER=>$this->getSuperuser(),
			self::FIELD_DISABLED=>$this->getDisabled());
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
	 * Match by attributes of passed example instance and return matched rows as an array of PhPListAdmin instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param PhPListAdmin $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PhPListAdmin[]
	 */
	public static function findByExample(PDO $db,PhPListAdmin $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of PhPListAdmin instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PhPListAdmin[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `phplist_admin`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of PhPListAdmin instances
	 *
	 * @param PDOStatement $stmt
	 * @return PhPListAdmin[]
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
	 * returns the result as an array of PhPListAdmin instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return PhPListAdmin[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new PhPListAdmin();
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
	 * Execute select query and return matched rows as an array of PhPListAdmin instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return PhPListAdmin[]
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
		$sql='DELETE FROM `phplist_admin`'
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
		$this->setLogInName($result['loginname']);
		$this->setNameLc($result['namelc']);
		$this->setEmail($result['email']);
		$this->setCreated($result['created']);
		$this->setModified($result['modified']);
		$this->setModifiedBy($result['modifiedby']);
		$this->setPassword($result['password']);
		$this->setPasswordChanged($result['passwordchanged']);
		$this->setSuperuser($result['superuser']);
		$this->setDisabled($result['disabled']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return PhPListAdmin
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
		$o=new PhPListAdmin();
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
		$stmt->bindValue(2,$this->getLogInName());
		$stmt->bindValue(3,$this->getNameLc());
		$stmt->bindValue(4,$this->getEmail());
		$stmt->bindValue(5,$this->getCreated());
		$stmt->bindValue(6,$this->getModified());
		$stmt->bindValue(7,$this->getModifiedBy());
		$stmt->bindValue(8,$this->getPassword());
		$stmt->bindValue(9,$this->getPasswordChanged());
		$stmt->bindValue(10,$this->getSuperuser());
		$stmt->bindValue(11,$this->getDisabled());
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
			$stmt->bindValue(1,$this->getLogInName());
			$stmt->bindValue(2,$this->getNameLc());
			$stmt->bindValue(3,$this->getEmail());
			$stmt->bindValue(4,$this->getCreated());
			$stmt->bindValue(5,$this->getModified());
			$stmt->bindValue(6,$this->getModifiedBy());
			$stmt->bindValue(7,$this->getPassword());
			$stmt->bindValue(8,$this->getPasswordChanged());
			$stmt->bindValue(9,$this->getSuperuser());
			$stmt->bindValue(10,$this->getDisabled());
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
		$stmt->bindValue(12,$this->getId());
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
		$def->class='PhPListAdmin';
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
		return self::hashToDomDocument($this->toHash(), 'PhPListAdmin');
	}

	/**
	 * get single PhPListAdmin instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return PhPListAdmin
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new PhPListAdmin();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of PhPListAdmin from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return PhPListAdmin[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('PhPListAdmin') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>