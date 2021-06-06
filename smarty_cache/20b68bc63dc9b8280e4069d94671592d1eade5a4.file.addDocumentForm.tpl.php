<?php /* Smarty version Smarty-3.0.7, created on 2021-06-05 17:16:59
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\to_refactor/file_upload/addDocumentForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:616560bb956b3ad3a0-89805675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20b68bc63dc9b8280e4069d94671592d1eade5a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\to_refactor/file_upload/addDocumentForm.tpl',
      1 => 1622902868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '616560bb956b3ad3a0-89805675',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<!-- addDocumentForm.tpl -->
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Upload File</title>
        <script type="text/javascript" src="js/mod_organisation.js"></script>
        <script type="text/javascript" src="js/mod_employees.js"></script>
        <script type="text/javascript" src="js/select_employees.js"></script>

        <?php echo $_smarty_tpl->getVariable('xajaxJavascript')->value;?>

        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/<?php echo $_smarty_tpl->getVariable('theme')->value;?>
.css" rel="stylesheet" type="text/css" />
        <link href="css/mod_organisation.css" rel="stylesheet" type="text/css" />
        <link href="css/dialogs.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <div style="padding: 10px;">
            <?php echo TXT_UCF('MAX_FILESIZE');?>
 = <?php echo $_smarty_tpl->getVariable('max_size_label')->value;?>
.<br/>
            <?php echo TXT_UCF('ALLOWED_EXTENSIONS');?>
</b> <?php echo $_smarty_tpl->getVariable('extensions')->value;?>
<br />

            <?php if ($_smarty_tpl->getVariable('upload_error_string')->value){?>
            <div class="error" style="padding:5px">
                <p><?php echo $_smarty_tpl->getVariable('upload_error_string')->value;?>
</p>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('upload_ok_string')->value){?>
            <div class="success" style="padding:5px">
                <p><?php echo $_smarty_tpl->getVariable('upload_ok_string')->value;?>
</p>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('info')->value){?>
            <div class="info" style="padding:5px">
                <blockquote><?php echo nl2br($_smarty_tpl->getVariable('info')->value);?>
</blockquote>
            </div>
            <?php }?>
            <form id="attachmentBatchForm" name="attachmentBatchForm" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>
">
                <?php echo $_smarty_tpl->getVariable('formToken')->value;?>

                <?php echo $_smarty_tpl->getVariable('formIdentifier')->value;?>

                <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $_smarty_tpl->getVariable('max_size')->value;?>
"/><br/>
                <table width="620" border="0" cellspacing="2" cellpadding="2">
                    <tr>
                        <td style="width:150px; vertical-align:bottom; padding-bottom:5px;"><?php echo TXT_UCF('BROWSE_FILE');?>
 <?php echo constant('REQUIRED_FIELD_INDICATOR');?>
</td>
                        <td style="vertical-align:bottom; padding-bottom:5px;">
                            <input type="file" name="upload" style="height: 21px;" value="<?php echo $_smarty_tpl->getVariable('val_upload')->value;?>
">
                        </td>
                    </tr>
                    <tr>
                       <td><?php echo TXT_UCF('CLUSTER');?>
</td>
                       <td><?php $_template = new Smarty_Internal_Template('components/select/selectDocumentCluster.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?></td>
                    </tr>
                    <tr>
                       <td><?php echo TXT_UCF('ACCESS');?>
</td>
                       <td><?php $_template = new Smarty_Internal_Template('components/select/selectDocumentAuthorisation.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?></td>
                    </tr>
                    <tr>
                        <td><?php echo TXT_UCF('DESCRIPTION');?>
</td>
                        <td><textarea name="description" cols="60" rows="3"><?php echo $_smarty_tpl->getVariable('val_description')->value;?>
</textarea></td>
                    </tr>
                    <tr>
                        <td><?php echo TXT_UCF('REMARKS');?>
</td>
                        <td><textarea name="remarks" cols="60" rows="3" ><?php echo $_smarty_tpl->getVariable('val_remarks')->value;?>
</textarea></td>
                    </tr>
                </table>
                <?php if ($_smarty_tpl->getVariable('showSelectEmployees')->value){?>
                    <p><?php echo TXT_UCW('SELECT');?>
 <?php echo TXT_UCW('EMPLOYEES');?>
 <?php echo constant('REQUIRED_FIELD_INDICATOR');?>
</p>
                    <?php $_template = new Smarty_Internal_Template('components/select/selectEmployees.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                <?php }?>
                <input type="submit" name="submitButton" value="<?php echo TXT_BTN('UPLOAD');?>
" class="btn btn_width_80"/>
            </form>

        </div>
    </body>
<!-- /addDocumentForm.tpl -->
</html>