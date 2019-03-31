<?php
session_start();
if (isset($_SESSION['user'])) {
    header('location: user_dashboard.php');
}
?>
<html>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.typekit.net/ith7fqq.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="userLogin__header">
                <div class="inner align-middle">
                    <img src="./assets/website.png" alt="icon" class="userLogin__header-img">
                    <h1 class="heading">Log in</h1>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-sm">
                <form class="form" action='checkuserlogin.php' method='post'>
                    <input name='phpMyAdmin' type='hidden' value='V0N0db6Fl62QWr6eBkly75xAGn3' />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <button type="submit" class="btn btn-primary align-center">LOG IN</button>
                </form>

            </div>

        </div>


    </div>

    <!-- <form action='checkuserlogin.php' method='post'> <input name='phpMyAdmin' type='hidden' value='V0N0db6Fl62QWr6eBkly75xAGn3' />
				
									<label id="usernamelabel" for="username">Username</label><br>
									<input id='username' name='username' type='text' required/>
									<br><br><br>
									<label id="passwordlabel" for="password">Password:</label><br>
									<input id='password' name='password' type='password' required/>
									<input id='buttonGo' class='buttonLoginScreen' name='Submit' type='submit' value='Login'/>
				
				</form> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html> 