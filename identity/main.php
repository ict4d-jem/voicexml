<?php

include_once("identity_utils.php");

if(empty($_REQUEST['session_callerid'])) {
    echo $twig->render('error.xml.twig', [
        'error' => "Error, callerid is missing"
    ]);
    die();
}
else {
    $user_data = get_user($_GET['session_callerid']);
    if(!$user_data)
        echo $twig->render('voice_record.xml.twig', [
            'id'        => 'record_name',
            'nextid'    => './identity/vxml/greet.vxml',
            'message'   => '<prompt>Welcome to the Seed System service.</prompt><prompt timeout="10s">Please identify yourself after the beep.</prompt>'
        ]);
    else
        include "greet.php";
}
?>
