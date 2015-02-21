<link href="../css/custom.css" rel="stylesheet">
<?php
// Make a MySQL Connection
mysql_connect("localhost", "msuthco_lunch2", "Ns#7[{)xyWXQ") or die(mysql_error());
mysql_select_db("msuthco_lunch2") or die(mysql_error());

// Retrieve all the data Week 3 - Tuesday
$Week3Meals2 = mysql_query("SELECT * FROM Lunch WHERE ID=12")
or die(mysql_error());  

echo "<div class='MobileMenu'>";
while($row = mysql_fetch_array( $Week3Meals2 )) {
	echo "<h1>Main Courses</h1>";
	echo $row['Main1']; 
	echo"<br>";  
	echo"<em>or</em>"; 
	echo"<br>";
	echo $row['Main2'];	
	echo "<h1>Dessert</h1>";
	echo $row['Pud']; 	
	}
echo "</div>";
?>