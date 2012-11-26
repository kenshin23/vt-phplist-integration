<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * HTML outputting functions for Leads in Vtiger
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
require_once 'lib/vtiger/VtigerLeadDetails.class.php';
//}}}

/**
 *
 * @global PDO      $dbConnectionVtiger
 * @param string    $tableId
 * @param array     $leadsInList 
 */
function leadsListTable($tableId = "leads-table", $leadsInList = array()) {
    global $dbConnectionVtiger;
    //Get all leads from database:
    
    $leadssql    = "SELECT * FROM `vtiger_leaddetails` ORDER BY `leadid`";
    $leads       = VTigerLeadDetails::findBySql($dbConnectionVtiger, $leadssql);
    
    //If a search by id fails, findById returns null; otherwise, it returns an object of the class.
?>
<table id="<?php echo $tableId; ?>" class="custom-datatable">
    <thead>
        <tr>
            <th>Apellidos</th>
            <th>Primer Nombre</th>
            <th>Compa&ntilde;&iacute;a</th>
            <th>Correo Electr&oacute;nico</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php
    if(is_array($leads) and count($leads) > 0) {
        foreach ($leads as $lead) {
            echo "<tr>",
                "<td>", $lead->getLastName(), "</td>",
                "<td>", $lead->getFirstName(), "</td>",
                "<td>", $lead->getCompany(), "</td>",
                "<td>", $lead->getEmail(), "</td>",
                "<td>", 
                    "<input type='checkbox' name='contactsToAdd[]' ", 
                    "value=", $lead->getLeadId() ,">";
            if(in_array($lead->getLeadId(), $leadsInList)) {
                echo "<input type='hidden' name='leadsAdded[]' ", 
                     "value=", $lead->getLeadId() ,">"; 
            }
            echo "</td>",
                "</td>",
            "</tr>";
        }
    }
    ?>
    </tbody>
</table>    
<?php    
}
?>
