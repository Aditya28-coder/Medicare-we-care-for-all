
<!DOCTYPE html>
<html>
<head>
<br><br><br>
<title> User Login</title>
<link rel="stylesheet" type="text/css" href="logincss.css">
</head>
<body>
	<?php
$con = mysqli_connect('localhost', 'root', '', 'medicare');
// Check connection
// if (!$con){
//        die("sorry we failed to connect:".mysqli_connect_error());
//  }
//  else{
//        echo "connection was successsful";
//  }

session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `user_login` WHERE Login_email='".$username."'and Login_pass= '".$password."'";
 $result = mysqli_query($con,$query) or die(mysqli_error($query));
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to userdash.php
     header("Location: userdash.php");
         }
         else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>
	<div class="box">
       <img src="data:image/png;base64,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" class = "quote"/>
		<h1> User Login </h1>
<form action=" " method="post">

<input type="text" name="username" placeholder="Enter Email Id">
<input type="password" name="password" placeholder="Enter Password">
<input type="submit" name="Login" value="Login">
 <p align="center"><a style="font-size: 15px" href="frgtpass.php"> Forgot Password?</a></p>
<p align="center"><h6> &nbsp&nbsp&nbsp Don't have an account? &nbsp&nbsp<a href="signup.php">Click here to register</a></h6>
 </p>

</form>
</div>
<?php } ?>
</body>
</html>