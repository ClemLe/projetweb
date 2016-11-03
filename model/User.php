<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Clement
 */
class User {

    private $nom;
    private $prenom;
    private $email;
    private $motdepasse;

    public function __construct() {
        
    }

    public function init($nom, $prenom, $email, $motdepasse) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->motdepasse = $motdepasse;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }
    
    public function getMail() {
        return $this->email;
    }
    
    public function getMotDePasse() {
        return $this->motdepasse;
    }
    
    

}
