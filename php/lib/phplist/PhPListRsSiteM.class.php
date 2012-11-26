<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class PhPListRsSiteM extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='PhPListRsSiteM';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='phplist_rssitem';
	const SQL_INSERT='INSERT INTO `phplist_rssitem` (`id`,`title`,`link`,`source`,`list`,`added`,`processed`,`astext`,`ashtml`) VALUES (?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `phplist_rssitem` (`title`,`link`,`source`,`list`,`added`,`processed`,`astext`,`ashtml`) VALUES (?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `phplist_rssitem` SET `id`=?,`title`=?,`link`=?,`source`=?,`list`=?,`added`=?,`processed`=?,`astext`=?,`ashtml`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `phplist_rssitem` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `phplist_rssitem` WHERE `id`=?';
	const FIELD_ID=1864584461;
	const FIELD_TITLE=1034061094;
	const FIELD_LINK=864402284;
	const FIELD_SOURCE=1968070413;
	const FIELD_LIST=864402448;
	const FIELD_ADDED=1016349646;
	const FIELD_PROCESSED=790861596;
	const FIELD_ASTEXT=1456398161;
	const FIELD_ASHTML=1456054735;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_TITLE=>'title',
		self::FIELD_LINK=>'link',
		self::FIELD_SOURCE=>'source',
		self::FIELD_LIST=>'list',
		self::FIELD_ADDED=>'added',
		self::FIELD_PROCESSED=>'processed',
		self::FIELD_ASTEXT=>'astext',
		self::FIELD_ASHTML=>'ashtml');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_TITLE=>'title',
		self::FIELD_LINK=>'link',
		self::FIELD_SOURCE=>'source',
		self::FIELD_LIST=>'list',
		self::FIELD_ADDED=>'added',
		self::FIELD_PROCESSED=>'processed',
		self::FIELD_ASTEXT=>'asText',
		self::FIELD_ASHTML=>'asHtml');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_TITLE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_LINK=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SOURCE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_LIST=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ADDED=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PROCESSED=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ASTEXT=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ASHTML=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_TITLE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,false),
		self::FIELD_LINK=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,false),
		self::FIELD_SOURCE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_LIST=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_ADDED=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_PROCESSED=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,8,0,true),
		self::FIELD_ASTEXT=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_ASHTML=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_TITLE=>'',
		self::FIELD_LINK=>'',
		self::FIELD_SOURCE=>null,
		self::FIELD_LIST=>0,
		self::FIELD_ADDED=>null,
		self::FIELD_PROCESSED=>0,
		self::FIELD_ASTEXT=>0,
		self::FIELD_ASHTML=>0);
	private $id;
	private $title;
	private $link;
	private $source;
	private $list;
	private $added;
	private $processed;
	private $asText;
	private $asHtml;

	/**
	 * set value for id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return PhPListRsSiteM
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
	 * set value for title 
	 *
	 * type:VARCHAR,size:100,default:null,index
	 *
	 * @param mixed $title
	 * @return PhPListRsSiteM
	 */
	public function &setTitle($title) {
		$this->notifyChanged(self::FIELD_TITLE,$this->title,$title);
		$this->title=$title;
		return $this;
	}

	/**
	 * get value for title 
	 *
	 * type:VARCHAR,size:100,default:null,index
	 *
	 * @return mixed
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * set value for link 
	 *
	 * type:VARCHAR,size:100,default:null,index
	 *
	 * @param mixed $link
	 * @return PhPListRsSiteM
	 */
	public function &setLink($link) {
		$this->notifyChanged(self::FIELD_LINK,$this->link,$link);
		$this->link=$link;
		return $this;
	}

	/**
	 * get value for link 
	 *
	 * type:VARCHAR,size:100,default:null,index
	 *
	 * @return mixed
	 */
	public function getLink() {
		return $this->link;
	}

	/**
	 * set value for source 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @param mixed $source
	 * @return PhPListRsSiteM
	 */
	public function &setSource($source) {
		$this->notifyChanged(self::FIELD_SOURCE,$this->source,$source);
		$this->source=$source;
		return $this;
	}

	/**
	 * get value for source 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getSource() {
		return $this->source;
	}

	/**
	 * set value for list 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @param mixed $list
	 * @return PhPListRsSiteM
	 */
	public function &setList($list) {
		$this->notifyChanged(self::FIELD_LIST,$this->list,$list);
		$this->list=$list;
		return $this;
	}

	/**
	 * get value for list 
	 *
	 * type:INT,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getList() {
		return $this->list;
	}

	/**
	 * set value for added 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $added
	 * @return PhPListRsSiteM
	 */
	public function &setAdded($added) {
		$this->notifyChanged(self::FIELD_ADDED,$this->added,$added);
		$this->added=$added;
		return $this;
	}

	/**
	 * get value for added 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getAdded() {
		return $this->added;
	}

	/**
	 * set value for processed 
	 *
	 * type:MEDIUMINT UNSIGNED,size:8,default:0,nullable
	 *
	 * @param mixed $processed
	 * @return PhPListRsSiteM
	 */
	public function &setProcessed($processed) {
		$this->notifyChanged(self::FIELD_PROCESSED,$this->processed,$processed);
		$this->processed=$processed;
		return $this;
	}

	/**
	 * get value for processed 
	 *
	 * type:MEDIUMINT UNSIGNED,size:8,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getProcessed() {
		return $this->processed;
	}

	/**
	 * set value for astext 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @param mixed $asText
	 * @return PhPListRsSiteM
	 */
	public function &setAsText($asText) {
		$this->notifyChanged(self::FIELD_ASTEXT,$this->asText,$asText);
		$this->asText=$asText;
		return $this;
	}

	/**
	 * get value for astext 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getAsText() {
		return $this->asText;
	}

	/**
	 * set value for ashtml 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @param mixed $asHtml
	 * @return PhPListRsSiteM
	 */
	public function &setAsHtml($asHtml) {
		$this->notifyChanged(self::FIELD_ASHTML,$this->asHtml,$asHtml);
		$this->asHtml=$asHtml;
		return $this;
	}

	/**
	 * get value for ashtml 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getAsHtml() {
		return $this->asHtml;
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
			self::FIELD_TITLE=>$this->getTitle(),
			self::FIELD_LINK=>$this->getLink(),
			self::FIELD_SOURCE=>$this->getSource(),
			self::FIELD_LIST=>$this->getList(),
			self::FIELD_ADDED=>$this->getAdded(),
			self::FIELD_PROCESSED=>$this->getProcessed(),
			self::FIELD_ASTEXT=>$this->getAsText(),
			self::FIELD_ASHTML=>$this->getAsHtml());
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
	 * Match by attributes of passed example instance and return matched rows as an array of PhPListRsSiteM instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param PhPListRsSiteM $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PhPListRsSiteM[]
	 */
	public static function findByExample(PDO $db,PhPListRsSiteM $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of PhPListRsSiteM instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PhPListRsSiteM[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `phplist_rssitem`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of PhPListRsSiteM instances
	 *
	 * @param PDOStatement $stmt
	 * @return PhPListRsSiteM[]
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
	 * returns the result as an array of PhPListRsSiteM instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return PhPListRsSiteM[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new PhPListRsSiteM();
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
	 * Execute select query and return matched rows as an array of PhPListRsSiteM instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return PhPListRsSiteM[]
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
		$sql='DELETE FROM `phplist_rssitem`'
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
		$this->setTitle($result['title']);
		$this->setLink($result['link']);
		$this->setSource($result['source']);
		$this->setList($result['list']);
		$this->setAdded($result['added']);
		$this->setProcessed($result['processed']);
		$this->setAsText($result['astext']);
		$this->setAsHtml($result['ashtml']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return PhPListRsSiteM
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
		$o=new PhPListRsSiteM();
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
		$stmt->bindValue(2,$this->getTitle());
		$stmt->bindValue(3,$this->getLink());
		$stmt->bindValue(4,$this->getSource());
		$stmt->bindValue(5,$this->getList());
		$stmt->bindValue(6,$this->getAdded());
		$stmt->bindValue(7,$this->getProcessed());
		$stmt->bindValue(8,$this->getAsText());
		$stmt->bindValue(9,$this->getAsHtml());
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
			$stmt->bindValue(1,$this->getTitle());
			$stmt->bindValue(2,$this->getLink());
			$stmt->bindValue(3,$this->getSource());
			$stmt->bindValue(4,$this->getList());
			$stmt->bindValue(5,$this->getAdded());
			$stmt->bindValue(6,$this->getProcessed());
			$stmt->bindValue(7,$this->getAsText());
			$stmt->bindValue(8,$this->getAsHtml());
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
		$stmt->bindValue(10,$this->getId());
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
		$def->class='PhPListRsSiteM';
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
		return self::hashToDomDocument($this->toHash(), 'PhPListRsSiteM');
	}

	/**
	 * get single PhPListRsSiteM instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return PhPListRsSiteM
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new PhPListRsSiteM();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of PhPListRsSiteM from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return PhPListRsSiteM[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('PhPListRsSiteM') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>