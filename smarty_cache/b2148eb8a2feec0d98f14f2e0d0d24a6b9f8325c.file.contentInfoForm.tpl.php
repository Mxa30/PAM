<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:21:59
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/application/interface/templates\components/contentInfoForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101260bb96974b5c96-60370628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2148eb8a2feec0d98f14f2e0d0d24a6b9f8325c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/application/interface/templates\\components/contentInfoForm.tpl',
      1 => 1622902844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101260bb96974b5c96-60370628',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- contentInfoForm.tpl -->
    <h1><?php echo $_smarty_tpl->getVariable('formTitle')->value;?>
</h1>
    <div class="wizard-content" style="<?php if (!$_smarty_tpl->getVariable('fullsize')->value){?>height:<?php if ($_smarty_tpl->getVariable('contentPixelHeight')->value){?><?php echo $_smarty_tpl->getVariable('contentPixelHeight')->value;?>
<?php }else{ ?>300<?php }?>px;<?php }?> width:<?php echo $_smarty_tpl->getVariable('contentWidth')->value;?>
;">
    <?php echo $_smarty_tpl->getVariable('formContent')->value;?>

    </div>
    <input type="button" id="<?php echo constant('CANCEL_BUTTON');?>
" value="<?php if ($_smarty_tpl->getVariable('formCloseButtonName')->value){?><?php echo $_smarty_tpl->getVariable('formCloseButtonName')->value;?>
<?php }else{ ?><?php echo TXT_BTN('CANCEL');?>
<?php }?>" class="btn btn_width_80" onclick="<?php if ($_smarty_tpl->getVariable('formCancelFunction')->value){?><?php echo $_smarty_tpl->getVariable('formCancelFunction')->value;?>
<?php }else{ ?>closeFormDialog()<?php }?>;return false;">
<!-- /contentInfoForm.tpl -->