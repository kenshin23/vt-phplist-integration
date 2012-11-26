-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2012 a las 20:34:38
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `phplist`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_admin`
--

DROP TABLE IF EXISTS `phplist_admin`;
CREATE TABLE IF NOT EXISTS `phplist_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loginname` varchar(25) NOT NULL,
  `namelc` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modifiedby` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `passwordchanged` date DEFAULT NULL,
  `superuser` tinyint(4) DEFAULT '0',
  `disabled` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `loginname` (`loginname`),
  KEY `loginnameidx` (`loginname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `phplist_admin`
--

INSERT INTO `phplist_admin` (`id`, `loginname`, `namelc`, `email`, `created`, `modified`, `modifiedby`, `password`, `passwordchanged`, `superuser`, `disabled`) VALUES
(1, 'admin', 'admin', '', '2012-11-01 14:58:40', '2012-11-01 19:28:40', '', 'phplist', '2012-11-01', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_adminattribute`
--

DROP TABLE IF EXISTS `phplist_adminattribute`;
CREATE TABLE IF NOT EXISTS `phplist_adminattribute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(30) DEFAULT NULL,
  `listorder` int(11) DEFAULT NULL,
  `default_value` varchar(255) DEFAULT NULL,
  `required` tinyint(4) DEFAULT NULL,
  `tablename` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_admintoken`
--

DROP TABLE IF EXISTS `phplist_admintoken`;
CREATE TABLE IF NOT EXISTS `phplist_admintoken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminid` int(11) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `entered` int(11) NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_admin_attribute`
--

DROP TABLE IF EXISTS `phplist_admin_attribute`;
CREATE TABLE IF NOT EXISTS `phplist_admin_attribute` (
  `adminattributeid` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`adminattributeid`,`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_admin_task`
--

DROP TABLE IF EXISTS `phplist_admin_task`;
CREATE TABLE IF NOT EXISTS `phplist_admin_task` (
  `adminid` int(11) NOT NULL,
  `taskid` int(11) NOT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`adminid`,`taskid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_attachment`
--

DROP TABLE IF EXISTS `phplist_attachment`;
CREATE TABLE IF NOT EXISTS `phplist_attachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) DEFAULT NULL,
  `remotefile` varchar(255) DEFAULT NULL,
  `mimetype` varchar(255) DEFAULT NULL,
  `description` text,
  `size` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_bounce`
--

DROP TABLE IF EXISTS `phplist_bounce`;
CREATE TABLE IF NOT EXISTS `phplist_bounce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `header` text,
  `data` blob,
  `status` varchar(255) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`id`),
  KEY `dateindex` (`date`),
  KEY `statusindex` (`status`(10))
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_bounceregex`
--

DROP TABLE IF EXISTS `phplist_bounceregex`;
CREATE TABLE IF NOT EXISTS `phplist_bounceregex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regex` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `listorder` int(11) DEFAULT '0',
  `admin` int(11) DEFAULT NULL,
  `comment` text,
  `status` varchar(255) DEFAULT NULL,
  `count` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `regex` (`regex`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_bounceregex_bounce`
--

DROP TABLE IF EXISTS `phplist_bounceregex_bounce`;
CREATE TABLE IF NOT EXISTS `phplist_bounceregex_bounce` (
  `regex` int(11) NOT NULL,
  `bounce` int(11) NOT NULL,
  PRIMARY KEY (`regex`,`bounce`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_config`
--

DROP TABLE IF EXISTS `phplist_config`;
CREATE TABLE IF NOT EXISTS `phplist_config` (
  `item` varchar(35) NOT NULL,
  `value` longtext,
  `editable` tinyint(4) DEFAULT '1',
  `type` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `phplist_config`
--

INSERT INTO `phplist_config` (`item`, `value`, `editable`, `type`) VALUES
('updatelastcheck', '2012-11-01 14:58:40', 0, NULL),
('version', '2.10.19', 0, NULL),
('website', 'localhost', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_eventlog`
--

DROP TABLE IF EXISTS `phplist_eventlog`;
CREATE TABLE IF NOT EXISTS `phplist_eventlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entered` datetime DEFAULT NULL,
  `page` varchar(100) DEFAULT NULL,
  `entry` text,
  PRIMARY KEY (`id`),
  KEY `enteredidx` (`entered`),
  KEY `pageidx` (`page`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_linktrack`
--

DROP TABLE IF EXISTS `phplist_linktrack`;
CREATE TABLE IF NOT EXISTS `phplist_linktrack` (
  `linkid` int(11) NOT NULL AUTO_INCREMENT,
  `messageid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `forward` text,
  `firstclick` datetime DEFAULT NULL,
  `latestclick` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `clicked` int(11) DEFAULT '0',
  PRIMARY KEY (`linkid`),
  UNIQUE KEY `messageid` (`messageid`,`userid`,`url`),
  KEY `midindex` (`messageid`),
  KEY `uidindex` (`userid`),
  KEY `urlindex` (`url`),
  KEY `miduidindex` (`messageid`,`userid`),
  KEY `miduidurlindex` (`messageid`,`userid`,`url`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_linktrack_userclick`
--

DROP TABLE IF EXISTS `phplist_linktrack_userclick`;
CREATE TABLE IF NOT EXISTS `phplist_linktrack_userclick` (
  `linkid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `messageid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `data` text,
  `date` datetime DEFAULT NULL,
  KEY `linkindex` (`linkid`),
  KEY `uidindex` (`userid`),
  KEY `midindex` (`messageid`),
  KEY `linkuserindex` (`linkid`,`userid`),
  KEY `linkusermessageindex` (`linkid`,`userid`,`messageid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_list`
--

DROP TABLE IF EXISTS `phplist_list`;
CREATE TABLE IF NOT EXISTS `phplist_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `entered` datetime DEFAULT NULL,
  `listorder` int(11) DEFAULT NULL,
  `prefix` varchar(10) DEFAULT NULL,
  `rssfeed` varchar(255) DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(4) DEFAULT NULL,
  `owner` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nameidx` (`name`),
  KEY `listorderidx` (`listorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `phplist_list`
--

INSERT INTO `phplist_list` (`id`, `name`, `description`, `entered`, `listorder`, `prefix`, `rssfeed`, `modified`, `active`, `owner`) VALUES
(1, 'test', 'List for testing.', '2012-11-01 14:58:40', NULL, NULL, NULL, '2012-11-01 19:28:40', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_listmessage`
--

DROP TABLE IF EXISTS `phplist_listmessage`;
CREATE TABLE IF NOT EXISTS `phplist_listmessage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `messageid` int(11) NOT NULL,
  `listid` int(11) NOT NULL,
  `entered` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `messageid` (`messageid`,`listid`),
  KEY `listmessageidx` (`listid`,`messageid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_listrss`
--

DROP TABLE IF EXISTS `phplist_listrss`;
CREATE TABLE IF NOT EXISTS `phplist_listrss` (
  `listid` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `entered` datetime NOT NULL,
  `info` text,
  KEY `listididx` (`listid`),
  KEY `enteredidx` (`entered`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_listuser`
--

DROP TABLE IF EXISTS `phplist_listuser`;
CREATE TABLE IF NOT EXISTS `phplist_listuser` (
  `userid` int(11) NOT NULL,
  `listid` int(11) NOT NULL,
  `entered` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`userid`,`listid`),
  KEY `userenteredidx` (`userid`,`entered`),
  KEY `userlistenteredidx` (`userid`,`listid`,`entered`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_message`
--

DROP TABLE IF EXISTS `phplist_message`;
CREATE TABLE IF NOT EXISTS `phplist_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL DEFAULT '(no subject)',
  `fromfield` varchar(255) NOT NULL DEFAULT '',
  `tofield` varchar(255) NOT NULL DEFAULT '',
  `replyto` varchar(255) NOT NULL DEFAULT '',
  `message` longtext,
  `textmessage` longtext,
  `footer` text,
  `entered` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `embargo` datetime DEFAULT NULL,
  `repeatinterval` int(11) DEFAULT '0',
  `repeatuntil` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `userselection` text,
  `sent` datetime DEFAULT NULL,
  `htmlformatted` tinyint(4) DEFAULT '0',
  `sendformat` varchar(20) DEFAULT NULL,
  `template` int(11) DEFAULT NULL,
  `processed` mediumint(8) unsigned DEFAULT '0',
  `astext` int(11) DEFAULT '0',
  `ashtml` int(11) DEFAULT '0',
  `astextandhtml` int(11) DEFAULT '0',
  `aspdf` int(11) DEFAULT '0',
  `astextandpdf` int(11) DEFAULT '0',
  `viewed` int(11) DEFAULT '0',
  `bouncecount` int(11) DEFAULT '0',
  `sendstart` datetime DEFAULT NULL,
  `rsstemplate` varchar(100) DEFAULT NULL,
  `owner` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_messagedata`
--

DROP TABLE IF EXISTS `phplist_messagedata`;
CREATE TABLE IF NOT EXISTS `phplist_messagedata` (
  `name` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `data` text,
  PRIMARY KEY (`name`,`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_message_attachment`
--

DROP TABLE IF EXISTS `phplist_message_attachment`;
CREATE TABLE IF NOT EXISTS `phplist_message_attachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `messageid` int(11) NOT NULL,
  `attachmentid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `messageidx` (`messageid`),
  KEY `messageattidx` (`messageid`,`attachmentid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_rssitem`
--

DROP TABLE IF EXISTS `phplist_rssitem`;
CREATE TABLE IF NOT EXISTS `phplist_rssitem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `source` varchar(255) DEFAULT NULL,
  `list` int(11) NOT NULL,
  `added` datetime DEFAULT NULL,
  `processed` mediumint(8) unsigned DEFAULT '0',
  `astext` int(11) DEFAULT '0',
  `ashtml` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `titlelinkidx` (`title`,`link`),
  KEY `titleidx` (`title`),
  KEY `listidx` (`list`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_rssitem_data`
--

DROP TABLE IF EXISTS `phplist_rssitem_data`;
CREATE TABLE IF NOT EXISTS `phplist_rssitem_data` (
  `itemid` int(11) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `data` text,
  PRIMARY KEY (`itemid`,`tag`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_rssitem_user`
--

DROP TABLE IF EXISTS `phplist_rssitem_user`;
CREATE TABLE IF NOT EXISTS `phplist_rssitem_user` (
  `itemid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`itemid`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_sendprocess`
--

DROP TABLE IF EXISTS `phplist_sendprocess`;
CREATE TABLE IF NOT EXISTS `phplist_sendprocess` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `started` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alive` int(11) DEFAULT '1',
  `ipaddress` varchar(50) DEFAULT NULL,
  `page` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_subscribepage`
--

DROP TABLE IF EXISTS `phplist_subscribepage`;
CREATE TABLE IF NOT EXISTS `phplist_subscribepage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `active` tinyint(4) DEFAULT '0',
  `owner` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_subscribepage_data`
--

DROP TABLE IF EXISTS `phplist_subscribepage_data`;
CREATE TABLE IF NOT EXISTS `phplist_subscribepage_data` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `data` text,
  PRIMARY KEY (`id`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_task`
--

DROP TABLE IF EXISTS `phplist_task`;
CREATE TABLE IF NOT EXISTS `phplist_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page` (`page`),
  KEY `pageidx` (`page`),
  KEY `pagetypeidx` (`page`,`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `phplist_task`
--

INSERT INTO `phplist_task` (`id`, `page`, `type`) VALUES
(50, 'admin', 'admin'),
(1, 'adminattributes', 'system'),
(49, 'admins', 'admin'),
(2, 'attributes', 'system'),
(11, 'bounce', 'system'),
(10, 'bounces', 'system'),
(4, 'configure', 'system'),
(19, 'dbcheck', 'system'),
(7, 'defaultconfig', 'system'),
(8, 'defaults', 'system'),
(25, 'dlusers', 'user'),
(26, 'editattributes', 'user'),
(21, 'editlist', 'list'),
(13, 'eventlog', 'system'),
(33, 'export', 'user'),
(15, 'getrss', 'system'),
(32, 'import', 'user'),
(28, 'import1', 'user'),
(29, 'import2', 'user'),
(30, 'import3', 'user'),
(31, 'import4', 'user'),
(9, 'initialise', 'system'),
(20, 'list', 'list'),
(34, 'massunconfirm', 'user'),
(44, 'mclicks', 'clickstats'),
(22, 'members', 'list'),
(35, 'message', 'message'),
(36, 'messages', 'message'),
(47, 'mviews', 'clickstats'),
(39, 'preparesend', 'message'),
(12, 'processbounces', 'system'),
(37, 'processqueue', 'message'),
(17, 'purgerss', 'system'),
(14, 'reconcileusers', 'system'),
(38, 'send', 'message'),
(40, 'sendprepared', 'message'),
(18, 'setup', 'system'),
(5, 'spage', 'system'),
(6, 'spageedit', 'system'),
(43, 'statsmgt', 'clickstats'),
(48, 'statsoverview', 'clickstats'),
(41, 'template', 'message'),
(42, 'templates', 'message'),
(45, 'uclicks', 'clickstats'),
(3, 'upgrade', 'system'),
(23, 'user', 'user'),
(27, 'usercheck', 'user'),
(46, 'userclicks', 'clickstats'),
(24, 'users', 'user'),
(16, 'viewrss', 'system');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_template`
--

DROP TABLE IF EXISTS `phplist_template`;
CREATE TABLE IF NOT EXISTS `phplist_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `template` longblob,
  `listorder` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_templateimage`
--

DROP TABLE IF EXISTS `phplist_templateimage`;
CREATE TABLE IF NOT EXISTS `phplist_templateimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `template` int(11) NOT NULL DEFAULT '0',
  `mimetype` varchar(100) DEFAULT NULL,
  `filename` varchar(100) DEFAULT NULL,
  `data` longblob,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `templateidx` (`template`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_urlcache`
--

DROP TABLE IF EXISTS `phplist_urlcache`;
CREATE TABLE IF NOT EXISTS `phplist_urlcache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `lastmodified` int(11) DEFAULT NULL,
  `added` datetime DEFAULT NULL,
  `content` mediumtext,
  PRIMARY KEY (`id`),
  KEY `urlindex` (`url`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_usermessage`
--

DROP TABLE IF EXISTS `phplist_usermessage`;
CREATE TABLE IF NOT EXISTS `phplist_usermessage` (
  `messageid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `entered` datetime NOT NULL,
  `viewed` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userid`,`messageid`),
  KEY `messageidindex` (`messageid`),
  KEY `useridindex` (`userid`),
  KEY `enteredindex` (`entered`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_userstats`
--

DROP TABLE IF EXISTS `phplist_userstats`;
CREATE TABLE IF NOT EXISTS `phplist_userstats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unixdate` int(11) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `listid` int(11) DEFAULT '0',
  `value` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `entry` (`unixdate`,`item`,`listid`),
  KEY `dateindex` (`unixdate`),
  KEY `itemindex` (`item`),
  KEY `listindex` (`listid`),
  KEY `listdateindex` (`listid`,`unixdate`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_user_attribute`
--

DROP TABLE IF EXISTS `phplist_user_attribute`;
CREATE TABLE IF NOT EXISTS `phplist_user_attribute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(30) DEFAULT NULL,
  `listorder` int(11) DEFAULT NULL,
  `default_value` varchar(255) DEFAULT NULL,
  `required` tinyint(4) DEFAULT NULL,
  `tablename` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nameindex` (`name`),
  KEY `idnameindex` (`id`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_user_blacklist`
--

DROP TABLE IF EXISTS `phplist_user_blacklist`;
CREATE TABLE IF NOT EXISTS `phplist_user_blacklist` (
  `email` varchar(100) NOT NULL,
  `added` datetime DEFAULT NULL,
  UNIQUE KEY `email` (`email`),
  KEY `emailidx` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_user_blacklist_data`
--

DROP TABLE IF EXISTS `phplist_user_blacklist_data`;
CREATE TABLE IF NOT EXISTS `phplist_user_blacklist_data` (
  `email` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `data` text,
  UNIQUE KEY `email` (`email`),
  KEY `emailidx` (`email`),
  KEY `emailnameidx` (`email`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_user_message_bounce`
--

DROP TABLE IF EXISTS `phplist_user_message_bounce`;
CREATE TABLE IF NOT EXISTS `phplist_user_message_bounce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `message` int(11) NOT NULL,
  `bounce` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `umbindex` (`user`,`message`,`bounce`),
  KEY `useridx` (`user`),
  KEY `msgidx` (`message`),
  KEY `bounceidx` (`bounce`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_user_message_forward`
--

DROP TABLE IF EXISTS `phplist_user_message_forward`;
CREATE TABLE IF NOT EXISTS `phplist_user_message_forward` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `message` int(11) NOT NULL,
  `forward` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `usermessageidx` (`user`,`message`),
  KEY `useridx` (`user`),
  KEY `messageidx` (`message`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_user_rss`
--

DROP TABLE IF EXISTS `phplist_user_rss`;
CREATE TABLE IF NOT EXISTS `phplist_user_rss` (
  `userid` int(11) NOT NULL,
  `last` datetime DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_user_user`
--

DROP TABLE IF EXISTS `phplist_user_user`;
CREATE TABLE IF NOT EXISTS `phplist_user_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `confirmed` tinyint(4) DEFAULT '0',
  `blacklisted` tinyint(4) DEFAULT '0',
  `bouncecount` int(11) DEFAULT '0',
  `entered` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uniqid` varchar(255) DEFAULT NULL,
  `htmlemail` tinyint(4) DEFAULT '0',
  `subscribepage` int(11) DEFAULT NULL,
  `rssfrequency` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `passwordchanged` date DEFAULT NULL,
  `disabled` tinyint(4) DEFAULT '0',
  `extradata` text,
  `foreignkey` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `foreignkey` (`foreignkey`),
  KEY `idx_phplist_user_user_uniqid` (`uniqid`),
  KEY `emailidx` (`email`),
  KEY `enteredindex` (`entered`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_user_user_attribute`
--

DROP TABLE IF EXISTS `phplist_user_user_attribute`;
CREATE TABLE IF NOT EXISTS `phplist_user_user_attribute` (
  `attributeid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `value` text,
  PRIMARY KEY (`attributeid`,`userid`),
  KEY `userindex` (`userid`),
  KEY `attindex` (`attributeid`),
  KEY `userattid` (`attributeid`,`userid`),
  KEY `attuserid` (`userid`,`attributeid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_user_user_history`
--

DROP TABLE IF EXISTS `phplist_user_user_history`;
CREATE TABLE IF NOT EXISTS `phplist_user_user_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `detail` text,
  `systeminfo` text,
  PRIMARY KEY (`id`),
  KEY `userididx` (`userid`),
  KEY `dateidx` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
