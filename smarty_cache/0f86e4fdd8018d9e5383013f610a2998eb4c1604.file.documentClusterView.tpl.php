<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:14:45
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\library/documentClusterView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:472060bb94e51339a1-33782889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f86e4fdd8018d9e5383013f610a2998eb4c1604' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\library/documentClusterView.tpl',
      1 => 1622902865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '472060bb94e51339a1-33782889',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- documentClusterView.tpl -->
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
        <?php echo $_smarty_tpl->getVariable('valueObject')->value->clusterName;?>

    </td>
    <td class="bottom_line actions">
        <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEditLink();?>
&nbsp;<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRemoveLink();?>

    </td>
</tr>
<!-- /documentClusterView.tpl -->