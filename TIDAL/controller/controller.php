<?php

session_start();
if(isset($_GET['deconnexion'])){ //si on se deconnecte
  if($_GET['deconnexion']==true){
    session_unset();
    header("location:index.php?action=login"); // redirige vers la page index
  }
}
                          
else if(isset($_SESSION['username']) && $_SESSION['username'] !== ""){ // GÉNÉRATION MUTUALISER DE L'HEADER AVEC OU SANS CONNEXION
  include("../V2/html/headerlogin.php");
} 

else {
  include("../V2/html/headerlogout.php");
}


require('/usr/local/lib/php/Smarty/smarty-3.1.39/libs/Smarty.class.php'); // APPEL DE LA LIBRAIRIE SMARTY

//##########################

//Affichage de la page index
function getindex(){
  $smarty = new Smarty;
  $smarty->display('../V2/html/index.html');
}


//*******************

function getfiltre(){
  $smarty = new Smarty;


ini_set("display_errors", 1); // INFORMATIONS DE CONNEXIONS À LA VM
$servername = "localhost";
$user = "postgre-web";
$pass = "web";
$dbname = "TRIDAL";
$cpt = "1";


try {  // CONNEXION À LA BASE DE DONNÉES GRÂCE AUX INFORMATIONS FOURNIES
    $conn = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

// CHEMINS POUR ACCÉDER AUX TEMPLATES ET AUX FICHIERS DE CONFIGURATION DE SMARTY
$smarty->setTemplateDir('/var/www/html/V2/smarty/templates');
$smarty->setCompileDir('/var/www/html/V2/smarty/templates_c');
$smarty->setCacheDir('/var/www/html/V2/smarty/cache');
$smarty->setConfigDir('/var/www/html/V2/smarty/configs');


$liste = array();


class SymptPatho {
    public $patho;
    public $sympt;


   public function __construct($sympts,$pathos){
    $this->patho = $pathos[0];
    $this->sympt = $sympts[0];
   } 

}

// AFFICHAGE DU RÉSULTAT DES REQUETES SQL SOUS FORME DE TABLEAU
for ($cpt=1; $cpt<= 113; $cpt++){
 $patho = $conn->query("SELECT * FROM `patho` WHERE idP = '$cpt'",PDO::FETCH_NAMED);
 $sympt = $conn->query("SELECT DISTINCT s.* FROM `patho` p INNER JOIN symptPatho sp ON sp.idP = p.idP INNER JOIN symptome s ON sp.idS = s.idS WHERE p.idP =  '$cpt'",PDO::FETCH_NAMED);
 $patho_row = $patho->fetchAll();
 $sympt_row = $sympt->fetchAll();
 if ( count($patho_row) >= 1 ){
     $Obj= new SymptPatho($sympt_row,$patho_row);
     array_push($liste, $Obj);
    }
 
 }

$con= new PDO('mysql:host=localhost;dbname=TRIDAL', "postgre-web", "web");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$smarty->assign("liste_obj",$liste);
 
// RÉCUPÉRATION DU MOT CLÉS RENTRÉ DANS LA BARRE DE RECHERCHE
  $taskOption = NULL;
if(isset($_POST['taskOption'])) {
$taskOption = $_POST['taskOption'];
}

$con= new PDO('mysql:host=localhost;dbname=TRIDAL', "postgre-web", "web");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



// RECHERCHE DU MOT CLÉS DANS LES TABLES SYMPTOMES ET PATHOLOGIES DE LA BASE DE DONNÉES
$query = 'SELECT DISTINCT p.desc FROM `symptome` s INNER JOIN symptPatho sp ON sp.idS = s.idS INNER JOIN patho p ON sp.idP = p.idP WHERE s.idS = "'.$taskOption.'" ';

// AFFICHAGE DU RÉSULTAT DE LA REQUETE
$result = $con->query($query);
$row = $result->fetch(PDO::FETCH_ASSOC);


$data = $con->query($query);
$data->setFetchMode(PDO::FETCH_ASSOC);


$smarty->assign("taskOption",$taskOption);
$smarty->assign("row",$row);
$smarty->assign("data",$data);

$smarty->display('filtre2.tpl');

}

//*********************





// Affichage de la page pathologie
function getpathologie(){
  $smarty = new Smarty;
  error_reporting(E_ALL);
ini_set("display_errors", 1);
$servername = "localhost";
$user = "postgre-web";
$pass = "web";
$dbname = "TRIDAL";
$cpt = "1";


try {
    $conn = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$smarty->setTemplateDir('/var/www/html/V2/smarty/templates');
$smarty->setCompileDir('/var/www/html/V2/smarty/templates_c');
$smarty->setCacheDir('/var/www/html/V2/smarty/cache');
$smarty->setConfigDir('/var/www/html/V2/smarty/configs');

$liste = array();

class SymptPatho {
    public $patho;
    public $sympt;

   public function __construct($sympts,$pathos){
    $this->patho = $pathos[0];
    $this->sympt = $sympts[0];
   } 
}

for ($cpt=1; $cpt<= 113; $cpt++){
 $patho = $conn->query("SELECT * FROM `patho` WHERE idP = '$cpt'",PDO::FETCH_NAMED);
 $sympt = $conn->query("SELECT DISTINCT s.* FROM `patho` p INNER JOIN symptPatho sp ON sp.idP = p.idP INNER JOIN symptome s ON sp.idS = s.idS WHERE p.idP =  '$cpt'",PDO::FETCH_NAMED);
 $patho_row = $patho->fetchAll();
 $sympt_row = $sympt->fetchAll();
 if ( count($patho_row) >= 1 ){
     $Obj= new SymptPatho($sympt_row,$patho_row);
     array_push($liste, $Obj);
    }
 }

$smarty->assign("liste_obj",$liste);
$smarty->display('symptomes.tpl');

}




/////////////////////////////////////////////////////////////////////

function getpathologie_logout(){
  $smarty = new Smarty;
  $keyword = "";

$smarty->setTemplateDir('/var/www/html/V2/smarty/templates');
$smarty->setCompileDir('/var/www/html/V2/smarty/templates_c');
$smarty->setCacheDir('/var/www/html/V2/smarty/cache');
$smarty->setConfigDir('/var/www/html/V2/smarty/configs');


if(isset($_POST['keyword'])) {
$keyword = $_POST['keyword'];
}

$con= new PDO('mysql:host=localhost;dbname=TRIDAL', "postgre-web", "web");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




$query = 'SELECT S.desc AS symptome, P.desc AS pathologie FROM `keywords` AS KW JOIN keySympt AS KS on KW.idK = KS.idK JOIN symptome AS S on KS.idS = S.idS JOIN symptPatho AS SP on S.idS = SP.idS JOIN patho AS P on SP.idP = P.idP WHERE KW.name LIKE "%'.$keyword.'%" ';



$result = $con->query($query);
$row = $result->fetch(PDO::FETCH_ASSOC);


$data = $con->query($query);
$data->setFetchMode(PDO::FETCH_ASSOC);


$smarty->assign("keyword",$keyword);
$smarty->assign("row",$row);
$smarty->assign("data",$data);



$smarty->display('keyword.tpl');
}


///////////////////////////////////////////////////////////

// Affichage de la page contact
function getcontact(){
  $smarty = new Smarty;
  $smarty->display('../V2/html/contact.html');
}

// Affichage de la page login
function getlogin(){
  $smarty = new Smarty;
  $smarty->display('../V2/html/login.php');
}

// Affichage de la page signin
function getsignin(){
  $smarty = new Smarty;
  $smarty->display('../V2/html/signin.html');
}

// Affichage de la page erreur
function geterreur(){
  $smarty = new Smarty;
  echo "<br><br><<br><br><p style='color:red;text-align: center'>Utilisateur ou mot de passe incorrect</p>";
  $smarty->display('../V2/html/login.php');

}

// Affichage de la page footer
function footer(){
	include("../V2/html/footer.html");}
?>

