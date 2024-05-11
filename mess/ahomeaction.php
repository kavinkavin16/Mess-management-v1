<?php
session_start();
if (isset($_POST["submit"])) {  
$connect = mysqli_connect("localhost", "root", "", "mess");   
 if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
	
}
$day = $_POST['day'];
 $foodname= $_POST['foodname'];
 $item1=$_POST['item1'];
 $item2=$_POST['item2'];
 $item3=$_POST['item3'];
 $item4=$_POST['item4'];
 $item5=$_POST['item5'];
 $table=$day.$foodname;
  $sql1 = "INSERT INTO $table (item1,item2,item3,item4,item5)
VALUES ('$item1','$item2','$item3','$item4','$item5')";
if (!mysqli_query($connect, $sql1)) {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($connect);
	
}
else{
echo "Records entered succesfully";
}
}
?>