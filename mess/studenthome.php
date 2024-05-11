<?php
$connect = mysqli_connect("localhost", "root", "", "mess");   
 if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
	
}
$day=date("l");
$day1=strtolower($day);
$table1=$day1.'breakfast';
$table2=$day1.'lunch';
$table3=$day1.'dinner';
$sql="SELECT * FROM $table1";
$result1=mysqli_query($connect,$sql);
$sql1="SELECT * FROM $table2";
$result2=mysqli_query($connect,$sql1);
$sql3="SELECT * FROM $table3";
$result3=mysqli_query($connect,$sql3);
?>
<!DOCTYPE html>	
<html>
<head>
<link rel="stylesheet" href="themes/bars-1to10.css">
<script src="jquery.js"></script>
<script src="jquery.barrating.min.js"></script>
<script src="examples.js"></script>

<style>
table,th,td{
	border:1px solid black;
}
</style>
 </head>
<body>
<table style="width:80%">
	<thead>
	<tr>
		
		<th width="10%">ITEM 1</th>
		<th width="10%">ITEM 2</th>
		<th width="10%">ITEM 3</th>
		<th width="10%">ITEM 4</th>
		<th width="10%">ITEM 5</th>
		<th width="10%">Rating</th>
	</tr>
	</thead>
	<tbody>
	<?php
	
		   
            while($row = mysqli_fetch_array($result1))  
            {  
		
         
		echo "<tr>";	
		  	
          echo"<td align='center'>"; 
		  echo $row["item1"];
		  echo"</td>";                 
		  echo"<td align='center'>"; echo $row["item2"]; 
		  echo"</td>";
		 // echo'<td> <input type="select" value='.$row['h17487'].'><br/>';
		 echo "<td align='center'>";
		 echo $row["item3"]; 
		 echo "</td>";
		 echo "<td align='center'>";
		 echo $row["item4"]; 
		 echo "</td>";
		 echo "<td align='center'>";
		 echo $row["item5"]; 
		 echo "</td>";
		 echo "<td>";
		 echo "<div id='rating'>
 <select id='example-1to10' name='rating' autocomplete='off'>
                  <option value='1'>1</option>
                  <option value='2'>2</option>
                  <option value='3'>3</option>
                  <option value='4'>4</option>
                  <option value='5'>5</option>
                  <option value='6'>6</option>
                  <option value='7' selected='selected'>7</option>
                  <option value='8'>8</option>
                  <option value='9'>9</option>
                  <option value='10'>10</option>
                </select>
 </div>";
		 echo "</td>";
	
		 
		  echo "</tr>";  
                            
                          } 

		 while($row = mysqli_fetch_array($result2))  
            {  
		
         
		echo "<tr>";	
		  	
          echo "<td align='center'>";
		  echo $row["item1"];
		  echo"</td>";                 
		  echo "<td align='center'>";
		  echo $row["item2"]; 
		  echo"</td>";
		 // echo'<td> <input type="select" value='.$row['h17487'].'><br/>';
		 echo "<td align='center'>";
		 echo $row["item3"]; 
		 echo "</td>";
		 echo "<td align='center'>";
		 echo $row["item4"]; 
		 echo "</td>";
		 echo "<td align='center'>";
		 echo $row["item5"]; 
		 echo "</td>";
		 echo "<td>";
		 echo "<div id='rating'>
 <select id='example-1to10' name='rating' autocomplete='off'>
                  <option value='1'>1</option>
                  <option value='2'>2</option>
                  <option value='3'>3</option>
                  <option value='4'>4</option>
                  <option value='5'>5</option>
                  <option value='6'>6</option>
                  <option value='7' selected='selected'>7</option>
                  <option value='8'>8</option>
                  <option value='9'>9</option>
                  <option value='10'>10</option>
                </select>
 </div>";
		 echo "</td>";
		 echo "</tr>"; 
	
			}
			
		 
		   
		  
                            
                          
						  
		 while($row = mysqli_fetch_array($result3))  
            {  
		
         
		echo "<tr>";	
		  	
          echo "<td align='center'>"; 
		  echo $row["item1"];
		  echo"</td>";                 
		  echo "<td align='center'>";
		  echo $row["item2"]; 
		  echo"</td>";
		 // echo'<td> <input type="select" value='.$row['h17487'].'><br/>';
		 echo "<td align='center'>";
		 echo $row["item3"]; 
		 echo "</td>";
		 echo "<td align='center'>";
		 echo $row["item4"]; 
		 echo "</td>";
		 echo "<td align='center'>";
		 echo $row["item5"]; 
		 echo "</td>";
		 echo "<td>";
		 echo "<div id='rating'>
 <select id='example-1to10' name='rating' autocomplete='off'>
                  <option value='1'>1</option>
                  <option value='2'>2</option>
                  <option value='3'>3</option>
                  <option value='4'>4</option>
                  <option value='5'>5</option>
                  <option value='6'>6</option>
                  <option value='7' selected='selected'>7</option>
                  <option value='8'>8</option>
                  <option value='9'>9</option>
                  <option value='10'>10</option>
                </select>
 </div>";
		 echo "</td>";
		 
	
	
		 
		  echo "</tr>";  
                            
                          }
                         
	
?>	
	
</table>
 </body>
</html>
