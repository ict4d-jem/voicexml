<?php

/**
 * @author Ersin Topuz
 */

$h = fopen("./access.log", "w") or die("Unable to open file!");
fwrite($h, html_entity_decode(print_r($_GET, true), ENT_COMPAT, 'UTF-8'));
fclose($h);
