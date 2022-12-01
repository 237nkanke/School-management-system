<?php

include'data1.php';
include'header.php';
include'footer.php';

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="mainpage.css">

<div class="container1">
    <lable class="label" style="margin-left: 0px">Quick Options :</lable>
    <div>
        <div><span><img src="image/pic9.png"> Administration :</span></div>
        <div class="flaot">
            <button type ="button"class="btn btn-primary"><a href="adduser.php" class="btn btn-primary">
            Add users</a></button>
            <button type ="button"  class="btn btn-secondary"><a href="deluser.php" class="btn btn-secondary">
            Delet User</a></button>
            <button type ="button"  class="btn btn-success"><a href="eduser.php" class="btn btn-success">
            Edit User</a></button>
            <button type ="button"  class="btn btn-danger"><a href="alluser.php" class="btn btn-danger">
            All user Record</a></button>
        </div>
    </div>
   
</div>