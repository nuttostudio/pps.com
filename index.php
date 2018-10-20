<!DOCTYPE html>
<html>
<head>
	<title>PPS เครือข่ายเยาวชนพัฒนาบ้านเกิด</title>
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<?php 
	if (isset($_GET['page22'])) {
		if ($_GET['page22']=="login") {
			include 'login.php';
		}elseif ($_GET['page22']=="register") {
			include 'register.php';
		}elseif ($_GET['page22']=="") {
			# code...
		}
	}
	else{
		include 'home.php';
	}
	
	?>

</body>
<script src="./js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="./js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="./js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>