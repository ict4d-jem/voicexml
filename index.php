<?php
header('Content-type: application/xml');

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<vxml version="2.1" application="/debug/root.vxml" xmlns="http://www.w3.org/2001/vxml"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.w3.org/2001/vxml
   http://www.w3.org/TR/voicexml20/vxml.xsd">

<?php

include "identity/main.php";
include "retrieve/main.php";

?>
</vxml>