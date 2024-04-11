<?php

$page_title = "Show Fruit";


$config = require "config.php";
require "Database.php";

$db = new Database($config["config"]);

$query_string = "SELECT * FROM fruits WHERE id = ?";
$params = [$_GET["id"]];


$fruit = $db->execute($query_string, $params)->fetchAll();



require "views/show.view.php";