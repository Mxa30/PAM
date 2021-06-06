<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:16:53
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\batch/employeeTargetBatchAdd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2810860bb95654b5199-19754760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e59ecb0ced280f1c7766715c67d7b89a15fbe6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\batch/employeeTargetBatchAdd.tpl',
      1 => 1622902862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2810860bb95654b5199-19754760',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeTargetBatchAdd.tpl -->
<table cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <tr>
        <td class="form-label" style="width: 150px;">
            <label for="target_name"><?php echo TXT_UCF('TARGET');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <input id="target_name" name="target_name" size="50" type="text" value="" />
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="performance_indicator"><?php echo TXT_UCF('KPI');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <input id="performance_indicator" name="performance_indicator" size="50" type="text" value="" />
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="end_date"><?php echo TXT_UCF('TARGET_END_DATE');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEndDatePicker();?>

        </td>
    </tr>
</table>
<br/>
<p><?php echo TXT_UCW('SELECT');?>
 <?php echo TXT_UCW('EMPLOYEES');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</p>
<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEmployeesSelectorHtml();?>

<br/>
<!-- /employeeTargetBatchAdd.tpl -->