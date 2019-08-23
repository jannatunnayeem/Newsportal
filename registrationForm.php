<?php

include_once('server.php'); 

if(isset($_POST['sub'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $age = $_POST['age'];
   $religion = $_POST['religion'];
   $gender = $_POST['gender'];

   $result = mysqli_query($conn , "INSERT INTO `users` ( `name`, `email`, `password`, `age`, `religion`, `gender`)
    VALUES ( '$name', '$email', '$password', '$age', '$religion', '$gender')");

    if($result){
        header("location:login.php");
    }else{
        echo "data insert error";
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
        <h1>Registration Form</h1>
    </div>

    <div class="container">
        <div class="pack">

            <form method="post" action="registrationForm.php" onsubmit="return main()">

                <input type="text" required="true" name="name" id="nameField" class="field" placeholder="Username"  onchange="validationUserName()">
                <span id="fullname" style="color: red"> </span> <br>
                <input type="email" required="true" name="email" id="emailField" class="field" placeholder="Email" onchange="validationEmail()">
                <span id="invalidEmail" style="color: red"> </span><br>
                <input type="password" required="true" name="password" id="passwordField" class="field" placeholder="Password" onchange="validationPass()">
                <span id="invalidPass" style="color: red"> </span> <br>
                <input type="password" required="true" name="RePassword" id="rePasswordField" class="field" placeholder="ReType Password" onchange="validationRePass()">
                <span id="invalidRePass" style="color: red"></span><br>
                <input type="number" name="age" id="ageField" class="field" placeholder="age" required="true" min="18" max="150" onchange="validationAge()">
                <span id="invalidAge" style="color: red"></span><br>
                <div class="religionClass">
                    <label for="religion" id="rel">Religion : </label>
                    <select class="religionOption" name="religion" id="religionField" onchange="selectReligion()">
                        <option class="religionOption" value="muslim">Muslim</option>
                        <option class="religionOption" value="hindu">Hindu</option>
                        <option class="religionOption" value="others">Others</option>
                    </select>
                </div>
                <br>
                <label for="gender" id="labelGender">Gender :</label>
                <br>
                <div class="gender">
                    <input class="genderField" type="radio" name="gender" value="male" checked> Male<br>
                    <input class="genderField" type="radio" name="gender" value="female"> Female<br>
                    <input class="genderField" type="radio" name="gender" value="other"> Other
                </div><br>

                <input type="checkbox"  name="checkbox" value="check" id="agree"  /> <a href="terms&condition.html">I
                    have read and agree to
                    the Terms and Conditions and Privacy Policy</a>
                    <span id="invalidCheck" style="color: red"></span>
                <br>
                <br>
                <br>
                <button type="submit" id="submit" name="sub" class="sub2"> Submit</button>
                <br>
                <br>
                <p>Already Have a Profile ? <a href="login.php" id="sign-in">Sign-In</a></p>
            </form>

        </div>
    </div>


    <script src="script.js"></script>
</body>

</html>