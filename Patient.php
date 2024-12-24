<?php
require_once "Utilisateur.php";

class Patient extends Utilisateur {
    private $rendezVous = [];

    public function __construct($nom, $prenom) {
        parent::__construct($nom, $prenom, "patient");
    }

    public function prendreRendezVous($date, $medecin) {
        $this->rendez_vous[] = [
            'date' => $date,
            'medecin' => $medecin
        ];
    }

    public function afficherRendezVous() {
        foreach ($this->rendez_vous as $rdv) {
            echo "Rendez-vous le  {$rdv['date']}  avec le Dr {$rdv['medecin']}  \n";
        }
    }
}
