<?php
$db = mysqli_connect('localhost', 'root', 'rajvena', 'PHP') or die('Erreur de connexion au serveur mySQL');
function custom_request($req) {
  global $db;
  $resultQuery = mysqli_query($db, $req);
  if (!$resultQuery) {
    echo "Error: " . $req . "<br>" . mysqli_error($db);
    die;
  } else {
    echo "Request sucess";
  }
  return $resultQuery;
}
?>
