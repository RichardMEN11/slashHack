<html>

<?php
	session_start();
    if(!isset($_SESSION['admin'])){
    	header("location:index.php");
    }
    
?>
<head>
	  <link rel="stylesheet" href="./css/style.css">
	</head>
	<meta name="viewport" content="width=1080, user-scalable=no" />
	<body>
			<div class='modal-header'>
				<center><h2>Create task</h2></center>
			</div>
				<form enctype="multipart/form-data" action="registertask.php" method="post"> <input name="phpMyAdmin" type="hidden" value="V0N0db6Fl62QWr6eBkly75xAGn3" />
					<br>
					<table width='100%' height='80%'>
						<tr>
							<td>
								<table width="100%" height="100%" style="text-align:center;">
									<tr>
										<td width="50%" style="padding-left: 5%;">
											<label id="titlelabel" for="title">Title</label><br>
											<input id="title" name="title" type="text" required/>
										</td>
										<td width="50%" style="padding-right: 5%;">
											<label id="descriptionlabel" for="description">Description</label><br>
											<input id="description" name="description" type="text" required/>
										</td>
									</tr>
									<tr>
										<td width="50%" style="padding-left: 10%;">
											<label id="pointslabel" for="points">Points</label><br>
											<input id="points" name="points" type="text" size=14 required/>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td height='80px'>
								<center>
								<input id='buttonGo' style="width:80%;" class='buttonLoginScreen' name='Submit' type='submit' value='Click to Create Task'/>
								</center>
							</td>
						</tr>
					</table>
				</form>
	</body>
</html>
