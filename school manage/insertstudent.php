<?php
ob_start();
include'data1.php';
include'header.php';
include'footer.php';
if(array_key_exists("submitstudentinfo", $_POST)){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $religion = $_POST['religion'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $joiningdade = $_POST['joiningdate'];
    $status = $_POST['status'];
    $fathername = $_POST['fathername'];
    $fathermobile = $_POST['fathermobile'];
    $fathercni = $_POST['fathercni'];
    $mothername= $_POST['mothername'];
    $mothermobile = $_POST['mothermobile'];
    $mothercni = $_POST['mothercni'];
    $class = $_POST['class'];

    $query = "INSERT INTO students (firstname,lastname,religion,gender,dob,phone,country,address,joiningdate,status,fathername,fathermobile,fathercni,mothername,mothermobile,
    mothercni,class) VALUES('$firstname','$lastname','$religion','$gender','$dob','$phone','$country','$address','$joiningdade','$status','$fathername','$fathermobile','$fathercni','$mothername','$mothermobile','$mothercni','$class');";
    $run = mysqli_query($link,$query);
    echo "<div id='alert' class='alert alert-success' role='alert'><b>Student Inserted!!</b></div>";
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
                    <label for="inputclass">class :</label>
                    <select id="inputgender" name="class"  required="" class="form-control" id="class" placeholder="Enter class">
                        <option >Playgroup</option>
                        <option>Nurcery</option>
                        <option >one</option>
                        <option >two</option>
                        <option >three</option>
                        <option >four</option>
                        <option >five</option>
                        <option >six</option>
                        <option >from 0ne</option>
                        <option >from two</option>
                        <option >form three</option>
                        <option >form four</option>
                        <option >form five</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputreligion">Religion :</label>
                    <select id="inputreligion" name="religion"  required="" class="form-control" id="religion" placeholder="Chose Religion">
                        <option >christian</option>
                        <option>Islam</option>
                        <option >None</option>
                    </select>
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
            <div class="heading"><p class="bad"><u>Employee father/Husband Information</u></p>
             <div id="father" class="information">


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputfathername">Name :</label>
                        <input type="text" name="fathername" required="" class="form-control" id="fathername" placeholder="Fathers Name"> 
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputfathermobile">Mobile No :</label>
                        <input type="number" name="fathermobile" required="" class="form-control" id="fathermobile" placeholder="Mobile"> 
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputfathercni">CNI :</label>
                        <input type="number" name="fathercni" required="" class="form-control" id="fathercni" placeholder="0000-000000-0"> 
                    </div>
                </div>
             </div>
            </div>
            <div class="heading"><p class="bad"><u>Mother Information</u></p>
             <div id="mother" class="information">


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputmothername">Name :</label>
                        <input type="text" name="mothername" required="" class="form-control" id="mothername" placeholder="mothers Name"> 
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputmothermobile">Mobile No :</label>
                        <input type="number" name="mothermobile" required="" class="form-control" id="mothermobile" placeholder="Mobile"> 
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputmothercni">CNI :</label>
                        <input type="number" name="mothercni"  class="form-control" id="mothercni" placeholder="0000-000000-0"> 
                    </div>
                </div>
             </div>
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