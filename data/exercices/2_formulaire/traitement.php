<?php

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "GET": 
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $pwd = $_REQUEST['pwd'];
        break;
    case "POST": 
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        break;
    default:
        $name = "vide";
        $email = "vide";
        $pwd = "vide";
        break;
}


    echo "Nom : ".$name."</br>";
    echo "E-mail : ".$email."</br>";
    echo "m.passe : ".$pwd."</br>";

    var_dump($_GET);

?>
