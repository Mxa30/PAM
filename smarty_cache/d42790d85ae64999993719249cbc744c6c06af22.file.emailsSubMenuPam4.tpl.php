<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:15:12
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/application/interface/templates\navigation/emailsSubMenuPam4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1001760bb95006b6b02-85811480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd42790d85ae64999993719249cbc744c6c06af22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/application/interface/templates\\navigation/emailsSubMenuPam4.tpl',
      1 => 1622902845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1001760bb95006b6b02-85811480',
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
<!-- emailsSubMenuPam4.tpl -->
<?php if (!function_exists('smarty_template_function_activeClass')) {
    function smarty_template_function_activeClass($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->template_functions['activeClass']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<?php if ($_smarty_tpl->getVariable('active')->value==constant($_smarty_tpl->getVariable('menuName')->value)){?>active-menu-item<?php }?><?php if ($_smarty_tpl->getVariable('lastModule')->value==constant($_smarty_tpl->getVariable('menuName')->value)){?> last<?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>

<div class="application-content block-menu" style="margin-left: auto; margin-right:auto;">
    <table class="tab-menu">
        <tr>
            <td class="clickable <?php smarty_template_function_activeClass($_smarty_tpl,array('menuName'=>'MODULE_EMAIL_EXTERNAL_EMAILADDRESSES'));?>
"
                onclick="xajax_moduleEmails_displayExternalEmailAddresses();return false;">
                <a href=""><strong><?php echo TXT_TAB('EXTERNAL_EMAIL_ADDRESSES');?>
</strong></a>
            </td>
            <td class="clickable <?php smarty_template_function_activeClass($_smarty_tpl,array('menuName'=>'MODULE_EMAIL_360_NOTIFICATION_MESSAGE'));?>
"
                onclick="xajax_moduleEmails_notification360Message();return false;">
                <a href=""><strong><?php echo TXT_TAB('360_NOTIFICATION_MESSAGE');?>
</strong></a>
            </td>
            <td class="clickable <?php smarty_template_function_activeClass($_smarty_tpl,array('menuName'=>'MODULE_EMAIL_PDP_NOTIFICATION_MESSAGE'));?>
"
                 onclick="xajax_moduleEmails_displayNotificationMessage();return false;">
                <a href=""><strong><?php echo TXT_TAB('PDP_NOTIFICATION_MESSAGE');?>
</strong></a>
            </td>
        </tr>
    </table>
</div>
<!-- /emailsSubMenuPam4.tpl -->
