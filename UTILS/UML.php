<?php

  class Client extends Database {
    public function add($prenom, $nom) {
        $row = [
            'prenom' => $this->prenom,
            'nom' => $this->nom,
        ];
        $sql = "INSERT INTO clients SET prenom=:prenom, nom=:nom;";
        $status = $pdo->prepare($sql)->execute($row);
        if ($status) {
            $lastId = $pdo->lastInsertId();
            echo $lastId;
        }
        // if ($this->db === NULL) {die('Base de données non initialisée');}
        // echo "<br/><br/>Element ajouté<br/><br/>";
        // $this->db->insert("INSERT INTO clients (cli_nom, cli_prenom) VALUES ('$nom', '$prenom')");
        // return $this->db->exec($req);
      }
    public function readOne($req) {
        if ($this->db === NULL) {die('Base de données non initialisée');}
        return $this->db->query($req)->fetch();
    }
    public function readAll($req) {
      if ($this->db === NULL) {die('Base de données non initialisée');}
      return $this->db->query($req)->fetchAll();
    }
  }



