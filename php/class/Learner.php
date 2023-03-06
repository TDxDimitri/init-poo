<?php

class Learner extends Person {
    //Attributes
    private $_discord;
    //Constructor
    public function __construct($discord = "lien discord",$lastName="nom",$firstName="prénom",$color="") {
        
        $this->setDiscord($discord);
    parent::__construct($lastName,$firstName,$color);
    }

    //Getters
    public function getDiscord() {
        return $this->_discord;
    }
    //Setters
    public function setDiscord($discord) {
        $this->_discord = $discord;
    }

    //Methods

        /**
     * describe
     *Description d'une instance de l'objet Person
     * @return string
     */
    public function describe() :string {

        return parent::describe(). "Le profil discord est :".$this->getDiscord();
        
    }
}