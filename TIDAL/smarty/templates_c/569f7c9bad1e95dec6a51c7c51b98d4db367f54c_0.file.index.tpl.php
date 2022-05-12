<?php
/* Smarty version 3.1.39, created on 2021-10-03 14:19:05
  from '/var/www/html/smarty/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61599fb991cdd7_86932094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '569f7c9bad1e95dec6a51c7c51b98d4db367f54c' => 
    array (
      0 => '/var/www/html/smarty/templates/index.tpl',
      1 => 1633263543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61599fb991cdd7_86932094 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <title>Smarty</title>
  </head>
  <body>
    Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!
    yo <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

    
  </body>
</html>
<?php }
}
