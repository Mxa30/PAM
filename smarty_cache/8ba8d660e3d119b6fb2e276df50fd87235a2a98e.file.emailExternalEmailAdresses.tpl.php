<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:15:12
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\to_refactor/mod_email_messages/emailExternalEmailAdresses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2643860bb950072a3f5-95878919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ba8d660e3d119b6fb2e276df50fd87235a2a98e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\to_refactor/mod_email_messages/emailExternalEmailAdresses.tpl',
      1 => 1622902868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2643860bb950072a3f5-95878919',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- emailExternalEmailAdresses.tpl -->
    <div id="tabNav">
        <?php echo $_smarty_tpl->getVariable('emailMenu')->value;?>

    </div>
    <br/>
    <table border="0" cellspacing="0" cellpadding="5" width="670" align="center" class="border1px">
        <tr>
            <td>
                <!-- list external emails -->
                <table width="100%">
                    <tr>
                        <td>
                            <table width="100%" border="0" cellpadding="4">
                            <?php if (count($_smarty_tpl->getVariable('rows')->value)==0){?>
                                <tr><td><?php echo TXT_UCF('NO_EMAIL_S_RETURN');?>
</td></tr>
                            <?php }else{ ?>
                                <tr>
                                    <td class="shaded_title bottom_line">
                                        <strong><?php echo TXT_UCF('EXTERNAL_EMAIL_ADDRESSES');?>
</strong>
                                    </td>
                                    <td class="shaded_title bottom_line" style="padding-left:5px">
                                        <strong><?php echo TXT_UCF('FULL_NAME');?>
</strong>
                                    </td>
                                    <td class="shaded_title bottom_line">
                                        &nbsp;
                                    </td>
                                </tr>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('rows')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
                                    <td class="bottom_line"><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
                                    <td class="bottom_line" style="padding-left:5px"><?php echo $_smarty_tpl->getVariable('module_utils_object')->value->ExternalName($_smarty_tpl->tpl_vars['row']->value['firstname'],$_smarty_tpl->tpl_vars['row']->value['lastname']);?>
</td>
                                    <td class="bottom_line actions" style="width:50px;">
                                        <?php if ($_smarty_tpl->getVariable('isEditAllowed')->value){?>
                                        <a href="" onclick="xajax_moduleEmails_editExternalEmailAddresses(<?php echo $_smarty_tpl->tpl_vars['row']->value['ID_EXT'];?>
);return false;" title="<?php echo TXT_UCF('EDIT');?>
"><img src="<?php echo constant('ICON_EDIT');?>
" class="icon-style" border="0"></a>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->getVariable('isDeleteAllowed')->value){?>
                                        <a href="" onclick="xajax_moduleEmails_deleteExternalEmailAddresses(<?php echo $_smarty_tpl->tpl_vars['row']->value['ID_EXT'];?>
);return false;" title="<?php echo TXT_UCF('DELETE');?>
"><img src="<?php echo constant('ICON_DELETE');?>
" class="icon-style" border="0"></a>
                                        <?php }?>
                                    </td>

                                </tr>
                                <?php }} ?>
                            <?php }?>
                            </table>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <br />
                <!-- /list external emails -->
                <!-- submit new external email -->
                <div id="neEdit"><strong><?php if ($_smarty_tpl->getVariable('isAddAllowed')->value){?><?php echo TXT_UCW('ADD_NEW_EMAIL');?>
</strong><?php }?></div>
                <div id="neDiv">
                <?php if ($_smarty_tpl->getVariable('isAddAllowed')->value){?>
                    <form id="neForm" name="neForm" onsubmit="submitSafeForm('<?php echo $_smarty_tpl->getVariable('formIdentifier')->value;?>
', this.name); return false;">
                    <?php echo $_smarty_tpl->getVariable('formToken')->value;?>

                        <table border="0" cellspacing="0" cellpadding="10" class="border1px">
                            <tr>
                                <td class="bottom_line">
                                    <?php echo TXT_UCF('EXTERNAL_EMAIL_ADDRESS');?>
 <?php echo constant('REQUIRED_FIELD_INDICATOR');?>

                                </td>
                                <td class="bottom_line">
                                    <input name="email" type="text" id="email" size="30" maxlength="78">
                                </td>
                            </tr>
                            <tr>
                                <td class="bottom_line">
                                    <?php echo TXT_UCF('FIRST_NAME');?>
 <?php echo constant('REQUIRED_FIELD_INDICATOR');?>

                                </td>
                                <td class="bottom_line">
                                    <input name="firstname" type="text" id="firstname" size="30" maxlength="250" />
                                </td>
                            </tr>
                            <tr>
                                <td class="bottom_line">
                                    <?php echo TXT_UCF('LAST_NAME');?>
 <?php echo constant('REQUIRED_FIELD_INDICATOR');?>

                                </td>
                                <td class="bottom_line">
                                    <input name="lastname" type="text" id="lastname" size="30" maxlength="250" />
                                </td>
                            </tr>
                        </table>
                        <br />
                        <input type="submit" id="submitButton" class="btn btn_width_80" value="<?php echo TXT_BTN('SAVE');?>
">
                    </form>
                <?php }?>
                </div>
                <!-- /submit new external email -->
                <br />
            </td>
        </tr>
    </table>
<!-- /emailExternalEmailAdresses.tpl -->