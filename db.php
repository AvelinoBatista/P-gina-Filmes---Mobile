<?php
$db_name = "moviestar";
$db_host = "localhost";
$db_user = "moviestar";
$db_pass = "Ale@151180";

try {
    $conn = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
    exit;
}
?>
