<?php
    function custom_request($req) {
        $db = mysqli_connect('localhost', 'root', 'rajvena', 'PHP') or die('Erreur de connexion au serveur mySQL');
        return mysqli_query($db, $req);
    }
?>

