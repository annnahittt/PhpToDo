<html>
<link rel="stylesheet" href="./css/index.css">
<div>
<form action="add.php" method="post">
    <div class="todo">
    <input  class="todoInput" name="task" >
    <input type="submit" name="send" class="submit">
</div>
</form>
    <?php
    require './config/connect.php';
    global$pdo;
    global$task;

    echo  '<ul class="todoUl">';
    $query = $pdo->query('SELECT * FROM `todos` ORDER BY `id` DESC ');
    while ($row =$query->fetch(PDO::FETCH_OBJ)){
        echo '<div class="toDos"><li >'.$row->tasks.'  </li> <a href="/delete.php?id='.$row->id.'"<button class="delete"> Delete </button></a> </div>';

    }

    echo '</ul>';
    ?>
</div>




</html>










