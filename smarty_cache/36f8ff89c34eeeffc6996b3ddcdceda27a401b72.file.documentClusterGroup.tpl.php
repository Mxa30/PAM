<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:14:45
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\library/documentClusterGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1553960bb94e50cbc13-98961995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36f8ff89c34eeeffc6996b3ddcdceda27a401b72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\library/documentClusterGroup.tpl',
      1 => 1622902865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1553960bb94e50cbc13-98961995',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- documentClusterGroup.tpl -->
<table class="content-table" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <tr>
        <th class="bottom_line shaded_title"><?php echo TXT_UCF('ATTACHMENT_CLUSTER_NAME');?>
</th>
        <th class="bottom_line shaded_title actions" style="width:100px;">&nbsp;</td>
    </tr>
    <?php if (count($_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects())>0){?>
        <?php  $_smarty_tpl->tpl_vars['viewObject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['viewObject']->key => $_smarty_tpl->tpl_vars['viewObject']->value){
?>
            <?php echo $_smarty_tpl->getVariable('viewObject')->value->fetchHtml();?>

        <?php }} ?>
    <?php }else{ ?>
    <tr>
        <td colspan="100%"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->displayEmptyMessage();?>
</td>
    </tr>
    <?php }?>
</table>
<!-- /documentClusterGroup.tpl -->