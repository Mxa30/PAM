<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:21:59
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\library/assessmentCycleDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3047060bb9697425b53-64777011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a9b77b56567f29ace4fd6e127551f2f6239e653' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\library/assessmentCycleDetail.tpl',
      1 => 1622902864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3047060bb9697425b53-64777011',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- assessmentCycleDetail.tpl -->
<?php $_smarty_tpl->tpl_vars['detailInterfaceObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObject(), null, null);?>
<table style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;" border="0" cellspacing="0" cellpadding="2" class="border1px">
    <tr>
        <td>
            <?php echo $_smarty_tpl->getVariable('detailInterfaceObject')->value->fetchHtml();?>

        </td>
    </tr>
</table>
<!-- /assessmentCycleDetail.tpl -->