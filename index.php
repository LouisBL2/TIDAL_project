<?php

//session_start();

require_once('./controller/controller.php'); // LIER L'INDEX AVEC LE CONTROLEUR

$action = isset($_GET['action']) ? $_GET['action'] : NULL;

$erreur = isset($_GET['erreur']) ? $_GET['erreur'] : NULL;

// EN FONCTION DES DIFFERENTES ACTIONS, DECLENCHER DES FONCTIONS QUI OUVRENT DES PAGES

if($action=="pathologie"){

	if($_SESSION){  // SI ON EST CONNECTE, ON OUVRE LA PAGE PATHOLOGIE QUI CONTIENT LA RECHERCHE DES MOTS CLES
    		getpathologie_logout();
    	}
    	
    	else{  //SINON, OUVRIR JUSTE LA LISTE STANDARD DES PATHOLOGIES
 		getpathologie();
    	}
}

elseif($action=="symptome"){ // AFFICHER LA PAGE SYMPTOMES SI ON EST CONNECTE

	if($_SESSION){
    		getfiltre();
    	}
    	
    	else{ // SINON AFFICHER LA PAGE LOGIN
 		getlogin();
    	}
    
}

elseif($action=="contact"){  // CONTACT
    getcontact();
}

elseif($action=="login"){  // LOGIN
    getlogin();
}

elseif($action=="signup"){  // CONNEXION
    getsignup();
}

elseif($action=="logout"){  // DÉCONNEXION
    getlogout();
}
   
elseif($erreur=="1"){  //GÉNÉRATION D'UNE ERREUR QUAND IL S'AGIT D'UN MAUVAIS MOT DE PASSE
    geterreur();
} 
   	
else{
    getindex();
}   

footer() // appel de la fonction footer sur chaque page

?>
