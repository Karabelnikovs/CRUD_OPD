<?php require "components/head.php"?>  
        <a href="/">Back</a>
           <h1>Edit a fruit</h1>
    <form method="POST">
        <label for="name">Name:</label><br>
            <input id='name' name='name' value="<?= $fruit[0]["name"] ?>"/><br>
            <?php 
            if(!empty($errors["name"])){
                echo "<br>" . $errors["name"] . "<br>";
            }
            ?><br>
        <label for="calories">Calories:</label><br>
            <input type="number" id="calories" name="calories" value="<?= $fruit[0]["calories"] ?>"/><br><br>
            <?php 
            if(!empty($errors["calories"])){
                echo $errors["calories"];
            }
            ?><br><br>
        <button>Update</button>
    </form>
    
</body>
</html>