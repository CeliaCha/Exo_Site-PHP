<?php
class BaseDeDonnees {
    private $host;
    private $login;
    private $password;
    private $nomBase;
    private $db;
    public function __construct ($host, $login, $password, $nomBase) {
        $this->host = $host;
        $this->login = $login;
        $this->password = $password;
        $this->nomBase = $nomBase;
        $this->db = NULL;
    }
    public function initialisation () {
        $this->db = mysqli_connect($this->host, $this->login, $this->password, $this->nomBase) or die('Erreur de connexion au serveur mySQL');
    }
    public function doRequest ($req) {
        if ($this->db === NULL) {die('Base de donnée non initialisée');}
        $resultQuery = mysqli_query($this->db, $req);
        if (!$resultQuery) {
            die("Error: " . $req . "<br>" . mysqli_error($this->db));
        }
        return $resultQuery;
    }
}

class Personne {
    private $database;
    private $nom;
    private $prenom;
    private $tel;
    private $id;
    public function __construct($database, $nom, $prenom, $tel) 
    {
        $this->database = $database;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
    }
    public function addToDB() {
        $this->database->doRequest("INSERT INTO Personnes(pernom, perprenom, pertel) VALUES('$this->nom', '$this->prenom', '$this->tel')");
    }
    public function update() {

    }
    public function delete() {

    }
}

class Annuaire {
    private $liste;
    public function __construct($database) {
        $request = $database->doRequest('SELECT * FROM Personnes');
        $this->liste = [];
        $person = [];
        while ($data = mysqli_fetch_array($request)) {
            array_push($person, $data['pernom'], $data['perprenom'],$data['pertel']);
            array_push($this->liste, $person);
            $person = [];
        }
    }
    public function display() {
        foreach($this->liste as $item) {
            echo "<p>" . $item[0] . ' ' . $item[1] . ' - ' . $item[2] . '</p>';
        }
    }
}

$databaseSimplon = new baseDeDonnees('localhost', 'root', 'rajvena', 'Annuaire');
$databaseSimplon->initialisation();
$Celia = new Personne($databaseSimplon, 'Arsène', 'Lupin', '0635213106');
$Celia->addToDB();
$annuaireSimplon = new Annuaire($databaseSimplon);
$annuaireSimplon->display();