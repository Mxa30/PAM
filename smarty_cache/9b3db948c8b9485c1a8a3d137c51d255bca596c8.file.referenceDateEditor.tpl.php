<?php /* Smarty version Smarty-3.0.7, created on 2021-06-24 10:20:39
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/application/interface/templates\referenceDateEditor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:672452406ee28932e3-78775170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b3db948c8b9485c1a8a3d137c51d255bca596c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/application/interface/templates\\referenceDateEditor.tpl',
      1 => 1624101545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '672452406ee28932e3-78775170',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- referenceDateEditor.tpl -->
&nbsp;peildatum: <?php echo $_smarty_tpl->getVariable('editorDatePicker')->value;?>

&nbsp;<input name="modify" type="button" value="aanpassen" onClick="xajax_public_modifyCurrentDate(xajax.getFormValues('<?php echo $_smarty_tpl->getVariable('editorFormName')->value;?>
')); return false;">
<!-- /referenceDateEditor.tpl -->