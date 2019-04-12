<?php

include_once("identity/identity_utils.php");

if(empty($_REQUEST['session_callerid'])) {
    echo $twig->render('error.xml.twig', [
        'error' => "Error, callerid is missing"
    ]);
    die();
}
else {
    $user_data = get_user($_GET['session_callerid']);
    if(!$user_data)
        include "language/main.php";
    else
        include "greet.php";
}
?>
