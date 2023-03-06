<?php

class Person {
    // Attributs
    private $_lastName;
    private $_firstName;

    // Constructor
    public function __construct($lastName="Nom",$firstName="Prénom")
    {
        $this->setLastName($lastName);
        $this->setFirstName($firstName);
        
    }
    // Getters
    public function getLastName() {
        return $this->_lastName;

    }
    public function getFirstName() {
        return $this->_firstName;

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
    // Methods
}