<html>
<head>
<style>
body{
    background-color:black;
}

h1 {
    background-color: red;
}

p {
    background-color: rgb(255,0,255);
}
</style>
<?php
$hostname="localhost";
$username="root";
$password="";
$database="erp";
$con = new mysqli($hostname,$username,$password,$database);
session_start();
$facid = $_POST['facid'];
echo $caid;
$password = $_POST['password'];

     $check = "SELECT * from facultyuser WHERE facid LIKE '$facid' AND password LIKE '$password'";
     $result = $con->query($check);
	 $row = $result->fetch_assoc();
	if( $facid==$row['facid'] && $password == $row['password'])
     {
      $_SESSION['facid'] = $facid;		  
	  header('Location:http://localhost/proerp/ContactFrom_v18/facdetail.php');
     } 
	 else
	 {
		 echo "error";
	 }

 	
?>
</html>