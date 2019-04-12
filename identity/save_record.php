<?php

include_once("identity_utils.php");

trigger_error(print_r($_REQUEST, true), E_USER_WARNING);
$regions = array(
    array(
        "name" => "Noord-Holland",
        "villages" => array("Amsterdam", "Aalkmar")
    ),
    array(
        "name" => "Drente",
        "villages" => array("Assen", "Oranje")
    ),
    array(
        "name" => "Flevoland",
        "villages" => array("Lelystad", "Almere")
    )
);

$filename = $_REQUEST['filename'];

$region = $regions[intval($_REQUEST["region"])]["name"];
$village = $regions[intval($_REQUEST["region"])]["villages"][intval($_REQUEST["village"])];
$crop_size = intval($_REQUEST["crop_size"]);

insert_user($filename, $region, $village, $crop_size);

if(ctype_digit($filename))
{

    $file  = $_FILES['identity']['tmp_name'];
    $ctype = $_FILES['identity']['type'];

    switch ($ctype)
    {
        case "video/3gpp":
        case "video/3gp":
            $ext = ".3gp";
            break;
        case "image/tiff":
            $ext = ".tiff";
            break;
        default:
            $ext = ".wav";
            break;
    }

    if(file_exists("records/".$filename))
        unlink("records/".$filename);

    if(move_uploaded_file($file, "records/".$filename.$ext))
        print "";
}
?><?xml version="1.0" encoding="UTF-8"?>
<vxml version="2.1">
</vxml>
