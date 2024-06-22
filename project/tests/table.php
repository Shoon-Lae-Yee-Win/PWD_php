<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$table = new UsersTable(new MySQL);
$id = $table->insert([
    "name" => "ALice",
    "email" => "alice@gmail.com",
    "phone" => "0912345678",
    "address" => "Some Address",
    "password" => "password"
]);

echo $id;