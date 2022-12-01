<?php
    include'data1.php';
    include'header.php';
    include'footer.php';
    $count= "0";
    
    $query2 = "SELECT id FROM employee WHERE status='active';";
    $result2 = mysqli_query($link,$query2);
    while($row2 = mysqli_fetch_assoc($result2))
    {
        $count++;
    }
    $query = "SELECT id,firstname,lastname,admisionnum,gender,dob,phone,country,adress,joiningdate,status
     FROM employee WHERE status='active'";
    $result = mysqli_query($link,$query);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="activestudent.css">
<div id="table">
    <span class="results">All Student  :</span>
     <table class="table table-striped table-dark">
         <tr>
             <th class="nka" scope='col' style="font-weight: 10px;">ID :</th>
             <th class="nka" scope='col'>First Name</th>
             <th class="nka" scope='col'>Last Name</th>
             <th class="nka" scope='col'>Admisionnum</th>
             <th class="nka" scope='col'>Gender</th>
             <th class="nka" scope='col'>Date Of  Birth</th>
             <th class="nka" scope='col'>Phone</th>
             <th class="nka" scope='col'>Country</th>
             <th class="nka" scope='col'>Address</th>
             <th class="nka" scope='col'>joiningdate</th>
             <th class="nka" scope='col'>Status</th>
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
            </tr>
            <?php } ?>
            <div style="height: 40px; font-size: 20px;" class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="
            progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0"
            aria-valuemax="100">Total Active Employee <?php echo $count; ?></div>
            </div>
     </table>
     <?php @mysqli_free_result($result); ?>
</div>