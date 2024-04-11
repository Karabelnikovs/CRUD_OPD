<?php
$page_title = "Delete Fruit";

$config = require "config.php";
require "Database.php";

$db = new Database($config["config"]);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $query = "DELETE FROM fruits WHERE id=?";
    $params = [$_POST["id"]];
    $db->execute($query, $params);
}
require "views/index.view.php";
header("Location: /");
die();
