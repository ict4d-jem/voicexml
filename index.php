<?php

require_once __DIR__.'/bootstrap.php';

if(
  isset($_GET) &&
  isset($_GET['id']) &&
  in_array($_GET['id'], array(
    'identity',
    'region',
    'village',
    'crop_size'
  )
)
  include $_GET['id'].'/main.php';
else
  include "identity/main.php";
