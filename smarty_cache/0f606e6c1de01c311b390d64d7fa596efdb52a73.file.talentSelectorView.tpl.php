<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:16:17
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\report/talentSelectorView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1155360bb9541ea8702-82041269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f606e6c1de01c311b390d64d7fa596efdb52a73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\report/talentSelectorView.tpl',
      1 => 1622902867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1155360bb9541ea8702-82041269',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- talentSelectorView.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<tr>
    <td class="bottom_line">
        <input type="checkbox" name="competence_name_<?php echo $_smarty_tpl->getVariable('valueObject')->value->getCompetenceId();?>
" value="<?php echo $_smarty_tpl->getVariable('valueObject')->value->getCompetenceName();?>
"/>
    </td>
    <td class="bottom_line">
        <?php echo $_smarty_tpl->getVariable('valueObject')->value->getCompetenceName();?>

    </td>
    <td class="bottom_line">
        <?php echo ScaleConverter::display($_smarty_tpl->getVariable('valueObject')->value->getCompetenceScaleType());?>

    </td>
    <td class="bottom_line">
        <select name="operator_<?php echo $_smarty_tpl->getVariable('valueObject')->value->getCompetenceId();?>
" style="width:40px">
            <?php $_template = new Smarty_Internal_Template('components/selectOptionsComponent.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('values',OperatorValue::values($_smarty_tpl->getVariable('valueObject')->value->competenceScaleType));$_template->assign('required',true);$_template->assign('converter','OperatorConverter'); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        </select>
    </td>
    <td class="bottom_line">
        <select name="score_<?php echo $_smarty_tpl->getVariable('valueObject')->value->getCompetenceId();?>
" style="width:90px">
        <?php $_template = new Smarty_Internal_Template('components/scoreSelectComponent.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('scaleType',$_smarty_tpl->getVariable('valueObject')->value->competenceScaleType); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        </select>
    </td>
</tr>
<!-- /talentSelectorView.tpl -->