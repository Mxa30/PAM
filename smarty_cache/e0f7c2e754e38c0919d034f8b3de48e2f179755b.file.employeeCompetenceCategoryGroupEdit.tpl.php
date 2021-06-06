<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:23:59
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/competence/employeeCompetenceCategoryGroupEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2474560bb970f122ba8-24354325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0f7c2e754e38c0919d034f8b3de48e2f179755b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/competence/employeeCompetenceCategoryGroupEdit.tpl',
      1 => 1622902863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2474560bb970f122ba8-24354325',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeCompetenceCategoryGroupEdit.tpl -->
<table class="content-table" border="0" cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;" >
    <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showCategoryName()){?>
    <tr>
        <th colspan="100%">
            <h2><?php echo CategoryConverter::display($_smarty_tpl->getVariable('interfaceObject')->value->getCategoryName());?>
</h2>
        </th>
    </tr>
    <?php }?>
    <?php  $_smarty_tpl->tpl_vars['clusterInterfaceObject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['clusterInterfaceObject']->key => $_smarty_tpl->tpl_vars['clusterInterfaceObject']->value){
?>
        <?php echo $_smarty_tpl->getVariable('clusterInterfaceObject')->value->fetchHtml();?>

    <?php }} ?>
</table>
<!-- /employeeCompetenceCategoryGroupEdit.tpl -->