
<?php
//including the database connection file

include_once("server.php");

if(!isset($_SESSION)){ 
    session_start(); 
 }
 
 if(!($_SESSION['email']== true)){
    header("location:login.php");
 }
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
 $email=   $_SESSION['email'] ; 
$result = mysqli_query($conn, "SELECT * FROM `users` where email = '$email' ");
// using mysqli_query instead

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">  
</head>

<body>

  
    <nav class="navbar navbar-expand-lg navbar-dark " style="background: purple;">
      <a class="navbar-brand" href="#"><i class="fas fa-book text-light"></i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/newsportal/index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/newsportal/user/profile.php">Profile</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="http://localhost/newsportal/user/create_article.php">Create Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Help Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Log-Out</a>
         </li>
         <li class="ml-5">
         </li>
         <li class="ml-5">
         </li>
         <li class="ml-5">
         </li>
         <li class="ml-5">
         </li>
         <li class="ml-5">
         </li>
         <li class="ml-5">
         </li>
         <li class="ml-5">
         </li>
         <li class="ml-5">
         </li>
         <li class="ml-5">
         </li>
         <li class="ml-5">
         </li>
         <li class="ml-5">
         </li>
         <form class="form-inlin pagination justify-content-end">
           <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
           <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
         </form>     

          </ul>
      </div>
    </nav>

    <?php
    while($res = mysqli_fetch_array($result)){
    echo " <div class ='container text-dark p-1'> ";

    echo "  <div class='row mt-5 bg-dark text-light'> ";
    echo    "<div class='col-4'></div>";
    echo    "<div class='col-4'><h4><span class='badge badge-dark text-light text-left'>Profile :"  .$res['id']."</span></h4></div>";
    echo    "<div class='col-4'></div>";
    echo    "</div>";

    echo    "<div class='row bg-dark text-light mt-1 p-2'>";
    echo    "<div class='col-2 text-left font-weight-bold'> Name</div>";
    echo    "<div class='col-10 text-left'>".$res['name']."</div>";
    echo    "</div>";
    echo    "<div class='row row bg-dark text-light p-2'>";
    echo    "<div class='col-2 text-left font-weight-bold'> Email</div>";
    echo    "<div class='col-10 text-left'>".$res['email']."</div>";
    echo    "</div>";
  

    }?>


    
    </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>