<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:12:41
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/application/interface/templates\navigation/themesSubMenuPam4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1444660bb9469355f73-60926241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e0c94b08b9a4ddbda608d5a5897f590860c14eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/application/interface/templates\\navigation/themesSubMenuPam4.tpl',
      1 => 1622902845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1444660bb9469355f73-60926241',
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
<!-- themesSubMenuPam4.tpl -->
<?php if (!function_exists('smarty_template_function_activeClass')) {
    function smarty_template_function_activeClass($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->template_functions['activeClass']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<?php if ($_smarty_tpl->getVariable('active')->value==constant($_smarty_tpl->getVariable('menuName')->value)){?>active-menu-item<?php }?><?php if ($_smarty_tpl->getVariable('lastModule')->value==constant($_smarty_tpl->getVariable('menuName')->value)){?> last<?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>

<div class="application-content block-menu" style="margin-left: auto; margin-right:auto;">
    <table class="tab-menu">
        <tr>
            <td class="clickable <?php smarty_template_function_activeClass($_smarty_tpl,array('menuName'=>'MODULE_THEMES_LOGO'));?>
"
                onclick="xajax_moduleOptions_themeLogo();return false;">
                <a href=""><strong><?php echo TXT_TAB('LOGO');?>
</strong></a>
            </td>
        <?php if ($_smarty_tpl->getVariable('showColour')->value){?>
            <td class="clickable <?php smarty_template_function_activeClass($_smarty_tpl,array('menuName'=>'MODULE_THEMES_COLOUR'));?>
"
                onclick="xajax_moduleOptions_editThemeColour();return false;">
                <a href=""><strong><?php echo TXT_TAB('THEME_COLOUR');?>
</strong></a>
            </td>
        <?php }?>
            <td class="clickable <?php smarty_template_function_activeClass($_smarty_tpl,array('menuName'=>'MODULE_THEMES_LANGUAGE'));?>
"
                onclick="xajax_moduleOptions_editThemeLanguage();return false;">
                <a href=""><strong><?php echo TXT_TAB('LANGUAGE');?>
</strong></a>
            </td>
        </tr>
    </table>
</div>
<!-- /themesSubMenuPam4.tpl -->