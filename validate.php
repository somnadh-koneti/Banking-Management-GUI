<?php
$servername='localhost';
$username='root';
$passcode='';
$db_name="sk3395_fall2022";
$conn=new mysqli($servername,$username,$passcode,$db_name,3308);
if ($conn-> connect_error)
{
    die("connection failed".$conn->connect_error);
}
else{ echo "";}
$name= $_POST['user'];
$pass=$_POST['password'];
$s="select * from admin where username= '$name' and passcode='$pass'";
$result= mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if ($num==1)
{ 
    header('location:login.php');
}
else
{
    
    echo'<script>
    window.location.href="index.php";
    alert("login failed: invalid username or passcode!!!")
    </script>';
}
?>