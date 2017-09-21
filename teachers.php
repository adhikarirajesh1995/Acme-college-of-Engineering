<html>
<head>
	<title>Insert it into Teachers</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
</head>
<body>
	<form method="POST" action="insertteachers.php">
	<div class="container">
		<h2><hr>Entry To Teachers Dashboard<hr></h2>
	<h4><p>Teacher Name:</p></h4>
	<p><input type="text" name="teachername" placeholder="teacher name"/></p>
	<textarea name="notice" rows="10" cols="150">
     Type Your qs here...
</textarea><br><br>
	<h4><p>subject:</p></h4>
	<p><input type="text" name="subject" placeholder="Your subject Name"/></p>
<h4><p>Assignment To:</p></h4>
	<p><input type="text" name="whichyear" placeholder="Faculty/year"/></p>

<p><input type="submit" value="Post Question" class="btn btn-success"/></p>
<div class="form-group">
<input type="file" name="pic">
<h4><p class="help-block">select file to upload</p></h4>

</div>
	


	</div>	




	</form>

</body>
</html>