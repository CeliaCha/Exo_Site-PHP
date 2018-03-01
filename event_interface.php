<?php
if (!empty($_POST)) {
  //var_dump($_POST);
  $titre = $_POST['titre'];
  $intro = $_POST['intro'];
  $lieu = $_POST['lieu'];
  $image = $_POST['image'];
  $datedeb = $_POST['date-deb'];
  $datefin = $_POST['date-fin'];
  $datepub = $_POST['date-pub'];
  include 'UTILS/database.php';
  $req = "INSERT INTO Events(_titre, _intro, _lieu, _image, _datedeb, _datefin, _datepub) VALUES('$titre', '$intro', '$lieu', '$image', '$datedeb', '$datefin', '$datepub')";
  custom_request($req);


  // $addQuery = "INSERT INTO Comptes(_login, _password) VALUES('$login', '$cryptedPassword')";
  // if (!custom_request($addQuery)) {
  //   echo "Error: " . $addQuery . "<br>" . mysqli_error($db);
  // } else {
  //   $_SESSION['connected'] = $login;
  // }

}
?>
<h1>Ajouter article</h1>
<form action="index.php?page=event_interface.php" method="post">
  <div class="form-group">
    <label for="titre">Titre :</label>
    <input type="text" class="form-control" name="titre" id="titre">
  </div>
  <div class="form-group">
    <label for="intro">Intro :</label>
    <textarea class="form-control" name="intro" id="intro" rows="3"></textarea>
  </div>
  <label for="lieu">Lieu :</label>
  <input type="text" class="form-control" name="lieu" id="lieu">
  <div class="form-group">
    <label for="image">Url de l'image :</label>
    <input type="text" class="form-control" name="image" id="image">
  </div>
  <div class="form-group">
    <label for="date-deb">Date de début :</label>
    <input type="date" class="form-control" name="date-deb" id="date-deb">
  </div>
  <div class="form-group">
    <label for="date-fin">Date de fin :</label>
    <input type="date" class="form-control" name="date-fin" id="date-fin">
  </div>
  <div class="form-group">
    <label for="date-fin">Date de publication :</label>
    <input type="date" class="form-control" name="date-pub" id="date-pub">
  </div>
  <button id="deleteform">Effacer</button>
  <input type="submit" value="OK">
</form>
