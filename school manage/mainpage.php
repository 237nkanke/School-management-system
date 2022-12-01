<?php

include'data1.php';
include'header.php';
include'footer.php';
$count1 = "0";
$count2 = "0";
$count3 = "0";
$count4 = "0";
$count5 = "0";
$count6 = "0";

$query1 = "SELECT id FROM students;";
$result1 = mysqli_query($link,$query1);
while($row1 = mysqli_fetch_assoc($result1))
{
    $count1++;
}
$query2 = "SELECT id FROM students WHERE status='active';";
$result2 = mysqli_query($link,$query2);
while($row2 = mysqli_fetch_assoc($result2))
{
    $count2++;
}
$query3 = "SELECT id FROM students WHERE status='un-active';";
$result3 = mysqli_query($link,$query3);
while($row3 = mysqli_fetch_assoc($result3))
{
    $count3++;
}
$query4 = "SELECT id FROM employee ;";
$result4 = mysqli_query($link,$query4);
while($row4 = mysqli_fetch_assoc($result4))
{
    $count4++;
}

$query5 = "SELECT id FROM employee WHERE status='active';";
$result5 = mysqli_query($link,$query5);
while($row5 = mysqli_fetch_assoc($result5))
{
    $count5++;
}

$query6 = "SELECT id FROM employee WHERE status='un-active';";
$result6 = mysqli_query($link,$query6);
while($row6 = mysqli_fetch_assoc($result6))
{
    $count6++;
}


?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="mainpage.css">
<div class = "container">
    <div class="form-row">
        <div id="students">
            <lable class="label"><img src="image/pic4.jpg"style="width:55px; height: 55px;">Students Informations :</lable>
            <ul class="ul">
                <li><p class="test">total students : <?php echo $count1; ?> </p></li>
                <li><p class="test">active students : <?php echo $count2; ?> </p></li>
                <li><p class="test">un-active students  : <?php echo $count3; ?> </p></li>
            </ul>
        </div>
        <div class="vl"></div>
        <div id="faculty">
            <lable class="label"><img src="image/pic3.jpg"style="width:55px; height: 55px;">Faculty Informations :</lable>
            <ul class="ul">
                <li><p class="test">total Employee : <?php echo $count4; ?> </p></li>
                <li><p class="test">active Employee : <?php echo $count5; ?> </p></li>
                <li><p class="test">un-active Employee : <?php echo $count6; ?> </p></li>
            </ul>
        </div>
    </div>
</div>
<div class="container1">
    <lable class="label" style="margin-left: 0px">Quick Options :</lable>
    <div>
        <div><span><img src="image/pic9.png"> Students :</span></div>
        <div class="flaot">
            <button type ="button" onclick="window.location.herf = 'insertstudent.php'" class="btn btn-primary">
            Insert student</button>
            <button type ="button" onclick="window.location.herf = 'deletstudent.php'" class="btn btn-secondary">
            Delet student</button>
            <button type ="button" onclick="window.location.herf = 'editstudent.php'" class="btn btn-success">
            Edit student</button>
            <button type ="button" onclick="window.location.herf = 'allstudent.php'" class="btn btn-danger">
            All student Record</button>
            <button type ="button" onclick="window.location.herf = 'activestudent.php'" class="btn btn-warning">
            Insert student</button>
        </div>
    </div>
    <div>
        <div><span><img src="image/pic3.jpg"> Faculty :</span></div>
        <div class="flaot">
        <button type ="button" onclick="window.location.herf = 'instertemployee.php'" class="btn btn-primary">
            Insert enployee</button>
            <button type ="button" onclick="window.location.herf = 'deletenployee.php'" class="btn btn-secondary">
            Delet enployee</button>
            <button type ="button" onclick="window.location.herf = 'editenployee.php'" class="btn btn-success">
            Edit enployee</button>
            <button type ="button" onclick="window.location.herf = 'allenployee.php'" class="btn btn-danger">
            All enployee Record</button>
            <button type ="button" onclick="window.location.herf = 'activeenployee.php'" class="btn btn-warning">
            Insert enployee</button>
        </div>
    </div>
    <div>
        <div><span><img src="image/pic10.jpg"> Certificate :</span></div>
        <div class="flaot">
        <button type ="button" onclick="window.location.herf = 'studentcertificate.php'" class="btn btn-primary">
           Student Leaving ertificate</button>
            <button type ="button" onclick="window.location.herf = 'employeecertificate.php'" class="btn btn-secondary">
            Employee Leaving Certificate</button>
            <button type ="button" onclick="window.location.herf = 'sttermination.php'" class="btn btn-success">
            Student Termination Certificate</button>
            <button type ="button" onclick="window.location.herf = 'emtermination.php'" class="btn btn-danger">
            Employee Termination Certificate</button>
            <button type ="button" onclick="window.location.herf = 'allcertificate.php'" class="btn btn-warning">
           All Certificate Recorded</button>
        </div>
    </div>
    <div>
        <div><span><img src="image/pic7.jpg"> Fee :</span></div>
        <div class="flaot">
        <button type ="button" onclick="window.location.herf = 'instertFee.php'" class="btn btn-primary">
           Peyment</button>
            <button type ="button" onclick="window.location.herf = 'discountstudent.php'" class="btn btn-secondary">
           Add discount</button>
            <button type ="button" onclick="window.location.herf = 'discountrecord.php'" class="btn btn-success">
           See discount record</button>
            <button type ="button" onclick="window.location.herf = 'incompletfee.php'" class="btn btn-danger">
            Incomplet Fee Records</button>
            <button type ="button" onclick="window.location.herf = 'fullfeerecordstudent.php'" class="btn btn-warning">
            Comlpet Fee record</button>
        </div>
    </div>
    <div>
        <div><span><img src="image/pic6.jpg"> Result :</span></div>
        <div class="flaot">
        <button type ="button" onclick="window.location.herf = 'instertResult.php'" class="btn btn-primary">
           Add Result</button>
            <button type ="button" onclick="window.location.herf = 'deletResult.php'" class="btn btn-secondary">
            Delet Result</button>
            <button type ="button" onclick="window.location.herf = 'editResult.php'" class="btn btn-success">
            Edit Result</button>
            <button type ="button" onclick="window.location.herf = 'marksheet.php'" class="btn btn-danger">
            Mark sheet</button>
            <button type ="button" onclick="window.location.herf = 'resultrecord.php'" class="btn btn-warning">
            Result Record</button>
        </div>
    </div>
</div>