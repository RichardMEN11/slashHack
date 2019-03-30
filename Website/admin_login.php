<?php
	session_start();
	if(isset($_SESSION['username'])){
	header('location: admin_dashboard.php');
}
?>
<html>
<head>
	  <link rel="stylesheet" href="./css/style.css">
	</head>
	<meta name="viewport" content="width=1080, user-scalable=no" />
	<body>
		<form action='checkadminlogin.php' method='post'> <input name='phpMyAdmin' type='hidden' value='V0N0db6Fl62QWr6eBkly75xAGn3' />
					<br>
					<table width='100%' height='77.5%'>
						<tr>
							<td>
								<center>
									<label id="usernamelabel" for="username">Username</label><br>
									<input id='username' name='username' type='text' required/>
									<br><br><br><br><br><br><br>
									<label id="passwordlabel" for="password">Password</label><br>
									<input id='password' name='password' type='password' required/>
									<br>
								</center>
							</td>
						</tr>
						<tr>
							<td height='80px'>
								<center>
									<input id='buttonGo' class='buttonLoginScreen' name='Submit' type='submit' value='Login'/>
								</center>
							</td>
						</tr>
						<tr>
							<td>
								<center><a href='admin_register.php'><div id='register'>Not registered?</div>
								</a></center>
							</td>
						</tr>
					</table>
				</form>
	</body>
</html>
