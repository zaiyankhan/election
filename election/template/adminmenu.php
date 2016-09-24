<?php
//if($_SESSION['adminlogged_in']!=true){
//  header("location:admin.php");
// die;
//}
?>

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