<?php
ob_start();
include'data1.php';
include'header.php';
include'footer.php';
if(array_key_exists("submitstudentinfo", $_POST)){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO login (email,password) VALUES('$email','$password');";
    $run = mysqli_query($link,$query);
    echo "<div id='alert' class='alert alert-success' role='alert'><b>User Inserted!!</b></div>";
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="insertstudent.css">
<div id="container">
    <form method="Post">
        <div id="student" class="information">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputemsil">Email :</label>
                    <input type="text" name="email" required="" class="form-control" id="email" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputpassword">PassWord:</label>
                    <input type="text" name="password" required="" class="form-control" id="password" placeholder="Last Name">
                </div>
               

        <div style="margin-top: 20px;">
            <fieldset class="form-group">
                <input style="margin-left: 43%;" class="btn btn-primary" type="submit" name="submitstudentinfo" 
                value="Submit The Information">
            </fieldset>
        </div>
        <button type ="button"  class="btn btn-danger"><a href="adminpage.php" class="btn btn-danger">
            Go back</a></button>
    </form>
</div>