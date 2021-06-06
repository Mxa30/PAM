<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:11:46
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/application/interface/templates\user/passwordEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1240960bb9432138e31-68582946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53edbefdcc15bc08a9a5ae3ccc5558d41c219de7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/application/interface/templates\\user/passwordEdit.tpl',
      1 => 1622902845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1240960bb9432138e31-68582946',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- passwordEdit.tpl -->
 <p><?php echo TXT_UCF('VALID_PASSWORD_FORMAT');?>
.</p>
<table border="0" cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <tr style="display:none;">
        <td class="form-label">
            <label for="user_name"><?php echo TXT_UCF('USERNAME');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <input id="user_name" name="user_name" type="text" size="30" value="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getUserName();?>
" readonly="readonly">
        </td>
    </tr>
    <tr>
        <td class="form-label" style="width:150px;">
            <label for="current"><?php echo TXT_UCF('OLD_PASSWORD');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <input  id="current" name="current" type="password" size="30" value="">
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="new"><?php echo TXT_UCF('NEW_PASSWORD');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <input  id="new" name="new" type="password" size="30" value="">
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="confirm"><?php echo TXT_UCF('CONFIRM_PASSWORD');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <input  id="confirm" name="confirm" type="password" size="30" value="">
        </td>
    </tr>
</table>
<!-- /passwordEdit.tpl -->