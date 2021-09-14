<?php

require_once '../vendor/autoload.php';
require '../assets/functions/main.php';

if (isset($_GET['c'])) {
  $country = $_GET['c'];
} else {
  $country = 'id_ID';
}

if (isset($_GET['g'])) {
  $gender = $_GET['g'];
} else {
  $gender = 'male';
}

echo getName($country, $gender);
