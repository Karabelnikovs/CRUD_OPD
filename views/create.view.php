<?php require "components/head.php"?>
<a href="/">To home</a>

       <h1>Create Fruit!</h1>
<form method="POST">
            <label for="name">Name:</label><br>
            <input id='name' name='name' value="<?=$_POST['name'] ?? "" ?>"/>
        <br>
        
        <?php if(isset($errors['name'])){ ?> 
            <p> <?=$errors['name'] ?> </p> <?php } ?>
        <br>
     
     
        <label for="calories">Caloreis:</label><br>
            <input type="number" id='calories' name='calories' value="<?=$_POST['calories'] ?? "" ?>"/>
        <br>
        <?php if(isset($errors['calories'])){ ?> 
            <p> <?=$errors['calories'] ?> </p> <?php } ?>
        <br>
        <br>
        <button>Create</button>
</form>
    
    

</body>
</html>