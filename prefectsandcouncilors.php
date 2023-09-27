<?php
//connection to the database
include("connect.php");

//retrieve data form data
$name= $_POST['name'];
$suggestion=$_POST['suggestion'];

//database query
$query="INSERT INTO prefectsandcouncilors (`name`,`suggestion`) VALUES('$name','$suggestion')";

// //run the database query
$result= mysqli_query($con,$query);

if($result){
    ?>
    <script type="text/javascript">
        window.alert("Thank you for your suggestions");
        window.location="home.html";
    </script>
    <?php
}
else{
    ?>
    <script type="text/javascript">
        window.alert("Error submitting suggestions");
        window.location="home.html";
    </script>
    <?php
    mysqli_error($con);
}

mysqli_close($con);
?>