<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:14:27
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\library/assessmentCycleGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3012960bb94d3e43732-73740306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09b4a5a48d04f1326e4bb23314ecd009bc1f0096' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\library/assessmentCycleGroup.tpl',
      1 => 1622902864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3012960bb94d3e43732-73740306',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- assessmentCycleGroup.tpl -->
<table class="content-table" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <tr>
        <th class="bottom_line shaded_title"><?php echo TXT_UCF('NAME');?>
</th>
        <th class="bottom_line shaded_title" style="width:150px;"><?php echo TXT_UCF('START_DATE');?>
</th>
        <th class="bottom_line shaded_title" style="width:150px;"><?php echo TXT_UCF('END_DATE');?>
</th>
        <th class="bottom_line shaded_title actions" style="width:120px;">&nbsp;</th>
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

<!-- /assessmentCycleGroup.tpl -->