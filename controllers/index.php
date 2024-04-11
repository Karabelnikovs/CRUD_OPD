<?php
$config = require "config.php";
require "Database.php";

$db = new Database($config["config"]);
$page_title = "Fruits";
$params = [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["max_calories"]!= "") {
    $query_string = "SELECT * FROM fruits WHERE calories < ?";
    $params = [$_POST["max_calories"]];
    $fruits = $db->execute($query_string, $params)->fetchAll();
} else {
    $query_string = "SELECT * FROM fruits";
    $fruits = $db->execute($query_string, $params)->fetchAll();
}

require "views/index.view.php";
?>