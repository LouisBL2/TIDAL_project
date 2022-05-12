<?php
/* Smarty version 3.1.39, created on 2021-11-11 15:03:13
  from '/var/www/html/V2/smarty/templates/keyword.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618d22a1614247_78863106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15c1bb10efff6713e7e014153e1550f1ec007190' => 
    array (
      0 => '/var/www/html/V2/smarty/templates/keyword.tpl',
      1 => 1636639391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618d22a1614247_78863106 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
  
</br></br></br></br></br></br>
<h2> TABLEAU DES SYMPTOMES EN FONCTION DES PATHOLOGIES </h2>
<h2> Recherche pour le mot <?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
 </h2>
</br>

<form action="index.php?action=pathologie" method="post">

<input type="text" placeholder=" exemple : foie " name="keyword">
<input name="search" type="submit" value="Rechercher"/>
</form>
<table>

 <tr>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'value', false, 'field');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
   <th><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</th> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
 </tr>

 
 

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
<tr>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?> 
 <td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  

</tr>


 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 

</table>


<br>
</body>
</html>




<?php }
}
