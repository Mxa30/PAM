<?php /* Smarty version Smarty-3.0.7, created on 2021-06-24 10:20:47
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/profile/employeeProfilePersonalEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:596560c66150b77253-45727353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fc40e5b21e5842ead2fb4e8c7fa779cf99828a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/profile/employeeProfilePersonalEdit.tpl',
      1 => 1624192608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '596560c66150b77253-45727353',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeProfilePersonalEdit.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<table border="0" cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
">
    <tr>
        <td class="form-label" style="width:150px;">
            <label for="firstname"><?php echo TXT_UCF('FIRST_NAME');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <input id="firstname" name="firstname" type="text" size="30" value="<?php echo $_smarty_tpl->getVariable('valueObject')->value->getFirstname();?>
">
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="lastname"><?php echo TXT_UCF('LAST_NAME');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <input id="lastname" name="lastname" type="text" size="30" value="<?php echo $_smarty_tpl->getVariable('valueObject')->value->getLastname();?>
">
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="SN"><?php echo TXT_UCF('SOCIAL_NUMBER');?>
</label>
        </td>
        <td class="form-value">
            <input id="SN" name="SN" type="text" size="30" value="<?php echo $_smarty_tpl->getVariable('valueObject')->value->getBsn();?>
">
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="sex"><?php echo TXT_UCF('GENDER');?>
</label>
        </td>
        <td class="form-value">
            <?php $_template = new Smarty_Internal_Template('components/selectRadioComponent.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('inputName','sex');$_template->assign('values',EmployeeGenderValue::values());$_template->assign('currentValue',$_smarty_tpl->getVariable('valueObject')->value->getGender());$_template->assign('converter','EmployeeGenderConverter'); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        </td>
    </tr>
    <tr>
        <td class="form-label" >
            <label for="birth_date"><?php echo TXT_UCF('DATE_OF_BIRTH');?>
</label>
        </td>
        <td class="form-value">
            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getBirthDatePicker();?>

        </td>
    </tr>
    <tr>
        <td class="form-label" >
            <label for="nationality"><?php echo TXT_UCF('NATIONALITY');?>
</label>
        </td>
        <td class="form-value">
            <input id="nationality" name="nationality" type="text" size="30" value="<?php echo $_smarty_tpl->getVariable('valueObject')->value->getNationality();?>
">
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="maritial_status"><?php echo TXT_UCF('MARITAL_STATUS');?>
</label>
        </td>
        <td class="form-value">
            <select id="maritial_status" name="maritial_status">
                <option value="0">- <?php echo TXT_LC('SELECT');?>
 <?php echo TXT_UCF('MARITAL_STATUS');?>
 -</option>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = EmployeeMaritalStatusValue::values(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
                    <?php $_smarty_tpl->tpl_vars['text'] = new Smarty_variable(EmployeeMaritalStateConverter::display($_smarty_tpl->tpl_vars['value']->value), null, null);?>
                    <?php $_smarty_tpl->tpl_vars['selectedValue'] = new Smarty_variable($_smarty_tpl->getVariable('valueObject')->value->getMaritialStatus(), null, null);?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->getVariable('selectedValue')->value==$_smarty_tpl->tpl_vars['value']->value){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('text')->value;?>
</option>
                <?php }} ?>
            </select>
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="homepage"><?php echo TXT_UCF('HOMEPAGE');?>
</label>
        </td>
        <td class="form-value">
            <input id="homepage" name="homepage" type="text" size="30" value="<?php echo $_smarty_tpl->getVariable('valueObject')->value->getHomepage();?>
">
        </td>
    </tr>
    <tr>
        <td class="form-label">&nbsp;</td>
        <td class="form-value">&nbsp;</td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="email_address"><?php echo TXT_UCF('E_MAIL_ADDRESS');?>
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isEmailRequired()){?> <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
<?php }?></label>
        </td>
        <td class="form-value">
            <input id="email_address" name="email_address" type="text" size="30" value="<?php echo $_smarty_tpl->getVariable('valueObject')->value->getEmailAddress();?>
">
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="street"><?php echo TXT_UCF('STREET');?>
</label>
        </td>
        <td class="form-value">
            <input id="street" name="street" type="text" size="30" value="<?php echo $_smarty_tpl->getVariable('valueObject')->value->getStreet();?>
">
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="postal_code"><?php echo TXT_UCF('ZIP_CODE');?>
</label>
        </td>
        <td class="form-value">
            <input id="postal_code" name="postal_code" type="text" size="30" value="<?php echo $_smarty_tpl->getVariable('valueObject')->value->getPostcode();?>
">
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="city"><?php echo TXT_UCF('CITY');?>
</label>
        </td>
        <td class="form-value">
            <input id="city" name="city" type="text" size="30" value="<?php echo $_smarty_tpl->getVariable('valueObject')->value->getCity();?>
">
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="phone_number"><?php echo TXT_UCF('TELEPHONE_NUMBER');?>
</label>
        </td>
        <td class="form-value">
            <input id="phone_number" name="phone_number" type="text" size="30" value="<?php echo $_smarty_tpl->getVariable('valueObject')->value->getPhoneNumber();?>
">
        </td>
    </tr>
</table>
<!-- /employeeProfilePersonalEdit.tpl -->