<h1>Créer un compte</h1>
<div class="container" id="formulaire">
  <form action="index.php?page=sign_in.php" method="post">
    <div class="form-group">
      <label for="login">Identifiant :</label>
      <input type="text" class="form-control" div class="form-group"name="login" id="login">
    </div>
    <div class="form-group">
      <label for="password">Mot de passe :</label>
      <input type="password" class="form-control" div class="form-group"name="password" id="password">
    </div>
    <div class="form-group">
      <label for="verifpassword">Confirmer le mot de passe :</label>
      <input type="password" class="form-control" div class="form-group"name="verifpassword" id="verifpassword">
    </div>
    <input type="submit" value="Enregistrer">
  </form>
</div>
<?php
if (!empty($_POST)) { // exécuté à la soumission du formulaire :
  foreach ($_POST as $key => $value) { $$key = $value; }
  if ($password !== $verifpassword) { // test password valide :
    echo "<script>alert('Vérifiez votre mot de passe')</script>";
  } else { // connexion et requête bdd :
    include 'UTILS/database.php';
    $verifLoginQuery = custom_request("SELECT * FROM Comptes WHERE _login='$login'");
    if (($verifLoginQuery->num_rows) > 0) { // test pseudo valide :
      echo "<script>
      alert('Identifiant non disponible.');
      window.location.href='index.php?page=sign_in.php';
      </script>";
    } else { // ajout identifiants dans bdd et connexion user :
      $cryptedPassword = hash('sha256', $password);
      custom_request("INSERT INTO Comptes(_login, _password) VALUES('$login', '$cryptedPassword')");
      $_SESSION['connected'] = $login;
    }
  }
}
?>
