
<div class="container">
<!-- <h1>Blog</h1> -->
<?php
$db = mysqli_connect('localhost', 'root', 'rajvena', 'PHP') or die('Erreur de connexion au serveur mySQL');
$query = "SELECT _titre, _intro, _image, _date FROM Blog ORDER BY _date";
$titres = mysqli_query($db, $query);

if (mysqli_query($db, $query)) {
    foreach ($titres as $ligne) {
        ?>
        <div class='card  bg-light mb-3 border-secondary'>
        <div class="card-body">
        <?php
        echo "<h2 class='card-title'>" . $ligne['_titre'] . '</h2>';
        echo "<p class='card-subtitle'>" . $ligne['_date'] . '</p>';
        echo "<p class='card-text'>" . $ligne['_intro'] . '</p>';
        echo "<img class='card-img-bottom' src=" . $ligne['_image'] . ">";
        echo "</div></div>";
    }
} 
else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
}
?>
</div>

