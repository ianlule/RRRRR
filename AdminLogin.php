
<?php
//connection to the database
include("connect.php");


//retrieve form data
$username=$_POST['username'];
$password=$_POST['password'];


//confirm storage in variables
// echo $username."<br>";
// echo $password;


//database query
$query="SELECT * FROM admin WHERE  username='$username' AND password='$password'";
$result=mysqli_query($con,$query);
//check if the admin record exists
if ($result->num_rows>0) {
    header("Location: admin.php");
    exit();
} 
else {
?>
<script type="text/javascript">
    window.alert("Invalid Admin");
    window.location="AdminLogin.html";
</script>
<?php
}

?>
