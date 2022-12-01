<?php 
include'data1.php';
include'header.php';
include'footer.php';
$query = "SELECT id,email FROM login ;";
$result = @mysqli_query($link,$query);
echo '<b>Delete User</b>';
?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="editstudent.css">
 <div id="table">
     <span id='results'>Result :</span>
     <table class="table table-striped table-dark">
         <tr>
             <th class="nka" scope='col' style="font-weight: 10px;">ID :</th>
             <th class="nka" scope='col'>Email</th>
             <th class="nka" scope='col'>Action</th>
         </tr>
         <?php
         while($row = @mysqli_fetch_array($result))
         {
         ?>
            <tr class="<?php if(isset($classname)) echo $classname; ?>">
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['email']?></td>
                <td><a href="delet-process4.php?id=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
            <?php } ?>
     </table>
     <?php @mysqli_free_result($result); ?>
     <button type ="button"  class="btn btn-danger"><a href="adminpage.php" class="btn btn-danger">
            Go back</a></button>
 </div>