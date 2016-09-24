<?php 
$pagetitle = "Add Candidate";
include "template/header.php";

require "db/connect.php";
$result = "";
if(isset($_POST['submitcan'])){
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$qualification=$_POST['qualification'];
	$party=$_POST['party'];
	$location=$_POST['location'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	
	$sql = "INSERT INTO candidate (cid,cfname,clname,cqualifications,cpartyid,cpname,clocation,cmobile,cemail,cvote) VALUES ('', '$fname', '$lname','$qualification','','$party', '$location', '$mobile', '$email','')";

if (mysqli_query($con, $sql)) {
    $result = '<div class="alert alert-success">
  <strong>Success!</strong> Candidate Added Successfully!.
</div>';
} else {
    $result = '<div class="alert alert-danger">
  <strong>Failed!</strong> Failed To Add Candidate!.
</div>';
}

mysqli_close($con);
}

?>

<?php include "template/adminmenu.php";?>
<div class="row">
<div class="col-xs-3">
</div>
<div class="col-xs-6">
<h3>Add Candidate</h3>
<br>
<form class="form-horizontal" method="post" action="addcandidate.php">
<div class="row">
<?php echo "$result";?>
  <div class="form-group">
    <label class="control-label col-sm-4" for="email">First Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="fname" placeholder="First Name">
    </div>
  </div>
  </div>
  <div class="row">
  <div class="form-group">
    <label class="control-label col-sm-4" for="email">Last Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="lname" placeholder="Last Name">
    </div>
  </div>
  </div>
  <div class="row">
  <div class="form-group">
    <label class="control-label col-sm-4" for="email">Qualification:</label>
    <div class="col-sm-8">
      <select class="form-control" name="qualification">
	  <option>Bachelor Hotel Management and Catering Technology(B.H.M.C.T)</option>
<option>Bachelor Library Science(B.L.Sc)</option>
<option>Bachelor of Applied Sciences(B.A.S)</option>
<option>Bachelor of Architecture(B.Arch)</option>
<option>Bachelor of Arts Bachelor of Education(B.A. B.Ed)</option>
<option>Bachelor of Arts Bachelor of Law(B.A.LLB)</option>
<option>Bachelor of Arts(B.A)</option>
<option>Bachelor of Audiology and Speech Language Pathology(B.A.S.L.P)</option>
<option>Bachelor of Ayurvedic Medicine and Surgery(B.A.M.S)</option>
<option>Bachelor of Business Administration Bachelor of Law(B.B.A LL.B)</option>
<option>Bachelor of Business Administration(B.B.A)</option>
<option>Bachelor of Business Management(B.B.M)</option>
<option>Bachelor of Business Studies(B.B.S)</option>
<option>Bachelor of Commerce(B.Com)</option>
<option>Bachelor of Communication Journalism(B.C.J)</option>
<option>Bachelor of Computer Applications(B.C.A)</option>
<option>Bachelor of Computer Science(B.C.S)</option>
<option>Bachelor of Dental Surgery(B.D.S)</option>
<option>Bachelor of Design(B.Des)</option>
<option>Bachelor of education in Artificial Intelligence(B.Ed AI)</option>
<option>Bachelor of Education(B.Ed)</option>
<option>Bachelor of Electronic Science(B.E.S)</option>
<option>Bachelor of Elementary Education(B.EL.Ed)</option>
<option>Bachelor of Engineering(B.E)</option>
<option>Bachelor of Fashion Technology(B.F.Tech)</option>
<option>Bachelor of Financial Investment and Analysis(B.F.I.A)</option>
<option>Bachelor of Fine Arts(B.F.A)</option>
<option>Bachelor of Fishery Sciences(B.F.S)</option>
<option>Bachelor of General Law(B.G.L)</option>
<option>Bachelor of Homeopathic Medicine & Surgery(B.H.M.S)</option>
<option>Bachelor of Hospitality and Tourism Management(B.H.T.M)</option>
<option>Bachelor of Hotel Management(B.H.M)</option>
<option>Bachelor of Information Systems Management(B.I.S.M)</option>
<option>Bachelor of Labour Management(B.L.M)</option>
<option>Bachelor of Law(LL.B)</option>
<option>Bachelor of Laws(B.L)</option>
<option>Bachelor of Library and Information Science(B.L.I.S)</option>
<option>Bachelor of Literature(B.Lit)</option>
<option>Bachelor of Medical Laboratory Technology(B.M.L.T)</option>
<option>Bachelor of Medical Record Science(B.M.R.Sc)</option>
<option>Bachelor of Medical Technology(B.M.T)</option>
<option>Bachelor of Medicine Bachelor of Surgery(M.B.B.S)</option>
<option>Bachelor of Mental Retardation(B.M.R)</option>
<option>Bachelor of Naturopathy and Yogic Sciences(B.N.Y.Sc)</option>
<option>Bachelor of Occupational Therapy(B.O.T)</option>
<option>Bachelor of Occupational Therapy(B.O.Th)</option>
<option>Bachelor of Optometry and Vision Science(B.Optom)</option>
<option>Bachelor of Pharmacy(B.Pharma)</option>
<option>Bachelor of Physical Education(B.P.E)</option>
<option>Bachelor Of Physical Education(B.P.Ed)</option>
<option>Bachelor of Physiotherapy(B.P.T)</option>
<option>Bachelor of Public Relations(B.P.R)</option>
<option>Bachelor of Science Bachelor of Education(B.Sc.B.Ed)</option>
<option>Bachelor of Science Education(B.S.E)</option>
<option>Bachelor of Science in Education(B.Sc.Ed)</option>
<option>Bachelor of Science(B.S)</option>
<option>Bachelor of Siddha Medical Sciences(B.S.M.S)</option>
<option>Bachelor Of Social Work(B.S.W)</option>
<option>Bachelor of Socio Legal Sciences Bachelor of Laws(B.S.L.LL.B)</option>
<option>Bachelor of Speech Language & Audiology(B.S.L.A)</option>
<option>Bachelor of Tourism Administration(B.T.A)</option>
<option>Bachelor of Unani Medicine & Surgery(B.U.M.S)</option>
<option>Bachelor of Unani Medicine & Surgery(Kamil e Tob o Jarahat)</option>
<option>Bachelor of Veterinary Science(B.V.Sc)</option>
<option>Bachelors of Technology(B.Tech)</option>
<option>Basic Training Certificate(B.T.C)</option>
<option>Behavioral Healthcare Education(B.H.Ed)</option>
<option>Under Graduate Basic Training(U.G.B.T)</option>
<option>Under Graduate Teacher Training(U.G.T.T)</option>
<option>Under Graduate Training(U.G.T)</option>
<option>SSC</option>
<option>HSC</option>
<option> Automobile Engineering</option>
<option>Applied Electronics and Instrumentation Engineering</option>
<option> Agricultural Engineering</option>
<option>Aeronautical Engineering</option>
<option>Bio Technology</option>
<option>Biochemical Engineering</option>
<option>Civil Engineering</option>
<option>Chemical and Alcohol Technology</option>
<option>Computer Science Engineering</option>
<option>Chemical Engineering</option>
<option>Electronics & Instrumentation Engineering</option>
<option>Electronics & Telecomm Engineering</option>
<option>Electronics Engineering</option>
<option> Electronics Instrumentation & Control</option>
<option> Electrical & Electronics Engineering</option>
<option> Electrical Engineering</option>
<option>Electronics & Communication Engineering</option>
<option>Environmental Engineering</option>
<option>Industrial Production Engineering</option>
<option> Instrumentation & Control</option>
<option> Food Technology</option>
<option>Industrial Engineering</option>
<option>Instrumentation Engineering</option>
<option>Information Technology</option>
<option>Leather Technology</option>
<option> Marine Engineering</option>
<option> Material Science</option>
<option>Mechanical & Industrial Engineering</option>
<option> Mechanical Engineering</option>
<option> Man Made Fibre Technology</option>
<option> Manufacturing Technology</option>
<option> Oil Technology</option>
<option>Metallurgical Engineering</option>
<option> Production Engineering</option>
<option>Plastic Technology</option>
<option>Textile Engineering</option>
<option> Textile Technology</option>
<option>Production & Industrial Engineering</option>
<option>Not Qualified</option>
<option>Other</option>
	  </select>
    </div>
  </div>
  </div>
<div class="row">
  <div class="form-group">
    <label class="control-label col-sm-4" for="pwd">Candidate Party:</label>
    <div class="col-sm-8"> 
      <select class="form-control" name="party">
	  <?php 
		
		$query = "SELECT pname from party";
		$resultp=mysqli_query($con,$query);
		if (mysqli_num_rows($resultp) > 0) {
		while($row = mysqli_fetch_assoc($resultp)) {
        echo "<option>" . $row["pname"]. "</option>";
    }
} else {
    echo "<option>No Parties To Display</option>";
}
		
	  ?>
	  
	  </select>
    </div>
  </div>
  </div>
  <div class="row">
  <div class="form-group">
    <label class="control-label col-sm-4" for="email">State/Union Territory:</label>
    <div class="col-sm-8">
      <select class="form-control" name="location">

  <option value="Andaman and Nicobar">Andaman and Nicobar</option>
  <option value="Chandigarh">Chandigarh</option>
  <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
  <option value="Daman and Diu">Daman and Diu</option>
  <option value="Delhi">Delhi</option>
  <option value="Lakshadweep">Lakshadweep</option>
  <option value="Puducherry">Puducherry</option>
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="Assam">Assam</option>
    <option value="Bihar">Bihar</option>
    <option value="Chhattisgarh">Chhattisgarh</option>
    <option value="Goa">Goa</option>
    <option value="Gujarat">Gujarat</option>
    <option value="Haryana">Haryana</option>
    <option value="Himachal Pradesh">Himachal Pradesh</option>
    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
    <option value="Jharkhand">Jharkhand</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Kerala">Kerala</option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Maharashtra">Maharashtra</option>
    <option value="Manipur">Manipur</option>
    <option value="Meghalaya">Meghalaya</option>
    <option value="Mizoram">Mizoram</option>
    <option value="Nagaland">Nagaland</option>
    <<option value="Punjab">Punjab</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Odisha">Odisha</option>
    <option value="Sikkim">Sikkim</option>
    <option value="Tamil Nadu">Tamil Nadu</option>
    <option value="Telangana">Telangana</option>
    <option value="Tripura">Tripura</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="Uttarakhand">Uttarakhand</option>
    <option value="West Bengal">West Bengal</option>
</select>
    </div>
  </div>
  </div>
  <div class="row">
  <div class="form-group">
    <label class="control-label col-sm-4" for="email">Mobile:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="mobile" placeholder="Mobile Number">
    </div>
    </div>
  </div>
  <div class="row">
  <div class="form-group">
    <label class="control-label col-sm-4" for="email">Email:</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" name="email" placeholder="Enter Email">
    </div>
  </div>
  </div>
<div class="row">
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-6">
      <button type="submit" name="submitcan" class="btn btn-default">Submit</button>
    </div>
  </div>
  </div>
</form>
</div>
<div class="col-xs-3">
</div>
</div>

<?php include "template/footer.php";?>