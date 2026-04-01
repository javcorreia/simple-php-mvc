<?php
declare(strict_types=1);

if (!extension_loaded('pdo_sqlite')) {
    echo "PDO SQLite extension is not loaded" . PHP_EOL;
    exit;
}

$dbFile = __DIR__ . '/database.db';

try {
    // Create or open the SQLite database file
    $pdo = new PDO('sqlite:' . $dbFile);

    // Recommended PDO options
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create a table if it doesn't already exist
    $sql = <<<SQL
create table users
(
    id         INTEGER not null primary key autoincrement,
    name       TEXT    not null,
    email      TEXT    not null,
    password   TEXT    not null,
    created_at TEXT    not null,
    updated_at TEXT    not null
)
SQL;

    $pdo->exec($sql);

    echo "Database and table are ready.\n";
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage() . "\n";
    exit(1);
}