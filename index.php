<?php

require_once __DIR__.'/bootstrap.php';

header('Content-type: application/xml');

if(
  isset($_GET) &&
  isset($_GET['id']) &&
  in_array($_GET['id'], array(
    'welcome',
    'identity',
    'region',
    'villages',
    'crop_size',
    'latest_crop',
    'thank_you'
  ))
)
  include $_GET['id'].'/main.php';
else
  include "identity/main.php";
