<?php

require_once "Utilisateur.php";

class Medecin extends Utilisateur {
    private $specialite;

    public function __construct($nom, $prenom, $specialite) {
        parent::__construct($nom, $prenom, "medecin");
        $this->specialite = $specialite;
    }

    public function consulterPatient($patient) {
        echo "Dr {$this->afficherNomComplet()} consulte le patient {$patient->afficherNomComplet()} \n";
    }

    public function afficherSpecialite() {
        return $this->specialite;
    }
}
