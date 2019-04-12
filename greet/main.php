<?php

echo $twig->render('greet.xml.twig', [
    'id'        => 'greet',
    'footer'    => '<goto expr="index.php?id=latest_crop&session_callerid='.$_GET['session_callerid'].'"/>',
    'message'   => 'Hello',
    'message_end' => 'welcom to the crop seed program',
]);
