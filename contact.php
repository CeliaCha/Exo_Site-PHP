<h1>Contact</h1>
<?php
if (!empty($_POST)) {
  foreach ($_POST as $key => $value) { $$key = $value; }
  if (!is_numeric($age)) { // alerte si age non valide
    echo "<script>alert('Age invalide.');</script>";
  } else {
    $findme = 'Simplon';
    $pos = strpos($message, $findme);
    if ($pos !== false) {
      echo "entrée invalide";
    } else {
      include 'UTILS/database.php';
      $req = "INSERT INTO Contacts(_objet, _message, _thematique, _age, _compte) VALUES('$objet', '$message', '$thematique', '$age', '$compte')";
      custom_request($req);
    }
  }
}
?>
  <form action="index.php?page=contact.php" method="post">
    <div class="form-group">
      <label for="objet">Objet :</label>
      <input type="text" class="form-control" name="objet" id="objet">
    </div>
    <div class="form-group">
      <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
    </div>
    <label for="thematique">Thématique</label>
    <select class="form-control" name="thematique" id="thematique">
      <option value="Riri">Riri</option>
      <option value="Fifi">Fifi</option>
      <option value="Loulou">Loulou</option>
    </select>
    <div class="form-group"><label for="age">Votre age :</label>
      <input type="text" class="form-control" name="age" id="age">
    </div>
    <div class="form-group">
      Avez-vous un compte utilisateur ?
      <label for="yes">Oui</label>
      <input type="radio" id="yes" name="compte" value="Oui">
      <label for="no">Non</label>
      <input type="radio" id="no" name="compte" value="Non">
    </div>
    <button id="deleteform">Effacer</button>
    <input type="submit" value="OK">
  </form>
