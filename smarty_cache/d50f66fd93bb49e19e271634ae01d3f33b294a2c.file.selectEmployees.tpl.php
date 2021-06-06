<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:16:45
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/application/interface/templates\components/select/selectEmployees.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1535960bb955d5dffc5-51146895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd50f66fd93bb49e19e271634ae01d3f33b294a2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/application/interface/templates\\components/select/selectEmployees.tpl',
      1 => 1622902845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1535960bb955d5dffc5-51146895',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- selectEmployees.tpl -->
<?php if ($_smarty_tpl->getVariable('additional_functions')->value){?><?php $_smarty_tpl->tpl_vars['additionalFunctions'] = new Smarty_variable('1', null, null);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['additionalFunctions'] = new Smarty_variable('0', null, null);?><?php }?>
<div class="mod_employees_empPrint">
        <table width="99%" border="0" cellspacing="3" cellpadding="0">
                <tr>
                        <td width="30%"><strong><?php echo TXT_UCF('OPTIONS');?>
</strong></td>
                        <td><strong><?php echo TXT_UCF('DEPARTMENT');?>
</strong></td>
                        <?php if (!$_smarty_tpl->getVariable('hide_functionprofile_option')->value){?>
                        <td><strong><?php echo TXT_UCF('JOB_PROFILES');?>
</strong></td>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('show_employees_bosses')->value||$_smarty_tpl->getVariable('show_employees_bosses_new')->value){?>
                        <td><strong><?php echo TXT_UCF('BOSSES');?>
</strong>
                            <br/>
                            <?php if ($_smarty_tpl->getVariable('show_employees_bosses')->value){?>
                            <span style="font-size:smaller;"><?php echo TXT_UCF('CTRL_CLICK_FOR_MULTI_SELECT');?>
</span>
                            <?php }?>
                        </td>
                        <?php }?>

                        <td><strong><?php echo TXT_UCF('EMPLOYEE');?>
 / <?php echo TXT_UCF('CROSS_SELECTION');?>
</strong>
                            <br />
                            <span style="font-size:smaller;"><?php echo TXT_UCF('CTRL_CLICK_FOR_MULTI_SELECT');?>
</span>
                        </td>
                </tr>
                <tr>
                    <td class="border1px">
                        <input type="radio" name="option" value="1" <?php if (!$_smarty_tpl->getVariable('employee_edit_or_view')->value){?>onclick="selectEmployees_control(this.value, 0, <?php echo $_smarty_tpl->getVariable('additionalFunctions')->value;?>
, xajax.getFormValues(this.form.id));"<?php }?> checked="checked"/> <?php echo TXT_UCF('SINGLE_EMPLOYEE');?>

                        <?php if (!$_smarty_tpl->getVariable('employee_edit_or_view')->value){?>
                                / <?php echo TXT_UCF('CROSS_SELECTION');?>
 <br />
                            <?php if (!$_smarty_tpl->getVariable('hide_department_option')->value){?>
                                <input type="radio" name="option" value="2" onclick="selectEmployees_control(this.value, 0, <?php echo $_smarty_tpl->getVariable('additionalFunctions')->value;?>
, xajax.getFormValues(this.form.id));"/> <?php echo TXT_UCF('EMPLOYEES_WITH_DEPARTMENT');?>
 <br />
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('show_department_option_new')->value){?>
                                <input type="radio" name="option" value="9" onclick="selectEmployees_control(this.value, 0, <?php echo $_smarty_tpl->getVariable('additionalFunctions')->value;?>
, xajax.getFormValues(this.form.id));"/> <?php echo TXT_UCF('EMPLOYEES_WITH_DEPARTMENT');?>
 <br />
                            <?php }?>
                            <?php if (!$_smarty_tpl->getVariable('hide_functionprofile_option')->value){?>
                                <input type="radio" name="option" value="3" onclick="selectEmployees_control(this.value, 0, <?php echo $_smarty_tpl->getVariable('additionalFunctions')->value;?>
, xajax.getFormValues(this.form.id));"/> <?php echo TXT_UCF('JOB_PROFILE_GROUP');?>
 <br />
                                <input type="radio" name="option" value="4" onclick="selectEmployees_control(this.value, 0, <?php echo $_smarty_tpl->getVariable('additionalFunctions')->value;?>
, xajax.getFormValues(this.form.id));"/> <?php echo TXT_UCF('JOB_PROFILE_GROUP_IN_DEPARTMENT');?>
 <br />
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('show_employees_bosses')->value){?>
                                <input type="radio" name="option" value="7" onclick="selectEmployees_control(this.value, 0, <?php echo $_smarty_tpl->getVariable('additionalFunctions')->value;?>
, xajax.getFormValues(this.form.id));"/> <?php echo TXT_UCF('EMPLOYEES_BOSSES');?>
 <br />
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('show_employees_bosses_new')->value){?>
                                <input type="radio" name="option" value="8" onclick="selectEmployees_control(this.value, 0, <?php echo $_smarty_tpl->getVariable('additionalFunctions')->value;?>
, xajax.getFormValues(this.form.id));"/> <?php echo TXT_UCF('EMPLOYEES_BOSSES');?>
 <br />
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('employees_against_job_profile')->value){?>
                                <input type="radio" name="option" value="6" onclick="selectEmployees_control(this.value, 0, <?php echo $_smarty_tpl->getVariable('additionalFunctions')->value;?>
, xajax.getFormValues(this.form.id));"/> <?php echo TXT_UCF('EMPLOYEES_AGAINST_JOB_PROFILE');?>
 <br />
                            <?php }?>
                            <?php if (!$_smarty_tpl->getVariable('hide_all_employees_option')->value){?>
                                <input type="radio" name="option" value="5" onclick="selectEmployees_control(this.value, 0, <?php echo $_smarty_tpl->getVariable('additionalFunctions')->value;?>
, xajax.getFormValues(this.form.id));"/> <?php echo TXT_UCF('ALL_EMPLOYEES');?>
 <br />
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('show_email_filled_in_filter')->value){?>
                                <input type="checkbox" name="SBemail" value="1" onclick="empSearchEmployee(this);" checked /> <?php echo TXT_UCF('SHOW_ONLY_EMPLOYEES_WITH_FILLED_IN_EMAIL_ADDRESSES');?>
 <br />
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('show_assessment_filled_in_filter')->value){?>
                                <input type="checkbox" name="SBself_assessment_not_invited" value="1" onclick="empSearchEmployee(this);" checked /><?php echo TXT_UCF('SHOW_ONLY_EMPLOYEES_WITHOUT_ASSESSMENT_INVITATIONS');?>
 <br />
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('show_assessment_completed_filter')->value){?>
                                <input type="checkbox" name="SBself_assessment_both_completed" value="1" onclick="empSearchEmployee(this);" checked /><?php echo TXT_UCF('SHOW_ONLY_EMPLOYEES_WITH_COMPLETED_ASSESSMENTS');?>
 <br />
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('use_selfassessment_active')->value){?>
                                <input type="hidden" name="selfassessment_active" value="1">
                            <?php }?>
                        <?php }?>

                        </td>
                        <?php if (!$_smarty_tpl->getVariable('hide_department_option')->value){?>
                        <td class="border1px">
                                <select name="SBdepartment" id="SBdepartment" size="20" disabled="disabled" class="disabled" onchange="">
                                <?php  $_smarty_tpl->tpl_vars['dept'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('depts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['dept']->key => $_smarty_tpl->tpl_vars['dept']->value){
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['dept']->value['ID_DEPT'];?>
"><?php echo $_smarty_tpl->tpl_vars['dept']->value['department'];?>
</option>
                                <?php }} ?>
                                </select>
                        </td>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('show_department_option_new')->value){?>
                        <td class="border1px">
                                <select name="SBdepartment" id="SBdepartment" size="20" disabled="disabled" class="disabled" onchange="">
                                <?php  $_smarty_tpl->tpl_vars['dept'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('depts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['dept']->key => $_smarty_tpl->tpl_vars['dept']->value){
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['dept']->value['ID_DEPT'];?>
"><?php echo $_smarty_tpl->tpl_vars['dept']->value['department'];?>
</option>
                                <?php }} ?>
                                </select>
                        </td>
                        <?php }?>
                        <?php if (!$_smarty_tpl->getVariable('hide_functionprofile_option')->value){?>
                        <td class="border1px" id="functionID"> 
                                <select name="SBfunction" id="SBfunction" size="20" disabled="disabled" class="disabled">
                                <?php  $_smarty_tpl->tpl_vars['func'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('funcs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['func']->key => $_smarty_tpl->tpl_vars['func']->value){
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['func']->value['ID_F'];?>
"><?php echo $_smarty_tpl->tpl_vars['func']->value['function'];?>
</option>
                                <?php }} ?>
                                </select>
                        </td>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('show_employees_bosses')->value){?>
                        <td class="border1px" id="bossesID">
                                <select name="SBbosses[]" id="SBbosses" size="20" multiple="multiple" disabled="disabled" class="disabled" onchange="">
                                <?php  $_smarty_tpl->tpl_vars['boss'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('bosses')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['boss']->key => $_smarty_tpl->tpl_vars['boss']->value){
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['boss']->value['ID_E'];?>
"><?php echo $_smarty_tpl->getVariable('module_utils_object')->value->BossName($_smarty_tpl->tpl_vars['boss']->value['firstname'],$_smarty_tpl->tpl_vars['boss']->value['lastname']);?>
</option>
                                <?php }} ?>
                                </select>
                        </td>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('show_employees_bosses_new')->value){?>
                        <td class="border1px" id="bossesID">
                                <select name="SBbosses[]" id="SBbosses" size="20" disabled="disabled" class="disabled" onchange="">
                                <?php  $_smarty_tpl->tpl_vars['boss'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('bosses')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['boss']->key => $_smarty_tpl->tpl_vars['boss']->value){
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['boss']->value['ID_E'];?>
"><?php echo $_smarty_tpl->getVariable('module_utils_object')->value->BossName($_smarty_tpl->tpl_vars['boss']->value['firstname'],$_smarty_tpl->tpl_vars['boss']->value['lastname']);?>
</option>
                                <?php }} ?>
                                </select>
                        </td>
                        <?php }?>
                        <td class="border1px" >
                                <?php $_smarty_tpl->tpl_vars['selectSize'] = new Smarty_variable('20', null, null);?>
                                <?php $_smarty_tpl->tpl_vars['selectDivMarginTop'] = new Smarty_variable('0', null, null);?>
                                    <table border="0">
                                        <?php if (constant('CUSTOMER_OPTION_USE_EMPLOYEES_LIMIT')){?>
                                        <?php $_smarty_tpl->tpl_vars['selectSize'] = new Smarty_variable($_smarty_tpl->getVariable('selectSize')->value-2, null, null);?>
                                        <?php $_smarty_tpl->tpl_vars['selectDivMarginTop'] = new Smarty_variable($_smarty_tpl->getVariable('selectDivMarginTop')->value+2, null, null);?>
                                        <tr>
                                            <td><span><?php echo TXT_UCF('SEARCH_EMPLOYEE');?>
&nbsp;&nbsp;<input type="text" name="selempsearchtext" id="selempsearchtext" value="" onkeyup="empSearchEmployee(this);" /></span></td>
                                        </tr>
                                        <?php }?>
                                        <?php if (constant('CUSTOMER_OPTION_SHOW_EMPLOYEES_COUNT')){?>
                                        <?php $_smarty_tpl->tpl_vars['selectSize'] = new Smarty_variable($_smarty_tpl->getVariable('selectSize')->value-2, null, null);?>
                                        <?php $_smarty_tpl->tpl_vars['selectDivMarginTop'] = new Smarty_variable($_smarty_tpl->getVariable('selectDivMarginTop')->value+2, null, null);?>
                                        <tr>
                                            <?php if (constant('CUSTOMER_OPTION_USE_EMPLOYEES_LIMIT')&&count($_smarty_tpl->getVariable('emps')->value)>=constant('CUSTOMER_OPTION_USE_EMPLOYEES_LIMIT_NUMBER')){?>
                                            <td title="<?php echo TXT_UCF('EMPLOYEES_LIST_LIMITED_RESULTS');?>
. <?php echo TXT_UCF_VALUE('ONLY_EMPLOYEES_LIMIT_SHOWN');?>
"><?php echo TXT_UCF('HEADCOUNT');?>
: <span id="employee_counter"><a><?php echo count($_smarty_tpl->getVariable('emps')->value);?>
 *</span></td>
                                            <?php }else{ ?>
                                            <td><?php echo TXT_UCF('HEADCOUNT');?>
: <span id="employee_counter"><?php echo count($_smarty_tpl->getVariable('emps')->value);?>
</span></td>
                                            <?php }?>
                                        </tr>
                                        <?php }?>
                                    </table>
                                <div id="employeesID" style="margin-top: <?php echo $_smarty_tpl->getVariable('selectDivMarginTop')->value;?>
px">
                                    <select name="SBcross[]" id="SBcross" size="<?php echo $_smarty_tpl->getVariable('selectSize')->value;?>
" multiple="multiple">
                                    <?php  $_smarty_tpl->tpl_vars['emp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('emps')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['emp']->key => $_smarty_tpl->tpl_vars['emp']->value){
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['emp']->value['ID_E'];?>
"><?php echo $_smarty_tpl->getVariable('module_utils_object')->value->EmployeeName($_smarty_tpl->tpl_vars['emp']->value['firstname'],$_smarty_tpl->tpl_vars['emp']->value['lastname']);?>
</option>
                                    <?php }} ?>
                                    </select>
                                </div>
                        </td>
                </tr>
        </table>
</div>
<!-- /selectEmployees.tpl -->