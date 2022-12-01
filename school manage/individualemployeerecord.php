<?php
    ob_start();
    include'data1.php';
    include'header.php';
    include'footer.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM employee WHERE id='" . $_GET["id"] . "'";
    if($result = mysqli_query($link, $sql))
    {
        $row = @mysqli_fetch_array($result);
    }else
    {
        echo "error";
    }
    if(array_key_exists("updatestudentinfo", $_POST)){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $admision = $_POST['admisionnum'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $phone = $_POST['phone'];
        $country = $_POST['country'];
        $address = $_POST['address'];
        $joiningdade = $_POST['joiningdate'];
        $status = $_POST['status'];
        $query = "UPDATE students SET firstname='$firstname', lastname=' $lastname', admisionnum='$admision',
        gender='$gender', dob=' $phone', phone='$phone', country='$country', adress='$address', joiningdate='$joiningdade',
        status='$status' WHERE id LIKE '%{$id}%';";

$run = mysqli_query($link,$query);
echo "<div id='alert' class='alert alert-primary' role='alert'><b>Information Updaded!!</b></div>";
    }
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="insertstudent.css">
<div id="container">
    <form method="Post">
        <span class="headinge" ><b>Employee information : </b></span>
        <div id="student" class="information">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputfirstname">First Name :</label>
                    <input type="text" name="firstname" value="<?php echo $row['firstname']?>" required="" class="form-control" id="firstname" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputlastname">last Name :</label>
                    <input type="text" name="lastname" value="<?php echo $row['lastname']?>" required="" class="form-control" id="lastname" placeholder="Last Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputadmisionnum">Admision number :</label>
                    <input type="text" name="admisionnum" required="" class="form-control" id="admisionnum" placeholder="Last Name">
                </div>
               
               
                <div class="form-group col-md-6">
                    <label for="inputgender">Gender</label>
                    <select id="inputgender" name="gender" value="<?php echo $row['gender']?>" required="" class="form-control" id="gender" placeholder="Enter Gender">
                        <option >Male</option>
                        <option>Female</option>
                        <option >Other</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputdob">Date of Birth :</label>
                    <input type="date" name="dob" value="<?php echo $row['dob']?>" required="" class="form-control" id="dob" placeholder="YYYY-MM-DD">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputphone">Phone No :</label>
                    <input type="number" name="phone" value="<?php echo $row['phone']?>" required="" class="form-control" id="phone" placeholder="Tel">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputcountry">country :</label>
                    <input type="text" name="country" value="<?php echo $row['country']?>" required="" class="form-control" id="country" placeholder="country">
                </div>
               
                <div class="form-group col-md-6">
                    <label for="inputadress">Quater :</label>
                    <input style="width: 540px;" type="text" name="address" value="<?php echo $row['adress']?>" required="" class="form-control" id="address" placeholder="Quater">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputjoiningdate">Joining Date :</label>
                    <input type="date" name="joiningdate" value="<?php echo $row['joiningdate']?>" required="" class="form-control" id="joiningdate" placeholder="YYYY-MM-DD"> 
                </div>
                <div class="form-group col-md-6">
                    <label for="inputstatus">Status</label>
                    <select id="inputstatus" name="status" value="<?php echo $row['status']?>" required="" class="form-control" id="status">
                        
                        <option >active</option>
                        <option>un-active</option>
                    </select>
                </div>
            </div>
            </div>
        </div>
        <div style="margin-top: 20px;">
            <fieldset class="form-group">
                <a href="allfaculty.php" style="margin-left: 43%;" class="btn btn-primary" 
                >Go back</a>
            </fieldset>
        </div>
    </form>
</div>