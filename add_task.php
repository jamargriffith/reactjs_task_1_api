<?php 

require 'db_connect.php';

    if(isset($_GET["task"]))
    {
        $task = filter_var($_GET["task"], FILTER_SANITIZE_STRING);
        
        $query = $conn->prepare("Insert Into `task` (Task) Values(:task)");
        $query->bindParam(":task", $task);
        $query->execute();
        
    }


?>