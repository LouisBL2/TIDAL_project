<?php
session_start(); //on commence une session
?>

<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Site complet moderne</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <section class="page">
    <!-- Barre de navigation -->
    <nav>
      <div class="buttons">
        <a class="aze"href="../html/index.html">Accueil</a>
        <a class="aze"href="../html/index.php">Pathologie</a>
        <a class="aze" href="../html/index.html">Contact</a>
      </div>

      <div class="buttons">
        <a class="aze" href="../php/login.php">J'ai déjà un compte</a>
        <a class="register" href="../php/login.php">S'inscrire</a>
      </div>
    </nav>  </section>
    <!-- Fin de la barre de navigation -->

    <!-- Header -->
    <header>
      <h1>Acupuncture : ses principes et ses bienfaits sur la santé</h1>
    </header>
    <!-- Fin du header -->

<section class="page"><h3>L'acupuncture fait partie des méthodes de soins de la médecine traditionnelle chinoise. Elle s'intéresse aux causes profondes des troubles de santé. Son champ d'action est large, du rhume à l'insomnie, en passant par la dépression, le stress et les troubles hormonaux.</h3></section>
  
  <!-- Pied de page -->
  <footer>
    <h5>Des questions ?  Contactez-nous !</h5>
    <div class="colonnes">
      <div class="colonne">
        <p>Louis Blanc<br>Louis.Blanc@cpe.fr</p>
      </div>
      <div class="colonne">
          <p>Clément Decorme<br>clement.decorme@cpe.fr</p>
      </div>
        <div class="colonne">
          <p>Loann Gounon<br>loann.gounon@cpe.fr</p>
      </div>
      <div class="colonne">
          <p>Khadidia Kasse<br>khadidia.kasse@cpe.fr</p>
      </div>
    </div>


    <div class="colonnes">
        <div class="colonne">
            <a class="eza" href="#">Les Pathologies</a>
        </div> 

      <div class="colonne">
        <a class="eza" href="#">S'inscrire</a>
    </div> 

      <div class="colonne">
        <a class="eza" href="../php/login.php">Se connecter</a>
    </div> 

      <div class="colonne">
          <a class="eza" href="../php/contact.html">Nous contacter</a>
      </div>
  
    </div>
    <p>CPE LYON, 2021</p>
  </footer>
  <!-- Fin du pied de page -->
</body>
</html>
