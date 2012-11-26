<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class PhPListLinkTrack extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='PhPListLinkTrack';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='phplist_linktrack';
	const SQL_INSERT='INSERT INTO `phplist_linktrack` (`linkid`,`messageid`,`userid`,`url`,`forward`,`firstclick`,`latestclick`,`clicked`) VALUES (?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `phplist_linktrack` (`messageid`,`userid`,`url`,`forward`,`firstclick`,`latestclick`,`clicked`) VALUES (?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `phplist_linktrack` SET `linkid`=?,`messageid`=?,`userid`=?,`url`=?,`forward`=?,`firstclick`=?,`latestclick`=?,`clicked`=? WHERE `linkid`=?';
	const SQL_SELECT_PK='SELECT * FROM `phplist_linktrack` WHERE `linkid`=?';
	const SQL_DELETE_PK='DELETE FROM `phplist_linktrack` WHERE `linkid`=?';
	const FIELD_LINKID=334075035;
	const FIELD_MESSAGEID=1165767580;
	const FIELD_USERID=600711212;
	const FIELD_URL=2134312233;
	const FIELD_FORWARD=912156031;
	const FIELD_FIRSTCLICK=-982541346;
	const FIELD_LATESTCLICK=627816475;
	const FIELD_CLICKED=-1845140767;
	private static $PRIMARY_KEYS=array(self::FIELD_LINKID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_LINKID);
	private static $FIELD_NAMES=array(
		self::FIELD_LINKID=>'linkid',
		self::FIELD_MESSAGEID=>'messageid',
		self::FIELD_USERID=>'userid',
		self::FIELD_URL=>'url',
		self::FIELD_FORWARD=>'forward',
		self::FIELD_FIRSTCLICK=>'firstclick',
		self::FIELD_LATESTCLICK=>'latestclick',
		self::FIELD_CLICKED=>'clicked');
	private static $PROPERTY_NAMES=array(
		self::FIELD_LINKID=>'linkId',
		self::FIELD_MESSAGEID=>'messageId',
		self::FIELD_USERID=>'userId',
		self::FIELD_URL=>'url',
		self::FIELD_FORWARD=>'forward',
		self::FIELD_FIRSTCLICK=>'firstClick',
		self::FIELD_LATESTCLICK=>'latestClick',
		self::FIELD_CLICKED=>'clicked');
	private static $PROPERTY_TYPES=array(
		self::FIELD_LINKID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_MESSAGEID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_USERID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_URL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FORWARD=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FIRSTCLICK=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_LATESTCLICK=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CLICKED=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_LINKID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_MESSAGEID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_USERID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_URL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_FORWARD=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,true),
		self::FIELD_FIRSTCLICK=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_LATESTCLICK=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,false),
		self::FIELD_CLICKED=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_LINKID=>null,
		self::FIELD_MESSAGEID=>0,
		self::FIELD_USERID=>0,
		self::FIELD_URL=>null,
		self::FIELD_FORWARD=>null,
		self::FIELD_FIRSTCLICK=>null,
		self::FIELD_LATESTCLICK=>'CURRENT_TIMESTAMP',
		self::FIELD_CLICKED=>0);
	private $linkId;
	private $messageId;
	private $userId;
	private $url;
	private $forward;
	private $firstClick;
	private $latestClick;
	private $clicked;

	/**
	 * set value for linkid 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $linkId
	 * @return PhPListLinkTrack
	 */
	public function &setLinkId($linkId) {
		$this->notifyChanged(self::FIELD_LINKID,$this->linkId,$linkId);
		$this->linkId=$linkId;
		return $this;
	}

	/**
	 * get value for linkid 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getLinkId() {
		return $this->linkId;
	}

	/**
	 * set value for messageid 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @param mixed $messageId
	 * @return PhPListLinkTrack
	 */
	public function &setMessageId($messageId) {
		$this->notifyChanged(self::FIELD_MESSAGEID,$this->messageId,$messageId);
		$this->messageId=$messageId;
		return $this;
	}

	/**
	 * get value for messageid 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getMessageId() {
		return $this->messageId;
	}

	/**
	 * set value for userid 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @param mixed $userId
	 * @return PhPListLinkTrack
	 */
	public function &setUserId($userId) {
		$this->notifyChanged(self::FIELD_USERID,$this->userId,$userId);
		$this->userId=$userId;
		return $this;
	}

	/**
	 * get value for userid 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getUserId() {
		return $this->userId;
	}

	/**
	 * set value for url 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $url
	 * @return PhPListLinkTrack
	 */
	public function &setUrl($url) {
		$this->notifyChanged(self::FIELD_URL,$this->url,$url);
		$this->url=$url;
		return $this;
	}

	/**
	 * get value for url 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * set value for forward 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @param mixed $forward
	 * @return PhPListLinkTrack
	 */
	public function &setForward($forward) {
		$this->notifyChanged(self::FIELD_FORWARD,$this->forward,$forward);
		$this->forward=$forward;
		return $this;
	}

	/**
	 * get value for forward 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getForward() {
		return $this->forward;
	}

	/**
	 * set value for firstclick 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $firstClick
	 * @return PhPListLinkTrack
	 */
	public function &setFirstClick($firstClick) {
		$this->notifyChanged(self::FIELD_FIRSTCLICK,$this->firstClick,$firstClick);
		$this->firstClick=$firstClick;
		return $this;
	}

	/**
	 * get value for firstclick 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getFirstClick() {
		return $this->firstClick;
	}

	/**
	 * set value for latestclick 
	 *
	 * type:TIMESTAMP,size:19,default:CURRENT_TIMESTAMP
	 *
	 * @param mixed $latestClick
	 * @return PhPListLinkTrack
	 */
	public function &setLatestClick($latestClick) {
		$this->notifyChanged(self::FIELD_LATESTCLICK,$this->latestClick,$latestClick);
		$this->latestClick=$latestClick;
		return $this;
	}

	/**
	 * get value for latestclick 
	 *
	 * type:TIMESTAMP,size:19,default:CURRENT_TIMESTAMP
	 *
	 * @return mixed
	 */
	public function getLatestClick() {
		return $this->latestClick;
	}

	/**
	 * set value for clicked 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @param mixed $clicked
	 * @return PhPListLinkTrack
	 */
	public function &setClicked($clicked) {
		$this->notifyChanged(self::FIELD_CLICKED,$this->clicked,$clicked);
		$this->clicked=$clicked;
		return $this;
	}

	/**
	 * get value for clicked 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getClicked() {
		return $this->clicked;
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
			self::FIELD_LINKID=>$this->getLinkId(),
			self::FIELD_MESSAGEID=>$this->getMessageId(),
			self::FIELD_USERID=>$this->getUserId(),
			self::FIELD_URL=>$this->getUrl(),
			self::FIELD_FORWARD=>$this->getForward(),
			self::FIELD_FIRSTCLICK=>$this->getFirstClick(),
			self::FIELD_LATESTCLICK=>$this->getLatestClick(),
			self::FIELD_CLICKED=>$this->getClicked());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_LINKID=>$this->getLinkId());
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
	 * Match by attributes of passed example instance and return matched rows as an array of PhPListLinkTrack instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param PhPListLinkTrack $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PhPListLinkTrack[]
	 */
	public static function findByExample(PDO $db,PhPListLinkTrack $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of PhPListLinkTrack instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PhPListLinkTrack[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `phplist_linktrack`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of PhPListLinkTrack instances
	 *
	 * @param PDOStatement $stmt
	 * @return PhPListLinkTrack[]
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
	 * returns the result as an array of PhPListLinkTrack instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return PhPListLinkTrack[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new PhPListLinkTrack();
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
	 * Execute select query and return matched rows as an array of PhPListLinkTrack instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return PhPListLinkTrack[]
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
		$sql='DELETE FROM `phplist_linktrack`'
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
		$this->setLinkId($result['linkid']);
		$this->setMessageId($result['messageid']);
		$this->setUserId($result['userid']);
		$this->setUrl($result['url']);
		$this->setForward($result['forward']);
		$this->setFirstClick($result['firstclick']);
		$this->setLatestClick($result['latestclick']);
		$this->setClicked($result['clicked']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return PhPListLinkTrack
	 */
	public static function findById(PDO $db,$linkId) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$linkId);
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
		$o=new PhPListLinkTrack();
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
		$stmt->bindValue(1,$this->getLinkId());
		$stmt->bindValue(2,$this->getMessageId());
		$stmt->bindValue(3,$this->getUserId());
		$stmt->bindValue(4,$this->getUrl());
		$stmt->bindValue(5,$this->getForward());
		$stmt->bindValue(6,$this->getFirstClick());
		$stmt->bindValue(7,$this->getLatestClick());
		$stmt->bindValue(8,$this->getClicked());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getLinkId()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getMessageId());
			$stmt->bindValue(2,$this->getUserId());
			$stmt->bindValue(3,$this->getUrl());
			$stmt->bindValue(4,$this->getForward());
			$stmt->bindValue(5,$this->getFirstClick());
			$stmt->bindValue(6,$this->getLatestClick());
			$stmt->bindValue(7,$this->getClicked());
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
			$this->setLinkId($lastInsertId);
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
		$stmt->bindValue(9,$this->getLinkId());
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
		$stmt->bindValue(1,$this->getLinkId());
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
		$def->class='PhPListLinkTrack';
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
		return self::hashToDomDocument($this->toHash(), 'PhPListLinkTrack');
	}

	/**
	 * get single PhPListLinkTrack instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return PhPListLinkTrack
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new PhPListLinkTrack();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of PhPListLinkTrack from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return PhPListLinkTrack[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('PhPListLinkTrack') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>