<?php

require_once('Controller.php');
require 'model/UserDAO.php';


class AddUserController implements Controller {

    public function handle($REQUEST) {
        
        $userDAO = UserDAO::getInstance();
        $user1 = new User();
        
        try {
            $user1->init('LEH', 'Clement', 'clem@hotmail.fr', 'pass123');
            $userDAO->insert($user1);
            $resultat=$userDAO->findAll();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    
        echo "Le trajet a bien été inséré";
        include 'view/AddUserView.php';
    }

}

?>
