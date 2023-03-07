<?php

class Person {
    // Attributs
    private $_lastName;
    private $_firstName;
    private $_color;

    const PREFERED_COLOR_RED = "Rouge";
    const PREFERED_COLOR_BLUE = "Bleu";
    const PREFERED_COLOR_GREEN = "Vert";
    const PREFERED_COLOR_YELLOW = "Jaune";

    // Constructor
    public function __construct($lastName = "Nom", $firstName = "Prénom", $color="Color")
    {
        $this->setLastName($lastName);
        $this->setFirstName($firstName);
        $this->setColor($color);
        
    }
    // Getters
    public function getLastName() {
        return $this->_lastName;

    }
    public function getFirstName() {
        return $this->_firstName;

    }
    public function getColor() {
        return $this->_color;

    }
    // Setters
    public function setLastName($lastName) {
        if (!preg_match('/\d/', $lastName)){
        $this->_lastName = $lastName;
    }

    }

    public function setFirstName($firstName) {
        if (!preg_match('/\d/', $firstName)){
            $this->_firstName = $firstName;
        }
    
    }
    /**
     * Sélectionner une couleur parmis les couleurs proposées
     * Tapez Person::
     */
    public function setColor($color) {
            if(in_array($color, [self::PREFERED_COLOR_RED, self::PREFERED_COLOR_BLUE, self::PREFERED_COLOR_GREEN, self::PREFERED_COLOR_YELLOW])) {
        $this->_color = $color;
        }
    }
    // Methods
    
    
    /**
     * describe
     *Description d'une instance de l'objet Person
     * @return string
     */
    public function describe() :string {

    return '<br><br>Le nom est : '.$this->_lastName. '<br>  Le prénom est : '. $this->_firstName.'<br>  La couleur préférée est le: '. $this->_color .'<br>';

    
}


}