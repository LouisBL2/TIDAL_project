<?php
/* Smarty version 3.1.39, created on 2021-11-20 16:04:03
  from '/var/www/html/V2/smarty/templates/filtre2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61990e6319db21_04143926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56742ef572ad8347ae651c38fdf5ca79fbe72cca' => 
    array (
      0 => '/var/www/html/V2/smarty/templates/filtre2.tpl',
      1 => 1637420638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61990e6319db21_04143926 (Smarty_Internal_Template $_smarty_tpl) {
?>  <html>
</br></br></br></br></br></br>
<h2> RECHERCHE DE PATHOLOGIE EN FONCTION DES SYMPTOMES  </h2>
</br>


<table>

<div class="form-group col-md-4">
<form action="index.php?action=symptome" method="post" >
<p>


<select class="form-control" id="sortSearch" name="taskOption" >

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste_obj']->value, 'liste_objs');
$_smarty_tpl->tpl_vars['liste_objs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['liste_objs']->value) {
$_smarty_tpl->tpl_vars['liste_objs']->do_else = false;
?>  
	<option value="<?php echo $_smarty_tpl->tpl_vars['liste_objs']->value->sympt['idS'];?>
"><?php echo $_smarty_tpl->tpl_vars['liste_objs']->value->sympt['desc'];?>
</option>
		  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 

</select></p>
<p><input type="submit" value="Envoyer" /></p>
</form>



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



</div>
</table>


<br>
</body>
</html>


<?php }
}
