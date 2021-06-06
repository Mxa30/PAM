<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:14:50
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\library/pdpActionClusterView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3165360bb94ea2ccae6-55714208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41065a5089c200caa5d2aef44e524ba1a861022d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\library/pdpActionClusterView.tpl',
      1 => 1622902865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3165360bb94ea2ccae6-55714208',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- pdpActionClusterView.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->hiliteRow()){?>
    <?php $_smarty_tpl->tpl_vars['new_row_indicator'] = new Smarty_variable('class="short_hilite"', null, null);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['new_row_indicator'] = new Smarty_variable('', null, null);?>
<?php }?>

    <tr <?php echo $_smarty_tpl->getVariable('new_row_indicator')->value;?>
 id="detail_row_<?php echo $_smarty_tpl->getVariable('valueObject')->value->getId();?>
" onmouseover="activateThisRow(this);" onmouseout="deactivateThisRow(this);">
        <td class="bottom_line">
            <?php echo $_smarty_tpl->getVariable('valueObject')->value->getActionName();?>

        </td>
        <td class="bottom_line">
            <?php echo $_smarty_tpl->getVariable('valueObject')->value->getProvider();?>

        </td>
        <td class="bottom_line">
            <?php echo $_smarty_tpl->getVariable('valueObject')->value->getDuration();?>

        </td>
        <td class="bottom_line" style="text-align:right;">
            <?php echo PdpCostConverter::display($_smarty_tpl->getVariable('valueObject')->value->getCost());?>

        </td>
        <td class="bottom_line centered icon-link">
            <?php echo NumberConverter::display($_smarty_tpl->getVariable('valueObject')->value->getUsageCount());?>
&nbsp;<span class="activeRow icon-style"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEmployeeDetailLink();?>
</span>
        </td>
        <td class="bottom_line actions">
            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getActionLinks();?>

        </td>
    </tr>
<!-- /pdpActionClusterView.tpl -->