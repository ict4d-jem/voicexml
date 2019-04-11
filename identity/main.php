<?php

include_once("identity_utils.php");

if(!isset($_REQUEST['session_callerid']) || !empty($_REQUEST['session_callerid'])) {
    include 'error.vxml';
    die();
}
else {
    $user_data = get_user($_GET['session_callerid']);
    if(!$user_data)
        include "identification.php";
    else
        include "greet.php";
}
?>
