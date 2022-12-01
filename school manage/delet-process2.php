<?php
    include'data1.php';
    ob_start();
    $sql = "DELETE FROM students WHERE id='" . $_GET["id"] . "'";
    if(mysqli_query($link, $sql)){
        header("location: deletstudent.php");
    }else{
        echo "Enter Deleting Record";
    }
?>