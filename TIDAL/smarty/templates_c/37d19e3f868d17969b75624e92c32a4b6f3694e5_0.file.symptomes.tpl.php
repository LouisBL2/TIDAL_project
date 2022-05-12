<?php
/* Smarty version 3.1.39, created on 2021-11-11 10:56:19
  from '/var/www/html/V2/smarty/templates/symptomes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618ce8c3cea4c5_11172736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37d19e3f868d17969b75624e92c32a4b6f3694e5' => 
    array (
      0 => '/var/www/html/V2/smarty/templates/symptomes.tpl',
      1 => 1636621870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618ce8c3cea4c5_11172736 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
  <head>
    <title>Smarty</title>	  
    <link rel="stylesheet" type="text/css" href="../../css/style.css" />
</head>
  <body>

</br>
<h2> TABLEAU DES SYMPTOMES EN FONCTION DES PATHOLOGIES </h2>
</br>


<table>

 <tr>
   <th> <b> Pathologies </b> </th>
   <th> <b> Symptomes </b> </th>
 </tr>


<tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste_obj']->value, 'liste_objs');
$_smarty_tpl->tpl_vars['liste_objs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['liste_objs']->value) {
$_smarty_tpl->tpl_vars['liste_objs']->do_else = false;
?>  
 <td><?php echo $_smarty_tpl->tpl_vars['liste_objs']->value->patho['desc'];?>
</td> 
 <td><?php echo $_smarty_tpl->tpl_vars['liste_objs']->value->sympt['desc'];?>
</td>
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
