<?php
	require_once('phpscripts/config.php');
	//confirm_logged_in();
	$tbl = "tbl_user";
	$users = getAll($tbl);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="./css/delete.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
<title>Delete User</title>
</head>
<body>
	<h2>Time to destroy some lives...</h2>
	<div class="deletos">
	<?php
		while($row = mysqli_fetch_array($users)){
			echo "{$row['user_fname']} <a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Fired</a><br>";
		}
	?>
</div>
</body>
</html>
