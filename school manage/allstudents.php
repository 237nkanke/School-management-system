<?php
include'data1.php';
include'header.php';
include'footer.php';
$count="0";
if(array_key_exists('search', $_POST)){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $class = $_POST['class'];
$query = "SELECT id,firstname,lastname,religion,gender,dob,phone,country,address,joiningdate,status,
fathername,fathermobile,fathercni,class FROM students WHERE firstname='$firstname' || lastname='$lastname' || gender='$gender' || class='$class' ORDER BY class asc ";
$result = mysqli_query($link,$query);
}
else{
    $query = "SELECT id,firstname,lastname,religion,gender,dob,phone,country,address,joiningdate,status,
fathername,fathermobile,fathercni,class FROM students  ORDER BY class DESC;";
$result = mysqli_query($link,$query);
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="activestudent.css">
<div id="table">
    <span class="results">Result  :</span>
    <form action="allstudents.php" method="Post">
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
                    <label for="inputgender">Gender</label>
                    <select id="inputgender" name="gender"  required="" class="form-control" id="gender" placeholder="Enter Gender">
                        <option >Male</option>
                        <option>Female</option>
                        <option >Other</option>
                    </select>
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
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <input class="btn btn-dark" type="submit" name="search" value="filter"><br><br>
                    </div>
                </div>
            </div>
            <span class="results">All Students information:</span>
            <table class="table table-striped table-dark">
         <tr>
             <th class="nka" scope='col' style="font-weight: 10px;">ID :</th>
             <th class="nka" scope='col'>First Name</th>
             <th class="nka" scope='col'>Last Name</th>
             <th class="nka" scope='col'>Religion</th>
             <th class="nka" scope='col'>Gender</th>
             <th class="nka" scope='col'>Date Of  Birth</th>
             <th class="nka" scope='col'>Phone</th>
             <th class="nka" scope='col'>Country</th>
             <th class="nka" scope='col'>Address</th>
             <th class="nka" scope='col'>joiningdate</th>
             <th class="nka" scope='col'>Status</th>
             <th class="nka" scope='col'>Fathername</th>
             <th class="nka" scope='col'>Fathermobile</th>
             <th class="nka" scope='col'>Father CNI</th>
             <th class="nka" scope='col'>Action</th>
         </tr>
         <?php
         while($row = mysqli_fetch_array($result)){
            $count = $count+1;
         
         ?>
         <tr class="<?php if(isset($classname)) echo $classname; ?>">
                <td><?php echo $row['id']?></td>
                <td><a href="individualstudentrecord.php?id=<?php echo $row['id']; ?>"><?php echo $row['firstname']?></a></td>
                <td><?php echo $row['lastname']?></td>
                <td><?php echo $row['religion']?></td>
                <td><?php echo $row['gender']?></td>
                <td><?php echo $row['dob']?></td>
                <td><?php echo $row['phone']?></td>
                <td><?php echo $row['country']?></td>
                <td><?php echo $row['address']?></td>
                <td><?php echo $row['joiningdate']?></td>
                <td><?php echo $row['status']?></td>
                <td><?php echo $row['fathername']?></td>
                <td><?php echo $row['fathermobile']?></td>
                <td><?php echo $row['fathercni']?></td>
            </tr>
            <?php } ?>
            <div style="height: 40px; font-size: 20px;" class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="
            progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0"
            aria-valuemax="100">Total  Students <?php echo $count; ?></div>
            </div>
     </table>
     <?php @mysqli_free_result($result); ?>
    </form>
</div>