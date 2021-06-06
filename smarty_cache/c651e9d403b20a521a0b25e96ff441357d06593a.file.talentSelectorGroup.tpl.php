<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:16:17
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\report/talentSelectorGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1626460bb9541e68fb1-87621676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c651e9d403b20a521a0b25e96ff441357d06593a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\report/talentSelectorGroup.tpl',
      1 => 1622902867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1626460bb9541e68fb1-87621676',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- talentSelectorGroup.tpl -->
<div id="talent_selector_grid">
    <table style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;" align="center">
        <tr>
            <th class="bottom_line shaded_title">&nbsp;</th>
            <th class="bottom_line shaded_title"><?php echo TXT_UCF('COMPETENCE');?>
</th>
            <th class="bottom_line shaded_title"><?php echo TXT_UCF('SCALE');?>
&nbsp;</th>
            <th class="bottom_line shaded_title" colspan="2"><?php echo TXT_UCF('CRITERIA');?>
</th>
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
</div>
<!-- /talentSelectorGroup.tpl -->