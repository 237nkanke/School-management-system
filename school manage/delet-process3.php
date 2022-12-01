<?php
    include'data1.php';
    ob_start();
    $sql = "DELETE FROM employee WHERE id='" . $_GET["id"] . "'";
    if(mysqli_query($link, $sql)){
        header("location: deletemployee.php");
    }else{
        echo "Enter Deleting Record";
    }
?>