<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * List view for e-Marketing Campaigns, using Datatables.
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
 * Include main configuration file:
 */
require_once 'app/config.php';

//{{{
/*
 * Include records from Joint Vtiger-PHPList Database:
 */
require_once 'lib/DFCInterface.class.php';
require_once 'lib/DFC.class.php';
require_once 'lib/DSC.class.php';
require_once 'lib/DFCAggregate.class.php';
require_once 'lib/Db2PhpEntity.class.php';
require_once 'lib/Db2PhpEntityBase.class.php';
require_once 'lib/Db2PhpEntityModificationTracking.class.php';

require_once 'lib/vtiger/VTigerCampaign.class.php';
require_once 'lib/VTigerPhPListCampaigns.class.php';
require_once 'lib/VTigerPhPListJoin.class.php';
require_once 'lib/phplist/PhPListList.class.php';
//}}}

$campaignsql    = "SELECT * FROM vtiger_phplist_campaigns";
$campaigns      = VTigerPhPListCampaigns::findBySql($dbconnect_bridge, $campaignsql);

if (is_array($campaigns) and count($campaigns) > 0) {
    foreach($campaigns as $campaign) {
        $vtigerObject   = VTigerCampaign::findById($dbconnect_vtiger, 
                                                    $campaign->getVTigerCamPainGId());
        $phplistObject  = PhPListList::findById($dbconnect_phplist, 
                                                    $campaign->getPhPListListId());
        echo "<br/>Vtiger:", var_dump($vtigerObject), "</pre><br/>";
        echo "<br/>Phplist:", var_dump($phplistObject), "</pre><br/>";
    }
}
//Si no hay registros
else {
    //Colocar un enlace a crear campaña de marketing
}
?>