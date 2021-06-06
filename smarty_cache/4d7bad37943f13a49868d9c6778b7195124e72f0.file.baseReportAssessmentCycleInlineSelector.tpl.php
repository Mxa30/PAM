<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:19:10
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\report/baseReportAssessmentCycleInlineSelector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:690560bb95eeb60504-77687164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d7bad37943f13a49868d9c6778b7195124e72f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\report/baseReportAssessmentCycleInlineSelector.tpl',
      1 => 1622902866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '690560bb95eeb60504-77687164',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- baseReportAssessmentCycleInlineSelector.tpl -->
<table border="0" cellspacing="0" cellpadding="1" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
">
    <tr>
        <td class="form-value">
            <?php echo TXT_UCF('SELECT_ASSESSMENT_CYCLE');?>
&nbsp;
            <select id="assessment_cycle" name="assessment_cycle"
                    onchange="if (this.selectedIndex != 0) submitInlineSafeForm('<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getSafeFormIdentifier();?>
', '<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getFormId();?>
')">
            <?php $_template = new Smarty_Internal_Template('components/selectIdValuesComponent.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('idValues',$_smarty_tpl->getVariable('interfaceObject')->value->getIdValues());$_template->assign('currentValue',$_smarty_tpl->getVariable('interfaceObject')->value->getCurrentId());$_template->assign('subject',TXT_LC('REPORT_PERIOD'));$_template->assign('required',false); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            </select>
            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getCancelLink();?>

        </td>
    </tr>
</table>
<!-- /baseReportAssessmentCycleInlineSelector.tpl -->