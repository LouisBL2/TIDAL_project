  <html>
</br></br></br></br></br></br>
<h2> RECHERCHE DE PATHOLOGIE EN FONCTION DES SYMPTOMES  </h2>
</br>


<table>

<div class="form-group col-md-4">
<form action="index.php?action=symptome" method="post" >
<p>


<select class="form-control" id="sortSearch" name="taskOption" >

	{foreach $liste_obj as $liste_objs}  
	<option value="{$liste_objs->sympt.idS}">{$liste_objs->sympt.desc}</option>
		  {/foreach} 

</select></p>
<p><input type="submit" value="Envoyer" /></p>
</form>



{foreach $data as $row}
<tr>
     {foreach $row as $name=>$value} 
 <td>{$value}</td>  {/foreach}  

</tr>


 {/foreach} 



</div>
</table>


<br>
</body>
</html>


