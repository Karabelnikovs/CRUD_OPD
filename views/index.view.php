    <?php require "components/head.php"?>

<h1>Fruits</h1>
 <form method="POST">
    <label for='max_calories'>Calories less than...</label>
 <input name='max_calories' value='<?= ($_POST["max_calories"] ?? '') ?>'/>
 <button>Filter</button>
 </form>

 <br>

<ul>

<?php foreach($fruits as $fruit) { ?>
    <li>
        One <a href="/show?id=<?= $fruit['id'] ?>"><?=htmlspecialchars($fruit["name"])?></a> has <?=$fruit["calories"]?> calories 
    <form method="POST" class="delete-form" action="/delete"> 
        <input type="hidden" name="id" value=<?= $fruit['id'] ?> /> 
        <button>Delete</button>
    </form>
    </li>
<?php } ?>

</ul>
<p><a href="create">Create Fruit...</a></p>

</body>
</html>
