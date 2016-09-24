<!DOCTYPE html>
<html>
<head>
<title><?php echo "$pagetitle";?></title>
<link rel="stylesheet" type="text/css" href="style/style.css">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <a class="navbar-brand" href="index.php">Election Result & Analysis</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="candidates.php">List Of Candidates</a></li>
            <li><a href="admin.php">Admin</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="">Support</a></li>
            <li><a href="">Contact Us</a></li>
			<li><form class="form-inline" method="post">
				<div class="form-group">
					<input type="text" name="aadhar" class="form-control" placeholder="Aadhar Number"  />
					<input type="submit" class="form-control" name = "submit" value="Submit" />
			  </div>
			</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container">
<br><br><br><br><br>