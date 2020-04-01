<?php 

require 'db_connect.php';

$tasks = array();

$query = $conn->query("Select * from task");

    while($result = $query->fetch())
    {
        array_push($tasks , array("Task" => $result["Task"], "Task_ID" => $result["UID"] ));
    }


    echo json_encode($tasks);
    
?>