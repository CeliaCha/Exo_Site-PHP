<?php
include 'UTILS/elements.php';
//La Database est initialisée dans index.php

// Affichage page initiale :
echo "<h2>Ajout références</h2>";
echo $formulaire_add_article;
echo $formulaire_add_client;
echo $formulaire_add_vendeur;
echo "<hr/></br>";
echo "<h2>Ajout commandes</h2>";
echo $formulaire_add_commande_debut;
displayOptionClients();
echo $formulaire_add_commande_fin;

// Exécution de l'app :
if (!empty($_POST)) {

  // Requêtes d'ajout de références :
  if ((!empty($_POST['add-article']))) {
    addArticle($_POST['nom-article'], $_POST['prix-article'], $_POST['id-vendeur']);
  }
  else if ((!empty($_POST['add-client']))) {
    addClient($_POST['nom-client'], $_POST['prenom-client']);
  }
  else if ((!empty($_POST['add-vendeur']))) {
    addVendeur($_POST['nom-vendeur'], $_POST['prenom-vendeur']);
  }

  // Affichage formulaire de commande
  else if (!empty($_POST['add-commande'])) {

    addCommande($_POST['date-commande'], getClientID($_POST['nom-client']));
    var_dump(getLastCommande());
    $_SESSION['id-newcommande'] = getLastCommande();

    // affiche formulaire choix article
    echo $formulaire_add_commandearticle_debut;
    displayOptionArticles();
    echo $formulaire_add_commandearticle_fin;


  }

  else if (!empty($_POST['add-commandearticle'])) {
    addCommandeArticle($_POST['nom-article'], $_POST['quantite-article']);
    var_dump(getLastCommande());
    $_SESSION['id-newcommande'] = getLastCommande();
  }
}
