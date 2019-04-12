<?php
echo $twig->render('message.xml.twig', [
    'id'        => 'thank_you',
    'message'   => '<break time="1000"/>Thank you',
    'footer'    => '<block><submit next="identity/save_record.php?session_callerid='.$_GET['session_callerid'].'" namelist="recorded_record_name caller language latest_crop regions villages cropsize" method="post" enctype="multipart/form-data" fetchtimeout="10s"/></block>'
]);
