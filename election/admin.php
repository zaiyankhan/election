<?php 

session_start();

if($_SESSION['login_id']=="admin"){
	header("location: administrator.php");

}


if(isset($_POST['submitlogin'])) 
    {     
require "db/connect.php";
        $name = $_POST["username"]; 
		$password = $_POST["password"]; 

        $result1 = mysqli_query($con,"SELECT u_username, u_password FROM user WHERE u_username = '".$name."' AND  u_password = '".$password."'");

        if(mysqli_num_rows($result1) > 0 )
        { 
            $_SESSION["adminlogged_in"] = true; 
            $_SESSION["name"] = $name;
			$_SESSION['login_id']="admin";	
			
        }
        else
        {
            echo 'The username or password are incorrect!';
        }
}

$pagetitle = "Admin";
include "template/header.php"?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Administrator</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="admin.php">Home</a></li>
      <li><a href="addcandidate.php">Add Candidate</a></li>
	  <li><a href="addparty.php">Add Party</a></li> 
	  <li><a href="viewparty.php">View Analysis</a></li> 
	  <li><a href="emailcandidates.php">Email Candidates</a></li> 
	  <li><a href="logout.php">Logout</a></li> 
    </ul>
  </div>
</nav>
<div class="row">
<div class="col-xs-3">
</div>
<div class="col-xs-6">
<form class='form-horizontal hide' method='post'>
  <div class='form-group'>
    <label class='control-label col-sm-2' for='email'>Email:</label>
    <div class='col-sm-10'>
      <input type='email' class='form-control' name='username' placeholder='Enter email'>
    </div>
  </div>
  <br>
  <div class='form-group'>
    <label class='control-label col-sm-2' for='pwd'>Password:</label>
    <div class='col-sm-10'> 
      <input type='password' class='form-control' name='password' placeholder='Enter password'>
    </div>
  </div>
<br>
  <div class='form-group'> 
    <div class='col-sm-offset-2 col-sm-6'>
      <button type='submit' name='submitlogin' class='btn btn-default'>Submit</button>
    </div>
  </div>
</form>


</div>
<div class="col-xs-3">
</div>
</div>

<?php include "template/footer.php";?>