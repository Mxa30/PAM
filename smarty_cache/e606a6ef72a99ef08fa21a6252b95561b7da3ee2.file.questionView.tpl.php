<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:14:18
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\library/questionView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2802660bb94cabe4a92-06690175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e606a6ef72a99ef08fa21a6252b95561b7da3ee2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\library/questionView.tpl',
      1 => 1622902865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2802660bb94cabe4a92-06690175',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- questionView.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->hiliteRow()){?>
    <?php $_smarty_tpl->tpl_vars['new_row_indicator'] = new Smarty_variable('class="short_hilite"', null, null);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['new_row_indicator'] = new Smarty_variable('', null, null);?>
<?php }?>

<tr <?php echo $_smarty_tpl->getVariable('new_row_indicator')->value;?>
 id="detail_row_<?php echo $_smarty_tpl->getVariable('valueObject')->value->getId();?>
" onmouseover="activateThisRow(this);" onmouseout="deactivateThisRow(this);">
    <td class="bottom_line centered">
        <?php echo $_smarty_tpl->getVariable('valueObject')->value->getSortOrder();?>

    </td>
    <td class="bottom_line">
        <?php echo nl2br($_smarty_tpl->getVariable('valueObject')->value->getQuestion());?>

    </td>
    <td class="bottom_line actions">
        <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEditLink();?>
&nbsp;<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRemoveLink();?>

    </td>
</tr>
<!-- /questionView.tpl -->