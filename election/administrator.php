<?php 

session_start();
  

$pagetitle = "Admin";
include "template/header.php"?>

<?php include "template/adminmenu.php";?>
<div class="row">
<div class="col-xs-3">
</div>
<div class="col-xs-6">

<h2>WELCOME <?php echo $_SESSION['name'];?></h2>


</div>
<div class="col-xs-3">
</div>
</div>

<?php include "template/footer.php";?>