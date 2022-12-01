<?php
$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "crud_php";


try {
    $db = new PDO("mysql:host={$db_servername}; dbname={$db_name}", $db_username, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOEXCEPTION $e) {
    $e->getMessage();
}

?>