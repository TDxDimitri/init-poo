<?php

class Trainer extends Person {
    //Attributes
    private $_organisation;
    //Constructor
    public function __construct($organisation = "lien de l'organisation github",$lastName="nom",$firstName="prénom",$color="") {
        
        $this->setOrganisation($organisation);
    parent::__construct($lastName,$firstName,$color);
    }

    //Getters
    public function getOrganisation() {
        return $this->_organisation;
    }
    //Setters
    public function setOrganisation($organisation) {
        $this->_organisation = $organisation;
    }

    //Methods

        /**
     * describe
     *Description d'une instance de l'objet Person
     * @return string
     */
    public function describe() :string {

        return parent::describe(). "Le Lien de l'organisation est: :".$this->getOrganisation();
        
    }
}