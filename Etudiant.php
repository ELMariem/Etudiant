<?php

    class Etudiant {
        public $name;
        public $notes;
        public function __construct($name="",$notes=[]) {
            $this->name = $name;
            $this->notes = $notes;
        }
        public function Affiche_Notes() {
            echo "Affichage des notes de l'etudiant ". $this->name ."";
            for ($i= 0; $i < count($this->notes); $i++) {
                echo "".$this->notes[$i]."";
            }
        }
        public function Calcule_Moyenne(): float {
            $somme=0;
            for ($i= 0; $i < count($this->notes); $i++) {
                $somme += $this->notes[$i];
            }
            $somme /= count($this->notes);
            return $somme;
        }
        public function Resultat(): void {
            $moyenne=$this->calcule_moyenne();
            if ($moyenne<10){
                echo "l'etudiant ". $this->name ." NON Admis ";
            }
            else {
                echo "l'etudiant ". $this->name ." Admis ";

            }
        }

}?>