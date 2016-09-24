<?php 
$pagetitle = "Home";?>
<?php require "template/header.php";?>
<style>
img{
	width:100px !important;
	height:100px !important;
}
</style>
<div class="row">
 <?php 
		require "db/connect.php";
		//$query = "SELECT cfname,clname,cpname,cqualifications,cplogo from candidate";
		$query = "SELECT * from party,candidate WHERE party.pname=candidate.cpname";
		$resultp=mysqli_query($con,$query);
		if (mysqli_num_rows($resultp) > 0) {
		while($row = mysqli_fetch_assoc($resultp)) {
			
			
        echo "
		 <div class='col-sm-6 col-md-4'>
		<div class='thumbnail'>
		  <img src=" . $row['plogo']. ">
		  <div class='caption'><center>
			<h3>" . $row["cpname"]. " (" . $row["clocation"]. ")</h3>
			<p>Candidate Name : " . $row["cfname"]. " " . $row["clname"]. "</p>
			
			</center>
			<center><form method='post' action='votecast.php'><input type='button' class='btn btn-primary' value='Vote'></form></center>
		  </div>
		</div>
	  </div>";
			
		
    }
} else {
    echo "<option>No Parties To Display</option>";
}
		
	  ?>

  
</div>

<?php include "template/footer.php";?>