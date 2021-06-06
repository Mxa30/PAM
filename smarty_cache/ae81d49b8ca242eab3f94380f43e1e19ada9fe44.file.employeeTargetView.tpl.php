<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:25:59
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/target/employeeTargetView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:713160bb97879e0745-09169822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae81d49b8ca242eab3f94380f43e1e19ada9fe44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/target/employeeTargetView.tpl',
      1 => 1622902864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '713160bb97879e0745-09169822',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeTargetView.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<?php $_smarty_tpl->tpl_vars['endDate'] = new Smarty_variable($_smarty_tpl->getVariable('valueObject')->value->getEndDate(), null, null);?>
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->hiliteRow()){?>
    <?php $_smarty_tpl->tpl_vars['new_row_indicator'] = new Smarty_variable('short_hilite', null, null);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['new_row_indicator'] = new Smarty_variable('', null, null);?>
<?php }?>
<tr class="<?php echo $_smarty_tpl->getVariable('new_row_indicator')->value;?>
 row_employee_target" id="target_row_<?php echo $_smarty_tpl->getVariable('valueObject')->value->getId();?>
">
    <td class="">
        <?php echo $_smarty_tpl->getVariable('valueObject')->value->getTargetName();?>

    </td>
    <td class="">
        <?php echo $_smarty_tpl->getVariable('valueObject')->value->getPerformanceIndicator();?>

    </td>
    <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isViewAllowedEvaluation()){?>
        <td class="" id="target_status_inline_<?php echo $_smarty_tpl->getVariable('valueObject')->value->getId();?>
">
            <?php echo EmployeeTargetStatusConverter::image($_smarty_tpl->getVariable('valueObject')->value->getStatus());?>
&nbsp;<?php echo EmployeeTargetStatusConverter::display($_smarty_tpl->getVariable('valueObject')->value->getStatus());?>

        </td>
    <?php }?>
    <td class="<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->hasDateWarning()){?>warning-text<?php }?>">
        <?php echo DateConverter::display($_smarty_tpl->getVariable('valueObject')->value->getEvaluationDate());?>

    </td>
    <td class="actions">
        <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEditLink();?>
<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRemoveLink();?>
<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getHistoryLink();?>

    </td>
</tr>
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isViewAllowedEvaluation()){?>
<?php $_smarty_tpl->tpl_vars['evaluationDate'] = new Smarty_variable($_smarty_tpl->getVariable('valueObject')->value->getEvaluationDate(), null, null);?>
<?php $_smarty_tpl->tpl_vars['evaluation'] = new Smarty_variable($_smarty_tpl->getVariable('valueObject')->value->getEvaluation(), null, null);?>
<?php if (!empty($_smarty_tpl->getVariable('evaluationDate',null,true,false)->value)||!empty($_smarty_tpl->getVariable('evaluation',null,true,false)->value)){?>
    <tr>
        <td class="">
            &nbsp;
        </td>
        <td colspan="4" style="padding-left:0px; padding-right:0px;">
            <div class="remarks-content" style=" padding:10px;">

                <?php if (!empty($_smarty_tpl->getVariable('evaluationDate',null,true,false)->value)){?>
                <strong><?php echo TXT_LC('CONVERSATION_DATE');?>
</strong>
                <br />
                <span class="comment">
                    <?php echo DateConverter::display($_smarty_tpl->getVariable('evaluationDate')->value);?>

                </span>
                <br />
                <?php if (!empty($_smarty_tpl->getVariable('evaluation',null,true,false)->value)){?>
                <br />
                <?php }?>
                <?php }?>
                <?php if (!empty($_smarty_tpl->getVariable('evaluation',null,true,false)->value)){?>
                <strong><?php echo TXT_LC('EVALUATION');?>
</strong>
                <br />
                <span class="comment">
                    <?php echo nl2br($_smarty_tpl->getVariable('evaluation')->value);?>

                </span>
                <?php }?>
            </div>
        </td>
        <td class="">
            &nbsp;
        </td>
    </tr>
<?php }?>
<tr>
    <td colspan="100%" class="bottom_line"></td>
</tr>
<?php }?>
<!-- /employeeTargetView.tpl -->