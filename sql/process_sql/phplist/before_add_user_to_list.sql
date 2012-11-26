-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2012 a las 01:47:45
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
--

DROP TABLE IF EXISTS `phplist_admintoken`;
CREATE TABLE IF NOT EXISTS `phplist_admintoken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminid` int(11) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `entered` int(11) NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

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
(15, 1, 'ebb271002a78c52d2eb53728d128118f', 1351800423, '2012-11-01 16:37:03'),
(17, 1, '79dcbb88841d7e66f9256bce24536e70', 1351800484, '2012-11-01 16:38:04'),
(18, 1, '9eee0015709a1b957d1e8b0765abede0', 1351987750, '2012-11-03 20:39:10'),
(19, 1, '7c34ba1e5d2caf3be7e930504b142d61', 1351987760, '2012-11-03 20:39:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_admin_attribute`
--
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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

--
-- Volcado de datos para la tabla `phplist_listuser`
--

INSERT INTO `phplist_listuser` (`userid`, `listid`, `entered`, `modified`) VALUES
(2, 2, NULL, '2012-11-01 20:08:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_message`
--
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
--

DROP TABLE IF EXISTS `phplist_template`;
CREATE TABLE IF NOT EXISTS `phplist_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `template` longblob,
  `listorder` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `phplist_template`
--

INSERT INTO `phplist_template` (`id`, `title`, `template`, `listorder`) VALUES
(1, 'testtemplate', 0x3c703e546869732069732074686520636f6e74656e742e3c2f703e0d0a3c703e5b434f4e54454e545d3c2f703e, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_templateimage`
--
-- Creación: 01-11-2012 a las 19:28:40
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `phplist_templateimage`
--

INSERT INTO `phplist_templateimage` (`id`, `template`, `mimetype`, `filename`, `data`, `width`, `height`) VALUES
(1, 1, 'image/png', 'powerphplist.png', 0x6956424f5277304b47676f414141414e5355684555674141414559414141416543414d414141436d4c5a6773414141444146424d564558597836666d664758666e6d43636847643356445069706d726f755949484277653371704e6c566b546d635748646d4672665254656f6a57334970586e32354c376d6f335461476865366d584c436d6d2b376c476e6e746e377378355378683175736b33616b6445664269465074794a66676f32626a7157376b726e546a716e4470726f4b3170496e764f44525254454b46656d6e757a614174495258656e46374b714948666e324b4863566a74795a6a6e7148726e6b6e4c6870476a6e743448654d797a6c6e6e487231724c6b6d5733574141446c6c477555666d50634b534d6346784c6e754943556431663033376b714a69447176343773785a4c594151484c744a4c664f5449374b6872496e6e4871775937685455487a327247446256547a3237586b7233584a764b506e6733487579707a6f756f5072776f2f68586b337831717a71774976697a6176727770447530617471595654716e6f4264547a37516c46767174596267535431346357506172333368596b727730715a4b516a6a646d6c3132586b50537635324e6848506f76496a6a72484c5a44517a3033626273785a486371336667516a73554567393259556d55696e6a67704762767a36505a74596a63703354723262574561557a7a334c5878314b68464f693770766f6a79324b333134727a6a76597a6a663245774c43627730715276557a6232354d426f536933676f6d58646d46766c735868424f7a496948787277303669386f487a78317172717749766d6a57743461566146586a6e6f70487a757935373234722f7375704d354d797a656d6c337176347278314b626f7534626d7559546f736f48687961546970576e676f57546d7448766d7333726a72584c6d736e32796630374f6b46663133377a7378356277314b766d73586a6f713333757a7154737870546f756f6a646c31766c5a6c76737770447931367244745a726b624671336a6d486855555868706d72624878726958302f6c736e7269726e663134722f747936425a5069586f7559666c736e6a6d735876696d6d5a6151536a6971477669706d6e68706d6e323437336d736e6a6f7649627478356e656d3133773061524b4e434469705772727735547376593771766f6b4f4441726857556e7177492f69703276656d567a6c706e54727735486a7133447931374469686c2f7853555076626c334e75353367554550665144506870576e6c68326e776933546f6958446f7559587432376e30334c4f316e5833624642486a6c6d626143416e726f485859434166427335665771585873785a626e77497a6a594650727735446477703370765979556144374f6e323752706e6a5870584473774a545770472f67736e336c774a4879344c763033376a69614662646d567a636c316b4441674545417749414141434a4a7a43734141414141574a4c52305141694155645341414141416c7753466c7a4141414c45674141437849423074312b2f414141414164305355314642394d4b46516f6c4377652f39355141414158755355524256486963725a4635584a4a33484d6456486f646d5a68636d4371627a52464e525362477043486b32744634367936795179697570374c444470536c67706f566d486a4e41586933545773304f6a3871743071784a7879686e314c5a676131753274566f75323930496e33312f44376a31393759507a2b2f372b78362f37357676383373736a50394234784d79576868662f6d737867745367307362727377456a4d52676b426f6d6442497a425947646e6b4944737a4c76456c4a57677750425341736c6a45454c434474597878516671306c4b4251504252446d41672b346c424b42516154444c7451736b7276726c4545496d616b43684a41414d516453574247525457312f4e777646636f302b446c67327a6e4d6678645753386b63437173336e6f4d4c4161473754785958772b2b544f6739567538394e6a68594c3653397078616f533957434a2b696c66454138716a507572446d59775a503179737035592b5579486857797549387a376f4e68506f5049594c302b5670435258665535794d61756f715a422f62504b526f4767636374314f6d43735150446e355653656c5257476a5a587a714a6833427072474373316868616168597067564b7073795670676d417a55785a6c2f66676c5435724e4e6f4d6334413861674d4270724757356242347a4634336b534367544f755967774d4177384d647048494f4f4d4d4270574865686930487138746a594252422b6e484c635956437247595231556f464f687578417076544d777256356a75527047684f5468784e39374f6341373869776f786c53635751304450726b54445650476c4e4d4451614f765877364c5261494777694944592f2f614a4b764c455968534b616159546e5433385252315656523156555671453065763163726e2b6b76776132755236666144386b7435616a724c36546e44312b76352b6553637136432f702b2f58366134487951446a5a4c33654e7175796f36756a59666f54536831374b756d396f614d6836434a6b2b61324c7647304c4f5244525237594f444b49334f77365036716e41373071493036644151594f69677556774f68385869734f496530756b5064527769594e366c3938306a697a5a447559394f6e79556133376d52506d4d723341354f4a763036447a596a576d79766f42773648544261726261477938714e4f2f6d306978555871745665304846794d2f3963474d37712b6b34625274596b61416e4e457545375a2f2b3042493963757a494c392f7435567554572f57536358564868455357464b6d4263566170755474654f344f445179617a544431577143354d35334a7268304c7336316d647253475252676b71566f314b70547248484e3674493550307a6e6a2b66627a2f2f7a504c644d6536525274755947462b4b613436724b3243536b704b36574e3344734f6c596d63464a53634d36546b457a524474597232386b6155522b535951414d2b2f4d5874795743467179612b506a44355159393862584a6b7452416a413955696d5464544e59657236396d336c795474763564706a47726131743667725770327351526e705a32765a6847357047476b5975435a76352f48484572535078386474586c65447035374b5655756e6c79314c41744c516f76786835744842507750314a5479666433784d51454d6370434a69365a38556a7a70633938464a2b5371577952616b38785461753750484e777645733277536e41305866784d636a7a444d4b64437462576742446f564361622b6243312b486b6a6e774c686a755a5535413544527a645567724355416a4e424d78766c4f6b6c496731386f4e556865586c46674c454e4d68557067496b414e56737952365a314d626e4d7270487765356d63676e766875557a4c3878455259534b525877516868486b63394e6f47587966507248474e5456356548734a51676b78567743516a4262574842732b315050376d334b6e446f584763754941356f584d6f6b435942427056665377624d3275585a73667933516b4a535066426c49532b4b59694a68476c4d78475442586d7378794f7a337465484254557a744d553966556c4978534a4247625a43704f46786e582f6e34754e65534e46792b4b6250483054596c48664f474476305055726a514235754e745a6a5872574b6472746d3044444c634f5170516e6954547054766232396b3554707250487730495770432b7a575856694e56746a6b2b68316577704d30325275425577316f596271616a63754b374f6d75727064783248574e565154767a414e72696d4a334c577278472b3343462f3939546f63332b3952675a4d395532747656302f5a68532f4a4a6a6f624767415461314a4b374e4c75384a4e754b6246756353787558596f7036565152435244416548366556624a7530344a6c575242376550376f667a76326c6d39575a4d495052474e734c4742477a55714c6167397769306f627662453433504b5830625452305a5355305130506e4234386348643374374859394c323778522f4678616b6e46746859654c6e6b7036536c76623362337466556d66492b594b4b6a382f4f6a7a59617754786266414876553063572f7472447954754b6866513444447355446f4f4a69423466695241472f4e5272712b6559323467474d4936476a61434535746a71322b76767a76516f4669776745614d426859414474446d566e457975392b4843474f50685059797467584d7a7968325a2b626131586f627279384a334576454e6e7938724b4846355632623745773456386c31666b622b357a41637a2f6f72384167336f7a5a465a5833473041414141415355564f524b35435949493d, 70, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phplist_urlcache`
--
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
-- Creación: 01-11-2012 a las 19:28:40
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
