<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Configuration file for E-mailing Campaing Custom Vtiger Module.
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
 * @package    CampaignModule
 * @author     Carlos Paparoni <carlos.paparoni@gmail.com>
 * @copyright  (C) 2012 Carlos Paparoni
 * @license    http://www.gnu.org/licenses/gpl.html GNU General Public Licence v3
 * @version    1.0
 * @link       http://d1m1.heliohost.org/code/php/vtiger-campaign-module
 */

/*
 * Configuration options for Vtiger:
 */
$db_name_vtiger         = "vtigercrm540";
$db_dsn_vtiger          = "mysql:dbname=".$db_name_vtiger.";host=127.0.0.1;port=33307";
$db_user_vtiger         = "root";
$db_pass_vtiger         = "123456";
$dbConnectionVtiger     = new PDO($db_dsn_vtiger, $db_user_vtiger, $db_pass_vtiger);

/*
 * Configuration options for PHPList:
 */
$db_name_phplist        = "phplist";
$db_dsn_phplist         = "mysql:dbname=".$db_name_phplist.";host=127.0.0.1;port=3306";
$db_user_phplist        = "root";
$db_pass_phplist        = "";
$dbConnectionPhplist    = new PDO($db_dsn_phplist, $db_user_phplist, $db_pass_phplist);

/*
 * Configuration options for Vtiger-PHPList join table database:
 */
$db_name_bridge         = "vt_phpl_integration";
$db_dsn_bridge          = "mysql:dbname=".$db_name_bridge.";host=127.0.0.1;port=33307";
$db_user_bridge         = "root";
$db_pass_bridge         = "123456";
$dbconnect_bridge       = new PDO($db_dsn_bridge, $db_user_bridge, $db_pass_bridge);
?>