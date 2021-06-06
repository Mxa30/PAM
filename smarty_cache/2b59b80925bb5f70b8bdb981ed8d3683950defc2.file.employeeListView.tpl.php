<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:10:25
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\list/employeeListView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3218652406ee3abdd17-61458510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b59b80925bb5f70b8bdb981ed8d3683950defc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\list/employeeListView.tpl',
      1 => 1622902865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3218652406ee3abdd17-61458510',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeListView.tpl -->
<!-- sortfilter:<?php echo EmployeeFilterService::retrieveSortFilter();?>
 -->
<div class="actions">
    <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getAddLink();?>

</div>
<div id="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getReplaceHtmlId();?>
">
    <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getFilteredEmployees()->fetchHtml();?>

</div><!-- /<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getReplaceHtmlId();?>
 -->
<!-- /employeeListView.tpl -->