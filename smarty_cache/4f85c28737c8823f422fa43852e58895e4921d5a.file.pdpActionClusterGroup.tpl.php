<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:14:50
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\library/pdpActionClusterGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2601260bb94ea28cf60-62389932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f85c28737c8823f422fa43852e58895e4921d5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\library/pdpActionClusterGroup.tpl',
      1 => 1622902865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2601260bb94ea28cf60-62389932',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- pdpActionClusterGroup.tpl -->
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->hasInterfaceObjects()){?>
<table border="0" cellspacing="0" cellpadding="4" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <tr>
        <th class="shaded_title" style="width:280px;">
            <?php echo TXT_UCF('PDP_ACTION');?>

        </th>
        <th class="shaded_title" style="width:200px;">
            <?php echo TXT_UCF('PROVIDER');?>

        </th>
        <th class="shaded_title" style="width:190px;">
            <?php echo TXT_UCF('DURATION');?>

        </th>
        <th class="shaded_title" style="text-align:right; width:80px;">
            <?php echo TXT_UCF('COST');?>
 (&euro;)
        </th>
        <th class="shaded_title centered" style="width:80px;">
            <?php echo TXT_UCF('USAGE');?>

        </th>
        <th class="shaded_title" style="width:60px;">
            &nbsp;
        </th>
    </tr>
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
<!-- /pdpActionClusterGroup.tpl -->