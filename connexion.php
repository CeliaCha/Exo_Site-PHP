<?php
    if (isset($_SESSION['connected'])) {
        echo "<script>alert('Déconnexion...')</script>";
        session_destroy();
        header('Location: index.php');
    }
    else { ?>
    <h1>Connexion</h1>
<div class="container formulaire">
<form action="index.php?page=connexion.php" method="post">
    <p>
    <label for="login">Identifiant :</label>
    <input type="text" name="login" id="login">
    </p>
    <p>
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password">
    </p>
<input type="submit" value="Se connecter">
</form>
</div>
    <?php
        if (!empty($_POST)) {
            $login = $_POST['login'];
            $password = hash('sha256', $_POST['password']);
            $db = mysqli_connect('localhost', 'root', 'rajvena', 'PHP') or die('Erreur de connexion au serveur mySQL');
            $verifUser = $db->query("SELECT * FROM Comptes WHERE _login='$login' AND _password='$password'");
            if (($verifUser->num_rows) > 0) {
                $_SESSION['connected'] = $login;
                header('Location: index.php');
            } else {
                echo "<script>alert('Identifiant ou mot de passe invalide.')</script>";
            }

        } // end if $POST not empty
    } // end if connected === false
?>