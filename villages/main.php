<?php
$region = file_get_contents("json/region_mali.json");
$json_decode = json_decode($region, true);

echo $twig->render('selection.xml.twig', [
    'id'        => 'villages',
    'nextid'    => 'index.php?id=crop_size&session_callerid='.$_GET['session_callerid'],
    'choices'   => array_keys($json_decode['region'][$_GET['selected']]),
    'message'   => '<break time="1000"/>Choose your village'
]);
