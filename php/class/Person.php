<?php

class Person {
    // Attributs
    private $_lastName = "Nom";
    private $_firstName = "Prénom";

    // Constructor
    // Getters
    public function getLastName() {
        return $this->_lastName;

    }
    public function getFirstName() {
        return $this->_firstName;

    }
    // Setters
    public function setLastName($lastName) {
        $this->_lastName = $lastName;

    }
    public function setFirstName($firstName) {
        $this->_firstName = $firstName;

    }
    // Methods
}