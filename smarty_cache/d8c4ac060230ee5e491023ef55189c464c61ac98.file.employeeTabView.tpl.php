<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:10:25
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/employeeTabView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1523852406ee3beb4f7-95721524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8c4ac060230ee5e491023ef55189c464c61ac98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/employeeTabView.tpl',
      1 => 1622902862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1523852406ee3beb4f7-95721524',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeTabView.tpl -->
<div id="mode_employees">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td class="left_panel" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
; min-width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
                <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEmployeeListHtml();?>

            </td>
            <td class="right_panel" style="padding-left:30px;">
                <div id="tabNav" style="margin-top: 10px;">
                    &nbsp;
                </div>
                <div class="top_nav" id="top_nav" style="margin:0px; padding:6px 0px 0px 0px;">
                    <table border="0" cellspacing="0" cellpadding="0" width="100%">
                        <tr>
                            <td id="top_nav_emp" style="vertical-align: middle; text-align: left;">&nbsp;</td>
                            <td id="top_nav_btn" style="vertical-align: middle; text-align: right;">&nbsp;</td>
                        </tr>
                    </table>
                </div>
                <div id="empPrint"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getWelcomeMessage();?>
</div>
            </td>
        </tr>
    </table>
<div><!-- mode_employees -->
<!-- /employeeTabView.tpl -->