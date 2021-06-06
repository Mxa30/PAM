<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:16:18
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\components/scoreSelectComponent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2944760bb9542020781-77103110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2e4f1ef36769a583c23c0ea88454a00e69287e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\components/scoreSelectComponent.tpl',
      1 => 1622902862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2944760bb9542020781-77103110',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- scoreSelectComponent.tpl -->
    <?php if ($_smarty_tpl->getVariable('scaleType')->value==ScaleValue::SCALE_Y_N){?>
        <option value="<?php echo ScoreValue::SCORE_Y;?>
"><?php echo ScoreConverter::display(ScoreValue::SCORE_Y);?>
 - <?php echo NormConverter::description(NormValue::NORM_Y);?>
</option>
        <option value="<?php echo ScoreValue::SCORE_N;?>
"><?php echo ScoreConverter::display(ScoreValue::SCORE_N);?>
 - <?php echo NormConverter::description(NormValue::NORM_N);?>
</option>
    <?php }else{ ?>
        <option value="<?php echo ScoreValue::SCORE_1;?>
"><?php echo ScoreConverter::display(ScoreValue::SCORE_1);?>
 - <?php echo NormConverter::description(NormValue::NORM_1);?>
</option>
        <option value="<?php echo ScoreValue::SCORE_2;?>
"><?php echo ScoreConverter::display(ScoreValue::SCORE_2);?>
 - <?php echo NormConverter::description(NormValue::NORM_2);?>
</option>
        <option value="<?php echo ScoreValue::SCORE_3;?>
"><?php echo ScoreConverter::display(ScoreValue::SCORE_3);?>
 - <?php echo NormConverter::description(NormValue::NORM_3);?>
</option>
        <option value="<?php echo ScoreValue::SCORE_4;?>
"><?php echo ScoreConverter::display(ScoreValue::SCORE_4);?>
 - <?php echo NormConverter::description(NormValue::NORM_4);?>
</option>
        <option value="<?php echo ScoreValue::SCORE_5;?>
"><?php echo ScoreConverter::display(ScoreValue::SCORE_5);?>
 - <?php echo NormConverter::description(NormValue::NORM_5);?>
</option>
    <?php }?>
<!-- scoreSelectComponent.tpl -->
