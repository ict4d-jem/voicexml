<?php
$crop_size = file_get_contents("json/crop_size.json");
$json_decode = json_decode($crop_size, true);
echo $twig->render('selection.xml.twig', [
    'id'        => 'villages',
    'nextid'    => 'index.php?id=latest_crop&session_callerid='.$_GET['session_callerid'],
    'choices'   => $json_decode,
    'message'   => '<break time="1000"/>What is the size of your crop?<break time="20"/>Please use your voice to enter the amount of acres of your land<break time="50"/>'
]);
