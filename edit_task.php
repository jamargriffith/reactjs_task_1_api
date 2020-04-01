<?php 

require 'db_connect.php';

if(isset($_GET["task_id"]) && isset($_GET["change"]))
{
    $task_id = filter_var($_GET["task_id"], FILTER_SANITIZE_NUMBER_INT);
    $change = filter_var($_GET["change"], FILTER_SANITIZE_STRING);
    
    $query = $conn->prepare("Update `task` Set Task = :change Where UID = :task_id");
    $query->bindParam(":change", $change);
    $query->bindParam(":task_id", $task_id);
    $query->execute();
    
}


?>