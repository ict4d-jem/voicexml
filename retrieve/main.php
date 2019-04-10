<?php

header('Content-type: application/xml');

if(isset($_GET['session_callerid']) && !empty($_GET['session_callerid']) && file_exists("./records/".$_GET['session_callerid'].".wav"))
{

echo <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<vxml version="2.1" application="http://188.166.74.234/debug/root.vxml">
  <form id="identify">
    <block>

      <goto next="./greet.vxml"/>
    </block>
  </form>
</vxml>
XML;

}
else {

echo <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<vxml version="2.1" application="http://188.166.74.234/debug/root.vxml">
  <form id="identify">
    <block>

      <goto next="./identification.vxml"/>
    </block>
  </form>
</vxml>
XML;

}
