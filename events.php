<?php
if (isset($_SESSION['connected'])) : ?>
<form action="index.php?page=events.php" method="post">
  <div class="form-group">
    <label for="search">Texte à rechercher :</label>
    <input type="text" class="form-control" name="search" id="search">
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="toggletitre" id="toggletitre">
    <label class="form-check-label" for="toggletitre">Chercher uniquement dans le titre</label>
  </div>
  <input type="submit" value="Go">
</form>
<?php
include 'UTILS/database.php';
if (!isset($_POST['search'])) {
  $articles = custom_request("SELECT * FROM Events ORDER BY _datedeb ASC");
  while ($data = mysqli_fetch_array($articles)) {
    echo "<div class='card  bg-light mb-3 border-secondary'><div class='card-body'>";
    echo "<a href='index.php?page=events.php&id=" . $data['_id_event'] . "'><h2 class='card-title'>" . $data['_titre'] . '</h2></a>';
    echo "<p class='card-subtitle'>" . $data['_datedeb'] . '</p>';
    echo "<p class='card-text'>" . $data['_intro'] . '</p>';
    echo "<img class='card-img-bottom' src=" . $data['_image'] . ">";
    echo "</div></div>";
  }
}
else {
  $search = $_POST['search'];
  if (isset($_POST['toggletitre'])) {
    $result = custom_request("SELECT * FROM Events WHERE _titre LIKE '%" . $search . "%'");
  } else {
    $result = custom_request("SELECT * FROM Events WHERE _intro LIKE '%" . $search . "%'");
  }

  while ($data = mysqli_fetch_array($result)) {
    echo "<div class='card  bg-light mb-3 border-secondary'><div class='card-body'>";
    echo "<a href='index.php?page=events.php&id=" . $data['_id_event'] . "'><h2 class='card-title'>" . $data['_titre'] . '</h2></a>';
    echo "<p class='card-subtitle'>" . $data['_datedeb'] . '</p>';
    echo "<p class='card-text'>" . $data['_intro'] . '</p>';
    echo "<img class='card-img-bottom' src=" . $data['_image'] . ">";
    echo "</div></div>";
  }

}
else :
  header('Location: index.php?page=log_in.php');
endif;
?>
CREATE TABLE eve_event
(
    eve_oid INT PRIMARY KEY NOT NULL,
    eve_title VARCHAR(250),
    eve_date VARCHAR(250),
    FOREIGN KEY(pla_place) REFERENCES pla_place(pla_oid)
)
