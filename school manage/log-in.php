<?php



$error="";
if(array_key_exists("submit", $_POST))
{

    include'data1.php';

    if(!$_POST['email']){
        $error[] ="An email address is required";
    }
    if(!$_POST['password']){
        $error[] ="A password is required";
    }
    if($error !=""){
        $error[] ="there are errors";
    }
    else
    {
        $query = "SELECT * FROM login WHERE Email = '".mysqli_real_escape_string($link,$_POST['email'])."'";
        $result = mysqli_query($link,$query);
        $row = mysqli_fetch_array($result);
        if(@$row['Email'] != $_POST['email'])
        {
            $error = ":There are errors in your form:<br>";
            $error = "Your email is wrong please try again!!";
        }
        if(isset($row)){
            if($row['Password'] == $_POST['password']){
            header("location: mainpage.php");
            }else{
                $error = ":There are errors in your form:<br>";
                $error = "Your password is wrong please try again!!";
            }
        }

    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="log-in.css">
        <title>THe Champions School Login-Page</title>
    </head>
    <body>
        <nav class="navbar fixed-top navbar navbar-dark bg-dark">
            <p class="yan2">WE LEARN TO KNOW AND IMPACT</p>
        </nav>
        <div class="container">
            <h1 class="heading"><b>:LOGIN PAGE:</b></h1>
            <h2 class="heading1"><b>The Champions School</b></h2>

            <form  method="POST" class="form" >
                <div class="form-group">
                    <label><b>Email<b></label><br />
                    <input class="form-control border" type="email"   name="email"  placeholder="enter your email" autofocus />
                </div>
                <div class="form-group">
                    <label><b>Password<b></label>
                    <input type="password" class="form-control border" required="" name="password" placeholder="enter your password" />
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <div class = "error"><?php if ($error!="")
                {
                    echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
                }?></div>
            </form>

        </div>

        <script src="http://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="
        sha384-KJ3o2DKtIkvYIK3UENzmM7KCKRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpGS5KKN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9.umd/popper.min.js" integrity="
        sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="
        sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxsfFWpi1MquVdAyjUar5+76PVmY1" crossorigin="anonymous"></script>
    </body>

</html>