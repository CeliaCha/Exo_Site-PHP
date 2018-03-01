<?php
$db = mysqli_connect('localhost', 'root', 'rajvena', 'PHP') or die('Erreur de connexion au serveur mySQL');
function custom_request($req) {
  global $db;
  $resultQuery = mysqli_query($db, $req);
  if (!$resultQuery) {
    echo "Error: " . $req . "<br>" . mysqli_error($db);
    die;
  } 
  return $resultQuery;
}
function display_pager($articles) {
  while ($data = mysqli_fetch_array($articles)) { ?>
    <div class='card  bg-light mb-3 border-secondary'>
    <div class="card-body">
      <?php
      echo "<a href='index.php?page=blog.php&id=" . $data['_id'] . "'><h2 class='card-title'>" . $data['_titre'] . '</h2></a>';
      echo "<p class='card-subtitle'>" . $data['_date'] . '</p>';
      echo "<p class='card-text'>" . $data['_intro'] . '</p>';
      echo "<img class='card-img-bottom' src=" . $data['_image'] . ">";
      echo "</div></div>";
    }
  }
?>
