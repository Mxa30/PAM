<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:13:27
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/application/interface/templates\components/modifiedLog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:418460bb9497657678-24567476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '476ea367a91fba7a582582d7958de76564dbd5e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/application/interface/templates\\components/modifiedLog.tpl',
      1 => 1622902845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '418460bb9497657678-24567476',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!-- modifiedLog.tpl -->
<table width="300" border="0" cellspacing="1" cellpadding="1" class="border1px">
    <tr>
        <td width="130" class="bottom_line shaded_title"><?php echo TXT_UCF('LAST_MODIFIED_BY');?>
</td>
        <td width="150" class="activated"><?php echo $_smarty_tpl->getVariable('modifiedBy')->value;?>
</td>
    </tr>
    <tr>
        <td class="bottom_line shaded_title"><?php echo TXT_UCF('LAST_MODIFIED_ON');?>
</td>
        <td class="activated"><?php echo $_smarty_tpl->getVariable('modifiedDate')->value;?>
&nbsp;<?php echo $_smarty_tpl->getVariable('modifiedTime')->value;?>
</td>
    </tr>
</table>
<!-- /modifiedLog.tpl -->