<?php
session_start();

//check if the user is logged in
if(isset($_SESSION['user'])){
    //destroy the session
    session_destroy();
    //Redirect to the login page
    header("Location: index.html");
    exit();
}
else{
    //if the user is not logged in,redirect them to the login page
    header("Location: index.html");
    exit();
}
?>