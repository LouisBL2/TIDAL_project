<?php

$servername = "localhost";          // definition des variables pour la connexion 
$user = "postgre-web";
$pass = "web";
$dbname = "TRIDAL";
$cpt = "1";

$id = isset($_GET['id']) ? $_GET['id'] : NULL;      

header('Content-Type: application/json');


try {
    $connexion = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass); // connexion a la base de donnée
    $retour["success"] = true;
    $retour["message"] = "Connexion à la base de données réussie";
}
catch(Exception $ex) {
    $retour["success"] = false;
    $retour["message"] = "Erreur de connexion à la base de données";
}

if($id!=null){

    $request = $connexion->prepare("SELECT * FROM `patho` WHERE idP = '$id'"); // requete qui change en fontion de la valeur id saisi dans l'url
} else {

    $request = $connexion->prepare("SELECT * FROM `patho`");

}



$request->execute();

$resultat = $request->fetchAll();

$retour["message"] = "Voici les pathologies";
$retour["resultats"]= $resultat;

echo json_encode($retour);  // on affiche le résultat sous forme json

?>