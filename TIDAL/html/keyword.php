
// RECHERCHE PAR MOT CLES
<form action="filtre.php" method="post">

<input type="text" placeholder=" exemple : foie " name="filtre">
<input name="search" type="submit" value="Search"/>
</form>
<p>


<?php
$filtre = "";




if(isset($_POST['filtre'])) {
$filtre = $_POST['filtre'];
}



try {
$con= new PDO('mysql:host=localhost;dbname=TRIDAL', "postgre-web", "web"); //CONNEXION A LA BD
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// REQUETE SQL QUI AFFICHE LES PATOLOGIES/SYMPTOMES EN FONCTION DU MOT CLES
$query = 'SELECT S.desc AS symptome, P.desc AS pathologie FROM `keywords` AS KW JOIN keySympt AS KS on KW.idK = KS.idK JOIN symptome AS S on KS.idS = S.idS JOIN symptPatho AS SP on S.idS = SP.idS JOIN patho AS P on SP.idP = P.idP WHERE KW.name LIKE "%'.$filtre.'%" ';


echo "Recherche pour le mot $filtre";

print "<table>";
$result = $con->query($query);


$row = $result->fetch(PDO::FETCH_ASSOC); // AFFICHE LA LISTE DEROULANTE EN FONCTION DE LA BD
print " <tr>";				
foreach ($row as $field => $value){
print " <th>$field</th>";
}

print " </tr>";

$data = $con->query($query);
$data->setFetchMode(PDO::FETCH_ASSOC);
foreach($data as $row){		// AFFICHE TOUS LES RESULTATS
print " <tr>";
foreach ($row as $name=>$value){
print " <td>$value</td>";
}
print " </tr>";
}
print "</table>";
} catch(PDOException $e) { //EN CAS D'EXCEPTION = ERREUR
echo 'ERROR: ' . $e->getMessage();
}

?>
</p>
</body>
</html>

