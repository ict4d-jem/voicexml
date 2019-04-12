<?php
$language = file_get_contents("json/language.json");
$json_decode = json_decode($language, true);
echo $twig->render('selection.xml.twig', [
    'id'        => 'cropsize',
    'nextid'    => 'index.php?id=welcome&session_callerid='.$_GET['session_callerid'],
    'choices'   => $json_decode,
    'message'   => '<break time="1000"/>Please select your language<break time="50"/>'
]);
