<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:11:56
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\to_refactor/mod_level_authorization/displayAccess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2334960bb943cb9a859-94079148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9638bf07f038b7ddc527bc52598844031ff3db9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\to_refactor/mod_level_authorization/displayAccess.tpl',
      1 => 1622902869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2334960bb943cb9a859-94079148',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- displayAccess.tpl -->
<form id="accessForm" name="accessForm" onsubmit="submitSafeForm('<?php echo $_smarty_tpl->getVariable('formIdentifier')->value;?>
', this.name); return false;">
    <?php echo $_smarty_tpl->getVariable('form_token')->value;?>

    <h1><?php echo strtoupper($_smarty_tpl->getVariable('level_name')->value);?>
 <?php echo TXT_UC('PRIVILEGES');?>
</h1>
    <h2><?php echo ucwords($_smarty_tpl->getVariable('title_tabs_T')->value);?>
</h2>
    <table border="0" cellspacing="0" cellpadding="4">
        <tr>
            <?php $_smarty_tpl->tpl_vars['module_tabs_cat'] = new Smarty_variable($_smarty_tpl->getVariable('module_tabs_T')->value, null, null);?>
            <?php $_smarty_tpl->tpl_vars['spread'] = new Smarty_variable(1, null, null);?>
            <?php $_smarty_tpl->tpl_vars['label_0'] = new Smarty_variable(TXT_LC('PERMISSION_NO_ACCESS'), null, null);?>
            <?php $_smarty_tpl->tpl_vars['label_1'] = new Smarty_variable(TXT_LC('PERMISSION_VIEW'), null, null);?>
            <?php $_smarty_tpl->tpl_vars['label_2'] = new Smarty_variable(TXT_LC('PERMISSION_EDIT'), null, null);?>
            <?php $_smarty_tpl->tpl_vars['label_3'] = new Smarty_variable(TXT_LC('PERMISSION_ADD_DELETE'), null, null);?>
            <?php $_template = new Smarty_Internal_Template('to_refactor/mod_level_authorization/displayCategoryTabAccess.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        </tr>
        <tr>
            <td>
                <em><?php echo TXT_LC('PERMISSION_VIEW');?>
&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo TXT_LC('PERMISSION_EDIT');?>
&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo TXT_LC('PERMISSION_ADD_DELETE');?>
</em>
            </td>
        </tr>
    </table>
    <?php if (count($_smarty_tpl->getVariable('module_tabs_P1')->value)>0||count($_smarty_tpl->getVariable('module_tabs_P2')->value)>0||count($_smarty_tpl->getVariable('module_tabs_P3')->value)>0){?>
    <hr />
    <table border="0" cellspacing="0" cellpadding="4">
        <tr>
            <td><h2><?php echo TXT_UCW('PERMISSIONS_ON_TAB');?>
</h2></td>
        </tr>
        <tr>
            <?php $_smarty_tpl->tpl_vars['module_tabs_cat'] = new Smarty_variable($_smarty_tpl->getVariable('module_tabs_P1')->value, null, null);?>
            <?php $_smarty_tpl->tpl_vars['spread'] = new Smarty_variable(0, null, null);?>
            <?php $_smarty_tpl->tpl_vars['label_0'] = new Smarty_variable(TXT_UC('PERMISSION_NO_ACCESS'), null, null);?>
            <?php $_smarty_tpl->tpl_vars['label_1'] = new Smarty_variable(TXT_LC('PERMISSION_VIEW'), null, null);?>
            <?php $_smarty_tpl->tpl_vars['label_2'] = new Smarty_variable(TXT_LC('PERMISSION_USE'), null, null);?>
            <?php $_template = new Smarty_Internal_Template('to_refactor/mod_level_authorization/displayCategoryTabAccess.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

            <?php $_smarty_tpl->tpl_vars['module_tabs_cat'] = new Smarty_variable($_smarty_tpl->getVariable('module_tabs_P2')->value, null, null);?>
            <?php $_smarty_tpl->tpl_vars['spread'] = new Smarty_variable(0, null, null);?>
            <?php $_smarty_tpl->tpl_vars['label_0'] = new Smarty_variable(TXT_UC('PERMISSION_NO_ACCESS'), null, null);?>
            <?php $_smarty_tpl->tpl_vars['label_1'] = new Smarty_variable(TXT_LC('PERMISSION_VIEW'), null, null);?>
            <?php $_smarty_tpl->tpl_vars['label_2'] = new Smarty_variable(TXT_LC('PERMISSION_USE'), null, null);?>
            <?php $_template = new Smarty_Internal_Template('to_refactor/mod_level_authorization/displayCategoryTabAccess.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

            <?php $_smarty_tpl->tpl_vars['module_tabs_cat'] = new Smarty_variable($_smarty_tpl->getVariable('module_tabs_P3')->value, null, null);?>
            <?php $_smarty_tpl->tpl_vars['spread'] = new Smarty_variable(0, null, null);?>
            <?php $_smarty_tpl->tpl_vars['label_0'] = new Smarty_variable(TXT_UC('PERMISSION_NO_ACCESS'), null, null);?>
            <?php $_smarty_tpl->tpl_vars['label_1'] = new Smarty_variable(TXT_LC('PERMISSION_VIEW'), null, null);?>
            <?php $_smarty_tpl->tpl_vars['label_2'] = new Smarty_variable(TXT_LC('PERMISSION_EDIT'), null, null);?>
            <?php $_smarty_tpl->tpl_vars['label_3'] = new Smarty_variable(TXT_LC('PERMISSION_ADD_DELETE'), null, null);?>
            <?php $_template = new Smarty_Internal_Template('to_refactor/mod_level_authorization/displayCategoryTabAccess.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        </tr>
    </table>
    <?php }?>
    <table>
        <tr>
            <td>
                <input type="submit" id="submitButton" value="<?php echo TXT_BTN('SAVE');?>
" class="btn btn_width_80"/>
            </td>
        </tr>
    </table>
</form>
<!-- /displayAccess.tpl -->