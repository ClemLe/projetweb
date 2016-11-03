<?php

require_once('BDDConnection.php');
require_once('User.php');

class UserDAO {

    private static $dao;

    public function __construct() {
        
    }

    public final static function getInstance() {
        if (!isset(self::$dao)) {
            self::$dao = new UserDAO();
        }
        return self::$dao;
    }

    public final function findAll() {
        $dbc = BDDConnection::getInstance()->getConnection();
        $query = "SELECT * FROM USER ORDER BY id";
        $stmt = $dbc->query($query);
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
        return $results;
    }

    public final function insert(User $st) {
        if ($st instanceof User) {
            $dbc = BDDConnection::getInstance()->getConnection();
            // prepare the SQL statement 
            $query = "INSERT INTO USER(nom, prenom, email, password) VALUES (:pre, :nom, :mail, :mdp)";
            $stmt = $dbc->prepare($query);

            // bind the paramaters
            $stmt->bindValue(':pre', $st->getPrenom(), PDO::PARAM_STR);
            $stmt->bindValue(':nom', $st->getNom(), PDO::PARAM_STR);
            $stmt->bindValue(':mail', $st->getMail(), PDO::PARAM_STR);
            $stmt->bindValue(':mdp', $st->getMotDePasse(), PDO::PARAM_STR);

            // execute the prepared statement
            $stmt->execute();
        }
    }
/*
    public function delete(User $st) {
        if ($st instanceof User) {
            $dbc = BDDConnection::getInstance()->getConnection();
            // prepare the SQL statement
            $query = "DELETE FROM USER WHERE id=:i";
            $stmt = $dbc->prepare($query);

            // bind the paramaters
            $stmt->bindValue(':i', $st->getId(), PDO::PARAM_STR);
            echo $st->getId();


            // execute the prepared statement
            $stmt->execute();
        }
    }

    public function update(User $st) {
        if ($st instanceof User) {
            $dbc = BDDConnection::getInstance()->getConnection();
            // prepare the SQL statement
            $query = "UPDATE USER SET description = :descr, date_creation = :dat, distance = :d WHERE id=:i";
            $stmt = $dbc->prepare($query);

            // bind the paramaters
            $stmt->bindValue(':i', $st->getId(), PDO::PARAM_STR);
            $stmt->bindValue(':descr', $st->getDescription(), PDO::PARAM_STR);
            $stmt->bindValue(':dat', $st->getDate(), PDO::PARAM_STR);
            $stmt->bindValue(':d', $st->getDist(), PDO::PARAM_STR);

            // execute the prepared statement
            $stmt->execute();
        }
    }
    
*/

}
?> 
