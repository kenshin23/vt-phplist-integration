<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Module for adding a new e-mailing campaing to Vtiger-PHPList integration.
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
 * Include currency from vtiger database:
 */
require_once 'lib/DFCInterface.class.php';
require_once 'lib/DFC.class.php';
require_once 'lib/DSC.class.php';
require_once 'lib/DFCAggregate.class.php';
require_once 'lib/Db2PhpEntity.class.php';
require_once 'lib/Db2PhpEntityBase.class.php';
require_once 'lib/Db2PhpEntityModificationTracking.class.php';
require_once 'lib/vtiger/VTigerCurrencyInfo.class.php';

$currencysql    = "SELECT * FROM vtiger_currency_info LIMIT 1";
$currencyinfo   = VTigerCurrencyInfo::findBySql($dbConnectionVtiger, $currencysql);
$currency       = $currencyinfo[0]->getCurrencySymbol();
//}}}
//{{{
/*
 * Include campaign functions:
 */
require_once 'CampaignFunctions.php';
//}}}
//{{{
/*
 * Include Contacts functions:
 */
require_once 'ContactsFunctions.php';
//}}}
//{{{
/*
 * Include Leads functions:
 */
require_once 'LeadsFunctions.php';
//}}}

/**
 * Form values population.
 * If needed, gets value by POST array, otherwise, sets default values.
 */
$formData['campaign_name']                  = (isset($_POST['campaign_name']) ? $_POST['campaign_name'] : "");
$formData['campaign_no']                    = (isset($_POST['campaign_no']) ? $_POST['campaign_no'] : "AUTO GEN ON SAVE");
$formData['campaign_assigned_group_id']     = (isset($_POST['campaign_assigned_group_id']) ? $_POST['campaign_assigned_group_id'] : "");
$formData['campaign_status']                = (isset($_POST['campaign_status']) ? $_POST['campaign_status'] : 0);
$formData['campaign_type']                  = (isset($_POST['campaign_type']) ? $_POST['campaign_type'] : 0);
$formData['campaign_product_id']            = (isset($_POST['campaign_product_id']) ? $_POST['campaign_product_id'] : "");
$formData['campaign_product_name']          = (isset($_POST['campaign_product_name']) ? $_POST['campaign_product_name'] : "");
$formData['campaign_target_audience']       = (isset($_POST['campaign_target_audience']) ? $_POST['campaign_target_audience'] : "");
$formData['campaign_closing_date']          = (isset($_POST['campaign_closing_date']) ? $_POST['campaign_closing_date'] : "");
$formData['campaign_sponsor']               = (isset($_POST['campaign_sponsor']) ? $_POST['campaign_sponsor'] : "");
$formData['campaign_targetsize']            = (isset($_POST['campaign_targetsize']) ? $_POST['campaign_targetsize'] : "");
$formData['campaign_numsent']               = (isset($_POST['campaign_numsent']) ? $_POST['campaign_numsent'] : "");
$formData['campaign_budgetcost']            = (isset($_POST['campaign_budgetcost']) ? $_POST['campaign_budgetcost'] : 0);
$formData['campaign_actualcost']            = (isset($_POST['campaign_actualcost']) ? $_POST['campaign_actualcost'] : 0);
$formData['campaign_expectedresponse']      = (isset($_POST['campaign_expectedresponse']) ? $_POST['campaign_expectedresponse'] : 0);
$formData['campaign_expectedrevenue']       = (isset($_POST['campaign_expectedrevenue']) ? $_POST['campaign_expectedrevenue'] : 0);
$formData['campaign_expectedsalescount']    = (isset($_POST['campaign_expectedsalescount']) ? $_POST['campaign_expectedsalescount'] : 0);
$formData['campaign_actualsalescount']      = (isset($_POST['campaign_actualsalescount']) ? $_POST['campaign_actualsalescount'] : 0);
$formData['campaign_expectedresponsecount'] = (isset($_POST['campaign_expectedresponsecount']) ? $_POST['campaign_expectedresponsecount'] : 0);
$formData['campaign_actualresponsecount']   = (isset($_POST['campaign_actualresponsecount']) ? $_POST['campaign_actualresponsecount'] : 0);
$formData['campaign_expectedroi']           = (isset($_POST['campaign_expectedroi']) ? $_POST['campaign_expectedroi'] : 0);
$formData['campaign_actualroi']             = (isset($_POST['campaign_actualroi']) ? $_POST['campaign_actualroi'] : 0);
$formData['campaign_description']           = (isset($_POST['campaign_description']) ? $_POST['campaign_description'] : "");
unset($_POST);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="generator" content=
        "HTML Tidy for Windows (vers 14 February 2006), see www.w3.org">
        <title></title>
        <style type="text/css">
            body {
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <form name="campaignAdd" action="processCreate.php" method="post">
            <div style="width: 55%; float: left;">
                <table border="0" cellspacing="0" cellpadding="0" width="100%" class="small">
                    <tbody>
                        <tr>
                            <td colspan="4" style="padding:5px">
                                <div align="center">
                                    <input title="Guardar [Alt+S]" accesskey="S" class=
                                    "crmButton small save" onclick=
                                    "this.form.action.value='Save'; displaydeleted(); return formValidate()"
                                    type="submit" name="button" value=" Guardar " style="width:70px">
                                    <input title="Cancelar [Alt+X]" accesskey="X" class=
                                    "crmbutton small cancel" onclick="window.history.back()" type=
                                    "button" name="button" value="Cancelar " style="width:70px">
                                </div>
                            </td>
                        </tr><!-- included to handle the edit fields based on ui types -->
                        <!-- This is added to display the existing comments -->
                        <tr>
                            <td colspan="4" class="detailedViewHeader">
                                <b>Informaci&oacute;n de Campa&ntilde;a</b>
                            </td>
                        </tr><!-- Handle the ui types display -->
                        <!-- Added this file to display the fields in Create Entity page based on ui types  -->
                        <tr style="height:25px">
                            <td width="20%" class="dvtCellLabel" align="right">
                                <font color="red">*</font>Nombre de la Campa&ntilde;a
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <input type="text" name="campaignname" tabindex="" 
                                value="<?php echo htmlspecialchars($formData['campaign_name']); ?>" class=
                                "detailedViewTextBox" onfocus=
                                "this.className='detailedViewTextBoxOn'" onblur=
                                "this.className='detailedViewTextBox'">
                            </td>
                            <!-- Non Editable field, only configured value will be loaded -->
                            <td width="20%" class="dvtCellLabel" align="right">
                                N&uacute;mero de Campa&ntilde;a
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <input readonly type="text" tabindex="" name="campaign_no" id=
                                "campaign_no" value="<?php echo htmlspecialchars($formData['campaign_no']); ?>" 
                                class="detailedViewTextBox"
                                onfocus="this.className='detailedViewTextBoxOn'" onblur=
                                "this.className='detailedViewTextBox'">
                            </td>
                        </tr>
                        <tr style="height:25px">
                            <td width="20%" class="dvtCellLabel" align="right">
                                <font color="red">*</font>Asignado A
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <input type="radio" tabindex="" name="assigntype" checked value="U"
                                onclick="toggleAssignType(this.value)">Usuario <input type="radio"
                                name="assigntype" value="T" onclick=
                                "toggleAssignType(this.value)">Grupo <span id="assign_user" style=
                                "display:block">
                                <select name="assigned_user_id" class="small">
                                    <!-- List of users -->
                                    <option value="1" selected>
                                        Administrador
                                    </option>
                                </select></span> <span id="assign_team" style=
                                "display:none">
                                    <!-- campaignAssignedGroupIdSelect($formData['campaign_assigned_group_id']); -->
                                    <select name="assigned_group_id" class="small">
                                    <option value="3">
                                        Grupo de Mercadeo
                                    </option>
                                    <option value="4">
                                        Grupo de Soporte
                                    </option>
                                    <option value="2">
                                        Ventas en Equipo
                                    </option>
                                </select></span>
                            </td>
                            <td width="20%" class="dvtCellLabel" align="right">
                                Estado Actual de Campa&ntilde;a
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <!-- campaignStatusSelect($formData['campaign_status']); -->
                                <select name="campaignstatus" tabindex="" class="small">
                                    <option value="--None--">
                                        --Ninguna--
                                    </option>
                                    <option value="Planning">
                                        En Planificaci&oacute;n
                                    </option>
                                    <option value="Active">
                                        Activa
                                    </option>
                                    <option value="Inactive">
                                        Inactiva
                                    </option>
                                    <option value="Completed">
                                        Completada
                                    </option>
                                    <option value="Cancelled">
                                        Cancelada
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr style="height:25px">
                            <td width="20%" class="dvtCellLabel" align="right">
                                Tipo de Campa&ntilde;a
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <select name="campaigntype" tabindex="" class="small">
                                    <!-- campaignTypeSelect($formData['campaign_type']); -->
                                    <option value="--None--">
                                        --Ninguno--
                                    </option>
                                    <option value="Conference">
                                        Conferencia
                                    </option>
                                    <option value="Webinar">
                                        Webinario
                                    </option>
                                    <option value="Trade Show">
                                        Feria
                                    </option>
                                    <option value="Public Relations">
                                        Relaciones P&uacute;blicas
                                    </option>
                                    <option value="Partners">
                                        Aliados
                                    </option>
                                    <option value="Referral Program">
                                        Programa de Referidos
                                    </option>
                                    <option value="Advertisement">
                                        Publicidad
                                    </option>
                                    <option value="Banner Ads">
                                        Anuncios en Banners
                                    </option>
                                    <option value="Direct Mail">
                                        Correo Directo
                                    </option>
                                    <option value="Email">
                                        E-mail
                                    </option>
                                    <option value="Telemarketing">
                                        Telemercadeo
                                    </option>
                                    <option value="Others">
                                        Otros
                                    </option>
                                </select>
                            </td>
                            <td width="20%" class="dvtCellLabel" align="right">
                                Producto
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <input name="product_id" type="hidden"
                                value="<?php echo htmlspecialchars($formData['campaign_product_id']); ?>"> 
                                <input name="product_name" readonly type="text" 
                                       value="<?php echo htmlspecialchars($formData['campaign_product_name']); ?>">
                            </td>
                        </tr>
                        <tr style="height:25px">
                            <td width="20%" class="dvtCellLabel" align="right">
                                Audiencia Objetivo
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <input type="text" tabindex="" name="targetaudience" id=
                                "targetaudience" value="<?php echo htmlspecialchars($formData['campaign_target_audience']); ?>" class="detailedViewTextBox" onfocus=
                                "this.className='detailedViewTextBoxOn'" onblur=
                                "this.className='detailedViewTextBox'">
                            </td>
                            <td width="20%" class="dvtCellLabel" align="right">
                                <font color="red">*</font>Fecha de cierre esperado
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <input name="closingdate" tabindex="" id="jscal_field_closingdate"
                                type="text" style="border:1px solid #bababa;" size="11" maxlength=
                                "10" value="<?php echo htmlspecialchars($formData['campaign_closing_date']); ?>"> 
                                <br>
                                <font size="1"><em old="(yyyy-mm-dd)">(yyyy-mm-dd)</em></font>
                                <script type="text/javascript" id="massedit_calendar_closingdate">
                                    Calendar.setup ({
                                        inputField : "jscal_field_closingdate", ifFormat : "%Y-%m-%d", showsTime : false, button : "jscal_trigger_closingdate", singleClick : true, step : 1
                                    })
                                </script>
                            </td>
                        </tr>
                        <tr style="height:25px">
                            <td width="20%" class="dvtCellLabel" align="right">
                                Patrocinador
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <input type="text" tabindex="" name="sponsor" id="sponsor" 
                                value="<?php echo htmlspecialchars($formData['campaign_sponsor']); ?>"
                                class="detailedViewTextBox" onfocus=
                                "this.className='detailedViewTextBoxOn'" onblur=
                                "this.className='detailedViewTextBox'">
                            </td>
                            <td width="20%" class="dvtCellLabel" align="right">
                                Tama&ntilde;o Objetivo
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <input type="text" tabindex="" name="targetsize" id="targetsize"
                                value="<?php echo htmlspecialchars($formData['campaign_targetsize']); ?>" 
                                class="detailedViewTextBox" onfocus=
                                "this.className='detailedViewTextBoxOn'" onblur=
                                "this.className='detailedViewTextBox'">
                            </td>
                        </tr>
                        <tr style="height:25px">
                            <td width="20%" class="dvtCellLabel" align="right">
                                N&uacute;m Enviados (%)
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <input type="text" tabindex="" name="numsent" id="numsent" value="<?php echo htmlspecialchars($formData['campaign_numsent']); ?>"
                                class="detailedViewTextBox" onfocus=
                                "this.className='detailedViewTextBoxOn'" onblur=
                                "this.className='detailedViewTextBox'">
                            </td>
                        </tr><!-- This is added to display the existing comments -->
                        <tr>
                            <td colspan="4" class="detailedViewHeader">
                                <b>Esperados y Reales</b>
                            </td>
                        </tr><!-- Handle the ui types display -->
                        <!-- Added this file to display the fields in Create Entity page based on ui types  -->
                        <tr style="height:25px">
                            <td width="20%" class="dvtCellLabel" align="right">
                                Costo Presupuestario: (<?php echo $currency; ?>)
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <input name="budgetcost" tabindex="" type="text" class=
                                "detailedViewTextBox" onfocus=
                                "this.className='detailedViewTextBoxOn'" onblur=
                                "this.className='detailedViewTextBox'" value="<?php echo htmlspecialchars($formData['campaign_budgetcost']); ?>">
                            </td>
                            <td width="20%" class="dvtCellLabel" align="right">
                                Costo Real (Actual): (<?php echo $currency; ?>)
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <input name="actualcost" tabindex="" type="text" class=
                                "detailedViewTextBox" onfocus=
                                "this.className='detailedViewTextBoxOn'" onblur=
                                "this.className='detailedViewTextBox'" value="<?php echo htmlspecialchars($formData['campaign_actualcost']); ?>">
                            </td>
                        </tr>
                        <tr style="height:25px">
                            <td width="20%" class="dvtCellLabel" align="right">
                                Respuesta Esperada
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <!-- campaignExpectedResponseSelect($formData['campaign_expectedresponse']); -->
                                <select name="expectedresponse" tabindex="" class="small">
                                    <option value="--None--">
                                        --Ninguno--
                                    </option>
                                    <option value="Excellent">
                                        Excelente
                                    </option>
                                    <option value="Good">
                                        Buena
                                    </option>
                                    <option value="Average">
                                        Promedio
                                    </option>
                                    <option value="Poor">
                                        Mala
                                    </option>
                                </select>
                            </td>
                            <td width="20%" class="dvtCellLabel" align="right">
                                Ganancia Esperada (<?php echo $currency; ?>)
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <input name="expectedrevenue" tabindex="" type="text" class=
                                "detailedViewTextBox" onfocus=
                                "this.className='detailedViewTextBoxOn'" onblur=
                                "this.className='detailedViewTextBox'" value="<?php echo htmlspecialchars($formData['campaign_expectedrevenue']); ?>">
                            </td>
                        </tr>
                        <tr style="height:25px">
                            <td width="20%" class="dvtCellLabel" align="right">
                                Conteo de Ventas Esperado
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <input type="text" tabindex="" name="expectedsalescount" id=
                                "expectedsalescount" value="<?php echo htmlspecialchars($formData['campaign_expectedsalescount']); ?>" class="detailedViewTextBox" onfocus=
                                "this.className='detailedViewTextBoxOn'" onblur=
                                "this.className='detailedViewTextBox'">
                            </td>
                            <td width="20%" class="dvtCellLabel" align="right">
                                Conteo de Ventas Real (Actual)
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <input type="text" tabindex="" name="actualsalescount" id=
                                "actualsalescount" value="<?php echo htmlspecialchars($formData['campaign_actualsalescount']); ?>" class="detailedViewTextBox" onfocus=
                                "this.className='detailedViewTextBoxOn'" onblur=
                                "this.className='detailedViewTextBox'">
                            </td>
                        </tr>
                        <tr style="height:25px">
                            <td width="20%" class="dvtCellLabel" align="right">
                                Conteo de Respuestas Esperadas
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <input type="text" tabindex="" name="expectedresponsecount" id=
                                "expectedresponsecount" value="<?php echo htmlspecialchars($formData['campaign_expectedresponsecount']); ?>" class="detailedViewTextBox"
                                onfocus="this.className='detailedViewTextBoxOn'" onblur=
                                "this.className='detailedViewTextBox'">
                            </td>
                            <td width="20%" class="dvtCellLabel" align="right">
                                Conteo de Respuestas Real (Actual)
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <input type="text" tabindex="" name="actualresponsecount" id=
                                "actualresponsecount" value="<?php echo htmlspecialchars($formData['campaign_actualresponsecount']); ?>" class="detailedViewTextBox" onfocus=
                                "this.className='detailedViewTextBoxOn'" onblur=
                                "this.className='detailedViewTextBox'">
                            </td>
                        </tr>
                        <tr style="height:25px">
                            <td width="20%" class="dvtCellLabel" align="right">
                                Retorno de la inversi&oacute;n (ROI) esperado: (<?php echo $currency; ?>)
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <input name="expectedroi" tabindex="" type="text" class=
                                "detailedViewTextBox" onfocus=
                                "this.className='detailedViewTextBoxOn'" onblur=
                                "this.className='detailedViewTextBox'" value="<?php echo htmlspecialchars($formData['campaign_expectedroi']); ?>">
                            </td>
                            <td width="20%" class="dvtCellLabel" align="right">
                                Retorno de la inversi&oacute;n (ROI) Actual: (<?php echo $currency; ?>)
                            </td>
                            <td width="30%" align="left" class="dvtCellInfo">
                                <input name="actualroi" tabindex="" type="text" class=
                                "detailedViewTextBox" onfocus=
                                "this.className='detailedViewTextBoxOn'" onblur=
                                "this.className='detailedViewTextBox'" value="<?php echo htmlspecialchars($formData['campaign_actualroi']); ?>">
                            </td>
                        </tr><!-- This is added to display the existing comments -->
                        <tr>
                            <td colspan="4" class="detailedViewHeader">
                                <b>Informaci&oacute;n / Descripci&oacute;n</b>
                            </td>
                        </tr><!-- Handle the ui types display -->
                        <!-- Added this file to display the fields in Create Entity page based on ui types  -->
                        <tr style="height:25px">
                            <!-- In Add Comment are we should not display anything -->
                            <td width="20%" class="dvtCellLabel" align="right">
                                Description
                            </td>
                            <td colspan="3">
                                <textarea class="detailedViewTextBox" tabindex="" onfocus=
                                "this.className='detailedViewTextBoxOn'" name="description" onblur=
                                "this.className='detailedViewTextBox'" cols="45" rows="8">
                                <?php echo htmlspecialchars($formData['campaign_description']); ?>
                                </textarea>
                            </td>
                        </tr><!-- Added to display the Product Details in Inventory-->
                        <tr>
                            <td colspan="4" style="padding:5px">
                                <div align="center">
                                    <input title="Guardar [Alt+S]" accesskey="S" class=
                                    "crmbutton small save" onclick=
                                    "this.form.action.value='Guardar'; displaydeleted();return formValidate()"
                                    type="submit" name="button" value=" Guardar " style="width:70px">
                                    <input title="Cancelar [Alt+X]" accesskey="X" class=
                                    "crmbutton small cancel" onclick="window.history.back()" type=
                                    "button" name="button" value=" Cancelar " style="width:70px">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="width: 40%; float: left;">
                <?php
                contactsListTable();
                leadsListTable();
                ?>
            </div>                
        </form>
    </body>
</html>