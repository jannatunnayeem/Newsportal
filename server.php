<?php

session_start();



//connect to the database

$conn = mysqli_connect('localhost','root','','newsportal');





if(!$conn){
    echo "error connect";
}

//if the submit button is clicked


?>