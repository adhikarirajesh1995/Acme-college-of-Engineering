<html>
<head>
	<title>Insert it into Teachers</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
</head>
<body>
	<form method="POST" action="">
	<div class="container">
		<h2><hr>Entry To Vacancy Applicant:-<hr></h2>
	<h4><p>Your Name:</p></h4>
	<p><input type="text" name="name" placeholder=" Applicant name"/></p>
	<textarea name="notice" rows="5" cols="50">
     Leave Your Comments here...
</textarea><br><br>
	<h4><p>Your ContactNo:</p></h4>
	<p><input type="text" name="contact" placeholder="Your ContactNo. Here"/></p>
<h4><p>Time Basis:</p></h4>
	
	<select>
<option>Select Your Time Basis</option>
<option>Full Time Basis</option>
<option>Part Time Basis</option>
</select>
<br>
<div class="form-group">
	<h4><p class="help-block"><h4>Attach Your Cv Here:</h4></p>
	<br><input type="file" name="pic" class="btn btn-success">
</div>
<p><input type="submit" value="Submit" class="btn btn-primary"/></p>

	</div>	
</form>

</body>
</html>