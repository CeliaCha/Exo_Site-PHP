<h1>Créer un compte</h1>
<div class="container" id="formulaire">
<form action="index.php?page=login.php" method="post">
    <p>
    <label for="login">Identifiant :</label>
    <input type="text" name="login" id="login">
    </p>
    <p>
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password">
    </p>
    <p>
    <label for="verifpassword">Confirmer le mot de passe :</label>
    <input type="password" name="verifpassword" id="verifpassword">
    </p>
<input type="submit" value="Enregistrer">
</form>
</div>

<?php

if (!empty($_POST)) {
    // variables POST
    $login = $_POST['login'];
    $password = $_POST['password'];
    $verifPassword = $_POST['verifpassword'];

    $db = mysqli_connect('localhost', 'root', 'rajvena', 'PHP') or die('Erreur de connexion au serveur mySQL');

    if ($password !== $verifPassword) {
        echo "<script>alert('Vérifiez votre mot de passe')</script>";
    } else {
        $verifLoginQuery = $db->query("SELECT * FROM Comptes WHERE _login='$login'");
        if (!$verifLoginQuery) {
            echo "Error: " . $verifLoginQuery . "<br>" . mysqli_error($db);
        } else {
            // var_dump($verifLoginQuery);
            // echo '</br>';
            // print_r($verifLoginQuery->num_rows);

            if (($verifLoginQuery->num_rows) > 0) {
                echo "<script>
                alert('Identifiant non disponible.');
                window.location.href='index.php?page=login.php';
                </script>";

            } else {
                $cryptedPassword = hash('sha256', $password);
                $addQuery = "INSERT INTO Comptes(_login, _password) VALUES('$login', '$cryptedPassword')";
                if (!mysqli_query($db, $addQuery)) {
                    echo "Error: " . $addQuery . "<br>" . mysqli_error($db);
                } else {
                    $_SESSION['connected'] = $login;
                }
            }
        }
    }
}
?>


