<?php 
$pagetitle = "Candidates";
include "template/header.php";?>

  <table class="table table-hover">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Qualification</th>
        <th>State/Union Territory</th>
        <th>Political Party</th>
      </tr>
    </thead>
    <tbody>
  	<?php 
		require "db/connect.php";
		$queryd = "SELECT cfname,clname,cqualifications,clocation,cpname from candidate";
		$resultd=mysqli_query($con,$queryd);
		if (mysqli_num_rows($resultd) > 0) {
		while($row = mysqli_fetch_assoc($resultd)) {
        echo "<tr><td>" . $row["cfname"]. "</td><td>" . $row["clname"]. "</td><td>" . $row["cqualifications"]. "</td><td>" . $row["clocation"]. "</td><td>" . $row["cpname"]. "</td></tr>";
    }
} else {
    echo "<option>No Parties To Display</option>";
}
		
	  ?>
	  
	  
    </tbody>
  </table>


<?php include "template/footer.php";?>