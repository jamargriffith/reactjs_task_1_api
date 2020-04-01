<?php 

require 'db_connect.php';

if(isset($_GET["task_id"]))
{
    
    $task_id = filter_var($_GET["task_id"], FILTER_SANITIZE_NUMBER_INT);
    
    $query = $conn->prepare("Delete From `task` Where UID = :task_id");
    $query->bindParam("task_id", $task_id);
    $query->execute();
    
}


?>