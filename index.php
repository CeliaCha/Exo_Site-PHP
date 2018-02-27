<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Site php</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="./CSS/main.css">
</head>
<body>
<div class="container">
<div class="col-12">
<?php
include 'menu.php';
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case "home":
            include 'home.php';
            break;
        case "about":
            include 'about.php';
            break;
        case "events":
            include 'events.php';
            break;
        case "blog":
            include 'blog.php';
            break;
        case "contact":
            include 'contact.php';
            break;
        case "login":
            include 'login.php';
            break;
        default:
            include 'home.php';
    }
}
?>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="./JS/main.js"></script>
</body>
</html>