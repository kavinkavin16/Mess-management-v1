<?php
session_start();
if (isset($_POST["submit"])) {  
 $connect = mysqli_connect("localhost", "root", "", "mess");   
 if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
	
}
 $username = $_POST['uname'];
 $password= $_POST['psw'];
 $phonenumber = $_POST['pnum'];
 
 $sql1 = "INSERT INTO users (username,password,phonenum)
VALUES ('$username','$password','$phonenumber')";
if (!mysqli_query($connect, $sql1)) {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($connect);
	
}
else{
echo "Records entered succesfully";
}
}
 

 ?> 