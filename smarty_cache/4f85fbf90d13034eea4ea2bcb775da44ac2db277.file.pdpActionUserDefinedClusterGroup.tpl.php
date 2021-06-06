<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:14:50
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\library/pdpActionUserDefinedClusterGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:703460bb94ea322d09-21767946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f85fbf90d13034eea4ea2bcb775da44ac2db277' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\library/pdpActionUserDefinedClusterGroup.tpl',
      1 => 1622902865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '703460bb94ea322d09-21767946',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- pdpActionUserDefinedClusterGroup.tpl -->
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->hasInterfaceObjects()){?>
<table border="0" cellspacing="0" cellpadding="4" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <?php  $_smarty_tpl->tpl_vars['pdpActionInterfaceObject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['pdpActionInterfaceObject']->key => $_smarty_tpl->tpl_vars['pdpActionInterfaceObject']->value){
?>
        <?php echo $_smarty_tpl->getVariable('pdpActionInterfaceObject')->value->fetchHtml();?>

    <?php }} ?>
</table>
<?php }else{ ?>
    <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->displayEmptyMessage();?>

<?php }?>
<!-- /pdpActionUserDefinedClusterGroup.tpl -->