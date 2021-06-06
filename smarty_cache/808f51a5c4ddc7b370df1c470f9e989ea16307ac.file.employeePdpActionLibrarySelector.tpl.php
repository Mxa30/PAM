<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:16:45
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/pdpAction/employeePdpActionLibrarySelector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:814660bb955d3f7af4-82262064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '808f51a5c4ddc7b370df1c470f9e989ea16307ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/pdpAction/employeePdpActionLibrarySelector.tpl',
      1 => 1622902864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '814660bb955d3f7af4-82262064',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeePdpActionLibrarySelector.tpl -->
<table border="0" cellspacing="1" cellpadding="2">
    <tr>
        <td class="form-label" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
            &nbsp;
        </td>
        <td class="form-value">
            <span id="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getToggleHtmlId();?>
">
                <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getActionLinks();?>

            </span>
            <div id="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getContentHtmlId();?>
" style="display:none; background-color:white;">
                <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObject()->fetchHtml();?>

            </div>
        </td>
    </tr>
</table>
<!-- /employeePdpActionLibrarySelector.tpl -->