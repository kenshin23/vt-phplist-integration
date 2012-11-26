<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Various functions needed to output HTML based on values from Vtiger's or PHPList's databases.
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

//{{{ requires and includes
/*
 * Include main configuration file:
 */
require_once 'app/config.php';
/**
 * Requires & Includes section - for custom CRUD-like classes to handle Vtiger's database:
 */
require_once 'lib/DFCInterface.class.php';
require_once 'lib/DFC.class.php';
require_once 'lib/DSC.class.php';
require_once 'lib/DFCAggregate.class.php';
require_once 'lib/Db2PhpEntity.class.php';
require_once 'lib/Db2PhpEntityBase.class.php';
require_once 'lib/Db2PhpEntityModificationTracking.class.php';
//}}}


function campaignUserListSelect($current = NULL) {

}

function campaignAssignedGroupIdSelect($current = NULL) {

}

function campaignStatusSelect($current = NULL) {

}

function campaignTypeSelect($current = NULL) {

}

function campaignExpectedResponseSelect($current = NULL) {

}
?>