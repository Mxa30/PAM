<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:14:35
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\library/assessmentCycleEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2203960bb94dbcff162-65319034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '315543d2232fbdc20aad85a76d3779a061703404' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\library/assessmentCycleEdit.tpl',
      1 => 1622902864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2203960bb94dbcff162-65319034',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- assessmentCycleEdit.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<table border="0" cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <tr>
        <td class="form-label" style="width:150px;">
            <label for="cycle_name"><?php echo TXT_UCF('NAME');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <input id="cycle_name" name="cycle_name" type="text" value="<?php echo $_smarty_tpl->getVariable('valueObject')->value->getAssessmentCycleName();?>
" />
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="start_date"><?php echo TXT_UCF('START_DATE');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getStartDatePicker();?>

        </td>
    </tr>
</table>
<!-- /assessmentCycleEdit.tpl -->
