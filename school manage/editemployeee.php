<?php 
include'data1.php';
include'header.php';
include'footer.php';
$query = "SELECT id,firstname,lastname,admisionnum,gender,dob,phone,country,adress,joiningdate,status
 FROM employee ;";
$result = @mysqli_query($link,$query);
echo '<b>Edit Employee</b>';
echo '<div id="container">';
echo '<form method="post">';
        echo '<span class="heading">Enter Required Information : </span>';
        echo '<div id="student" class="information">';
                echo '<div class="form-row">';
                    echo '<div class="form-group col-md-6">';
                        echo ' <label for="inputfirstname">First Name :</label>';
                        echo'<input type="text" name="firstname" required="" class="form-control" id="firstname" placeholder="First Name">';
                    echo '</div>';
                    echo '<div class="form-group col-md-6">';
                        echo '<label for="inputlastname">last Name :</label>';
                        echo '<input type="text" name="lastname" required="" class="form-control" id="lastname" placeholder="Last Name">';
                    echo '</div>';
                echo '</div>';

        echo '</div>';
        echo '<div style="margin-top: 20px;">';

                echo '<fieldset class="form-group">';
                    echo '<input style="margin-left: 43%;" class="btn btn-primary" type="submit" name="submitstudentinfo" 
                    value="Submit The Information">';
                echo'</fieldset>';
        
        echo '</div>';
echo '</form>';
echo '</div>';
$n = 1;
if (array_key_exists("submitstudentinfo",$_POST))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $query = "SELECT id,firstname,lastname,admisionnum,gender,dob,phone,country,adress,joiningdate,status
     FROM employee WHERE firstname='$firstname' || lastname='$lastname' ;";
    $result = @mysqli_query($link,$query);
}
?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="editstudent.css">
 <div id="table">
     <span id='results'>Result :</span>
     <table class="table table-striped table-dark">
         <tr>
             <th class="nka" scope='col' style="font-weight: 10px;">ID :</th>
             <th class="nka" scope='col'>First Name</th>
             <th class="nka" scope='col'>Last Name</th>
             <th class="nka" scope='col'>Admision number</th>
             <th class="nka" scope='col'>Gender</th>
             <th class="nka" scope='col'>Date Of  Birth</th>
             <th class="nka" scope='col'>Phone</th>
             <th class="nka" scope='col'>Country</th>
             <th class="nka" scope='col'>Address</th>
             <th class="nka" scope='col'>joiningdate</th>
             <th class="nka" scope='col'>Status</th>
             <th class="nka" scope='col'>Action</th>
         </tr>
         <?php
         while($row = @mysqli_fetch_array($result))
         {
         ?>
            <tr class="<?php if(isset($classname)) echo $classname; ?>">
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['firstname']?></td>
                <td><?php echo $row['lastname']?></td>
                <td><?php echo $row['admisionnum']?></td>
                <td><?php echo $row['gender']?></td>
                <td><?php echo $row['dob']?></td>
                <td><?php echo $row['phone']?></td>
                <td><?php echo $row['country']?></td>
                <td><?php echo $row['adress']?></td>
                <td><?php echo $row['joiningdate']?></td>
                <td><?php echo $row['status']?></td>
                <td><a href="edit-process3.php?id=<?php echo $row['id']; ?>">Update</a></td>
            </tr>
            <?php } ?>
     </table>
     <?php @mysqli_free_result($result); ?>
 </div>