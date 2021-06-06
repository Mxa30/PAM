<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:19:51
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\report/baseReportPeriodDatesEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:314660bb9617322d74-14906216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '395d598b2d5dfea553cb0e9c50a3bdcb37c0b455' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\report/baseReportPeriodDatesEdit.tpl',
      1 => 1622902866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314660bb9617322d74-14906216',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- baseReportPeriodDatesEdit.tpl -->
<table border="0" cellspacing="0" cellpadding="4" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
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
    <tr>
        <td class="form-label">
            <label for="end_date"><?php echo TXT_UCF('END_DATE');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEndDatePicker();?>

        </td>
    </tr>
</table>

<!-- /baseReportPeriodDatesEdit.tpl -->