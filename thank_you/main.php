<?php
echo $twig->render('message.xml.twig', [
    'id'        => 'thank_you',
    'message'   => '<break time="1000"/>Thank you',
    'footer'    => '<submit next="identity/save_record.php" namelist="identity filename" method="post" enctype="multipart/form-data" fetchtimeout="10s"/>'
]);
