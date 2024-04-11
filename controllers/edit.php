<?php

$page_title = "Edit Fuit";



$config = require "config.php";
require "Database.php";

$db = new Database($config["config"]);

$query_string = "SELECT * FROM fruits WHERE id = ?";
$params = [$_GET["id"]];


$fruit = $db->execute($query_string, $params)->fetchAll();


$errors=[];
$update_string = "UPDATE fruits SET name=?, calories=? WHERE id = ?";
$update_params = [];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$calories = (int)$_POST["calories"];
$name = trim($_POST["name"]);
if (!isset($_POST["name"]) || strlen($name)>50 || strlen($name)<2) {
    $errors["name"] = "Fruit's name must be between 2 and 50 letters";
}
else if (empty($calories) || !isset($calories) || !is_numeric($calories)) {
    $errors["calories"] = "Calories are required and must be a number";
}





   $update_params = [
        $name,
        $calories,
        $_GET["id"]
   ];
   $updated = $db->execute($update_string, $update_params)->fetchAll();

   if(empty($errors)){
       header("Location: /");
       die();
   }
}


require "views/edit.view.php";