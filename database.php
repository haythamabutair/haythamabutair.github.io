<?php

echo("got into");
$server = "sql2k1201.discountasp.net:1443";
$login = "SQL2012_899210_isaveplus_user";
$pass = "";

// Connect to MSSQL
$link = mssql_connect($server, $login, $pass);

if (!$link) {
    die('Something went wrong while connecting to MSSQL'.mssql_get_last_message());
}
echo('we got in');

?>