<?php

require 'controller/AddUserController.php';

//Si http://localhost/projetweb/index.php?page=add-user
if ($_REQUEST['page'] == "add-user") {
    $jlc = new AddUserController();
    $jlc->handle($_REQUEST);
} else {
    echo "Cette page n'existe pas";
}
?>

