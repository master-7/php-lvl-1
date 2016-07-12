<?php
/* Smarty version 3.1.29, created on 2016-07-12 18:18:27
  from "C:\OpenServer\domains\PHP1\lesson7\homeworks\templates\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5784fc33aad513_52988335',
  'file_dependency' => 
  array (
    '2e99bd612d3c32fce2a4a8d7174a0239cfa3c0e2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP1\\lesson7\\homeworks\\templates\\index.html',
      1 => 1466448720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5784fc33aad513_52988335 ($_smarty_tpl) {
?>
<html>
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  </head>
  <body>
    <?php if ($_smarty_tpl->tpl_vars['logged']->value == false) {?>
    <div>
      <form action="/?action=login" method="POST">
        <input type="text" name="username" placeholder="Логин">
        <input type="text" name="password" placeholder="Пароль">
        <input type="submit">
      </form>
    </div>
    <?php } else { ?>
    Привет, <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 <a href="/?action=logout">Выйти</a>
    <?php }?>
    <nav>
      <ul>
      <?php
$_from = $_smarty_tpl->tpl_vars['menu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
      <?php if ($_smarty_tpl->tpl_vars['currentPage']->value == $_smarty_tpl->tpl_vars['item']->value['url']) {?>
        <li><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</li>
      <?php } else { ?>
        <li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
      <?php }?>
      <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
    </ul>
    </nav>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

  </body>
</html>
<?php }
}
