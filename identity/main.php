<?php

include_once("identity_utils.php");

if(empty($_REQUEST['session.callerid'])) {
    include 'error.vxml';
    die();
}
else {
    $user_data = get_user($_GET['session.callerid']);
    if(!$user_data)
        include "identification.php";
    else
        include "greet.php";
}
?>
