<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:14:18
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\library/questionGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2192560bb94cabb1c59-67215490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '127f63e88c2544bf0a8a7f520b3df9f35fb81ef1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\library/questionGroup.tpl',
      1 => 1622902865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2192560bb94cabb1c59-67215490',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- questionGroup.tpl -->
<table class="content-table" cellpadding="4" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <tr>
        <th class="bottom_line shaded_title centered" width="80"><?php echo TXT_UCF('ORDER');?>
</th>
        <th class="bottom_line shaded_title"><?php echo TXT_UCF('ASSESSMENT_QUESTION');?>
</th>
        <th class="bottom_line shaded_title actions" width="100">&nbsp;</td>
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
<!-- /questionGroup.tpl -->