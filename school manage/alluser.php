<?php
include'data1.php';
include'header.php';
include'footer.php';
$count="0";
if(array_key_exists('search', $_POST)){
   $email = $_POST['email'];
$query = "SELECT id,email FROM login WHERE email='$email'  ORDER BY id asc ";
$result = mysqli_query($link,$query);
}
else{
    $query = "SELECT id,email FROM login  ORDER BY id DESC;";
$result = mysqli_query($link,$query);
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="activestudent.css">
<div id="table">
    <span class="results">Total :</span>
    <form action="alluser.php" method="Post">
            <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="inputemsil">Email :</label>
                    <input type="text" name="email" required="" class="form-control" id="email" placeholder="Email">
                </div>
            </div>
            <span class="results">All Users information:</span>
            <table class="table table-striped table-dark">
         <tr>
             <th class="nka" scope='col' style="font-weight: 10px;">ID :</th>
             <th class="nka" scope='col'>Email</th>
         </tr>
         <div class="form-row">
                    <div class="form-group col-md-4">
                    <input class="btn btn-dark" type="submit" name="search" value="filter"><br><br>
                    </div>
                </div>
         <?php
         while($row = mysqli_fetch_array($result)){
            $count = $count+1;
         
         ?>
         <tr class="<?php if(isset($classname)) echo $classname; ?>">
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['email']?></td>
            </tr>
            <?php } ?>
            <div style="height: 40px; font-size: 20px;" class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="
            progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0"
            aria-valuemax="100">Total Users<?php echo $count; ?></div>
            </div>
     </table>
     <?php @mysqli_free_result($result); ?>
     <button type ="button"  class="btn btn-danger"><a href="adminpage.php" class="btn btn-danger">
            Go back</a></button>
    </form>
</div>