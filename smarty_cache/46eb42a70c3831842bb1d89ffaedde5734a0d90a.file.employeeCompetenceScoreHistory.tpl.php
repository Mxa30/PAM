<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:24:09
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/competence/employeeCompetenceScoreHistory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:700460bb97191e5335-62194257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46eb42a70c3831842bb1d89ffaedde5734a0d90a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/competence/employeeCompetenceScoreHistory.tpl',
      1 => 1622902863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '700460bb97191e5335-62194257',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeCompetenceScoreHistory.tpl -->
<?php $_smarty_tpl->tpl_vars['displayCycleId'] = new Smarty_variable('NULL', null, null);?>
<?php $_smarty_tpl->tpl_vars['isFirstCycle'] = new Smarty_variable(true, null, null);?>
<?php if (count($_smarty_tpl->getVariable('interfaceObject')->value->getValueObjects())>0){?>
<?php  $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('interfaceObject')->value->getValueObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['valueObject']->key => $_smarty_tpl->tpl_vars['valueObject']->value){
?>
    <?php $_smarty_tpl->tpl_vars['assessmentCycleValueObject'] = new Smarty_variable($_smarty_tpl->getVariable('valueObject')->value->getAssessmentCycleValueObject(), null, null);?>
    <?php if ($_smarty_tpl->getVariable('displayCycleId')->value!=$_smarty_tpl->getVariable('assessmentCycleValueObject')->value->getId()){?>
    <?php if (!$_smarty_tpl->getVariable('isFirstCycle')->value){?>
    </table>
    <?php }?>
    <?php $_smarty_tpl->tpl_vars['compareValueObject'] = new Smarty_variable($_smarty_tpl->tpl_vars['valueObject']->value, null, null);?>

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
            <th class="bottom_line shaded_title form-label centered" style="width:200px;">
                <?php echo TXT_UCF(constant('CUSTOMER_MGR_SCORE_LABEL'));?>

            </th>
            <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showRemarks()){?>
            <th class="bottom_line shaded_title form-label">
                <?php echo TXT_UCF(constant('CUSTOMER_MANAGER_REMARKS_LABEL'));?>

            </th>
            <?php }?>
        </tr>
        <tr style="text-align: left">
            <td class="bottom_line form-value">
                <?php echo DateTimeConverter::display($_smarty_tpl->getVariable('valueObject')->value->getSavedDateTime());?>
<br/><?php echo $_smarty_tpl->getVariable('valueObject')->value->getSavedByUserName();?>

            </td>
            <td class="bottom_line form-value centered">
                <span class="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->diff($_smarty_tpl->getVariable('compareValueObject')->value->getScore(),$_smarty_tpl->getVariable('valueObject')->value->getScore());?>
">
                    <?php echo ScoreConverter::display($_smarty_tpl->getVariable('valueObject')->value->getScore());?>

                </span>
            </td>
            <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showRemarks()){?>
            <td class="bottom_line form-value">
                <span class="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->diff($_smarty_tpl->getVariable('compareValueObject')->value->getNote(),$_smarty_tpl->getVariable('valueObject')->value->getNote());?>
">
                    <span class="comment"><?php echo nl2br($_smarty_tpl->getVariable('valueObject')->value->getNote());?>
</span>
                </span>
            </td>
            <?php }?>
        </tr>
        <tr>
            <td colspan="100%"><hr /></td>
        </tr>
    <?php $_smarty_tpl->tpl_vars['compareValueObject'] = new Smarty_variable($_smarty_tpl->tpl_vars['valueObject']->value, null, null);?>
<?php }} ?>
<?php }else{ ?>
    <table width="100%" cellspacing="0" cellpadding="0">
    <tr>
        <td colspan="100%"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->displayEmptyMessage();?>
</td>
    </tr>
<?php }?>
    </table>
<!-- /employeeCompetenceScoreHistory.tpl -->