

<html>
  
</br></br></br></br></br></br>
<h2> TABLEAU DES SYMPTOMES EN FONCTION DES PATHOLOGIES </h2>
<h2> Recherche pour le mot {$keyword} </h2>
</br>

<form action="index.php?action=pathologie" method="post">

<input type="text" placeholder=" exemple : foie " name="keyword">
<input name="search" type="submit" value="Rechercher"/>
</form>
<table>

 <tr>
   {foreach $row as $field => $value}
   <th>{$field}</th> {/foreach} 
 </tr>

 
 

{foreach $data as $row}
<tr>
     {foreach $row as $name=>$value} 
 <td>{$value}</td>  {/foreach}  

</tr>


 {/foreach} 

</table>


<br>
</body>
</html>




