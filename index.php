<?php
session_start();

if (isset($_SESSION['username'])) {
header('Location: index.php');
}

include('includes/db.php');
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="includes/script.js"></script>
<html>
<head>
<title>slug - source and information aggregrator</title>
<link rel="stylesheet" type="text/css" href="css.css">
<link href='http://fonts.googleapis.com/css?family=Bowlby+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="page">
	<div id="header">
		<a href="/">
			<div id="logo">
				<h1>slug</h1>
			</div>
		</a>
	<div id="submit">
		<h2>Submit News >>></h2>
	</div>
			<div id="loginbox">
			<!--Input fields-->
				<div>
					<!--USERNAME--><input name="username" type="text" placeholder="Username" /><!--END USERNAME-->
					<!--PASSWORD--><input name="password" type="password" placeholder="Password" /><!--END PASSWORD-->
				</div>
			<!--END Input fields-->
			<!--Buttons-->
				<div>
					<!--Login button--><input type="submit" name="submit" value="Login" /><!--END Login button-->
					<!--Register button--><input type="submit" name="submit" value="Register" /><!--END Register button-->
				</div>
				<!--END Buttons-->
				 </form>
				<!--end login form-->
	</div>
	</div>
<div id="submitcontent">
	<form action="submit.php" method="post">
	<span>Title:</span>
	<br/><input type="text" name="title"><br/>
	<span>Source:</span>
	<br/><input type="text" name="source"><br/>
	<span>Synopsis:</span>
	<br/><textarea rows="5" cols="55" name="synopsis"></textarea><br />
	<input type="submit" name="submitstory" value="Submit Story" />
	</form>
</div>


<?php include('includes/board.php');?>
	<div id="footer">
	<div id="legal">
	<p>Something about rights and reserves but it doesn't matter the moment, so why am I typing all of this, most likely because these sections have a lot of words and I just want to make sure I have the font/style correct for the area/amount of text.</p>
	</div>
	</div>
</div>
</div>

</body>
</html>