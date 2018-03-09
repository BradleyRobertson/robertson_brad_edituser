<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="./css/index.css">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
<title>Welcome to your admin panel</title>
</head>
<body>
	<section class="adminpage1">
<?php echo "Hello "; echo $_SESSION['user_name'];  ?>
</section>
<a href="admin_createuser.php">Create User</a>
<a href="admin_edituser.php">Edit User</a>
<a href="admin_deleteuser.php">Delete User</a>
<a href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
</body>
</html>
