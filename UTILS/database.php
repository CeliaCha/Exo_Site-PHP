<?php
    function custom_request($req) {
        $db = mysqli_connect('localhost', 'root', 'rajvena', 'PHP') or die('Erreur de connexion au serveur mySQL');
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
