<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:16:59
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/application/interface/templates\components/select/selectDocumentAuthorisation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:642760bb956b4befd8-11805526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8acdc43bbf84b6066e56c12f9c8e55937076d65c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/application/interface/templates\\components/select/selectDocumentAuthorisation.tpl',
      1 => 1622902845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '642760bb956b4befd8-11805526',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php if (count($_smarty_tpl->getVariable('authorisations')->value)>0){?>
    <?php  $_smarty_tpl->tpl_vars['authorisation'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('authorisations')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['authorisation']->key => $_smarty_tpl->tpl_vars['authorisation']->value){
?>
        <?php if ($_smarty_tpl->tpl_vars['authorisation']->value['selected_id']==$_smarty_tpl->tpl_vars['authorisation']->value['level_id']){?>
            <?php $_smarty_tpl->tpl_vars["checked"] = new Smarty_variable('checked="checked"', null, null);?>
        <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars["checked"] = new Smarty_variable('', null, null);?>
        <?php }?>
        <label><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['authorisation']->value['input_field_id'];?>
"
                        id="<?php echo $_smarty_tpl->tpl_vars['authorisation']->value['input_field_id'];?>
" <?php echo $_smarty_tpl->getVariable('checked')->value;?>

                        value="<?php echo $_smarty_tpl->tpl_vars['authorisation']->value['level_id'];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['authorisation']->value['display_name'];?>
</label>
        <br>
    <?php }} ?>
<?php }?>