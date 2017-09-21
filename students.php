<?php   include('admin/functions/noticefn.php');
 ?>
<html>
<head>
	<title>Student Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript"href="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2><hr>Entry To Students Dashboard<hr></h2>
<form method="POST" action="insertstudents.php" enctype="multipart/form-data">
	<div class="form-group">
		<h3><label for="name"> Student Name:</label></h3>
		<input type="text" class="form-control" placeholder="Enter Name" name="name">
</div>
	<div class="form-group">
		<h3><label for="file">Attach Your Assignments Here:</label></h3>
		<input type="file"  name="pic">
		<h4><p class="help-block">select file to upload</p></h4>
</div> 
	<div class="form-group">
		<h3><label for="name">Submitted To:</label></h3>
<select>
<?php displayteachers(); ?>
</select><br>
<br><br>
<p><input type="submit" value="Submit Assignments" class="btn btn-success"/></p>
	
</div>	
</form>

</body>
</html>