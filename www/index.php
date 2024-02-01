<?php
$DB_HOST = "db";
$DB_SCHEMA = "bioimpedance";
$DB_USERNAME = "root";
$DB_PASSWORD = 1045;

try {
    $conn = new PDO("mysql:host=$DB_HOST;dbname=$DB_SCHEMA", $DB_USERNAME, $DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h2>Conectado ao banco de dados com sucesso!</h2>";
} catch (PDOException $e) {
    echo "<h2>Não foi possível conectar ao banco de dados!</h2>";
    echo $e->getMessage();
}

?>