<?php
include_once('server.php'); 


if(!isset($_SESSION)){ 
   session_start(); 
} 


if(isset($_POST['log'])){

   $email = $_POST['email'];
   $password = $_POST['password'];

   echo $email;
   echo $password;

   


   $result = mysqli_query($conn , "SELECT * from `users` where email = '$email' AND password = '$password' ");
   $row = mysqli_num_rows($result);

    if($row > 0){
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("location:profile.php");
    }else{
        header("location:error.php");
    }


}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="headings">
        <h1>Login</h1>
    </div>

    <div class="container">
        <div class="pack">

            <form method="post" action="login.php" >
                <input type="email" required="true" name="email" id="emailField" class="field" placeholder="Email" onchange="validationEmail()">
                <span id="invalidEmail" style="color: red"> </span><br>
                <input type="password" required="true" name="password" id="passwordField" class="field" placeholder="Password" onchange="validationPass()">
                <span id="invalidPass" style="color: red"> </span> <br>
                <button type="submit" id="submit" name="log" class="sub2">Log-In</button>
                <br>
                <br>
                <p>Create a new Profile ? <a href="registrationForm.php" id="sign-in">Registration</a></p>
				<p>Back to <a href="http://localhost/newsportal/index.php" id="">HOME</a></p>
            </form>

        </div>
    </div>

</body>

</html>