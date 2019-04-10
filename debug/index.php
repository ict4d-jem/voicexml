<?php

/**
 * @author Ersin Topuz
 */

$handle = popen("tail -f ./access.log 2>&1", 'r');
while(!feof($handle)) {
    $buffer = fgets($handle);
    echo "$buffer<br/>\n";
    ob_flush();
    flush();
}
pclose($handle);
