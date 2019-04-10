<?php

/**
 * @author Ersin Topuz
 */

date_default_timezone_set('Europe/Amsterdam');

$h = fopen("./access.log", "a") or die("Unable to open file!");
fwrite($h, html_entity_decode(print_r(array("date"=>date(DateTime::ISO8601), $_GET), true), ENT_COMPAT, 'UTF-8'));
fclose($h);
