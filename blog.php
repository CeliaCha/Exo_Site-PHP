<div class="container">
  <?php
  include 'UTILS/database.php';
  if (!isset($_GET['id'])) { // display multiple articles
    // handle pager :
    $total_articles = custom_request("SELECT * FROM Blog ORDER BY _date");
    $pagercount = floor($total_articles->num_rows/3);
    if ($total_articles->num_rows % 3 > 0) { $pagercount += 1; }
    if ($_GET['pager'] < 1) { $_GET['pager'] = 1 ; }
    if ($_GET['pager'] > $pagercount) { $_GET['pager'] = $pagercount ; }
    // display paginated articles :
    ?>
    <ul class='pagination justify-content-end'>
      <li class='page-item'>
        <?php
        echo "<a class='page-link' href='index.php?page=blog.php&pager=" . ($_GET['pager'] - 1) . "'>Previous</a></li>";
        for ($i = 1; $i <= $pagercount; $i++) { // affiche le pager
          echo "<li class='page-item'><a class='page-link' href='index.php?page=blog.php&pager=" . $i . "'>" . $i . "</a></li>";
        }
        echo "<li class='page-item'><a class='page-link' href='index.php?page=blog.php&pager=" . ($_GET['pager'] + 1) . "'>Next</a></li>";
        echo "</ul>";
        $offset = ($_GET['pager'] - 1) * 3;
        display_pager(custom_request("SELECT * FROM Blog LIMIT $offset, 3"));
    } else { // display selected article
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
