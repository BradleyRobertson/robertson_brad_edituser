<?php
	require_once('phpscripts/config.php');
	$ip = $_SERVER['REMOTE_ADDR'];
	//echo $ip;
	if(isset($_POST['submit'])){
		//echo "Works";
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== ""){
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill out the required fields.";
		}



	// $firstlogin = "SELECT tbl_firstlogin FROM tbl_user";

//	$logged = mysqli_query($logone);
	//	if($result <= "NULL" {
	//	redirect_to("admin_edituser.php");
		//}else{
		//echo "the redirect on login failed!";
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin panel login</title>
<link rel="stylesheet" href="./css/login.css">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
<title>Welcome to your admin panel login</title>
</head>
<body>
	<?php if(!empty($message)){ echo $message;} ?>
	<form action="admin_login.php" method="post" class="loginSection">
		<label>Username:</label>
		<input type="text" name="username" value=""class="username">
		<br>
		<label>Password:</label>
		<input type="password" name="password" value="" class="password">
		<br><br>
		<input type="submit" name="submit" value="Submit" class="submit">
	</form>

</body>
</html>
