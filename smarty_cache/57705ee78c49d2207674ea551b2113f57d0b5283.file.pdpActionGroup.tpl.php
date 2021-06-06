<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:14:50
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\library/pdpActionGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164660bb94ea2575c3-96089906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57705ee78c49d2207674ea551b2113f57d0b5283' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\library/pdpActionGroup.tpl',
      1 => 1622902865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164660bb94ea2575c3-96089906',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- pdpActionGroup.tpl -->
<?php if (count($_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects())>0){?>
    <?php  $_smarty_tpl->tpl_vars['clusterInterfaceObject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['clusterInterfaceObject']->key => $_smarty_tpl->tpl_vars['clusterInterfaceObject']->value){
?>
        <?php echo $_smarty_tpl->getVariable('clusterInterfaceObject')->value->fetchHtml();?>

    <?php }} ?>
<?php }?>
<!-- /pdpActionGroup.tpl -->