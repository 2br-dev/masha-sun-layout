<?php
/* Smarty version 3.1.39, created on 2021-10-29 09:58:12
  from 'C:\!Genesys_archives\Masha_sun\6-08-2021_Layout\!Layout\release\manager\templates\default\resource\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617b9b84c0fa36_39458437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '215dbe7dc7648264d84d070263e71dfd91e48b5a' => 
    array (
      0 => 'C:\\!Genesys_archives\\Masha_sun\\6-08-2021_Layout\\!Layout\\release\\manager\\templates\\default\\resource\\update.tpl',
      1 => 1622181878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617b9b84c0fa36_39458437 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modx-panel-resource-div"></div>
<div id="modx-resource-tvs-div"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hidden']->value, 'tv', false, NULL, 'tv', array (
));
$_smarty_tpl->tpl_vars['tv']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tv']->value) {
$_smarty_tpl->tpl_vars['tv']->do_else = false;
?>
    <input type="hidden" id="tvdef<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->default_text, ENT_QUOTES, 'UTF-8', true);?>
" />
    <?php echo $_smarty_tpl->tpl_vars['tv']->value->get('formElement');?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }
}
}
