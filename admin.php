<?php
include 'UTILS/database.php';
if (isset($_POST['titrearticle'])) {
  foreach ($_POST as $key => $value) { $$key = $db->real_escape_string($value); }
  custom_request("INSERT INTO Events(_titre, _intro, _lieu, _image, _datedeb, _datefin, _datepub) VALUES('$titrearticle', '$intro', '$lieu', '$image', '$datedeb', '$datefin', '$datepub')");
}
if (isset($_POST['titreblog'])) {
  foreach ($_POST as $key => $value) { $$key = $db->real_escape_string($value); }
  custom_request("INSERT INTO Blog(_titre, _image, _intro, _texte, _date) VALUES('$titreblog', '$image', '$intro', '$texte', '$date')");
}
?>
<h1>Administration du site</h1>
<form action="index.php?page=admin.php" method="post">
  <div class="form-group">
    Choix rubrique :
    <label for="blog">Blog</label>
    <input type="radio" id="blog" name="choixrubrique" value="blog">
    <label for="events">Events</label>
    <input type="radio" id="events" name="choixrubrique" value="events">
  </div>
  <input type="submit" value="Go">
</form>
<?php
if (isset($_POST['choixrubrique'])) :
  if ($_POST['choixrubrique'] === 'events') : ?>
  <form action="index.php?page=admin.php" method="post">
    <div class="form-group">
      <label for="titrearticle">Titre :</label>
      <input type="text" class="form-control" name="titrearticle" id="titrearticle">
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
      <label for="datedeb">Date de début :</label>
      <input type="date" class="form-control" name="datedeb" id="datedeb">
    </div>
    <div class="form-group">
      <label for="datefin">Date de fin :</label>
      <input type="date" class="form-control" name="datefin" id="datefin">
    </div>
    <div class="form-group">
      <label for="datepub">Date de publication :</label>
      <input type="date" class="form-control" name="datepub" id="datepub">
    </div>
    <button id="deleteform">Effacer</button>
    <input type="submit" value="OK">
  </form>
<?php else : ?>
  <form action="index.php?page=admin.php" method="post">
    <div class="form-group">
      <label for="titreblog">Titre :</label>
      <input type="text" class="form-control" name="titreblog" id="titreblog">
    </div>
    <div class="form-group">
      <label for="image">Url de l'image :</label>
      <input type="text" class="form-control" name="image" id="image">
    </div>
    <div class="form-group">
      <label for="intro">Intro :</label>
      <textarea class="form-control" name="intro" id="intro" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="texte">Texte :</label>
      <textarea class="form-control" name="texte" id="texte" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="date">Date de début :</label>
      <input type="date" class="form-control" name="date" id="date">
    </div>
    <input type="submit" value="OK">
  </form>
<?php endif;
endif;
?>
