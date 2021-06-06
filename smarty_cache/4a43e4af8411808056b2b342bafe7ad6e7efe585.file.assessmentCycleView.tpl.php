<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:14:27
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\library/assessmentCycleView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1499860bb94d3eaf158-18618372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a43e4af8411808056b2b342bafe7ad6e7efe585' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\library/assessmentCycleView.tpl',
      1 => 1622902864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1499860bb94d3eaf158-18618372',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- assessmentCycleView.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->hiliteRow()){?>
    <?php $_smarty_tpl->tpl_vars['new_row_indicator'] = new Smarty_variable('short_hilite', null, null);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['new_row_indicator'] = new Smarty_variable('', null, null);?>
<?php }?>
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isCurrentCycle()){?>
    <?php $_smarty_tpl->tpl_vars['current_row_indicator'] = new Smarty_variable(constant('MESSAGE_INFO'), null, null);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['current_row_indicator'] = new Smarty_variable('', null, null);?>
<?php }?>

<tr class="<?php echo $_smarty_tpl->getVariable('new_row_indicator')->value;?>
 <?php echo $_smarty_tpl->getVariable('current_row_indicator')->value;?>
" id="detail_row_<?php echo $_smarty_tpl->getVariable('valueObject')->value->getId();?>
" onmouseover="activateThisRow(this);" onmouseout="deactivateThisRow(this);">
    <td class="bottom_line">
        <?php echo $_smarty_tpl->getVariable('valueObject')->value->getAssessmentCycleName();?>

    </td>
    <td class="bottom_line">
        <?php echo DateConverter::display($_smarty_tpl->getVariable('valueObject')->value->getStartDate());?>

    </td>
    <td class="bottom_line">
        <?php echo DateConverter::display($_smarty_tpl->getVariable('valueObject')->value->getEndDate());?>

    </td>
    <td class="bottom_line actions">
        <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEditLink();?>
&nbsp;<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRemoveLink();?>

    </td>
</tr>
<!-- /assessmentCycleView.tpl -->