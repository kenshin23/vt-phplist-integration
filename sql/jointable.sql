DROP TABLE IF EXISTS `vtiger_phplist_join`;
CREATE TABLE IF NOT EXISTS `vtiger_phplist_join` (
  `id` int(19) NOT NULL auto_increment,
  `vtiger_belongs2campaingId` int(19) NOT NULL COMMENT 'Vtiger Campaign Id',
  `vtiger_type` varchar(40) NOT NULL COMMENT 'Vtiger Entity Type',
  `vtiger_userid` int(19) NOT NULL COMMENT 'Id of contact or lead',
  `phplist_userid` int(19) NOT NULL COMMENT 'Id of user in phplist',
  PRIMARY KEY  (`vtiger_belongs2campaingId`,`vtiger_type`,`vtiger_userid`,`phplist_userid`),
  UNIQUE KEY `join_id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `vtiger_phplist_campaigns`;
CREATE TABLE IF NOT EXISTS `vtiger_phplist_campaigns` (
  `id` int(19) NOT NULL auto_increment,
  `vtiger_campaingId` int(19) NOT NULL COMMENT 'Vtiger Campaign Id - From vtiger_campaign',
  `phplist_listId` int(19) NOT NULL COMMENT 'Phplist List Id - From phplist_list',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
