<?php 
session_start();
    include 'connect.php';
    $id=(int) $_GET['id'];
    $result= $mysqli->query("delete from subject where id=$id")or die($mysqli->error);
    if($result)
    {
        $_SESSION['delete']="1";
        header("Location: ../Public/list.php");
    }
    
?>