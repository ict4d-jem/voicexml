<?php
echo $twig->render('thank_you.xml.twig', [
    'id'        => 'thank_you',
    'message'   => '<break time="1000"/>Thank you'
]);
