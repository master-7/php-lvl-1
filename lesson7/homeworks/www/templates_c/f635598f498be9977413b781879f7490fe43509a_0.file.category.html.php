<?php
/* Smarty version 3.1.29, created on 2016-06-20 22:42:08
  from "E:\wamp64\templates\category.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576847105c5015_59187649',
  'file_dependency' => 
  array (
    'f635598f498be9977413b781879f7490fe43509a' => 
    array (
      0 => 'E:\\wamp64\\templates\\category.html',
      1 => 1466378844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576847105c5015_59187649 ($_smarty_tpl) {
?>
<li>
  <b><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</b>
  <?php if ($_smarty_tpl->tpl_vars['category']->value['children']) {?>
  <ul>
    <?php
$_from = $_smarty_tpl->tpl_vars['category']->value['children'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_child_0_saved_item = isset($_smarty_tpl->tpl_vars['child']) ? $_smarty_tpl->tpl_vars['child'] : false;
$_smarty_tpl->tpl_vars['child'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['child']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
$__foreach_child_0_saved_local_item = $_smarty_tpl->tpl_vars['child'];
?>
    <li><a href="?page=catalog&id=<?php echo $_smarty_tpl->tpl_vars['child']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
</a></li>
    <?php
$_smarty_tpl->tpl_vars['child'] = $__foreach_child_0_saved_local_item;
}
if ($__foreach_child_0_saved_item) {
$_smarty_tpl->tpl_vars['child'] = $__foreach_child_0_saved_item;
}
?>
  </ul>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['category']->value['goods']) {?>
  <ul>
    <?php
$_from = $_smarty_tpl->tpl_vars['category']->value['goods'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_good_1_saved_item = isset($_smarty_tpl->tpl_vars['good']) ? $_smarty_tpl->tpl_vars['good'] : false;
$_smarty_tpl->tpl_vars['good'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['good']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['good']->value) {
$_smarty_tpl->tpl_vars['good']->_loop = true;
$__foreach_good_1_saved_local_item = $_smarty_tpl->tpl_vars['good'];
?>
    <li><?php echo $_smarty_tpl->tpl_vars['good']->value->getName();?>
 (<?php echo $_smarty_tpl->tpl_vars['good']->value->getPrice();?>
$)</li>
    <?php
$_smarty_tpl->tpl_vars['good'] = $__foreach_good_1_saved_local_item;
}
if ($__foreach_good_1_saved_item) {
$_smarty_tpl->tpl_vars['good'] = $__foreach_good_1_saved_item;
}
?>
  </ul>
  <?php }?>

</li>
<?php }
}
