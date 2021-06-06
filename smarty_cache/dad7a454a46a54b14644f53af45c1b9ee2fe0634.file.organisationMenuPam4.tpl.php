<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:16:40
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/application/interface/templates\navigation/organisationMenuPam4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3132560bb955884eaa5-53484414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dad7a454a46a54b14644f53af45c1b9ee2fe0634' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/application/interface/templates\\navigation/organisationMenuPam4.tpl',
      1 => 1622902845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3132560bb955884eaa5-53484414',
  'function' => 
  array (
    'activeClass' => 
    array (
      'parameter' => 
      array (
        'menuName' => '',
      ),
      'compiled' => '',
    ),
  ),
  'has_nocache_code' => 0,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- organisationMenuPam4.tpl -->
<?php if (!function_exists('smarty_template_function_activeClass')) {
    function smarty_template_function_activeClass($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->template_functions['activeClass']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<?php if ($_smarty_tpl->getVariable('active')->value==constant($_smarty_tpl->getVariable('menuName')->value)){?>active-menu-item<?php }?><?php if ($_smarty_tpl->getVariable('lastModule')->value==constant($_smarty_tpl->getVariable('menuName')->value)){?> last<?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>

<div class="application-content block-menu" style="margin-left: auto; margin-right:auto;">
    <table class="tab-menu">
        <tr>
        <?php if ($_smarty_tpl->getVariable('showCompanyInformation')->value){?>
            <td class="clickable <?php smarty_template_function_activeClass($_smarty_tpl,array('menuName'=>'MODULE_ORGANISATION_MENU_COMPANY_INFO'));?>
"
                onclick="xajax_public_organisationInfo__displayInfo();return false;">
                <a href=""><?php echo TXT_TAB('COMPANY_INFORMATION');?>
</a>
            </td>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('showDepartments')->value){?>
            <td class="clickable <?php smarty_template_function_activeClass($_smarty_tpl,array('menuName'=>'MODULE_ORGANISATION_MENU_DEPARTMENTS'));?>
"
                onclick="xajax_public_organisation__displayDepartments();return false;">
                <a href=""><?php echo TXT_TAB('DEPARTMENTS');?>
</a>
            </td>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('showManagers')->value){?>
            <td class="clickable <?php smarty_template_function_activeClass($_smarty_tpl,array('menuName'=>'MODULE_ORGANISATION_MENU_MANAGERS'));?>
"
                onclick="xajax_public_organisation__displayManagers();return false;">
                <a href=""><?php echo TXT_TAB('REPORT_MANAGERS');?>
</a>
            </td>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('showBatchAddPDP')->value){?>
            <td class="clickable <?php smarty_template_function_activeClass($_smarty_tpl,array('menuName'=>'MODULE_ORGANISATION_MENU_PDP_ACTIONS_BATCH'));?>
"
                onclick="xajax_moduleOrganisation_pdpActionsBatchForm();return false;">
                <a href=""><?php echo TXT_TAB('MENU_ADD_NEW_PDP_ACTION');?>
</a>
            </td>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('showBatchAddTarget')->value){?>
            <td class="clickable <?php smarty_template_function_activeClass($_smarty_tpl,array('menuName'=>'MODULE_ORGANISATION_MENU_TARGETS_BATCH'));?>
"
                onclick="xajax_public_batch_addTarget();return false;">
                <a href=""><?php echo TXT_TAB('MENU_ADD_NEW_TARGET');?>
</a>
            </td>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('showBatchAddFiles')->value){?>
            <td class="clickable <?php smarty_template_function_activeClass($_smarty_tpl,array('menuName'=>'MODULE_ORGANISATION_MENU_ATTACHMENT_BATCH'));?>
"
                onclick="xajax_moduleOrganisation_attachmentBatchForm();return false;">
                <a href=""><?php echo TXT_TAB('MENU_UPLOAD_NEW_ATTACHMENT');?>
</a>
            </td>
        <?php }?>
        </tr>
    </table>
</div>
<!-- /organisationMenuPam4.tpl -->
