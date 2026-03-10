<?php


define("DB_HOST", "127.0.0.1:3306");
define("DB_USERNAME", "sername_db");
define("DB_PASSWORD", "password_db");
define("DB_DATABASE", "name_db");

$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$connection) {
  die(`this is not good $connection`);
}
