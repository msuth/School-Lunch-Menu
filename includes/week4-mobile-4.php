<link href="../css/custom.css" rel="stylesheet">
<?php
// Make a MySQL Connection
mysql_connect("localhost", "msuthco_lunch2", "Ns#7[{)xyWXQ") or die(mysql_error());
mysql_select_db("msuthco_lunch2") or die(mysql_error());

// Retrieve all the data Week 4 - Thursday
$Week4Meals4 = mysql_query("SELECT * FROM Lunch WHERE ID=19")
or die(mysql_error());  

echo "<div class='MobileMenu'>";
while($row = mysql_fetch_array( $Week4Meals4 )) {
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