<?php
 // Set timezone
 date_default_timezone_set('UTC');
 
 // Start date
 $date = '2015-02-22';
 // End date
 $end_date = '2020-12-31';
 
 while (strtotime($date) <= strtotime($end_date)) {
 echo "hello";
 $date = date ("Y-m-d", strtotime("+28 day", strtotime($date)));
 }
 
?>
