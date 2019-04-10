<?php

/**
 * @author Ersin Topuz
 */

$handle = popen("tail -f ./access.log 2>&1", 'r');
while(!feof($handle)) {
    $buffer = fgets($handle);
    echo "<pre>$buffer</pre>";
    ob_flush();
    flush();
}
pclose($handle);
