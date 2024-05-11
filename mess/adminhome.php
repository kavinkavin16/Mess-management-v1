<html>
<style>

input[type=text] {
   width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid white;
	background-color:white;
	
}

input[type=Add] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;

}

input[type=Add]:hover {
    background-color: #45a049;
}


input[type=Submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=Submit]:hover {
    background-color: #45a049;
}
.container {
    border-radius: 2px;
    background-color: #f2f2f2;
    padding: 20px;
}


div {
    border-radius: 0px;
    background-color: white;
    padding: 0px;
	background position:center;
	width:80%;
	background-size:cover;
}
</style>

<body bgcolor ="#f2f2f2">

<center>
 <div>
<form action="ahomeaction.php" method="post">
<br><br><br><br><br>
    <!--<label for="fname" >Testname</font></label>-->
	<p><font color="black"><font size="5px">DAY</font></font>
    <input type="text" id="day" name="day" placeholder="day pls..">
	
	
	<!--<p><font color="black"><font size="5px"></font></font>
    <input type="text" id="fname" name="Testname" placeholder="Your Testname..">-->
	
	<p><font color="black"><font size="5px">Food</font></font>
    <input type="text" id="foodname" name="foodname" placeholder="type food..">
	
	<p><font color="black"><font size="5px">Item1</font></font>
	<input type="text" id="item1" name="item1" placeholder="Enter item">
	
	<p><font color="black"><font size="5px">Item2</font></font>
	<input type="text" id="item2" name="item2" placeholder="Enter item">
	
	<p><font color="black"><font size="5px">Item3</font></font>
	<input type="text" id="item3" name="item3" placeholder="Enter item">
	
	<p><font color="black"><font size="5px">Item4</font></font>
	<input type="text" id="item4" name="item4" placeholder="Enter item">
	
	<p><font color="black"><font size="5px">Item5</font></font>
	<input type="text" id="item5" name="item5" placeholder="Enter item">
	
	<br />

<input type="submit" name="submit" />
</div></center>
</body>
</html>
