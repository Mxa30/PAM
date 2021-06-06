<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:16:45
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\to_refactor/mod_organisation/pdpActionsBatchForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2639860bb955d5140d9-00102767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb56de0feae7cee80127cfe98d9d2e4f84eb99b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\to_refactor/mod_organisation/pdpActionsBatchForm.tpl',
      1 => 1622902869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2639860bb955d5140d9-00102767',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- pdpActionsBatchForm.tpl -->
<table width="100%" cellspacing="0" cellpadding="0">
	<tr>
        <td>
            <form id="pdpActionsBatchForm" name="pdpActionsBatchForm" onsubmit="submitSafeForm('<?php echo $_smarty_tpl->getVariable('formIdentifier')->value;?>
', this.name); return false;">
            <?php echo $_smarty_tpl->getVariable('formToken')->value;?>

                <?php echo $_smarty_tpl->getVariable('title')->value;?>

                <!-- add pdp actions -->
                <div class="mod_employees_PDPAction">
                    <table border="0" cellspacing="0" cellpadding="2">
                        <tr>
                            <td colspan="2">
                            <?php echo $_smarty_tpl->getVariable('pdpActionLibrarySelectorHtml')->value;?>

                            </td>
                        </tr>
                        <tr>
                            <td class="form-label" style="width:<?php echo $_smarty_tpl->getVariable('labelWidth')->value;?>
px;">
                                <?php echo TXT_UCF('PDP_ACTION');?>
 <?php echo constant('REQUIRED_FIELD_INDICATOR');?>

                            </td>
                            <td class="form-value">
                                <span id="show_action">-</span>
                                <input type="hidden" id="fill_action" name="fill_action" value=""/>
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">
                                <?php echo TXT_UCF('PROVIDER');?>
 <?php echo constant('REQUIRED_FIELD_INDICATOR');?>

                            </td>
                            <td class="form-value">
                                <span id="show_provider">-</span>
                                <input type="hidden" id="fill_provider" name="fill_provider" value=""/>
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">
                                <?php echo TXT_UCF('DURATION');?>
 <?php echo constant('REQUIRED_FIELD_INDICATOR');?>

                            </td>
                            <td class="form-value">
                                <span id="show_duration">-</span>
                                <input type="hidden" id="fill_duration" name="fill_duration" value=""/>
                            </td>
                        </tr>
                        <tr>
                            <td class="form-label">
                                <?php echo TXT_UCF('COST');?>
 <?php echo constant('REQUIRED_FIELD_INDICATOR');?>

                            </td>
                            <td class="form-value">
                                &euro;&nbsp;<span id="show_cost" style="margin:0px;">-</span>
                                <input type="hidden" id="fill_cost" name="fill_cost" value=""/>
                            </td>
                        </tr>
                        </tr>
                            <td colspan="2">&nbsp;</td>
                        <tr>

                        <tr>
                            <!-- select owner -->
                            <td>
                                <strong><?php echo TXT_UCF('ACTION_OWNER');?>
 <?php echo constant('REQUIRED_FIELD_INDICATOR');?>
</strong>
                            </td>
                            <td >
                            <?php if ($_smarty_tpl->getVariable('limitActionOwner')->value){?>
                                <input name="action_owner" type="radio" value="<?php echo $_smarty_tpl->getVariable('boss_selected_value')->value;?>
" checked="checked">&nbsp;<?php echo TXT_UCF('MANAGER');?>
<br/>
                                <input name="action_owner" type="radio" value="<?php echo $_smarty_tpl->getVariable('employee_selected_value')->value;?>
">&nbsp;<?php echo TXT_UCF('EMPLOYEE');?>
<br/>
                                <br/>
                            <?php }else{ ?>
                                <?php if (count($_smarty_tpl->getVariable('owners')->value)>0){?>
                                <select id="user_id" name="user_id">
                                    <option value="">- <?php echo TXT_LC('SELECT');?>
 -</option>
                                    <?php  $_smarty_tpl->tpl_vars['owner'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('owners')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['owner']->key => $_smarty_tpl->tpl_vars['owner']->value){
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['owner']->value['user_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['owner']->value['name'];?>
</option>
                                    <?php }} ?>
                                </select>
                                <?php }else{ ?>
                                <?php echo TXT_UCF('NO_PDP_ACTION_OWNER_RETURN');?>

                                <?php }?>
                            <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong><?php echo TXT_UCF('DEADLINE_DATE');?>
 <?php echo constant('REQUIRED_FIELD_INDICATOR');?>
</strong>
                            </td>
                            <td>
                                <?php echo $_smarty_tpl->getVariable('calendarInputDeadlineDateHtml')->value;?>

                            </td>
                        </tr>
                        <tr>
                            <td><strong><?php echo TXT_UCF('NOTIFICATION_DATE');?>
</strong></td>
                            <td>
                                <?php echo $_smarty_tpl->getVariable('calendarInputNotificationDateHtml')->value;?>

                                <a href="" onclick="xajax_moduleEmployees_clearNotificationDate_deprecated();return false;">
                                    <img src="<?php echo constant('ICON_ERASE');?>
" class="icon-style" border="0" title="Clear notification date"/>
                                </a>
                            </td>
                        </tr>
                        <?php if (!$_smarty_tpl->getVariable('limitActionOwner')->value){?>
                        <tr>
                            <td colspan="2">
                                <div id="ne"><?php echo $_smarty_tpl->getVariable('emails_for_notification')->value;?>
</div>
                            </td>
                        </tr>
                        <?php }?>
                        <tr>
                            <td colspan="2">
                                <br/>
                                <strong><?php echo TXT_UCF('REASONS_REMARKS');?>
</strong>
                                <br/>
                                <textarea id="notes" name="notes" style="width:700px;height:130px;"></textarea>
                            </td>
                        </tr>
                    </table>
                    <br/>
                    <p><strong><?php echo TXT_UCW('SELECT');?>
 <?php echo TXT_UCW('EMPLOYEES');?>
 <?php echo constant('REQUIRED_FIELD_INDICATOR');?>
</strong></p>
                    <?php $_template = new Smarty_Internal_Template('components/select/selectEmployees.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                    <br/>
                    <input id="submitButton" type="submit" value="<?php echo TXT_BTN('PERFORM');?>
" class="btn btn_width_80"/>
                    <input type="button" value="<?php echo TXT_BTN('CANCEL');?>
" class="btn btn_width_80" onclick="xajax_moduleOrganisation_pdpActionsBatchForm();return false;"/>
                </div>
            </form>
        </td>
    </tr>
</table>
<!-- /pdpActionsBatchForm.tpl -->