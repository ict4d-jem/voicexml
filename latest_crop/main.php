<?php
$latest_crop = file_get_contents("json/latest_crop.json");
$json_decode = json_decode($latest_crop, true);
echo $twig->render('selection.xml.twig', [
    'id'        => 'latest_crop',
    'nextid'    => 'index.php?id=thank_you&session_callerid='.$_GET['session_callerid'],
    'choices'   => $json_decode,
    'message'   => '<break time="1000"/>What is your latest crop?'
]);
