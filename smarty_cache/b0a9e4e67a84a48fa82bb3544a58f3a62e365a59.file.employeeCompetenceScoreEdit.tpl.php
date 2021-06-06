<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:23:59
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/competence/employeeCompetenceScoreEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2606360bb970f19d820-56312447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0a9e4e67a84a48fa82bb3544a58f3a62e365a59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/competence/employeeCompetenceScoreEdit.tpl',
      1 => 1622902863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2606360bb970f19d820-56312447',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeCompetenceScoreEdit.tpl -->
<?php $_smarty_tpl->tpl_vars['competenceValueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getCompetenceValueObject(), null, null);?>
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<?php $_smarty_tpl->tpl_vars['competenceId'] = new Smarty_variable($_smarty_tpl->getVariable('competenceValueObject')->value->competenceId, null, null);?>
<?php $_smarty_tpl->tpl_vars['keepAliveCallback'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getKeepAliveCallback(), null, null);?>
<tr id="edit_competence_row_<?php echo $_smarty_tpl->getVariable('competenceId')->value;?>
" class="<?php if ($_smarty_tpl->getVariable('competenceValueObject')->value->competenceIsMain){?> main_competence<?php }?>" onmouseover="activateThisRow(this);" onmouseout="deactivateThisRow(this);">
    <td id="edit_<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDetailLinkId();?>
"
        class="form-label clickable
                <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->hasClusterMainCompetence()){?>
                    <?php if ($_smarty_tpl->getVariable('competenceValueObject')->value->competenceIsMain){?> main_competence<?php }else{ ?> sub_competence<?php }?>
                <?php }?>"
        style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getCompetenceWidth();?>
;"
        onClick="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDetailOnClick();?>
;return false;">
        <span width="40px"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getIsKeySymbol();?>
</span>
        <span>
            <?php echo $_smarty_tpl->getVariable('competenceValueObject')->value->getCompetenceName();?>

        </span><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getSymbolIsAdditionalCompetence();?>

        <span class="activeRow icon-style"><img src="<?php echo constant('ICON_INFO');?>
" title="<?php echo TXT_UCF('SHOW_DETAILS');?>
"></span>
    </td>
    <td class="form-value" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getScoreWidth();?>
;">
        <?php $_template = new Smarty_Internal_Template('components/scoreEditComponent.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('scaleType',$_smarty_tpl->getVariable('competenceValueObject')->value->getCompetenceScaleType());$_template->assign('inputName',$_smarty_tpl->getVariable('interfaceObject')->value->getScoreInputName());$_template->assign('isEmptyAllowed',$_smarty_tpl->getVariable('competenceValueObject')->value->getCompetenceIsOptional());$_template->assign('keepAliveCallback',$_smarty_tpl->getVariable('keepAliveCallback')->value);$_template->assign('score',$_smarty_tpl->getVariable('valueObject')->value->getScore()); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showNorm()){?>
        <span class="display_norm" style="font-style:italic;">&nbsp;&nbsp;&nbsp;<?php echo TXT_LC('NORM');?>
: <?php echo NormConverter::input($_smarty_tpl->getVariable('competenceValueObject')->value->competenceFunctionNorm);?>
</span>
        <?php }?>
    </td>
    <td class="form-value actions" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getActionsWidth();?>
;">
        <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showRemarks()){?>
        <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getToggleNoteVisibilityLink();?>

        <?php }?>
    </td>
</tr>
<tr id="edit_detail_row_<?php echo $_smarty_tpl->getVariable('competenceId')->value;?>
" class="hidden-info">
    <td colspan="100%" id="edit_detail_content_<?php echo $_smarty_tpl->getVariable('competenceId')->value;?>
" style="padding-left: 10px;"></td>
</tr>
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showRemarks()){?>
<?php if (!empty($_smarty_tpl->getVariable('keepAliveCallback',null,true,false)->value)){?>
<?php $_smarty_tpl->tpl_vars['onFocusFunction'] = new Smarty_variable((('onFocus="').($_smarty_tpl->getVariable('keepAliveCallback')->value)).(';return false;"'), null, null);?>
<?php $_smarty_tpl->tpl_vars['onBlurFunction'] = new Smarty_variable((('onBlur="').($_smarty_tpl->getVariable('keepAliveCallback')->value)).(';return false;"'), null, null);?>
<?php }?>
<tr id="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getToggleNoteId($_smarty_tpl->getVariable('competenceValueObject')->value->getCompetenceId());?>
" class="comment-row" <?php if (!$_smarty_tpl->getVariable('interfaceObject')->value->isInitialVisibleNotes()){?>style="display:none;"<?php }?>>
    <td class="form_value" colspan="100%" style="padding-left:69px;">
        <textarea id="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getNoteInputName();?>
"  name="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getNoteInputName();?>
"  style="height:100px; width:690px" <?php echo $_smarty_tpl->getVariable('onFocusFunction')->value;?>
 <?php echo $_smarty_tpl->getVariable('onBlurFunction')->value;?>
><?php echo $_smarty_tpl->getVariable('valueObject')->value->getNote();?>
</textarea>
    </td>
</tr>
<?php }?>
<tr>
    <td colspan="100%" >&nbsp;</td>
</tr>
<!-- /employeeCompetenceScoreEdit.tpl -->