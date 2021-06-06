<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:10:25
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/application/interface/templates\components/safeFilterForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3248552406ee3a85d20-68819403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5869708030302be7d5b9843088fd26a6c2f95aea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/application/interface/templates\\components/safeFilterForm.tpl',
      1 => 1622902845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3248552406ee3a85d20-68819403',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- /safeFilterForm.tpl -->
<form id="<?php echo $_smarty_tpl->getVariable('formId')->value;?>
" name="<?php echo $_smarty_tpl->getVariable('formId')->value;?>
" onsubmit="submitFilterSafeForm('<?php echo $_smarty_tpl->getVariable('safeFormIdentifier')->value;?>
', this.name);return false;">
    <?php echo $_smarty_tpl->getVariable('safeFormToken')->value;?>

    <?php echo $_smarty_tpl->getVariable('formContent')->value;?>

</form>
<!-- /safeFilterForm.tpl -->