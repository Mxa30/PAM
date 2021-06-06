<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:24:16
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/competence/employeeJobProfileHistory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1147760bb9720d7f447-27656886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b27a04d2d9253fcca2b97000c904b6de7ab80e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/competence/employeeJobProfileHistory.tpl',
      1 => 1622902863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1147760bb9720d7f447-27656886',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeJobProfileHistory.tpl -->
<?php $_smarty_tpl->tpl_vars['displayCycleId'] = new Smarty_variable('NULL', null, null);?>
<?php $_smarty_tpl->tpl_vars['isFirstCycle'] = new Smarty_variable(true, null, null);?>
<?php if (count($_smarty_tpl->getVariable('interfaceObject')->value->getValueObjects())>0){?>
<?php  $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('interfaceObject')->value->getValueObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['valueObject']->key => $_smarty_tpl->tpl_vars['valueObject']->value){
?>
    <?php $_smarty_tpl->tpl_vars['assessmentCycleValueObject'] = new Smarty_variable($_smarty_tpl->getVariable('valueObject')->value->getAssessmentCycleValueObject(), null, null);?>
    <?php $_smarty_tpl->tpl_vars['mainFunction'] = new Smarty_variable($_smarty_tpl->getVariable('valueObject')->value->getMainFunction(), null, null);?>
    <?php $_smarty_tpl->tpl_vars['additionalFunctions'] = new Smarty_variable($_smarty_tpl->getVariable('valueObject')->value->getAdditionalFunctions(), null, null);?>
    <?php if ($_smarty_tpl->getVariable('displayCycleId')->value!=$_smarty_tpl->getVariable('assessmentCycleValueObject')->value->getId()){?>
    <?php if (!$_smarty_tpl->getVariable('isFirstCycle')->value){?>
    </table>
    <?php }?>
    <?php $_smarty_tpl->tpl_vars['compareValueObject'] = new Smarty_variable($_smarty_tpl->tpl_vars['valueObject']->value, null, null);?>
    <?php $_smarty_tpl->tpl_vars['compareMainFunction'] = new Smarty_variable($_smarty_tpl->getVariable('mainFunction')->value, null, null);?>

    <?php $_template = new Smarty_Internal_Template('components/historyAssessmentCycleDetail.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('displayWidth',$_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth());$_template->assign('assessmentCycleValueObject',$_smarty_tpl->getVariable('assessmentCycleValueObject')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

    <table cellspacing="0" cellpadding="0" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <?php }?>
    <?php $_smarty_tpl->tpl_vars['isFirstCycle'] = new Smarty_variable(false, null, null);?>
    <?php $_smarty_tpl->tpl_vars['displayCycleId'] = new Smarty_variable($_smarty_tpl->getVariable('assessmentCycleValueObject')->value->getId(), null, null);?>
        <tr style="text-align: left">
            <th class="bottom_line form-label" style="width:200px;">
                <?php echo TXT_UCW('DATE_SAVED');?>

            </th>
            <th class="bottom_line shaded_title form-label" style="width:100px;">
                <?php echo TXT_UCW('DATE');?>

            </td>
            <th class="bottom_line shaded_title form-label" style="width:300px;">
                <?php echo TXT_UCF('JOB_PROFILE');?>

            </th>
            <th class="bottom_line shaded_title form-label">
                <?php echo TXT_UCF('REMARKS');?>

            </th>
        </tr>
        <tr style="text-align: left">
            <td class="bottom_line form-value">
                <?php echo DateTimeConverter::display($_smarty_tpl->getVariable('valueObject')->value->getSavedDateTime());?>
<br/><?php echo $_smarty_tpl->getVariable('valueObject')->value->getSavedByUserName();?>

            </td>
            <td class="bottom_line form-value">
                <span class="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->diff($_smarty_tpl->getVariable('compareValueObject')->value->getFunctionDate(),$_smarty_tpl->getVariable('valueObject')->value->getFunctionDate());?>
">
                    <?php echo DateConverter::display($_smarty_tpl->getVariable('valueObject')->value->getFunctionDate());?>

                </span>
            </td>
            <td class="bottom_line form-value info-list">
                <?php if ($_smarty_tpl->getVariable('valueObject')->value->hasAdditionalFunctions()){?>
                <?php echo TXT_UCF('MAIN_JOB_PROFILE');?>

                <br/>
                <?php }?>
                <span class="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->diff($_smarty_tpl->getVariable('compareMainFunction')->value->getFunctionId(),$_smarty_tpl->getVariable('mainFunction')->value->getFunctionId());?>
">
                    <?php echo $_smarty_tpl->getVariable('mainFunction')->value->getFunctionName();?>

                </span>
                <?php if ($_smarty_tpl->getVariable('valueObject')->value->hasAdditionalFunctions()){?>
                <br/><br/>
                <?php echo TXT_UCF('ADDITIONAL_JOB_PROFILES');?>

                <ul>
                    <?php  $_smarty_tpl->tpl_vars['additionalFunction'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('additionalFunctions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['additionalFunction']->key => $_smarty_tpl->tpl_vars['additionalFunction']->value){
?>
                    <li>
                        <?php echo $_smarty_tpl->getVariable('additionalFunction')->value->getFunctionName();?>

                    </li>
                    <?php }} ?>
                </ul>
                <?php }?>
            </td>
            <td class="bottom_line form-value">
                <span class="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->diff($_smarty_tpl->getVariable('compareValueObject')->value->getNote(),$_smarty_tpl->getVariable('valueObject')->value->getNote());?>
">
                    <?php echo nl2br($_smarty_tpl->getVariable('valueObject')->value->getNote());?>

                </span>
            </td>
        </tr>
        <tr>
            <td colspan="100%"><hr /></td>
        </tr>
    <?php $_smarty_tpl->tpl_vars['compareValueObject'] = new Smarty_variable($_smarty_tpl->tpl_vars['valueObject']->value, null, null);?>
    <?php $_smarty_tpl->tpl_vars['compareMainFunction'] = new Smarty_variable($_smarty_tpl->getVariable('mainFunction')->value, null, null);?>
<?php }} ?>
<?php }else{ ?>
    <table width="100%" cellspacing="0" cellpadding="0">
    <tr>
        <td colspan="100%"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->displayEmptyMessage();?>
</td>
    </tr>
<?php }?>
    </table>
<!-- /employeeJobProfileHistory.tpl -->