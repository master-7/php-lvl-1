<?php
/* Smarty version 3.1.29, created on 2016-06-23 02:24:04
  from "E:\wamp64\templates\guestbook.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576b1e143fc550_06987211',
  'file_dependency' => 
  array (
    'cfbf57a8f6d5573b97fe8d4348956a26180eb321' => 
    array (
      0 => 'E:\\wamp64\\templates\\guestbook.html',
      1 => 1466637841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576b1e143fc550_06987211 ($_smarty_tpl) {
?>
<h2>Гостевая книга</h2>
<?php if ((isset($_smarty_tpl->tpl_vars['errors']->value))) {?>
  <b>Ошибка</b>
  <ul>
  <?php
$_from = $_smarty_tpl->tpl_vars['errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_error_0_saved_item = isset($_smarty_tpl->tpl_vars['error']) ? $_smarty_tpl->tpl_vars['error'] : false;
$_smarty_tpl->tpl_vars['error'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
$__foreach_error_0_saved_local_item = $_smarty_tpl->tpl_vars['error'];
?>
    <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
  <?php
$_smarty_tpl->tpl_vars['error'] = $__foreach_error_0_saved_local_item;
}
if ($__foreach_error_0_saved_item) {
$_smarty_tpl->tpl_vars['error'] = $__foreach_error_0_saved_item;
}
?>
  </ul>
  <hr>
<?php }?>
<ul>
  <?php
$_from = $_smarty_tpl->tpl_vars['messages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_message_1_saved_item = isset($_smarty_tpl->tpl_vars['message']) ? $_smarty_tpl->tpl_vars['message'] : false;
$_smarty_tpl->tpl_vars['message'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['message']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
$__foreach_message_1_saved_local_item = $_smarty_tpl->tpl_vars['message'];
?>
  <li>
    <?php echo $_smarty_tpl->tpl_vars['message']->value['user']['name'];?>
, <?php echo $_smarty_tpl->tpl_vars['message']->value['user']['email'];?>
, <?php echo $_smarty_tpl->tpl_vars['message']->value['time'];?>

    <hr>
    <?php echo $_smarty_tpl->tpl_vars['message']->value['text'];?>


  </li>
  <?php
$_smarty_tpl->tpl_vars['message'] = $__foreach_message_1_saved_local_item;
}
if ($__foreach_message_1_saved_item) {
$_smarty_tpl->tpl_vars['message'] = $__foreach_message_1_saved_item;
}
?>
</ul>
<hr>
<form action="" method="post">
  <textarea name="text" placeholder="Введите сообщение"></textarea>
  <input type="submit" name="save" value="Отправить">
</form>
<?php }
}
