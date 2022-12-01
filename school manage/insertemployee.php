<?php
ob_start();
include'data1.php';
include'header.php';
include'footer.php';
if(array_key_exists("submitstudentinfo", $_POST)){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lasname'];

    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $joiningdade = $_POST['joiningdate'];
    $status = $_POST['status'];
    $anmision = $_POST['admisionnum'];

    $query = "INSERT INTO employee (admisionnum,firstname,lastname,gender,dob,phone,country,adress,joiningdate,status) VALUES('$anmision','$firstname','$lastname','$gender','$dob','$phone','$country','$address','$joiningdade','$status');";
    $run = mysqli_query($link,$query);
    echo "<div id='alert' class='alert alert-success' role='alert'><b>employee Inserted!!</b></div>";
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="insertstudent.css">
<div id="container">
    <form method="Post">
        <div id="student" class="information">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputfirstname">First Name :</label>
                    <input type="text" name="firstname" required="" class="form-control" id="firstname" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputlastname">last Name :</label>
                    <input type="text" name="lastname" required="" class="form-control" id="lastname" placeholder="Last Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputadmisionnum">Admision number :</label>
                    <input type="text" name="admisionnum" required="" class="form-control" id="admisionnum" placeholder="Last Name">
                </div>
               
                <div class="form-group col-md-6">
                    <label for="inputgender">Gender</label>
                    <select id="inputgender" name="gender"  required="" class="form-control" id="gender" placeholder="Enter Gender">
                        <option >Male</option>
                        <option>Female</option>
                        <option >Other</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputdob">Date of Birth :</label>
                    <input type="date" name="dob" required="" class="form-control" id="dob" placeholder="YYYY-MM-DD">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputphone">Phone No :</label>
                    <input type="number" name="phone" required="" class="form-control" id="phone" placeholder="Tel">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputcountry">country :</label>
                    <input type="text" name="country" required="" class="form-control" id="country" placeholder="country">
                </div>
               
                <div class="form-group col-md-6">
                    <label for="inputadress">Quater :</label>
                    <input style="width: 540px;" type="text" name="address" required="" class="form-control" id="address" placeholder="Quater">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputjoiningdate">Joining Date :</label>
                    <input type="date" name="joiningdate" required="" class="form-control" id="joiningdate" placeholder="YYYY-MM-DD"> 
                </div>
                <div class="form-group col-md-6">
                    <label for="inputstatus">Status</label>
                    <select id="inputstatus" name="status"  required="" class="form-control" id="status">
                       
                        <option >active</option>
                        <option>un-active</option>
                    </select>
                </div>
            </div>

        <div style="margin-top: 20px;">
            <fieldset class="form-group">
                <input style="margin-left: 43%;" class="btn btn-primary" type="submit" name="submitstudentinfo" 
                value="Submit The Information">
            </fieldset>
        </div>
    </form>
</div>