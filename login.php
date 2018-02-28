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
// exécuté à la soumission du formulaire :
if (!empty($_POST)) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $verifPassword = $_POST['verifpassword'];
    // test double password :
    if ($password !== $verifPassword) { 
        echo "<script>alert('Vérifiez votre mot de passe')</script>";
    } else { 
        // connexion et requête bdd :
        include 'UTILS/database.php';
        $verifLoginQuery = custom_request("SELECT * FROM Comptes WHERE _login='$login'");
        // gestion erreur :
        if (!$verifLoginQuery) { 
            echo "Error: " . $verifLoginQuery . "<br>" . mysqli_error($db);
        } else {  
            if (($verifLoginQuery->num_rows) > 0) { 
                // si pseudo déjà pris, alerte et rechargement page :
                echo "<script>
                alert('Identifiant non disponible.');
                window.location.href='index.php?page=login.php';
                </script>";
            } else { 
                // sinon ajout identifiants dans bdd et connexion user :
                $cryptedPassword = hash('sha256', $password);
                $addQuery = "INSERT INTO Comptes(_login, _password) VALUES('$login', '$cryptedPassword')";
                if (!custom_request($addQuery)) {
                    echo "Error: " . $addQuery . "<br>" . mysqli_error($db);
                } else {
                    $_SESSION['connected'] = $login;
                }
            }
        }
    }
}
?>


