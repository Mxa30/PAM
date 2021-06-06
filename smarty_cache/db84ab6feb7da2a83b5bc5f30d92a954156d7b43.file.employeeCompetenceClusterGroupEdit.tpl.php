<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:23:59
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/competence/employeeCompetenceClusterGroupEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2206260bb970f14e210-20212642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db84ab6feb7da2a83b5bc5f30d92a954156d7b43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/competence/employeeCompetenceClusterGroupEdit.tpl',
      1 => 1622902863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2206260bb970f14e210-20212642',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeCompetenceClusterGroupEdit.tpl -->
<table border="0" cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showClusterInfo()){?>
    <tr>
        <td class="shaded_title-new" colspan="100%">
            <h2><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getClusterName();?>
</h2>
        </td>
    </tr>
    <?php }?>
    <tr>
        <th class="content-title" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getCompetenceWidth();?>
;">&nbsp;</th>
        <th class="content-title" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getScoreWidth();?>
;">&nbsp;</th>
        <th class="content-title" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getActionsWidth();?>
;">&nbsp;</th>
    </tr>
    <?php if (count($_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects())>0){?>
    <?php  $_smarty_tpl->tpl_vars['scoreInterfaceObject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['scoreInterfaceObject']->key => $_smarty_tpl->tpl_vars['scoreInterfaceObject']->value){
?>
        <?php echo $_smarty_tpl->getVariable('scoreInterfaceObject')->value->fetchHtml();?>

    <?php }} ?>
    <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showClusterInfo()){?>
    <tr>
        <td colspan="100%">
            <hr/>
            <br/>
        </td>
    </tr>
    <?php }?>
    <?php }else{ ?>
    <tr>
        <td colspan="100%"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->displayEmptyMessage();?>
</td>
    </tr>
    <?php }?>
</table>
<!-- /employeeCompetenceClusterGroupEdit.tpl -->
