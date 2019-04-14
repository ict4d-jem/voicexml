<?php

global $user_data;

echo $twig->render('greet.xml.twig', [
    'id'        => 'greet',
    'footer'    => '<goto expr="index.php?id=latest_crop&amp;session_callerid='.$_GET['session_callerid'].'"/>',
    'message'   => 'Hello',
    'message_end' => 'welcome to the crop seed program. 
You provided us with the following information: <break time="300"/> 
You selected the region ' . $user_data["region"] . ', village ' . $user_data["village"] . ', 
your property is ' . $user_data["cropsize"] . ' big, and the latest crop you reported was ' . $user_data["latestcrop"] .
        '<break time="100"/> Thank you for using our service. Very soon you will be able to hear custom made advices for your crops. Goodbye!',
]);
