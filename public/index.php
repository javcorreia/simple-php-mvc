<?php

require "../vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as DB;

$db = new DB();

$db->addConnection([
    "driver" => "sqlite",
    "database" => "../src/database/database.db",
    "charset" => "utf8",
    "collation" => "utf8_unicode_ci",
    "prefix" => "",
]);

$db->setAsGlobal();
$db->bootEloquent();

$router = require "../src/Routes/index.php";
