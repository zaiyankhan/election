<?php 
$pagetitle = "Admin";
include "template/header.php";
$result = "";
if(isset($_POST['submitform'])){
	
	$esubject = $_POST['subject'];
	$btext = $_POST['emailc'];
	require "db/connect.php";
$sql = mysqli_query($con,"select cemail from candidate");
$recipients = array();
while($row = mysqli_fetch_array($sql)) {
    $recipients[] = $row['cemail'];
}

$to = 'zaiyanwebadda@gmail.com';
$subject = "Notification From Election Department";
$body = "$btext";
$headers = 'From: zaiyanwebadda@gmail.com' . "\r\n" ;
$headers .= 'Reply-To: zaiyanwebadda@gmail.com' . "\r\n";
$headers .= 'BCC: ' . implode(', ', $recipients) . "\r\n";

if(mail($to, $subject, $body, $headers)){
	$result = '<div class="alert alert-success">
  <strong>Success!</strong> Email Sent Successfully!.<br> (Email Will Be Sent When The Project Is In Live Environment)
</div>';

}



}
?>

<?php include "template/adminmenu.php";?>
<div class="row">
<div class="col-xs-3">
</div>
<div class="col-xs-6">
<form class="form-horizontal" method="post">
<?php echo "$result"; ?>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Subject:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="subject" placeholder="Enter Email Subject" required>
    </div>
  </div>
  <br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Email Content:</label>
    <div class="col-sm-10"> 
      <textarea class="form-control" name="emailc" placeholder="Content For Email" required></textarea>
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-6">
      <button type="submit" name="submitform" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</div>
<div class="col-xs-3">
</div>
</div>

<?php include "template/footer.php";?>