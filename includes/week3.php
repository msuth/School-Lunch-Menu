<?php
// Make a MySQL Connection
mysql_connect("localhost", "msuthco_lunch2", "Ns#7[{)xyWXQ") or die(mysql_error());
mysql_select_db("msuthco_lunch2") or die(mysql_error());

// Retrieve all the data from the "Week 3" table
$Week3Meals = mysql_query("SELECT * FROM Lunch WHERE Week=3 ORDER BY Date")
or die(mysql_error());  

echo "<table class='LunchTableStyle table table-bordered table-striped' cellspacing='0' cellpadding='0' width='100%'>";
echo "<tr> <th width='15%' style='text-align:center; background:#fff; border-top:solid 1px #fff; border-left:solid 1px #fff;'><th style='text-align:center;'>Main Course 1</th> <th style='text-align:center;'>Main Course 2</th> <th style='text-align:center;'>Dessert</th> </tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $Week3Meals )) {
	// Print out the contents of each row into a table
	echo "<tr><td style='text-align:center; vertical-align:middle'>"; 	echo $row['Day'];	echo "</td><td style='text-align:center; vertical-align:middle'>"; 	echo $row['Main1'];	echo "</td><td style='text-align:center; vertical-align:middle'>"; 	echo $row['Main2'];	echo "</td><td style='text-align:center; vertical-align:middle'>"; 	echo $row['Pud']; echo "</td></tr>"; 	
} 
echo "</table>";
?>
