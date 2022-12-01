<?php
    include'data1.php';
    ob_start();
    $sql = "DELETE FROM login WHERE id='" . $_GET["id"] . "'";
    if(mysqli_query($link, $sql)){
        header("location: deluser.php");
    }else{
        echo "Enter Deleting Record";
    }
?>