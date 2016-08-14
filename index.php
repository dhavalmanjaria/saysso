<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

	<h1>
	What does the Internet say?
	</h1>

	<form action="./post/post1.php" method="POST">
		<div class="form-group">
			<label for="post-title">Enter your title here</label>
			<input type="text" class="form-control" id="post-title" name="post-title">
			<label for="post-subtitle">Enter your subtitle here</label>
			<input type="text" class="form-control" id="post-subtitle" name="post-subtitle">
			<label for="post-text">Text of your thing</label>
			<textarea class="form-control" id="post-text" name="post-text"></textarea>
			<br />
			<br />
			<input type="submit" class="btn btn-danger" value="So says the internet!">
		</div>

	</form>

<p>If it says so on the internet, it MUST be true. </p>
</div>

</body>
</html>
