<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:16:59
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/application/interface/templates\components/select/selectDocumentCluster.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2231460bb956b47a161-90095341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e24225164a9596d77469d35a398968c2938a247' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/application/interface/templates\\components/select/selectDocumentCluster.tpl',
      1 => 1622902845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2231460bb956b47a161-90095341',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php if (count($_smarty_tpl->getVariable('clusters')->value)==0){?>
    <?php echo TXT_UCF('NO_ATTACHMENT_CLUSTERS_AVAILABLE');?>

<?php }else{ ?>
    <select name="<?php echo $_smarty_tpl->getVariable('select_field_cluster')->value;?>
" id="<?php echo $_smarty_tpl->getVariable('select_field_cluster')->value;?>
" >
        <option value="">- <?php echo TXT_UCF('SELECT');?>
 -</option>
        <?php  $_smarty_tpl->tpl_vars['cluster'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('clusters')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cluster']->key => $_smarty_tpl->tpl_vars['cluster']->value){
?>
            <?php if ($_smarty_tpl->getVariable('selected_cluster_id')->value==$_smarty_tpl->tpl_vars['cluster']->value['ID_DC']){?>
                <?php $_smarty_tpl->tpl_vars["selected"] = new Smarty_variable(' selected', null, null);?>
            <?php }else{ ?>
                <?php $_smarty_tpl->tpl_vars["selected"] = new Smarty_variable('', null, null);?>
            <?php }?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['cluster']->value['ID_DC'];?>
" <?php echo $_smarty_tpl->getVariable('selected')->value;?>
><?php echo $_smarty_tpl->tpl_vars['cluster']->value['document_cluster'];?>
</option>
        <?php }} ?>
    </select>
<?php }?>