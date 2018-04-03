
<?php 
include 'UTILS/requests.php';

if (isset($_GET['nomarticle'])) {
  $nomarticle = $_GET['nomarticle'];
  $response = getArticlePrix($nomarticle);
  echo $response;
}

