<html>

<?php
	session_start();
    if(isset($_SESSION['admin'])){
    	header("location:index.php");
    }
    
?>
<head>
	  <link rel="stylesheet" href="./css/style.css">
	</head>
	<meta name="viewport" content="width=1080, user-scalable=no" />
	<body>
			<div class='modal-header'>
				<center><h2>Registration</h2></center>
			</div>
				<form enctype="multipart/form-data" action="registeradmin.php" method="post"> <input name="phpMyAdmin" type="hidden" value="V0N0db6Fl62QWr6eBkly75xAGn3" />
					<br>
					<table width='100%' height='80%'>
						<tr>
							<td>
								<table width="100%" height="100%" style="text-align:center;">
									<tr>
										<td width="50%" style="padding-left: 5%;">
											<label id="usernamelabel" for="username">Username</label><br>
											<input id="username" name="username" type="text" required/>
										</td>
										<td width="50%" style="padding-right: 5%;">
											<label id="namelabel" for="name">Name</label><br>
											<input id="name" name="name" type="text" required/>
										</td>
									</tr>
									<tr>
										<td width="50%" style="padding-left: 10%;">
											<label id="passwordlabel" for="password">Password</label><br>
											<input id="password" name="password" type="password" size=14 required/>
										</td>
										<td width="50%" style="padding-right: 10%;">
											<label id="password2label" for="passsword2">Repeat Password</label><br>
											<input id="password2" name="password" type="password" size=14 required/>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>
								<center>
								<a href='admin_login.php' style='text-decoration:none;'><div id='register'>Already registered?</div>
								</a>
								</center>
							</td>
						</tr>
						<tr>
							<td height='80px'>
								<center>
								<input id='buttonGo' style="width:80%;" class='buttonLoginScreen' name='Submit' type='submit' value='Click to Register'/>
								</center>
							</td>
						</tr>
					</table>
				</form>
	</body>
</html>
