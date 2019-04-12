<?php

include_once("identity_utils.php");

if(empty($_REQUEST['session_callerid'])) {
    echo $twig->render('error.xml.twig', [
        'error' => "Error, callerid is missing"
    ]);
    die();
}
else {
        include "../welcome/main.php";
    else
        include "greet.php";
}
?>
