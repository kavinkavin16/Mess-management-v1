<?php
session_start();
if (isset($_POST["submit"])) {  
$connect = mysqli_connect("localhost", "root", "", "mess");   
 if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
	
}
$username = $_POST['uname'];
 $password= $_POST['psw'];
  $check = "SELECT * from users WHERE username LIKE '$username' AND password LIKE '$password'";
     $result = $connect->query($check);
	 $row = $result->fetch_assoc();
	 if($username==$row['username'] && $password == $row['password'])
	 {
		 echo "Login Success";
		 if($username=="admin")
		 {
			 header('Location:http://localhost/mess/adminhome.php');
		 }
		 else
		 {
			header('Location:http://localhost/mess/studenthome.php');
		 }
	 }
	 else
	 {
		 echo "Error";
	 }
}
?>