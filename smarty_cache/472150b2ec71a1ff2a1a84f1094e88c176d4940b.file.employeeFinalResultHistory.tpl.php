<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:21:59
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/finalResult/employeeFinalResultHistory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3156060bb96972778c6-63221047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '472150b2ec71a1ff2a1a84f1094e88c176d4940b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/finalResult/employeeFinalResultHistory.tpl',
      1 => 1622902863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3156060bb96972778c6-63221047',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeFinalResultHistory.tpl -->
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
            <th class="bottom_line form-label" style="width:150px;">
                <?php echo TXT_UCW('CONVERSATION_DATE');?>

            </th>
            <td class="bottom_line form-value" style="width:150px;">
                <span class="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->diff($_smarty_tpl->getVariable('compareValueObject')->value->getAssessmentDate(),$_smarty_tpl->getVariable('valueObject')->value->getAssessmentDate());?>
">
                    <?php echo DateConverter::display($_smarty_tpl->getVariable('valueObject')->value->getAssessmentDate());?>

                </span>
            </td>
            <?php if ($_smarty_tpl->getVariable('showRemarks')->value){?>
            <th class="bottom_line">&nbsp;</th>
            <?php }?>
        </tr>
        <tr style="text-align: left">
            <td class="bottom_line form-value">
                <?php echo DateTimeConverter::display($_smarty_tpl->getVariable('valueObject')->value->getSavedDateTime());?>

            </td>
            <th class="bottom_line shaded_title form-label">
                <?php echo TXT_UCW('FINAL_RESULT');?>

            </th>
            <th class="bottom_line shaded_title form-label centered">
                <?php echo TXT_UCF(constant('CUSTOMER_MGR_SCORE_LABEL'));?>

            </th>
            <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showRemarks()){?>
            <th class="bottom_line shaded_title form-label">
                <?php echo TXT_UCF('REMARKS');?>

            </th>
            <?php }?>
        </tr>
        <tr>
            <td class="bottom_line">
                <?php echo $_smarty_tpl->getVariable('valueObject')->value->getSavedByUserName();?>

            </td>
            <td class="bottom_line form-label">
                <?php echo TXT_UCF('TOTAL_RESULT');?>

            </td>
            <td class="bottom_line form-value centered">
                <span class="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->diff($_smarty_tpl->getVariable('compareValueObject')->value->getTotalScore(),$_smarty_tpl->getVariable('valueObject')->value->getTotalScore());?>
">
                    <?php echo TotalScoreConverter::display($_smarty_tpl->getVariable('valueObject')->value->getTotalScore());?>

                <span>
            </td>
            <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showRemarks()){?>
            <td class="bottom_line form-value">
                <span class="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->diff($_smarty_tpl->getVariable('compareValueObject')->value->getTotalScoreComment(),$_smarty_tpl->getVariable('valueObject')->value->getTotalScoreComment());?>
">
                    <span class="comment"><?php echo nl2br($_smarty_tpl->getVariable('valueObject')->value->getTotalScoreComment());?>
</span>
                </span>
            </td>
            <?php }?>
        </tr>
        <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showDetailScores()){?>
        <tr>
            <td class="bottom_line" style="width:20%">&nbsp;</td>
            <td class="bottom_line form-label" style="padding-left:30px;">
                <?php echo TXT_UCF('BEHAVIOUR');?>

            </td>
            <td class="bottom_line form-value centered">
                <span class="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->diff($_smarty_tpl->getVariable('compareValueObject')->value->getBehaviourScore(),$_smarty_tpl->getVariable('valueObject')->value->getBehaviourScore());?>
">
                    <?php echo ScoreConverter::display($_smarty_tpl->getVariable('valueObject')->value->getBehaviourScore());?>

                </span>
            </td>
            <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showRemarks()){?>
            <td class="bottom_line">
                <span class="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->diff($_smarty_tpl->getVariable('compareValueObject')->value->getBehaviourScoreComment(),$_smarty_tpl->getVariable('valueObject')->value->getBehaviourScoreComment());?>
">
                    <span class="comment"><?php echo nl2br($_smarty_tpl->getVariable('valueObject')->value->getBehaviourScoreComment());?>
</span>
                </span>
            </td>
            <?php }?>
        </tr>
        <tr>
            <td class="bottom_line">&nbsp;</td>
            <td class="bottom_line form-label" style="padding-left:30px;">
                <?php echo TXT_UCF('RESULTS');?>

            </td>
            <td class="bottom_line form-value centered">
                <span class="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->diff($_smarty_tpl->getVariable('compareValueObject')->value->getResultsScore(),$_smarty_tpl->getVariable('valueObject')->value->getResultsScore());?>
">
                    <?php echo ScoreConverter::display($_smarty_tpl->getVariable('valueObject')->value->getResultsScore());?>

                </span>
            </td>
            <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showRemarks()){?>
            <td class="bottom_line">
                <span class="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->diff($_smarty_tpl->getVariable('compareValueObject')->value->getResultsScoreComment(),$_smarty_tpl->getVariable('valueObject')->value->getResultsScoreComment());?>
">
                    <span class="comment"><?php echo nl2br($_smarty_tpl->getVariable('valueObject')->value->getResultsScoreComment());?>
</span>
                </span>
            </td>
            <?php }?>
        </tr>
        <?php }?>
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
<!-- /employeeFinalResultHistory.tpl -->