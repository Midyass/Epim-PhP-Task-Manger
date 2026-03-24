<?php


define("DB_HOST", "127.0.0.1:3306");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "@Achrafs606@");
define("DB_DATABASE", "php_db");

$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$connection) {
  die(`this is not good $connection`);
}
