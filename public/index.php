<?php

require "../vendor/autoload.php";

if (!extension_loaded('pdo_sqlite')) {
    echo "PDO SQLite extension is not loaded" . PHP_EOL;
    exit;
}

use Illuminate\Database\Capsule\Manager as DB;

// load .env
Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/../')->load();

$db = new DB();

$db->addConnection([
    "driver" => $_ENV['DB_DRIVER'] ?? "sqlite",
    "database" => $_ENV['DB_DATABASE'] ?? "../database/database.db",
    "charset" => $_ENV['DB_CHARSET'] ?? "utf8",
    "collation" => $_ENV['DB_COLLATION'] ?? "utf8_unicode_ci",
    "prefix" => $_ENV['DB_PREFIX'] ?? "",
]);

$db->setAsGlobal();
$db->bootEloquent();

$router = require "../routes/main.php";
