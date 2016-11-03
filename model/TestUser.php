<?php

include_once('UserDAO.php');


$userDAO = UserDAO::getInstance();

$user1 = new User();


try {
    $user1->init('LEH', 'Clement', 'clem@hotmail.fr', 'pass123');
    $userDAO->insert($user1);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$resultat=$userDAO->findAll();
foreach ($resultat as $user) {
    print_r($user->getNom());
    echo '<br/>';
}




