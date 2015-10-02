<?php

/*
 * Transformation en OO de notre table comment
 */

/**
 * Description of CommentClass
 *
 * @author webform
 */
class CommentClass {
    //
    //Attributs
    //
    
    protected $id;
    protected $lenom;
    protected $letexte;
    protected $ladate;
    
    //
    // Méthodes
    //
            // Constructeur qui attend un tableau en paramètre
            public function __construct(array $valeurs){
                // on utilise les setters pour remplir les attributs de l'object (sauf $id) grâce à trouveSetter
                $this->trouveSetter($valeurs);
            }
        
        // fonction qui remplit à la volée les setters de l'objet lors de l'instanciation (appelée dans le construct), c'est l'hydratation de l'instance
        private function trouveSetter($param) {
            foreach ($param as $clef => $valeur) {
                $nom = 'set' . ucfirst($clef);
                if (method_exists($this, $nom)) {
                    $this->$nom($valeur);
                }
            }
        }
            
            
            
        // Setter et Getter de tous nos champs (attributs, pas de setter pour l'id)
        public function getId(){
            return $this->id;
        }
        
        public function setLenom($nom){
            // protection contre attaque
            $nomTraite = htmlentities(strip_tags(trim($nom)),ENT_QUOTES, "UTF-8");
            $this->lenom = $nomTraite;
        }
        public function getLenom(){
            return $this->lenom;
        }
        
        public function setLetexte($texte){
            // protection contre attaque
            $texteTraite = htmlentities(strip_tags($texte),ENT_QUOTES, "UTF-8");
            $this->letexte = $texteTraite;
        }
        public function getLetexte(){
            return $this->letexte;
        }
        
        public function setLadate($date){
            // protection contre attaque
            $dateTraite = htmlentities(strip_tags($date),ENT_QUOTES, "UTF-8");
            $this->ladate = $dateTraite;
        }
        public function getLadate(){
            return $this->ladate;
        }
}
