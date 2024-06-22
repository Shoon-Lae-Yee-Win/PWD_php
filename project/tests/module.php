<?php

include ("../vendor/autoload.php");

use Faker\Factory as Faker;

use Helpers\Auth;
use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

Auth::check();
HTTP::redirect();

$mySQL = new MySQL;
$mySQL->connect();

$table = new UsersTable;
$table->insert();

$faker = Faker::create();
echo $faker->name;

