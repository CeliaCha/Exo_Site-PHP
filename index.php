<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Site php</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./CSS/main.css">
</head>
<body>

  <?php
  session_start();
  include 'UTILS/database.php';
  include 'UTILS/requests.php';
  $dbCommerce = new DataBase('127.0.0.1', 'root', 'rajvena', 'E_COMMERCE');
  $dbCommerce->connect();
  ?>
  
  <nav class="navbar sticky-top navbar-light bg-light">
    <a class="nav-link" href="index.php?page=sitedevente.php">Site de vente</a></li>
    <a class="nav-link" href="index.php?page=home.php">Accueil</a></li>
    <a class="nav-link" href="index.php?page=about.php">A propos</a>
    <a class="nav-link" href="index.php?page=events.php&pager=1">Evénements</a>
    <a class="nav-link" href="index.php?page=blog.php&pager=1">Blog</a>
    <a class="nav-link" href="index.php?page=contact.php">Contact</a>
    <a class="nav-link" href="index.php?page=sign_in.php">Créer un compte</a>
    <?php if (isset($_SESSION['connected'])): ?>
      <span>Bonjour <?php echo $_SESSION['connected'];?></span>
      <a class="nav-link" href="index.php?page=admin.php">Admin</a>
      <a class="nav-link" href="index.php?page=log_in.php">Déconnexion</a>
    <?php else: ?>
      <a class="nav-link" href="index.php?page=log_in.php">Connexion</a>
    <?php endif; ?>
  </nav>
  <div class="container" id="mainpage">
    <div class="col-12">
      <?php
      if (isset($_GET['page'])) {
        include $_GET['page'];
      } else {
        include 'home.php';
      }
      ?>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script> -->
  <script src="./JS/main.js"></script>
</body>
</html>
