<?php
ob_start();
if (array_key_exists("logout", $_POST)){
    header("location: log-in.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="header.css">
	<title>drop down</title>
</head>
<body>
<nav class="navbar  navbar navbar-light " style='background-color: white;' navbar navbar-dark
    bg-primary justify-content-right>
        <form class="form-inline" method="post">
            <button id="button" onclick="myFunction()" class="btn btn-outline-dark my-2 my-sm-0" type="submit"
           name="logout">Log Out</button>
        </form>
    </nav>
    <div class="clear"></div>
    <div id="menu-bar-container" class="noprint">
        <div id="menu-bare"> 
            <h1>THE CHAMPIONS SCHOOL </h1>
            <h2> (we learn to inpact)</h2>
        </div>
    </div>
	<div class="menu_bar">
		<h1 class="logo"><a href="mainpage.php">Home</a></h1>

		<ul>
            <li>
                <a href="#">Menu <i class="fas fa-caret-down"></i> </a>

                <div class="dropdown_menu">
                    <ul>
                        <li><a href="allstudents.php">All student</a></li>
                        <li><a href="allfaculty.php">All Faculty-Membaers</a></li>
                        <li><a href="allfeerecord.php">Fee record</a></li>
                        <li><a href="allcertificaterecord.php">All Certificate Issued</a></li>
                        
                    <div class="dropdown-divider"></div>
                        <li><a href="about.php">About</a></li>
                    <ul>
                </div>
            </li>
			<li>
                <a href="#">Manage Employee <i class="fas fa-caret-down"></i> </a>

                <div class="dropdown_menu">
                    <ul>
                    <li><a href="insertemployee.php">Insert Employee</a></li>
                    <li><a href="editemployeee.php">Edit Employee</a></li>
                    <li><a href="activeemployee.php">Active employee</a></li>
                    <li><a href="unactiveemployee.php">Un-Active employee</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a href="deletemployee.php">Delet Employee</a></li> 
                    <ul>
                </div>
            </li>
            <li>
                <a href="#">Manage Student <i class="fas fa-caret-down"></i> </a>

                <div class="dropdown_menu">
                    <ul>
                    <li><a href="insertstudent.php">Insert Student</a></li>
                    <li><a href="editstudent.php">Edit Student</a></li>
                    <li><a href="activestudent.php">Active Student</a></li>
                    <li><a href="unactivestudent.php">Un-Active Student</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a href="deletstudent.php">Delet Student</a></li> 
                    <ul>
                </div>
            </li>
			<li>
                <a href="#">Manage Fee Record <i class="fas fa-caret-down"></i> </a>

                <div class="dropdown_menu">
                    <ul>
                    <li><a href="enterfee.php">Enter Fee</a></li>
                    <li><a href="allfee.php">Show All Student Fee</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a href="discountstudent.php">Add Discount</a></li>
                    <li><a href="discountrecord.php">Discount Record</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a href="generatefeetable.php">Generate Fee Table</a></li>
                    <li><a href="printvoucher.php">Print Fee Voucher</a></li> 
                    <li><a href="reprintvoucher.php">Re-print Voucher</a></li> 
                    <div class="dropdown-divider"></div>
                    <li><a href="fullfeerecordstudent.php">Complet Student Fee Record</a></li> 
                    <li><a href="defaultlist.php">Default List</a></li>  
                    <ul>
                </div>
            </li>
            <li>
                <a href="#">Certificate <i class="fas fa-caret-down"></i> </a>

                <div class="dropdown_menu">
                    <ul>
                    <lable class="yan">Student Certificate</lable>
                    <li><a href="slivingcertificate.php">Leaving Certificate</a></li>
                    <li><a href="stransfercertificate.php">Transfer Certificate</a></li>
                    <li><a href="sterminationcertificatet.php">Termination Certificate</a></li>
                    <div class="dropdown-divider"></div>
                    <lable class="yan">faculty Certificate</lable>
                    <li><a href="flivingcertificate.php">Leaving Certificate</a></li>
                    <li><a href="fperformancecertificate.php">performance Certificate</a></li> 
                    <li><a href="sterminationcertificatet.php">Termination Certificate</a></li>
                    <ul>
                </div>
            </li>
            <li>
                <a href="#">Certificate Record <i class="fas fa-caret-down"></i> </a>

                <div class="dropdown_menu">
                    <ul>
                    <lable class="yan">Student Certificate</lable>
                    <li><a href="slivingcertificaterecord.php">StudentLeaving Certificate</a></li>
                    <li><a href="stransfercertificaterecord.php">StudentTransfer Certificate</a></li>
                    <li><a href="sterminationcertificatetrecord.php">StudentTermination Certificate</a></li>
                    <div class="dropdown-divider"></div>
                    <lable class="yan">faculty Certificate</lable>
                    <li><a href="flivingcertificaterecord.php">FacultyLeaving Certificate</a></li>
                    <li><a href="fperformancecertificaterecord.php">Facultyperformance Certificate</a></li> 
                    <li><a href="sterminationcertificatetrecord.php">FacultyTermination Certificate</a></li>
                    <ul>
                </div>
            </li>
			<li>
                <a href="#">Manage Result <i class="fas fa-caret-down"></i> </a>

                <div class="dropdown_menu">
                    <ul>
                    <li><a href="enterresult.php">Enter Result</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a href="deleteresult.php">Delete Result</a></li>
                    <li><a href="editresult.php">Edit Result</a></li>
                    <li><a href="editmarks.php">Edit Marks</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a href="printresult.php">Print Result</a></li>
                    <li><a href="reprintresult.php">Re-prnt Result</a></li> 
                    <div class="dropdown-divider"></div>
                    <li><a href="marksheet.php">Mark Sheet</a></li> 
                    <li><a href="resultrecord.php">Result Record</a></li>  
                    <ul>
                </div>
            </li>
			<h1 class="logo"><a href="admin.php">control Panel</a></h1>
		</ul>
	</div>
    <script>
        function myFunction(button){
            var txt;
            if(confirm("Do you really want to logout?")){
                txt ="logout";
            }else{
                txt = "You pressed canced!";
                die
            }
            document.getElementById("button").innerHTML = txt;
        }
    </script>
</body>
</html>