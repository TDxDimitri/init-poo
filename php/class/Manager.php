<?php

class Manager {
    // Attributes
    private $_db;

    // Constructor
    public function __construct(PDO $db){
        
        $this->setDb($db);
    }

    // Getters


    // Setters
    public function setDb (PDO $db){
        $this->_db = $db;
    }


    // Methods
public function create(LEARNER|TRAINER $objet){
    $firstname = $objet->getFirstname();
    $lastname = $objet->getLastname();
    $color = $objet->getColor();

    $stmt = $this->_db->prepare("INSERT INTO `person` (`first_name`, `last_name`, `color`) VALUES (:firstname, :lastname, :color)");
    
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':color', $color);
    
    $stmt->execute();

    $idperson = $this->_db->lastInsertId();



    if(get_class($objet) == 'Learner'){
        $discord = $objet->getDiscord();
        
        $stmt = $this->_db->prepare("INSERT INTO `learner` (`discord`, `person_id`) VALUES (:discord, :idperson)");
        
        $stmt->bindParam(':discord', $discord);
        $stmt->bindParam(':idperson', $idperson, PDO::PARAM_INT);
        $stmt->execute();
        
    }
}

    // Crud
}