<?php 
$pagetitle = "Add Party";
include "template/header.php";

require "db/connect.php";
$result="";
if(isset($_POST['submitparty'])){
	
	$partyname = $_POST['pname'];
	$plogo = $_POST['plogo'];
	
		$sql = "INSERT INTO party (pid,pname,plogo) VALUES ('','$partyname','$plogo')";

if (mysqli_query($con, $sql)) {
    $result = '<div class="alert alert-success">
  <strong>Success!</strong> Party Added Successfully!.
</div>';
} else {
    $result = '<div class="alert alert-danger">
  <strong>Failed!</strong> Failed To Add Party!.
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
<h3>Add Party</h3>
<br>
<form class="form-horizontal" method="post" action="addparty.php">
<?php echo "$result";?>
<div class="row">
  <div class="form-group">
    <label class="control-label col-sm-4" for="text">Party Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="pname" placeholder="Party Name">
    </div>
  </div>
  </div>
  <div class="row">
  <div class="form-group">
    <label class="control-label col-sm-4" for="text">Party Logo Path:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="plogo" placeholder="Party Logo Path">
    </div>
  </div>
  </div>


<div class="row">
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-7">
      <button type="submit" name="submitparty" class="btn btn-default">Submit</button>
    </div>
  </div>
  </div>
</div>
</form>
<div class="col-xs-3">
</div>
</div>

<?php include "template/footer.php";?>