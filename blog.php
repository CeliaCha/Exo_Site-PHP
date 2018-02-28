<div class="container">
<?php
include 'UTILS/database.php';
if (!isset($_GET['id'])) { 
    // display all articles
    $articles = custom_request("SELECT * FROM Blog ORDER BY _date");
    if ($articles) {
        while ($data = mysqli_fetch_array($articles)) { ?>
        <div class='card  bg-light mb-3 border-secondary'>
        <div class="card-body">
        <?php
            echo "<a href='index.php?page=blog.php&id=" . $data['_id'] . "'><h2 class='card-title'>" . $data['_titre'] . '</h2></a>';
            echo "<p class='card-subtitle'>" . $data['_date'] . '</p>';
            echo "<p class='card-text'>" . $data['_intro'] . '</p>';
            echo "<img class='card-img-bottom' src=" . $data['_image'] . ">";
            echo "</div></div>";
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }
} else { 
    // display one article
     ?>
    <div class='card  bg-light mb-3 border-secondary'>
    <div class="card-body">
    <?php
    $articleID = $_GET['id'];
    $article = custom_request("SELECT * FROM Blog WHERE _id = '$articleID'");
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

