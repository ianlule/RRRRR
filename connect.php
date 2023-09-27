<?php
$con = mysqli_connect("localhost","root","","suggestion");
if(!$con){
    die("Can't connect to the database".mysqli_connect_error());
}
else{
    // echo "connected";
}
?>