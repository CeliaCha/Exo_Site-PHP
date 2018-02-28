
<div class="container">
<!-- <h1>Blog</h1> -->
<?php
$db = mysqli_connect('localhost', 'root', 'rajvena', 'PHP') or die('Erreur de connexion au serveur mySQL');
if (!isset($_GET['id'])) {
    $query = "SELECT * FROM Blog ORDER BY _date";
    $titres = mysqli_query($db, $query);
    if (mysqli_query($db, $query)) {
        foreach ($titres as $ligne) {
            echo "<a href='index.php?page=blog.php&id=" . $ligne['_id'] . "'>";
            ?>
        <div class='card  bg-light mb-3 border-secondary'>
        <div class="card-body">
        <?php
echo "<h2 class='card-title'>" . $ligne['_titre'] . '</h2>';
            echo "<p class='card-subtitle'>" . $ligne['_date'] . '</p>';
            echo "<p class='card-text'>" . $ligne['_intro'] . '</p>';
            echo "<img class='card-img-bottom' src=" . $ligne['_image'] . ">";
            echo "</div></div></a>";
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }
} else { ?>
    <div class='card  bg-light mb-3 border-secondary'>
    <div class="card-body">
    <?php
    $articleID = $_GET['id'];
    $articleQuery = "SELECT * FROM Blog WHERE _id = '$articleID'";
    $article = mysqli_query($db, $articleQuery);
    while ($data = mysqli_fetch_array($article)) {
        echo "<h2 class='card-title'>" . $data['_titre'] . '</h2>';
        echo "<p class='card-subtitle'>" . $data['_date'] . '</p>';
        echo "<p class='card-text'>" . $data['_intro'] . '</p>';
        echo "<p class='card-text'>" . $data['_texte'] . '</p>';
        echo "<img class='card-img-bottom' src=" . $data['_image'] . ">";
        echo "</div></div>";
    }
}
?>
</div>

