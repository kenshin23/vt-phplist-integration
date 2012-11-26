-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2012 a las 21:07:29
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `phplist_admintoken`
--

INSERT INTO `phplist_admintoken` (`id`, `adminid`, `value`, `entered`, `expires`) VALUES
(1, 1, '7115dd86430c6a7cd242be3784bfd174', 1351798607, '2012-11-01 16:06:47'),
(2, 1, '65ce2f4be16f89404faa5e6d12130ce3', 1351798727, '2012-11-01 16:08:47'),
(3, 1, '17b2fdd51eb8e9bb2f2b52b01a370b73', 1351798898, '2012-11-01 16:11:38'),
(4, 1, 'a3931fa3dfec3c67b9497de385d148a3', 1351798898, '2012-11-01 16:11:38'),
(8, 1, '800c8465a90892ed9e52fe98cd2b329a', 1351799797, '2012-11-01 16:26:37'),
(9, 1, '73543fae17d2171bb7b0ac75eb5df3c3', 1351799838, '2012-11-01 16:27:18'),
(10, 1, 'ff4c806ab7631a4a22b28380bbf1457b', 1351799846, '2012-11-01 16:27:26'),
(11, 1, '9caa958e697061c12e1d55a4d3d3d39f', 1351800099, '2012-11-01 16:31:39'),
(12, 1, '07d7c7d169875126144bc9504434d2e0', 1351800105, '2012-11-01 16:31:45'),
(13, 1, '715cda7dc3afcf00b2892130e8f9b1f6', 1351800413, '2012-11-01 16:36:53'),
(14, 1, 'b1977b6f0891fd5b07575ff9726bd464', 1351800423, '2012-11-01 16:37:03'),
(15, 1, 'ebb271002a78c52d2eb53728d128118f', 1351800423, '2012-11-01 16:37:03');

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
('admin_address', 'webmaster@[DOMAIN]', 1, NULL),
('admin_addresses', '', 1, NULL),
('alwayssendtextto', 'mail.com\nemail.com', 1, NULL),
('blacklisturl', 'http://[WEBSITE]/lists/?p=blacklist', 1, NULL),
('check_new_version', '7', 1, NULL),
('confirmationmessage', '\n  \n  Welcome to our Newsletter\n\n  Please keep this message for later reference.\n\n  Your email address has been added to the following newsletter(s):\n  [LISTS]\n\n  To update your details and preferences please go to [PREFERENCESURL].\n  If you do not want to receive any more messages, please go to [UNSUBSCRIBEURL].\n\n  Thank you\n  \n  ', 1, NULL),
('confirmationsubject', 'Welcome to our Newsletter', 1, NULL),
('confirmationurl', 'http://[WEBSITE]/lists/?p=confirm', 1, NULL),
('defaultmessagetemplate', '0', 1, NULL),
('defaultsubscribepage', '1', 1, NULL),
('domain', 'localhost', 1, NULL),
('emailchanged_text', '\n  When updating your details, your email address has changed.\n  Please confirm your new email address by visiting this webpage:\n  \n  [CONFIRMATIONURL]\n  \n  ', 1, NULL),
('emailchanged_text_oldaddress', '\n  Please Note: when updating your details, your email address has changed.\n\n  A message has been sent to your new email address with a URL\n  to confirm this change. Please visit this website to activate\n  your membership.\n  ', 1, NULL),
('fckeditor_height', '600', 1, NULL),
('fckeditor_width', '600', 1, NULL),
('forwardfooter', '--\nThis message has been forwarded to you by [FORWARDEDBY].\n  You have not been automatically subscribed to this newsletter.\n  To subscribe to this newsletter go to\n\n [SUBSCRIBE]\nClick [BLACKLIST] to refuse further email from this website', 1, NULL),
('forwardurl', 'http://[WEBSITE]/lists/?p=forward', 1, NULL),
('hide_single_list', '1', 1, NULL),
('html_charset', 'UTF-8', 1, NULL),
('html_email_style', '\n  <style type="text/css">\n  body { font-size : 11px; font-family: Verdana, Arial, Helvetica, sans-serif; }\n  a { font-size: 11px; color: #ff6600; font-style: normal; font-family: verdana, sans-serif; text-decoration: none; }\n  a:visited { color: #666666; }\n  a:hover {  text-decoration: underline; }\n  p { font-weight: normal; font-size: 11px; color: #666666; font-style: normal; font-family: verdana, sans-serif; text-decoration: none; }\n  h1 {font-weight: bold; font-size: 14px; color: #666666; font-style: normal; font-family: verdana, sans-serif; text-decoration: none;}\n  h2 {font-weight: bold; font-size: 13px; color: #666666; font-style: normal; font-family: verdana, sans-serif; text-decoration: none;}\n  h3 {font-weight: bold; font-size: 12px; color: #666666; font-style: normal; font-family: verdana, sans-serif; text-decoration: none; margin:0px; padding:0px;}\n  h4 {font-weight: bold; font-size: 11px; color: #666666; font-style: normal; font-family: verdana, sans-serif; text-decoration: none; margin:0px; padding:0px;}\n  hr {width : 100%; height : 1px; color: #ff9900; size:1px;}\n  .forwardform {margin: 0 0 0 0; padding: 0 0 0 0;}\n  .forwardinput {margin: 0 0 0 0; padding: 0 0 0 0;}\n  .forwardsubmit {margin: 0 0 0 0; padding: 0 0 0 0;}\n  div.emailfooter { font-size : 11px; font-family: Verdana, Arial, Helvetica, sans-serif; }\n  div.emailfooter a { font-size: 11px; color: #ff6600; font-style: normal; font-family: verdana, sans-serif; text-decoration: none; }\n  </style>\n  ', 1, NULL),
('membership_columns', '', 1, NULL),
('messagefooter', '--\nIf you do not want to receive any more newsletters,  [UNSUBSCRIBE]\n\nTo update your preferences and to unsubscribe visit [PREFERENCES]\nForward a Message to Someone [FORWARD]', 1, NULL),
('message_from_address', 'noreply@[DOMAIN]', 1, NULL),
('message_from_name', 'Webmaster', 1, NULL),
('message_replyto_address', 'noreply@[DOMAIN]', 1, NULL),
('pagefooter', '</div>\n</td>\n<td>\n<div class="menutableright">\n\n</div>\n</td>\n</tr>\n\n\n\n\n<tr><td colspan="4">&nbsp;</td></tr>\n\n\n\n<tr><td colspan="4">&nbsp;</td></tr>\n</table>\n<!--TOP TABLE ends-->\n\n</td></tr>\n\n\n<tr>\n<td bgcolor="#000000" colspan=3><img height=1 alt="" src="images/transparent.png" width=1 border=0></td>\n</tr>\n\n<tr>\n<td bgcolor="#000000"><img height=1 alt="" src="images/transparent.png" width=1 border=0></td>\n<td bgcolor="#ff9900" class="bottom">&copy; <a href="http://phplist.com" target="_phplist" class="urhere">phpList limited</a> | <a class="urhere" href="http://www.phplist.com" target="_blank">phplist</a></td>\n<td bgcolor="#000000"><img height=1 alt="" src="images/transparent.png" width=1 border=0></td>\n</tr>\n\n<tr>\n<td bgcolor="#000000" colspan=3><img height=1 alt="" src="images/transparent.png" width=1 border=0></td>\n</tr>\n\n<tr>\n<td colspan=3><img height=3 alt="" src="images/transparent.png" width=1 border=0></td>\n</tr>\n\n<tr>\n<td colspan=3>\n&nbsp;\n</td>\n</tr>\n</tbody>\n</table>\n\n</div>\n</body></html>\n', 1, NULL),
('pageheader', '<link href="styles/phplist.css" type="text/css" rel="stylesheet">\n</head>\n<body bgcolor="#ffffff" background="images/bg.png">\n<a name="top"></a>\n<div align=center>\n<table cellspacing=0 cellpadding=0 width=710 border=0>\n<tr>\n<td bgcolor="#000000" rowspan=3><img height=1 alt="" src="images/transparent.png" width=1 border=0></td>\n<td bgcolor="#000000"><img height=1 alt="" src="images/transparent.png" width=708 border=0></td>\n<td bgcolor="#000000" rowspan=3><img height=1 alt="" src="images/transparent.png" width=1 border=0></td>\n</tr>\n\n<tr valign="top" align="left">\n<td>\n<!--TOP TABLE starts-->\n<TABLE cellSpacing=0 cellPadding=0 width=708 bgColor=#ffffff border=0>\n  <TR vAlign=top>\n    <TD colSpan=2 rowspan="2" height="63" background="images/topstrip.png"><a href="http://www.phplist.com" target="_blank"><img src="images/masthead.png" border=0 width=577 height=75></a></TD>\n    <TD align=left\n      background="images/topstrip.png" bgcolor="#F0D1A3"><FONT\n      size=-2>&nbsp;<I>powered by: </I><BR>&nbsp;<B>[<A class=powered\n      href="http://www.php.net/" target=_new><I>PHP</I></A>]</B> + <B>[<A\n      class=powered href="http://www.mysql.com/"\n      target=_new>mySQL</A>]</B></FONT></TD></TR>\n  <TR vAlign=bottom>\n    <TD vAlign=bottom width=132\n    background="images/topright.png" bgcolor="#F0D1A3"><SPAN\n      class=webblermenu>PHPlist</SPAN></TD></TR>\n  <TR>\n    <TD bgColor=#000000><IMG height=1 alt=""\n      src="images/transparent.png" width=20\n      border=0></TD>\n    <TD bgColor=#000000><IMG height=1 alt=""\n      src="images/transparent.png" width=576\n      border=0></TD>\n    <TD bgColor=#000000><IMG height=1 alt=""\n      src="images/transparent.png" width=132\n      border=0></TD></TR>\n  <TR vAlign=top>\n    <TD>&nbsp;</TD>\n<td><div align=left>\n<br />\n', 1, NULL),
('personallocation_message', '\n  \n  You have requested your personal location to update your details from our website.\n  The location is below. Please make sure that you use the full line as mentioned below.\n  Sometimes email programme can wrap the line into multiple lines.\n  \n  Your personal location is:\n  [PREFERENCESURL]\n  \n  Thank you.\n  ', 1, NULL),
('personallocation_subject', 'Your personal location', 1, NULL),
('preferencesurl', 'http://[WEBSITE]/lists/?p=preferences', 1, NULL),
('report_address', 'listreports@[DOMAIN]', 1, NULL),
('send_admin_copies', '0', 1, NULL),
('subscribemessage', '\n\n  Almost welcome to our newsletter(s) ...\n\n  Someone, hopefully you, has subscribed your email address to the following newsletters:\n  \n  [LISTS]\n\n  If this is correct, please click the following link to confirm your subscription.\n  Without this confirmation, you will not receive any newsletters.\n  \n  [CONFIRMATIONURL]\n  \n  If this is not correct, you do not need to do anything, simply delete this message.\n\n  Thank you\n  \n    ', 1, NULL),
('subscribesubject', 'Request for confirmation', 1, NULL),
('subscribeurl', 'http://[WEBSITE]/lists/?p=subscribe', 1, NULL),
('textarea_dimensions', '10,40', 1, NULL),
('textline_width', '40', 1, NULL),
('text_charset', 'UTF-8', 1, NULL),
('unsubscribemessage', '\n  Goodbye from our Newsletter, sorry to see you go.\n\n  You have been unsubscribed from our newsletters.\n\n  This is the last email you will receive from us. We have added you to our\n  "do not send list", which means that our newsletter system, phpList, will\n  not send you any further messages, without manual intervention by our administrator.\n\n  If there is an error in this information, you can re-subscribe:\n  please go to [SUBSCRIBEURL] and follow the steps.\n\n  Thank you\n  \n  ', 1, NULL),
('unsubscribesubject', 'Goodbye from our Newsletter', 1, NULL),
('unsubscribeurl', 'http://[WEBSITE]/lists/?p=unsubscribe', 1, NULL),
('updatelastcheck', '2012-11-01 14:58:40', 0, NULL),
('updatemessage', '\n  \n  This message is to inform you of a change of your details on our newsletter database\n\n  You are currently member of the following newsletters:\n  \n  [LISTS]\n  \n  [CONFIRMATIONINFO]\n  \n  The information on our system for you is as follows:\n  \n  [USERDATA]\n  \n  If this is not correct, please update your information at the following location:\n  \n  [PREFERENCESURL]\n  \n  Thank you\n  \n    ', 1, NULL),
('updatesubject', '[notify] Change of List-Membership details', 1, NULL),
('version', '2.10.19', 0, NULL),
('website', 'localhost', 1, NULL),
('xormask', '1a60c4ea4b2ac4a777bc411710295551', 0, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `phplist_list`
--

INSERT INTO `phplist_list` (`id`, `name`, `description`, `entered`, `listorder`, `prefix`, `rssfeed`, `modified`, `active`, `owner`) VALUES
(1, 'test', 'List for testing.', '2012-11-01 14:58:40', NULL, NULL, NULL, '2012-11-01 19:28:40', 0, 1),
(2, 'prueba_lista01', 'Lista de prueba No. 1', '2012-11-01 15:35:25', 0, '', '', '2012-11-01 20:05:25', 1, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `phplist_user_user`
--

INSERT INTO `phplist_user_user` (`id`, `email`, `confirmed`, `blacklisted`, `bouncecount`, `entered`, `modified`, `uniqid`, `htmlemail`, `subscribepage`, `rssfrequency`, `password`, `passwordchanged`, `disabled`, `extradata`, `foreignkey`) VALUES
(2, 'prueba_nuevo_user01@test.com', 1, 0, 0, '2012-11-01 15:25:22', '2012-11-01 19:55:22', '5568a1809abbd3b57bef49c862bf46bc', 1, NULL, '', '', '2012-11-01', 0, '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
