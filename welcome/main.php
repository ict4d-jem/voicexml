<?php

$user_data = get_user($_GET['session_callerid']);
if(!$user_data)
    echo $twig->render('voice_record.xml.twig', [
        'id'        => 'record_name',
        'nextid'    => 'index.php?id=region&session_callerid='.$_GET['session_callerid'],
        'message'   => '<prompt>Welcome to the Seed System service.</prompt><prompt timeout="10s">Please identify yourself after the beep.</prompt>'
    ]);
