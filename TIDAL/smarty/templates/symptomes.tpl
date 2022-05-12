

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
    {foreach $liste_obj as $liste_objs}  
 <td>{$liste_objs->patho.desc}</td> 
 <td>{$liste_objs->sympt.desc}</td>
</tr>
{/foreach} 

</table>


<br>
</body>
</html>
