<?php
// echo "<pre>";
// function creerVoiture(
//   $nom,
//   $capReservoir,
//   $contenuReservoir,
//   $kilometrage,
//   $seuilAlerteReserve,
//   $litreAu100
// )
// {
//   echo "Création de voiture</br>";
//   return [
//     "nom" => $nom,
//     "capReservoir" => $capReservoir,
//     "contenuReservoir" => $contenuReservoir,
//     "kilometrage" => $kilometrage,
//     "seuilAlerteReserve" => $seuilAlerteReserve,
//     "litreAu100" => $litreAu100
//   ];
// }
//
// function creerConducteur($nom, $conduite) {
//   return [
//     "nom" => $nom,
//     "conduite" => $conduite
//   ];
// }
//
// function mettreEssence(&$voiture, $litres) {
//   echo "mettre essence </br>";
//   $voiture['contenuReservoir'] += $litres;
// }
//
// function rouler(&$voiture, $conducteur, $distance) {
//   $multiplicateur = 0;
//   if ($conducteur['conduite'] === true) {
//     $multiplicateur = (130/100);
//   }
//   else {
//     $multiplicateur = 1;
//   }
//   $conso = $distance * ($voiture['litreAu100']/100) * $multiplicateur;
//   $voiture['contenuReservoir'] -= $conso;
//   $voiture['kilometrage'] += $distance;
//   if ($voiture['seuilAlerteReserve'] > $voiture['contenuReservoir']) {
//     echo "Alerte réservoir pour la voiture " . $voiture['nom'] . ".";
//     return true;
//   }
// }
//
// // Application
// $ferrari = creerVoiture('Ferrari', 90, 0, 0, 15, 11);
// $citroen = creerVoiture('Citroen', 28, 0, 0, 7, 6.5);
// $jeanJerome = creerConducteur('Jean-Jérôme', false);
// $berenice = creerConducteur('Bérénice', true);
//
// mettreEssence($ferrari, 90);
// mettreEssence($citroen, 28);
//
// echo "<"
//
// $count = 0;
// while (!(rouler($ferrari, $berenice, 1)) && !(rouler($citroen, $jeanJerome, 1))) {
//   $count++;
// }
// echo "</br>Kilomètres parcourus : " . $count . "</br>";
//
//
// function displayTableauDeBord($voiture) {
//   echo "</br>Tableau de bord de la " . $voiture['nom'];
//   echo "</br>Kilométrage : " . $voiture['kilometrage'];
//   //echo "</br>Réserve :" . $voiture['nom'];
//   echo "</br>Litres restants : " . $voiture['contenuReservoir'] . "</br>";
// }
//
// displayTableauDeBord($ferrari);
// displayTableauDeBord($citroen);
//
//
// echo "</pre>";

// class Conducteur {
//   private $nom;
//   public $conduite;
//   public function __construct($nom, $conduite) {
//     $this->nom = $nom;
//     $this->conduite = $conduite;
//   }
//   public function __get($property) {
//     if($property === 'nom') {
//       return $this->nom;
//     } else {
//       throw new Exception('Propriété invalide !');
//     }
//   }
// }

// class Voiture
// {
//   protected $nom;
//   protected $capaciteReservoir;
//   protected $contenuReservoir;
//   protected $kilometrage;
//   protected $alerteReserve;
//   protected $litreAu100;
//   protected $conducteur;

//   public function __construct(
//                               $nom,
//                               $capaciteReservoir,
//                               $contenuReservoir,
//                               $kilometrage,
//                               $alerteReserve,
//                               $litreAu100
//                               )
//     {
//       $this->nom = $nom;
//       $this->capaciteReservoir = $capaciteReservoir;
//       $this->contenuReservoir = $contenuReservoir;
//       $this->kilometrage = $kilometrage;
//       $this->alerteReserve = $alerteReserve;
//       $this->litreAu100 = $litreAu100;
//     }
//     public function mettreEssence($litres) {
//       echo $this->nom . " passe à la pompe pour " . $litres . " litres.</br>";
//       $this->contenuReservoir += $litres;
//     }
//     public function affecterConducteur($conducteur) {
//       $this->conducteur = $conducteur;
//       echo "</br>" .   $this->conducteur->__get('nom') . " affecté à véhicule " . $this->nom . "</br>";
//     }
//     public function afficherTableauDeBord() {
//       $this->conducteur->__get('nom') === NULL ? $displayConducteur = "pas de conducteur" : $displayConducteur = $this->conducteur->__get('nom');
//       $this->alerteReserve > $this->contenuReservoir ? $displayAlerte = "Réserve dans le rouge" : $displayAlerte = "Réserve ok";
//       echo "................................................";
//       echo "</br><strong>Tableau de bord de la " . $this->nom . "</strong>";
//       echo "</br>Conducteur : " . $displayConducteur . "";
//       echo "</br>Kilométrage : " . $this->kilometrage;
//       echo "</br>Litres restants : " . $this->contenuReservoir . "</br>";
//       echo $displayAlerte . '</br>';
//     }
//     public function rouler($distance) {
//       if ($this->conducteur->__get('nom') === NULL) {
//         echo "</br>La voiture " . $this->nom . " ne peut pas rouler sans conducteur.</br>";
//       } else {
//         $this->conducteur->conduite === true ? $multiplicateur = (130/100) : $multiplicateur = 1;
//         $this->contenuReservoir -=  $distance * ($this->litreAu100/100) * $multiplicateur;
//         $this->kilometrage += $distance;
//         if ($this->alerteReserve > $this->contenuReservoir) {
//           echo "Alerte réservoir pour la voiture " . $this->nom . ".";
//           return true;
//         }
//       }
//     }
//   }

//   class Camion extends Voiture {
//     public $chargeMax;
//     private $cargaison;
//     public function __construct(
//       $nom,
//       $capaciteReservoir,
//       $contenuReservoir,
//       $kilometrage,
//       $alerteReserve,
//       $litreAu100,
//       $chargeMax
//       )
//       {
//       $this->nom = $nom;
//       $this->capaciteReservoir = $capaciteReservoir;
//       $this->contenuReservoir = $contenuReservoir;
//       $this->kilometrage = $kilometrage;
//       $this->alerteReserve = $alerteReserve;
//       $this->litreAu100 = $litreAu100;
//       $this->chargeMax = $chargeMax;
//       $this->cargaison = 0;
//       }
//       public function __get($property) {
//         if($property === 'cargaison') {
//           return $this->cargaison;
//         } else {
//           throw new Exception('Propriété invalide !');
//         }
//       }
//     public function charger ($poids) {
//       echo "</br>Camion chargé pour $poids kilos.</br>";
//       $this->cargaison += $poids;
//     }
//     public function afficherTableauDeBordCamion () {
//       $this->afficherTableauDeBord();
//       echo "Cargaison : $this->cargaison </br>";
//     }
//   }

// /* Instructions */
//   echo '<pre>';
//   $bipbip = new Conducteur('Bip-Bip', true);
//   $coyote = new Conducteur('Coyote', false);
//   $ferrari = new Voiture('Ferrari', 90, 0, 0, 15, 11);
//   $citroen = new Voiture('Citroen', 28, 0, 0, 7, 6.5);


//   $totoro = new Camion('Totoro', 200, 0, 0, 40, 25, 10000);
//   $totoro->affecterConducteur($coyote);
//   $totoro->mettreEssence(200);
//   $totoro->charger(6000);
//   $totoro->afficherTableauDeBordCamion();
//   echo "</br>Charge max : ".$totoro->chargeMax."</br>";
//   echo "</br>Cargaison : ".$totoro->__get('cargaison') ."</br>";
  




  
//   $ferrari->mettreEssence(90);
//   $ferrari->affecterConducteur($bipbip);
//   $ferrari->afficherTableauDeBord();

//   $citroen->mettreEssence(28);
//   $citroen->affecterConducteur($coyote);
//   $citroen->afficherTableauDeBord();

//   echo "Test kilométrage : </br>";
//   $count = 0;
//   while (!($ferrari->rouler(1)) && !($citroen->rouler(1))) {
//     $count++;
//   }

//   echo "</br>Kilomètres parcourus : " . $count . "</br>";

//   $ferrari->afficherTableauDeBord();
//   $citroen->afficherTableauDeBord();

//   echo '</pre>';

/**



 * Sujets :

 * - ouvrir une connexion à une base de données en utilisant PDO

 * - envoyer une requète à la base de données

 * - récupérer et afficher le résultat de la requète

 * - gérer les erreurs

 *

 * Exercice :

 * - récupérer emp_no de $_GET
 * - ouvrer une connexion à la BdD employees (https://github.com/datacharmer/test_db)
 * - récupérer la ligne de la table employees qui correspond avec emp_no
 * - si la ligne est trouvée affichez les informations dans une fiche
 * - si la ligne n'est pas trouvée affichez un message d'erreur

 * Pourquoi utiliser PDOStatement::execute plutôt que PDO::exec ?

 */

// echo "
//  <form action='exercice4.php' method='post'>
//  <label for 'varpost'>Test variable POST<label>
//  <input type='text' name='varpost' id='varpost'></input>
//  <input type='submit'></input>
//  </form>
//  ";


?>

 <form action='exoalgo.php?' method='get'>
 <label for 'num'>Numéro employé<label>
 <input type='text' name='num' id='num'></input>
 <input type='submit'></input>
 </form>
 

<?php
 // if (isset($_GET)) {

 //  $numEmploye = $_GET['num'];
  // $db = new PDO('mysql:host=localhost;dbname=employees', 'root', 'rajvena');
//   $req=$db->query("SELECT first_name, last_name FROM employees WHERE emp_no = {$numEmploye}");
//   //$req->setFetchMode(PDO::FETCH_OBJ);

//   echo "</br></br></br>";
//   $result = $req->fetchAll();

//   if (!empty($result)) 
//   {
//     foreach ($result as $row) {
//       echo "Employé {$numEmploye} : {$row['first_name']}  {$row['last_name']}<br>";
//     }
//   } 
//   else 
//   {
//     echo "Aucun employé ne correspond à ce numéro";
//   }
// }

 // custom_request("INSERT INTO Blog(_titre, _image, _intro, _texte, _date) VALUES('$titreblog', '$image', '$intro', '$texte', '$date')");


class BaseDeDonnees {
    private $host;
    private $login;
    private $password;
    private $nomBase;
    private $db;
    public function __construct ($host, $nomBase, $login, $password) {
        $this->host = $host;
        $this->login = $login;
        $this->password = $password;
        $this->nomBase = $nomBase;
        $this->db = NULL;
    }
    public function initialisation () {
        $this->db = new PDO('mysql:host={$this->host};dbname={$this->nomBase}', $this->login, $this->password); 
    }
    public function read($req) {
      if ($this->db === NULL) {die('Base de donnée non initialisée');}
      return this->$db->query($req)->fetchAll();
    }
    public function create($req) {
      if ($this->db === NULL) {die('Base de donnée non initialisée');}
      return $db->exec($req);
    }
    public function update($db, $req) {

    }
    public function delete($db, $req) {
  
    }
}

$database = new baseDeDonnees('localhost', 'root', 'rajvena', 'Annuaire');




// $db = new PDO('mysql:host=localhost;dbname=employees', 'root', 'rajvena');

// $data = read($db, "SELECT first_name, last_name FROM employees WHERE emp_no = 10001");
// foreach ($data as $row) {
//       echo "Employé : {$row['first_name']}  {$row['last_name']}<br>";
// }

// create($db, "INSERT INTO employees(emp_no, birth_date, first_name, last_name, gender, hire_date) VALUES(500000, '1977-11-23', 'Célia', 'Chazel', 'F', '2018-09-05')");