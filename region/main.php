<?php

$region = file_get_contents("json/region_mali.json");

$json_decode = json_decode($region, true);

echo $twig->render('selection.xml.twig', [
    'id'        => 'regions',
    'nextid'    => 'index.php?id=villages&session_callerid='.$_GET['session_callerid'],
    'choices'   => array_keys($json_decode['region']),
    'message'   => '<break time="1000"/>We will now ask you a few questions so we can build a profile on you. We will not request this information again.<break time="50"/>Please select your region from the following options'
]);
