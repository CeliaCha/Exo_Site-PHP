<?php
include 'menu.php';


 if (!empty($_POST)) {
    var_dump($_POST['age']);
	if (is_numeric($_POST['age'])) {
        echo "age valide";
    }
    else {
        echo "age non valide";
    }} 

$mystring = $_POST['message'];
$findme   = 'Simplon';
$pos = strpos($mystring, $findme);

if ($pos !== false) {
    echo "entrée invalide";
}


foreach ($_POST as $key => $value) {
    echo $key . " : " .$value . '</br>';
}

?>