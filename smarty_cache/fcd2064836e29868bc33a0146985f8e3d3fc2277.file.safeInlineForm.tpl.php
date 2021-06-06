<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:19:10
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/application/interface/templates\components/safeInlineForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2883160bb95eebff979-51068704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcd2064836e29868bc33a0146985f8e3d3fc2277' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/application/interface/templates\\components/safeInlineForm.tpl',
      1 => 1622902845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2883160bb95eebff979-51068704',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- safeInlineForm.tpl -->
<form id="<?php echo $_smarty_tpl->getVariable('formId')->value;?>
" name="<?php echo $_smarty_tpl->getVariable('formId')->value;?>
" style="margin:0; padding:0">
    <?php echo $_smarty_tpl->getVariable('safeFormToken')->value;?>

    <?php echo $_smarty_tpl->getVariable('formContent')->value;?>

</form>
<!-- /safeInlineForm.tpl -->