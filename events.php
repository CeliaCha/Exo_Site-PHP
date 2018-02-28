<?php
    if (isset($_SESSION['connected'])) {
        echo "<p>Evenements Lorem ipsum dolor sit amet consectetur, adipisicing elit. A sapiente sed numquam non doloribus maxime iure exercitationem rerum necessitatibus ipsam, nostrum placeat nam enim asperiores. Maiores, cupiditate! Eaque, amet pariatur.</p>";
    }
    else {
        header('Location: index.php?page=connexion.php');
    }
?>
