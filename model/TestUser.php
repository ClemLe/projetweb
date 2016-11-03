<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$userDAO = UserDAO::getInstance();

$user1 = new User();
$user2 = new User();


try {
    $user1->init('LEH', 'Clement', 'clem@hotmail.fr', 'pass123');
    $userDAO->insert($user1);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$resultat = $journey->findAll();

