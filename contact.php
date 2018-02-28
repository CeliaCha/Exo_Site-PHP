<h1>Contact</h1>
<?php
if (!empty($_POST)) {
//     if (is_numeric($_POST['age'])) {
    //         echo "age valide";
    //     }
    //     else {
    //         echo "age non valide";
    //     }

// $mystring = $_POST['message'];
    // $findme   = 'Simplon';
    // $pos = strpos($mystring, $findme);
    // if ($pos !== false) {
    //     echo "entrée invalide";
    // }

// foreach ($_POST as $key => $value) {
    //     echo $key . " : " .$value . '</br>';
    // }

    $objet = $_POST['objet'];
    $message = $_POST['message'];
    $thematique = $_POST['thematique'];
    $age = $_POST['age'];
    $compte = $_POST['compte'];

    $db = mysqli_connect('localhost', 'root', 'rajvena', 'PHP') or die('Erreur de connexion au serveur mySQL');
    $query = "INSERT INTO Contacts(_objet, _message, _thematique, _age, _compte) VALUES('$objet', '$message', '$thematique', '$age', '$compte')";

    if (!mysqli_query($db, $query)) {
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }
}
?>


<div id="formulaire">
<form action="index.php?page=contact.php" method="post">
    <p>
    <label for="objet">Objet :</label>
    <input type="text" name="objet" id="objet">
    </p>
    <p>
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </p>
    <label for="thematique">Thématique</label>
    <select name="thematique" id="thematique">
    <option value="Riri">Riri</option>
    <option value="Fifi">Fifi</option>
    <option value="Loulou">Loulou</option>
</select>
<p><label for="age">Votre age :</label>
<input type="text" name="age" id="age">
</p>
<p>Avez-vous un compte utilisateur ?
<label for="yes">Oui</label>
<input type="radio" id="yes" name="compte" value="Oui">
<label for="no">Non</label>
<input type="radio" id="no" name="compte" value="Non">
</p>
<button id="deleteform">Effacer</button>
<input type="submit" value="OK">
</form>
</div>




