<?php

echo "<h2>Database Test</h2>";

echo "<pre>";

echo "DB_HOST: ";
var_dump(getenv('DB_HOST'));

echo "\nDB_PORT: ";
var_dump(getenv('DB_PORT'));

echo "\nDB_DATABASE: ";
var_dump(getenv('DB_DATABASE'));

echo "\nDB_USERNAME: ";
var_dump(getenv('DB_USERNAME'));

echo "\nDB_PASSWORD: ";
echo getenv('DB_PASSWORD') ? "SET" : "NOT SET";

echo "</pre>";

require_once __DIR__ . '/config/database.php';

echo "<h2 style='color:green'>DATABASE CONNECTED SUCCESSFULLY!</h2>";