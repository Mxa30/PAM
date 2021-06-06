<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:11:56
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\to_refactor/mod_level_authorization/displayCategoryTabAccess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1121060bb943cc97389-85649633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '922137f6adaa125bb000c42868334898eed9aaf4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\to_refactor/mod_level_authorization/displayCategoryTabAccess.tpl',
      1 => 1622902869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1121060bb943cc97389-85649633',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!-- displayCategoryTabAccess.tpl -->
            <?php $_smarty_tpl->tpl_vars['allow_empty_line'] = new Smarty_variable(false, null, null);?>
            <?php $_smarty_tpl->tpl_vars['iterationCount'] = new Smarty_variable(0, null, null);?>
            <td width="600">
            <?php  $_smarty_tpl->tpl_vars['tabMenu'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['tabLabel'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('module_tabs_cat')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tabMenu']->key => $_smarty_tpl->tpl_vars['tabMenu']->value){
 $_smarty_tpl->tpl_vars['tabLabel']->value = $_smarty_tpl->tpl_vars['tabMenu']->key;
?>
                <?php if ($_smarty_tpl->getVariable('allow_empty_line')->value==true){?>
                <br />
                <?php }?>
                <h3 class="in-cell"><?php echo $_smarty_tpl->tpl_vars['tabLabel']->value;?>
</h3>
                <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tabMenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
?>
                    <?php $_smarty_tpl->tpl_vars['allow_empty_line'] = new Smarty_variable(true, null, null);?>
                    <?php if ($_smarty_tpl->getVariable('level_id')->value>$_smarty_tpl->tpl_vars['tab']->value['max_user_level_edit']&&$_smarty_tpl->getVariable('level_id')->value>$_smarty_tpl->tpl_vars['tab']->value['max_user_level_view']){?>
                    <?php $_smarty_tpl->tpl_vars['allowed'] = new Smarty_variable('disabled="disabled"', null, null);?>
                    <?php }else{ ?>
                    <?php $_smarty_tpl->tpl_vars['allowed'] = new Smarty_variable('', null, null);?>
                    <?php }?>
                    <div style="margin:5px;">
                        <select name="sel_priv[]" style="width:80px;" <?php echo $_smarty_tpl->getVariable('allowed')->value;?>
>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['tab']->value['privilege']==0){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('label_0')->value;?>
</option>
                            <?php if ($_smarty_tpl->getVariable('level_id')->value<=$_smarty_tpl->tpl_vars['tab']->value['max_user_level_view']){?>
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['tab']->value['privilege']==1){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('label_1')->value;?>
</option>
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('level_id')->value<=$_smarty_tpl->tpl_vars['tab']->value['max_user_level_edit']){?>
                            <option value="2" <?php if ($_smarty_tpl->tpl_vars['tab']->value['privilege']==2){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('label_2')->value;?>
</option>
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('level_id')->value<=$_smarty_tpl->tpl_vars['tab']->value['max_user_level_add_delete']){?>
                            <option value="3" <?php if ($_smarty_tpl->tpl_vars['tab']->value['privilege']==3){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('label_3')->value;?>
</option>
                            <?php }?>
                        </select>
                        <?php if ($_smarty_tpl->getVariable('allowed')->value==''){?><input type="hidden" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['tab']->value['id'];?>
"/><?php }?>
                        <?php echo TXT_UCF($_smarty_tpl->tpl_vars['tab']->value['word_label']);?>
<br />
                    </div>
                    <?php if ($_smarty_tpl->getVariable('spread')->value==1){?>
                        <?php $_smarty_tpl->tpl_vars['iterationCount'] = new Smarty_variable($_smarty_tpl->getVariable('iterationCount')->value+1, null, null);?>
                        <?php if ($_smarty_tpl->getVariable('iterationCount')->value==ceil((1/3*$_smarty_tpl->getVariable('tabModuleCount')->value))||$_smarty_tpl->getVariable('iterationCount')->value==ceil((2/3*$_smarty_tpl->getVariable('tabModuleCount')->value))){?>
                        <?php $_smarty_tpl->tpl_vars['allowempty_line'] = new Smarty_variable(false, null, null);?>
                        </td>
                        <td width="600">
                        <?php }?>
                    <?php }?>
                <?php }} ?>
            <?php }} ?>
            </td>
<!-- /displayCategoryTabAccess.tpl -->