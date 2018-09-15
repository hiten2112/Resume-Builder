<?php
 ob_start();
 session_start();
 include_once 'dbconnect.php';

 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
 }
 // select loggedin users detail
 $res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysqli_fetch_array($res);
 $var = $userRow['userName'];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['userEmail']; ?></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<style>
.form{
  padding-top:100px;

}
.space{
  margin:5px;
}
p
{
  text-align: center;
  padding-bottom: 10px;
  padding-top: 10px;
}
.submit{
  padding-top: 10px;
  width:100px;
}
</style>
<body>

 <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            <li><a href="#">Resume</a></li>
            <li><a href="#">CV</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
     <span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $userRow['userEmail']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  <div class="container">
  <section class="form">
    <form class="form-horizontal" method="POST" action="action.php">
      <div class="form-group">
        <p><i>*Personal Information</i></p>
        <label class="control-label col-sm-2" for="FirstName">FirstName:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control space" name="FirstName" id="text" placeholder="Enter Your FirstName">
        </div>
        <label class="control-label col-sm-2" for="LastName">LastName:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control space" name="LastName" id="text" placeholder="Enter Your SurName">
        </div>
        <label class="control-label col-sm-2" for="MobileNumber">Mobile No:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control space" name="MobileNumber" id="number" placeholder="Enter Your FirstName">
        </div>
        <label class="control-label col-sm-2" for="Designation">Designation:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control space" name="Designation" id="text" placeholder="Enter Your Desination">
        </div>

        <p><i>*Education Qualification</i></p>
        <label class="control-label col-sm-2" for="SchoolName">School/College:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control space" name="SchoolName" id="text" placeholder="Enter Your School(12th Grade)">
        </div>
        <label class="control-label col-sm-2" for="Percentage">Percentage:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control space" name="School_Percentage" id="number" placeholder="Enter Your Percentage(12th Grade)">
        </div>
        <label class="control-label col-sm-2" for="CollegeName">College:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control space" name="CollegeName" id="text" placeholder="Enter Your College(Graduation)">
        </div>
        <label class="control-label col-sm-2" for="Percentage">Percentage:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control space" name="College_Percentage" id="number" placeholder="Enter Your Percentage(Graduation)">
        </div>

        <p><i>*Skills</i></p>
        <label class="control-label col-sm-2" for="Skill1">Skill 1:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control space" name="Skill1" id="text" placeholder="Enter Your Skill">
        </div>
        <label class="control-label col-sm-2" for="Skill2">Skill 2:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control space" name="Skill2" id="text" placeholder="Enter Your Skill">
        </div>


        <p><i>*Experience</i></p>
        <label class="control-label col-sm-2" for="CompanyName1">Company:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control space" name="CompanyName1" id="text" placeholder="Company Name">
        </div>
        <label class="control-label col-sm-2" for="Designation1">Designation:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control space" name="Designation1" id="text" placeholder="Enter Your Desination(AT Company)">
        </div>
        <label class="control-label col-sm-2" for="Location1">Location:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control space" name="Location1" id="text" placeholder="Enter Your Location of Company">
        </div>
        <label class="control-label col-sm-2" for="Period1">Period:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control space" name="Period1" id="number" placeholder="Time Period at Company(in years)">
        </div>

        <p><i>*Extra Curricular Activity</i></p>
        <label class="control-label col-sm-2" for="Activity1">Activity 1:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control space" name="Activity1" id="text" placeholder="Enter Extra Curricular Activity">
        </div>
        <label class="control-label col-sm-2" for="Activity2">Activity 2:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control space" name="Activity2" id="text" placeholder="Enter Extra Curricular Activity">
        </div>


        <p><i>*Hobbies</i></p>
        <label class="control-label col-sm-2" for="Hobby1">Hobby 1:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control space" name="Hobby1" id="text" placeholder="Enter Your Hobby">
        </div>
        <label class="control-label col-sm-2" for="Hobby2">Hobby 2:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control space" name="Hobby2" id="text" placeholder="Enter Your Hobby">
        </div>


        <center><button type="submit" class="btn btn-md btn-primary submit" name="btn-submit">Create Resume</button></center>
     </div>
   </form>
 </section>
  </div>



</body>
</html>
<?php ob_end_flush(); ?>
