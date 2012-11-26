<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class PhPListMessage extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='PhPListMessage';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='phplist_message';
	const SQL_INSERT='INSERT INTO `phplist_message` (`id`,`subject`,`fromfield`,`tofield`,`replyto`,`message`,`textmessage`,`footer`,`entered`,`modified`,`embargo`,`repeatinterval`,`repeatuntil`,`status`,`userselection`,`sent`,`htmlformatted`,`sendformat`,`template`,`processed`,`astext`,`ashtml`,`astextandhtml`,`aspdf`,`astextandpdf`,`viewed`,`bouncecount`,`sendstart`,`rsstemplate`,`owner`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `phplist_message` (`subject`,`fromfield`,`tofield`,`replyto`,`message`,`textmessage`,`footer`,`entered`,`modified`,`embargo`,`repeatinterval`,`repeatuntil`,`status`,`userselection`,`sent`,`htmlformatted`,`sendformat`,`template`,`processed`,`astext`,`ashtml`,`astextandhtml`,`aspdf`,`astextandpdf`,`viewed`,`bouncecount`,`sendstart`,`rsstemplate`,`owner`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `phplist_message` SET `id`=?,`subject`=?,`fromfield`=?,`tofield`=?,`replyto`=?,`message`=?,`textmessage`=?,`footer`=?,`entered`=?,`modified`=?,`embargo`=?,`repeatinterval`=?,`repeatuntil`=?,`status`=?,`userselection`=?,`sent`=?,`htmlformatted`=?,`sendformat`=?,`template`=?,`processed`=?,`astext`=?,`ashtml`=?,`astextandhtml`=?,`aspdf`=?,`astextandpdf`=?,`viewed`=?,`bouncecount`=?,`sendstart`=?,`rsstemplate`=?,`owner`=? WHERE `id`=?';
	const SQL_SELECT_PK='SELECT * FROM `phplist_message` WHERE `id`=?';
	const SQL_DELETE_PK='DELETE FROM `phplist_message` WHERE `id`=?';
	const FIELD_ID=2124467755;
	const FIELD_SUBJECT=-1465401828;
	const FIELD_FROMFIELD=326348928;
	const FIELD_TOFIELD=-746008497;
	const FIELD_REPLYTO=1497003989;
	const FIELD_MESSAGE=1357408503;
	const FIELD_TEXTMESSAGE=1004629802;
	const FIELD_FOOTER=-2087162197;
	const FIELD_ENTERED=-1189468569;
	const FIELD_MODIFIED=-1023428647;
	const FIELD_EMBARGO=-1234840189;
	const FIELD_REPEATINTERVAL=-369758096;
	const FIELD_REPEATUNTIL=-123008109;
	const FIELD_STATUS=-1710782206;
	const FIELD_USERSELECTION=494767889;
	const FIELD_SENT=1504349352;
	const FIELD_HTMLFORMATTED=-935915935;
	const FIELD_SENDFORMAT=-140201329;
	const FIELD_TEMPLATE=-1729461878;
	const FIELD_PROCESSED=-855230402;
	const FIELD_ASTEXT=2068488559;
	const FIELD_ASHTML=2068145133;
	const FIELD_ASTEXTANDHTML=-1846251085;
	const FIELD_ASPDF=-626015120;
	const FIELD_ASTEXTANDPDF=-1029380630;
	const FIELD_VIEWED=-1634931948;
	const FIELD_BOUNCECOUNT=280338551;
	const FIELD_SENDSTART=284710602;
	const FIELD_RSSTEMPLATE=-284326468;
	const FIELD_OWNER=-612968541;
	private static $PRIMARY_KEYS=array(self::FIELD_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_SUBJECT=>'subject',
		self::FIELD_FROMFIELD=>'fromfield',
		self::FIELD_TOFIELD=>'tofield',
		self::FIELD_REPLYTO=>'replyto',
		self::FIELD_MESSAGE=>'message',
		self::FIELD_TEXTMESSAGE=>'textmessage',
		self::FIELD_FOOTER=>'footer',
		self::FIELD_ENTERED=>'entered',
		self::FIELD_MODIFIED=>'modified',
		self::FIELD_EMBARGO=>'embargo',
		self::FIELD_REPEATINTERVAL=>'repeatinterval',
		self::FIELD_REPEATUNTIL=>'repeatuntil',
		self::FIELD_STATUS=>'status',
		self::FIELD_USERSELECTION=>'userselection',
		self::FIELD_SENT=>'sent',
		self::FIELD_HTMLFORMATTED=>'htmlformatted',
		self::FIELD_SENDFORMAT=>'sendformat',
		self::FIELD_TEMPLATE=>'template',
		self::FIELD_PROCESSED=>'processed',
		self::FIELD_ASTEXT=>'astext',
		self::FIELD_ASHTML=>'ashtml',
		self::FIELD_ASTEXTANDHTML=>'astextandhtml',
		self::FIELD_ASPDF=>'aspdf',
		self::FIELD_ASTEXTANDPDF=>'astextandpdf',
		self::FIELD_VIEWED=>'viewed',
		self::FIELD_BOUNCECOUNT=>'bouncecount',
		self::FIELD_SENDSTART=>'sendstart',
		self::FIELD_RSSTEMPLATE=>'rsstemplate',
		self::FIELD_OWNER=>'owner');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID=>'id',
		self::FIELD_SUBJECT=>'subject',
		self::FIELD_FROMFIELD=>'fromField',
		self::FIELD_TOFIELD=>'toField',
		self::FIELD_REPLYTO=>'replyTo',
		self::FIELD_MESSAGE=>'message',
		self::FIELD_TEXTMESSAGE=>'textMessage',
		self::FIELD_FOOTER=>'footer',
		self::FIELD_ENTERED=>'entered',
		self::FIELD_MODIFIED=>'modified',
		self::FIELD_EMBARGO=>'embargo',
		self::FIELD_REPEATINTERVAL=>'repeatInterval',
		self::FIELD_REPEATUNTIL=>'repeatUntil',
		self::FIELD_STATUS=>'status',
		self::FIELD_USERSELECTION=>'userSelection',
		self::FIELD_SENT=>'sent',
		self::FIELD_HTMLFORMATTED=>'htmlFormatted',
		self::FIELD_SENDFORMAT=>'sendFormat',
		self::FIELD_TEMPLATE=>'template',
		self::FIELD_PROCESSED=>'processed',
		self::FIELD_ASTEXT=>'asText',
		self::FIELD_ASHTML=>'asHtml',
		self::FIELD_ASTEXTANDHTML=>'asTextAndHtml',
		self::FIELD_ASPDF=>'aspDf',
		self::FIELD_ASTEXTANDPDF=>'asTextAndPdF',
		self::FIELD_VIEWED=>'viewed',
		self::FIELD_BOUNCECOUNT=>'bounceCount',
		self::FIELD_SENDSTART=>'sendStart',
		self::FIELD_RSSTEMPLATE=>'rSsTemplate',
		self::FIELD_OWNER=>'owner');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_SUBJECT=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FROMFIELD=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TOFIELD=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_REPLYTO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_MESSAGE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TEXTMESSAGE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FOOTER=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ENTERED=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_MODIFIED=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_EMBARGO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_REPEATINTERVAL=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_REPEATUNTIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_STATUS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_USERSELECTION=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SENT=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_HTMLFORMATTED=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_SENDFORMAT=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TEMPLATE=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_PROCESSED=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ASTEXT=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ASHTML=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ASTEXTANDHTML=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ASPDF=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ASTEXTANDPDF=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_VIEWED=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_BOUNCECOUNT=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_SENDSTART=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_RSSTEMPLATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_OWNER=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_SUBJECT=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_FROMFIELD=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_TOFIELD=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_REPLYTO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_MESSAGE=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,2147483647,0,true),
		self::FIELD_TEXTMESSAGE=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,2147483647,0,true),
		self::FIELD_FOOTER=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,true),
		self::FIELD_ENTERED=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_MODIFIED=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,false),
		self::FIELD_EMBARGO=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_REPEATINTERVAL=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_REPEATUNTIL=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_STATUS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_USERSELECTION=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,true),
		self::FIELD_SENT=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_HTMLFORMATTED=>array(Db2PhpEntity::JDBC_TYPE_TINYINT,3,0,true),
		self::FIELD_SENDFORMAT=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,20,0,true),
		self::FIELD_TEMPLATE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_PROCESSED=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,8,0,true),
		self::FIELD_ASTEXT=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_ASHTML=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_ASTEXTANDHTML=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_ASPDF=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_ASTEXTANDPDF=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_VIEWED=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_BOUNCECOUNT=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_SENDSTART=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_RSSTEMPLATE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,100,0,true),
		self::FIELD_OWNER=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID=>null,
		self::FIELD_SUBJECT=>'(no subject)',
		self::FIELD_FROMFIELD=>'',
		self::FIELD_TOFIELD=>'',
		self::FIELD_REPLYTO=>'',
		self::FIELD_MESSAGE=>null,
		self::FIELD_TEXTMESSAGE=>null,
		self::FIELD_FOOTER=>null,
		self::FIELD_ENTERED=>null,
		self::FIELD_MODIFIED=>'CURRENT_TIMESTAMP',
		self::FIELD_EMBARGO=>null,
		self::FIELD_REPEATINTERVAL=>0,
		self::FIELD_REPEATUNTIL=>null,
		self::FIELD_STATUS=>null,
		self::FIELD_USERSELECTION=>null,
		self::FIELD_SENT=>null,
		self::FIELD_HTMLFORMATTED=>0,
		self::FIELD_SENDFORMAT=>null,
		self::FIELD_TEMPLATE=>null,
		self::FIELD_PROCESSED=>0,
		self::FIELD_ASTEXT=>0,
		self::FIELD_ASHTML=>0,
		self::FIELD_ASTEXTANDHTML=>0,
		self::FIELD_ASPDF=>0,
		self::FIELD_ASTEXTANDPDF=>0,
		self::FIELD_VIEWED=>0,
		self::FIELD_BOUNCECOUNT=>0,
		self::FIELD_SENDSTART=>null,
		self::FIELD_RSSTEMPLATE=>null,
		self::FIELD_OWNER=>null);
	private $id;
	private $subject;
	private $fromField;
	private $toField;
	private $replyTo;
	private $message;
	private $textMessage;
	private $footer;
	private $entered;
	private $modified;
	private $embargo;
	private $repeatInterval;
	private $repeatUntil;
	private $status;
	private $userSelection;
	private $sent;
	private $htmlFormatted;
	private $sendFormat;
	private $template;
	private $processed;
	private $asText;
	private $asHtml;
	private $asTextAndHtml;
	private $aspDf;
	private $asTextAndPdF;
	private $viewed;
	private $bounceCount;
	private $sendStart;
	private $rSsTemplate;
	private $owner;

	/**
	 * set value for id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $id
	 * @return PhPListMessage
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
	 * set value for subject 
	 *
	 * type:VARCHAR,size:255,default:(no subject)
	 *
	 * @param mixed $subject
	 * @return PhPListMessage
	 */
	public function &setSubject($subject) {
		$this->notifyChanged(self::FIELD_SUBJECT,$this->subject,$subject);
		$this->subject=$subject;
		return $this;
	}

	/**
	 * get value for subject 
	 *
	 * type:VARCHAR,size:255,default:(no subject)
	 *
	 * @return mixed
	 */
	public function getSubject() {
		return $this->subject;
	}

	/**
	 * set value for fromfield 
	 *
	 * type:VARCHAR,size:255,default:
	 *
	 * @param mixed $fromField
	 * @return PhPListMessage
	 */
	public function &setFromField($fromField) {
		$this->notifyChanged(self::FIELD_FROMFIELD,$this->fromField,$fromField);
		$this->fromField=$fromField;
		return $this;
	}

	/**
	 * get value for fromfield 
	 *
	 * type:VARCHAR,size:255,default:
	 *
	 * @return mixed
	 */
	public function getFromField() {
		return $this->fromField;
	}

	/**
	 * set value for tofield 
	 *
	 * type:VARCHAR,size:255,default:
	 *
	 * @param mixed $toField
	 * @return PhPListMessage
	 */
	public function &setToField($toField) {
		$this->notifyChanged(self::FIELD_TOFIELD,$this->toField,$toField);
		$this->toField=$toField;
		return $this;
	}

	/**
	 * get value for tofield 
	 *
	 * type:VARCHAR,size:255,default:
	 *
	 * @return mixed
	 */
	public function getToField() {
		return $this->toField;
	}

	/**
	 * set value for replyto 
	 *
	 * type:VARCHAR,size:255,default:
	 *
	 * @param mixed $replyTo
	 * @return PhPListMessage
	 */
	public function &setReplyTo($replyTo) {
		$this->notifyChanged(self::FIELD_REPLYTO,$this->replyTo,$replyTo);
		$this->replyTo=$replyTo;
		return $this;
	}

	/**
	 * get value for replyto 
	 *
	 * type:VARCHAR,size:255,default:
	 *
	 * @return mixed
	 */
	public function getReplyTo() {
		return $this->replyTo;
	}

	/**
	 * set value for message 
	 *
	 * type:LONGTEXT,size:2147483647,default:null,nullable
	 *
	 * @param mixed $message
	 * @return PhPListMessage
	 */
	public function &setMessage($message) {
		$this->notifyChanged(self::FIELD_MESSAGE,$this->message,$message);
		$this->message=$message;
		return $this;
	}

	/**
	 * get value for message 
	 *
	 * type:LONGTEXT,size:2147483647,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getMessage() {
		return $this->message;
	}

	/**
	 * set value for textmessage 
	 *
	 * type:LONGTEXT,size:2147483647,default:null,nullable
	 *
	 * @param mixed $textMessage
	 * @return PhPListMessage
	 */
	public function &setTextMessage($textMessage) {
		$this->notifyChanged(self::FIELD_TEXTMESSAGE,$this->textMessage,$textMessage);
		$this->textMessage=$textMessage;
		return $this;
	}

	/**
	 * get value for textmessage 
	 *
	 * type:LONGTEXT,size:2147483647,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTextMessage() {
		return $this->textMessage;
	}

	/**
	 * set value for footer 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @param mixed $footer
	 * @return PhPListMessage
	 */
	public function &setFooter($footer) {
		$this->notifyChanged(self::FIELD_FOOTER,$this->footer,$footer);
		$this->footer=$footer;
		return $this;
	}

	/**
	 * get value for footer 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getFooter() {
		return $this->footer;
	}

	/**
	 * set value for entered 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $entered
	 * @return PhPListMessage
	 */
	public function &setEntered($entered) {
		$this->notifyChanged(self::FIELD_ENTERED,$this->entered,$entered);
		$this->entered=$entered;
		return $this;
	}

	/**
	 * get value for entered 
	 *
	 * type:DATETIME,size:19,default:null,nullable
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
	 * @return PhPListMessage
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
	 * set value for embargo 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $embargo
	 * @return PhPListMessage
	 */
	public function &setEmbargo($embargo) {
		$this->notifyChanged(self::FIELD_EMBARGO,$this->embargo,$embargo);
		$this->embargo=$embargo;
		return $this;
	}

	/**
	 * get value for embargo 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getEmbargo() {
		return $this->embargo;
	}

	/**
	 * set value for repeatinterval 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @param mixed $repeatInterval
	 * @return PhPListMessage
	 */
	public function &setRepeatInterval($repeatInterval) {
		$this->notifyChanged(self::FIELD_REPEATINTERVAL,$this->repeatInterval,$repeatInterval);
		$this->repeatInterval=$repeatInterval;
		return $this;
	}

	/**
	 * get value for repeatinterval 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getRepeatInterval() {
		return $this->repeatInterval;
	}

	/**
	 * set value for repeatuntil 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $repeatUntil
	 * @return PhPListMessage
	 */
	public function &setRepeatUntil($repeatUntil) {
		$this->notifyChanged(self::FIELD_REPEATUNTIL,$this->repeatUntil,$repeatUntil);
		$this->repeatUntil=$repeatUntil;
		return $this;
	}

	/**
	 * get value for repeatuntil 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getRepeatUntil() {
		return $this->repeatUntil;
	}

	/**
	 * set value for status 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @param mixed $status
	 * @return PhPListMessage
	 */
	public function &setStatus($status) {
		$this->notifyChanged(self::FIELD_STATUS,$this->status,$status);
		$this->status=$status;
		return $this;
	}

	/**
	 * get value for status 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * set value for userselection 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @param mixed $userSelection
	 * @return PhPListMessage
	 */
	public function &setUserSelection($userSelection) {
		$this->notifyChanged(self::FIELD_USERSELECTION,$this->userSelection,$userSelection);
		$this->userSelection=$userSelection;
		return $this;
	}

	/**
	 * get value for userselection 
	 *
	 * type:TEXT,size:65535,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getUserSelection() {
		return $this->userSelection;
	}

	/**
	 * set value for sent 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $sent
	 * @return PhPListMessage
	 */
	public function &setSent($sent) {
		$this->notifyChanged(self::FIELD_SENT,$this->sent,$sent);
		$this->sent=$sent;
		return $this;
	}

	/**
	 * get value for sent 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getSent() {
		return $this->sent;
	}

	/**
	 * set value for htmlformatted 
	 *
	 * type:TINYINT,size:3,default:0,nullable
	 *
	 * @param mixed $htmlFormatted
	 * @return PhPListMessage
	 */
	public function &setHtmlFormatted($htmlFormatted) {
		$this->notifyChanged(self::FIELD_HTMLFORMATTED,$this->htmlFormatted,$htmlFormatted);
		$this->htmlFormatted=$htmlFormatted;
		return $this;
	}

	/**
	 * get value for htmlformatted 
	 *
	 * type:TINYINT,size:3,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getHtmlFormatted() {
		return $this->htmlFormatted;
	}

	/**
	 * set value for sendformat 
	 *
	 * type:VARCHAR,size:20,default:null,nullable
	 *
	 * @param mixed $sendFormat
	 * @return PhPListMessage
	 */
	public function &setSendFormat($sendFormat) {
		$this->notifyChanged(self::FIELD_SENDFORMAT,$this->sendFormat,$sendFormat);
		$this->sendFormat=$sendFormat;
		return $this;
	}

	/**
	 * get value for sendformat 
	 *
	 * type:VARCHAR,size:20,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getSendFormat() {
		return $this->sendFormat;
	}

	/**
	 * set value for template 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $template
	 * @return PhPListMessage
	 */
	public function &setTemplate($template) {
		$this->notifyChanged(self::FIELD_TEMPLATE,$this->template,$template);
		$this->template=$template;
		return $this;
	}

	/**
	 * get value for template 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTemplate() {
		return $this->template;
	}

	/**
	 * set value for processed 
	 *
	 * type:MEDIUMINT UNSIGNED,size:8,default:0,nullable
	 *
	 * @param mixed $processed
	 * @return PhPListMessage
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
	 * @return PhPListMessage
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
	 * @return PhPListMessage
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
	 * set value for astextandhtml 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @param mixed $asTextAndHtml
	 * @return PhPListMessage
	 */
	public function &setAsTextAndHtml($asTextAndHtml) {
		$this->notifyChanged(self::FIELD_ASTEXTANDHTML,$this->asTextAndHtml,$asTextAndHtml);
		$this->asTextAndHtml=$asTextAndHtml;
		return $this;
	}

	/**
	 * get value for astextandhtml 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getAsTextAndHtml() {
		return $this->asTextAndHtml;
	}

	/**
	 * set value for aspdf 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @param mixed $aspDf
	 * @return PhPListMessage
	 */
	public function &setAspDf($aspDf) {
		$this->notifyChanged(self::FIELD_ASPDF,$this->aspDf,$aspDf);
		$this->aspDf=$aspDf;
		return $this;
	}

	/**
	 * get value for aspdf 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getAspDf() {
		return $this->aspDf;
	}

	/**
	 * set value for astextandpdf 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @param mixed $asTextAndPdF
	 * @return PhPListMessage
	 */
	public function &setAsTextAndPdF($asTextAndPdF) {
		$this->notifyChanged(self::FIELD_ASTEXTANDPDF,$this->asTextAndPdF,$asTextAndPdF);
		$this->asTextAndPdF=$asTextAndPdF;
		return $this;
	}

	/**
	 * get value for astextandpdf 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getAsTextAndPdF() {
		return $this->asTextAndPdF;
	}

	/**
	 * set value for viewed 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @param mixed $viewed
	 * @return PhPListMessage
	 */
	public function &setViewed($viewed) {
		$this->notifyChanged(self::FIELD_VIEWED,$this->viewed,$viewed);
		$this->viewed=$viewed;
		return $this;
	}

	/**
	 * get value for viewed 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @return mixed
	 */
	public function getViewed() {
		return $this->viewed;
	}

	/**
	 * set value for bouncecount 
	 *
	 * type:INT,size:10,default:0,nullable
	 *
	 * @param mixed $bounceCount
	 * @return PhPListMessage
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
	 * set value for sendstart 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $sendStart
	 * @return PhPListMessage
	 */
	public function &setSendStart($sendStart) {
		$this->notifyChanged(self::FIELD_SENDSTART,$this->sendStart,$sendStart);
		$this->sendStart=$sendStart;
		return $this;
	}

	/**
	 * get value for sendstart 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getSendStart() {
		return $this->sendStart;
	}

	/**
	 * set value for rsstemplate 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @param mixed $rSsTemplate
	 * @return PhPListMessage
	 */
	public function &setRSsTemplate($rSsTemplate) {
		$this->notifyChanged(self::FIELD_RSSTEMPLATE,$this->rSsTemplate,$rSsTemplate);
		$this->rSsTemplate=$rSsTemplate;
		return $this;
	}

	/**
	 * get value for rsstemplate 
	 *
	 * type:VARCHAR,size:100,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getRSsTemplate() {
		return $this->rSsTemplate;
	}

	/**
	 * set value for owner 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $owner
	 * @return PhPListMessage
	 */
	public function &setOwner($owner) {
		$this->notifyChanged(self::FIELD_OWNER,$this->owner,$owner);
		$this->owner=$owner;
		return $this;
	}

	/**
	 * get value for owner 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getOwner() {
		return $this->owner;
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
			self::FIELD_SUBJECT=>$this->getSubject(),
			self::FIELD_FROMFIELD=>$this->getFromField(),
			self::FIELD_TOFIELD=>$this->getToField(),
			self::FIELD_REPLYTO=>$this->getReplyTo(),
			self::FIELD_MESSAGE=>$this->getMessage(),
			self::FIELD_TEXTMESSAGE=>$this->getTextMessage(),
			self::FIELD_FOOTER=>$this->getFooter(),
			self::FIELD_ENTERED=>$this->getEntered(),
			self::FIELD_MODIFIED=>$this->getModified(),
			self::FIELD_EMBARGO=>$this->getEmbargo(),
			self::FIELD_REPEATINTERVAL=>$this->getRepeatInterval(),
			self::FIELD_REPEATUNTIL=>$this->getRepeatUntil(),
			self::FIELD_STATUS=>$this->getStatus(),
			self::FIELD_USERSELECTION=>$this->getUserSelection(),
			self::FIELD_SENT=>$this->getSent(),
			self::FIELD_HTMLFORMATTED=>$this->getHtmlFormatted(),
			self::FIELD_SENDFORMAT=>$this->getSendFormat(),
			self::FIELD_TEMPLATE=>$this->getTemplate(),
			self::FIELD_PROCESSED=>$this->getProcessed(),
			self::FIELD_ASTEXT=>$this->getAsText(),
			self::FIELD_ASHTML=>$this->getAsHtml(),
			self::FIELD_ASTEXTANDHTML=>$this->getAsTextAndHtml(),
			self::FIELD_ASPDF=>$this->getAspDf(),
			self::FIELD_ASTEXTANDPDF=>$this->getAsTextAndPdF(),
			self::FIELD_VIEWED=>$this->getViewed(),
			self::FIELD_BOUNCECOUNT=>$this->getBounceCount(),
			self::FIELD_SENDSTART=>$this->getSendStart(),
			self::FIELD_RSSTEMPLATE=>$this->getRSsTemplate(),
			self::FIELD_OWNER=>$this->getOwner());
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
	 * Match by attributes of passed example instance and return matched rows as an array of PhPListMessage instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param PhPListMessage $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PhPListMessage[]
	 */
	public static function findByExample(PDO $db,PhPListMessage $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of PhPListMessage instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return PhPListMessage[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `phplist_message`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of PhPListMessage instances
	 *
	 * @param PDOStatement $stmt
	 * @return PhPListMessage[]
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
	 * returns the result as an array of PhPListMessage instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return PhPListMessage[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new PhPListMessage();
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
	 * Execute select query and return matched rows as an array of PhPListMessage instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return PhPListMessage[]
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
		$sql='DELETE FROM `phplist_message`'
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
		$this->setSubject($result['subject']);
		$this->setFromField($result['fromfield']);
		$this->setToField($result['tofield']);
		$this->setReplyTo($result['replyto']);
		$this->setMessage($result['message']);
		$this->setTextMessage($result['textmessage']);
		$this->setFooter($result['footer']);
		$this->setEntered($result['entered']);
		$this->setModified($result['modified']);
		$this->setEmbargo($result['embargo']);
		$this->setRepeatInterval($result['repeatinterval']);
		$this->setRepeatUntil($result['repeatuntil']);
		$this->setStatus($result['status']);
		$this->setUserSelection($result['userselection']);
		$this->setSent($result['sent']);
		$this->setHtmlFormatted($result['htmlformatted']);
		$this->setSendFormat($result['sendformat']);
		$this->setTemplate($result['template']);
		$this->setProcessed($result['processed']);
		$this->setAsText($result['astext']);
		$this->setAsHtml($result['ashtml']);
		$this->setAsTextAndHtml($result['astextandhtml']);
		$this->setAspDf($result['aspdf']);
		$this->setAsTextAndPdF($result['astextandpdf']);
		$this->setViewed($result['viewed']);
		$this->setBounceCount($result['bouncecount']);
		$this->setSendStart($result['sendstart']);
		$this->setRSsTemplate($result['rsstemplate']);
		$this->setOwner($result['owner']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return PhPListMessage
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
		$o=new PhPListMessage();
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
		$stmt->bindValue(2,$this->getSubject());
		$stmt->bindValue(3,$this->getFromField());
		$stmt->bindValue(4,$this->getToField());
		$stmt->bindValue(5,$this->getReplyTo());
		$stmt->bindValue(6,$this->getMessage());
		$stmt->bindValue(7,$this->getTextMessage());
		$stmt->bindValue(8,$this->getFooter());
		$stmt->bindValue(9,$this->getEntered());
		$stmt->bindValue(10,$this->getModified());
		$stmt->bindValue(11,$this->getEmbargo());
		$stmt->bindValue(12,$this->getRepeatInterval());
		$stmt->bindValue(13,$this->getRepeatUntil());
		$stmt->bindValue(14,$this->getStatus());
		$stmt->bindValue(15,$this->getUserSelection());
		$stmt->bindValue(16,$this->getSent());
		$stmt->bindValue(17,$this->getHtmlFormatted());
		$stmt->bindValue(18,$this->getSendFormat());
		$stmt->bindValue(19,$this->getTemplate());
		$stmt->bindValue(20,$this->getProcessed());
		$stmt->bindValue(21,$this->getAsText());
		$stmt->bindValue(22,$this->getAsHtml());
		$stmt->bindValue(23,$this->getAsTextAndHtml());
		$stmt->bindValue(24,$this->getAspDf());
		$stmt->bindValue(25,$this->getAsTextAndPdF());
		$stmt->bindValue(26,$this->getViewed());
		$stmt->bindValue(27,$this->getBounceCount());
		$stmt->bindValue(28,$this->getSendStart());
		$stmt->bindValue(29,$this->getRSsTemplate());
		$stmt->bindValue(30,$this->getOwner());
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
			$stmt->bindValue(1,$this->getSubject());
			$stmt->bindValue(2,$this->getFromField());
			$stmt->bindValue(3,$this->getToField());
			$stmt->bindValue(4,$this->getReplyTo());
			$stmt->bindValue(5,$this->getMessage());
			$stmt->bindValue(6,$this->getTextMessage());
			$stmt->bindValue(7,$this->getFooter());
			$stmt->bindValue(8,$this->getEntered());
			$stmt->bindValue(9,$this->getModified());
			$stmt->bindValue(10,$this->getEmbargo());
			$stmt->bindValue(11,$this->getRepeatInterval());
			$stmt->bindValue(12,$this->getRepeatUntil());
			$stmt->bindValue(13,$this->getStatus());
			$stmt->bindValue(14,$this->getUserSelection());
			$stmt->bindValue(15,$this->getSent());
			$stmt->bindValue(16,$this->getHtmlFormatted());
			$stmt->bindValue(17,$this->getSendFormat());
			$stmt->bindValue(18,$this->getTemplate());
			$stmt->bindValue(19,$this->getProcessed());
			$stmt->bindValue(20,$this->getAsText());
			$stmt->bindValue(21,$this->getAsHtml());
			$stmt->bindValue(22,$this->getAsTextAndHtml());
			$stmt->bindValue(23,$this->getAspDf());
			$stmt->bindValue(24,$this->getAsTextAndPdF());
			$stmt->bindValue(25,$this->getViewed());
			$stmt->bindValue(26,$this->getBounceCount());
			$stmt->bindValue(27,$this->getSendStart());
			$stmt->bindValue(28,$this->getRSsTemplate());
			$stmt->bindValue(29,$this->getOwner());
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
		$stmt->bindValue(31,$this->getId());
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
		$def->class='PhPListMessage';
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
		return self::hashToDomDocument($this->toHash(), 'PhPListMessage');
	}

	/**
	 * get single PhPListMessage instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return PhPListMessage
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new PhPListMessage();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of PhPListMessage from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return PhPListMessage[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('PhPListMessage') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>