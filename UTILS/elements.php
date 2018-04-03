<?php

// FONCTIONS
function displayOptionArticles() {
  $articles = readArticles();
  foreach ($articles as $article) {
      echo "<option value='{$article['art_nom']}'>{$article['art_nom']}</option>";
  }
}

function displayOptionClients() {
  $clients = readClients();
  foreach ($clients as $client) {
      echo "<option value='{$client['cli_nom']}'>{$client['cli_nom']}</option>";
  }
}

function displayOptionVendeurs() {
  $vendeurs = readVendeurs();
  foreach ($vendeurs as $vendeur) {
      echo "<option value='{$vendeur['cli_nom']}'>{$vendeur['cli_nom']}</option>";
  }
}


//HTML
$formulaire_add_article = "<form action='index.php?page=sitedevente.php' method='post'>
<div class='form-group'>
    <label for='nom-article'>Article</label>
    <input required type='text' id='nom-article' name='nom-article'>
    <label for='prix-article'>Prix</label>
    <input required type='number' id='prix-article' name='prix-article'>
    <label for='id-vendeur'>Id Vendeur</label>
    <input required type='number' id='id-vendeur' name='id-vendeur'>
  <input type='submit' name='add-article' value='Submit'>
  </div>
</form>";

$formulaire_add_vendeur = "<form action='index.php?page=sitedevente.php' method='post'>
<div class='form-group'>
    <label for='nom-vendeur'>Nom vendeur</label>
    <input required type='text' id='nom-vendeur' name='nom-vendeur'>
    <label for='prenom-vendeur'>Prénom vendeur</label>
    <input required type='text' id='prenom-vendeur' name='prenom-vendeur'>
  <input type='submit' name='add-vendeur' value='Submit'>
  </div>
</form>";

$formulaire_add_client = "<form action='index.php?page=sitedevente.php' method='post'>
<div class='form-group'>
    <label for='nom-client'>Nom client</label>
    <input required type='text' id='nom-client' name='nom-client'>
    <label for='prenom-client'>Prénom client</label>
    <input required type='text' id='prenom-client' name='prenom-client'>
  <input type='submit' name='add-client' value='Submit'>
  </div>
</form>";


$formulaire_add_commande_debut = "<form action='index.php?page=sitedevente.php' method='post'>
<div class='form-group'>
    <label for='nom-client'>client</label>
    <select required id='nom-client' name='nom-client'>";
$formulaire_add_commande_fin =  "</select>
    <label for='date-commande'>Date</label>
    <input required type='date' id='date-commande' name='date-commande'>
    <input type='submit' name='add-commande' value='Submit'>
  </div>
</form>";

$formulaire_add_commandearticle_debut = "<form action='index.php?page=sitedevente.php' method='post'>
<div class='form-group'>
    <label for='nom-article'>Article</label>
    <select required id='nom-article' name='nom-article>";
$formulaire_add_commandearticle_fin =  "</select>
    <label for='quantite-article'>Quantité</label>
    <input required type='number' id='quantite-article' name='quantite-article'>
    <input type='submit' name='add-commandearticle' value='Submit'>
  </div>
</form>";




