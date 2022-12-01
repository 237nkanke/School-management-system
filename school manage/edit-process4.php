<?php
    ob_start();
    include'data1.php';
    include'header.php';
    include'footer.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM login WHERE id='" . $_GET["id"] . "'";
    if($result = mysqli_query($link, $sql))
    {
        $row = @mysqli_fetch_array($result);
    }else
    {
        echo "error";
    }
    if(array_key_exists("updatestudentinfo", $_POST)){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "UPDATE login SET email='$email', password=' $password'
        WHERE id LIKE '%{$id}%';";

$run = mysqli_query($link,$query);
echo "<div id='alert' class='alert alert-primary' role='alert'><b>Information Updaded!!</b></div>";
    }
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="insertstudent.css">
<div id="container">
    <form method="Post">
        <span class="headinge" ><b>users information : </b></span>
        <div id="student" class="information">
            <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="inputemsil">Email :</label>
                    <input type="text" name="email" value="<?php echo $row['Email']?>" required="" class="form-control" id="email" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputpassword">PassWord:</label>
                    <input type="text" name="password" value="<?php echo $row['Password']?>" required="" class="form-control" id="password" placeholder="Last Name">
                </div>
                </div>
                
                
             </div>
            </div>
            </div>
        </div>
        <div style="margin-top: 20px;">
            <fieldset class="form-group">
                <input style="margin-left: 43%;" class="btn btn-primary" type="submit" name="updatestudentinfo" 
                value="update The Information">
            </fieldset>
            <button type ="button"  class="btn btn-danger"><a href="adminpage.php" class="btn btn-danger">
            Go back</a></button>
        </div>
    </form>
</div>