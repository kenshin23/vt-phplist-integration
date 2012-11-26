<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * HTML outputting functions for Contacts in Vtiger
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
require_once 'lib/vtiger/VtigerContactDetails.class.php';
require_once 'lib/vtiger/VtigerAccount.class.php';
//}}}


//{{{ Pseudo-singletons:
/**
 * Instance of the class VTigerAccount
 * 
 * Handles Account data related to a Contact.
 */
$account = new VTigerAccount();
//}}}

/**
 *
 * @global PDO              $dbConnectionVtiger
 * @global VTigerAccount    $account
 * @param string            $tableId
 * @param array             $contactsInList 
 */
function contactsListTable($tableId = "contacts-table", $contactsInList = array()) {
    global $dbConnectionVtiger;
    global $account;
    //Get all contacts from database:
    
    $contactssql    = "SELECT * FROM `vtiger_contactdetails` ORDER BY `contactid`";
    $contacts       = VTigerContactDetails::findBySql($dbConnectionVtiger, $contactssql);
    
    //If a search by id fails, findById returns null; otherwise, it returns an object of the class.
?>
<table id="<?php echo $tableId; ?>" class="custom-datatable">
    <thead>
        <tr>
            <th>Apellidos</th>
            <th>Primer Nombre</th>
            <th>T&iacute;tulo</th>
            <th>Nombre de Organizaci&oacute;n</th>
            <th>Correo Electr&oacute;nico</th>
            <th>Tel&eacute;fono de Oficina</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php
    if(is_array($contacts) and count($contacts) > 0) {
        foreach ($contacts as $contact) {
            $auxaccount = VTigerAccount::findById($dbConnectionVtiger, $contact->getAccountId());
            $accountname    = $auxaccount->getAccountName();
            
            echo "<tr>",
                 "<td>", $contact->getLastName(), "</td>",
                 "<td>", $contact->getFirstName(), "</td>",
                 "<td>", $contact->getTitle(), "</td>",
                 "<td>", $accountname ,"</td>",
                 "<td>", $contact->getEmail(), "</td>",
                 "<td>", $contact->getPhone(), "</td>",
                 "<td>", 
                    "<input type='checkbox' name='contactsToAdd[]' ", 
                    "value=", $contact->getContactId() ,">";
            if(in_array($contact->getContactId(), $contactsInList)) {
                echo "<input type='hidden' name='contactsAdded[]' ", 
                     "value=", $contact->getContactId() ,">"; 
            }
            echo "</td>",
            "</tr>";
        }
    }
    ?>
    </tbody>
</table>    
<?php    
}
?>