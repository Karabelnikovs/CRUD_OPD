<?php
$page_title = "Create Fruit";


$config = require "config.php";
require "Database.php";

$db = new Database($config["config"]);


$query_string = "INSERT INTO fruits (name, calories) VALUES (?,?)";
$params = [];
$errors = [];
if($_SERVER["REQUEST_METHOD"]=="POST"){
$calories = (int)$_POST["calories"];
$name = trim($_POST["name"]);
if (!isset($_POST["name"]) || strlen($name)>50 || strlen($name)<2) {
    $errors["name"] = "Fruit's name must be between 2 and 50 letters";
}
else if (empty($calories) || !isset($calories) || !is_numeric($calories)) {
    $errors["calories"] = "Calories are required and must be a number";
}
   
   
   if(empty($errors)){
      $params = [
        $name,
        $calories
      ];
      $posts = $db->execute($query_string, $params);
      header("Location: /");
      exit();
   }
   
}

require "views/create.view.php";