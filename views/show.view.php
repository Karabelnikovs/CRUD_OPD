<?php require "components/head.php"?>
<p><a href="index">To home</a></p>
<h1><?= $fruit['0']["name"]?></h1>

    <p>One <?= $fruit['0']["name"]?> has <?= $fruit['0']["calories"]?> calories</p>

<p><a href="edit?id=<?= $fruit['0']['id'] ?>">Edit</a></p>
