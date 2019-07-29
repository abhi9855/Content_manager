<?php
session_start();
include 'functions.php';

if (isset($_POST["login"])) {
    //print_r($_POST);
    # code...
    $uname = $_POST['uname'];
    $pass = md5($_POST['passwd']);
    $sql = "SELECT * FROM login WHERE username = '$uname' and password = '$pass'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    // echo "<pre>";print_r($row['id']);die();

    $count = mysqli_num_rows($result);
    // print_r($count);
    // die();
    if ($count == 1) {
        $_SESSION["userid"] = $row['id'];
        // die();
        header("location: index.php?page_no=1");
        //exit;
    } else {
        // print_r($_POST);
        echo "<script type='text/javascript'>alert('Wrong username or password');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Session</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="body">
	<div class="signup-form"  style="margin-top: 100px;">
    <form id="loginForm" action="" method="POST"  autocomplete="off">
		<h2>Login</h2>

		 <div class="form-group">
			<input type="txt" class="form-control" name="uname" id="uname" placeholder="Username" required="" autocomplete="off">
        </div>

		<div class="form-group">
			<input type="password" class="form-control" name="passwd" id="passwd" placeholder="Password" required="" autocomplete="off">
        </div>

		<div class="form-group">
			<input type="submit" id="login" autocomplete="off" class="btn btn-success btn-lg btn-block" name="login" value="Login">
		</div>

		<div class="form-group">
			<!-- <input type="button" class="btn btn-success btn-lg btn-block" name="btn5" onclick="forget();"  value="Forget"> -->
		</div>

		<div class="form-group">
			<!-- <input type="button" autocomplete="off" class="btn btn-success btn-lg btn-block" name="btn4" onclick="register();" value="Sign Up"> -->
		</div>
    </form>

</div>
</body>
</html>

<script type='text/javascript'>
	//Find the values added in form using the id of each fields. The ".val()" function finds the value added in the form fields.
// 	var username = $('#uname').val();
//     var password = $('#passwd').val();
	
// 	$(document)
//   //Function will execute when the button "Click to Submit" is clicked.
//   $('#login').click(function() {
	  
//     //Blank field validation of fullname, mobile no and address. The function will generate an alert message if "fullname" or "mobile no" or "address" field is blank  
//     if(username == '')
//     {
// 	  alert('Please enter your UserName');
// 	  $('#uname').focus(); //The focus function will move the cursor to "fullname" field
//     }
    
//     //Validation of password. The function will generate an alert message if "password" field is not same as "retype password".
//     else if(password == '')
//     {
// 	  alert('Please enter your Password');
// 	  $('#passwd').focus();
//     }
//   });
	
	function register(){
		window.location.href="register.php";
	}

	function forget(){
		window.location.href="forget.php";
	}
</script>
