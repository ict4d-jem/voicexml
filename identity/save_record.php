<?php

$filename = $_REQUEST['filename'];

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

  if(file_exists("./records/".$filename))
    unlink("./records/".$filename);

  if(move_uploaded_file($file, "./records/".$filename.$ext))
    print "";
}
?><?xml version="1.0" encoding="UTF-8"?>
<vxml version="2.1">
</vxml>