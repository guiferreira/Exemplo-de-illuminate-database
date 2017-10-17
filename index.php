<?php
require __DIR__ . '/vendor/autoload.php';
require 'database.php';

use App\User;

$users = User::all();

foreach ($users as $key => $value) {
  echo $value->name. " - ". $value->email;
}
